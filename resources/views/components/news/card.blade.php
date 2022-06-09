@php
    $arrImg = [
        'img/blog/card/person-1.png','img/blog/card/person-2.png','img/blog/card/person-3.png',
        'img/blog/card/person-1.png','img/blog/card/person-2.png','img/blog/card/person-3.png',
        'img/blog/card/person-1.png','img/blog/card/person-2.png','img/blog/card/person-3.png'
    ]
@endphp
@section('styles')
    <link rel="stylesheet" href={{ asset('css/card.css') }} />
@endsection

<div class="red-express__card">
    <div class="red-express__card-img">
        <img src={{ asset('storage/' . $blog->banner) }} class="img-fluid" alt="">
    </div>
    <div class="red-express__card-body">
        <div class="title">
            {{ $blog->title }}
        </div>
        <div class="article">
           {{ \Illuminate\Support\Str::limit($blog->desc, 100, '...') }}
        </div>
        <a href="" class="btn card-btn">
            Подробнее>>
        </a>
    </div>
</div>

