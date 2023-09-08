  <!-- ========== Left Sidebar Start ========== -->
  <div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">

                <li class="menu-title" data-key="t-menu" style="color:#fff;">Gestion proximiti</li>


                <li>
                    <a href="{{url('/')}}">
                        <i class="fa fa-home" style="color:#fff;"></i>
                        <span data-key="t-dashboard">Tableau de bord </span>
                    </a>
                </li>

                @can('administrateur')
                <li>
                    <a href="{{route('users.index')}}" >
                        <i class="fas fa-address-book" style="color:#fff;"></i>
                        <span data-key="t-apps">Annuaire Utilisateurs</span>
                    </a>
                </li>
                @endcan
                <li>
                    <a href="{{route('artisan.index')}}" >
                        <i class="far fa-address-card" style="color:#fff;"></i>
                        <span data-key="t-authentication">Annuaire Artisans </span>
                    </a>

                </li>

                <li>
                    <a href="{{route('specialite.index')}}" >
                        <i class="fas fa-glass-whiskey" style="color:#fff;"></i>
                        <span data-key="t-pages">Annuaire Specialité</span>
                    </a>

                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-gift"><polyline points="20 12 20 22 4 22 4 12"></polyline><rect x="2" y="7" width="20" height="5"></rect><line x1="12" y1="22" x2="12" y2="7"></line><path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path><path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path></svg>
                        <span data-key="t-ui-elements">PROJETS</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false">
                        <li><a href="{{route('clients.index')}}" data-key="t-lightbox">CATALOGUE CLIENT</a></li>
                        <li><a href="{{route('missions.index')}}" data-key="t-range-slider"> CATALOGUE MISSION</a></li>
                        <li><a href="{{route('calendrier')}}" data-key="t-sweet-alert">CATALOGUE AGENDA</a></li>
                    </ul>
                </li>

             
                <li>
                    <a href="{{route('fournisseurs.index')}}">
                        <i class="fa fa-building-o" style="color:#fff;"></i>
                        <span data-key="t-components">Fournisseurs</span>
                    </a>

                </li>


                <li>
                    <a href="{{route('gestion.commande')}}" >
                        <i class="fa fa-book" style="color:#fff;"></i>
                        <span data-key="t-pages">COMMANDES </span>
                    </a>

                </li>

                <li>
                    <a href="{{route('annuaire.messagerie')}}">
                        <i class="fa fa-building-o" style="color:#fff;"></i>
                        <span data-key="t-components">Messagerie</span>
                    </a>

                </li>


            </ul>



        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
