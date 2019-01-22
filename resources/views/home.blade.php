@extends('layout.main')

@section('container')
    <section class="site-section py-sm">
        <div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2 class="mb-4">{{$categoryName}}</h2>
        </div>
    </div>
    <div class="row blog-entries">
        <div class="col-md-12 col-lg-8 main-content">
            <div class="row">
                @foreach($articles as $article)
                    <div class="col-md-6">
                        <a href="{{route('article',[$article->id,"ca_id"=>$article->category_id])}}" class="blog-entry element-animate" data-animate-effect="fadeIn">
                            <div style ="height:200px; width:350px; overflow:hidden;">
                                <img src="{{$article->img}}" alt="Image placeholder">
                            </div>
                            {{--<img src="{{$article->img}}" alt="Image placeholder">--}}
                            <div class="blog-content-body">
                                <div class="post-meta">
                                    <span class="category">{{$article->category->name}}</span>
                                    <span class="mr-2">{{$article->created_at->format('Y-m-d')}}</span>
                                </div>
                                <h2>{{$article->title}}</h2>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <nav aria-label="Page navigation" class="text-center">
                        <ul class="pagination">
                            @if(!empty($articles->previousPageUrl()))
                                <li class="page-item"><a class="page-link" href="{{$articles->previousPageUrl()}}">Next</a></li>
                            @endif
                            @for($i =1 ;$i<=$articles->lastPage();$i++ )
                                @if((int)$articles->currentPage() == $i)
                                    <li class="page-item active"><a class="page-link" href="{{$articles->url($i)}}">{{$i}}</a></li>
                                @else
                                    <li class="page-item"><a class="page-link" href="{{$articles->url($i)}}">{{$i}}</a></li>
                                @endif
                            @endfor
                            @if(!empty($articles->nextPageUrl()))
                                <li class="page-item"><a class="page-link" href="{{$articles->nextPageUrl()}}">Prev</a></li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>

        </div>

        <!-- END main-content -->
        @include('layout.sidebar')
    </div>
        </div>
    </section>

@endsection

@section('topArticle')
    @include('layout.topArticle')
@endsection

@section('site-logo')
<div class="container logo-wrap">
    <div class="row pt-5">
        <div class="col-12 text-center">
            <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
            <h1 class="site-logo"><a href="{{route('home')}}">{{config("setting.webName")}}</a></h1>
        </div>
    </div>
</div>
@endsection

