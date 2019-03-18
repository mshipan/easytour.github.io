<?php

use Illuminate\Database\Eloquent\Model;

class Booking extends Model{
	protected $table="booking";
	protected $guarded = [];

	public function booking(){
		return $this->belongsTo(Role::class);
	}
}