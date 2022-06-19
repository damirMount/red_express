@php
    $arrImg = [
        'img/blog/card/person-1.png','img/blog/card/person-2.png','img/blog/card/person-3.png'
    ]
@endphp

<div class="row mx-0 justify-content-lg-between">
    <h2 class="mb-5">
        Новости
    </h2>
    @for ($i = 0; $i < count($arrImg); $i++)
        <div class="col-12 col-md-6 col-lg-4 px-xl-0 red-express__card mb-4 mb-md-auto">
            @include('components.news.card', ['img'=>$arrImg[$i], 'href'=>'news/view/blog'])
        </div>
    @endfor
    <div class="col-12 text-center mt-lg-4 pt-lg-3">
        <a href="/news" class="btn btn-watch-news">Посмотреть все новости</a>
    </div>
</div>
