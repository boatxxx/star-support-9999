<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    protected $primaryKey = 'shop_id';

    protected $fillable = [
        'name',
        'address',
        'Link_google',
        'sta',
        'Latitude',
        'Longitude'
    ];
}
