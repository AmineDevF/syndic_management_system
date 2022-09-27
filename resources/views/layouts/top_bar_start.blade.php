  <!-- Top Bar Start -->
  <div class="topbar">
    <nav class="navbar-custom">
       <ul class="list-unstyled topbar-right-menu float-right mb-0">
       
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link mr-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else




            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <img src="assets/images/users/admin.png" alt="user" class="rounded-circle"> <span class="ml-1">{{ Auth::user()->name }}<i class="mdi mdi-chevron-down"></i> </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown" x-placement="bottom-end" style="position: absolute; transform: translate3d(-32px, 70px, 0px); top: 0px; left: 0px; will-change: transform;">
                   <!-- item-->
                   <div class="dropdown-item noti-title">
                      <h6 class="text-overflow m-0">Welcome !</h6>
                   </div>
                   <!-- item-->
                   <a href="javascript:void(0);" class="dropdown-item notify-item">
                   <i class="fi-head"></i> <span>Dashboard</span>
                   </a>
                   <!-- item-->
                   <a href="javascript:void(0);" class="dropdown-item notify-item">
                   <i class="fi-cog"></i> <span>Paramétres</span>
                   </a>
                   <!-- item-->
                   <a href="{{ route('logout') }}" class="dropdown-item notify-item"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();"
                   >
                   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                   <i class="fi-power"></i> <span>Logout</span>
                   </a>
                </div>
             </li>

            @endguest
        </ul>
       <ul class="list-inline menu-left mb-0">
          <li class="float-left">
             <button class="button-menu-mobile open-left">
             <i class="dripicons-menu"></i>
             </button>
          </li>
          <li>
             <div class="page-title-box">
                <h4 class="page-title">Acceuil </h4>
                <ol class="breadcrumb">
                   <li class="breadcrumb-item active">Bienvenue sur votre espace E-Syndic !</li>
                </ol>
             </div>
          </li>
       </ul>
    </nav>
 </div>
<!-- Top Bar End -->