<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\Models\Car;

class CarController extends Controller
{

    public function index()

    {
        $cars = Car::all();

        foreach ($cars as $key => $value) {

            $registro = [];

            $registro['id'] = $value['id'];
            $registro['placa'] = $value['placa'];
            $registro['ano'] = $value['ano'];
            $registro['marca'] = $value['marca'];
            $registro['modelo'] = $value['modelo'];

            $registro['button'] = 

            '<button class="button is-info is-light" 
            id="modal" data-bs-toggle="modal" onclick="createCar('.$value['id'].')">
            <i class="fa-solid fa-folder-closed">
            </i></button>
            <button class="button is-danger is-light" onclick="alert(haha)">
            <i class="fa-solid fa-trash-can"></i></button>';
            
            $data[] = $registro;

        }

        return ['data'=>$data];   
    }

    public function index01()

    {
        $cars = Car::all();

        foreach ($cars as $key => $value) {

            $registro = [];

            $registro['id'] = $value['id'];
            $registro['placa'] = $value['placa'];
            $registro['ano'] = $value['ano'];
            $registro['marca'] = $value['marca'];
            $registro['modelo'] = $value['modelo'];


            $registro['button'] = 

            '<button class="button is-info is-light" 
            id="modal" data-bs-toggle="modal" onclick="createCar('.$value['id'].')">
            <i class="fa-solid fa-folder-closed">
            </i></button>
            <button class="button is-danger is-light" onclick="alert(haha)">
            <i class="fa-solid fa-trash-can"></i></button>';
            
            $data[] = $registro;

        }

        return ['data'=>$data];   
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('cars.index');
 }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $storeCar01 = $request->file('imagem01');
        $storeCar01->store('cars');

        $storeCar02 = $request->file('imagem02');
        $storeCar02->store('cars');

        $storeCar03 = $request->file('imagem03');
        $storeCar03->store('cars');

        $storeCar04 = $request->file('imagem04');
        $storeCar04->store('cars');

        $storeCar05 = $request->file('imagem05');
        $storeCar05->store('cars');

        $storeCar = Car::create($request->all());

        return view('cars.allCars');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $modelCar = new Car();
        $car = $modelCar->find($id);

        return view ('cars.editCar',compact('car'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        
        $updateCar = Car::find($request->id);

        $updateCar->placa = $request->placa;
        $updateCar->marca = $request->marca;
        $updateCar->modelo = $request->modelo;
        $updateCar->cor = $request->cor;
        $updateCar->imagem01 = $request->imagem01;
        $updateCar->imagem02 = $request->imagem02;
        $updateCar->imagem03 = $request->imagem03;
        $updateCar->imagem04 = $request->imagem04;
        $updateCar->imagem05 = $request->imagem05;
        $updateCar->divida = $request->divida;
        $updateCar->cor = $request->cor;
        $updateCar->imagem01 = $request->imagem01;
        $updateCar->imagem02 = $request->imagem02;
        $updateCar->imagem03 = $request->imagem03;
        $updateCar->imagem04 = $request->imagem04;
        $updateCar->imagem05 = $request->imagem05;
        $updateCar->divida = $request->divida;
        $updateCar->financiamento = $request->financiamento;
        $updateCar->quitacao = $request->quitacao;
        $updateCar->multa = $request->multa;
        $updateCar->ipva = $request->ipva;
        $updateCar->licensiamento = $request->licensiamento;
        $updateCar->divida = $request->divida;
        $updateCar->financiamento = $request->financiamento;
        $updateCar->outros = $request->outros;
        $updateCar->nomeVendedorVenda = $request->nomeVendedorVenda;
        $updateCar->dataEntradaVenda = $request->dataEntradaVenda;
        $updateCar->dataSaidaVenda = $request->dataSaidaVenda;
        $updateCar->valorVenda = $request->valorVenda;
        $updateCar->nomeVendedorCompra = $request->nomeVendedorCompra;
        $updateCar->licensiamento = $request->licensiamento;
        $updateCar->divida = $request->divida;
        $updateCar->financiamento = $request->financiamento;
        $updateCar->outros = $request->outros;
        $updateCar->nomeVendedorVenda = $request->nomeVendedorVenda;
        $updateCar->valorCompra = $request->valorCompra;
        $updateCar->dataEntradaCompra = $request->dataEntradaCompra;
        $updateCar->dataEntradaCompra = $request->dataSaidaCompra;

        $updateCar->save();

        return view('cars.allCars');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
