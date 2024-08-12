<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkRecord extends Model
{
    use HasFactory;
    protected $table = 'work_records';

    // กำหนดชื่อของคอลัมน์ที่สามารถกรอกข้อมูลได้ (fillable)
    protected $fillable = [
        'product_id',
        'quantity',
        'order_date',
        'description',
        'shop_id',
        'user_id',
        'status',
    ];

    // กำหนดชื่อของคอลัมน์ที่ไม่ต้องการให้กรอกข้อมูล (guarded)
    protected $guarded = [];

    // การกำหนดชนิดข้อมูลสำหรับคอลัมน์ที่เป็นวันที่
    protected $dates = [
        'order_date',
    ];
}
