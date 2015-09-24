<?php
namespace MyApp\Libraries\Error;

class ApiError extends \MyBooBoos\ErrorTemplate {

  // Client message constants
  const INTERNAL_ERROR = 'Internal error.';
  const MISSING_PARAMS = 'One or more parameters are missing in the request. Please check your request and try again.';
  const INCORRECT_PARAMS = 'One or more parameters recieved were incorrect. Please, try again';
  const INVALID_CALL = 'Invalid API call. Please review the API documentation.';
  const BAD_CREDENTIALS = 'Unable to verify credentials.';
  const FORBIDDEN = 'Access denied.';
  const TOO_MANY = 'Request blocked. Too many API calls received. Please try again later.';
  const RESOURCE_NOT_FOUND = 'Resource not found';

  /**
   * This is done for compatibility with Whoops Pretty error handler used in DEV
   */
  public function __construct($data) {
    parent::__construct($data);
    $this->message = $data;
  }

  protected function getTEXT() {
    return __DIR__.'/../../Views/errors/api/text.php';
  }

  protected function getXML() {
    return __DIR__.'/../../Views/errors/api/xml.php';
  }

  protected function getHTML() {
    return __DIR__.'/../../Views/errors/api/html.php';
  }

  protected function getJSON() {
    return __DIR__.'/../../Views/errors/api/json.php';
  }

  public function getTag() {
    return "ApiError";
  }
}
