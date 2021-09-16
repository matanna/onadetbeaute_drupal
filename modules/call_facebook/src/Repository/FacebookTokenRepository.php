<?php

namespace Drupal\call_facebook\Repository;

/**
 * This class interact with the database (facebook_token table) to manage and store access token
 */
class FacebookTokenRepository
{
    //Get access token
    public function getToken()
    {
        $result = \Drupal::database()->queryRange('SELECT id, page_access_token_long FROM facebook_token ft WHERE id = 1', 0, 1)->fetch(\PDO::FETCH_ASSOC);
        
        //if access token exists
        if ($result) {
            return $result; 
        }        
    }

    //Store new access token
    public function setToken($token)
    {
        //Open connexion with database
        $connection = \Drupal::service('database');

        $lastToken = $this->getToken();
        
        if (!$lastToken) {
            
            $result = $connection->insert('facebook_token')
            ->fields(
                [
                    'id' => 1,
                    'page_access_token_long' => $token,
                ]
            )
            ->execute();
            

        } else {
            
            $result = $connection->update('facebook_token')
                ->fields(
                [
                    'page_access_token_long' => $token,
                ])
                ->condition('id', 1)
                ->execute();
        }
        
        return $result;          
    }
}