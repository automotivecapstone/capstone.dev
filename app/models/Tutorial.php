<?php

class Tutorial extends \Eloquent {

    protected $table = 'tutorials';

	// Add your validation rules here
	public static $rules = array(
	    'title'      => 'required|min:2|max:100',
	    'content'    => 'required|min:2|max:10000',
	    'image'		 => 'image',
	    'video'  	 => 'max:50000'
	);

	// Don't forget to fill this array
    protected $fillable = array('title', 'content', 'image', 'video');

	public function user()
    {
        return $this->belongsTo('User');
    }

    public function tags()
	{
	    return $this->belongsToMany('Tag');
	}

	public function comments()
	{
		return $this->hasMany('Comment')->orderBy('created_at', 'desc');
	}

	public function votes()
	{
		return $this->morphMany('Vote', 'voteable');
	}
}