<?php

use Illuminate\Database\Eloquent\Model;

class Blog extends Model{
	protected $table="blog";
	protected $guarded = [];

	public function comments(){
		return $this->hasMany(Comment::class,'blog_id');
	}
}