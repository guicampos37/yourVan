<header>
    <div class="header-container">
        <div class="header-box container">
            <div>
                @if(Auth::check())
                    <a href="/home"><img id="img-logo" src="{{asset('storage/assets/img/logo-yourvan-100.png')}}" alt="logo-yourvan"></a>
                @else
                    <a href="/login"><img id="img-logo" src="{{asset('storage/assets/img/logo-yourvan-100.png')}}" alt="logo-yourvan"></a>
                @endif
            </div>
            @if(Auth::check())
                @if(Auth::user()->acesso_id == 1)
                    <div class="d-flex align-items-center">
                        <div>
                            <a class="me-2" id="perfil" href="/perfil-usuario"><img id="img-menu" class="w-50" src="{{asset('storage/assets/img/perfil-de-usuario.png')}}" alt="menu"></a>

                            <div>
                                <a href="/perfil-usuario" id="perfil"><span id="meu-perfil">Meu Perfil</span></a>
                            </div>    
                        </div>
                        
                        <form action="/logout" method="POST">
                            @csrf
                            <button class="btn" type="submit"><img src="{{ asset('storage/assets/img/logout.png') }}"></button>
                        </form>
                    </div>
                @else
                    <div class="d-flex align-items-center">
                        <div>
                            <a class="me-2" href="/perfil-motorista"><img id="img-menu" src="{{asset('storage/assets/img/menu.png')}}" alt="menu"></a> 
                        
                            <div>
                                <a href="/perfil-motorista" id="perfil"><span id="meu-perfil">Meu Perfil</span></a>
                            </div> 
                        </div>

                        <form class="m-auto" action="/logout" method="POST">
                            @csrf
                            <button class="btn" type="submit"><img src="{{ asset('storage/assets/img/logout.png') }}"></button>
                        </form>
                    </div>
                @endif
            @endif
        </div>  
    </div>
</header>