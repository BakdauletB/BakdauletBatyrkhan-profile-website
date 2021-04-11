<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div id="app">
    <div style="background-color: #343a40;">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark container">
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ml-auto">
                    @php $locale = session()->get('locale'); @endphp
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            @switch($locale)
                                @case('ru/en')
                                <img src="https://cdn.britannica.com/33/4833-004-828A9A84/Flag-United-States-of-America.jpg" width="20" alt=""> English
                                @break
                                @case('ru/kz')
                               <img src="https://www.akorda.kz/assets/media/flag.jpg" width="20" alt=""> Қазақ тілі
                                @break
                                @case('ru/ru')
                                 <img src="https://upload.wikimedia.org/wikipedia/en/thumb/f/f3/Flag_of_Russia.svg/1200px-Flag_of_Russia.svg.png" width="20" alt=""> Русский язык
                                @break
                                @default
                                 <img src="https://cdn.britannica.com/33/4833-004-828A9A84/Flag-United-States-of-America.jpg" width="20" alt=""> English
                            @endswitch
                            <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="en"> <img src="https://cdn.britannica.com/33/4833-004-828A9A84/Flag-United-States-of-America.jpg" width="20" alt=""> English</a>
                            <a class="dropdown-item" href="kz"><img src="https://www.akorda.kz/assets/media/flag.jpg" width="20" alt="">Қазақ тілі</a>
                            <a class="dropdown-item" href="ru"><img src="https://upload.wikimedia.org/wikipedia/en/thumb/f/f3/Flag_of_Russia.svg/1200px-Flag_of_Russia.svg.png" width="20" alt="">Русский язык</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <main class="py-4">
        @yield('content')
    </main>
</div>  
</body>
</html> 