<form action="{{route('login')}}" method="post" >
    {{csrf_field()}}
    帳號:<input type="text" name="account"><br>
    密碼:<input type="password" name="password"><br>
    <input type="submit">
</form>


