<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Services\ArticleService;
use App\Http\Services\CategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Article extends Controller
{
    function article(Request $request,$articleId)
    {
        $categoryId = $request->input('ca_id', 0);

        /** @var CategoryService $categoryService */
        $categoryService = App::make(CategoryService::class);
        $topMenu         = $categoryService->getTopMenu();
        $categoryId      = $categoryService->turnHomeCategoryId($categoryId);
        $categories      = $categoryService->getCategories($categoryId);
        $categoryName    = $categoryService->getCategaryName($categoryId);

        /** @var ArticleService $articleService */
        $articleService = App::make(ArticleService::class);
        $article  = $articleService->find($articleId);


        $data           = [
            'topMenus'     => $topMenu,
            'categories'   => $categories,
            'categoryName' => $categoryName,
            'categoryId'   => $categoryId,
            'article'      => $article
        ];

        return view('article', $data);
    }
}
