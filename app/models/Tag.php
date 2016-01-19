<?php

class Tag extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	public function qas()
	{
	    return $this->belongsToMany('Qa');
	}

	public function tutorials()
	{
	    return $this->belongsToMany('Tutorial');
	}
}