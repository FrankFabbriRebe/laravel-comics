<div class="card_container w-100% bg-dark">

    <div class="container p-5">
        <div class="row d-flex">
            @foreach ($comics as $comic)
            <div class="col-2">
                <img src="{{$comic['thumb']}}" alt="$comic['title']">
                <p>{{$comic['title']}}</p>
            </div>
            @endforeach
            <div class="button_container">
                <button>
                    LOAD MORE
                </button>
            </div>
        </div>
    </div>


</div>