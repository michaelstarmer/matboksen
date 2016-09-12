<?php
use Matboksen\Models\Recipe;
use Matboksen\Models\Task;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| This is all the routes for the web inteface.
*/

/**
* Startpages
*/
Route::get('/', [
    'uses' => 'AuthController@getSignin',
    'as' => 'auth.signin',
    'middleware' => ['guest'],
]);
Route::get('/dashboard', [
    'uses' => 'HomeController@index',
    'as' => 'home',
]);
/**
 * Alerts
 */
Route::get('/alert', function () {
    return redirect()->route('home')->with('info', 'You have signed in');
});

/**
 * Authentication
 */
Route::get('/signup', [
    'uses' => 'AuthController@getSignup',
    'as' => 'auth.signup',
    'middleware' => ['guest'],
]);
Route::post('/signup', [
    'uses' => 'AuthController@postSignup',
    'as' => 'auth.signup',
]);
Route::post('/', [
    'uses' => 'AuthController@postSignin',
]);
Route::get('/signout', [
    'uses' => 'AuthController@getSignout',
    'as' => 'auth.signout',
]);

/**
* Recipes
*/
Route::get('/recipe', [
    'uses' => 'RecipeController@newRecipe',
    'as' => 'recipe.new',
]);
Route::post('/recipe', [
    'uses' => 'RecipeController@postRecipe',
    'as' => 'recipe.post',
    'middleware' => ['auth'], 
]);
Route::get('/recipe/{singleRecipe}', [
    'uses' => 'RecipeController@getRecipe',
    'as' => 'recipes.show',
]);
Route::delete('/recipe/{singleRecipe}', function(Recipe $recipe) {
    $recipe->delete();

    return redirect('/');
});
Route::get('/recipeimage/{filename}', [
    'uses' => 'RecipeController@getRecipeImage',
    'as' => 'recipe.image'
]);
Route::post('/recipe/{singleRecipe}', [
    'uses' => 'RecipeController@ingrToShoplist',
    'as' => 'tasklist.post'
]);

/**
* Shopping list
*/
Route::get('/handleliste', [
    'uses' => 'TaskController@getTask',
    'as' => 'shoplist.index'
]);
Route::post('/task', [
    'uses' => 'TaskController@postTask',
    'as' => 'task.post'
]);
Route::delete('/task/{task}', function(Task $task) {
    $task->delete();
    return redirect('/handleliste');
});