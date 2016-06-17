<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
	//Usually it will try to use the classname as its table(here is photo), but actually our table is flyer_photo, so we will override that.
	
	protected $table ='flyer_photos';

	//Set up the fillable field
	protected $fillable = ['photo'];
	/**
	 * A photo belongs to a flyer
	 * 
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
    public function flyer()
    {
       return $this->belongsTo('App\Flyer');
    }
}

//we have the photo instance and we wanna fetch the flyer.
//$photo->flyer