<?php
/**
 * UserResource: Hemant Saini
 * Date: Tue, 17 Dec 2019 04:25:43 +0000
 */

namespace App\Services;


use App\Api\V1\Exceptions\OrderNotFoundException;
use App\Order;
use App\Services\Contract\CreateOrderContract;
use App\Services\Contract\UpdateOrderContract;

/**
 * Class OrderService
 * @package App\Services
 */
class OrderService
{

    /**
     * @param $orderId
     * @return Order
     */
    public static function find($orderId) {
        $order = Order::find($orderId);
        if (!$order) {
            throw new OrderNotFoundException();
        }
        return $order;
    }

    /**
     * @return Order[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index() {
        return Order::all();
    }

    /**
     * @param $orderId
     * @return Order
     */
    public function show($orderId) {
        return self::find($orderId);
    }

    /**
     * @param CreateOrderContract $contract
     * @return Order
     */
    public function store(CreateOrderContract $contract) {
        $order = new Order();
                $order->user_id = $contract->getUserId();
        $order->total = $contract->getTotal();
        $order->status = $contract->getStatus();
        $order->stripe_token = $contract->getStripeToken();

        $order->save();
        return $order;
    }

    /**
     * @param $orderId
     * @param UpdateOrderContract $contract
     * @return Order
     */
    public function update($orderId, UpdateOrderContract $contract) {
        $order = self::find($orderId);
                if ($contract->hasUserId()) {
            $order->user_id = $contract->getUserId();
        }
        if ($contract->hasTotal()) {
            $order->total = $contract->getTotal();
        }
        if ($contract->hasStatus()) {
            $order->status = $contract->getStatus();
        }
        if ($contract->hasStripeToken()) {
            $order->stripe_token = $contract->getStripeToken();
        }

        $order->save();
        return $order;
    }

    /**
     * @param $orderId
     */
    public function delete($orderId) {
        $order = $this->find($orderId);
        try {
            $order->delete();
        } catch (\Exception $e) {
        }
    }
}
