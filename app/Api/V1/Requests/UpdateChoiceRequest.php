<?php

/**
 * Created by: Hemant Saini
 * Date: Tue, 17 Dec 2019 04:25:43 +0000
 */

namespace App\Api\V1\Requests;

use App\Services\Contract\UpdateChoiceContract as Contract;

/**
 * Class UpdateChoiceRequest
 * @package App\Api\V1\Requests
 */
class UpdateChoiceRequest extends BaseRequest implements Contract
{
    const ORDER_ID       = 'order_id';
    const PIZZA_ID       = 'pizza_id';
    const QUANTITY       = 'quantity';


    public function rules() {
        return [
            self::ORDER_ID => 'nullable',
			self::PIZZA_ID => 'nullable',
			self::QUANTITY => 'nullable'
        ];
    }

    public function getOrderId()
    {
        return $this->input(self::ORDER_ID);
    }

    public function hasOrderId()
    {
        return $this->has(self::ORDER_ID);
    }

    public function getPizzaId()
    {
        return $this->input(self::PIZZA_ID);
    }

    public function hasPizzaId()
    {
        return $this->has(self::PIZZA_ID);
    }

    public function getQuantity()
    {
        return $this->input(self::QUANTITY);
    }

    public function hasQuantity()
    {
        return $this->has(self::QUANTITY);
    }


}
