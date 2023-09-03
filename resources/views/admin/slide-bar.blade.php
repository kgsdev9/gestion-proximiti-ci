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
                    <a href="{{route('calendrier')}}" >
                        <i class="fa fa-briefcase" style="color:#fff;"></i>
                        <span data-key="t-pages">Agenda M</span>
                    </a>

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
