<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul{
            list-style-type:none;
        }
    </style>
</head>
<body>
<div id="app">

                    @php $locale = session()->get('locale'); @endphp

                            @switch($locale)
                                @case('en')
                                <img src="https://cdn.britannica.com/33/4833-004-828A9A84/Flag-United-States-of-America.jpg" width="20" alt=""> English
                                @break
                                @case('kz')
                               <img src="https://www.akorda.kz/assets/media/flag.jpg" width="20" alt=""> Қазақ тілі
                                @break

                                @default
                                <p></p>
                            @endswitch

    </div>
    <main class="py-4">
        @yield('content')
    </main>
</div>  
</body>
</html> 