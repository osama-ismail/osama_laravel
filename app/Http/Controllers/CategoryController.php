<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
public function categories(){
    // Category::create([
    //     'name'=>'category5'
    // ]);
    // $categories=Category::get();
    // // dd($categories);
    // foreach($categories as $category){
    //     // dd($category->id);
    // }
    $categories=Category::get();
    return view('categories',compact('categories'));
}
public function addCategory(){

    return view('addCategory');


}

public function storeCategory(Request $request){

    Category::create([
        'name'=>$request->name

    ]);
    // dd("done");

    return redirect(route('categories'));


}

}
