<?php
namespace MyApp\Controllers;

use \MyApp\Libraries\Error\ApiError;

class SampleController extends Controller {
  public function success($request, $response, $args) {
    return $response->write(json_encode([
      'name' => $args['name'],
      'job'  => $request->getParam('job')
    ]));
  }

  public function fail($request, $response, $args) {
    try {
      $this->app->mysql->table("doesn't exist")->insert([
        'but'  => 'this is',
        'just' => 'an example'
      ]);
    }
    catch(\Exception $e) {
      // Lets actually fail with a BooBoo exception
      throw new \Exception\BooBoo(
        new ApiError(ApiError::INVALID_CALL),
        $response->withStatus(400)
      );
    }
  }

  public function whoops($request, $response, $args) {
    $this->nonesense('a');
  }
}