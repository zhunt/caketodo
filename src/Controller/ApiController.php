<?php
namespace App\Controller;

use RestApi\Controller\ApiController;

/**
 * Foo Controller
 */
class FooController extends ApiController
{

    /**
     * bar method
     *
     */
    public function bar()
    {
        // your action logic

        // Set the HTTP status code. By default, it is set to 200
        $this->httpStatusCode = 200;

        // Set the response
        $this->apiResponse['you_response'] = 'your response data';
    }
}