<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Category;

class PostController extends Controller
{
    public function table(){
        return DataTables::of(Post::all())
        ->addColumn("actions",function(Post $post){
            $destroy_link = route('admin.post.destroy',$post);
            $edit_item_link = route('admin.post.edit',$post);

            $string = "<a class='btn btn-dark btn-sm mx-1' href='$destroy_link'><i class='fa align-middle fa-trash'></i></a>";
            $string .= "<a class='btn btn-dark btn-sm mx-1' href='$edit_item_link'><i class='fa align-middle fa-edit'></i></a>";
            
            return $string;
        })
        ->editColumn("created_at",function(Post $post){
            $string = verta($post->created_at)->formatDifference();
            return $string;
        })
        ->rawColumns(["actions"])
        ->make(true);
    }
    public function index()
    {
        return view('admin.post');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::All();
        return view('admin.post-create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!$request->content){
            $request->session()->flash('msg', 'پست ثبت شد');
            return  redirect()->back();
        }
        Post::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'image' => $request->image,
            'content' => $request->content,
            'content_short' => $request->content_short,
        ]);
        $request->session()->flash('msg', 'پست ثبت شد');
        return  redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
       return view('post',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('admin.post-edit',compact('post','categories'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        if($request->image){
            $image = $request->image;
        }else{
            $image= $post->image;
        }

        $post->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'image' => $image,
            'content' => $request->content,
            'content_short' => $request->content_short,
        ]);
        return  redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
