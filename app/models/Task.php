<?php

class Task extends \Eloquent {
	protected $fillable = ['project_id', 'name', 'slug', 'completed', 'description'];

	public static $rules = array(
		'name'			=> 'required|min:4',
		'slug'			=> 'required|unique',
		'description'	=> 'required',
	);

	public function project()
	{
		return $this->belongsTo('Project');
	}
}