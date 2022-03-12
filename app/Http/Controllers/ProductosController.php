<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProductoRequest;
use App\Producto;
use Illuminate\Http\Request;
use function view;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {

        $productos = Producto::all();


        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $producto = new Producto;

//        $this->authorize('create', $producto);

        return view('productos.create', compact('producto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $this->authorize('create', new Producto());

        $data = $request->validate([
            'producto' => 'required|max:255',
            'tipo' => 'required|max:255',
        ]);

//        $data['password'] = str_random(8);

        $producto = Producto::create($data);


        return redirect()->route('productos.index')->withFlash('El producto ha sido creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
//        $this->authorize('view', $user);
        return view('productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {

        return view('productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductoRequest $request, Producto $producto)
    {
        $producto -> update($request->validated());

        return redirect()->route('productos.edit', $producto)->withFlash('Producto Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();

        return redirect()->route('productos.index')->withFlash('Producto eliminado');
    }
}
