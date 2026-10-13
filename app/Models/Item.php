<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'name',
    'category',
    'purchase_date',
    'purchase_price',
    'warranty_until',
    'notes'
])]
class Item extends Model
{
    //
}
