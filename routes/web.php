<?php
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function (){ return redirect('/categories'); });
Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/create', [CategoryController::class, 'htmlCreate']);
Route::post("/create",[CategoryController::class,"store"]);

Route::get("/edit/{id}", [CategoryController::class, "htmlEdit"]);
Route::put("/update/{id}",[CategoryController::class,"update"]);
Route::delete("/delete/{id}",[CategoryController::class,"destroy"]);



//Route::get("/admin/create",function (){return view("admin.acc.create");});
//Route::get("/admin/list",[UserController::class,"show"]);
//Route::get("/admin/searchUser", [UserController::class,"search"]);
//Route::patch("/admin/resetpass/{id}",[UserController::class,"resetPass"]);
//Route::delete("/admin/deleteUser/{id}",[UserController::class,"destroy"]);
//Route::patch("/admin/updateUser/{id}",[UserController::class,"update"]);
//Route::get('/edit', CategoryController::class);
