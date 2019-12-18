<?php

/**
 * Created by: Hemant Saini
 * Date: Tue, 17 Dec 2019 04:25:43 +0000
 */

namespace App;

/**
 * Class OrderResource
 *
 * @package App
 * @property int $id
 * @property int $user_id
 * @property string $total
 * @property string $status
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property string $stripe_token
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereStripeToken($value)
 */
class Order extends BaseModel
{
    public function choices()
    {
        return $this->hasMany(Choice::class);
    }
}
