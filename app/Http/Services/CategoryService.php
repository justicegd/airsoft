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
        $menu    = $this->categoryRepository->get();
        $level1  = $menu->where('level', 1);
        $topData = [];
        foreach ($level1 as $levelData) {
            $level2        = $menu->where('parent_id', $levelData->id);
            $level2TmpData = [];
            foreach ($level2 as $level2Data) {
                $level2TmpData [] = (object)[
                    'menuId' => $level2Data->id,
                    'name'   => $level2Data->name,
                ];
            }

            $tmpData   = [
                'menuId'    => $levelData->id,
                'name'      => $levelData->name,
                'level2'    => (object)$level2TmpData,
                'hasLevel2' => (count($level2TmpData) > 0) ? TRUE : FALSE,
            ];
            $topData[] = (object)$tmpData;
        }


        return (object)$topData;
    }

    public function getCategories($categoryId)
    {
        if ((int)$categoryId !== 0) {
            $categoryId = $this->categoryRepository->find($categoryId)->parent_id;
        }

        $category = $this->categoryRepository->findSon($categoryId);

        return $category;
    }

    public function findAllCategory($categoryId)
    {
        $categories = $this->categoryRepository->get();

        return $this->buildAllSonCategory($categories, [$categoryId], [$categoryId]);

    }

    private function buildAllSonCategory($pCategories, $parentCategories, $allCategories = [])
    {

        $sonCategories = $pCategories->whereIn("parent_id", $parentCategories);

        if ($sonCategories->count() > 0) {

            $categories    = $sonCategories->keyBy('id')->keys()->toArray();
            $allCategories = array_merge($categories, $parentCategories);

            return $this->buildAllSonCategory($pCategories, $categories, $allCategories);
        }

        return $allCategories;
    }

    public function getCategaryName($categoryId)
    {
        $categoryName = "無此分類";
        if ((int)$categoryId === 0) {
            $categoryName = "所有分類";
        }
        $category = $this->categoryRepository->find($categoryId);
        if (!empty($category)) {
            $categoryName = $category->name;
        }

        return $categoryName;

    }

    public function turnHomeCategoryId($categoryId)
    {
        if ((int)$categoryId == 1) {
            $categoryId = 0;
        }

        return $categoryId;
    }


}