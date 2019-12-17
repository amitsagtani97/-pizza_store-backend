<?php
/**
 * Created by: Hemant Saini
 * Date: Tue, 17 Dec 2019 04:25:43 +0000
 */


namespace App\Api\V1\Controllers;


use App\Api\V1\Requests\CreatePizzaRequest;
use App\Api\V1\Requests\UpdatePizzaRequest;
use App\Http\Resources\PizzaResource;
use App\Services\PizzaService;


/**
 * Class PizzaController
 * @package App\Api\V1\Controllers
 *
 * @property-read PizzaService $pizzaService
 */
class PizzaController extends BaseController
{
    protected $pizzaService;

    public function __construct()
    {
        $this->pizzaService = new PizzaService();
    }


    /**
     * @param PizzaService $service
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(PizzaService $service)
    {
        $pizzas = $service->index();
        return PizzaResource::collection($pizzas);
    }

    /**
     * @param $id
     * @param PizzaService $service
     * @return PizzaResource
     */
    public function show($id, PizzaService $service)
    {
        $pizza = $service->show($id);
        return new PizzaResource($pizza);
    }

    /**
     * @param CreatePizzaRequest $request
     * @param PizzaService $service
     * @return PizzaResource
     */
    public function store(CreatePizzaRequest $request, PizzaService $service)
    {
        $pizza = $service->store($request);
        return new PizzaResource($pizza);
    }

    /**
     * @param UpdatePizzaRequest $request
     * @param $id
     * @param PizzaService $service
     * @return PizzaResource
     */
    public function update(UpdatePizzaRequest $request, $id, PizzaService $service)
    {
        $pizza = $service->update($id, $request);
        return new PizzaResource($pizza);
    }

    /**
     * @param $id
     * @param PizzaService $service
     */
    public function destroy($id, PizzaService $service)
    {
        $service->delete($id);
    }
}
