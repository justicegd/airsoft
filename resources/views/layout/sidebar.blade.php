<div class="col-md-12 col-lg-4 sidebar">
    <!-- END sidebar-box -->
    <div class="sidebar-box">
        <div class="bio text-center">
            <img src="{{asset("view/images/person_1.jpg")}}" alt="Image Placeholder" class="img-fluid">
            <div class="bio-body">
                <h2>文文 (Irvin)</h2>
                <p>本職軟體工程師，假日戰士，多出沒於屏東、高雄，除了資訊技術外，也喜歡研究生存遊戲相關知識，樂於分享生活中有興趣的人事物。</p>
                <p class="social">
                    <a href="https://www.facebook.com/WenAirsoft/" target="_blank"  class="p-2"><span class="fa fa-facebook"></span></a>
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
