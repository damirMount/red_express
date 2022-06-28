
<div class="row mx-0 justify-content-lg-between" id="news">
    <h2 class="my-5">
        Новости
    </h2>
    @foreach($blogs as $key => $blog)
        <div class="col-12 col-md-6 col-lg-4 red-express__card mb-4 mb-md-auto {{ $key == 0 ? '' : 'mobile-margin' }}">
            @include('components.news.card', compact('blog'))
        </div>
    @endforeach
    <div class="col-12 text-center mt-lg-4 pt-lg-3 mobile-margin-btn">
        <a href="/news" class="btn btn-watch-news mt-sm-5">Посмотреть все новости</a>
    </div>
</div>
