<?php

class Vote extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['user_id', 'voteable_id', 'voteable_type'];

	public function user()
    {
        return $this->belongsTo('User');
    }

    public function voteable()
    {
        return $this->morphTo();
    }

}