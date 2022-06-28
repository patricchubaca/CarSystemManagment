<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\Models\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function carRender(){

        return view('cars.index');
    }

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

            $id = $value['id'];

            $registro['button'] = 

            '<button class="button is-info is-light" 
            id="modal" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
