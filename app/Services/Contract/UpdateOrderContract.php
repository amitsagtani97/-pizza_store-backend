<?php

/**
 * Created by: Hemant Saini
 * Date: Tue, 17 Dec 2019 04:25:43 +0000
 */

namespace App\Services\Contract;

interface UpdateOrderContract
{
	public function getUserId();

	public function hasUserId();

	public function getTotal();

	public function hasTotal();

	public function getStatus();

	public function hasStatus();

	public function getStripeToken();

	public function hasStripeToken();


}
