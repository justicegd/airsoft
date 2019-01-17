<?php
namespace App\Http\Repositories;


use App\Models\Article;

class ArticleRepository
{

    private $model;
    function __construct(Article $model)
    {
        $this->model = $model;
    }

    function findByCategories($categories)
    {
        return $this->model->whereIn('category_id',$categories);
    }

    function getPageByCategories($categories, $page, $limit)
    {
        $article = $this->findByCategories($categories);
        return $article->paginate($limit, ['*'], 'page', $page);
    }

    public function getTopByCategories($categories,$limit)
    {
        $article = $this->findByCategories($categories);
        return $article->orderBy('created_at','desc')->limit($limit)->get();
    }

    public function find($articleId)
    {
        return $this->model->find($articleId);
    }

    public function add($inputData)
    {
        $article = $this->model;
        foreach ($inputData as $cloumn=>$value){
            $article->$cloumn =    $value;
        }
        return $article->save();

    }


}
