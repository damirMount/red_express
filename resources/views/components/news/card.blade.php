<div class="red-express__card-img">
    <img src={{ asset('storage/' . $blog->banner)}} class="img-fluid" alt="">
</div>
<div class="red-express__card-body">
    <div class="title">
        Заголовок новости
    </div>
    <div class="article">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime vitae ducimus quo a impedit?
        Temporibus debitis
    </div>
    <a href='{{route('new.show', $blog->id)}}' class="btn card-btn ps-0">
        Подробнее>>
    </a>
</div>

