<section class="site-section pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="owl-carousel owl-theme home-slider">
                    @foreach($topArticles as $topArticle)
                        <div>
                            <a href="{{route('article',[$article->id,"ca_id"=>$article->category_id])}}" class="a-block d-flex align-items-center height-lg" style="background-image: url('{{$topArticle->img_url}}'); ">
                                <div class="text half-to-full">
                                    <div class="post-meta">
                                        <span class="category">{{$topArticle->category->name}}</span>
                                        <span class="mr-2">{{$topArticle->created_at->format('Y-m-d')}} </span>
                                    </div>
                                    <h3>{{$topArticle->title}}</h3>
                                    <p>{{$topArticle->discription}}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>


</section>
