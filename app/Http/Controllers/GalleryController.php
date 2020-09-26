<?php

namespace App\Http\Controllers;

use App\Gallery;

use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Parser\Shortcut\ElementParser;
use Yajra\DataTables\Facades\DataTables;

class GalleryController extends Controller
{

    public function table()
    {
        
        return DataTables::of(Gallery::all())
        ->addColumn("actions",function(Gallery $gallery){
            $destroy_link = route('admin.gallery.destroy',$gallery);
            $edit_item_link = route('admin.gallery.edit_item',$gallery);

            $string = "<a class='btn btn-dark btn-sm mx-1' href='$destroy_link'><i class='fa align-middle fa-trash'></i></a>";
            $string .= "<a class='btn btn-dark btn-sm mx-1' href='$edit_item_link'><i class='fa align-middle fa-edit'></i></a>";
            
            return $string;
        })
        ->rawColumns(["actions"])
        ->make(true);
    }
    public function index()
    {
    
        $galleries = Gallery::All();
        return view('gallery',compact('galleries'));
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
        Gallery::create([
            'image' => $request->image,
            'describe' => $request->describe
        ]);
        return  redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

  
    public function edit(Gallery $gallery)
    {
        return view('admin.gallery');
    }

    public function edit_item(Gallery $gallery){
        return view('admin.gallery-edit',compact('gallery'));
    }
 

    public function update(Request $request, Gallery $gallery)
    {
        if($request->image){
            $image = $request->image;
        }else{
            $image= $gallery->image;
        }
        $gallery->update([
            'image' =>$image,
            'describe' => $request->describe
        ]);
        $request->session()->flash('msg', 'تصویر ویرایش شد');
        return  redirect()->route('admin.gallery.edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery){
        $gallery->delete();
        return  redirect()->route('admin.gallery.edit');

    }
}
