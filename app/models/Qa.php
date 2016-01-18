<?php

class Qa extends \Eloquent {

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

    public function comments()
	{
	    return $this->hasMany('Comment');
	}

	public function tags()
	{
	    return $this->hasMany('Tag');
	}


}