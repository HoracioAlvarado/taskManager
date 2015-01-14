<?php

class Task extends \LaravelBook\Ardent\Ardent {
	protected $fillable = ['project_id', 'name', 'slug', 'completed', 'description'];

	public static $relationsData = array(
			'project'		=>	array(self::BELONGS_TO, 'Project'),
		);

	public static $rules = array(
		'name'			=> 'required|min:4',
		'description'	=> 'required',
	);

	public static $sluggable = array();

	public function project()
	{
		return $this->belongsTo('Project');
	}
}