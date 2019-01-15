<!doctype html>
<html lang="en">
  <head>
    <title>文文日誌</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700" rel="stylesheet">

    <link rel="stylesheet" href="view/css/bootstrap.css">
    <link rel="stylesheet" href="view/css/animate.css">
    <link rel="stylesheet" href="view/css/owl.carousel.min.css">

    <link rel="stylesheet" href="view/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="view/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="view/fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="view/css/style.css">
  </head>
  <body>
    


    <header role="banner">
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-9 social">
              <a href="https://www.facebook.com/WenAirsoft/" target="_blank" ><span class="fa fa-facebook"></span></a>
              <a href="https://www.youtube.com/channel/UCLh4FRdENKMRMRDRYAej9lg" target="_blank" ><span class="fa fa-youtube-play"></span></a>
            </div>
            <div class="col-3 search-top">
            </div>
          </div>
        </div>
      </div>

      <div class="container logo-wrap">
        <div class="row pt-5">
          <div class="col-12 text-center">
            <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
            <h1 class="site-logo"><a href="{{route('home')}}">WenWen</a></h1>
          </div>
        </div>
      </div>
      
      <nav class="navbar navbar-expand-md  navbar-light bg-light">
        <div class="container">
          
         
          <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav mx-auto">

              @foreach($topMenus as $topMenu)
                @if($topMenu->hasLevel2)
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="category.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{$topMenu->name}}</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                      @foreach($topMenu->level2 as $level2)
                        <a class="dropdown-item" href="{{route('home',["ca_id"=>$level2->menuId])}}">{{$level2->name}}</a>

                      @endforeach

                    </div>
                  </li>
                @else
                  <li class="nav-item ">
                    <a class="nav-link active" href="{{route('home',["ca_id"=>$topMenu->menuId])}}">{{$topMenu->name}}</a>
                  </li>
                @endif

              @endforeach

            </ul>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->

    <section class="site-section pt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <div class="owl-carousel owl-theme home-slider">
              @foreach($topArticles as $topArticle)
              <div>
                <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url('view/images/img_{{$topArticle->id}}.jpg'); ">
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
    <!-- END section -->

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
                  <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                    <img src="view/images/img_{{$article->id}}.jpg" alt="Image placeholder">
                    <div class="blog-content-body">
                      <div class="post-meta">
                        <span class="category">{{$article->category->name}}</span>
                        <span class="mr-2">{{$article->created_at->format('Y-m-d')}}</span>
                        {{--<span class="ml-2"><span class="fa fa-comments"></span> 3</span>--}}
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

          <div class="col-md-12 col-lg-4 sidebar">
            <!-- END sidebar-box -->
            <div class="sidebar-box">
              <div class="bio text-center">
                <img src="view/images/person_1.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="bio-body">
                  <h2>文文 (Irvin)</h2>
                  <p>本職軟體工程師，假日戰士，多出沒於屏東、高雄，除了資訊技術外，也喜歡研究生存遊戲相關知識，樂於分享生活中有興趣的人事物。</p>
                  <p class="social">
                    <a href="https://www.facebook.com/WenAirsoft/" target="_blank"  class="p-2"><span class="fa fa-facebook"></span></a>
                    {{--<a href="#" class="p-2"><span class="fa fa-instagram"></span></a>--}}
                    <a href="https://www.youtube.com/channel/UCLh4FRdENKMRMRDRYAej9lg" target="_blank"  class="p-2"><span class="fa fa-youtube-play"></span></a>
                  </p>
                </div>
              </div>
            </div>

            <div class="sidebar-box">
              <h3 class="heading">分類文章</h3>
              <ul class="categories">
                @foreach($categories as $category)
                  <li><a href="{{route('home',['ca_id'=>$category->id])}}">{{$category->name}}</a></li>
                @endforeach

              </ul>
            </div>
            <!-- END sidebar-box -->

          <!-- END sidebar -->

        </div>
      </div>
      </div>
    </section>
  
    <footer class="site-footer">
      <div class="container">
        Build by Irvin@2019
      </div>
    </footer>
    <!-- END footer -->
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="view/js/jquery-3.2.1.min.js"></script>
    <script src="view/js/jquery-migrate-3.0.0.js"></script>
    <script src="view/js/popper.min.js"></script>
    <script src="view/js/bootstrap.min.js"></script>
    <script src="view/js/owl.carousel.min.js"></script>
    <script src="view/js/jquery.waypoints.min.js"></script>
    <script src="view/js/jquery.stellar.min.js"></script>

    <script src="view/js/main.js"></script>
  </body>
</html>