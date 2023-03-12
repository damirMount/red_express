<div class="row pt-5 mt-5 mt-lg-5 pt-lg-5 mb-lg-4b" id="representatives">
    <div class="col-12 col-md-6 mx-md-auto mt-lg-3 text-center pt-2 pt-lg-1 mt-1">
        <h2 class="map-head">
            5+ представителей в 2 странах
        </h2>
    </div>

    <div class="col-12 red-express__map pb-lg-1 mb-lg-3">
        <div class="map position-relative">
            <div id="map" style="width: 100%; height: 500px;"></div>
        </div>

    </div>

</div>


<script src="https://api-maps.yandex.ru/2.1/?apikey=ba38ba9a-3474-4eb1-8a37-3674243b1d99&lang=ru_RU"
        type="text/javascript"></script>
<script>
    ymaps.ready(function () {

        var myMap = new ymaps.Map('map', {
                center: [55.032647, 44.493326],
                zoom: 4,
                controls: []
            }, {
                searchControlProvider: 'yandex#search'
            })
        myMap.behaviors.disable('scrollZoom');
        myMap.behaviors.disable('drag');

        let objects = [
            [55.656671, 37.858806],
            [55.856827, 48.836423],
            [53.209023, 50.274475],
            [54.694784, 55.848468],
        ];

        // let addresses = [
        //     ['Москва: г. Котельники, Дзержинское шоссе, дом 1'],
        //     ['Казань: рынок Новая Тура'],
        //     ['Самара: Проспект Кирова, 34к17'],
        //     ['Уфа: Демский район, Вахтангова, 25'],
        // ]
        for (let i=0; i< objects.length; i++) {
            myMap.geoObjects.add(new ymaps.Placemark(objects[i], {
                    // balloonContentHeader: "Адрес",
                    // balloonContentBody: "<em>"+ addresses[i] +"</em>",
                },
                {
                    preset: 'islands#darkGreenDotIcon',
                }
            ))
        }
    });
</script>
