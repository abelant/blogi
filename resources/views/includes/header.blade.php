<header>
    <nav class="navbar navbar-light bg-faded rounded navbar-toggleable-md">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#containerNavbarCenter"
            aria-controls="containerNavbarCenter" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
       
        <div class="collapse navbar-collapse justify-content-md-center" id="containerNavbarCenter">
        
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="{{route('index')}}"><b>{{ $settings->site_name }}</b></a>
                </li>
                @foreach($categories as $category)
                <li class="nav-item">
                    <a class="nav-link" href="#">{{$category->name}}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </nav>
    </header>