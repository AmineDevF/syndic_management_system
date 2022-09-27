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
                         <h5><a href="#">Maxine Kennedy</a> </h5>
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
                                  <li><a href="proprietaire/liste.html">Nouveau proprietaire</a></li>
                                  <li><a href="{{ url('/proprietaire') }}">Liste proprietaire</a></li>
                               </ul>
                            </li>
                            <li class="active">
                               <a href="javascript: void(0);" aria-expanded="true"><i class="fi-layers"></i> <span>Propriété </span> <span class="menu-arrow"></span></a>
                               <ul class="nav-second-level collapse in" aria-expanded="true" style="">
                                  <li><a href="proprietaire/liste.html">Nouveau propriété</a></li>
                                  <li><a href="{{ url('/propriete') }}">Liste propriété</a></li>
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