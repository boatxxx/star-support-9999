<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $table = 'reservations';

    protected $fillable = [
        'product_id',
        'user_id',
        'shop_id',          // เพิ่ม shop_id ที่นี่
        'quantity',
        'reservation_date',
        'status',           // เพิ่ม status ที่นี่
    ];

}
