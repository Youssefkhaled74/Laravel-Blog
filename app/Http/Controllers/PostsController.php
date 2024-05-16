<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('blog.index')
        ->with('posts',Post::get());
        // return view('blog.uossef');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
         $request->validate([
            'titel'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:jpg,png,jped|max:5048',
         ]);
         $slug =str::slug($request->titel,'-');
         $newImageName = uniqid().'-'.$slug.'-'.$request->image->extension();
         $request->image->move(public_path('images'),$newImageName);
        //  dd($newImageName);
         Post::create([
            'titel'=> $request-> input('titel'),
            'description'=> $request-> input('description'),
            'slug'=>$slug,
            'img_path'=>$newImageName,
            'user_id'=>auth()->user()->id
         ]);
         return redirect('/blog');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        return view('blog.show')
        ->with('post',Post::where('slug',$slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        return view ('blog.edit')
        ->with('post',Post::where('slug',$slug)->first());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $slug)
    {
        $request->validate([
            'titel'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:jpg,png,jped|max:5048',
         ]);
        $newImageName = uniqid().'-'.$slug.'-'.$request->image->extension();
        $request->image->move(public_path('images'),$newImageName);
        Post::where('slug',$slug)
        ->update([
            'titel'=> $request-> input('titel'),
            'description'=> $request-> input('description'),
            'slug'=>$slug,
            'img_path'=>$newImageName,
            'user_id'=>auth()->user()->id
         ]);
         return redirect('/blog/'.$slug)
         ->with('message','The Update is Succesfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        Post::where('slug',$slug)->delete();
        return redirect('/blog')
        ->with('message', 'Deleted Post is succesfuly');
    }
}
