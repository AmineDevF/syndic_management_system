            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 780px;">
                   <div class="slimscroll-menu" id="remove-scroll" style="overflow: hidden; width: auto; height: 780px;">
                      <!-- LOGO -->
                      <div class="topbar-left">
                         <a href="index.html" class="logo">
                         <span>
                         <img src="/assets/images/logo.png" alt="" height="22">
                         </span>
                         <i>
                         <img src="/assets/images/logo_sm.png" alt="" height="28">
                         </i>
                         </a>
                      </div>
                      <!-- User box -->
                      <div class="user-box">
                        @guest
                        @if (Route::has('login'))
                         <h5><a href="{{url('admin')}}">tst mail </a> </h5>
                        @endif
                        @else
                        <h5><a href="{{url('admin')}}">{{ Auth::user()->email }} </a> </h5>

                         @endguest
                      </div>
                      <!--- Sidemenu -->
                      <div id="sidebar-menu">
                         <ul class="metismenu" id="side-menu">
                            <!--<li class="menu-title">Navigation</li>-->
                            <li>
                               <a href="{{ url('/dashboard') }}" aria-expanded="false">
                               <i class="fi-air-play"></i> <span>Acceuil</span> 
                               </a>
                            </li>
                            <li class="active">
                               <a href="javascript: void(0);" aria-expanded="true"><i class="fi-layers"></i> <span>Proprietaire </span> <span class="menu-arrow"></span></a>
                               <ul class="nav-second-level collapse in" aria-expanded="true" style="">
                                  <li><a href="{{ url('/propri/create') }}">Nouveau proprietaire</a></li>
                                  <li><a href="{{ url('/propri') }}">Liste proprietaire</a></li>
                               </ul>
                            </li>
                            <li class="active">
                               <a href="javascript: void(0);" aria-expanded="true"><i class="fi-layers"></i> <span>Propri??t?? </span> <span class="menu-arrow"></span></a>
                               <ul class="nav-second-level collapse in" aria-expanded="true" style="">
                                  <li><a href="{{ url('/propriete/create') }}">Nouveau propri??t??</a></li>
                                  <li><a href="{{ url('/propriete') }}">Liste propri??t??</a></li>
                               </ul>
                            </li>
                            <li class="active">
                               <a href="javascript: void(0);" aria-expanded="true"><i class="fi-layers"></i> <span>Propri??t?? Type </span> <span class="menu-arrow"></span></a>
                               <ul class="nav-second-level collapse in" aria-expanded="true" style="">
                                  <li><a href="{{ url('/p_type/create') }}">Nouveau propri??t?? Type</a></li>
                                  <li><a href="{{ url('/p_type') }}">Liste propri??t?? Type</a></li>
                               </ul>
                            </li>
                            <li class="active">
                               <a href="javascript: void(0);" aria-expanded="true"><i class="fi-layers"></i> <span>Effectu?? une Facture </span> <span class="menu-arrow"></span></a>
                               <ul class="nav-second-level collapse in" aria-expanded="true" style="">
                                  <li><a href="{{ url('/facture/create') }}">Nouvelle Facture</a></li>
                                  <li><a href="{{ url('/facture') }}">Liste Des  Facture</a></li>
                               </ul>
                            </li>
                         </ul>
                      </div>
                      <!-- Sidebar -->
                      <div class="clearfix"></div>
                   </div>
                   <div class="slimScrollBar" style="background: rgb(158, 165, 171); width: 8px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 780px;"></div>
                   <div class="slimScrollRail" style="width: 8px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
                </div>
                <!-- Sidebar -left -->
             </div>
             <!-- Left Sidebar End -->