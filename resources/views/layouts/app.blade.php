<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Экспресс грузоперевозки из Бишкека в Москву, Казань, Самару, Уфу, Екатеринбург и Челябинск. От 40 руб / кг в РФ.">
        <title>КАРГО БИШКЕК ➡️ МОСКВА, РОССИЯ | Red Express Cargo</title>
        <link rel="shortcut icon" type="image/jpg" href="/img/home/logo.png"/>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href={{ asset('css/fonts.css') }}>
        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link href="{{ asset('css/index.css') }}" rel="stylesheet">
        <link href="{{ asset('css/header.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/footer.css')}}">
        <link rel="stylesheet" href={{ asset('css/card.css') }} />
        @yield('styles')

    </head>
    <body>

        @include('layouts.header')

        <div id="app">
            @yield('content')

            @include('components.popups.track_cargo.search_cargo')
{{--            @include('components.popups.track_cargo.result')--}}
        </div>

        @include('layouts.footer')

        <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        @yield('scripts')
{{--        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>--}}

        <script>
            $('#modalSearch').on('hidden.bs.modal', function () {
                $('.red-modal-results').empty();
            })

            $(document).on('click', '#Search', function (e) {
                let invoice = $('#invoice').val();
                $('#empty-cargo').text('');
                $.ajax({
                    url: '{{ route('get.invoice') }}',
                    method: 'get',
                    data: {
                        'invoice': invoice,
                    },
                    success: function (data) {
                        $('.red-modal-results').html(data.view);
                    },
                    error: function (error) {
                        console.log(error);
                    }
                })
            })
        </script>
    </body>
</html>
