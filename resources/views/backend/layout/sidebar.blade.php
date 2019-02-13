<!-- Sidebar -->
<ul class="sidebar navbar-nav">

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>文章</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="{{route("backend-addArticlePage",[0])}}">新增文章</a>
            <a class="dropdown-item" href="{{route("backend-articleList")}}">文章列表</a>
        </div>
    </li>

</ul>
