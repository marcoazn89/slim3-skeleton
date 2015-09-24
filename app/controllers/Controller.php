<?php
namespace MyApp\Controllers;

abstract class Controller {
  protected $app;

  /**
   * Create an instance of a Controller
   * @param \Slim\App $app  An instance of the application
   */
  public function __construct(\Slim\App $app) {
    $this->app = $app;
  }
}