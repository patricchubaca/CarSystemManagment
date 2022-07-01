@extends('dashboard')

@section('content')

<section  class="section">

  <div class="container ">
    <main>
    </div>
    
    <div class="col-md-7 col-lg-12 mt-1 border">
     <form class="needs-validation  px-5 py-1 mt-1" method="POST" action="{{url("car/".$car['id'])}}" enctype="multipart/form-data">
      @csrf
      <h2 class="mt-5">Edição do veiculo</h2>
      <div class="row g-3 mt-3">
        <div class="col-sm-6">
          <label for="firstName" class="form-label">Marca</label>
          <input type="text" class="form-control" placeholder="Mercedes-benz Classe A" name="marca" value="{{$car['marca']}}" required>
          <div class="invalid-feedback">
            Valid first name is required.
          </div>
        </div>
        <div class="col-sm-6">
          <label for="lastName" class="form-label">Modelo</label>
          <input type="text" class="form-control" id="lastName" placeholder="Mercedes-Benz" name="modelo" value="{{$car['modelo']}}" required>
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>
        <div class="col-md-5">
          <label for="country" class="form-label">Placa</label>
          <input type="text" class="form-control" id="lastName" placeholder="BRZ7S19" name="placa" value="{{$car['placa']}}" required>
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>
        <div class="col-md-4">
          <label for="state" class="form-label">Cor</label>
          <input type="text" class="form-control" id="lastName" placeholder="Branco" name="cor" value="{{$car['cor']}}" required>
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
          <div class="invalid-feedback">
            Please provide a valid state.
          </div>
        </div>

        <div class="col-md-3">
          <label for="zip" class="form-label">Ano</label>
          <input type="text" class="form-control" id="zip" placeholder="2018" name="ano" value="{{$car['ano']}}" required>
          <div class="invalid-feedback">
            Zip code required.''
          </div>
        </div>
        <div class="col-md-12">
          <label for="country" class="form-label">Imagem 01</label>
          <input type="file" class="form-control" id="lastName" name="imagem01" value="{{$car['imagem01']}}" required>
          <img src="{{url("storage/cars{$car['imagem01']}")}}" class="img-fluid" alt="...">
          <div class="invalid-feedback">
        
          </div>
        </div>
        <div class="col-md-12">
          <label for="country" class="form-label">Imagem 02</label>
          <input type="file" class="form-control" id="lastName"  name="imagem02" value="{{$car['imagem02']}}" required>
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>
        <div class="col-md-12">
          <label for="cover" class="form-label">Imagem 03</label>
          <input type="file" class="form-control" id="lastName" name="imagem03" value="{{$car['imagem03']}}" required>
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>
        <div class="col-md-12">
          <label for="country" class="form-label">Imagem 04</label>
          <input type="file" class="form-control" name="imagem04"  value="{{$car['imagem04']}}" required>
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>
        <div class="col-md-12">
          <label for="country" class="form-label">Imagem 05</label>
          <input type="file" class="form-control" name="imagem05" value="{{$car['imagem05']}}" required>
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>
      </div>
      <hr class="my-4">
      <h2 class="mb-3 mt-5">Pendencias ?</h2>
      <div class="row g-3 mt-5">
        <div class="col-sm-6">
          <label for="firstName" class="form-label">Divida</label>
          <input type="text" class="form-control" id="firstName" placeholder="Pendencias do Veiculo" name="divida" value="{{$car['divida']}}" required>
          <div class="invalid-feedback">
            Valid first name is required.
          </div>
        </div>
        <div class="col-sm-6">
          <label for="lastName" class="form-label">Financiamento</label>
          <input type="text" class="form-control" id="lastName" placeholder="Pendencias do Veiculo" name="financiamento" value="{{$car['financiamento']}}" required>
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>
        <div class="col-md-5">
          <label for="country" class="form-label">Quitação</label>
          <input type="text" class="form-control" id="lastName" placeholder="30 X 1220,00" name="quitacao" value="{{$car['quitacao']}}" required>
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>
        <div class="col-md-4">
          <label for="state" class="form-label">Multa</label>
          <input type="text" class="form-control" id="lastName" placeholder="Multas vinculadas ao Veiculo" value="{{$car['multa']}}" name="multa" required>
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
          <div class="invalid-feedback">
            Please provide a valid state.
          </div>
        </div>
        <div class="col-md-3">
          <label for="zip" class="form-label">IPVA</label>
          <input type="text" class="form-control" id="zip" placeholder="IPVA Veiculo" name="ipva" value="{{$car['ipva']}}" required>
          <div class="invalid-feedback">
            Zip code required.
          </div>
        </div>
        <div class="col-md-3">
          <label for="country" class="form-label">Licenciamento</label>
          <input type="text" class="form-control" id="lastName" placeholder="10 X 125,30" value="{{$car['licensiamento']}}" name="licensiamento" required>
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>
        <div class="col-md-6">
          <label for="country" class="form-label">Outros</label>
          <input type="text" class="form-control" id="lastName" placeholder="" value="{{$car['outros']}}" name="outros" required>
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>
      </div>
      <hr class="my-4">
      <h2 class="mb-5 ">Dados Venda</h2>
      <div class="row gy-3 mt-1">
        <div class="col-md-8">
          <label for="cc-name" class="form-label">Nome do negociador</label>
          <input type="text" class="form-control" id="cc-name" placeholder="" name="nomeVendedorVenda" value="{{$car['nomeVendedorVenda']}}" required>
          <small class="text-muted">   Nome completo do negociador</small>
          <div class="invalid-feedback">
          </div>
        </div>
        <div class="col-md-3">
          <label for="cc-expiration" class="form-label">Valor da venda</label>
          <input type="text" class="form-control" id="cc-expiration" placeholder="" value="{{$car['valorVenda']}}" name="valorVenda" required>
          <div class="invalid-feedback">
            Expiration date required
          </div>
        </div>
        <div class="col-md-3">
          <label for="cc-cvv" class="form-label">Data entrada</label>
          <input type="date" class="form-control" id="cc-cvv" name="dataEntradaVenda" value="{{$car['dataEntradaVenda']}}" required>
          <div class="invalid-feedback">
            Security code required
          </div>
        </div>
        <div class="col-md-3">
          <label for="cc-cvv" class="form-label">Data saida</label>
          <input type="date" class="form-control" format="mm-dd-yyyy" name="dataSaidaVenda" value="{{$car['dataSaidaVenda']}}" required>
          <div class="invalid-feedback">
            Security code required
          </div>
        </div>
        <hr class="col-12">
         <hr class="my-4">
      <h2 class="mb-5 ">Dados Compra</h2>
      <div class="row gy-3 mt-1">
        <div class="col-md-8">
          <label for="cc-name" class="form-label">Nome do Negociador</label>
          <input type="text" class="form-control" id="cc-name" placeholder="" name="nomeVendedorCompra" value="{{$car['nomeVendedorCompra']}}" required>
          <small class="text-muted">   Nome completo do Negociador</small>
          <div class="invalid-feedback">
          </div>
        </div>
        <div class="col-md-3">
          <label for="cc-expiration" class="form-label">Valor da compra</label>
          <input type="text" class="form-control" id="cc-expiration" placeholder="" name="valorCompra"  value="{{$car['valorCompra']}}" required>
          <div class="invalid-feedback">
            Expiration date required
          </div>
        </div>
        <div class="col-md-3">
          <label for="cc-cvv" class="form-label">Data entrada</label>
          <input type="date" class="form-control" id="cc-cvv" placeholder=""  value="{{$car['dataEntradaCompra']}}"  name="dataEntradaCompra" required>
          <div class="invalid-feedback">
            Security code required
          </div>
        </div>
        <div class="col-md-3">
          <label for="cc-cvv" class="form-label">Data saida</label>
          <input type="date" class="form-control" format="mm-dd-yyyy" name="dataSaidaCompra" value="{{$car['dataSaidaCompra']}}" required>
          <div class="invalid-feedback">
            Security code required
          </div>
        </div>
        <button class="w-100 btn btn-primary btn-lg" style="background-color: #00030C;  type="submit">Registrar Veiculo</button>
      </div>
    </div>
  </form>
</div>
</div>
</main>
</section>  
@endsection