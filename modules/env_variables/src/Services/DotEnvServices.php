<?php

namespace Drupal\env_variables\Services;

use Symfony\Component\HttpFoundation\RequestStack;
use Drupal\Core\Logger\LoggerChannelFactoryInterface;
use Dotenv\Dotenv;

/**
 * Define services for load .env file.
 */
class DotEnvServices {

  /**
   * Request object.
   *
   * @var \Symfony\Component\HttpFoundation\RequestStack
   */
  protected $request; 

   /**
   * Logger Factory.
   *
   * @var \Drupal\Core\Logger\LoggerChannelFactoryInterface
   */
  protected $logger_factory;

  /**
   * Constructor.  
   * @param \Symfony\Component\HttpFoundation\RequestStack $request
   *   The request service.
  
   */
  public function __construct(RequestStack $request, LoggerChannelFactoryInterface $logger_factory) {   
    $this->request = $request;
    $this->logger_factory = $logger_factory->get('env_variables');
  }

  /**
   * load .env file.
   */
  public function loadEnvFile($path = null) {
    $docroot = $this->request->getCurrentRequest()->server->get('DOCUMENT_ROOT');    
    try {
      $dotenv = Dotenv::createMutable($docroot . $path);
      $dotenv->load();
    } 
    catch (\Exception $e) {
      $this->logger_factory->error($e->getMessage());
    }    
  }

}
