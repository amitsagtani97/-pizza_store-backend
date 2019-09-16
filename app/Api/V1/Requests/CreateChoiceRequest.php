<?php

/**
 * Created by: Hemant Saini
 * Date: Tue, 17 Dec 2019 04:25:43 +0000
 */

namespace App\Api\V1\Requests;

use App\Services\Contract\CreateChoiceContract as Contract;


/**
 * Class CreateChoiceRequest
 * @package App\Api\V1\Requests
 */
class CreateChoiceRequest extends BaseRequest implements Contract
{
    const ORDER_ID = 'order_id';
    const PIZZA_ID = 'pizza_id';
    const QUANTITY = 'quantity';


    public function rules()
    {
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

    public function getPizzaId()
    {
        return $this->input(self::PIZZA_ID);
    }

    public function getQuantity()
    {
        return $this->input(self::QUANTITY);
    }


}
