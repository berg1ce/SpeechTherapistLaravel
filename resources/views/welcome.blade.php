<!DOCTYPE html>
<html lang="rus">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/roboto.css" />


    <!-- <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/roboto.css" /> -->


    @push('styles')

    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/roboto.css') }}" rel="stylesheet">

    @endpush
    <!-- <link rel="stylesheet" href=" {{ asset('assets/icons/icon8/icon8.css') }} " /> -->
    <!-- <link rel="stylesheet" href="./icons/bootstrap-icons/" /> -->


    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kranky&display=swap" rel="stylesheet">
    

    <link rel="icon" href="{{ asset('assets/img/ficon.ico') }}">
    <!-- <link rel="icon" href=" {{ asset('assets/img/ficon.ico') }} " /> -->
    <!-- <link rel="shortcut icon" href="ficon.ico" type="image/x-icon" /> -->
<!--     
    <link rel="stylesheet" href="./icons/bootstrap-icons/" />
    <link rel="stylesheet" href="icons/icon8/icon8.css" /> -->

    <!-- <?php include public_path('css/style.css') ?> -->
 

    <!-- TODO:  <a href="{{ url('/') }}">Visit Google</a>-->  
    <!-- <a href="{{ url('/') }}">Visit Google</a> -->



    <!-- <iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" width="800" height="450" src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Fproto%2FqLc1SqJITV0pMH96mLFpiV%2FCreative-Canon-Web-Mockup-Community%3Fnode-id%3D2%253A2%26scaling%3Dcontain%26page-id%3D0%253A1%26starting-point-node-id%3D2%253A2%26show-proto-sidebar%3D1" allowfullscreen></iframe> -->
    <title>Логопед Булдыгина</title>
</head>

