<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airtime extends Model
{
   protected $table ='airtimes';

   public $primaryKey = 'id';

   public $timestamps =true;

}
