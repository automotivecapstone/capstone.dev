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
	    return $this->hasMany('Qa');
	}

	public function tutorials()
	{
	    return $this->hasMany('Tutorial');
	}
}