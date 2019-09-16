<?php
/**
 * UserResource: Hemant Saini
 * Date: Tue, 17 Dec 2019 04:25:43 +0000
 */

namespace App\Services;

use App\Api\V1\Exceptions\PizzaNotFoundException;
use App\Pizza;
use App\Services\Contract\CreatePizzaContract;
use App\Services\Contract\UpdatePizzaContract;

/**
 * Class PizzaService
 * @package App\Services
 */
class PizzaService
{

    /**
     * @param $pizzaId
     * @return Pizza
     */
    public static function find($pizzaId) {
        $pizza = Pizza::find($pizzaId);
        if (!$pizza) {
            throw new PizzaNotFoundException();
        }
        return $pizza;
    }

    /**
     * @return Pizza[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index() {
        return Pizza::all();
    }

    /**
     * @param $pizzaId
     * @return Pizza
     */
    public function show($pizzaId) {
        return self::find($pizzaId);
    }

    /**
     * @param CreatePizzaContract $contract
     * @return Pizza
     */
    public function store(CreatePizzaContract $contract) {
        $pizza = new Pizza();
                $pizza->name = $contract->getName();
        $pizza->description = $contract->getDescription();
        $pizza->price = $contract->getPrice();
        $pizza->image_link = $contract->getImageLink();
        $pizza->size = $contract->getSize();

        $pizza->save();
        return $pizza;
    }

    /**
     * @param $pizzaId
     * @param UpdatePizzaContract $contract
     * @return Pizza
     */
    public function update($pizzaId, UpdatePizzaContract $contract) {
        $pizza = self::find($pizzaId);
                if ($contract->hasName()) {
            $pizza->name = $contract->getName();
        }
        if ($contract->hasDescription()) {
            $pizza->description = $contract->getDescription();
        }
        if ($contract->hasPrice()) {
            $pizza->price = $contract->getPrice();
        }
        if ($contract->hasImageLink()) {
            $pizza->image_link = $contract->getImageLink();
        }
        if ($contract->hasSize()) {
            $pizza->size = $contract->getSize();
        }

        $pizza->save();
        return $pizza;
    }

    /**
     * @param $pizzaId
     */
    public function delete($pizzaId) {
        $pizza = $this->find($pizzaId);
        try {
            $pizza->delete();
        } catch (\Exception $e) {
        }
    }
}
