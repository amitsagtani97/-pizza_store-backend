<?php

/**
 * Created by: Hemant Saini
 * Date: Tue, 17 Dec 2019 04:25:43 +0000
 */

namespace App\Services\Contract;

interface UpdateChoiceContract
{
	public function getOrderId();

	public function hasOrderId();

	public function getPizzaId();

	public function hasPizzaId();

	public function getQuantity();

	public function hasQuantity();


}
