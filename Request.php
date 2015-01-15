<?php

/**
* 
*/
class Request
{
  public $url_elements;
  public $verb;
  public $parameters;
  public $format;

  public function __construct()
  {
    $this->verb = $_SERVER['REQUEST_METHOD'];
    $this->url_elements = array();
    if (isset($_SERVER['PATH_INFO'])){
      $this->url_elements = explode('/', $_SERVER['PATH_INFO']);
      echo $_SERVER['PATH_INFO'];
    }

    $this->parseIncomingParams();

    $this->format = 'json';
    if (isset($this->parameters['format'])){
      $this->format = $this->parameters['format'];
    }
    return true;
  }


  public function parseIncomingParams()
  {
    $parameters = array();

    if (isset($_SERVER['QUERY_STRING'])){
      parse_str($_SERVER['QUERY_STRING'], $parameters);
    }

    $body = file_get_contents("php://input");
    $content_type = false;
    if (isset($_SERVER['CONTENT_TYPE'])) {
      $content_type = $_SERVER['CONTENT_TYPE'];
    }

    switch ($content_type) {
      case 'application/json':
      $body_params = json_decode($body);
      if ($body_params){
        foreach ($body_params as $param_name => $param_value) {
          $parameters[$param_name] = $param_value;
        }
      }
      $this->format = 'json';
      break;

      case 'application/x-www-form-urlencoded':
      parse_str($body, $postvars);
      foreach ($postvars as $key => $value) {
        $parameters[$key] = $value;
      }
      $this->format = "html";
      break;

      default:
      # code...
      break;
    }
  }

}


?>