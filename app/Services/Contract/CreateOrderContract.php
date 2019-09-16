<?php

/**
 * Created by: Hemant Saini
 * Date: Tue, 17 Dec 2019 04:25:43 +0000
 */

namespace App\Services\Contract;

interface CreateOrderContract
{
	public function getUserId();

	public function getTotal();

	public function getStatus();

	public function getStripeToken();


}
