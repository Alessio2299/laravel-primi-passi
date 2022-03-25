<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        'name' => 'Homepage',
        'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eu maximus nisl. In orci tellus, mollis nec blandit eu, pellentesque a dui. Nullam lacus elit, mollis non ante tincidunt, egestas auctor metus. In scelerisque cursus sapien, non varius dolor varius sit amet. Cras malesuada justo commodo enim ornare, eu vulputate massa pharetra. Pellentesque fermentum convallis fringilla. Aenean hendrerit imperdiet laoreet. Morbi vulputate magna massa, dictum interdum ligula pulvinar fermentum. Quisque ultricies semper ipsum, vitae euismod quam dapibus lobortis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam vestibulum elementum erat, sit amet fringilla lorem mollis non. Duis et quam lorem. Pellentesque nulla sem, molestie sed feugiat a, consequat sit amet turpis."
    ];
    return view('home', $data);
});

Route::get('/contacts', function () {
    $data = [
        'name' => 'Contacts',
        'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eu maximus nisl. In orci tellus, mollis nec blandit eu, pellentesque a dui. Nullam lacus elit, mollis non ante tincidunt, egestas auctor metus. In scelerisque cursus sapien, non varius dolor varius sit amet. Cras malesuada justo commodo enim ornare, eu vulputate massa pharetra. Pellentesque fermentum convallis fringilla. Aenean hendrerit imperdiet laoreet. Morbi vulputate magna massa, dictum interdum ligula pulvinar fermentum. Quisque ultricies semper ipsum, vitae euismod quam dapibus lobortis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam vestibulum elementum erat, sit amet fringilla lorem mollis non. Duis et quam lorem. Pellentesque nulla sem, molestie sed feugiat a, consequat sit amet turpis."
    ];
    return view('home', $data);
});

Route::get('/about', function () {
    $data = [
        'name' => 'About',
        'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eu maximus nisl. In orci tellus, mollis nec blandit eu, pellentesque a dui. Nullam lacus elit, mollis non ante tincidunt, egestas auctor metus. In scelerisque cursus sapien, non varius dolor varius sit amet. Cras malesuada justo commodo enim ornare, eu vulputate massa pharetra. Pellentesque fermentum convallis fringilla. Aenean hendrerit imperdiet laoreet. Morbi vulputate magna massa, dictum interdum ligula pulvinar fermentum. Quisque ultricies semper ipsum, vitae euismod quam dapibus lobortis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam vestibulum elementum erat, sit amet fringilla lorem mollis non. Duis et quam lorem. Pellentesque nulla sem, molestie sed feugiat a, consequat sit amet turpis."
    ];
    return view('home', $data);
});

