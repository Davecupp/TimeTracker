<?php

 function getCategories($id) {

 	return [
 		[
 			'id' => 1,
 			'name' => 'Web Development',
 			'client_id' => $id,
 			'rate' => 75
 		],

 		[
 			'id' => 2,
 			'name' => 'Design Services',
 			'client_id' => $id,
 			'rate' => 60
 		],

 		[
 			'id' => 1,
 			'name' => 'Quality Control',
 			'client_id' => $id,
 			'rate' => 25
 		]

 	];

 };

?>