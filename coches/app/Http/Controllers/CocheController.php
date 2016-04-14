<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Coche;
use App\Imagen;

use Image;
use Illuminate\Support\Facades\Input;

//incluimos el request cocheRequest
use App\Http\Requests\cocheRequest;

class CocheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coches = Coche::get();
        return View('listadoCoches', compact('coches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('nuevoCoche');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(cocheRequest $request)
    {
        //creamos un nuevo coche
        $coche = new Coche;

        $coche->marca = $request->marca;
        $coche->modelo = $request->modelo;
        $coche->color = $request->color;
        $coche->matricula = $request->matricula;
        $coche->numeroPuertas = $request->puertas;
        $coche->precio = $request->precio;

        $coche->save();

        $id_coche = $coche->id;

        //Si Hay Imagen1 La Subimos, Y La Añadimos A La BBDD
        if (Input::file('ifile1')) {

            //creamos una nueva imagen(filadetabla)
            $imagen = new Imagen;
            $imagen->coche_id = $id_coche;
            $imagen->save();
            $imagen->nombre = $imagen->id;
            $imagen->save();

            $image_name = $imagen->nombre;

            //Subida
            $image = Input::file('ifile1');

            $extension = $image->getClientOriginalExtension();
            $filename = $image_name . '.' . $extension;

            $imagen->nombre = $filename;
            $imagen->save();

            $img = Image::make($image->getRealPath());

            $path = public_path('fotografias/' . $filename);

            $img->save($path);

            //Liberamos Memoria
            $img->destroy();

        }

        //Si Hay Imagen1 La Subimos, Y La Añadimos A La BBDD
        if (Input::file('ifile2')) {

            //creamos una nueva imagen(filadetabla)
            $imagen = new Imagen;
            $imagen->coche_id = $id_coche;
            $imagen->save();
            $imagen->nombre = $imagen->id;
            $imagen->save();

            $image_name = $imagen->nombre;

            //Subida
            $image = Input::file('ifile2');

            $extension = $image->getClientOriginalExtension();
            $filename = $image_name . '.' . $extension;

            $imagen->nombre = $filename;
            $imagen->save();

            $img = Image::make($image->getRealPath());

            $path = public_path('fotografias/' . $filename);

            $img->save($path);

            //Liberamos Memoria
            $img->destroy();

        }

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coche = Coche::where('id', $id)->first();
        return View('editarCoche', compact('coche'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $coche = Coche::where('id', $id)->first();

        $coche->marca = $request->marca;
        $coche->modelo = $request->modelo;
        $coche->color = $request->color;
        $coche->matricula = $request->matricula;
        $coche->numeroPuertas = $request->puertas;
        $coche->precio = $request->precio;

        $coche->save();

        $id_coche = $coche->id;

        //Si Hay Imagen1 La Subimos, Y La Añadimos A La BBDD
        if (Input::file('ifile1')) {

            //seleccionamos la primera imagen(filadetabla)
            $imagen = Imagen::where('coche_id', $id)->first();

            $imagen->coche_id = $id_coche;
            $imagen->save();
            $imagen->nombre = $imagen->id;
            $imagen->save();

            $image_name = $imagen->nombre;

            //Subida
            $image = Input::file('ifile1');

            $extension = $image->getClientOriginalExtension();
            $filename = $image_name . '.' . $extension;

            $imagen->nombre = $filename;
            $imagen->save();

            $img = Image::make($image->getRealPath());

            $path = public_path('fotografias/' . $filename);

            $img->save($path);

            //Liberamos Memoria
            $img->destroy();

        }

        //Si Hay Imagen1 La Subimos, Y La Añadimos A La BBDD
        if (Input::file('ifile2')) {

            //seleccionamos la segunda imagen(filadetabla)
            $imagenes = Imagen::where('coche_id', $id)->get();
            $imagen = $imagenes->get(1);

            $imagen->coche_id = $id_coche;
            $imagen->save();
            $imagen->nombre = $imagen->id;
            $imagen->save();

            $image_name = $imagen->nombre;

            //Subida
            $image = Input::file('ifile2');

            $extension = $image->getClientOriginalExtension();
            $filename = $image_name . '.' . $extension;

            $imagen->nombre = $filename;
            $imagen->save();

            $img = Image::make($image->getRealPath());

            $path = public_path('fotografias/' . $filename);

            $img->save($path);

            //Liberamos Memoria
            $img->destroy();

        }

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
