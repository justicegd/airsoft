@extends('backend.layout.main')
@section('content')
    <input type="button" onclick="window.open('{{route("backend-addArticlePage",[0])}}')" value="新增文章">
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            文章列表</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>分類</th>
                        <th>文章名稱</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($articles as $article)
                        <tr>
                            <td>{{$article->category->name}}</td>
                            <td>{{$article->title}}</td>
                            <td><input type="button" onclick="window.open('{{route("backend-addArticlePage",[$article->id,"ca_id"=>$article->category_id])}}')" value="修改">
                                <input type="button" onclick="window.open('{{route('article',[$article->id,"ca_id"=>$article->category_id])}}')" value="觀看文章">
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection()
