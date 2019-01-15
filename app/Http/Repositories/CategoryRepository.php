<?php
namespace App\Http\Repositories;

use App\Models\Category;

class CategoryRepository
{

    private $model;
    function __construct(Category $model)
    {
        $this->model = $model;
    }

    public function get()
    {
        return $this->model->get();
    }

    public function findSon($categoryId)
    {
        return $this->model->where('parent_id',$categoryId)->get();
    }

    public function findLevel()
    {
        return $this->model->where('level',1)->orderBy('show_sort')->get();
    }

    public function find($categoryId)
    {
        return $this->model->find($categoryId);
    }


}