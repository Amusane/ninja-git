<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PostsController;
use App\Models\Country;
use App\Models\Post;
use App\Models\User;
use App\Models\Role;
use App\Models\Photo;
use App\Models\Tag;
use Illuminate\Support\Carbon;


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




/**
 * DATABASE Raw SQL Queries
 */
// Route::get('/', function () {
//     return view('welcome');
// });

/**
 * DATABASE Raw SQL Queries
 */

Route::get('insert', function(){
    // DB::insert('insert into countries(name) values(?)', ['USA']);
    // DB::insert('insert into countries(name) values(?)', ['Somaliland']);
    // DB::insert('insert into countries(name) values(?)', ['Ethopia']);
    // DB::insert('insert into countries(name) values(?)', ['DJbuti']);


        // $user_roles = new Role;
        // $user_roles->name = 'customer';
        // $user_roles->save();

    $country = new Post;
    $country->title = 'first title';
    $country->content = 'This is the content of the first post';
    $country->save();

    $country = new Post;
    $country->title = 'second title';
    $country->content = 'This is the content of the second post';
    $country->save();

    $country = new Post;
    $country->title = 'third title';
    $country->content = 'This is the content of the third post';
    $country->save();

    $country = new Post;
    $country->title = 'fourth title';
    $country->content = 'This is the content of the fourth post';
    $country->save();
});


Route::get('/update', function(){
    $updated = DB::update('UPDATE posts SET title = ?, id = ?, updated_at = ? WHERE id = ?', ['Second Laravel', 4, now(), 4]);
    return $updated;
});

// Route::get('/delete', function(){
//     $deleted = DB::delete('DELETE FROM posts WHERE id = ?', [1]);

//     return ($deleted) ? "Deleted Successfully" : "Failed! no record to delete";
// });

// Route::get('/about', function() {
//     return "Hello this is the about page";
// });

// Route::get('/posts', function() {
//     return "This is the Contacts for this page";
// });

// Route::get('/post/{id}', function($id = null) {
//     return ($id) ? "This is post No " . $id : "Welcome to the posts page";
// });

// Route::get('admin/posts/example', array('as' => 'admin.home', function() {
//     $url  = route('admin.home');

//     return $url;
// }));

// Route::get('/posts/{id}/{name}', [PostsController::class, 'index']);

// Route::resource('posts', 'App\Http\Controllers\PostsController');

// Route::get('/contact', 'App\Http\Controllers\PostsController@contact');

// Route::get('post/{id}/{name}', 'App\Http\Controllers\PostsController@show_post');

// // Route::get('user/{username}/{password}', 'App\Http\Controllers\PostsController@user_details');
// Route::get('user/{username}/{password}', function($username, $password){
//     return view('user', ['username', $username ]);
// });



/**
 * ELOQUENT or ORM  
 */
 
// Route::get('/findwhere', function(){
//     return  Post::where('id', [3])->orderBy('id', 'desc')->take(3)->get();

// });

// Route::get('findmore', function(){
//     return Post::findOrFail(1);

// });

// Route::get('findmore', function(){
//     return Post::where('id', '>', 2)->firstOrFail();
// });


// Route::get('/basicinsert', function(){
//     $posts = Post::find(7);

//     $posts->title = 'Edited Title Again';
//     $posts->content = 'Content is altered as well';

//     $posts->save();
// });

// Route::get('/basicinsert2', function(){
//     Post::create(['title' => 'title here', 'content' => 'Content goes here']);
// });

// Route::get('/updatewhere', function(){
//     return Post::where(['id' => 4, 'is_admin' => 0])->update(['title' => 'Another Update', 'Content' => 'Another Content for update goes here.']);
// });

// Route::get('/delete', function(){
//     return Post::destroy(3, 5, 6);
// });

// Route::get('deletewhere', function(){
//     return Post::where('id', 8)->delete();
// });

// Route::get('softdelete', function(){
//     return Post::find(7)->delete();
// });

// Route::get('readsoftdeleted', function(){
//     return Post::withTrashed()->where('id', 1)->get();
// });

// Route::get('readonlysoftdeleted', function(){
//     return Post::onlyTrashed()->where('id', )->get();
// });

// Route::get('restoreDeleted', function(){
//     return Post::withTrashed()->restore();
// });

// Route::get('forcedelete', function(){
//     return Post::onlyTrashed()->forceDelete();
// });


// Route::get('insertuser', function(){
//     $user = new User;
//     $user->name = 'Abdulsamad Mohammed';
//     $user->email = 'email@gmail.com';
//     $user->password = 'password';

//     $user->save();
// });

/**
 * ELOQUENT Relationships  
 */


//  // One to one relationship
// Route::get('/user/{id}/post', function($id){
//     return  User::find($id)->post;

// });

// Route::get('post/{id}/user', function(){
//     return Post::find(3)->user->name;
// });


// // One to many relationship.
// Route::get('user/{id}/posts', function(){
//     $user =  User::find(1);
//     $list = "<ul>";
//     foreach($user->posts as $post){
//         $list .= "<li>" . $post->title . "</li>";
//     }

//     $list .= "</ul>";

//     return $list;
// });


// Many to many relationship
// Route::get('user/{id}/role', function($id){

//     $user = User::find($id)->roles()->orderBy('id', 'desc')->get();
//     return $user;


//     // foreach($user->roles as $role){
//     //     return $role->name;
//     // }
// });

// Route::get('/role/{id}/user', function($id){
//     return Role::find($id)->users()->orderBy('id', 'desc')->get();
// });

// Accessing the intermediate table / pivot table

// Route::get('user/pivot', function(){
//     $user = User::find(1);

//     foreach($user->roles as $role){
//         return $role->name . " " .  $user->name;
//     }
// });

// Route::get('user/country', function(){
//     $country = Country::find(1);

//     foreach($country->posts as $post){
//         echo $post->title . "</br>";
//     }
// });

// Polymorphic Relations

// Route::get('user/photos', function(){
//     $user = User::find(3);

//     foreach($user->photos as $photo){
//         return $photo->path;
//     }
// });

// Route::get('photo/{id}/user', function($id){
//     $photo = Photo::findOrFail($id);

//     return $photo->imageable;
// });


// Polymorphic Many to Many

// Route::get('post/tag', function(){

//     $post = Post::find(1);

//     foreach($post->tags as $tag){
//         echo $tag->name;
//     }
// });

// Route::get('tag/post', function(){
//     $tag = Tag::find(2);

//     foreach($tag->posts as $post){
//         echo $post->title;
//     }
// });



Route::group(['middleware' => 'web'], function(){

    Route::resource('/posts', 'App\Http\Controllers\PostsController');

});

Route::get('/dates', function(){
    $date = new DateTime('+2 week');

    echo $date->format('m-d-Y');

    echo '</br>';

    echo Carbon::now()->addDays(7)->diffForHumans();
 
    echo '</br>';

    echo Carbon::now()->subMonths(5)->diffForHumans();

    echo '</br>';

    echo Carbon::now()->yesterday()->diffForHumans();
});