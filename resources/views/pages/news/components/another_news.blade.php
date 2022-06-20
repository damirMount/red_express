@php
    $arrImg = [
        'img/blog/card/person-1.png','img/blog/card/person-2.png','img/blog/card/person-3.png',
        'img/blog/card/person-1.png'
    ]
@endphp

<div class="row mx-0 justify-content-md-between justify-content-lg-start red-express__side-cards">
    <h2>
        Еще новости
    </h2>

    @foreach($another_blogs as $blog)
        <div class="col-12 col-md-6 col-lg-12 another red-express__card mb-lg-4 pb-lg-3 mb-3">
            @include('components.news.card', compact('blog'))
        </div>
    @endforeach

</div>
