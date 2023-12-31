<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Post;
use File;


use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $posts = Post::all();
       return view('index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {

        $categories = Category::all();

       return view ('create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {
        $request->validate([
            'image'=>['required','max:2028','image'],
            'title'=>['required','max:255'],
            'category_id'=>['required','integer'],
            'description'=>['required']


        ]);

        $fileName = time()."_".$request->image->getClientOriginalName();
        $filePath = $request->image->storeAs('uploads',$fileName);

        $posts = new Post();
        $posts->title = $request->title;
        $posts->description = $request->description;
        $posts->category_id = $request->category_id;
        $posts->image = 'storage/'.$filePath;
        $posts->save();
        return redirect()->route('posts.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $posts = Post::findOrFail($id);
        return view ('show',compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $posts = Post::findOrFail($id);
        $categories = Category::all();
       return view ('edit',compact('posts','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title'=>['required','max:255'],
            'category_id'=>['required','integer'],
           'description'=>['required']
        ]);

        $posts = Post::findOrFail($id);

        if($request->hasFile('image')){
            $request->validate([
               'image'=>['required','max:2028','image'],
            ]);

             $fileName = time()."_".$request->image->getClientOriginalName();
        $filePath = $request->image->storeAs('uploads',$fileName);

        File::delete(public_path($posts->image));
        $posts->image = 'storage/'.$filePath;



        }
        $posts->title = $request->title;
        $posts->description = $request->description;
        $posts->category_id = $request->category_id;

        $posts->save();

        return redirect()->route('posts.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $destory= Post::findOrFail($id);
        $destory->delete();
        return redirect()->route('posts.index');
    }
}
