<div class="row">
    <div class="col-12 text-center">
        <h2>
            5+ представителей в 2 Городх
        </h2>
    </div>

    <div class="col-12 red-express__map">
        <div id="map"></div>
    </div>

</div>

@section('styles')
<script
    src="https://api-maps.yandex.ru/2.1/?apikey=23d7c047-c494-4e70-9270-ad8fdcee6ba4&lang=ru_RU"
    type="text/javascript"
></script>
<script src="https://yandex.st/jquery/2.2.3/jquery.min.js" type="text/javascript"></script>
<script>
    ymaps.ready(function () {
        var myMap = new ymaps.Map('map', {
                center: [42.865388923088396, 74.60104350048829],
                zoom: 12
            }, {
                searchControlProvider: 'yandex#search'
            }
        );
    });
</script>
@endsection
