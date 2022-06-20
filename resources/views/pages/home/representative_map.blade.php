{{--<div class="row pt-5 mt-5 mt-lg-5 pt-lg-5 mb-lg-4b pb-5" id="representatives">--}}
{{--    <div class="col-12 col-md-6 mx-md-auto mt-lg-3 text-center pt-2 pt-lg-1 mt-1">--}}
{{--        <h2 class="map-head">--}}
{{--            5+ представителей в 2 странах--}}
{{--        </h2>--}}
{{--    </div>--}}

{{--    <div class="col-12 red-express__map pb-lg-1 mb-lg-3">--}}
{{--        <div class="map position-relative">--}}
{{--            <img src="/img/home/home-map.png" class="img-fluid" alt="">--}}
{{--            <img src="/img/map/map-pin.svg"--}}
{{--                class="map-pin position-absolute"--}}
{{--                style="bottom: 36%; left: 14%; transform: translate(-27%, -10%);"--}}
{{--            >--}}
{{--            <img src="/img/map/map-pin.svg"--}}
{{--                class="map-pin position-absolute"--}}
{{--                style="bottom: 41%; left: 13%; transform: translate(-9%, -10%);"--}}
{{--            >--}}
{{--            <img src="/img/map/map-pin.svg"--}}
{{--                class="map-pin position-absolute"--}}
{{--                style="bottom: 39%; left: 22%; transform: translate(-27%, -10%);"--}}
{{--            >--}}
{{--            <img src="/img/map/map-pin.svg"--}}
{{--                class="map-pin position-absolute"--}}
{{--                style="bottom: 44%; left: 4%; transform: translate(-31%, -10%);"--}}
{{--            >--}}
{{--        </div>--}}

{{--    </div>--}}

{{--</div>--}}


<div id="map" style="width: 100%; height: 500px;"></div>
<script src="https://api-maps.yandex.ru/2.1/?apikey=ba38ba9a-3474-4eb1-8a37-3674243b1d99&lang=ru_RU"
        type="text/javascript"></script>
<script>
    ymaps.ready(function () {

        var myMap = new ymaps.Map('map', {
                center: [55.753215, 37.622504],
                zoom: 5
            }, {
                searchControlProvider: 'yandex#search'
            })
        myMap.behaviors.disable('scrollZoom');

        let objects = [
            [55.656671, 37.858806],
            [55.856827, 48.836423],
            [53.209023, 50.274475],
            [54.694784, 55.848468],
        ];

        let addresses = [
            ['Москва: г. Котельники, Дзержинское шоссе, дом 1'],
            ['Казань: рынок Новая Тура'],
            ['Самара: Проспект Кирова, 34к17'],
            ['Уфа: Демский район, Вахтангова, 25'],
        ]
        for (let i=0; i< objects.length; i++) {
            myMap.geoObjects.add(new ymaps.Placemark(objects[i], {
                    balloonContentHeader: "Адрес",
                    balloonContentBody: "<em>"+ addresses[i] +"</em>",
                },
                {
                    preset: 'islands#darkGreenDotIcon',
                }
            ))
        }
    });
</script>
