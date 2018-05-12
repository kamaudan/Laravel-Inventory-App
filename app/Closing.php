<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Closing extends Model
{
   protected $table ='closings';

   public $primaryKey = 'id';

   public $timestamps =true;
}

