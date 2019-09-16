<?php

/**
 * Created by: Hemant Saini
 * Date: Tue, 17 Dec 2019 04:25:22 +0000
 */

namespace App\Services\Contract;

interface UpdateUserContract
{
	public function getDisplayName();

	public function hasDisplayName();

	public function getEmail();

	public function hasEmail();

	public function getAddress();

	public function hasAddress();

	public function getPhoneNumber();

	public function hasPhoneNumber();


}
