<div class="row">
    <div class="col-6">
        <h2>
            Цены
        </h2>
        <p>
            Если плотность груза меньше 205кг/м3 то цена на перевозку считается за куб, если больше то за килограммы
        </p>
        <div class="red-express__price-table">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Город отправитель</th>
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
