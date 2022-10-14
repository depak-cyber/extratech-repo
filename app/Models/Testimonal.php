<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonal extends Model
{
    use HasFactory;

    //defining the testimonals table

    protected $table = 'testimonals';

    protected $fillable = [
        'title',
        'description',
        'image',
        'status',
    ];

}
