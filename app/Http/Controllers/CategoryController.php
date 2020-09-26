<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function table(){
        return DataTables::of(Category::all())
        ->addColumn("actions",function(Category $category){
            $destroy_link = route('admin.category.destroy',$category);

            $string = "<a class='btn btn-dark btn-sm mx-1' href='$destroy_link'><i class='fa align-middle fa-trash'></i></a>";
            $string .= "<span class='btn btn-dark btn-sm mx-1 js_category_edit' data-value='$category->name' id='$category->id'><i class='fa align-middle fa-edit'></i></span>";

            if($category->id == 0){
                $string = '<i class="fa fa-ban" ></i>';

            
            }
            
            return $string;
        })
        ->rawColumns(["actions"])
        ->make(true);
    }
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    Category::create([
            'name' => $request->name,
        ]);
        return  redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $category = $category->where('id',$request->id)->first();
        $category->update([
            'name' => $request->name
        ]);

        $request->session()->flash('msg', 'دسته ویرایش شد');
        return  redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return  redirect()->route('admin.category.index');
    }
}
