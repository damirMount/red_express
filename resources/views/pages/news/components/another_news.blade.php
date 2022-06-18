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

    @for($i = 0; $i < 4; $i++)
        <div class="col-12 col-md-6 col-lg-12 another red-express__card mb-lg-4 pb-lg-3 mb-3">
            @include('components.news.card', ['img'=>$arrImg[$i], 'href'=>'/news/view/blog'])
        </div>
    @endfor

</div>
