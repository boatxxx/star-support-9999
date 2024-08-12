<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{    protected $primaryKey = 'promotion_id';

    protected $fillable = [
    'name',
    'description',
    'start_date',
    'end_date',
    'type',
    'status',
];
protected $dates = ['start_date', 'end_date'];
protected $casts = [
    'start_date' => 'datetime',
    'end_date' => 'datetime',
];
}
