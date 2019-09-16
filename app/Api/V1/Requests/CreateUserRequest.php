<?php

/**
 * Created by: Hemant Saini
 * Date: Tue, 17 Dec 2019 04:25:22 +0000
 */

namespace App\Api\V1\Requests;

use App\Services\Contract\CreateUserContract as Contract;


/**
 * Class CreateUserRequest
 * @package App\Api\V1\Requests
 */
class CreateUserRequest extends BaseRequest implements Contract
{
    const DISPLAY_NAME = 'display_name';
    const EMAIL = 'email';
    const ADDRESS = 'address';
    const PHONE_NUMBER = 'phone_number';


    public function rules()
    {
        return [
            self::DISPLAY_NAME => 'nullable',
            self::EMAIL => 'nullable',
            self::ADDRESS => 'nullable',
            self::PHONE_NUMBER => 'nullable'
        ];
    }

    public function getDisplayName()
    {
        return $this->input(self::DISPLAY_NAME);
    }

    public function getEmail()
    {
        return $this->input(self::EMAIL);
    }

    public function getAddress()
    {
        return $this->input(self::ADDRESS);
    }

    public function getPhoneNumber()
    {
        return $this->input(self::PHONE_NUMBER);
    }


}
