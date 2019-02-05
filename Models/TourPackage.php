<?php

use Illuminate\Database\Eloquent\Model;

class TourPackage extends Model{

	protected $table="toursPackage";
	protected $guarded = [];
	// protected $fillable=[
	// 	'tour_name',
	// 	'hotelPackage_id',
	// 	'city',
	// 	'country',
	// 	'amount',
	// 	'description',
	// 	'image', 
	// ];

    public function hotelPackage(){
		return $this->belongsTo(HotelPackage::class);
	}
}
