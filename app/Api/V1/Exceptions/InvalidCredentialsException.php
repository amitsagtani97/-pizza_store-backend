<?php
/**
 * Created by PhpStorm.
 * User: hemant
 * Date: 23/08/18
 * Time: 6:54 PM
 */

namespace App\Api\V1\Exceptions;


class InvalidCredentialsException extends HttpException
{
    const ERROR_MESSAGE = "Email or Password is Invalid";

    public function __construct()
    {
        parent::__construct(self::ERROR_MESSAGE, 401);
    }
}
