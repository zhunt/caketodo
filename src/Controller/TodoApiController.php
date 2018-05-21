<?php
/**
 * Created by PhpStorm.
 * User: zolta
 * Date: 5/21/2018
 * Time: 6:19 PM
 */
namespace App\Controller;

use RestApi\Controller\ApiController;

/**
 * Foo Controller
 */
class TodoApiController extends ApiController
{

    /**
     * bar method
     *
     */
    public function listAll()
    {
        // your action logic

        // Set the HTTP status code. By default, it is set to 200
        $this->httpStatusCode = 200;

        // Set the response
        $this->apiResponse['todos'] = [
            ['name' => 'item 1', 'done' => false ],
            ['name' => 'item 2', 'done' => true ],
            ['name' => 'item 3', 'done' => false ]
        ];
    }
}