<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $blogData = Blog::all();
        return view('admin.blog.index' , compact('blogData'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.blog.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $file = $request->file('blogImage');
        $fileName = uniqid().'_'. $file->getClientOriginalName();
        $file->move(public_path().'/blogImage', $fileName);

        Blog::create([
            'main_title' => $request->mainTitle,
            'sub_title' => $request->subTitle,
            'desc_1' => $request->desc1,
            'desc_2' => $request->desc2,
            'desc_3' => $request->desc3,
            'image' => $fileName
        ]);
        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $blogData = Blog::find($id);

        return view('admin.blog.edit' , compact('blogData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $blogData = Blog::find($id);
        $blogData->main_title = $request->mainTitle;
            $blogData->sub_title = $request->subTitle;
            $blogData->desc_1 = $request->desc1;
            $blogData->desc_2 = $request->desc2;
            $blogData->desc_3 = $request->desc3;
        if($request->blogImage != null) {
            $blogData->image = $request->blogImage;
        }
        $blogData->save();
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $blogData = Blog::find($id);
        $blogImage = $blogData['image'];

        if(File::exists(public_path().'/blogImage/'.$blogImage)) {
            File::delete(public_path().'/blogImage/'.$blogImage);
        };

        Blog::where('id', $id)->delete();
        return redirect()->route('blog.index');
    }
}
