<?php

namespace App\Http\Services;

use App\Http\Repositories\CategoryRepository;

class CategoryService
{
    private $categoryRepository;

    function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function getTopMenu()
    {
        $menu = $this->categoryRepository->get();
        $level1  = $menu->where('level', 1);
        $topData = [];
        foreach ($level1 as $levelData) {

            $level2 = $menu->where('parent_id',3)->where('parent_id',$levelData->id);
            $level2TmpData = [];
            foreach ($level2 as $level2Data) {
                $level2TmpData [] = (object)[
                    'menuId' => $level2Data->id,
                    'name'   => $level2Data->name,
                ];
            }

            $tmpData   = [
                'menuId' => $levelData->id,
                'name'   => $levelData->name,
                'level2' => (object)$level2TmpData ,
                'hasLevel2'=> (count($level2TmpData)>0)?TRUE:FALSE,
            ];
            $topData[] = (object)$tmpData;
        }


        return (object)$topData;
    }

    public function getDefault($categoryId)
    {
        if($categoryId === false){
            $categoryId = $this->categoryRepository->findLevel()->first()->id;
        }

        $category = $this->categoryRepository->findSon($categoryId);

        return $category ;
    }


}