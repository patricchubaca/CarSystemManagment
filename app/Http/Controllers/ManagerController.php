<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\Models\User;

class ManagerController extends Controller
{
	public function index()

	{
		$users = User::all();

		foreach ($users as $key => $value) {

			$registro = [];

			$registro['id'] = $value['id'];
			$registro['name'] = $value['name'];
			$registro['email'] = $value['email'];
			$registro['password'] = $value['password'];
			$registro['prodile'] = $value['modelo'];

			$registro['button'] = 

			' <button class=" button is-info is-light is-medium "
			 onclick=" createCar('.$value['id'].') ">
			 <i class="fa-solid fa-car-on"> </i> </button> ';

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

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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