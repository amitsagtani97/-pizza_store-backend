<?php

/**
 * Created by: Hemant Saini
 * Date: Tue, 17 Dec 2019 04:25:43 +0000
 */

namespace App\Api\V1\Requests;

use App\Services\Contract\UpdatePizzaContract as Contract;


/**
 * Class UpdatePizzaRequest
 * @package App\Api\V1\Requests
 */
class UpdatePizzaRequest extends BaseRequest implements Contract
{
  const NAME = 'name';
  const DESCRIPTION = 'description';
  const PRICE = 'price';
  const IMAGE_LINK = 'image_link';
  const SIZE = 'size';


  public function rules()
  {
    return [
      self::NAME => 'nullable',
      self::DESCRIPTION => 'nullable',
      self::PRICE => 'nullable',
      self::IMAGE_LINK => 'nullable',
      self::SIZE => 'nullable'
    ];
  }

  public function getName()
  {
    return $this->input(self::NAME);
  }

  public function hasName()
  {
    return $this->has(self::NAME);
  }

  public function getDescription()
  {
    return $this->input(self::DESCRIPTION);
  }

  public function hasDescription()
  {
    return $this->has(self::DESCRIPTION);
  }

  public function getPrice()
  {
    return $this->input(self::PRICE);
  }

  public function hasPrice()
  {
    return $this->has(self::PRICE);
  }

  public function getImageLink()
  {
    return $this->input(self::IMAGE_LINK);
  }

  public function hasImageLink()
  {
    return $this->has(self::IMAGE_LINK);
  }

  public function getSize()
  {
    return $this->input(self::SIZE);
  }

  public function hasSize()
  {
    return $this->has(self::SIZE);
  }


}
