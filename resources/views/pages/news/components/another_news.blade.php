@php
    $arrImg = [
        'img/blog/card/person-1.png','img/blog/card/person-2.png','img/blog/card/person-3.png'
    ]
@endphp

<div class="red-express__side-cards">
    <h2>
        Еще новости
    </h2>

    @for($i = 0; $i < 3; $i++)
        <div class="col-12 another red-express__card mb-lg-4 pb-lg-3">
            @include('components.news.card', ['img'=>$arrImg[$i], 'href'=>'/news/view/blog'])
        </div>
    @endfor

</div>
