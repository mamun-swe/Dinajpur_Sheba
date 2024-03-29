<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>দিনাজপুর সেবা এডমিন</title>
    
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/wickedpicker.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/datepicker.min.css') }}" rel="stylesheet">
    
    <!-- Custom styles for this template-->
    <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/js/select2.min.js') }}"></script>
    <script src="{{ asset('admin/js/wickedpicker.js') }}"></script>
    <script src="{{ asset('admin/js/datepicker.min.js') }}"></script>
    
</head>
<body>
        <div id="app">
                    @include('layouts.admin-side-bar') 
                    <main>
                        @yield('content')
                    </main>
                    </div>
                </div>
            </div>
        </div>
    <script>
        $('#sidebarToggleTop').click(function(){
            $(".sidebar").toggle();
        });
        $('.select2').select2();
        $('.timepicker').wickedpicker(options);
        var options = { 
            twentyFour: true,
            upArrow: 'wickedpicker__controls__control-up', 
            downArrow: 'wickedpicker__controls__control-down', 
            close: 'wickedpicker__close',
            hoverState: 'hover-state', 
            title: 'Game Time', 
            showSeconds: false, 
            secondsInterval: 1, 
            minutesInterval: 1,
            beforeShow: null, 
            show: null,
            clearable: false,
        };
        $('.datepicker').datepicker({
            date: new Date(),
            format: 'yyyy.mm.dd'
        });
    </script>
</body>
</html>