<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$this->group(['prefix' => 'v1'], function () {
    $this->resource('products', 'Api\V1\ProductController', ['except' => ['create', 'edit']]);
});