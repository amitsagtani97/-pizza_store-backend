<?php
/**
 * Created by PhpStorm.
 * UserResource: piyushkantm
 * Date: 29/11/18
 * Time: 12:42 PM
 */

namespace App;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\BaseModel
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BaseModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BaseModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BaseModel query()
 * @mixin Builder
 */
class BaseModel extends Model
{
  use SoftDeletes;

  protected $casts = [
    'id' => 'number'
  ];

  /**
   * Magic Function to format the CarbonObjects with _dt suffix to return formatted date
   *
   * @param string $key
   * @return mixed
   */
  public function __get($key)
  {
    $dateSuffix = '_dt';
    $parts      = explode($dateSuffix, $key);
    $count      = count($parts);

    if ($parts[$count - 1] === '')
    {
      $originalKey   = substr($key, 0, -3);
      $originalValue = $this->{$originalKey};

      if ($originalValue instanceof Carbon)
      {
        return $originalValue->format('Y/m/d H:i:s');
      }
    }

    return parent::__get($key);
  }

}
