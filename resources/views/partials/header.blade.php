<header>
    <div class="header-container">
      <a href="/" class="brand">
        <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="">
      </a>
      <nav>
        <ul>
            @foreach ($navmenu as $navitem)
                <li>
                    <a class="{{Route::currentRouteName() == 'homepage' ? 'active' : ''}}" href="{{$navitem['url']}}">{{$navitem['label']}}</a>
                </li>
            @endforeach
        </ul>
      </nav>
    </div>
</header>