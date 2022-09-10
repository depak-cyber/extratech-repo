<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubNavItem extends Model
{
    protected $fillable = [
        'name',
        'nav_item_id',
        'status',

        ];
}
