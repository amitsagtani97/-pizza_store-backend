<?php

/**
 * Created by: Hemant Saini
 * Date: Tue, 17 Dec 2019 04:25:43 +0000
 */

namespace App\Api\V1\Exceptions;


/**
 * Class PizzaNotFoundException
 * @package App\Api\V1\Exceptions
 */
class PizzaNotFoundException extends HttpException
{
    const ERROR_MESSAGE = 'PizzaResource not Found';
    const ERROR_CODE = 404;

    public function __construct($statusCode = 422)
    {
        parent::__construct(self::ERROR_MESSAGE, $statusCode);
    }
}
