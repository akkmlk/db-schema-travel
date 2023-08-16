<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarsType extends Model
{
    use HasFactory;

    protected $table = 'cars_type';

    protected $fillable = [
        'type',
        'height',
        'car_type_id',
        'merk',
    ];
}
