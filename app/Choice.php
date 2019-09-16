<?php

/**
 * Created by: Hemant Saini
 * Date: Tue, 17 Dec 2019 04:25:43 +0000
 */

namespace App;


/**
 * Class Choice
 *
 * @package App
  * @property int $id
 * @property int $order_id
 * @property int $pizza_id
 * @property int $quantity
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Choice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Choice whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Choice wherePizzaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Choice whereQuantity($value)
*/
class Choice extends BaseModel
{

}
