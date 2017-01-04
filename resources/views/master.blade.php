<html>
<head>
    <title>MarketPlace - @yield('title')</title>
    <link rel="stylesheet" href="{!! asset('css/materialize.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">

    @yield('css')

</head>
<body>

<nav>
    <div class="nav-wrapper">




        <a href="#" class="brand-logo">MARKETPLACE</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="{{ route('home') }}">HOME</a></li>
            <li><a href="{{ route('categorie.index') }}">CATEGORIES</a></li>
            <li class="dropdown"><a href="{{ route('produit.index') }}">PRODUITS</a>

            @if (Auth::user()->role==1)
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ url('/produit/create') }}">
                            Ajouter un produit
                        </a>

                    </li>

                </ul>
            @endif
            </li>

            <li>  <a href="{{ route('commande.index') }}"><i class="large material-icons ">shopping_cart</i></a> </li>
            <li>
                {!! Form::open(array('route' => ['search'], 'method' => 'POST')) !!}

                    <div class="input-field">
                        <input name="search" id="search" type="search" placeholder="search" required>
                        <label for="search"><i class="material-icons">search</i></label>
                        <i class="material-icons">close</i>
                    </div>
                {!! Form::close() !!}

            </li>
            @if (Auth::guest())
                <li><a href="{{ route('login') }}">CONNECTER</a></li>
                <li><a href="{{ route('inscrire') }}">INSCRIRE</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        @if (Auth::user()->role==1)
                            <?php  $v = \App\Vendeur::where('mail', '=', Auth::user()->email)->first();
                            ?>
                            <li><a href="{{ url('/vendeur/'.$v->id.'/edit') }}"> Mon Profile</a></li>
                        @else
                            <?php  $c = \App\Client::where('mail', '=', Auth::user()->email)->first();
                            ?>
                            <li><a href="{{ url('/client/'.$c->id.'/edit') }}"> Mon profile</a></li>



                        @endif

                        <li>
                            <a href="{{ url('/logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>
    </div>
</nav>

<main>
<div class="container">
    @yield('content')
</div>
</main>

    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">MARKETPLACE</h5>
                    <img src="{!! asset('images/payment.png') !!}">
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2017 Nesrine Ayadi
            </div>
        </div>
    </footer>


{!! Html::script('js/jquery.min.js') !!}
{!! Html::script('js/materialize.min.js') !!}

@yield('script')

</body>
</html>