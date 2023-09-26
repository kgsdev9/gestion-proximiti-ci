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
                       <i class="fa fa-bar-chart" style="color:#fff;"></i>
                        <span data-key="t-ui-elements">PROJETS</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false">
                        <li><a href="{{route('clients.index')}}" data-key="t-lightbox"> <i class="fas fa-users" style="color: #fff;"></i> CATALOGUE CLIENT</a></li>
                        <li><a href="{{route('missions.index')}}" data-key="t-range-slider"> CATALOGUE MISSION</a></li>
                        <li><a href="{{route('calendrier')}}" data-key="t-sweet-alert">CATALOGUE AGENDA</a></li>
                    </ul>
                </li>


                <li>
                    <a href="{{route('equipement')}}">
                        <i class="fa fa-building-o" style="color:#fff;"></i>
                        <span data-key="t-components">Equipements</span>
                    </a>

                </li>


                <li>
                    <a href="{{route('gestion.commande')}}" >
                        <i class="fa fa-book" style="color:#fff;"></i>
                        <span data-key="t-pages">COMMANDES </span>
                    </a>

                </li>

                <li class="">
                    <a href="javascript: void(0);" class="has-arrow" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                        <span data-key="t-apps">MESSAGERIE </span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false" style="height: 0px;">

                        <li class="">
                            <a href="javascript: void(0);" class="has-arrow" aria-expanded="false">
                                <span data-key="t-email">MARKETING SMS</span>
                            </a>
                            <ul class="sub-menu mm-collapse" aria-expanded="false" style="height: 0px;">
                                <li><a href="{{route('messagerie.artisan')}}" data-key="t-inbox">ARTISANS</a></li>
                                <li><a href="{{route('annuaire.messagerie')}}" data-key="t-read-email">PARTICULIERS</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" aria-expanded="false">
                                <span data-key="t-invoices">MARKETING EMAIL </span>
                            </a>
                            <ul class="sub-menu mm-collapse" aria-expanded="false">
                                <li><a href="#" data-key="t-invoice-list">E-MAIL </a></li>

                            </ul>
                        </li>


                    </ul>
                </li>

            </ul>



        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
