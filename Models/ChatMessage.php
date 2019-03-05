<?php

use Illuminate\Database\Eloquent\Model;

class ChatMessage extends Model{
	protected $table="chat_msgs";
	protected $guarded = [];

	public function chat(){
		return $this->belongsTo(Chat::class);
	}
}