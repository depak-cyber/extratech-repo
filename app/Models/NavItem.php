<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubNavItem;

class NavItem extends Model
{
   protected $fillable = [
   'name',
   'status',
   ];

   public function subnavigation()
   {
    return $this->hasMany('App\Models\SubNavItem')->where('status', 'enabled');
   }
}
