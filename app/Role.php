<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

	protected $fillable=['name','description','permissions'];
    

    public function users()
    {
    	return $this->belongsToMany('User::class','role_users');
    }



    public function hasAccesss(array $permissions)
    {
        foreach ($permissions as $permission) {

            if($this->hasPermission($permission)){
                return true;
            }
            # code...
        }
        return false;


    }


   private function hasPermission(string $permission) 
    {
        $permissions[$permission] ? $permissions[$permission]: false;
    }
    

}
