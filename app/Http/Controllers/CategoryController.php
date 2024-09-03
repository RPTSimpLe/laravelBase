<?php

namespace App\Http\Controllers;
use App\Models\Category;

use App\Models\User;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function htmlCreate() {
        return view('categories.create');
    }

    public function store(Request $request) {
        $request->validate(['name' => 'required']);
        Category::create($request->all());
        return redirect("/categories");
    }

    public function htmlEdit($id) {
        $category= Category::find($id);
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, $id) {
        $request->validate(['name' => 'required']);
        $category= Category::find($id);
        $category->update($request->all());
        return redirect("/categories");
    }

    public function destroy($id) {
        $category= Category::find($id);
        $category->delete();
        return redirect("/");
    }

}
