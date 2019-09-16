<?php
/**
 * Created by PhpStorm.
 * UserResource: hemant
 * Date: 2019-07-10
 * Time: 18:52
 */

namespace App\Services\Contract;


interface ListContract
{
    public function getLimit();

    public function getOrder();

    public function getOrderBy();

    public function getSearchQuery();
}
