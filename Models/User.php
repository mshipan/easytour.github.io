<?php

use Illuminate\Database\Eloquent\Model;

class User extends Model{
	protected $table="users";
	protected $fillable=[
		'name',
		'email',
		'phone',
		'role_id',
		'password',
		'village',
		'upozila',
		'district',
		'country',
		'zip_code',
		'image', 
	];

	protected $hidden = [
        'password',
    ];


    public function role(){
		return $this->belongsTo(Role::class);
	}
}