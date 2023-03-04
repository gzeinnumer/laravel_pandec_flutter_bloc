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
    $data = [];
    $data[] = [
        'url' => 'api/users/insert',
        'request' => '{
    "name": "gzeinnumer3",
    "email": "gzeinnumer3@admin.com",
    "password": "12345678"
}',
        'response' => '{
    "status": 1,
    "title": "Perhatian",
    "message": "Success"
}'
    ];
    $data[] = [
        'url' => 'api/users/all',
        'request' => '-',
        'response' => '{
    "status": 1,
    "title": "Perhatian",
    "message": "Success",
    "info": {
        "total": 1
    },
    "data": [
        {
            "id": 1,
            "name": "gzeinnumer",
            "email": "gzeinnumer@admin.com",
            "email_verified_at": null,
            "password": "12345678",
            "remember_token": null,
            "created_at": "2023-02-28 17:51:15",
            "updated_at": "2023-02-28 17:51:15"
        }
    ]
}'
    ];
    $data[] = [
        'url' => 'api/users/update/1',
        'request' => '{
    "status": 1,
    "title": "Perhatian",
    "message": "Success"
}',
        'response' => '{
    "status": 1,
    "title": "Perhatian",
    "message": "Success"
}'
    ];
    $data[] = [
        'url' => 'api/users/find/1',
        'request' => '-',
        'response' => '{
    "status": 1,
    "title": "Perhatian",
    "message": "Success",
    "info": {
        "total": 1
    },
    "data": {
        "id": 1,
        "name": "gzeinnumer1",
        "email": "gzeinnumer1@admin.com",
        "email_verified_at": null,
        "password": "12345678",
        "remember_token": null,
        "created_at": "2023-03-02 17:26:32",
        "updated_at": "2023-03-02 17:26:32"
    }
}'
    ];
    $data[] = [
        'url' => 'api/users/delete/{id}',
        'request' => '-',
        'response' => '{
    "status": 1,
    "title": "Perhatian",
    "message": "Success"
}'
    ];
    $data[] = [
        'url' => 'https://github.com/gzeinnumer/laravel_pandec_flutter_bloc',
        'request' => '-',
        'response' => ''
    ];
    $data[] = [
        'url' => 'https://github.com/gzeinnumer/pandec_flutter_bloc',
        'request' => '-',
        'response' => ''
    ];
    return view('welcome', ['data' => $data]);
});
