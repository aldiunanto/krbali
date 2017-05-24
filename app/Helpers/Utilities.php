<?php

function currentRoute($type){
	$path  = explode('@', Route::currentRouteAction());
	$pathc = explode("\\", $path[0]);

	if($type == 'class') return strtolower(end($pathc));
	else return end($path);
}