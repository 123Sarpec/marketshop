<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Models\Productos;


class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index(): View
    {
        // $titulo = "Pagina Principal - Administracion";
        $productos = Productos::all();
        return view('dashboard.index')->with('productos', $productos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('dashboard.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): string
    {
        return 'store';
    }

    /**
     * Display the specified resource.
     */
    public function show(Productos $producto): View
    {
        return view('dashboard.show')->with('producto', $producto);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): string
    {
        return 'edit';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): string
    {
        return 'update';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): string
    {
        return 'destroy';
    }
}
