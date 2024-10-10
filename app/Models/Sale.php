<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    // กำหนดชื่อของตาราง
    protected $table = 'sales';

    // กำหนดฟิลด์ที่สามารถทำการกรอกข้อมูลได้
    protected $fillable = [
        'shop_id',
        'product_id',
        'total_price',
        'sale_date',
        'user_id',
    ];

    // สร้างความสัมพันธ์กับโมเดล Shop
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    // สร้างความสัมพันธ์กับโมเดล Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // สร้างความสัมพันธ์กับโมเดล User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