<body>
    <div class="container">
        <nav>
            <a href="/"><img src=" {{asset('assets/img/logo.png')}}" class="logo"></a>
            <ul>
                <li><a href="therapy">Терапия</a></li>
                <li><a href="materials">Портфолио</a></li>
                <li><a href="price-list">Прайс-лист</a></li>
                <li><a href="graphik-priema">График приема</a></li>
                <li><a href="contacts">Контакты</a></li>
            </ul>
            <div class="login">
                <ul>
                    <a href="enter" class="btn btn-white-fill">Вход</a>
                    <a href="signup" class="btn btn-white-fill">Регистрация</a>
                </ul>
            </div>
        </nav>

        <div class="text-box">
            <p>Ольга</p>
            <h1>Булдыгина</h1>
            <h3>Частный логопед</h3>

            <div class="row">
                <a href="materials"><span>Изучить Мое Портфолио</span></a>
                <a href="contacts"><span>Связаться Со Мной</span></a>
            </div>
        </div>
        <!--
     <div id="like_button_container"></div>

      <script src="https://unpkg.com/react@17/umd/react.development.js" crossorigin></script>
      <script src="https://unpkg.com/react-dom@17/umd/react-dom.development.js" crossorigin></script>

      <script src="like_button.js"></script>
  -->
        <div class="social-icons">
            <a href=""><i class="bi bi-telegram"></i></a>
            <a href="https://vk.com/id63823695">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 24 24" style="fill: #fff">
                    <path d="M 12 2 C 6.4889941 2 2 6.4889982 2 12 C 2 17.511002 6.4889941 22 12 22 C 17.511006 22 22 17.511002 22 12 C 22 6.4889982 17.511006 2 12 2 z M 12 4 C 16.430126 4 20 7.5698765 20 12 C 20 16.430123 16.430126 20 12 20 C 7.5698737 20 4 16.430123 4 12 C 4 7.5698765 7.5698737 4 12 4 z M 6.4453125 8.5 C 6.0643125 8.5 6 8.6867187 6 8.8867188 C 6 9.2477188 6.2995 11.1965 7.9375 13.4375 C 9.1245 15.0635 10.689219 16 12.074219 16 C 12.913219 16 13 15.786125 13 15.453125 L 13 13.966797 C 13 13.565797 13.092375 13.5 13.359375 13.5 C 13.550375 13.5 13.9375 13.625 14.6875 14.5 C 15.5525 15.509 15.709078 16 16.205078 16 L 17.515625 16 C 17.819625 16 17.994953 15.873 18.001953 15.625 C 18.002953 15.562 17.993656 15.490109 17.972656 15.412109 C 17.875656 15.124109 17.431953 14.421 16.876953 13.75 C 16.568953 13.378 16.265953 13.009547 16.126953 12.810547 C 16.031953 12.679547 15.996 12.588 16 12.5 C 16.004 12.408 16.052 12.318312 16.125 12.195312 C 16.112 12.195312 17.80375 9.8214844 17.96875 9.0214844 C 17.99175 8.9454844 18.003 8.8745 18 8.8125 C 17.992 8.6315 17.867219 8.5 17.574219 8.5 L 16.265625 8.5 C 15.935625 8.5 15.782359 8.6993906 15.693359 8.9003906 C 15.693359 8.9003906 14.8785 10.5795 13.9375 11.6875 C 13.6325 12.0075 13.4775 12 13.3125 12 C 13.2245 12 13 11.893609 13 11.599609 L 13 9.0078125 C 13 8.6608125 12.914766 8.5 12.634766 8.5 L 10.310547 8.5 C 10.106547 8.5 10 8.6593125 10 8.8203125 C 10 9.1533125 10.449 9.2349219 10.5 10.169922 L 10.5 11.980469 C 10.5 12.420469 10.424766 12.5 10.259766 12.5 C 9.8147656 12.5 8.9385625 10.999203 8.3515625 9.0332031 C 8.2245625 8.6462031 8.0975781 8.5 7.7675781 8.5 L 6.4453125 8.5 z"></path>
                </svg>
            </a>
            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 24 24" style="fill: #fff">
                    <path d="M 20.572266 3.0117188 C 20.239891 2.9764687 19.878625 3.028375 19.515625 3.171875 C 19.065625 3.348875 12.014406 6.3150313 5.4414062 9.0820312 L 3.2695312 9.9960938 C 2.4285313 10.337094 2.0039062 10.891672 2.0039062 11.638672 C 2.0039062 12.161672 2.22525 12.871063 3.28125 13.289062 L 6.9472656 14.757812 C 7.2642656 15.708813 8.0005469 17.916906 8.1855469 18.503906 C 8.2955469 18.851906 8.5733906 19.728594 9.2753906 19.933594 C 9.4193906 19.982594 9.5696563 20.007813 9.7226562 20.007812 C 10.165656 20.007812 10.484625 19.801641 10.640625 19.681641 L 12.970703 17.710938 L 15.800781 20.328125 C 15.909781 20.439125 16.486719 21 17.261719 21 C 18.228719 21 18.962234 20.195016 19.115234 19.416016 C 19.198234 18.989016 21.927734 5.2870625 21.927734 5.2890625 C 22.172734 4.1900625 21.732219 3.6199531 21.449219 3.3769531 C 21.206719 3.1694531 20.904641 3.0469688 20.572266 3.0117188 z M 19.910156 5.171875 C 19.533156 7.061875 17.478016 17.378234 17.166016 18.865234 L 13.029297 15.039062 L 10.222656 17.416016 L 11 14.375 C 11 14.375 16.362547 8.9468594 16.685547 8.6308594 C 16.945547 8.3778594 17 8.2891719 17 8.2011719 C 17 8.0841719 16.939781 8 16.800781 8 C 16.675781 8 16.506016 8.1197812 16.416016 8.1757812 C 15.272669 8.8885973 10.404094 11.662239 8.0078125 13.025391 L 4.53125 11.636719 L 6.21875 10.927734 C 10.51775 9.1177344 18.174156 5.893875 19.910156 5.171875 z"></path>
                </svg>
            </a>
            <a href="https://instagram.com/obuldygina?utm_medium=copy_link">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 24 24" style=" fill:#fff;">
                    <path d="M 8 3 C 5.243 3 3 5.243 3 8 L 3 16 C 3 18.757 5.243 21 8 21 L 16 21 C 18.757 21 21 18.757 21 16 L 21 8 C 21 5.243 18.757 3 16 3 L 8 3 z M 8 5 L 16 5 C 17.654 5 19 6.346 19 8 L 19 16 C 19 17.654 17.654 19 16 19 L 8 19 C 6.346 19 5 17.654 5 16 L 5 8 C 5 6.346 6.346 5 8 5 z M 17 6 A 1 1 0 0 0 16 7 A 1 1 0 0 0 17 8 A 1 1 0 0 0 18 7 A 1 1 0 0 0 17 6 z M 12 7 C 9.243 7 7 9.243 7 12 C 7 14.757 9.243 17 12 17 C 14.757 17 17 14.757 17 12 C 17 9.243 14.757 7 12 7 z M 12 9 C 13.654 9 15 10.346 15 12 C 15 13.654 13.654 15 12 15 C 10.346 15 9 13.654 9 12 C 9 10.346 10.346 9 12 9 z"></path>
                </svg>
            </a>
        </div>
    </div>
</body>

</html>