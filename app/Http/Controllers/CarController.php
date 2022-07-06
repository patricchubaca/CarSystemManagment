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

                ' <button class=" button is-info is-light is-medium " 
               onclick="createCar(' . $value['id'] . ')">
               <i class="fa-solid fa-car-on"></i> 
              </button> ';

            $data[] = $registro;
        }

        return ['data' => $data];
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
        $newCar = new Car();

        $newCar->placa = $request->placa;
        $newCar->marca = $request->marca;
        $newCar->modelo = $request->modelo;
        $newCar->cor = $request->cor;
        $newCar->ano = $request->ano;

        $requestImg = $request["imagem01"];
        $requestImg01 = $requestImg->store('cars');
        $newCar->imagem01 = $requestImg01;

        $requestImg = $request["imagem02"];
        $requestImg02 = $requestImg->store('cars');
        $newCar->imagem02 = $requestImg02;

        $requestImg = $request["imagem03"];
        $requestImg03 = $requestImg->store('cars');
        $newCar->imagem03 = $requestImg03;

        $requestImg = $request["imagem04"];
        $requestImg04 = $requestImg->store('cars');
        $newCar->imagem04 = $requestImg04;

        $requestImg = $request["imagem05"];
        $requestImg05 = $requestImg->store('cars');
        $newCar->imagem05 = $requestImg05;

        $newCar->divida = $request->divida;
        $newCar->cor = $request->cor;
        $newCar->financiamento = $request->financiamento;
        $newCar->quitacao = $request->quitacao;
        $newCar->multa = $request->multa;
        $newCar->ipva = $request->ipva;
        $newCar->licensiamento = $request->licensiamento;
        $newCar->divida = $request->divida;
        $newCar->financiamento = $request->financiamento;
        $newCar->outros = $request->outros;
        $newCar->nomeVendedorVenda = $request->nomeVendedorVenda;
        $newCar->dataEntradaVenda = $request->dataEntradaVenda;
        $newCar->dataSaidaVenda = $request->dataSaidaVenda;
        $newCar->valorVenda = $request->valorVenda;
        $newCar->nomeVendedorCompra = $request->nomeVendedorCompra;
        $newCar->licensiamento = $request->licensiamento;
        $newCar->divida = $request->divida;
        $newCar->financiamento = $request->financiamento;
        $newCar->outros = $request->outros;
        $newCar->nomeVendedorVenda = $request->nomeVendedorVenda;
        $newCar->valorCompra = $request->valorCompra;
        $newCar->dataEntradaCompra = $request->dataEntradaCompra;
        $newCar->dataSaidaCompra = $request->dataSaidaCompra;

        $newCar->save();

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



        return view('cars.editCar', compact('car'));
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
    
          if($request["imagem01"]){
            $requestImg = $request["imagem01"];
            $requestImg01 = $requestImg->store('cars');
            $updateCar->imagem01 = $requestImg01;
          }  
          if($request["imagem02"]){
            $requestImg = $request["imagem02"];
            $requestImg02 = $requestImg->store('cars');
            $updateCar->imagem02 = $requestImg02;
          }  
          if($request["imagem03"]){
            $requestImg = $request["imagem03"];
            $requestImg03 = $requestImg->store('cars');
            $updateCar->imagem03 = $requestImg03;
          }  
          if($request["imagem04"]){
            $requestImg = $request["imagem04"];
            $requestImg04 = $requestImg->store('cars');
            $updateCar->imagem04 = $requestImg04;
          }
          if($request["imagem05"]){
            $requestImg = $request["imagem04"];
            $requestImg05 = $requestImg->store('cars');
            $updateCar->imagem05 = $requestImg05;
          }   

            $updateCar->cor = $request->cor;
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
        $destroyCar = Car::findOrFail($id)->delete();

        return $destroyCar;
    }
}
