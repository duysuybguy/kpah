@extends('layouts.app')

@section('body')
    <div class="container">
        <div class="main">
            <div class="text-center card">
                <div class="card-body">
                    <div class="">
                        <a href="/"
                        ><img
                                class="logo"
                                alt="Logo"
                                src="/images/logo.png"
                                style="max-width: 180px"
                            /></a>
                    </div>
                    <div class="mt-3">
                        <div class="mt-3">
                                    <span class="btn btn-success me-2 px-3 py-1"
                                    >Đăng nhập</span
                                    ><span class="btn btn-success px-3 py-1"
                            >Đăng ký</span
                            >
                        </div>
                        <div class="mt-3">
                            <a
                                class="btn btn-success px-3 py-1"
                                href="/download.html"
                            >Tải Game</a
                            >
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <div
                    class="row text-center justify-content-center row-cols-2 row-cols-lg-6 g-2 g-lg-2 mt-1"
                >
                    <div class="col">
                        <div class="px-2">
                            <a
                                class="btn btn-menu btn-success w-100 fw-semibold false"
                                href="/"
                            >Trang chủ</a
                            >
                        </div>
                    </div>
                    <div class="col">
                        <div class="px-2">
                            <a
                                class="btn btn-menu btn-success w-100 fw-semibold false"
                                href="/recharge/momo/gold"
                            >Nạp lượng</a
                            >
                        </div>
                    </div>
                    <div class="col">
                        <div class="px-2">
                            <a
                                class="btn btn-menu btn-success w-100 fw-semibold false"
                                href="/recharge/momo/coin"
                            >Nạp xu</a
                            >
                        </div>
                    </div>
                    <div class="col">
                        <div class="px-2">
                            <a
                                class="btn btn-menu btn-success w-100 fw-semibold false"
                                href="community.html"
                            >Box Zalo</a
                            >
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="fw-semibold text-center h5">
                        TẢI GAME CHO ANDROID
                    </div>
                    <div class="text-center">
                                <span class="fw-semibold"
                                >Cách 1: Phiên bản APK, tải về chơi
                                    ngay</span
                                >
                        <div>
                            <a
                                href="https://files.hso2.com/filebrowser/api/public/dl/8AbkXKXX/kpah3/KPAH_230_r.apk"
                                class="btn btn-success me-1 mt-1 py-1"
                            >Tải phiên bản gốc</a
                            >
                        </div>
                    </div>
                    <div class="text-center mt-4">
                                <span class="fw-semibold"
                                >Cách 2: Giả lập J2ME Loader (khuyên
                                    dùng)</span
                                >
                        <div>
                            <a
                                href="https://files.hso2.com/filebrowser/api/public/dl/EIwCwISC/kpah3/KPAH3_AutoLogin.jar"
                                class="btn btn-success me-1 mt-1 py-1"
                            >Tải phiên bản J2ME</a
                            >
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="h6">Hướng dẫn cách cài đặt</div>
                        <div>
                            <b>Bước 1:</b> Lên CHPlay tải J2Me Loader
                            hoặc tải
                            <a
                                href="https://play.google.com/store/apps/details?id=ru.playsoftware.j2meloader&amp;hl=vi&amp;gl=US"
                            >tại đây</a
                            >
                        </div>
                        <div>
                            <b>Bước 2:</b> Tải một trong các phiên bản
                            bên trên về máy
                        </div>
                        <div>
                            <b>Bước 3:</b> Bấm mở trực tiếp phiên bản đã
                            tải về hoặc vào J2MeLoader bấm dấu cộng, sau
                            đó tìm phiên bản đã tải về rồi chạy
                        </div>
                        <br />
                        <div>
                            Trước khi chạy, các bạn nhớ cài đặt màn
                            hình, bàn phím ảo theo ý thích nhé
                        </div>
                        <div>
                            Video hướng dẫn:
                            <a
                                href="https://www.youtube.com/shorts/8ajySmPA-rQ"
                            >click để xem</a
                            >
                        </div>
                    </div>
                    <div
                        class="mt-4 text-center fw-semibold link-warning cursor-pointer"
                    >
                        Xem tất cả phiên bản
                    </div>
                </div>
            </div>
            <div class="text-center my-2">
                <div class="age-rule">
                    <img
                        src="/images/age-rule.jpg"
                        alt="Age Rule"
                        height="12"
                    /><span class="ms-1"
                    >Trò chơi dành cho người chơi 12 tuổi trở lên.
                                Chơi quá 180 phút mỗi ngày sẽ có hại cho sức
                                khỏe</span
                    >
                </div>
            </div>
        </div>
    </div>
    </div>
    <div id="monica-content-root" class="monica-widget"></div>
@endsection

