<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Services\ArticleService;
use App\Http\Services\CategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Home extends Controller
{
    function home(Request $request)
    {

        $page       = $request->input('page', 1);
        $categoryId = $request->input('ca_id', 0);
        $limit      = 15;
        $topLimit   = 5;

        /** @var CategoryService $categoryService */
        $categoryService = App::make(CategoryService::class);
        $topMenu         = $categoryService->getTopMenu();
        $categoryId      = $categoryService->turnHomeCategoryId($categoryId);
        $categories      = $categoryService->getCategories($categoryId);
        $categoryName    = $categoryService->getCategaryName($categoryId);

        /** @var ArticleService $articleService */
        $articleService = App::make(ArticleService::class);
        $articles       = $articleService->getArticles($categoryId, $page, $limit);
        $topArticles    = $articleService->getTopArticles($categoryId, $topLimit);

        $data           = [
            'topMenus'     => $topMenu,
            'categories'   => $categories,
            'articles'     => $articles,
            'categoryName' => $categoryName,
            'topArticles'  => $topArticles,
            'categoryId'   => $categoryId,
        ];

        return view('home', $data);
    }
}
