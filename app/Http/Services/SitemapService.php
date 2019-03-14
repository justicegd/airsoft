<?php

namespace App\Http\Services;

use App\Http\Repositories\CategoryRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SitemapService
{

    function genSitemap()
    {
        $host = $this->getHost();
        $links = $this->getCategoryLinks();
        return response(view('sitemap',compact("host","links")), 200, [
            'Content-Type' => 'application/xml'
        ]);


    }

    private function getCategoryLinks()
    {
        $data = [];
        /** @var CategoryRepository $categoryRepository */
        $categoryRepository= App::make(CategoryRepository::class);
        $categorys       = $categoryRepository->get();
        foreach ($categorys as $category)
        {
            $data [] = $this->getHost() . '?ca_id=' . $category->id;
        }

        return $data;
    }

    private function getHost()
    {
        /** @var Request $request */
        $request = App::make(Request::class);
        $host = $request->getHost();

        return $host ;

    }


}
