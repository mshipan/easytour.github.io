<?php
require'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager;

// Manager::schema()->dropIfExists('users');

// Manager::schema()->create('users', function ($table) {
//     $table->increments('id');
//     $table->integer('role_id')->unsigned()->default(2);
//     $table->string('name');
//     $table->string('phone');
//     $table->string('email')->unique();
//     $table->string('password');
//     $table->string('village')->nullable();
//     $table->string('upozila')->nullable();
//     $table->string('district')->nullable();
//     $table->string('country')->nullable();
//     $table->string('zip_code')->nullable();
//     $table->string('image')->nullable();
//     $table->timestamps();
// });


// Manager::schema()->dropIfExists('roles');

// Manager::schema()->create('roles', function ($table) {
//     $table->increments('id');
//     $table->string('name');
//     $table->timestamps();
// });


//Table for Tour Package..........
<<<<<<< HEAD
Manager::schema()->dropIfExists('toursPackage');
Manager::schema()->create('toursPackage', function ($table) {
    $table->increments('id');
    $table->integer('hotelPackage_id')->unsigned();
    $table->string('tour_name');
    $table->string('days');
    $table->string('night');
    $table->string('city');
    $table->string('country');
    $table->string('amount');
    $table->string('description');
    $table->string('image')->nullable();
    $table->timestamps();
});
=======
// Manager::schema()->dropIfExists('toursPackage');
// Manager::schema()->create('toursPackage', function ($table) {
//     $table->increments('id');
//     $table->integer('hotelPackage_id')->unsigned();
//     $table->string('tour_name');
//     $table->string('city');
//     $table->string('country');
//     $table->string('amount');
//     $table->string('description');
//     $table->string('image')->nullable();
//     $table->timestamps();
// });
>>>>>>> master


// //Table for Hotel Package..........
// Manager::schema()->dropIfExists('hotelsPackage');
// Manager::schema()->create('hotelsPackage', function ($table) {
//     $table->increments('id');
//     $table->string('hotel_name');
//     $table->string('package_name');
//     $table->string('city');
//     $table->string('country');
//     $table->string('amount');
//     $table->string('description');
//     $table->string('image')->nullable();
//     $table->timestamps();
// });


//Table for Blog..........
// Manager::schema()->dropIfExists('blog');
// Manager::schema()->create('blog', function ($table) {
//     $table->increments('id');
//     $table->string('blog_name');
//     $table->longText('description');
//     $table->string('image')->nullable();
//     $table->timestamps();
// });

Manager::schema()->dropIfExists('blog_comments');
Manager::schema()->create('blog_comments', function ($table) {
    $table->increments('id');
    $table->integer('blog_id');
    $table->integer('user_id');
    $table->longText('text');
    $table->timestamps();
});


Manager::schema()->dropIfExists('blog_comments');
Manager::schema()->create('blog_comments', function ($table) {
    $table->increments('id');
    $table->integer('blog_id');
    $table->integer('user_id');
    $table->longText('text');
    $table->timestamps();
});


