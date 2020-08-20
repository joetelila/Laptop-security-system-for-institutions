<?php 
use Illuminate\Support\Facades\Route;
use Josseph\SqlFetcher\Migration;

Route::get("/fetcher" , function(Josseph\SqlFetcher\Migration $migration) {
	// $migrator = resolve(Josseph\SqlFetcher\Migration::class);
	ddd($migration);
	
	// $migration = new Migration();
	// return $migration->get_content();

	// return resolve(Josseph)
});