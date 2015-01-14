<?php

class Project extends \LaravelBook\Ardent\Ardent {
	public static $rules = array(
			'name'		=> 	'required|min:4',
		);
	public static $relationsData = array(
			'tasks'		=>	array(self::HAS_MANY, 'Task'),
		);
	public static $sluggable = array();
	protected $fillable = ['name', 'slug'];

	public function tasks()
	{
		return $this->hasMany('Task');
	}
}