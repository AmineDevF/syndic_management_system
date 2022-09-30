
<!DOCTYPE html>
<html lang="en">
<head>
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="css/app.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="container mt-5">
    <h2 class="text-center mb-3">Syndic Facture N°{{$facture->id}} </h2>
        <div class="d-flex justify-content-end mb-4">
            {{-- <a class="btn btn-primary" href="{{ URL::to(   '#') }}">Export to PDF</a> --}}
        </div>
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-danger">
                    <th scope="col">#</th>
                    <th scope="col">Prestation</th>
                    <th scope="col">Num facture</th>
                    <th scope="col">Montant</th>
                    
                </tr>
            </thead>
            <tbody>
               
                <tr>
                    <td>{{$facture->id}}</td> 
                    <td>{{$facture->prestation}}</td> 
                    <td>{{$facture->num_facture}}</td>
                    <td>{{$facture->montant}}(MAD)</td>
                </tr>
               
            </tbody>
        </table>
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-danger">
                    <th scope="col">#</th>
                    <th scope="col">Propriete type</th>
                    <th scope="col">Batiment</th>
                    <th scope="col">Num titre</th>
                    
                </tr>
            </thead>
            <tbody>
               
                <tr>
                    <td>{{$propriete->id}}</td> 
                    <td>{{$propriete->type_propriete}}</td> 
                    <td>{{$propriete->batiment}}</td>
                    <td>{{$propriete->num_titre}}</td>
                </tr>
               
            </tbody>
        </table>
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-danger">
                    <th scope="col">#</th>
                    <th scope="col">Nom propriétaire</th>
                    <th scope="col">Prenom  propriétaire</th>
                    <th scope="col">Tel  propriétaire</th>
                    
                </tr>
            </thead>
            <tbody>
               
                <tr>
                    <td>{{$proprietaire->id}}</td> 
                    <td>{{$proprietaire->nom}}</td> 
                    <td>{{$proprietaire->prenom}}</td>
                    <td>{{$proprietaire->tel}}</td>
                </tr>
               
            </tbody>
        </table>
    </div>
    {{-- <script src="js/app.js" type="text/js"></script> --}}
</body>
</html>
