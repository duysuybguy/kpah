@extends("layouts.app")

@section("styles")
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

    <style>
        .tintuc .bannerx{
            background: url(/images/Event_IMG_BG.png) center top no-repeat;
            background-size: contain;
            padding: 10px;
        }
        .tintuc .news{
            max-width: 800px;
        }
        .tintuc .news .item img{
            padding: 5px;
            width: 45%;
        }

        .tintuc .new .nav{
            font-size: 14px;
        }
        .tintuc .new .list-group{
            padding:5px;
            --bs-list-group-bg: none;
        }
        .tintuc .new .nav-pills .nav-link{
            border-radius: 0;
            background: none;
        }
        .tintuc .nav-pills .nav-link.active, .nav-pills .show>.nav-link{
            color: #da3000;
            background: url(/images/News_Title_BGtext.png) center top no-repeat;
            /* border-bottom: #da3000 2px solid; */
            border-radius: 0;
            font-size: 12px;
            /* height: 35px; */
            width: 100%;
            background-size: 100% 100% !important;
        }
        .tintuc .nav-pills .nav-item{
            width: 33%;
            text-align: center;
        }
        .tintuc .nav-pills .nav-link{
            color: #003600;
            /* border-bottom: #cae0d8 2px solid; */
            font-size: 12px;
            width: 100%;
        }

        .tintuc .new .list-group-item{
            font-size: 15px;
            padding: 3px;
        }
        .tintuc .new .list-group-item a{
            text-decoration: none;
            color: #292929;
        }
        .tintuc .btn-more{
            display: block;
            /* height: 30px; */
            width: 150px;
            text-decoration: none;
            line-height: 30px;
            color: #ffde72;
            background: url(/images/News_bt_more.png) center top no-repeat;
            background-size: 100% 100% !important;
        }
        .tintuc .new  li.list-group-item::before {
            content: "♦";
            color: #f7a759;
            font-weight: bold;
            display: inline-block;

        }
        .tintuc .new{
            width: 100%;
            height: 100%;
            max-height: 250px;
            background: url(/images/News_BG_info.png) center top no-repeat;
            background-size: 100% 100% !important;
            padding: 15px;
        }

        .main{
            background-color: #fefadf;
            color: black;
        }
    </style>
@endsection
