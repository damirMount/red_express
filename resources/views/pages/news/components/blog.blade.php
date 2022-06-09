<div class="red-express__blog">
    <div class="blog__img">
        <img src={{ asset('storage/' . $blog->banner)}} class="img-fluid" alt="banner-{{ $blog->id }}">
    </div>

    <div class="blog__desc my-3">
        {{ $blog->desc }}
    </div>
    <div>
        {!! $blog->content !!}
    </div>
</div>
