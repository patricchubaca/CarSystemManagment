@extends('dashboard')

@section('content')
    <section class="section">

        <div class="container ">
            <main>
        </div>
        <div class="col-md-7 col-lg-12 mt-1 border">
            <form class="needs-validation  px-5 py-1 mt-1" method="POST" action="" enctype="multipart/form-data">
                @csrf
                <div class="alert border">
                    <h2 class="mt-2">Gerenciamento de Usuários</h2>
                </div>
                <div class="row g-3 mt-3">
                    <div class="col-sm-6">
                        <label for="firstName" class="form-label">Usuário</label>
                        <input type="text" name="marca" class="form-control" placeholder="" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="lastName" class="form-label">Perfil</label>
                        <input type="text" class="form-control" placeholder="" name="modelo" required>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                    <hr class="my-4">

                    <button class="w-100 btn btn-primary btn-lg" style="background-color: #00030C;  type="submit">Registrar
                        Veiculo</button>
                </div>
        </div>
        </form>
        </div>
        </div>
        </main>
    </section>
@endsection
