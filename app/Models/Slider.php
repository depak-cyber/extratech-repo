<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

     //defining the testimonals table

     protected $table = 'sliders';

     protected $fillable = [
         'image',
         'heading',
         'subheading',
         'paragraph',
         'status'
     ];
}
