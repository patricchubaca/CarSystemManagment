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
      <th scope="col">Edit | Delete</th>
    </tr>
  </thead>
  <tbody>

  </tbody>
</table>

</section>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Produtos</h5>
        <div class="control">
        </div>
      </div>
      <form method="POST" id="form-cad-usuario">
        @csrf 
        <div class="modal-body">
          <div class="control">
            <input class="invisible" name="id" type="text" id="editid">
          </div>
          <label>Sigla:</label>
          <div class="control">
            <input class="input is-hovered" name="sigla" type="text" id="editsigla">
          </div>
          <label>Descrição:</label>
          <div class="control">
            <input class="input is-hovered" name="tipo" type="text" id="edittipo">
          </div>
          <label>Composição:</label>
          <div class="control">
            <input class="input is-hovered" name="formula" type="text" id="editformula">
          </div>
          <label>COD Spead:</label>
          <div class="control">
            <input class="input is-hovered" name="codigo_sped" type="text" id="editcodigo_sped">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
   $('#tableUsuarios').DataTable( {
    "ajax": "/api/cars",
    "columns": [
    {"data":"placa" },
    {"data":"marca" },
    {"data":"ano" },
    {"data":"button" }
    ]
  } );
 } );

</script>

@endsection