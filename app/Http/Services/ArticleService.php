<?php

namespace App\Http\Services;

use App\Http\Repositories\ArticleRepository;
use App\Http\Repositories\CategoryRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

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

        $selectData = (object)[
            "categories" => $categoryIdSons,
            "page"       => $page,
            "limit"      => $limit,
            "orderBy"    => [
                "created_at" => "desc"
            ]
        ];

        $article = $this->articleRepository->getPageByCategories($selectData)->appends(["ca_id"=>$categoryId]);

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

    public function find($articleId)
    {
        return $this->articleRepository->find($articleId);
    }

    /**
     * @param $inputData
     * @param  Request  $request
     * @return bool
     */
    public function addArticle($inputData,$request)
    {
//        if(!empty($request->file('img'))){
//            $path  = $request->file('img')->store('article',["disk"=>"public"]);
//            $inputData->img = $path;
//        }
        return $this->articleRepository->add($inputData);
    }

    public function editArticle($inputData, Request $request, $articleId)
    {
//        if(!empty($request->file('img'))){
//            $path  = $request->file('img')->store('article',["disk"=>"public"]);
//            $inputData->img = $path;
//        }

        return $this->articleRepository->edit($inputData,$articleId);
    }


}
