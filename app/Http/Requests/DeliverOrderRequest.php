<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeliverOrderRequest extends FormRequest
{

    const PIZZAS = "pizzas";
    const TOTAL = "total";
    const ADDRESS = "address";

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            self::PIZZAS => 'required',
            self::TOTAL => 'required'
        ];
    }

    public function getPizzas()
    {
        return $this->get(self::PIZZAS);
    }

    public function getTotal()
    {
        return $this->get(self::TOTAL);
    }

    public function getAddress()
    {
        return $this->get(self::ADDRESS);
    }
}
