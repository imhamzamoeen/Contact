<?php

use Illuminate\Http\Request;
use haamzaaay\contact\Http\Controller\contactController;

Route::group(['namespace' => 'haamaaay/contact/Http/Controller'], function () {
    Route::get('contact',[contactController::class,'index'])->name('contact_index');
    Route::post('contact',[contactController::class,'store'])->name('contact_store');
});
