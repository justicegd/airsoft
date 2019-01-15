<?php

namespace App\Http\Services;

use App\Http\Repositories\ArticleRepository;
use App\Http\Repositories\CategoryRepository;
use Illuminate\Support\Facades\App;

class ArticleService
{

    private $articleRepository;

    function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function getArticles($categoryId, $page, $limit)
    {
        /** @var CategoryService $categoryService */
        $categoryService = App::make(CategoryService::class);
        $categoryIdSons  = $categoryService->findAllCategory($categoryId);

        $article = $this->articleRepository->getPageByCategories($categoryIdSons, $page, $limit)->appends(["ca_id"=>$categoryId]);

        return $article;
    }

    public function getTopArticles($categoryId, $limit)
    {

        /** @var CategoryService $categoryService */
        $categoryService = App::make(CategoryService::class);
        $categoryIdSons  = $categoryService->findAllCategory($categoryId);

        $article = $this->articleRepository->getTopByCategories($categoryIdSons, $limit);


        return $article;
    }


}