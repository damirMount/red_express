@section('styles')
    <link rel="stylesheet" href={{ asset('css/card.css') }} />
@endsection

<div class="red-express__card">
    <div class="red-express__card-img">
        <img src={{ asset($img)}} class="img-fluid" alt="">
    </div>
    <div class="red-express__card-body">
        <div class="title">
            Заголовок новости
        </div>
        <div class="article">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime vitae ducimus quo a impedit?
            Temporibus debitis aspernatur libero magni ea non veniam. Impedit, placeat.
        </div>
        <a href="news/view/blog" class="btn card-btn">
            Подробнее>>
        </a>
    </div>
</div>
