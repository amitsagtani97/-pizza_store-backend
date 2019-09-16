<?php

/**
 * Created by: Hemant Saini
 * Date: Tue, 17 Dec 2019 04:25:43 +0000
 */

namespace App;

/**
 * Class PizzaResource
 *
 * @package App
  * @property int $id
 * @property string $name
 * @property string $description
 * @property string $price
 * @property string $image_link
 * @property string $size
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pizza whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pizza whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pizza whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pizza wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pizza whereImageLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pizza whereSize($value)
*/
class Pizza extends BaseModel
{

}
