@extends('layout.main')

@section('container')
    <section class="site-section py-lg">
        <div class="container">
    <div class="row blog-entries">
        <div class="col-md-12 col-lg-8 main-content">
            <h1 class="mb-4">{{$article->title}}</h1>
            <div class="post-meta">
                <span class="category">{{$article->category->name}}</span>
                <span class="mr-2">{{$article->created_at->format('Y-m-d')}} </span>
            </div>
            <div class="post-content-body">
                {!!$article->content!!}
            </div>

        </div>

        <!-- END main-content -->
        @include('layout.sidebar')


    </div>

        </div>
    </section>

    {{--codesnippet--}}
    <link rel="stylesheet" href="{{asset("plugins/ckeditor/plugins/codesnippet/lib/highlight/styles/rainbow.css")}}">
    <script src="{{asset("plugins/ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js")}}"></script>
    <script>    hljs.initHighlightingOnLoad();</script>
@endsection


@section('site-logo')
    <div class="container logo-wrap">
        <div class="row pt-5">
            <div class="col-12 text-center">
                <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
                <h1><a href="{{route("home")}}">{{config("setting.webName")}}</a></h1>
            </div>
        </div>
    </div>
@endsection

