<script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
<form action="{{route('addArticle')}}" method="post" Enctype="Multipart/Form-Data">
    {{method_field("post")}}
    {{csrf_field()}}
    分類:<select name="category_id">
        @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select><br>
    標題:<input type="text" name="title"><br>
    描述:<textarea name="discription"></textarea><br>
    內文:<textarea name="content"></textarea><br>
    圖片:<input type="file" name="img">
    <input type="submit">
</form>

<script>CKEDITOR.replace("content");</script>
