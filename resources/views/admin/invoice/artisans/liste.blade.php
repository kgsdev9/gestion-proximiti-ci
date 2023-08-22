<!doctype html>
<html lang="en">

<head>
    <title>Liste des artisans </title>
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
        <h5 class=" font-weight-bold">Lite des utilisateurs</h5>
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                    <th>Nom & prenom </th>
                    <th>Télephone </th>
                    <th>Commune </th>
                    <th>Specialité </th>

                </tr>
            </thead>
            <tbody>
                @forelse ($ressource as $user)
                <tr>
                    <td>{{ $user->name }} {{ $user->prenom }}</td>
                    <td>{{ $user->telephone }}</td>
                    <td>{{ $user->commune }}</td>
                    <td>{{ $user->specilaite->libelle }}</td>

                </tr>
                @empty

                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>
