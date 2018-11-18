<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'store_id',
        'user_id',
        'item_category_id',
        'item_name',
        'price',
        'qty',
        'description',
        'type',
        'qr_file',
    ];

    protected $date = [
        'deleted_at'
    ];

}
