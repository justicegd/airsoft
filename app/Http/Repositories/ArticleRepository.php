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

    function findByCategories($categories,$orderBy=[])
    {
        $article = $this->model->whereIn('category_id',$categories);
        foreach ($orderBy as $cloumn=>$sort){
            $article  = $article->orderBy($cloumn,$sort);
        }
        return $article ;
    }

    function getPageByCategories($selectData)
    {
        $categories = $selectData->categories;
        $page       = $selectData->page;
        $limit      = $selectData->limit;
        $orderBy    = $selectData->orderBy;
        $article = $this->findByCategories($categories,$orderBy);

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

    public function edit($inputData, $articleId)
    {
        $article = $this->model->find($articleId);
        foreach ($inputData as $cloumn=>$value){
            $article->$cloumn =    $value;
        }
        return $article->save();
    }

    public function get()
    {
        return $this->model->get();
    }


}
