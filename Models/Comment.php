<?php


use Illuminate\Database\Eloquent\Model;

class Comment extends Model{
	protected $table="blog_comments";
	protected $guarded = [];

	public function blog(){
		return $this->belongsTo(Blog::class);
	}
	public function user(){
		return $this->belongsTo(User::class);
	}
}