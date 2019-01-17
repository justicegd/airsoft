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
        $msg = $request->input('msg',"");
        /** @var CategoryService $categoryService */
        $categoryService = App::make(CategoryService::class);
        $categories = $categoryService->getCategoryChooes();

        /** @var ArticleService $articleService */
        $articleService = App::make(ArticleService::class);
        $article  = $articleService->find($articleId);


        $method = ((int)$articleId === 0)?'post':'put'  ;
        $action = ((int)$articleId === 0)?'addArticle':'editArticle'  ;


        $data = [
            'categories' => $categories,
            'article'    => $article,
            'method'     => $method,
            'articleId'  => $articleId,
            'action'     => $action,
            "msg"        => $msg
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

        return redirect()->route('addArticlePage',[0,'msg'=>'新增完成']);
    }

    function editArticle(Request $request)
    {
        $inputData              = (object)[];
        $inputData->category_id = $request->input("category_id");
        $inputData->title       = $request->input("title");
        $inputData->discription = $request->input("discription");
        $inputData->content     = $request->input("content");
        $articleId              = $request->input("articleId");


        /** @var ArticleService $articleService */
        $articleService = App::make(ArticleService::class);
        $articleService->editArticle($inputData,$request,$articleId);

        return redirect()->route('addArticlePage',[0,'msg'=>'修改完成']);

    }
}
