<header>
    <div class="header-container">
        <div class="header-box container">
            <div>
                <img id="img-logo" src="{{asset('storage/assets/img/logo-yourvan-100.png')}}" alt="logo-yourvan">
            </div>
            @if(Auth::check())
                @if(Auth::user()->acesso_id == 1)
                    <div class="d-flex">
                        <a class="me-4" href="/perfil-usuario"><img id="img-menu" src="{{asset('storage/assets/img/menu.png')}}" alt="menu"></a>    
                        <form class="m-auto" action="/logout" method="POST">
                            @csrf
                            <button class="btn btn-warning" type="submit">X</button>
                        </form>
                    </div>
                @else
                    <div class="d-flex">
                        <a class="me-4" href="/perfil-motorista"><img id="img-menu" src="{{asset('storage/assets/img/menu.png')}}" alt="menu"></a>    
                        <form class="m-auto" action="/logout" method="POST">
                            @csrf
                            <button class="btn btn-warning" type="submit">X</button>
                        </form>
                    </div>
                @endif
            @endif
        </div>  
    </div>
</header>