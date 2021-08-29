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

//Route::get('/', function () {
//    return view('pages.posts.memes');
//});
Route::get("/",[\App\Http\Controllers\HomeController::class,"index"])->name("home");
Route::get("/home",[\App\Http\Controllers\HomeController::class,"index"])->name("home");
Route::get("/articles",[\App\Http\Controllers\HomeController::class,"index"])->name("articles");
Route::get("/quizzes",[\App\Http\Controllers\PostController::class,"index"])->name("quizzes");
Route::get("/interviews",[\App\Http\Controllers\PostController::class,"index"])->name("interviews");
Route::get("/tactics",[\App\Http\Controllers\PostController::class,"index"])->name("tactics");
Route::get("/funny",[\App\Http\Controllers\PostController::class,"index"])->name("funny");
Route::get("/memes",[\App\Http\Controllers\ImageController::class,"gallery"])->name("memes");
//Route::get("/{page}",[\App\Http\Controllers\PostController::class])->name("memes");
Route::get("/about",[\App\Http\Controllers\FrontEndController::class,"about"])->name("about");
Route::get("/contact",[\App\Http\Controllers\FrontEndController::class,"contact"])->name("contact");
Route::post("/kontaktiranje",[\App\Http\Controllers\BackEndController::class,"kontaktiranje"])->name("kontaktiranje");
Route::get("/login",[\App\Http\Controllers\FrontEndController::class,"login"])->name("login")->middleware("login");
Route::post("/logovanje",[\App\Http\Controllers\BackEndController::class,"logovanje"])->name("logovanje");
Route::get("/register",[\App\Http\Controllers\FrontEndController::class,"register"])->name("register");
Route::post("/registracija",[\App\Http\Controllers\BackEndController::class,"registracija"])->name("registracija");
Route::post("/logout",[\App\Http\Controllers\BackEndController::class,"logout"])->name("logout");
Route::get("/search",[\App\Http\Controllers\FrontEndController::class,"search"])->name("search");
Route::post("/komentarisi",[\App\Http\Controllers\BackEndController::class,"komentarisi"])->name("komentarisi");
Route::put("/izmeni-komentar",[\App\Http\Controllers\BackEndController::class,"izmeniKomentar"])->name("izmeniKomentar");



Route::get("posts/{post}",[\App\Http\Controllers\PostController::class,"show"])->name("show-post");
//MIDDLEWARIII


//"middleware"=>"web",
Route::group(["prefix" => "admin","middleware"=>"admin",],function (){
    Route::get("postovi",[\App\Http\Controllers\BackEndController::class,"adminIndex"])->name("admin-posts");
    Route::get("postovi/{post}",[\App\Http\Controllers\BackEndController::class,"adminShow"])->name("admin-post");

    Route::get("search",[\App\Http\Controllers\FrontEndController::class,"search"])->name("admin-posts-search");
    Route::delete("comments/{comment}",[\App\Http\Controllers\BackEndController::class,"izbrisiKomentar"])->name("admin-comments-delete");
    Route::resource("posts",\App\Http\Controllers\PostController::class);
    Route::resource("categories",\App\Http\Controllers\CategoryController::class);
    Route::resource("images",\App\Http\Controllers\ImageController::class);
    Route::resource("roles",\App\Http\Controllers\RoleController::class);
    Route::resource("users",\App\Http\Controllers\UserController::class);
    Route::resource("menu",\App\Http\Controllers\MenuController::class);
    Route::get("activities",[\App\Http\Controllers\BackEndController::class,"activities"])->name("admin-activities");
    Route::get("errors",[\App\Http\Controllers\BackEndController::class,"errors"])->name("admin-errors");
    Route::get("date-filter",[\App\Http\Controllers\FrontEndController::class,"dateFilter"])->name("date-filter");
    Route::get("panel",[\App\Http\Controllers\BackEndController::class,"index"])->name("admin-panel");
});
//admin
Route::get("unauthorized",[\App\Http\Controllers\FrontEndController::class,"unauthorized"])->name("unauthorized");
Route::get("author",[\App\Http\Controllers\FrontEndController::class,"author"])->name("author");
