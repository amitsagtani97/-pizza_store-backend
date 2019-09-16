<?php
/**
 * UserResource: Hemant Saini
 * Date: Tue, 17 Dec 2019 04:25:43 +0000
 */

namespace App\Services;


use App\Api\V1\Exceptions\ChoiceNotFoundException;
use App\Choice;
use App\Services\Contract\CreateChoiceContract;
use App\Services\Contract\UpdateChoiceContract;

/**
 * Class ChoiceService
 * @package App\Services
 */
class ChoiceService
{

    /**
     * @param $choiceId
     * @return Choice
     */
    public static function find($choiceId) {
        $choice = Choice::find($choiceId);
        if (!$choice) {
            throw new ChoiceNotFoundException();
        }
        return $choice;
    }

    /**
     * @return Choice[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index() {
        return Choice::all();
    }

    /**
     * @param $choiceId
     * @return Choice
     */
    public function show($choiceId) {
        return self::find($choiceId);
    }

    /**
     * @param CreateChoiceContract $contract
     * @return Choice
     */
    public function store(CreateChoiceContract $contract) {
        $choice = new Choice();
                $choice->order_id = $contract->getOrderId();
        $choice->pizza_id = $contract->getPizzaId();
        $choice->quantity = $contract->getQuantity();

        $choice->save();
        return $choice;
    }

    /**
     * @param $choiceId
     * @param UpdateChoiceContract $contract
     * @return Choice
     */
    public function update($choiceId, UpdateChoiceContract $contract) {
        $choice = self::find($choiceId);
                if ($contract->hasOrderId()) {
            $choice->order_id = $contract->getOrderId();
        }
        if ($contract->hasPizzaId()) {
            $choice->pizza_id = $contract->getPizzaId();
        }
        if ($contract->hasQuantity()) {
            $choice->quantity = $contract->getQuantity();
        }

        $choice->save();
        return $choice;
    }

    /**
     * @param $choiceId
     */
    public function delete($choiceId) {
        $choice = $this->find($choiceId);
        try {
            $choice->delete();
        } catch (\Exception $e) {
        }
    }
}
