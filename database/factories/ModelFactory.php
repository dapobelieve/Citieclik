<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
// $factory->define(App\User::class, function (Faker\Generator $faker) {
//     static $password;

//     return [
//         'name' => $faker->name,
//         'email' => $faker->unique()->safeEmail,
//         'password' => $password ?: $password = bcrypt('secret'),
//         'remember_token' => str_random(10),
//     ];
// });

//my favorite slug function ;)
function slugIt($slug)
{
    $lettersNamesSpaces = '/[^\-\s\pN\pL]+/u';
    $spacesHypens = '/[\-\s]+/';

    $slug = preg_replace($lettersNamesSpaces, '', mb_strtolower($slug, 'UTF-8'));

    $slug = preg_replace($spacesHypens, '-', $slug);

    $slug = trim($slug, '-');

    return $slug;
};

$factory->define(App\Subcategory::class, function (Faker\Generator $faker) {
    $cat = mt_rand(1, 11);
    $title = $faker->text(9);
    $slug = slugIt($title);


    return [
        'category_id' => $cat,
        'sub_category' => $title,
        'slug' => $slug,
    ];
});

$factory->define(App\Service::class, function (Faker\Generator $faker) {

	// here i try to populate the srvices table so i can test
	// the isotope plugin, i usedfakerto generate the desired
	// data for each field, and slugged the life with my slug function


	$cat = mt_rand(1, 11);
	$state = mt_rand(1, 36);
	$loc = mt_rand(37, 700);
	$scat = mt_rand(1, 3);
	$title = $faker->text(30);
	$slug = slugIt($title);


	//God thank you for this ;)
    return [
        'title' => $title,
        'user_id' => 1,
        'category_id' => $cat,
        'sub_category_id' => $scat,
        'state_id' => $state,
        'location_id' => $loc,
        'description' => $faker->sentence(30),
        'type' => 'p',
        'slug' => $slug,
    ];
});
