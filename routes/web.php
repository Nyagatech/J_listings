<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

Route::resource('jobs', JobController::class); // This creates all the necessary resource routes for jobs
