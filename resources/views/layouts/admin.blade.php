<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}}</title>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>




<body>
    <!-- Header logo -->
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-2 col-sm-12 logo ">
                <a href="./">
                    <img src="{{asset('images/logo/CSC.png')}}" />
                </a>
            </div>
            <div class="col-lg-10 col-sm-12 align-self-center topic">

                <div class="csttc">ວິທະຍາໄລຄູສົງຈຳປາສັກ</div>

                <div class="vision">
                    ຮຽນຮູ້ດີ ມີວິໄນ ຮູ້ນຳໃຊ້ຫຼັກວິຊາການສຶບສານວັດທະນະທຳຂອງຊາດ
                </div>

            </div>
        </div>
    </div>

    <!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-light bg-info ">
        <div class="container-fluid nav-bar">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ຫຼັກສູດ
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">ພູດທະສາສະໜາ</a></li>
                            <li><a class="dropdown-item" href="#">ພາສາອັງກິດ</a></li>
                            <li><a class="dropdown-item" href="#">ພາສາລາວ-ວັນນະຄະດີ</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="">ສະໜັກຮຽນ</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ແຫຼ່ງການຮຽນຮູ້
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">ຜົນງານທາງວິຊາການ</a></li>
                            <li><a class="dropdown-item" href="#">ຫ້ອງຄອມພີວເຕີ</a></li>
                            <li><a class="dropdown-item" href="#">ໜັງສືໃບລານ</a></li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            TEMIS
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">ລາຍງານກົມສ້າງຄູ</a></li>
                            <li><a class="dropdown-item" href="#">ລາຍງານທົ່ວໄປ</a></li>
                            <li><a class="dropdown-item" href="#">ຂໍ້ມູນພະນັກງານ</a></li>
                            <li><a class="dropdown-item" href="#">ຄະແນນນັກສຶກສາ</a></li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ເອກະສານ
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">ດຳລັດ</a></li>
                            <li><a class="dropdown-item" href="#">ຂໍ້ຕົກລົງ</a></li>
                            <li><a class="dropdown-item" href="#">ແຈ້ງການ</a></li>
                            <li><a class="dropdown-item" href="#">ຄູ່ມື້ຕ່າງໆ</a></li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ກ່ຽວກັບ ວຄສຈ
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">ປະຫວັດຄວາມເປັນມາ</a></li>
                            <li><a class="dropdown-item" href="#">ວິໃສທັດ-ພາລະກິດ</a></li>
                            <li><a class="dropdown-item" href="#">ໂຄງຮ່າງການຈັດຕັ້ງ</a></li>
                            <li><a class="dropdown-item" href="#">ຕຳແໜ່ງວິຊາການ</a></li>
                            <li><a class="dropdown-item" href="#">ຕິດຕໍ່ພົວພັນ</a></li>

                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    @yield('content')

    <!--  footer -->
    <div class="container-fluid ">
        <div class="row footer pt-4">
            <div class="col-lg-4 col-12">
                <div class="websites">
                    <div class="title-footer">ເວບໄຊອື່ນໆ</div>
                    <div class="sub-footer">
                        <p>
                            <a href=""><i class="fas fa-angle-double-right"></i>
                                &nbsp;ກະຊວງສຶກສາທິການ ແລະ ກິລາ</a>
                        </p>
                        <p>
                            <a href=""><i class="fas fa-angle-double-right"></i> &nbsp;ກົມສ້າງຄູ</a>
                        </p>
                        <p>
                            <a href=""><i class="fas fa-angle-double-right"></i>
                                &nbsp;ກົມກິດຈະການນັກສຶກສາ</a>
                        </p>
                        <p>
                            <a href=""><i class="fas fa-angle-double-right"></i>
                                &nbsp;ວິທະຍາໄລສົງອົງຕື້</a>
                        </p>
                        <p>
                            <a href=""><i class="fas fa-angle-double-right"></i>
                                &nbsp;ວິທະຍາໄລຄູປາກເຊ</a>
                        </p>
                        <p>
                            <a href=""><i class="fas fa-angle-double-right"></i>
                                &nbsp;ມະຫາວິທະຍາໄລຈຳປາສັກ</a>
                        </p>
                        <p>
                            <a href=""><i class="fas fa-angle-double-right"></i>
                                &nbsp;ມະຫາວິທະຍາໄລແຫ່ງຊາດ</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="websites">
                    <div class="title-footer">ເວບໄຊອື່ນໆ</div>
                    <div class="sub-footer">
                        <p>
                            <a href=""><i class="fas fa-angle-double-right"></i>
                                &nbsp;ກະຊວງສຶກສາທິການ ແລະ ກິລາ</a>
                        </p>
                        <p>
                            <a href=""><i class="fas fa-angle-double-right"></i> &nbsp;ກົມສ້າງຄູ</a>
                        </p>
                        <p>
                            <a href=""><i class="fas fa-angle-double-right"></i>
                                &nbsp;ກົມກິດຈະການນັກສຶກສາ</a>
                        </p>
                        <p>
                            <a href=""><i class="fas fa-angle-double-right"></i>
                                &nbsp;ວິທະຍາໄລສົງອົງຕື້</a>
                        </p>
                        <p>
                            <a href=""><i class="fas fa-angle-double-right"></i>
                                &nbsp;ວິທະຍາໄລຄູປາກເຊ</a>
                        </p>
                        <p>
                            <a href=""><i class="fas fa-angle-double-right"></i>
                                &nbsp;ມະຫາວິທະຍາໄລຈຳປາສັກ</a>
                        </p>
                        <p>
                            <a href=""><i class="fas fa-angle-double-right"></i>
                                &nbsp;ມະຫາວິທະຍາໄລແຫ່ງຊາດ</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="contract">
                    <div class="title-footer">ປະສານງານ</div>
                    <div class="sub-footer">
                        <h5>ຫ້ອງການບໍລິຫານ, ວິທະຍາໄລຄູສົງຈຳປາສັກ ວັດຫຼວງປາກເຊ</h5>
                        <p>
                            <a href="https://www.facebook.com/LFOoC/" target="_blank">
                                <i class="fab fa-facebook"></i>&nbsp; Facebook</a>
                        </p>
                        <p>
                            <a href="#"><i class="fas fa-globe"></i>&nbsp; Website: CSTTC.edu.la</a>
                        </p>
                        <p>
                            <a href="mailto:email.com"><i class="fas fa-envelope"></i>&nbsp; Email:
                                csttc@gmail.com</a>
                        </p>
                        <p>
                            <a href="tel:031410029"><i class="fas fa-phone-square-alt"></i>&nbsp; Tel : 031 41 00
                                29</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bar">
        <p>
            @ 2021 Champasak Sangha Teacher Taining College. Design by: Vilaphong &
            Develop by: Sonephet
        </p>
    </div>


    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/68182a35eb.js" crossorigin="anonymous"></script>







    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>