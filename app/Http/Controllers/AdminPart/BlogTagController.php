<?php

namespace App\Http\Controllers\AdminPart;

use App\BlogTag;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog-tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blogCategory = BlogTag::create($request->all());

        return redirect()->route('admin.blog-categories.index', $blogCategory);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BlogTag $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function show(BlogTag $blogCategory)
    {
        return view('admin.blog-tags.create', $blogCategory);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BlogTag $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogTag $blogCategory)
    {
        return view('admin.blog-tags.edit', $blogCategory);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\BlogTag $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogTag $blogCategory)
    {
        $blogCategory->update($request->all());

        return redirect()->route('admin.blog-categories.index', $blogCategory);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BlogTag $blogCategory
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(BlogTag $blogCategory)
    {
        $blogCategory->delete();

        return redirect()->route('admin.blog-categories.index', $blogCategory);
    }
}
