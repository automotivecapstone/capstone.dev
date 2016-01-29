<?php

class Qa extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'question'   => 'required|min:2|max:100',
	    'content'    => 'required|min:2|max:10000',
	    'image'		 => 'image',
	    'video'  	 => 'max:50000'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	public function user()
    {
        return $this->belongsTo('User');
    }

    public function comments()
	{
	    return $this->hasMany('Comment')->orderBy('created_at', 'desc');
	}

	public function tags()
	{
	    return $this->belongsToMany('Tag');
	}

	public function votes()
	{
		return $this->morphMany('Vote', 'voteable');
	}

	public function voteTotal($type)
	{
		$total = 0;

		foreach($this->votes as $vote)
		{
			if($type == 'upVote' && $vote->vote == 1) {
				$total++;
			} else if ($type == 'downVote' && $vote->vote == -1){
				$total++;
			}
		}

		return $total;
	}
	
}