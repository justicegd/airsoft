    <table>
        <tr>
            <td>
                分類
            </td>
            <td>
                名稱
            </td>
            <td>
                操作
                <input type="button" onclick="window.open('{{route("backend-addArticlePage",[0])}}')" value="新增">
            </td>
        </tr>
        @foreach($articles as $article)
            <tr>
                <td>{{$article->category->name}}</td>
                <td>{{$article->title}}</td>
                <td><input type="button" onclick="window.open('{{route("backend-addArticlePage",[$article->id,"ca_id"=>$article->category_id])}}')" value="修改"></td>
            </tr>
        @endforeach
    </table>

