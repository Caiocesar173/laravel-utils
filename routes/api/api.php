<?php
use Illuminate\Support\Facades\Route;


Route::middleware(['BackLog:web', 'api'])->group(function() {
    
});