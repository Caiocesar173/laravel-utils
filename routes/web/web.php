<?php
use Illuminate\Support\Facades\Route;


Route::middleware(['BackLog:web', 'web'])->group(function() {
});