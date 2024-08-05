<div class="tg-postsmall">
    <div class="tg-borderheading">
        <h3>Tin tức hằng ngày</h3>
    </div>
    <div class="tg-postmargin">
        @foreach ($tintuc as $t)
            <article class="tg-post">
                <figure class="tg-postimg">
                    <img src="{{ \Storage::url($t->anh) }}" alt="image description">
                    <a class="tg-btnview" href="{{ url('chitiet', $t->id) }}">xem bài viết</a>
                </figure>
                <div class="tg-postcontent">
                    <div class="tg-borderleft">

                        <div class="tg-posttitle">
                            <h3><a href="{{ url('chitiet', $t->id) }}">{{ $t->name }}</a></h3>
                        </div>
                    </div>
                </div>
            </article>
        @endforeach
    </div>
</div>