@section('styles')
    <style id="NotiflixReportInternalCSS">
        [id^="NotiflixReportWrap"] {
            position: fixed;
            z-index: 4002;
            width: 100%;
            height: 100%;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            font-family: "Quicksand", -apple-system, BlinkMacSystemFont,
            "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            left: 0;
            top: 0;
            padding: 10px;
            color: #1e1e1e;
            border-radius: 25px;
            background: transparent;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
        }
        [id^="NotiflixReportWrap"] * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }
        [id^="NotiflixReportWrap"] > div[class*="-overlay"] {
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            background: rgba(255, 255, 255, 0.5);
            position: fixed;
            z-index: 0;
        }
        [id^="NotiflixReportWrap"] > div.nx-report-click-to-close {
            cursor: pointer;
        }
        [id^="NotiflixReportWrap"] > div[class*="-content"] {
            width: 320px;
            max-width: 100%;
            max-height: 96vh;
            overflow-x: hidden;
            overflow-y: auto;
            border-radius: inherit;
            padding: 10px;
            -webkit-filter: drop-shadow(0 0 5px rgba(0, 0, 0, 0.05));
            filter: drop-shadow(0 0 5px rgba(0, 0, 0, 0.05));
            border: 1px solid rgba(0, 0, 0, 0.03);
            background: #f8f8f8;
            position: relative;
            z-index: 1;
        }
        [id^="NotiflixReportWrap"]
        > div[class*="-content"]::-webkit-scrollbar {
            width: 0;
            height: 0;
        }
        [id^="NotiflixReportWrap"]
        > div[class*="-content"]::-webkit-scrollbar-thumb {
            background: transparent;
        }
        [id^="NotiflixReportWrap"]
        > div[class*="-content"]::-webkit-scrollbar-track {
            background: transparent;
        }
        [id^="NotiflixReportWrap"]
        > div[class*="-content"]
        > div[class$="-icon"] {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            width: 110px;
            height: 110px;
            display: block;
            margin: 6px auto 12px;
        }
        [id^="NotiflixReportWrap"]
        > div[class*="-content"]
        > div[class$="-icon"]
        svg {
            min-width: 100%;
            max-width: 100%;
            height: auto;
        }
        [id^="NotiflixReportWrap"] > * > h5 {
            word-break: break-all;
            word-break: break-word;
            font-family: inherit !important;
            font-size: 16px;
            font-weight: 500;
            line-height: 1.4;
            margin: 0 0 10px;
            padding: 0 0 10px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            float: left;
            width: 100%;
            text-align: center;
        }
        [id^="NotiflixReportWrap"] > * > p {
            word-break: break-all;
            word-break: break-word;
            font-family: inherit !important;
            font-size: 13px;
            line-height: 1.4;
            font-weight: normal;
            float: left;
            width: 100%;
            padding: 0 10px;
            margin: 0 0 10px;
        }
        [id^="NotiflixReportWrap"] a#NXReportButton {
            word-break: break-all;
            word-break: break-word;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            font-family: inherit !important;
            -webkit-transition: all 0.25s ease-in-out;
            -o-transition: all 0.25s ease-in-out;
            transition: all 0.25s ease-in-out;
            cursor: pointer;
            float: right;
            padding: 7px 17px;
            background: #32c682;
            font-size: 14px;
            line-height: 1.4;
            font-weight: 500;
            border-radius: inherit !important;
            color: #fff;
        }
        [id^="NotiflixReportWrap"] a#NXReportButton:hover {
            -webkit-box-shadow: inset 0 -60px 5px -5px rgba(0, 0, 0, 0.25);
            box-shadow: inset 0 -60px 5px -5px rgba(0, 0, 0, 0.25);
        }
        [id^="NotiflixReportWrap"].nx-rtl-on a#NXReportButton {
            float: left;
        }
        [id^="NotiflixReportWrap"]
        > div[class*="-overlay"].nx-with-animation {
            -webkit-animation: report-overlay-animation 0.3s ease-in-out 0s
            normal;
            animation: report-overlay-animation 0.3s ease-in-out 0s normal;
        }
        @-webkit-keyframes report-overlay-animation {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        @keyframes report-overlay-animation {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        [id^="NotiflixReportWrap"]
        > div[class*="-content"].nx-with-animation.nx-fade {
            -webkit-animation: report-animation-fade 0.3s ease-in-out 0s
            normal;
            animation: report-animation-fade 0.3s ease-in-out 0s normal;
        }
        @-webkit-keyframes report-animation-fade {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        @keyframes report-animation-fade {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        [id^="NotiflixReportWrap"]
        > div[class*="-content"].nx-with-animation.nx-zoom {
            -webkit-animation: report-animation-zoom 0.3s ease-in-out 0s
            normal;
            animation: report-animation-zoom 0.3s ease-in-out 0s normal;
        }
        @-webkit-keyframes report-animation-zoom {
            0% {
                opacity: 0;
                -webkit-transform: scale(0.5);
                transform: scale(0.5);
            }
            50% {
                opacity: 1;
                -webkit-transform: scale(1.05);
                transform: scale(1.05);
            }
            100% {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }
        @keyframes report-animation-zoom {
            0% {
                opacity: 0;
                -webkit-transform: scale(0.5);
                transform: scale(0.5);
            }
            50% {
                opacity: 1;
                -webkit-transform: scale(1.05);
                transform: scale(1.05);
            }
            100% {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }
        [id^="NotiflixReportWrap"].nx-remove
        > div[class*="-overlay"].nx-with-animation {
            opacity: 0;
            -webkit-animation: report-overlay-animation-remove 0.3s
            ease-in-out 0s normal;
            animation: report-overlay-animation-remove 0.3s ease-in-out 0s
            normal;
        }
        @-webkit-keyframes report-overlay-animation-remove {
            0% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }
        @keyframes report-overlay-animation-remove {
            0% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }
        [id^="NotiflixReportWrap"].nx-remove
        > div[class*="-content"].nx-with-animation.nx-fade {
            opacity: 0;
            -webkit-animation: report-animation-fade-remove 0.3s ease-in-out
            0s normal;
            animation: report-animation-fade-remove 0.3s ease-in-out 0s
            normal;
        }
        @-webkit-keyframes report-animation-fade-remove {
            0% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }
        @keyframes report-animation-fade-remove {
            0% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }
        [id^="NotiflixReportWrap"].nx-remove
        > div[class*="-content"].nx-with-animation.nx-zoom {
            opacity: 0;
            -webkit-animation: report-animation-zoom-remove 0.3s ease-in-out
            0s normal;
            animation: report-animation-zoom-remove 0.3s ease-in-out 0s
            normal;
        }
        @-webkit-keyframes report-animation-zoom-remove {
            0% {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
            50% {
                opacity: 0.5;
                -webkit-transform: scale(1.05);
                transform: scale(1.05);
            }
            100% {
                opacity: 0;
                -webkit-transform: scale(0);
                transform: scale(0);
            }
        }
        @keyframes report-animation-zoom-remove {
            0% {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
            50% {
                opacity: 0.5;
                -webkit-transform: scale(1.05);
                transform: scale(1.05);
            }
            100% {
                opacity: 0;
                -webkit-transform: scale(0);
                transform: scale(0);
            }
        }
    </style>
    <style id="NotiflixLoadingInternalCSS">
        [id^="NotiflixLoadingWrap"] {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            position: fixed;
            z-index: 4000;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            text-align: center;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            background: rgba(0, 0, 0, 0.8);
            font-family: "Quicksand", -apple-system, BlinkMacSystemFont,
            "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        }
        [id^="NotiflixLoadingWrap"] * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }
        [id^="NotiflixLoadingWrap"].nx-loading-click-to-close {
            cursor: pointer;
        }
        [id^="NotiflixLoadingWrap"] > div[class*="-icon"] {
            width: 60px;
            height: 60px;
            position: relative;
            -webkit-transition: top 0.2s ease-in-out;
            -o-transition: top 0.2s ease-in-out;
            transition: top 0.2s ease-in-out;
            margin: 0 auto;
        }
        [id^="NotiflixLoadingWrap"] > div[class*="-icon"] img,
        [id^="NotiflixLoadingWrap"] > div[class*="-icon"] svg {
            max-width: unset;
            max-height: unset;
            width: 100%;
            height: auto;
            position: absolute;
            left: 0;
            top: 0;
        }
        [id^="NotiflixLoadingWrap"] > p {
            position: relative;
            margin: 10px auto 0;
            font-family: inherit !important;
            font-weight: normal;
            font-size: 15px;
            line-height: 1.4;
            padding: 0 10px;
            width: 100%;
            text-align: center;
        }
        [id^="NotiflixLoadingWrap"].nx-with-animation {
            -webkit-animation: loading-animation-fade 0.3s ease-in-out 0s
            normal;
            animation: loading-animation-fade 0.3s ease-in-out 0s normal;
        }
        @-webkit-keyframes loading-animation-fade {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        @keyframes loading-animation-fade {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        [id^="NotiflixLoadingWrap"].nx-with-animation.nx-remove {
            opacity: 0;
            -webkit-animation: loading-animation-fade-remove 0.3s
            ease-in-out 0s normal;
            animation: loading-animation-fade-remove 0.3s ease-in-out 0s
            normal;
        }
        @-webkit-keyframes loading-animation-fade-remove {
            0% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }
        @keyframes loading-animation-fade-remove {
            0% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }
        [id^="NotiflixLoadingWrap"] > p.nx-loading-message-new {
            -webkit-animation: loading-new-message-fade 0.3s ease-in-out 0s
            normal;
            animation: loading-new-message-fade 0.3s ease-in-out 0s normal;
        }
        @-webkit-keyframes loading-new-message-fade {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        @keyframes loading-new-message-fade {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
    </style>
    <style>
        .Typewriter__cursor {
            -webkit-animation: Typewriter-cursor 1s infinite;
            animation: Typewriter-cursor 1s infinite;
            margin-left: 1px;
        }
        @-webkit-keyframes Typewriter-cursor {
            0% {
                opacity: 0;
            }
            50% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }
        @keyframes Typewriter-cursor {
            0% {
                opacity: 0;
            }
            50% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }
    </style>
@endsection
