<header>

    <nav class="navbar navbar-expand-xl navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{route('guests.home')}}">Larabri</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() === 'guests.home' ? 'active' : ''}}" href="{{route('guests.home')}}" aria-current="page">Home
                            <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() === 'guests.about' ? 'active' : ''}}" href="{{route('guests.about')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() === 'guests.contacts' ? 'active' : ''}}" href="{{route('guests.contacts')}}">Contacts</a>
                    </li>

                </ul>
                <form class="d-flex my-2 my-lg-0">
                    <input class="form-control me-sm-2" type="text" placeholder="Search" />
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                        Search
                    </button>
                </form>
            </div>
        </div>
    </nav>



    a

</header>