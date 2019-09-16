<?php

/**
 * Created by: Hemant Saini
 * Date: Tue, 17 Dec 2019 04:25:22 +0000
 */

namespace App\Services\Contract;

interface CreateUserContract
{
	public function getDisplayName();

	public function getEmail();

	public function getAddress();

	public function getPhoneNumber();


}
