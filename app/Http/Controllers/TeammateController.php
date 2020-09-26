<?php

namespace App\Http\Controllers;

use App\Teammate;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Parser\Shortcut\ElementParser;
use Yajra\DataTables\Facades\DataTables;

class TeammateController extends Controller
{

    public function table()
    {
        return DataTables::of(Teammate::all())
        ->addColumn("actions",function(Teammate $teammate){
            $destroy_link = route('admin.teammate.destroy',$teammate);
            $edit_item_link = route('admin.teammate.edit',$teammate);

            $string = "<a class='btn btn-dark btn-sm mx-1' href='$destroy_link'><i class='fa align-middle fa-trash'></i></a>";
            $string .= "<a class='btn btn-dark btn-sm mx-1' href='$edit_item_link'><i class='fa align-middle fa-edit'></i></a>";
            
            return $string;
        })
        ->rawColumns(["actions"])
        ->make(true);
    }

    public function index()
    {
        return view('admin.teammate');
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
        Teammate::create([
            'image' => $request->image,
            'name' => $request->describe,
            'describe' => $request->describe
        ]);
        return  redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teammate  $teammate
     * @return \Illuminate\Http\Response
     */
    public function show(Teammate $teammate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teammate  $teammate
     * @return \Illuminate\Http\Response
     */
    public function edit(Teammate $teammate)
    {
        return view('admin.teammate-edit',compact('teammate'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teammate  $teammate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teammate $teammate)
    {
        if($request->image){
            $image = $request->image;
        }else{
            $image= $teammate->image;
        }
        $teammate->update([
            'image' =>$image,
            'name' =>$request->name,
            'describe' => $request->describe
        ]);
        $request->session()->flash('msg', 'تصویر ویرایش شد');
        return  redirect()->route('admin.teammate.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teammate  $teammate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teammate $teammate)
    {
        $teammate->delete();
        return  redirect()->route('admin.teammate.index');
    }
}
