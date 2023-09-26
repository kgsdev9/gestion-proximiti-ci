
<!DOCTYPE html>
<html>
<head>
    <title>Commande </title>
</head>
<style type="text/css">
    body{
        font-family: 'Roboto Condensed', sans-serif;
    }
    .m-0{
        margin: 0px;
    }
    .p-0{
        padding: 0px;
    }
    .pt-5{
        padding-top:5px;
    }
    .mt-10{
        margin-top:10px;
    }
    .text-center{
        text-align:center !important;
    }
    .w-100{
        width: 100%;
    }
    .w-50{
        width:50%;
    }
    .w-85{
        width:85%;
    }
    .w-15{
        width:15%;
    }
    .logo img{
        width:45px;
        height:45px;
        padding-top:30px;
    }
    .logo span{
        margin-left:8px;
        top:19px;
        position: absolute;
        font-weight: bold;
        font-size:25px;
    }
    .gray-color{
        color:#5D5D5D;
    }
    .text-bold{
        font-weight: bold;
    }
    .border{
        border:1px solid black;
    }
    table tr,th,td{
        border: 1px solid #d2d2d2;
        border-collapse:collapse;
        padding:7px 8px;
    }
    table tr th{
        background: #F4F4F4;
        font-size:15px;
    }
    table tr td{
        font-size:13px;
    }
    table{
        border-collapse:collapse;
    }
    .box-text p{
        line-height:10px;
    }
    .float-left{
        float:left;
    }
    .total-part{
        font-size:16px;
        line-height:12px;
    }
    .total-right p{
        padding-right:20px;
    }
</style>
<body>

<div class="table-section bill-tbl w-100 mt-10">

    <h1>BON D'ACHAT {{$commande->codeCommande}} </h1>
    <table class="table w-100 mt-10">
        <tr>
            <th class="w-50">Informations</th>
            <th class="w-50">Client</th>
        </tr>
        <tr>
            <td>
                <div class="box-text">
                    <p>Compte Contribuable N° 2242525A</p>
                    <p>RCCM : CI-ABJ-03-2022-B13-05599 </p>
                    <p>SARLU au capital de 1.000.000 F CFA</p>
                    <p>Lieu : Riviera Bonoumin - Rond point ADO</p>
                    <p>Contact : +225 05 00 50 79 52</p>
                    <p>E-mail : contact@proximiti.ci</p>
                    <p>Site : www.proximiti.ci</p>

                </div>
            </td>
            <td>
                <div class="box-text">
                    <p>Devis Numéro : </p>
                    <p>Date : {{date('d/m/Y', strtotime($commande->created_at))}} </p>
                    <p>Expiration le : {{date('d/m/Y', strtotime($commande->expire_at))}}</p>
                    <p>Code Client : {{$commande->client->codeClient}}</p>
                    <p><strong>Identite client: {{$commande->client->nom}}  {{$commande->client->prenom}}</strong></p>
                    <p>Adresse des travaux :  {{$commande->client->adresse}} </p>
                    <p> Attribution à {{$commande->artisan->name}} {{$commande->artisan->prenom}}
                        @foreach ($commande->artisan->specialites as $specialite)
                            <span>{{$specialite->libelle}}</span>
                        @endforeach

                    </p>
                </div>
            </td>
        </tr>
    </table>
</div>

<div class="table-section bill-tbl w-100 mt-10">
    <table class="table w-100 mt-10">
        <tr>
            <th class="w-50">Désignation</th>
            <th class="w-50">Prix</th>
            <th class="w-50">Quantité</th>
            <th class="w-50">Total</th>
        </tr>
        @foreach ($ressource as $data)
        <tr align="center">
            <td>{{$data->designation}}</td>
            <td>{{$data->prix}} FCFA</td>
            <td>{{$data->quantite}}</td>
            <td>{{$data->total}} FCFA </td>
        </tr>
        @endforeach

        <tr>
            <td colspan="7">
                <div class="total-part">
                    <div class="total-right w-15 float-left text-bold" align="right">
                        <p>{{$data->sommeCommande($ressource)}} <br> FCFA </p>
                    </div>
                    <div style="clear: both;"></div>
                </div>
            </td>
        </tr>
    </table>
</div>
</html>
