<!DOCTYPE html>
<html lang="en">

<head>
    <title>DINOTAENG</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./imgs/index/01-logo.ico" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: antiquewhite;
        }

        .navbar {
            background-color: rgb(130, 76, 23);
            height: 40px;
            opacity: 0.8;
            z-index: 1050;
            /* 設置更高的層級，保證它在其他元素之上 */
        }

        .nav-link {
            color: antiquewhite;
        }

        .container {
            text-align: center;
        }

        span,
        h5,
        hr,
        p {
            color: rgb(130, 76, 23);
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <!-- navbar -->
    <div class="container-fluid">
        <div class="row">
            <!-- navbar bobo的logo 咖啡色 -->
            <nav class="navbar navbar-expand-sm fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('assets/images/index/logo.jpg')}}" class="rounded-circle" width="30px" height="30px" alt="bobo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link " href="./index.html">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="./shop.html">SHOP</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="./stories.html">STORIES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="./characters.html">CHARACTERS</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">MY
                                    ACCOUNT</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">LOGIN</a></li>
                                    <li><a class="dropdown-item" href="#">ORDER</a></li>
                                    <li><a class="dropdown-item" href="#">CART</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
    </div>

    <!-- 固定棉花糖圖標 -->
    <div class="container-fluid">
        <div class="row justify-content-center fixed-top">
            <div class="col-5 mt-5">
            </div>
            <div class="col-6 mt-5">
                <a href="./index.html" class="fixed-icon ">
                    <img src="{{ asset('assets/images/index/marshmallow.png')}}" alt="">
                </a>
            </div>
            <!-- <div class="col-6 mt-5">
            </div> -->
        </div>
    </div>


    <!-- 首頁圖片 -->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <img src="{{ asset('assets/images/about/about.gif')}}" style="width: 1300px;">
        </div>
    </div>

    <!-- 關於我的文字內容 -->
    <div class="row">
        <div class="col">
            <p class="fs-5 fw-bold text-center ">
                Dinotaeng depicts the story of tiny village named 'Marshville. <br>
                The mischievous residents, who are full ofenergy, <br>
                have one life goal - to find the best marshmallow! <br>
                Always joyful and sometimes clumsy, our villagers resolves obstacles with humour and originality, <br>
                treating every occasion as gleeful experiments of life’s possibilities. <br>
                Join Quokka, Bobo and Marsh in their search and share some of their positive energy along the way.
            </p>
        </div>
    </div>

    <!-- contact 字 -->
    <div class="container-fluid">
        <div class="row mt-5 ">
            <div class="col mb-5 d-flex justify-content-center">
                <img src="{{ asset('assets/images/about/contact.png')}}" alt="map" style="width: 180px; height: 40px;">
            </div>
        </div>
    </div>

    <!-- contact內容 -->
    <div class="row">
        <div class="col mb-5">
            <p class="fs-5  text-center ">
                다이노탱은 다양한 브랜드, 기업과의 즐거운 협업을 기다립니다. <br>
                협업 및 프로젝트 관련 내용은 이메일을 통해 문의 주세요. <br>

                dinotaeng@dinotaeng.com <br>
                <br>
                <br>
                도매 및 협찬, 홀세일 문의는 아래의 메일을 통해 문의주세요.<br>

                office_dinotaeng@dinotaeng.com<br>
        </div>
    </div>


    <!-- FOOTER -->
    <hr>
    <footer>
        <div class="container-fluid bd-footer py-4 mt-3">
            <div class="row justify-content-center">
                <div class="col-3 mb-3 text-center">
                    <a href="https://www.dinotaeng.com/"
                        class="d-inline-flex align-items-center mb-2  text-decoration-none">
                        <img src="{{ asset('assets/images/index/logo2.jpg')}}" width="40px" height="40px" alt="bobo">
                        <span class="fs-5 ms-3 ">DINOTAENG</span>
                    </a>
                    <!-- <ul class="list-unstyled small text-muted mt-3 ms-5">
                        <li>Designed by olivia</li>
                    </ul> -->
                </div>
                <div class="col-3 mb-3 text-center">
                    <h5>Reference</h5>
                    <ul class="list-unstyled small ">
                        <li><a href="https://dinotaeng.com/">Official Website</a></li>
                    </ul>
                </div>

                <div class="col-3 mb-3 text-center">
                    <h5>Follow Us</h5>
                    <a href="https://www.instagram.com/dinotaeng/" target="_blank">
                        <img src="{{ asset('assets/images/index/Instagram.png')}}" width="30px" height="30px" alt="Instagram">
                    </a>
                    <a href="https://www.facebook.com/dinotaeng.official/?locale=zh_TW" target="_blank" class="ms-3">
                        <img src="{{ asset('assets/images/index/facebook.png')}}" width="30px" height="30px" alt="Facebook">
                    </a>
                </div>
            </div>
        </div>
    </footer>



</body>

</html>