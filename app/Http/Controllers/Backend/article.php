<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Services\ArticleService;
use App\Http\Services\CategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Article extends Controller
{
    function article(Request $request,$articleId)
    {
        /** @var CategoryService $categoryService */
        $categoryService = App::make(CategoryService::class);
        $categories = $categoryService->getCategoryChooes();

        /** @var ArticleService $articleService */
        $articleService = App::make(ArticleService::class);
        $article  = $articleService->find($articleId);


        $data           = [
            'categories'   => $categories,
            'article'      => $article
        ];

        return view('backend.article', $data);
    }

    function addArticle(Request $request)
    {
        $inputData              = (object)[];
        $inputData->category_id = $request->input("category_id");
        $inputData->title       = $request->input("title");
        $inputData->discription = $request->input("discription");
        $inputData->content     = $request->input("content");


        /** @var ArticleService $articleService */
        $articleService = App::make(ArticleService::class);
        $articleService->addArticle($inputData,$request);

        return "ok";
    }
}
