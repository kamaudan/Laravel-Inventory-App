<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wholesale extends Model
{
   protected $table ='wholesales';

   public $primaryKey = 'id';

   public $timestamps =true;

}
