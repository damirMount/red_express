<footer class="container-fluid red-express__footer">
    <div class="container  px-lg-0">
        <div class="row justify-content-lg-between mx-lg-0">
            <div class="col-12 col-lg-6">
                <div id="map-footer" style="width: 100%; height: 300px;">
                </div>
            </div>

            <div class="col-12 col-lg-5 footer-info d-lg-flex align-items-lg-center">

                <div class="col-12">
                    <div class="head-1 mb-4">
                        Контакты
                    </div>

                    <ul class="list-unstyled mb-4">
                        <li>
                            <span class="head">
                                Прием груза  в городе
                            </span>
                        </li>
                        <li>
                            <span class="text">
                                ул. Максима Горького, 1в, ст 5
                            </span>
                        </li>
                        <li>
                            <span class="text">
                                0221 22 20 00
                            </span>
                        </li>
                        <li>
                            <span class="text">
                                0558 55 98 38
                            </span>
                        </li>
                    </ul>
                    <ul class="list-unstyled">
                        <li>
                            <span class="head">
                                Прием груза на Дордое
                            </span>
                        </li>
                        <li>
                            <span class="text">
                                ул. Элебесова, 74/1
                            </span>
                        </li>
                        <li>
                            <span class="text">
                                0504222000
                            </span>
                        </li>
                    </ul>
                    <ul class="list-unstyled list-inline mb-0">
                        <li class="list-inline-item footer-social position-relative">
                            <img src="/img/footer/instagram.svg" class="insta-icon position-absolute" alt="">
                            <a href="">
                                <div class="footer-href"></div>
                            </a>
                        </li>
                        <li class="list-inline-item footer-social position-relative">
                            <img src="/img/footer/basketball.svg" class="basket-icon position-absolute" alt="">
                            <a href="">
                                <div class="footer-href"></div>
                            </a>

                        </li>
                        <li class="list-inline-item footer-social position-relative">
                            <img src="/img/footer/twitter.svg" class="twitter-icon position-absolute" alt="">
                            <a href="">
                                <div class="footer-href"></div>
                            </a>

                        </li>
                        <li class="list-inline-item footer-social position-relative">
                            <img src="/img/footer/youtube.svg" class="youtube-icon position-absolute" alt="">
                            <a href="">
                                <div class="footer-href"></div>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</footer>

<script src="https://api-maps.yandex.ru/2.1/?apikey=ba38ba9a-3474-4eb1-8a37-3674243b1d99&lang=ru_RU"
        type="text/javascript"></script>

<script>
    ymaps.ready(function () {

        var myMap = new ymaps.Map('map-footer', {
            center: [42.875969, 74.603701],
            zoom: 12
        }, {
            searchControlProvider: 'yandex#search'
        })
        myMap.behaviors.disable('scrollZoom');

        let objects = [
            [42.857923, 74.627246],
            [42.903778, 74.611867],
        ];

        let addresses = [
            ['ул. Максима Горького, 1в, ст 5'],
            ['ул. Элебесова, 74/1'],
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
