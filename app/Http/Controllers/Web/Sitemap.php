<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Services\ArticleService;
use App\Http\Services\CategoryService;
use App\Http\Services\SitemapService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Sitemap extends Controller
{
    function getSitemap()
    {
        /** @var SitemapService $sitemapService */
        $sitemapService = App::make(SitemapService::class);
        return $sitemapService ->genSitemap();
    }
}
