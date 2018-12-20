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
              <a href="https://www.facebook.com/WenAirsoft/"><span class="fa fa-facebook"></span></a>
              <a href="https://www.youtube.com/channel/UCLh4FRdENKMRMRDRYAej9lg"><span class="fa fa-youtube-play"></span></a>
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
            <h1 class="site-logo"><a href="index.html">WenWen</a></h1>
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
                        <a class="dropdown-item" href="{{route('home',["ca_id"=>$topMenu->menuId])}}">{{$level2->name}}</a>

                      @endforeach

                    </div>
                  </li>
                @else
                  <li class="nav-item ">
                    <a class="nav-link active" href="index.html">{{$topMenu->name}}</a>
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
              <div>
                <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url('view/view/images/img_1.jpg'); ">
                  <div class="text half-to-full">
                    <div class="post-meta">
                      <span class="category">Lifestyle</span>
                      <span class="mr-2">March 15, 2018 </span> &bullet;
                      <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nobis, ut dicta eaque ipsa laudantium!</p>
                  </div>
                </a>
              </div>
              <div>
                <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url('view/images/img_2.jpg'); ">
                  <div class="text half-to-full">
                    <div class="post-meta">
                      <span class="category">Lifestyle</span>
                      <span class="mr-2">March 15, 2018 </span> &bullet;
                      <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nobis, ut dicta eaque ipsa laudantium!</p>
                  </div>
                </a>
              </div>
              <div>
                <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url('view/images/img_3.jpg'); ">
                  <div class="text half-to-full">
                    <div class="post-meta">
                      <span class="category">Lifestyle</span>
                      <span class="mr-2">March 15, 2018 </span> &bullet;
                      <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nobis, ut dicta eaque ipsa laudantium!</p>
                  </div>
                </a>
              </div>
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
            <h2 class="mb-4">Lifestyle Category</h2>
          </div>
        </div>
        <div class="row blog-entries">
          <div class="col-md-12 col-lg-8 main-content">
            <div class="row">
              <div class="col-md-6">
                <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                  <img src="view/images/img_5.jpg" alt="Image placeholder">
                  <div class="blog-content-body">
                    <div class="post-meta">
                      <span class="category">Food</span>
                      <span class="mr-2">March 15, 2018 </span> &bullet;
                      <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h2>There’s a Cool New Way for Men to Wear Socks and Sandals</h2>
                  </div>
                </a>
              </div>
              <div class="col-md-6">
                <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                  <img src="view/images/img_6.jpg" alt="Image placeholder">
                  <div class="blog-content-body">
                    <div class="post-meta">
                      <span class="category">Travel</span>
                        <span class="mr-2">March 15, 2018 </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                      </div>
                    <h2>There’s a Cool New Way for Men to Wear Socks and Sandals</h2>
                  </div>
                </a>
              </div>

              <div class="col-md-6">
                <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                  <img src="view/images/img_7.jpg" alt="Image placeholder">
                  <div class="blog-content-body">
                    <div class="post-meta">
                      <span class="category">Travel, Asia</span>
                      <span class="mr-2">March 15, 2018 </span> &bullet;
                      <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h2>There’s a Cool New Way for Men to Wear Socks and Sandals</h2>
                  </div>
                </a>
              </div>
              <div class="col-md-6">
                <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                  <img src="view/images/img_8.jpg" alt="Image placeholder">
                  <div class="blog-content-body">
                    <div class="post-meta">
                      <span class="category">Travel</span>
                      <span class="mr-2">March 15, 2018 </span> &bullet;
                      <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h2>There’s a Cool New Way for Men to Wear Socks and Sandals</h2>
                  </div>
                </a>
              </div>

              <div class="col-md-6">
                <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                  <img src="view/images/img_9.jpg" alt="Image placeholder">
                  <div class="blog-content-body">
                    <div class="post-meta">
                      <span class="category">Travel</span>
                      <span class="mr-2">March 15, 2018 </span> &bullet;
                      <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h2>There’s a Cool New Way for Men to Wear Socks and Sandals</h2>
                  </div>
                </a>
              </div>
              <div class="col-md-6">
                <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                  <img src="view/images/img_10.jpg" alt="Image placeholder">
                  <div class="blog-content-body">
                    <div class="post-meta">
                      <span class="category">Lifestyle</span>
                      <span class="mr-2">March 15, 2018 </span> &bullet;
                      <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h2>There’s a Cool New Way for Men to Wear Socks and Sandals</h2>
                  </div>
                </a>
              </div>

              <div class="col-md-6">
                <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                  <img src="view/images/img_11.jpg" alt="Image placeholder">
                  <div class="blog-content-body">
                    <div class="post-meta">
                      <span class="category">Lifestyle</span>
                      <span class="mr-2">March 15, 2018 </span> &bullet;
                      <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h2>There’s a Cool New Way for Men to Wear Socks and Sandals</h2>
                  </div>
                </a>
              </div>
              <div class="col-md-6">
                <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                  <img src="view/images/img_12.jpg" alt="Image placeholder">
                  <div class="blog-content-body">
                    <div class="post-meta">
                      <span class="category">Food</span>
                      <span class="mr-2">March 15, 2018 </span> &bullet;
                      <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h2>There’s a Cool New Way for Men to Wear Socks and Sandals</h2>
                  </div>
                </a>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 text-center">
                <nav aria-label="Page navigation" class="text-center">
                  <ul class="pagination">
                    <li class="page-item  active"><a class="page-link" href="#">Prev</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
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
                  <h2>Meagan Smith</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis sunt repellendus excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias minus.</p>
                  <p><a href="#" class="btn btn-primary btn-sm">Read my bio</a></p>
                  <p class="social">
                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                  </p>
                </div>
              </div>
            </div>

            <div class="sidebar-box">
              <h3 class="heading">Categories</h3>
              <ul class="categories">
                @foreach($categorys as $category)
                  <li><a href="#">{{$category->name}}</a></li>
                @endforeach

              </ul>
            </div>
            <!-- END sidebar-box -->

          <!-- END sidebar -->

        </div>
      </div>
    </section>
  
    <footer class="site-footer">
      <div class="container">
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