<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategories extends Model
{
    use HasFactory;
    protected $table='sub-categories';

    protected $fillable=[

        'name',
        'slug',
        'parent_category',
        'image',

    ];
}
