@extends('layouts.default')

@section("body")
    <div class="tintuc col-md-5 col-12 item pt-2">
        <ul class="nav nav-pills pb-1" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-tintuc-tab" data-bs-toggle="pill" data-bs-target="#pills-tintuc" type="button" role="tab" aria-controls="pills-tintuc" aria-selected="true">TIN TỨC</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-hd-tab" data-bs-toggle="pill" data-bs-target="#pills-hd" type="button" role="tab" aria-controls="pills-hd" aria-selected="false" tabindex="-1">HƯỚNG DẪN</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-ds-tab" data-bs-toggle="pill" data-bs-target="#pills-ds" type="button" role="tab" aria-controls="pills-ds" aria-selected="false" tabindex="-1">ĐẶC SẮC</button>
            </li>
            <!-- <li class="nav-item" role="presentation">
               <button class="nav-link" id="pills-nap-tab" data-bs-toggle="pill" data-bs-target="#pills-nap" type="button" role="tab" aria-controls="pills-nap" aria-selected="false" >HD NẠP</button>
             </li>-->
        </ul>
        <div class="new">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade active show" id="pills-tintuc" role="tabpanel" aria-labelledby="pills-tintuc-tab" tabindex="0">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a href="https://hocvienninja.vn/60/Su-Kien-Con-Dieu-Tuoi-Tho.html#news">Sự Kiện Con Diều Tuổi Thơ</a>
                        </li>
                        <li class="list-group-item">
                            <a href="https://hocvienninja.vn/59/Ra-Mat-Ninja-Loan-dau.html#news">Ra Mắt Ninja Loạn Đấu</a>
                        </li>
                        <li class="list-group-item">
                            <a href="https://hocvienninja.vn/58/Ra-Mat-Tinh-Nang-Kham-Ngoc.html#news">Ra Mắt Tính Năng Khảm Ngọc</a>
                        </li>
                        <li class="list-group-item">
                            <a href="https://hocvienninja.vn/57/Ngay-Hoi-Bong-da-Euro-2024.html#news">Ngày Hội Bóng Đá Euro 2024</a>
                        </li>

                    </ul>
                </div>
                <div class="tab-pane fade" id="pills-hd" role="tabpanel" aria-labelledby="pills-hd-tab" tabindex="0">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a href="https://hocvienninja.vn/56/Cach-sua-loi-mo-game-nhung-bi-thu-nho-tren-phien-ban-PC-May-tinh.html#news">Cách sửa lỗi mở game nhưng bị thu nhỏ trên phiên bản PC (Máy tính)</a>
                        </li>
                        <li class="list-group-item">
                            <a href="https://hocvienninja.vn/52/TRANG-Bi.html#news">TRANG BỊ</a>
                        </li>
                        <li class="list-group-item">
                            <a href="https://hocvienninja.vn/45/He-THoNG-NHaN-VaT.html#news">HỆ THỐNG NHÂN VẬT</a>
                        </li>
                        <li class="list-group-item">
                            <a href="https://hocvienninja.vn/44/He-THoNG-NPC.html#news">HỆ THỐNG NPC</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="pills-ds" role="tabpanel" aria-labelledby="pills-ds-tab" tabindex="0">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a href="https://hocvienninja.vn/50/THi-LUYeN-PHo-BaN-THEO-CaP-do.html#news">THÍ LUYỆN - PHÓ BẢN THEO CẤP ĐỘ</a>
                        </li>
                        <li class="list-group-item">
                            <a href="https://hocvienninja.vn/49/Giao-dich-PvP-va-Cho.html#news">Giao dịch PvP và Chợ</a>
                        </li>
                        <li class="list-group-item">
                            <a href="https://hocvienninja.vn/48/Auto-va-Toc-Bien.html#news">Auto và Tốc Biến</a>
                        </li>
                        <li class="list-group-item">
                            <a href="https://hocvienninja.vn/47/Tinh-Nang-Phan-Than.html#news">Tính Năng Phân Thân</a>
                        </li>
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


    <div class="card-title h5">Bài viết mới</div>
    <hr />
    <div>
        @foreach($baiViet as $item)
            <div class="post-item d-flex align-items-center my-2">
                <div class="post-image">
                    <img
                        src="/images/avatar.png"
                        alt="{{ $item->title }}"
                    />
                </div>
                <div>
                    <a
                        class="fw-bold"
                        href="/post/{{ $item->slug }}"
                        style="color: rgb(0, 126, 112)"
                    >{{ $item->title }}
                    </a>
                    <div
                        class="text-muted font-weight-bold"
                    >
                        Lượt xem: 1,581, Bình luận: 0
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="pt-2 card-title h5">Phúc lợi</div>
    <hr />
    <div>
        <div
            class="post-item d-flex align-items-center my-2"
        >
            <div class="post-image">
                <img
                    src="/images/avatar.png"
                    alt="Danh Sách Giftcode"
                />
            </div>
            <div>
                <a
                    class="fw-bold text-danger"
                    href="/post"
                >Danh Sách Giftcode</a
                >
                <div
                    class="text-muted font-weight-bold"
                >
                    Tổng hợp mã quà tặng công khai
                </div>
            </div>
        </div>
    </div>
    <div class="mt-4">
        <div class="card-title h5">Giới thiệu</div>
        <hr />
        <div class="fs-6">
            <p>
                Khí Phách Anh Hùng 3 là trò chơi nhập
                vai cổ trang đầu tiên trên điện thoại di
                động tại Việt Nam, với số lượng người
                tham gia đông đảo, tâm huyết.
            </p>
            <p class="text-center">
                <img
                    src="/images/j1KmkCx.png"
                    alt="Thumbnail"
                    class="w-100"
                />
            </p>
            <p>
                Trong game người chơi có thể lựa chọn
                một trong ba tuyến nhân vật với năm
                phong cách khác nhau với vũ khí khác
                nhau theo Ngũ Hành: Kim, Mộc, Thủy, Hỏa
                và Thổ.
            </p>
            <p class="text-center">
                <img
                    src="/images/6PffoBz.png"
                    alt="Thumbnail"
                    class="w-100"
                />
            </p>
            <p>
                Lồng ghép trong trò chơi là các sự kiện,
                các diễn biến lịch sử, những nhân vật có
                thật giúp người chơi cảm nhận được không
                khí thời xưa. Khi tham gia trò chơi,
                người chơi luôn có các thử thách thú vị,
                các hoạt động ban hội luôn sôi động và
                luôn có các sự kiện hấp dẫn định kỳ.
            </p>
        </div>
        <div class="card-title h5">
            Bạn nên tải phiên bản nào?
        </div>
        <hr />
        <div class="fs-6">
            <div class="content">
                <p>
                    Nếu bạn dùng điện thoại Androi hãy
                    sử dụng giả lập J2me Loader để có
                    trải nghiệm tốt nhất, còn đối với
                    máy tính hãy sử dụng giả lập Java
                    Microemulator hoặc Kemulator
                </p>
                <p>
                    Bản Iphone có 2 phiên bản đó là màn
                    hình ngang và màn hình dọc.
                </p>
                <p>
                    Nếu bạn dùng máy vi tính cá nhân,
                    laptop chạy Windows XP - Windows 7,
                    hãy tải bản PC.
                </p>
            </div>
        </div>
    </div>
@endsection
