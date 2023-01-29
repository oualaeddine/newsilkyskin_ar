<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

/**
 * Class Order
 * @package App\Models
 * @version June 6, 2021, 9:57 am UTC
 *
 * @property Collection $orderProducts
 * @property string $yal_tracking
 * @property string $name
 * @property string $phone
 * @property string $address
 * @property string $wilaya
 * @property integer $id_mairie
 * @property number $discount
 * @property number $delivery_price
 * @property string $comments
 * @property string $last_status
 */
class Order extends Model
{


    public $table = 'orders';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'yal_tracking',
        'name',
        'phone',
        'store_id',
        'address',
        'wilaya',
        'id_mairie',
        'discount',
        'delivery_price',
        'comments',
        'last_status',
        'alert_date',
        'visitor_id',
        'shipping'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'yal_tracking' => 'string',
        'name' => 'string',
        'phone' => 'string',
        'address' => 'string',
        'wilaya' => 'string',
        'id_mairie' => 'integer',
        'discount' => 'float',
        'delivery_price' => 'float',
        'comments' => 'string',
        'last_status' => 'string',
        'created_at' => "datetime:Y-m-d",
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'yal_tracking' => 'nullable|string|max:255',
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:255',
        'address' => 'nullable|string|max:255',
        'wilaya' => 'nullable|string|max:255',
        'id_mairie' => 'nullable',
        'discount' => 'required|numeric',
        'delivery_price' => 'required|numeric',
        'comments' => 'nullable|string',
        'last_status' => 'required|string|max:255',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return HasMany
     **/
    public function orderProducts()
    {
        return $this->hasMany(OrderProduct::class, 'order_id');
    }
}
