<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <title>@yield('title')</title>
</head>

<body class="font-sans antialiased">
    <div class="w-full h-screen bg-slate-50 flex flex-col justify-center items-center">
        <div class="container w-full md:h-[15%] h-auto flex flex-col justify-start items-center p-2">
            @yield('header_section')
        </div>
        <div class="container w-full md:h-[75%] h-auto flex flex-col justify-start items-center p-2">
            @yield('content_section')
        </div>
        <div class="container w-full md:h-[10%] h-auto flex flex-col justify-start items-center p-2">
            @yield('footer_section')
        </div>
    </div>

    <script>
        function showSidebar(){
          const sidebar = document.querySelector('.sidebar')
          sidebar.style.display = 'flex'
        }
        function hideSidebar(){
          const sidebar = document.querySelector('.sidebar')
          sidebar.style.display = 'none'
        }
      </script>
</body>

</html>
