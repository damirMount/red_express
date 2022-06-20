<div class="red-express__card-img">
    <img src="{{ asset('storage/' . $blog->banner) }}" class="img-fluid" alt="">
</div>
<div class="red-express__card-body">
    <div class="title">
        {{ $blog->title }}
    </div>
    <div class="article">
        {{ \Illuminate\Support\Str::limit($blog->desc, 100, '...') }}
    </div>
    <a href='#' class="btn card-btn ps-0">
        Подробнее>>
    </a>
</div>

