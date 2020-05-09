<?php

use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$json = '
    	[
	    	{
				"id": 1,
				"title": "todo 1",
				"description": "its todo 1",
				"status": "done",
				"created_at": null,
				"updated_at": null
			},
			{
				"id": 2,
				"title": "todo 2",
				"description": "its todo 2",
				"status": "done",
				"created_at": null,
				"updated_at": null
			},
			{
				"id": 3,
				"title": "todo 3",
				"description": "its todo 3",
				"status": "done",
				"created_at": null,
				"updated_at": null
			},
			{
				"id": 4,
				"title": "todo 4",
				"description": "its todo 4",
				"status": "done",
				"created_at": null,
				"updated_at": null
			},
			{
				"id": 5,
				"title": "todo 5",
				"description": "its todo 5",
				"status": "done",
				"created_at": null,
				"updated_at": null
			},
			{
				"id": 6,
				"title": "todo 6",
				"description": "its todo 6",
				"status": "done",
				"created_at": null,
				"updated_at": null
			},
			{
				"id": 7,
				"title": "todo 7",
				"description": "its todo 7",
				"status": "done",
				"created_at": null,
				"updated_at": null
			},
			{
				"id": 8,
				"title": "todo 8",
				"description": "its todo 8",
				"status": "done",
				"created_at": null,
				"updated_at": null
			},
			{
				"id": 9,
				"title": "todo 9",
				"description": "its todo 9",
				"status": "done",
				"created_at": null,
				"updated_at": null
			},
			{
				"id": 10,
				"title": "todo 10",
				"description": "its todo 10",
				"status": "done",
				"created_at": null,
				"updated_at": null
			},
			{
				"id": 11,
				"title": "todo 11",
				"description": "its todo 11",
				"status": "done",
				"created_at": null,
				"updated_at": null
			},
			{
				"id": 12,
				"title": "todo 12",
				"description": "its todo 12",
				"status": "done",
				"created_at": null,
				"updated_at": null
			},
			{
				"id": 13,
				"title": "todo 13",
				"description": "its todo 13",
				"status": "done",
				"created_at": null,
				"updated_at": null
			},
			{
				"id": 14,
				"title": "todo 14",
				"description": "its todo 14",
				"status": "done",
				"created_at": null,
				"updated_at": null
			},
			{
				"id": 15,
				"title": "todo 15",
				"description": "its todo 15",
				"status": "done",
				"created_at": null,
				"updated_at": null
			},
			{
				"id": 16,
				"title": "todo 16",
				"description": "its todo 16",
				"status": "done",
				"created_at": null,
				"updated_at": null
			},
			{
				"id": 17,
				"title": "todo 17",
				"description": "its todo 17",
				"status": "done",
				"created_at": null,
				"updated_at": null
			},
			{
				"id": 18,
				"title": "todo 18",
				"description": "its todo 18",
				"status": "done",
				"created_at": null,
				"updated_at": null
			},
			{
				"id": 19,
				"title": "todo 19",
				"description": "its todo 19",
				"status": "done",
				"created_at": null,
				"updated_at": null
			}
		]
    	';
    	$json = json_decode($json,true);
    	$data = [];
    	foreach ($json as $key => $value) {
    		$data[] = $value;
    	}

    	\App\Todo::insert($data);
    }
}
