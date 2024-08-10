@extends('layouts.default')

@section("body")
    <div class="container">
        <div class="slogan mx-auto d-flex position-relative">
            <img src="https://hocvienninja.vn/img2/Char.png" style="width: 90%;" class="mx-auto">
        </div>
{{--        <div class="download mx-auto d-none d-sm-block">--}}
{{--            <div class="row" style="display: flex; justify-content: center; align-items: center; width: 100%;">--}}
{{--                <div class="col-3 p-1"> <div class="text-center">--}}
{{--                        <a href="https://apps.apple.com/us/app/h%E1%BB%8Dc-vi%E1%BB%87n-ninja-shinobi-battle/id6474729571" target="_blank" alt="Học viện Ninja: Shinobi Battle APK Android" title="Học viện Ninja: Shinobi Battle iOS">--}}
{{--                            <img src="https://hocvienninja.vn/img2/DL_bt_IOS.png" style="height:46px !important;"></a>--}}
{{--                    </div>--}}
{{--                    <div class="text-center">--}}
{{--                        <a href="https://cdn.g4m.dev/download/88" target="_blank" alt="Học viện Ninja: Shinobi Battle PC" title="Học viện Ninja: Shinobi Battle PC" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Phiên bản: 1.6.0">--}}
{{--                            <img src="https://hocvienninja.vn/img2/DL_bt_PC.png?v=1" style="height:46px !important;">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="text-center">--}}
{{--                        <a href="https://cdn.g4m.dev/download/87" target="_blank" alt="Học viện Ninja: Shinobi Battle APK" title="Học viện Ninja: Shinobi Battle APK" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Phiên bản: 1.6.0">--}}
{{--                            <img src="https://hocvienninja.vn/img2/DL_bt_APK.png?v=1" style="height:46px !important;">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-6  d-flex napthe align-items-center justify-content-center">--}}
{{--                    <div class="col-4 text-center"><a href="https://pay.g4m.vn" target="_blank"><img width="100%" src="https://hocvienninja.vn/img2/DL_Gr_Purchase.png"></a></div>--}}
{{--                    <div class="col-4 text-center"><a href="https://hocvienninja.vn/12/Cap-nhat-ve-dai-ly-tinh-trang-cac-dai-ly.html#news"><img width="100%" src="https://hocvienninja.vn/img2/DL_Gr_DL.png"></a></div>--}}
{{--                    <div class="col-4 text-center"><a href="https://hocvienninja.vn/top"><img width="100%" src="https://hocvienninja.vn/img2/DL_Gr_Rank.png"></a></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="download mx-auto d-block d-sm-none" width="100%">--}}
{{--            <div class="row  d-flex">--}}
{{--                <div class="col-4  p-1 text-center ">--}}
{{--                </div>--}}
{{--                <div class="col-8  d-flex napthe align-items-center justify-content-center">--}}
{{--                    <div class="col-4 text-center"><a href="https://hocvienninja.vn/12/Cap-nhat-ve-dai-ly-tinh-trang-cac-dai-ly.html#news"><img width="100%" src="https://hocvienninja.vn/img2/DL_Gr_DL.png"></a></div>--}}
{{--                    <div class="col-4 text-center"><a href="https://hocvienninja.vn/top"><img width="100%" src="https://hocvienninja.vn/img2/DL_Gr_Rank.png"></a></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

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
    <div class="text-center title mx-auto mb-2">
        <img src="https://hocvienninja.vn/img2/Title_1.png" width="70%">
    </div>
    <button type="button" class="btn btn-light" onclick="history.back()">Trở về trang chủ</button>
    <div class="main px-4 py-4">
        <h3 class="text-center mb-2">{{ $item->title }}</h3>
        {!! $item->content !!}
    </div>
{{--        <div class="d-flex align-items-center">--}}
{{--            <div class="post-image d-none d-sm-block">--}}
{{--                <img--}}
{{--                    src="/images/avatar.png"--}}
{{--                    alt="{{ $item->title }}"--}}
{{--                />--}}
{{--                <div class="post-author">Admin</div>--}}
{{--            </div>--}}
{{--            <div class="post-detail flex-fill">--}}
{{--                <div class="fw-bold text-primary">--}}
{{--                    {{ $item->title }}--}}
{{--                </div>--}}
{{--                <div class="post-date">--}}
{{--                    13:58:56 27/07/2024--}}
{{--                </div>--}}
{{--                <div class="post-content">--}}
{{--                    {!! $item->content !!}--}}
{{--                </div>--}}
{{--                <div class="post-info mt-2">--}}
{{--                    1,631 lượt xem, 0 bình luận--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <hr class="my-3" />--}}
{{--        <div class="comment-list">--}}
{{--            <div class="row">--}}
{{--                <div--}}
{{--                    class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"--}}
{{--                ></div>--}}
{{--                <div--}}
{{--                    class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"--}}
{{--                >--}}
{{--                    <div>--}}
{{--                        <ul class="pagination">--}}
{{--                            <li class="page-item">--}}
{{--                                <a--}}
{{--                                    class="page-link"--}}
{{--                                    style="cursor: pointer"--}}
{{--                                >&lt;</a--}}
{{--                                >--}}
{{--                            </li>--}}
{{--                            <li class="page-item active">--}}
{{--                                <a--}}
{{--                                    class="page-link"--}}
{{--                                    style="cursor: pointer"--}}
{{--                                >1</a--}}
{{--                                >--}}
{{--                            </li>--}}
{{--                            <li class="page-item">--}}
{{--                                <a--}}
{{--                                    class="page-link"--}}
{{--                                    style="cursor: pointer"--}}
{{--                                >&gt;</a--}}
{{--                                >--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
@endsection
