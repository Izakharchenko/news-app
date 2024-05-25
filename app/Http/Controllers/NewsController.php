<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\NewsResource;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::with('categories')->get();

        return NewsResource::collection($news);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        return new NewsResource($news);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        //
    }

    public function newsByCategory(Request $request)
    {
        $news = News::with('categories')->where('category_id', $request->category_id)->get();
        return NewsResource::collection($news);
    }

    public function incrementViewCount(Request $request, News $news)
    {
        $count = $news->increment('views');
        $n = $news->fresh();
        return $n->views;
    }

    public function pop(Request $request)
    {
        $maxViews = News::max('views');
        $mostViewedNews = News::where('views', $maxViews)->first();

        return  response()->json(
            [
                'title' => $mostViewedNews->title,
                'views' => $maxViews,
            ]
        );
    }
}
