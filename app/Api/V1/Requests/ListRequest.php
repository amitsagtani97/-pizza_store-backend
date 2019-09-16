<?php
/**
 * Created by PhpStorm.
 * UserResource: hemant
 * Date: 2019-07-10
 * Time: 18:52
 */

namespace App\Api\V1\Requests;


use App\Services\Contract\ListContract;

class ListRequest extends BaseRequest implements ListContract
{
    const LIMIT        = 'limit';
    const ORDER        = 'order';
    const ORDER_BY     = 'order_by';
    const SEARCH_QUERY = 'search_query';


    public function getLimit() {
        return $this->input(self::LIMIT);
    }

    public function getOrder() {
        return $this->input(self::ORDER);
    }

    public function getOrderBy() {
        return $this->input(self::ORDER_BY);
    }

    public function getSearchQuery() {
        return $this->input(self::SEARCH_QUERY);
    }
}
