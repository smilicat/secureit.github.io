<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;


class Property extends Model
{
	 protected $table = "properties";

  	public function users()
    {
    return $this->belongsTo(User::class,'role_id');
    }
      public function user()
    {
    	return $this->belongsTo(User::class,'user_id');
    }
    public static function findBySlug($slug) 
    {
		return static::where('slug',$slug)->first();
    }

}
