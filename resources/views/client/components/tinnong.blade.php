@foreach ($tinhot as $t )
<li>
    <figure>
        <a href="{{url('chitiet',$t->id)}}"><img
                src="{{ \Storage::url($t->anh) }}"
                alt="image description" width="100px"></a>
        
    </figure>
    <div class="tg-trendingpostcontent">
        <h4><a href="{{url('chitiet',$t->id)}}">{{$t->name}}</a>
        </h4>
       
        <span class="tg-postviews">{{$t->luotxem}} lượt xem</span>
    </div>
</li>
@endforeach

