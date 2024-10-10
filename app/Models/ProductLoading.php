<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductLoading extends Model
{
    protected $fillable = ['work_record_id', 'product_id', 'vehicle_id', 'user_id', 'quantity'];
}
