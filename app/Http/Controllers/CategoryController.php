<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use App\Models\Category;
use Carbon\Carbon;
class CategoryController extends Controller
{
    public function add_category()
    {
        $categories = Category::all();
        return view('categories.add-category',[
            'categories'=>$categories,
        ]);
    }
    public function category_store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|unique:categories',
            'category_image' => 'required','image',

        ]);
            $img=$request->category_image;
            $extension=$img->extension();
            $file_name = Str::lower(str_replace(' ','-',$request->category_name))."-".random_int(100000, 900000)."." .$extension;
            Image::make($img)->save(public_path('uploads/category/'.$file_name));

            Category::insert([
                'category_name'=>$request->category_name,
                'category_image'=>$file_name,
                'created_at'=>Carbon::now(),
            ]);
            return back()->with('cate_add','Category Added');
    }
    public function category_edit($category_id){
        $category_info = Category::find($category_id);
        return view('categories.edit-category',[
            'category_info'=>$category_info,
        ]);
    }
    public function category_update(Request $request){
        $category = Category::find($request->category_id);
        if ($request->category_image=='') {
          Category::find($request->category_id)->update([
            'category_name'=>$request->category_name,
            'created_at'=>Carbon::now(),
          ]);
        }
        else{
            $curret_img = public_path('uploads/category/'.$category->category_img);
            unlink($curret_img);

            $img = $request->category_image;
            $extension = $img->extension();
            $file_name =Str::lower(str_replace('','-',$request->category_name))."-".random_int(100,100000).".".$extension;
            Image::make($img)->save(public_path('uploads/category/'.$file_name));

            Category::find($request->category_id)->update([
                'category_image'=>$file_name,
                'updated_at'=>Carbon::now(),
            ]);
            return back()->with('success','Category Updated');
        }
    }
}
