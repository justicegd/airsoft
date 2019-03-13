<html prefix='og: http://ogp.me/ns#'>
<meta property="og:type" content="blag"></meta>
@if(isset($web_title))
    <meta property="og:title" content="{{$web_title}}"></meta>
@endif
@if(isset($web_url))
    <meta property="og:url" content="{{$web_url}}"></meta>
@endif
@if(isset($web_img))
    <meta property="og:image" content="{{$web_img}}"></meta>
@endif
@if(isset($web_discription))
    <meta property="og:description" content="{{$web_discription}}"></meta>
@endif
    <meta property="og:site_name" content="文文日誌"></meta>