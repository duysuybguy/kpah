@extends('layouts.default')

@section("body")
    <div class="main bg-transparent">
        {{--                <nav class="navbar bg-body-tertiary bg-white rounded-lg">--}}
        {{--                    <div class="container-fluid">--}}
        {{--                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">--}}
        {{--                            <span class="navbar-toggler-icon"></span>--}}
        {{--                        </button>--}}
        {{--                        <div class="navbar-brand m-0">--}}
        {{--                            --}}{{--                    <div class="navbar-brand d-block d-sm-none m-0">--}}

        {{--                            <a href="https://cdn.g4m.dev/download/87" target="_blank" alt="Học viện Ninja: Shinobi Battle APK Android" title="Học viện Ninja: Shinobi Battle APK Android">--}}
        {{--                                <img src="https://daitaydu.vn/img/DL_APK.png" style="height:33px !important;"></a>--}}
        {{--                            <a href="https://play.google.com/store/apps/details?id=com.g4m.hocvienninja" target="_blank" alt="Học viện Ninja: Shinobi Battle Play Store" title="Học viện Ninja: Shinobi Battle Play Store">--}}
        {{--                                <img src="https://daitaydu.vn/img/DL_GGP.png" style="height:33px !important;"></a>--}}
        {{--                            <a class="text-end" href="/"><img src="https://hocvienninja.vn/img2/hvnj.jpg" class="rounded2" width="42"></a>--}}
        {{--                        </div>--}}

        {{--                        <div class="collapse navbar-collapse menu " id="navbar-menu">--}}
        {{--                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto text-center">--}}
        {{--                                <li><a href="https://hocvienninja.vn" class="nav-link px-2 ">TRANG CHỦ</a></li>--}}
        {{--                                <li><a href="https://pay.g4m.vn" class="nav-link px-2 " target="_blank">NẠP VÀNG--}}
        {{--                                        <img src="https://hocvienninja.vn/img/icnMoney_1.png" class="align-top" width="25px">--}}
        {{--                                    </a></li>--}}
        {{--                                <li><a href="https://hocvienninja.vn/tin-tuc#news" class="nav-link px-2 ">TIN TỨC</a></li>--}}
        {{--                                <li><a href="https://hocvienninja.vn/huong-dan#news" class="nav-link px-2 ">HƯỚNG DẪN</a></li>--}}
        {{--                                <li><a href="https://www.facebook.com/hocvienninja.vn" class="nav-link px-2 ">FANPAGE</a></li>--}}
        {{--                                <li><a href="https://www.facebook.com/groups/ninja.g4m" class="nav-link px-2 ">GROUP</a></li>--}}
        {{--                            </ul>--}}
        {{--                            <!--<form class="d-flex" role="search">--}}
        {{--                              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">--}}
        {{--                              <button class="btn btn-outline-success" type="submit">Search</button>--}}
        {{--                            </form>-->--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </nav>--}}
        {{--                <div class="text-center card"><div class="card-body"><div class=""><a href="/"><img class="logo" alt="Logo" src="/images/logo.png" style="max-width: 180px;"></a></div><div class="mt-3"><div class="mt-3"><span class="btn btn-success me-2 px-3 py-1">Đăng nhập</span><span class="btn btn-success px-3 py-1">Đăng ký</span></div><div class="mt-3"><a class="btn btn-success px-3 py-1" href="/download">Tải Game</a></div></div></div></div>--}}
        {{--                <div class="mb-2 mt-2"><div class="row text-center justify-content-center row-cols-2 row-cols-lg-6 g-2 g-lg-2 mt-1"><div class="col"><div class="px-2"><a class="btn btn-menu btn-success w-100 fw-semibold active" href="/">Trang chủ</a></div></div><div class="col"><div class="px-2"><a class="btn btn-menu btn-success w-100 fw-semibold false" href="/recharge/momo/gold">Nạp lượng</a></div></div><div class="col"><div class="px-2"><a class="btn btn-menu btn-success w-100 fw-semibold false" href="/recharge/momo/coin">Nạp xu</a></div></div><div class="col"><div class="px-2"><a class="btn btn-menu btn-success w-100 fw-semibold false" href="/community">Box Zalo</a></div></div></div></div>--}}
        <div class="container">
            <div class="slogan mx-auto d-flex position-relative">
                <img src="https://hocvienninja.vn/img2/Char.png" style="width: 90%;" class="mx-auto">
            </div>
            <div class="download mx-auto d-sm-block">
                <div class="row flex-row" style="display: flex; justify-content: center; align-items: center">
                    <div class="col-md-3 col-4 p-1"> <div class="text-center">
                            <a href="https://apps.apple.com/us/app/h%E1%BB%8Dc-vi%E1%BB%87n-ninja-shinobi-battle/id6474729571" target="_blank" alt="Học viện Ninja: Shinobi Battle APK Android" title="Học viện Ninja: Shinobi Battle iOS">
                                <img class="w-100" src="https://hocvienninja.vn/img2/DL_bt_IOS.png" style="max-height: 46px; max-width: 126px"></a>
                        </div>
                        <div class="text-center">
                            <a href="https://cdn.g4m.dev/download/88" target="_blank" alt="Học viện Ninja: Shinobi Battle PC" title="Học viện Ninja: Shinobi Battle PC" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Phiên bản: 1.6.0">
                                <img class="w-100" src="https://hocvienninja.vn/img2/DL_bt_PC.png?v=1" style="max-height: 46px; max-width: 126px">
                            </a>
                        </div>
                        <div class="text-center">
                            <a href="https://cdn.g4m.dev/download/87" target="_blank" alt="Học viện Ninja: Shinobi Battle APK" title="Học viện Ninja: Shinobi Battle APK" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Phiên bản: 1.6.0">
                                <img class="w-100" src="https://hocvienninja.vn/img2/DL_bt_APK.png?v=1" style="max-height: 46px; max-width: 126px">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-8 d-flex flex-row napthe align-items-center justify-content-center">
                        <div class="col-4 text-center"><a href="https://pay.g4m.vn" target="_blank"><img width="100%" src="https://hocvienninja.vn/img2/DL_Gr_Purchase.png"></a></div>
                        <div class="col-4 text-center"><a href="https://hocvienninja.vn/12/Cap-nhat-ve-dai-ly-tinh-trang-cac-dai-ly.html#news"><img width="100%" src="https://hocvienninja.vn/img2/DL_Gr_DL.png"></a></div>
                        <div class="col-4 text-center"><a href="https://hocvienninja.vn/top"><img width="100%" src="https://hocvienninja.vn/img2/DL_Gr_Rank.png"></a></div>
                    </div>
                </div>
            </div>
{{--            <div class="download mx-auto d-block d-sm-none" width="100%">--}}
{{--                <div class="row  d-flex">--}}
{{--                    <div class="col-4  p-1 text-center ">--}}
{{--                    </div>--}}
{{--                    <div class="col-8  d-flex napthe align-items-center justify-content-center">--}}
{{--                        <div class="col-4 text-center"><a href="https://hocvienninja.vn/12/Cap-nhat-ve-dai-ly-tinh-trang-cac-dai-ly.html#news"><img width="100%" src="https://hocvienninja.vn/img2/DL_Gr_DL.png"></a></div>--}}
{{--                        <div class="col-4 text-center"><a href="https://hocvienninja.vn/top"><img width="100%" src="https://hocvienninja.vn/img2/DL_Gr_Rank.png"></a></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

            <!-- Modal -->
            <div class="modal fade modal-xl " id="modalat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="">
                            <img src="https://scontent.fsgn13-3.fna.fbcdn.net/v/t39.30808-6/401847604_122099041622120869_2631894899444580886_n.png?_nc_cat=102&amp;ccb=1-7&amp;_nc_sid=5f2048&amp;_nc_eui2=AeH1wQohhywk0SxUWHCxGi_ETOaHj196MApM5oePX3owCu0ynB7WjHkEiVmVMZ2s_7Q-F3VjOgxPv_xC7LfuEA2Q&amp;_nc_ohc=DKf0XFB_Ee4AX9hrt1A&amp;_nc_ht=scontent.fsgn13-3.fna&amp;oh=00_AfBihxrYbATth-NvM8uHwLa7D_cUaWuQoiU2rW738IkXyA&amp;oe=6566DDBC" width="100%" class="rounded">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="char pt-5">
            <div class="container ">
                <div class="tintuc  ">
                    <div class="text-center title mx-auto mb-2">
                        <img src="https://hocvienninja.vn/img2/Title_1.png" width="70%">
                    </div>
                    <div class="row news mx-auto pb-4">
                        <div class="col-md-6 col-12 bannerx">
                            <div class="p-1"><a href="#"><img class="bottom rounded " src="https://hocvienninja.vn/img2/Event_IMG_1.png" width="100%"></a></div>
                        </div>
                        <!--  d-none d-md-block d-lg-block d-sm-none-->
                        <div class="col-md-6 col-12 item pt-2 d-flex flex-column" style="min-height:300px">
                            <ul class="nav nav-pills pb-1" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active text-white" id="pills-tintuc-tab" data-bs-toggle="pill" data-bs-target="#pills-tintuc" type="button" role="tab" aria-controls="pills-tintuc" aria-selected="true">TIN TỨC</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link text-white" id="pills-hd-tab" data-bs-toggle="pill" data-bs-target="#pills-hd" type="button" role="tab" aria-controls="pills-hd" aria-selected="false" tabindex="-1">HƯỚNG DẪN</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link text-white" id="pills-ds-tab" data-bs-toggle="pill" data-bs-target="#pills-ds" type="button" role="tab" aria-controls="pills-ds" aria-selected="false" tabindex="-1">ĐẶC SẮC</button>
                                </li>
                                <!-- <li class="nav-item" role="presentation">
                                   <button class="nav-link" id="pills-nap-tab" data-bs-toggle="pill" data-bs-target="#pills-nap" type="button" role="tab" aria-controls="pills-nap" aria-selected="false" >HD NẠP</button>
                                 </li>-->
                            </ul>
                            <div class="new">

                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-tintuc" role="tabpanel" aria-labelledby="pills-tintuc-tab" tabindex="0">
                                        <ul class="list-group list-group-flush">
                                            @foreach($news as $new)
                                                <li class="list-group-item">
                                                    <a href="/post/{{ $new->slug }}">{{ $new->title }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="pills-hd" role="tabpanel" aria-labelledby="pills-hd-tab" tabindex="0">
                                        <ul class="list-group list-group-flush">
                                            @foreach($guides as $guide)
                                                <li class="list-group-item">
                                                    <a href="/post/{{ $guide->slug }}">{{ $guide->title }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="pills-ds" role="tabpanel" aria-labelledby="pills-ds-tab" tabindex="0">
                                        <ul class="list-group list-group-flush">
                                            @foreach($hots as $hot)
                                                <li class="list-group-item">
                                                    <a href="/post/{{ $hot->slug }}">{{ $hot->title }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="pills-nap" role="tabpanel" aria-labelledby="pills-nap-tab" tabindex="0">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <a href="https://hocvienninja.vn/51/dieu-Khoan-Su-Dung.html#news">Điều Khoản Sử Dụng</a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="https://hocvienninja.vn/12/Cap-nhat-ve-dai-ly-tinh-trang-cac-dai-ly.html#news"><span class="text-hot">[HOT]</span> Cập nhật về đại lý tình trạng các đại lý</a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="https://hocvienninja.vn/11/Huong-dan-nap-tai-trang-chu.html#news">Hướng dẫn nạp tại trang chủ</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center d-flex justify-content-center align-items-center pt-1"><a href="#" class="btn-more">Xem Thêm</a></div>

                        </div>
                    </div>
                </div>
                <div class="classx">
                    <div class="text-center title mx-auto mb-2 pt-3">
                        <img src="https://hocvienninja.vn/img2/Title_2.png" width="70%">
                    </div>

                    <div class="info mx-auto">
                        <div class="row">

                            <!--<div class="menu2 d-flex d-block d-sm-none w-100 pb-2" id="pills-tab" role="tablist">
                                    <div class="col" role="presentation">
                                      <a class="active" href="#" id="pills-tnk-tab" data-bs-toggle="pill" data-bs-target="#pills-tnk" type="button" role="tab" aria-controls="pills-tnk" aria-selected="true">
                                        <img id="tnk_btn2" class="btn-class" src="https://hocvienninja.vn/img/tnk.png" alt="Hình 1" width="200px">
                                      </a>
                                    </div>
                                    <div class="col" role="presentation">
                                      <a href="#" id="pills-tbg-tab" data-bs-toggle="pill" data-bs-target="#pills-tbg" type="button" role="tab" aria-controls="pills-tbg" aria-selected="false">
                                        <img id="tbg_btn2" class="btn-class" src="https://hocvienninja.vn/img/tbg_i.png" alt="Hình 2" width="200px">
                                      </a>
                                    </div>
                                    <div class="col" role="presentation">
                                      <a href="#" id="pills-dtt-tab" data-bs-toggle="pill" data-bs-target="#pills-dtt" type="button" role="tab" aria-controls="pills-dtt" aria-selected="false">
                                        <img id="dtt_btn2" class="btn-class" src="https://hocvienninja.vn/img/dtt_i.png" alt="Hình 3" width="200px"></a>
                                    </div>
                                    <div class="col" role="presentation">
                                      <a href="#" id="pills-snt-tab" data-bs-toggle="pill" data-bs-target="#pills-snt" type="button" role="tab" aria-controls="pills-snt" aria-selected="false">
                                        <img id="snt_btn2" class="btn-class" src="https://hocvienninja.vn/img/snt_i.png" alt="Hình 3" width="200px"></a>
                                    </div>
                                </div>-->
                            <div class="col-12 tab-content text-center" id="pills-tabContent">

                                <div class="tab-pane fade show active" id="pills-wp1" role="tabpanel" aria-labelledby="pills-wp1-tab" tabindex="0">
                                    <img src="https://hocvienninja.vn/img2/CharStyle_IMG_1.png" width="45%">
                                    <img src="https://hocvienninja.vn/img2/CharStyle_Info_1.png" width="45%">
                                </div>
                                <div class="tab-pane fade " id="pills-wp3" role="tabpanel" aria-labelledby="pills-wp3-tab" tabindex="0">
                                    <img src="https://hocvienninja.vn/img2/CharStyle_IMG_2.png" width="45%">
                                    <img src="https://hocvienninja.vn/img2/CharStyle_Info_2.png" width="45%">
                                </div>
                                <div class="tab-pane fade " id="pills-wp5" role="tabpanel" aria-labelledby="pills-wp5-tab" tabindex="0">
                                    <img src="https://hocvienninja.vn/img2/CharStyle_IMG_3.png" width="45%">
                                    <img src="https://hocvienninja.vn/img2/CharStyle_Info_3.png" width="45%">
                                </div>
                                <div class="tab-pane fade " id="pills-wp7" role="tabpanel" aria-labelledby="pills-wp7-tab" tabindex="0">
                                    <img src="https://hocvienninja.vn/img2/CharStyle_IMG_4.png" width="45%">
                                    <img src="https://hocvienninja.vn/img2/CharStyle_Info_4.png" width="45%">
                                </div>

                                <div class="tab-pane fade " id="pills-wp9" role="tabpanel" aria-labelledby="pills-wp9-tab" tabindex="0">
                                    <img src="https://hocvienninja.vn/img2/CharStyle_IMG_5.png" width="45%">
                                    <img src="https://hocvienninja.vn/img2/CharStyle_Info_5.png" width="45%">
                                </div>

                                <div class="tab-pane fade " id="pills-wp11" role="tabpanel" aria-labelledby="pills-wp11-tab" tabindex="0">
                                    <img src="https://hocvienninja.vn/img2/CharStyle_IMG_6.png" width="45%">
                                    <img src="https://hocvienninja.vn/img2/CharStyle_Info_6.png" width="45%">
                                </div>

                                <div class="tab-pane fade " id="pills-wp13" role="tabpanel" aria-labelledby="pills-wp13-tab" tabindex="0">
                                    <img src="https://hocvienninja.vn/img2/CharStyle_IMG_7.png" width="45%">
                                    <img src="https://hocvienninja.vn/img2/CharStyle_Info_7.png" width="45%">
                                </div>
                                <div class="tab-pane fade " id="pills-wp15" role="tabpanel" aria-labelledby="pills-wp15-tab" tabindex="0">
                                    <img src="https://hocvienninja.vn/img2/CharStyle_IMG_8.png" width="45%">
                                    <img src="https://hocvienninja.vn/img2/CharStyle_Info_8.png" width="45%">
                                </div>


                            </div>
                            <div class=" d-flex justify-content-center align-items-center">
                                <div class="menu" id="pills-tab" role="tablist">
                                    <div class="col m-2 iconclass" role="presentation">
                                        <a class="active" href="#" id="pills-wp1-tab" data-bs-toggle="pill" data-bs-target="#pills-wp1" type="button" role="tab" aria-controls="pills-wp1" aria-selected="true">
                                            <img id="wp1_btn" class="btn-class img-icon" src="https://hocvienninja.vn/img2/WpBG_2.png" alt="Hình 1" style="max-width: 70px;">
                                        </a>
                                        <a href="#" id="pills-wp3-tab" data-bs-toggle="pill" data-bs-target="#pills-wp3" type="button" role="tab" aria-controls="pills-wp3" aria-selected="false" tabindex="-1">
                                            <img id="wp3_btn" class="btn-class img-icon" src="https://hocvienninja.vn/img2/WpBG_3.png" alt="Hình 2" style="max-width: 70px;">
                                        </a>
                                        <a href="#" id="pills-wp5-tab" data-bs-toggle="pill" data-bs-target="#pills-wp5" type="button" role="tab" aria-controls="pills-wp5" aria-selected="false" tabindex="-1">
                                            <img id="wp5_btn" class="btn-class img-icon" src="https://hocvienninja.vn/img2/WpBG_5.png" alt="Hình 3" style="max-width: 70px;"></a>

                                        <a href="#" id="pills-wp7-tab" data-bs-toggle="pill" data-bs-target="#pills-wp7" type="button" role="tab" aria-controls="pills-wp7" aria-selected="false" tabindex="-1">
                                            <img id="wp7_btn" class="btn-class img-icon" src="https://hocvienninja.vn/img2/WpBG_7.png" alt="Hình 3" style="max-width: 70px;"></a>

                                        <a href="#" id="pills-wp9-tab" data-bs-toggle="pill" data-bs-target="#pills-wp9" type="button" role="tab" aria-controls="pills-wp9" aria-selected="false" tabindex="-1">
                                            <img id="wp9_btn" class="btn-class img-icon" src="https://hocvienninja.vn/img2/WpBG_9.png" alt="Hình 3" style="max-width: 70px;"></a>

                                        <a href="#" id="pills-wp11-tab" data-bs-toggle="pill" data-bs-target="#pills-wp11" type="button" role="tab" aria-controls="pills-wp11" aria-selected="false" tabindex="-1">
                                            <img id="wp11_btn" class="btn-class img-icon" src="https://hocvienninja.vn/img2/WpBG_11.png" alt="Hình 3" style="max-width: 70px;"></a>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--                <div class="container">--}}
        {{--                    @yield("body")--}}
        {{--                </div>--}}
    </div>
    <script>
        function handleTabClick(){
            console.log('handleTabClick');
        }

        $( document ).ready(function() {
            document.getElementById("wp1_btn").src="https://hocvienninja.vn/img2/WpBG_2.png";

            $(".char .info .menu a").on("click", function() {
                updateBackground("wp1", 1, 2);
                updateBackground("wp3", 3, 4);
                updateBackground("wp5", 5, 6);
                updateBackground("wp7", 7, 8);
                updateBackground("wp9", 9, 10);
                updateBackground("wp11", 11, 12);
                updateBackground("wp13", 13, 14);
                updateBackground("wp15", 15, 16);
            });

            function updateBackground(tabId, inactiveIndex, activeIndex) {
                var $tab = $('#pills-' + tabId + '-tab');
                var isActive = $tab.hasClass('active');
                var btnSrc = isActive ? activeIndex : inactiveIndex;
                document.getElementById(tabId + "_btn").src = "https://hocvienninja.vn/img2/WpBG_" + btnSrc + ".png";
            }
        });
    </script>
@endsection
