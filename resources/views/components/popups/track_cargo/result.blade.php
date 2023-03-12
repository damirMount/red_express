@if(isset($result['number_id']))
<p class="head">
    Результат:
</p>

<div class="d-flex result justify-content-between">
    <div class="result-name">Груз:</div>
    <div class="result-text" id="invoice">{{ $result['number_id'] }}</div>
</div>
<div class="d-flex result justify-content-between">
    <div class="result-name">Номер рейса:</div>
    <div class="result-text" id="invoice">{{ $result['flight_numder'] }}</div>
</div>
<div class="d-flex result justify-content-between">
    <div class="result-name">Статус:</div>
    <div class="result-text status"  id="status">{{ $result['status'] }}</div>
</div>
<div class="d-flex result justify-content-between">
    <div class="result-name">Местонахождение:</div>
    <div class="result-text" id="country">{{ $result['country'] }}</div>
</div>
<div class="d-flex result justify-content-between">
    <div class="result-name">Место выдачи:</div>
    <div class="result-text" id="address">{{ $result['adress'] }}</div>
</div>

@if(!empty($result['time']))
    <div class="d-flex result justify-content-between">
        <div class="result-name">Прибытие:</div>
        <div class="result-text" id="time">{{ $result['time'] }}</div>
    </div>
@endif
<div class="d-flex result justify-content-between">
    <div class="result-name">Контакты:</div>
    <div class="result-phones">
        <ul class="list-unstyled">
            @foreach($result['phones'] as $phone)
                <li>
                    <a href="tel: {{ $phone }}">{{ $phone }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>

@else
    <h2 class="red-modal-title" style="color: 	#ff9966">
        Груз не найден!
    </h2>
@endif
