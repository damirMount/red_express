<div class="row red-express__price mt-5 mt-lg-5 pt-4 pt-lg-5" id="price">
    <div class="col-12 col-md-8 col-lg-6 pt-2 pt-lg-1 mt-lg-3">
        <h2 class="head pt-1 pt-lg-0">
            Цены
        </h2>
        <p class="text">
            Если плотность груза меньше 205кг/м3 то цена на перевозку считается за куб, если больше то за килограммы
        </p>
        <div class="red-express__price-table">
            <table class="table" >
                <thead>
                    <tr>
                        <th scope="col">Город получения</th>
                        <th scope="col">За 1 кг</th>
                        <th scope="col">За 1 кубометр</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($offers as $offer)
                    <tr>
                        <td>{{ $offer->country }}</td>
                        <td>{{ $offer->kg_field }}</td>
                        <td>{{ $offer->cbm_field }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
