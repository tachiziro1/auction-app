<h1>出品商品一覧</h1>
<ul>
@foreach ($items as $item)
    
<li><a href="/items/{{$item->id}}">{{$item->name}}</a></li>

@endforeach
</ul>
<a href="/items/create">出品する</a>