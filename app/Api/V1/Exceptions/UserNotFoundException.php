<?php

/**
 * Created by: Hemant Saini
 * Date: Tue, 17 Dec 2019 04:25:22 +0000
 */

namespace App\Api\V1\Exceptions;


/**
 * Class UserNotFoundException
 * @package App\Api\V1\Exceptions
 */
class UserNotFoundException extends HttpException
{
    const ERROR_MESSAGE = 'UserResource not Found';
    const ERROR_CODE = 404;

    public function __construct($statusCode = 422)
    {
        parent::__construct(self::ERROR_MESSAGE, $statusCode);
    }
}
