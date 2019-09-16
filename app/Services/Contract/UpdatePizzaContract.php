<?php

/**
 * Created by: Hemant Saini
 * Date: Tue, 17 Dec 2019 04:25:43 +0000
 */

namespace App\Services\Contract;

interface UpdatePizzaContract
{
	public function getName();

	public function hasName();

	public function getDescription();

	public function hasDescription();

	public function getPrice();

	public function hasPrice();

	public function getImageLink();

	public function hasImageLink();

	public function getSize();

	public function hasSize();


}
