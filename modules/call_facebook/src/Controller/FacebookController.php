<?php

namespace Drupal\call_facebook\Controller;

use Exception;
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Drupal\call_facebook\Repository\FacebookTokenRepository;
use Laminas\Diactoros\Response\RedirectResponse as ResponseRedirectResponse;

/**
 * This controller manage the facebook api connexion for display posts on the website
 */
class FacebookController extends ControllerBase
{
    /**
     * Constants for Facebook connexion
     */
    public const CLIENT_ID = 816116955749559;
    public const USER_ID = 4139780649478282;
    public const CLIENT_SECRET = '7693965bb025006ae3445cab2a05d32e';
    public const REDIRECT_URI = 'https%3A%2F%2Flocalhost%2Fonadetbeaute%2F';
    public const PAGE_ID = 100267494769752;

    /**
     * Drupal Client Http
     *
     * @var Drupal::httpClient
     */
    private $client;

    /**
     * FacebookTokenRepository
     *
     * @var FaceBookTokenRepository
     */
    private $facebookTokenRepository;

    /**
     * Bearer token
     *
     * @var string
     */
    private $token;

    public function __construct()
    {
        $this->client = \Drupal::httpClient();
        $this->facebookTokenRepository = new FacebookTokenRepository();
    }

    /**
     * This function does the process for get all the access tokens (user and page) allowing to connect to facebook api
     *
     * @param string $code The code send by facebook api in the request uri (GET parameter)
     * 
     * @return void
     */
    public function getAccessToken($code) 
    {
        try {
            //Get an access token with url code
            $response = $this->client->request(
                'GET',
                'https://graph.facebook.com/v6.0/oauth/access_token?redirect_uri=' . self::REDIRECT_URI . '&state=987654321&client_id=' . self::CLIENT_ID . '&client_secret=' . self::CLIENT_SECRET . '&code=' . $code,
                [
                    'headers' => [
                        'Accept' => 'application/json',
                    ]
                ]
            );

            $accessToken = json_decode($response->getBody(), true)['access_token'];
            
        } catch (Exception $e) {
            \Drupal::messenger()->addWarning('La connexion avec facebook n\' a pas fonctionné');
            return new RedirectResponse('/onadetbeaute');
        }
        
        try {
            //Get an access token long life
            $response = $this->client->request(
                'GET',
                'https://graph.facebook.com/v6.0/oauth/access_token?grant_type=fb_exchange_token&client_id=' . self::CLIENT_ID . '&client_secret=' . self::CLIENT_SECRET . '&fb_exchange_token=' . $accessToken,
                [
                    'headers' => [
                        'Accept' => 'application/json',
                    ]
                ]
            );

            $accessTokenLong = json_decode($response->getBody(), true)['access_token'];
            
        } catch (Exception $e) {
            \Drupal::messenger()->addWarning('La connexion avec facebook n\' a pas fonctionné');
            return new RedirectResponse('/onadetbeaute');
        }
        
        try {
            //Get an access token for page onadetbeaute
            $response = $this->client->request(
                'GET',
                'https://graph.facebook.com/v6.0/' . self::USER_ID . '/accounts?access_token=' . $accessTokenLong,
                [
                    'headers' => [
                        'Accept' => 'application/json',
                    ]
                ]
            );

            $pageTokenLong = json_decode($response->getBody(), true)['data'][0]['access_token'];
            
            $this->facebookTokenRepository->setToken($pageTokenLong);
            
        } catch (Exception $e) {
            \Drupal::messenger()->addWarning('La connexion avec facebook n\' a pas fonctionné');
            return new RedirectResponse('/onadetbeaute');
        }
 
    }

    /**
     * This function get posts from  the page OnadetBeaute
     *
     * @return array
     */
    public function getPosts()
    {
        //Get the token in the database
        $this->token = $this->facebookTokenRepository->getToken()['page_access_token_long'];
        
        $response = $this->client->request(
            'GET',
            'https://graph.facebook.com/v12.0/' . self::PAGE_ID . '/published_posts',
            [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->token,
                ]
            ]
        );

        $posts = json_decode($response->getBody(), true);

        $postsSorted = $this->filterPosts($posts);
    
        return $postsSorted ;
    }

    /**
     * This function sorts posts for keep only posts those with a picture
     *
     * @param [type] $posts
     * @return void
     */
    private function filterPosts($posts)
    {
        $postsSorted['data'] = [];

        foreach ($posts['data'] as $post) {

            $response = $this->client->request(
                'GET',
                'https://graph.facebook.com/v12.0/' . $post['id'] . '?fields=picture,story_tags',
                [
                    'headers' => [
                        'Authorization' => 'Bearer ' . $this->token,
                    ]
                ]
            );
            if (isset(json_decode($response->getBody(), true)['picture']) 
                //&& in_array('#onadetbeaute.com', json_decode($response->getBody(), true)['story_tags'])
            ) {
                $postsSorted['data'][] = $post; 
            }
        }

        return $postsSorted;
    }

}