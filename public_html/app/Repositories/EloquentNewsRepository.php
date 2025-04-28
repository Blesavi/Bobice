<?php

namespace App\Repositories;

use App\Contracts\Repositories\NewsRepository;
use App\Models\News;
use Yajra\Datatables\Datatables;

class EloquentNewsRepository implements NewsRepository
{
    public function getNews($isAjax = false)
    {
        $news = News::where('id', '>', 0);
        if($isAjax) {
            return Datatables::of($news)
                ->addColumn('action', function ($news) {

                    $argumentsArray['newsId'] = $news->id;

                    return view('bo.news.news-list-btn')->with($argumentsArray);
                })
                ->rawColumns(['action'])
                ->make(true);
        } else {
            return $news->get();
        }
    }
    public function getNewsWithId($id) {
        return News::find($id);
    }
    public function storeNews($request)
    {
        $news = new News();
        $news->title = $request->get('title', '');
        $news->category = $request->get('category', '');
        $news->text = $request->get('text', '');
        $news->main_image_url = $request->get('main_image_url', '');
        $news->save();
    }
    public function updateNews($request, $id)
    {
        $news = News::find($id);
        $news->title = $request->get('title', '');
        $news->category = $request->get('category', '');
        $news->text = $request->get('text', '');
        $news->main_image_url = $request->get('main_image_url', '');
        $news->save();
    }
    public function deleteNews($id) {
        News::find($id)->delete();
    }
}