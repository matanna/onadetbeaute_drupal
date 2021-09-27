<?php

namespace Drupal\env_variables\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\env_variables\Services\DotEnvServices;

/**
 * List the user defined environment variables.
 */
class ViewEnvironmentVariablesController extends ControllerBase {

  protected $config;

  /**
   * Configuration object.
   *
   * @var \Drupal\Core\Config\ConfigFactoryInterface
   */  

  protected $env_var; 

  /**
   * Env services.
   *
   * @var \Drupal\env_variables\Services\DotEnvServices
   */

  /**
   * Constructor.
   *
   * @param \Drupal\Core\Config\ConfigFactoryInterface $config
   *   The config service.
   * @param \Drupal\env_variables\Services\DotEnvServices $env_var
   *   The env_var service.
  
   */   

  public function __construct(ConfigFactoryInterface $config,
                              DotEnvServices $env_var) {
    $this->config = $config;
    $this->env_var = $env_var;    
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('config.factory'),
      $container->get('env_variables')
     
    );
  }

  public function view_env_variables() { 
    $env_path = $this->config->get('env_variables.settings')->get('env_path');  
    $this->env_var->loadEnvFile($env_path);
    return [
      '#theme' => 'view_env_variables',
      '#result' => $_ENV,
	  ];
  }
}