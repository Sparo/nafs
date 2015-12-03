
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top" id="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{action('AboutController@index') }}">
                    <img src="{{ asset('img/LogoSerb_100x100.png') }}" alt=":)">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="{{ action('HomeController@index') }}">Novosti</a>
                    </li>
                    <li>
                        <a href="{{ action('HomeController@about') }}">O nama</a>
                    </li>
                    <li>
                        <a href="{{ action('HomeController@clubs') }}">Klubovi</a>
                    </li>
                    <li>
                        <a href="{{ action('HomeController@coaches') }}">Treneri</a>
                    </li>
                    <li>
                        <a href="{{ action('HomeController@contact') }}">Kontakt</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
