<div>


<div class="auth-page">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-xxl-3 col-lg-4 col-md-5">
                        <div class="auth-full-page-content d-flex p-sm-5 p-4">
                            <div class="w-100">
                                <div class="d-flex flex-column h-100">
                                    <div class="mb-4 mb-md-5 text-center">
                                        <a href="{{route('home')}}" class="d-block auth-logo">
                                            <img src="{{asset('logo_footer.png')}}" alt="" height="28"> <span class="logo-txt">Gestion proximiti</span>
                                        </a>
                                    </div>
                                    <div class="auth-content my-auto">
                                        <div class="text-center">
                                            <h5 class="mb-0">Code De Sécurité</h5>
                                            <p class="text-muted mt-2">Portail de sécurité Gestion Proximiti !</p>
                                        </div>
                                        <div class="user-thumb text-center mb-4 mt-4 pt-2">
                                            <img src="{{asset('logo_footer.png')}}" class="rounded-circle img-thumbnail avatar-lg" alt="thumbnail">
                                            <h5 class="font-size-15 mt-3">Renseignez le code de sécurité que vous avez récu {{Auth::user()->name}} via mail </h5>
                                        </div>
                                        <form class="mt-4 pt-2" wire:submit.prevent="connexion">
                                            <div class="mb-3">
                                                <label class="form-label" for="userpassword">Code de connexion</label>
                                                <input type="password" wire:model="code" class="form-control" id="userpassword" placeholder="Code de connexion">
                                            </div>
                                            <div class="mb-3 mt-4">
                                                <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Connexion</button>
                                            </div>
                                        </form>

                                        <div class="mt-5 text-center">
                                            <p class="text-muted mb-0">Des problemes de connexion  <a href="#" class="text-primary fw-semibold">Contactez L'administrateur </a> </p>
                                        </div>
                                    </div>
                                    <div class="mt-4 mt-md-5 text-center">
                                        <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Start-up Lauréate French Tech Tremplin 2021-2022  </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end auth full page content -->
                    </div>
                    <!-- end col -->
                    <div class="col-xxl-9 col-lg-8 col-md-7">
                        <div class="auth-bg pt-md-5 p-4 d-flex">
                            <div class="bg-overlay bg-primary"></div>
                            <ul class="bg-bubbles">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <!-- end bubble effect -->
                            <div class="row justify-content-center align-items-center">
                                <div class="col-xl-7">
                                    <div class="p-0 p-sm-4 px-xl-0">
                                        <div id="reviewcarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-indicators carousel-indicators-rounded justify-content-start ms-0 mb-0">
                                                <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            </div>
                                            <!-- end carouselIndicators -->
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <div class="testi-contain text-white">
                                                        <i class="bx bxs-quote-alt-left text-success display-6"></i>

                                                        <h4 class="mt-4 fw-medium lh-base text-white">“J'aime bien proximity, pour ma part
                                                            Très belle initiative j'espère qu'on pourra compter sur vous à 💯
                                                        </h4>
                                                        <div class="mt-4 pt-3 pb-5">
                                                            <div class="d-flex align-items-start">
                                                                <div class="flex-shrink-0">
                                                                    <img src="{{asset('logo_footer.png')}}" class="avatar-md img-fluid rounded-circle" alt="...">
                                                                </div>
                                                                <div class="flex-grow-1 ms-3 mb-4">
                                                                    <h5 class="font-size-18 text-white">Aminata Yeo
                                                                    </h5>
                                                                    <p class="mb-0 text-white-50">Abonnés facebook </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="carousel-item">
                                                    <div class="testi-contain text-white">
                                                        <i class="bx bxs-quote-alt-left text-success display-6"></i>

                                                        <h4 class="mt-4 fw-medium lh-base text-white">“Afin la solution à nos petits soucis,
                                                            c'est proximiti ”</h4>
                                                        <div class="mt-4 pt-3 pb-5">
                                                            <div class="d-flex align-items-start">
                                                                <div class="flex-shrink-0">
                                                                    <img src="{{asset('logo_footer.png')}}" class="avatar-md img-fluid rounded-circle" alt="...">
                                                                </div>
                                                                <div class="flex-grow-1 ms-3 mb-4">
                                                                    <h5 class="font-size-18 text-white">Franck atsi
                                                                    </h5>
                                                                    <p class="mb-0 text-white-50">Abonnés facebook </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="carousel-item">
                                                    <div class="testi-contain text-white">
                                                        <i class="bx bxs-quote-alt-left text-success display-6"></i>

                                                        <h4 class="mt-4 fw-medium lh-base text-white">“Innovation
                                                           Avec proximiti plus besoin de nous déplacer expliquez vos besoins nous viendons vers vous.”</h4>
                                                        <div class="mt-4 pt-3 pb-5">
                                                            <div class="d-flex align-items-start">
                                                                <img src="{{asset('logo_footer.png')}}"
                                                                    class="avatar-md img-fluid rounded-circle" alt="...">
                                                                <div class="flex-1 ms-3 mb-4">
                                                                    <h5 class="font-size-18 text-white">Francoise Blue</h5>
                                                                    <p class="mb-0 text-white-50">Abonnés facebook
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end carousel-inner -->
                                        </div>
                                        <!-- end review carousel -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container fluid -->
        </div>






</div>
