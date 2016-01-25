<?php

class Comment extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	public function user()
    {
        return $this->belongsTo('User');
    }

    public function tutorial()
    {
    	return $this->belongsTo('Tutorial')->orderBy('created_at', 'desc');
    }

    public function qa()
    {
    	return $this->belongsTo('Qa')->orderBy('created_at', 'desc');
    }

    

}