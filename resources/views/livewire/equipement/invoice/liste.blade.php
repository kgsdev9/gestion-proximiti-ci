<!doctype html>
<html lang="en">

<head>
    <title>Liste des equipment </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        table {
            font-size: 12px;
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <h5 class=" font-weight-bold">Lite des equipment</h5>
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                    <th>Désignation </th>
                    <th>Quantite </th>
                    <th>Fournisseur </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($allEquipments as $equipment)
                <tr>
                    <td>{{ $equipment->designation }}</td>
                    <td>{{ $equipment->quantite }}</td>
                    <td>{{ $equipment->fournisseur }}</td>
                </tr>
                @empty
                <span>Aucun equipment disponible pour le moment </span>
                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>
