<?php

use Illuminate\Database\Eloquent\Model;

class Chat extends Model{
	protected $table="chats";
	protected $guarded = [];

	public function chatMessages(){
		return $this->hasMany(ChatMessage::class,'chat_id');
	}

	public function user(){
		return $this->belongsTo(User::class,'user_1');
	}
}