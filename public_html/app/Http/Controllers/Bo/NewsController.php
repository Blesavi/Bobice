<?php

namespace App\Http\Controllers\Bo;

use App\Contracts\Repositories\NewsRepository;
use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    private $newsRepository;

    /** CONSTRUCTOR */
    public function __construct(NewsRepository $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }

    /** INDEX */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->newsRepository->getNews(true);
        }

        $argumentsArray = [
            /*'reports' => [],
            'ajaxParams' => ['type' => 1],
            'type' => 1,*/
        ];

        return view('bo.news.index')->with($argumentsArray);
    }
    /** CREATE */
    public function create(Request $request)
    {
        $news = new News();
        $news->title = '';
        $news->text = '';

        $argumentsArray = [
            'news' => $news,
            'isCreate' => true
        ];

        return view('bo.news.details')->with($argumentsArray);
    }
    /** STORE */
    public function store(Request $request) {
        $this->newsRepository->storeNews($request);

        return redirect(route('news.index'));
    }
    /** EDIT */
    public function edit(Request $request, $id)
    {
        $news = $this->newsRepository->getNewsWithId($id);

        $argumentsArray = [
            'news' => $news
        ];

        return view('bo.news.details')->with($argumentsArray);
    }
    /** UPDATE */
    public function update(Request $request, $id)
    {
        $this->newsRepository->updateNews($request, $id);

        return redirect(route('news.index'));
    }
    /** DELETE */
    public function delete(Request $request, $id)
    {
        $this->newsRepository->deleteNews($id);
        return redirect(url()->previous());
    }
}
