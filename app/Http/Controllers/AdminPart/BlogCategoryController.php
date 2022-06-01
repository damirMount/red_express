<?php

namespace App\Http\Controllers\AdminPart;

use App\BlogCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogCategories = BlogCategory::latest()->paginate(10);

        return view('admin.blog-categories.index', compact('blogCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog-categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blogCategory = BlogCategory::create($request->all());

        return redirect()->route('admin.blog-categories.index', $blogCategory);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BlogCategory $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function show(BlogCategory $blogCategory)
    {
        return view('admin.blog-categories.create', $blogCategory);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BlogCategory $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogCategory $blogCategory)
    {
        return view('admin.blog-categories.edit', $blogCategory);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\BlogCategory $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogCategory $blogCategory)
    {
        $blogCategory->update($request->all());

        return redirect()->route('admin.blog-categories.index', $blogCategory);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BlogCategory $blogCategory
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(BlogCategory $blogCategory)
    {
        $blogCategory->delete();

        return redirect()->route('admin.blog-categories.index', $blogCategory);
    }
}
