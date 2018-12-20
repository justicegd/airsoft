<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Services\CategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Home extends Controller
{
    function home(Request $request)
    {
        $categoryId = $request->input('ca_id',FALSE);
        /** @var CategoryService $categoryService */
        $categoryService = App::make(CategoryService::class);
        $topMenu  = $categoryService->getTopMenu();
        $category = $categoryService->getDefault($categoryId);

        $data = [
            'topMenus'=>$topMenu,
            'categorys'=>$category
        ] ;
        return view('home',$data );
    }
}
