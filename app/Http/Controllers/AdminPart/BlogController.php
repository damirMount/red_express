<?php

namespace App\Http\Controllers\AdminPart;

use App\Blog;
use App\Http\Controllers\Controller;
use App\Service\ImageUploader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return DataTables::of(Blog::query())
                ->editColumn('banner', function (Blog $blog) {
                    return '<img src="' . asset('storage/' . $blog->banner) . '" width="200">';

                })
                ->rawColumns(['banner'])
                ->make(true);
        }

        return view('admin.blogs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = Blog::create($request->except('image'));
        $blog->banner = ImageUploader::upload($request->file('image'), 'blogs', 'blog');
        $blog->save();
        return redirect()->route('admin.blogs.index', compact('blog'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('admin.blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $blog->update($request->all());
        if ($request->file('image')) {
            Storage::delete('public/' . $blog->banner);
            $blog->banner = ImageUploader::upload($request->file('image'), 'blogs', 'blog');
            $blog->save();
        }
        return redirect()->route('admin.blogs.index', compact('blog'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog $blog
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Blog $blog)
    {
        Storage::delete('public/' . $blog->banner);
        $blog->delete();

        return redirect()->route('admin.blogs.index', compact('blog'));
    }
}
