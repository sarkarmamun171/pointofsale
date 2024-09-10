<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rule;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function add_category(){
        return view('categories.add-category');
    }
    public function category_store(Request $request){
        $request->validate([
            'category_name'=>'required|unique:categories',
            'category_image' => [
                'required',
                'image',
                File::image()
                    ->types(['png', 'jpg', 'jpeg'])
                    ->min(1)
                    ->max(500)
                    ->dimensions(
                        Rule::dimensions()
                            ->maxWidth(1000)
                            ->maxHeight(1000)
                    )
            ]
        ]);
    }
}
