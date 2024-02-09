<div class="card_container w-100% bg-light">

    @foreach ($comics as $comic)
    <p>{{$comic['title']}}</p>
    @endforeach

</div>