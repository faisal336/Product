<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $primaryKey = "id";

    protected $table = "products";

    protected $fillable = [
        'name',
        'description',
        'price',
        'remarks',
        'added_by',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',

    ];
}
