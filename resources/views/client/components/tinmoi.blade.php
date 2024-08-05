<article class="tg-post">
    @foreach ($tinmoi as $t)
    <figure class="tg-postimg">
        <a href="{{url('chitiet',$t->id)}}"><img
                src="{{ \Storage::url($t->anh) }}"
                alt="image description"></a>
    </figure>
    <div class="tg-postcontent">
        <div class="tg-borderleft">

            <div class="tg-posttitle tg-posttitlelarge">
                <h3><a href="{{url('chitiet',$t->id)}}">
                        {{$t->name}}</a></h3>
            </div>
        </div>
    </div>
    @endforeach
   
</article>