{{isset($msg)?$msg:""}}
<script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
<form action="{{route($action)}}" method="post" Enctype="Multipart/Form-Data">
    {{method_field($method)}}
    {{csrf_field()}}
    <input type="hidden" name="articleId" value="{{$articleId}}">
    分類:<select name="category_id">
        @foreach($categories as $category)
            @if(isset($article->category_id) && $article->category_id == $category->id)
                <option value="{{$category->id}}" selected>{{$category->name}}</option>
            @else
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endif
        @endforeach
    </select><br>
    標題:<input type="text" name="title" value="{{isset($article->title)?$article->title:""}}"><br>
    描述:<textarea name="discription">{{isset($article->discription)?$article->discription:""}}</textarea><br>
    內文:<textarea name="content">{{isset($article->content)?$article->content:""}}</textarea><br>
    @if(isset($article->img))
        <img src="{{$article->img_url}}"><br>
        <input type="hidden" name="imgUrl" value="{{$article->imgl}}">
    @endif
    圖片:<input type="text" name="img" value="{{isset($article->img)?$article->img:""}}">
    <input type="submit">
</form>

<script>CKEDITOR.replace("content");</script>
