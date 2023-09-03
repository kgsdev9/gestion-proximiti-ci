@extends('admin.layouts.app')
@section('master')
@section('title', 'Annuaire de messagérie')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Annuaire Message</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Accueil</a></li>
                                <li class="breadcrumb-item active">Messagerie</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Envoyez un message à un artisan </h4>
                            <p class="card-title-desc">assurez vous de rentrer un numero valide et marquez l'indificaf du pays </p>
                        </div>
                        <div class="card-body">
                            <form action="{{route('send.sms')}}" method="POST">
                                @csrf

                                @if($errors->any())
                                <ul>
                               @foreach($errors->all() as $error)
                              <div class="alert alert-success"> {{ $error }} </div>
                               @endforeach
                          @endif

                          @if( session( 'success' ) )
                               {{ session( 'success' ) }}
                          @endif

                          <div class="form-group">
                            <label for="">Selectionner un objet</label>
                            <select name="objet" id="" class="form-control">
                                <option value="">Selectionner l'objet du message</option>
                                <option value="Nouvelle Mission">Nouvelle Mission</option>

                            </select>
                             </div>

                            <div class="form-group">
                                <label for="">Entrer votre numero </label>
                               <input type="text" class="form-control" name="phone" value="{{old('phone')}}">
                            </div>






                            <div class="form-group">
                                <label for="">Entrer votre message </label>
                                <textarea class="form-control"  name="editordata" ></textarea>

                            </div>
                            <br>
                            <button type="submit" class="btn btn-dark">Enregistrer</button>
                        </form>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script>2023 © Minia.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Design &amp; Develop by <a href="#!" class="text-decoration-underline">Themesbrand</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection
