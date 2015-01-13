<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ProjectsTableSeeder extends Seeder {

	public function run()
	{
		$projects = array(
			['name' => 'Project 1', 'slug' => 'project-1', 'created_at' => new Datetime, 'updated_at' => new Datetime],
			['name' => 'Project 2', 'slug' => 'project-2', 'created_at' => new Datetime, 'updated_at' => new Datetime],
			['name' => 'Project 3', 'slug' => 'project-3', 'created_at' => new Datetime, 'updated_at' => new Datetime],
			);
		DB::table('projects')->insert($projects);
		//$faker = Faker::create();

		//foreach(range(1, 10) as $index)
		//{
		//	Project::create([

		//	]);
		//}
	}

}