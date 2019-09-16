<?php
/**
 * Created by: Hemant Saini
 * Date: Tue, 17 Dec 2019 04:25:43 +0000
 */


namespace App\Api\V1\Controllers;


use App\Api\V1\Requests\CreateOrderRequest;
use App\Api\V1\Requests\UpdateOrderRequest;
use App\Http\Resources\OrderResource;
use App\Services\OrderService;


/**
 * Class OrderController
 * @package App\Api\V1\Controllers
 *
 * @property-read OrderService $orderService
 */
class OrderController extends BaseController
{
    protected $orderService;

    public function __construct()
    {
        $this->orderService = new OrderService();
    }


    /**
     * @param OrderService $service
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(OrderService $service)
    {
        $orders = $service->index();
        return OrderResource::collection($orders);
    }

    /**
     * @param $id
     * @param OrderService $service
     * @return OrderResource
     */
    public function show($id, OrderService $service)
    {
        $order = $service->show($id);
        return new OrderResource($order);
    }

    /**
     * @param CreateOrderRequest $request
     * @param OrderService $service
     * @return OrderResource
     */
    public function store(CreateOrderRequest $request, OrderService $service)
    {
        $order = $service->store($request);
        return new OrderResource($order);
    }

    /**
     * @param UpdateOrderRequest $request
     * @param $id
     * @param OrderService $service
     * @return OrderResource
     */
    public function update(UpdateOrderRequest $request, $id, OrderService $service)
    {
        $order = $service->update($id, $request);
        return new OrderResource($order);
    }

    /**
     * @param $id
     * @param OrderService $service
     */
    public function destroy($id, OrderService $service)
    {
        $service->delete($id);
    }
}
