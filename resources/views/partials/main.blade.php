<main>
    <div class="main-container">
      <div class="row">
        @foreach ($comics as $comic)
            <div class="card">
                <div class="card-image">
                    <img src="{{$comic['thumb']}}" alt="">
                </div>
                <div class="card-name">{{$comic['title']}}</div>
            </div>
        @endforeach
      </div>
    </div>
  </main>
