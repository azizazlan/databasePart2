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
    $user = factory(\App\User::class)->create();

    /* $address = new \App\Address(); */
    /* $address->address = 'No 1, Jalan Alamat, Kg. Alamat'; */
    /* $user->address()->save($address); */
    $user->address()->create([
        'address' =>
            'Persiaran Sultan Sallahuddin Abdul Aziz Shah, Presint 1, 62000 Putrajaya, Wilayah Persekutuan Putrajaya'
    ]);

    return $user;
});

Route::get('/userhasmany', function () {
    $user = factory(\App\User::class)->create();

    /* $program = new \App\Program([ */
    /*     'title' => 'Program Kasih', */
    /*     'description' => 'Description of Program Kasih', */
    /*     'user_id' => $user->id */
    /* ]); */

    /* $program->save(); */

    $user->programs()->create([
        'title' => 'Program Niaat Baik',
        'description' => 'Description of Program Niat Baik'
    ]);
});

Route::get('update/{id}', function ($id) {
    /* $user = factory(\App\User::class)->create(); */
    $user = \App\User::find($id);
    /* $user->programs()->create([ */
    /*     'title' => 'Program Niat Baik', */
    /*     'description' => 'Description of Program Niat Baik' */
    /* ]); */
    $user->programs->first()->title = 'Program Kasih Sayang Malaysia';
    $user->push();
    return $user->programs;
});

Route::get('user_role', function () {
    /* $user = factory(\App\User::class)->create(); */

    $user = \App\User::first();
    $roles = \App\Role::all();

    /* dd($roles); */
    $user->roles()->attach($roles);
});

Route::get('user_x_roles', function () {
    $user = \App\User::first();

    /* $user->roles()->attach([1, 3]); */
    $user->roles()->sync([1, 3]);
});

Route::get('user-roles', 'UsersController@index');
