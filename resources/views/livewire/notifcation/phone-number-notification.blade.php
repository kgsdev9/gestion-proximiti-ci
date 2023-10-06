@section('title', 'Messagerie artisan')

<div>
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Annuaire Mességerie</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Acueil</a></li>
                                    <li class="breadcrumb-item active">Messagerie</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="d-lg-flex">
                    <div class="chat-leftsidebar card">
                        <div class="p-3 px-4 border-bottom">
                            <div class="d-flex align-items-start ">
                                <div class="flex-shrink-0 me-3 align-self-center">
                                    <img src="{{asset('logo_footer.png')}}" class="avatar-sm rounded-circle" alt="">
                                </div>

                                <div class="flex-grow-1">
                                    <h5 class="font-size-16 mb-1"><a href="#" class="text-dark"> {{Auth::user()->name}} <i class="mdi mdi-circle text-success align-middle font-size-10 ms-1"></i></a></h5>
                                    <p class="text-muted mb-0">{{Auth::user()->email}}</p>
                                </div>


                            </div>
                        </div>


                        <div class="chat-leftsidebar-nav">
                            <ul class="nav nav-pills nav-justified bg-light-subtle  p-1" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a href="#chat" data-bs-toggle="tab" aria-expanded="true" class="nav-link active" aria-selected="false" role="tab" tabindex="-1">
                                        <i class="bx bx-chat font-size-20 d-sm-none"></i>
                                        <span class="d-none d-sm-block">Composer  un  sms </span>
                                    </a>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <a href="#contacts" data-bs-toggle="tab" aria-expanded="false" class="nav-link" aria-selected="false" role="tab" tabindex="-1">
                                        <i class="bx bx-book-content font-size-20 d-sm-none"></i>
                                        <span class="d-none d-sm-block">Sms Envoyés</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="chat" role="tabpanel">
                                    <div class="chat-message-list" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden; padding-right: 0px; padding-bottom: 0px;"><div class="simplebar-content" style="padding: 0px;">
                                        <div class="pt-3">

                                            <div class="px-3">
                                                <select wire:model="commune"  class="form-control">
                                                    <option value="">Selectionner une commune </option>
                                                        <option value="ABOBO">ABOBO</option>
                                                        <option value="Cocody">COCODY</option>
                                                        <option value="koumassi">KOUMASSI</option>
                                                        <option value="Yopougon">YOPOUGON</option>
                                                        <option value="BINGERVILLE">BINGERVILLE</option>
                                                        <option value="Anyama">ANAYAMA</option>
                                                        <option value="Port-Bouet">PORT - BOUET </option>
                                                </select>
                                                <br>
                                             </div>

                                            <div class="px-3">
                                               <input type="text" wire:model="search" class="form-control" placeholder="Par nom">
                                               <br>
                                            </div>
                                            <ul class="list-unstyled chat-list">
                                                @foreach ($allArtisans as $value)
                                                <li class="active">
                                                    <a href="#">
                                                        <div class="d-flex align-items-start">
                                                            <input type="checkbox"  wire:model="message" value="{{$value->id}}">
                                                            <div class="flex-shrink-0 user-img online align-self-center me-3">
                                                                <img src="{{asset('artisans/photo/'.$value->photo)}}" class="rounded-circle avatar-sm" alt="">
                                                                <span class="user-status"></span>
                                                            </div>

                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="text-truncate font-size-14 mb-1">{{$value->name}} {{$value->prenom}}</h5>
                                                                <p class="text-truncate mb-0">
                                                                    @foreach ( $value->specialites as $specialite )
                                                                    {{$specialite->libelle}}
                                                                    @endforeach
                                                                        <br>
                                                                    <span>{{$value->commune}}</span>
                                                                </p>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <div class="font-size-11">02 min</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                @endforeach


                                            </ul>
                                        </div>
                                    </div></div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 173px; transform: translate3d(0px, 0px, 0px); display: none;"></div></div></div>
                                </div>


                                <div class="tab-pane" id="contacts" role="tabpanel">
                                    <div class="chat-message-list" data-simplebar="init">
                                        <div class="simplebar-wrapper" style="margin: 0px;">
                                            <div class="simplebar-height-auto-observer-wrapper">
                                                <div class="simplebar-height-auto-observer">
                                                    </div>
                                                </div>
                                                <div class="simplebar-mask">
                                                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                        <div class="simplebar-content-wrapper" style="height: auto; overflow: hidden; padding-right: 0px; padding-bottom: 0px;">
                                                    <div class="simplebar-content" style="padding: 0px;">
                                                 <div class="pt-3">
                                                    <div>

                                                <div>
                                                    <ul class="list-unstyled chat-list">
                                                        @foreach ($allMessages as $sms)
                                                        <li>
                                                            <div class="px-3">
                                                                <h5 class="font-size-14 mb-3">Sms envoyé à {{$sms->created_at}} </h5>
                                                            </div>
                                                            <a href="#">
                                                               <p>{{$sms->message}}</p>
                                                            </a>
                                                        </li>
                                                        @endforeach



                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="simplebar-placeholder" style="width: 0px; height: 0px;">
                        </div>
                    </div>
                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                        <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;">
                        </div>
                    </div>
                    <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                        <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none; height: 220px;">
                        </div>
                    </div>
                        </div>
                         </div>
                      </div>
                        </div>

                    </div>
                    <!-- end chat-leftsidebar -->

                    <div class="w-100 user-chat mt-4 mt-sm-0 ms-lg-1">
                        <div class="card">


                            <div class="chat-conversation p-3 px-2" data-simplebar="init"><div class="simplebar-wrapper" style="margin: -16px -8px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: -20px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll; padding-right: 20px; padding-bottom: 0px;"><div class="simplebar-content" style="padding: 16px 8px;">
                                <ul class="list-unstyled mb-0">
                                    @foreach ($laste_message as $latest)


                                    <li>
                                        <div class="conversation-list">
                                            <div class="ctext-wrap">
                                                <div class="ctext-wrap-content">
                                                    <h5 class="conversation-name"><a href="#" class="user-name">Message envoyé  </a> <span class="time"> {{$latest->created_at->diffForHumans()}}</span></h5>
                                                    <p class="mb-0"> {{$latest->message}}</p>
                                                </div>
                                                <div class="dropdown align-self-start">
                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </a>
                                                    <div class="dropdown-menu">



                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </li>

                                    @endforeach
                                            <div class="row">
                                                @foreach ($selectionArtisan as $value)
                                                <div class="col-xl-3 col-sm-4">
                                                    <div class="card text-center">
                                                        <div class="card-body">
                                                            <div class="mx-auto mb-4">
                                                                <img src="{{asset('artisans/photo/'.$value->photo)}}" alt="" class="avatar-xl rounded-circle img-thumbnail">
                                                            </div>
                                                            <h5 class="font-size-16 mb-1">
                                                                <a href="#" class="text-body">{{$value->name}}</a>
                                                            </h5>
                                                            <p class="text-muted mb-2">
                                                                @foreach ($value->specialites as  $specialite)
                                                                    {{$specialite->libelle}}
                                                                @endforeach

                                                            </p>
                                                        </div>

                                                    </div>
                                                    <!-- end card -->
                                                </div>
                                                @endforeach
                                                @if (session()->has('message'))
                                                <div class="alert alert-success">
                                                    {{ session('message') }}
                                                </div>
                                                @endif

                                            </div>
                                </ul>
                            </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 949px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 144px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></div>

                            <div class="p-3 border-top">
                                <form wire:submit.prevent="send">
                                <div class="row">

                                    <div class="col">
                                        <div class="position-relative">
                                            <textarea  wire:model="sms" class="form-control border bg-light-subtle" id="" cols="30" rows="2" maxlength="540"></textarea>
                                            @error('sms') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary chat-send w-md waves-effect waves-light"><span class="d-none d-sm-inline-block me-2">Envoyer</span> <i class="mdi mdi-send float-end"></i></button>
                                    </div>

                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <!-- end user chat -->
                </div>
                <!-- End d-lg-flex  -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>
</div>



