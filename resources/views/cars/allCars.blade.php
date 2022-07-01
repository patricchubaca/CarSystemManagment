@extends('dashboard')

@section('content')

<section  class="section">
  
  <div class="row">
    <div class="mb-5">
      <div class="alert border" role="alert">
        <h1 class="mx-2 my-2">Dashboard de Carros</h1>
      </div>  
    </div>
    <table class="table" id="tableUsuarios">
      <thead>
        <tr>
          <th scope="col">Modelo</th>
          <th scope="col">Placa</th>
          <th scope="col">Ano</th>
          <th scope="col">Ano</th>
        </tr>
      </thead>
      <tbody>

      </tbody>
    </table>

  </section>


  <script type="text/javascript">
    $(document).ready(function() {
     $('#tableUsuarios').DataTable( {
      "ajax": "/api/cars",
      "columns": [
      {"data":"placa" },
      {"data":"marca" },
      {"data":"ano" },
      {"data":"button"}
      ]
    } );
   } );

 </script>

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.11.5/datatables.min.css"/>

 <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.11.5/datatables.min.js"></script>


 @endsection