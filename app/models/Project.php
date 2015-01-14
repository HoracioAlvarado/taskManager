<?php

class Project extends \LaravelBook\Ardent\Ardent {
	public static $rules = array(
			'name'		=> 	'required|min:4',
			'slug'		=>	'required',
		);
	
	protected $fillable = ['name', 'slug'];

	public function tasks()
	{
		return $this->hasMany('Task');
	}
}