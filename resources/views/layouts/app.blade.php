<!DOCTYPE html>
<html translate="no">
<head>
    <meta charset="utf-8" />
    <link rel="icon" href="/images/logo.png" />
    <meta
        name="viewport"
        content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"
    />
    <meta name="theme-color" content="#000000" />
    <meta name="title" content="Khí Phách Anh Hùng 3" />
    <meta
        name="description"
        content="Khí Phách Anh Hùng 3 - Game Nam Quốc Sơn Hà Hot 2024"
    />
    <meta
        name="keywords"
        content="kpah, khí phách anh hùng, kpah3, nqsh, nam quốc sơn hà, kpah2"
    />
    <meta name="author" content="KPAH3" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://kpah3.com/" />
    <meta property="og:title" content="Khí Phách Anh Hùng 3" />
    <meta
        property="og:description"
        content="Khí Phách Anh Hùng 3 - Game Nam Quốc Sơn Hà Hot 2024"
    />
    <meta property="og:image" content="https://kpah3.com/banner.png" />
    <meta property="og:image:alt" content="kpah3.com" />
    <link rel="apple-touch-icon" href="https://kpah3.com/logo.png" />
    <link rel="manifest" href="https://kpah3.com/manifest.json" />
    <title>Khí Phách Anh Hùng 3</title>
    <script defer="defer" src="/static/js/main.2c08d74c.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"></script>
    <link href="/static/css/main.dac7ecea.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.2/anime.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    @yield('styles')
</head>
<body>
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
        <div
            id="background"
            class="background"
            style="transform: translate(-6%, -22%)"
        ></div>
        <div class="container">
            @yield('body')
        </div>
    </div>
    <div class="fade modal-backdrop d-none"></div>
    <div role="dialog" aria-modal="true" class="fade modal d-none" tabindex="-1" style="display: block;"><div class="modal-dialog"><div class="modal-content"><div class="modal-body"><div class="my-2"><div class="text-center"><a href="/"><img class="logo" alt="Logo" src="/images/logo.png" style="max-width: 150px;"></a></div></div><form action="#" class="py-3 mx-3"><div class="mb-2"><label class="fw-semibold">Tên đăng nhập</label><div class="input-group"><input name="username" type="text" autocomplete="off" placeholder="Nhập tên đăng nhập" class="form-control form-control-solid" value=""></div></div><div class="mb-2"><label class="fw-semibold">Số điện thoại</label><div class="input-group"><input name="phone" type="text" autocomplete="off" placeholder="Nhập số điện thoại" class="form-control form-control-solid" value=""></div></div><div class="mb-2"><label class="fw-semibold">Mật khẩu</label><div class="input-group"><input name="password" type="password" autocomplete="off" placeholder="Nhập mật khẩu" class="form-control form-control-solid" value="ZCgw9fyqps7"></div></div><div class="mb-2"><label class="fw-semibold">Nhập lại mật khẩu</label><div class="input-group"><input name="confirm_password" type="password" autocomplete="off" placeholder="Nhập nhập lại mật khẩu" class="form-control form-control-solid" value=""></div></div><div class="text-center mt-3"><button type="submit" class="me-3 btn btn-primary">Đăng ký</button><button type="button" class="btn btn-danger">Hủy bỏ</button><div class="pt-3">Bạn đã có tài khoản? <span class="link-warning cursor-pointer">Đăng nhập ngay</span></div><div><span class="link-warning cursor-pointer">Quên mật khẩu</span></div></div></form></div></div></div></div>
    <div role="dialog" aria-modal="true" class="fade modal d-none" tabindex="-1" style="display: block;"><div class="modal-dialog"><div class="modal-content"><div class="modal-body"><div class="my-2"><div class="text-center"><a href="/"><img class="logo" alt="Logo" src="/images/logo.png" style="max-width: 150px;"></a></div></div><form action="#" class="py-3 mx-3"><div class="mb-2"><div class="input-group"><input name="username" type="text" autocomplete="off" placeholder="Tên đăng nhập" class="form-control form-control-solid" value=""></div></div><div class="mb-2"><div class="input-group"><input name="password" type="password" autocomplete="off" placeholder="Mật khẩu" class="form-control form-control-solid" value="ZCgw9fyqps7"></div></div><div class="text-center mt-3"><button type="submit" class="me-3 btn btn-primary">Đăng nhập</button><button type="button" class="btn btn-danger">Hủy bỏ</button><div class="pt-3">Bạn chưa có tài khoản? <span class="link-warning cursor-pointer">Đăng ký ngay</span></div><div><span class="link-warning cursor-pointer">Quên mật khẩu</span></div></div></form></div></div></div></div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const background = document.querySelector('.background');

            function getRandomPosition() {
                const x = Math.random() * 16 - 22; // Range: -22% to -6%
                const y = Math.random() * 16 - 22; // Range: -22% to -6%
                return { x, y };
            }

            let first = getRandomPosition();
            background.style.transform = `translate(${first.x}%, ${first.y}%)`;

            setInterval(function(){
                let pos = getRandomPosition();
                background.style.transform = `translate(${pos.x}%, ${pos.y}%)`;
            }, 5000);
        });
        let loginBtn = document.getElementById('login-btn');
        let signUpBtn = document.getElementById('sign-up-btn');

        loginBtn.addEventListener('click', function() {
            document.querySelector('.modal-backdrop').classList.remove('d-none');
            document.querySelectorAll('.modal')[1].classList.remove('d-none');

            // ADD SHOW TO ABOVE
            document.querySelector('.modal-backdrop').classList.add('show');
            document.querySelectorAll('.modal')[1].classList.add('show');
        });

        signUpBtn.addEventListener('click', function() {
            document.querySelector('.modal-backdrop').classList.remove('d-none');
            document.querySelectorAll('.modal')[0].classList.remove('d-none');

            // ADD SHOW TO ABOVE
            document.querySelector('.modal-backdrop').classList.add('show');
            document.querySelectorAll('.modal')[0].classList.add('show');
        });

        document.querySelector('.modal-backdrop').addEventListener('click', function() {
            document.querySelector('.modal-backdrop').classList.add('d-none');
            // remove show
            document.querySelector('.modal-backdrop').classList.remove('show');

            document.querySelectorAll('.modal').forEach(function(modal) {
                modal.classList.add('d-none');
                // remove show
                modal.classList.remove('show');
            });
        });
    </script>
</body>
