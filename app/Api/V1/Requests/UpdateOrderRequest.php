<?php

/**
 * Created by: Hemant Saini
 * Date: Tue, 17 Dec 2019 04:25:43 +0000
 */

namespace App\Api\V1\Requests;

use App\Services\Contract\UpdateOrderContract as Contract;


/**
 * Class UpdateOrderRequest
 * @package App\Api\V1\Requests
 */
class UpdateOrderRequest extends BaseRequest implements Contract
{
    const USER_ID       = 'user_id';
    const TOTAL       = 'total';
    const STATUS       = 'status';
    const STRIPE_TOKEN       = 'stripe_token';


    public function rules() {
        return [
            self::USER_ID => 'nullable',
			self::TOTAL => 'nullable',
			self::STATUS => 'nullable',
			self::STRIPE_TOKEN => 'nullable'
        ];
    }

    public function getUserId()
    {
        return $this->input(self::USER_ID);
    }

    public function hasUserId()
    {
        return $this->has(self::USER_ID);
    }

    public function getTotal()
    {
        return $this->input(self::TOTAL);
    }

    public function hasTotal()
    {
        return $this->has(self::TOTAL);
    }

    public function getStatus()
    {
        return $this->input(self::STATUS);
    }

    public function hasStatus()
    {
        return $this->has(self::STATUS);
    }

    public function getStripeToken()
    {
        return $this->input(self::STRIPE_TOKEN);
    }

    public function hasStripeToken()
    {
        return $this->has(self::STRIPE_TOKEN);
    }


}
