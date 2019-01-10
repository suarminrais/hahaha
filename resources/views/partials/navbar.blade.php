    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/')}}">Vectorina</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <form class="form-inline my-2 my-sm-0" style="padding-left: 20%;">
          <input class="form-control mr-sm-2" type="text" placeholder="Search artist or style" aria-label="Search">
        </form>
        @if (Auth::guard('buyer')->guest())
        @guest
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="btn btn-prymary btn-lg" href="{{ route('register') }}">Join Sebagai Artist</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('buyer.register') }}">Register</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('login') }}">Artis</a>
                <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('buyer.login') }}">Costumer</a>
                </div>
              </li>
            </ul>
          </div>
        @else
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="fa fa-comments-o"></i> Messages
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                  </div>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="fa fa-user-circle"></i> {{ Auth::user()->name }}
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#"></a>
                      <!-- <label for="">DASHBOARD</label> -->
                      <a class="dropdown-item" href="{{ route('home') }}">Art Styles</a>
                      <a class="dropdown-item" href="{{ route('artis.rate') }}">Reviews</a>
                      <a class="dropdown-item" href="{{ route('artis.profil', Auth::user()->name) }}">My Profile</a>
                      <a class="dropdown-item" href="#">Transaction History</a>
                  <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                  </div>
              </li>
          </ul>
          </div>
        </div>
      </nav>
      <nav class="navbar navbar-expand-sm navbar-light bg-light artist">
          <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item ">
                      <a class="nav-link" href="{{ route('home') }}">MY ART STYLES <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('artis.pay') }}">PEMBAYARAN</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('artis.rate') }}">RATING & REVIEWS</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('artis.profile') }}">EDIT PPROFIL</a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="{{ route('artis.message') }}">INBOX<span class="sr-only">(current)</span></a>
                  </li>
              </ul>
          </div>
        </nav>
                    @endguest
                    @else
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="fa fa-comments-o"></i> Messages
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                  </div>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="fa fa-user-circle"></i> {{ Auth::guard('buyer')->user()->name }}
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#"></a>
                      <!-- <label for="">DASHBOARD</label> -->
                      <a class="dropdown-item" href="{{ route('buyer.bayar',Auth::guard('buyer')->id()) }}">Pembayaran</a>
                      <a class="dropdown-item" href="{{ route('buyer.rating',Auth::guard('buyer')->id()) }}">Reviews</a>
                  <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('buyer.logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('buyer.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                  </div>
              </li>
          </ul>
          </div>
        </div>
      </nav>
      <nav class="navbar navbar-expand-sm navbar-light bg-light artist">
          <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('buyer.bayar',Auth::guard('buyer')->id()) }}">PEMBAYARAN</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('buyer.rating',Auth::guard('buyer')->id()) }}">RATING & REVIEWS</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('buyer.profile',Auth::guard('buyer')->id()) }}">EDIT PPROFIL</a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="{{ route('buyer.message') }}">INBOX<span class="sr-only">(current)</span></a>
                  </li>
              </ul>
          </div>
        </nav>
                    @endguest
      </div>
    </nav>
    