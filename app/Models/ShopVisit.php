<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopVisit extends Model
{
    use HasFactory;
    protected $fillable = [
        'shop_id',
        'visit_date',
        'employee_id',
        'notes',
    ];
    public function shop()
    {
        return $this->belongsTo(Shop::class, 'shop_id');
    }

    // ความสัมพันธ์กับ User (พนักงาน)
    public function employee()
    {
        return $this->belongsTo(User::class, 'employee_id');
    }
}
