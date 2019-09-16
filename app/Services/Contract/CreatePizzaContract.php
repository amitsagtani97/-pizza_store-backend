<?php

/**
 * Created by: Hemant Saini
 * Date: Tue, 17 Dec 2019 04:25:43 +0000
 */

namespace App\Services\Contract;

interface CreatePizzaContract
{
	public function getName();

	public function getDescription();

	public function getPrice();

	public function getImageLink();

	public function getSize();


}
