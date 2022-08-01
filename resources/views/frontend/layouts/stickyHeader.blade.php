<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">

                    <!-- ***** Logo Start ***** -->
                    <a href="{{ url('/') }}" class="logo"><em> Marvel Comms</em></a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    @if (Route::has('login'))
                        <ul class="nav">
                            @auth
                                <li class=""><a href="{{ url('/') }}" class="active">Home</a></li>
                                <li class=""><a href="#form">Form</a></li>
                            @else
                                <li class="main-button"><a href="{{ route('login') }}">Sign In</a></li>
                            @endauth
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                    @endif
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
