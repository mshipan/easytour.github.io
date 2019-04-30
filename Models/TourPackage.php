<?php

use Illuminate\Database\Eloquent\Model;

class TourPackage extends Model{

	protected $table="toursPackage";
	protected $guarded = [];

    public function hotelPackage(){
		return $this->belongsTo(HotelPackage::class);
	}

	
}
