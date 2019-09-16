<?php


namespace App\Api\V1\Requests;


use Illuminate\Foundation\Http\FormRequest;


class BaseRequest extends FormRequest
{
    public function rules() {
        return [];
    }

    public function authorize() {
        return true;
    }
}
