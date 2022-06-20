
<div class="row mx-0 justify-content-lg-between" id="news">
    <h2 class="mb-5">
        Новости
    </h2>
    @foreach($blogs as $blog)
        <div class="col-12 col-md-6 col-lg-4 px-xl-0 red-express__card mb-4 mb-md-auto">
            @include('components.news.card', compact('blog'))
        </div>
    @endforeach
    <div class="col-12 text-center mt-lg-4 pt-lg-3">
        <a href="/news" class="btn btn-watch-news">Посмотреть все новости</a>
    </div>
</div>
