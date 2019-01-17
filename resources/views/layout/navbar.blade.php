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
