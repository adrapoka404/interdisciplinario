<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

use App\Http\Requests\CategoriasRequest;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return "Hola desde el controlador de categorias, metodo index";
        $categories = Category::orderBy('id', 'desc')->paginate(2);
        
        return view('admin.categorias.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriasRequest $request)
    {
        //
       
        // $request->validate([
        //     'name'          => 'required',
        //     'description'   => 'required',
        //      'status'        => 'required'
        // ]);

        $category = new Category();
        $category->create($request->all());

        return redirect()->route('categorias.index');
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
        $category = Category::find($id);
        
        return view('admin.categorias.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoriasRequest $request, $id)
    {
        //
        // $request->validate([
        //     'name'          => 'required',
        //     'description'   => 'required',
        //     'status'        => 'required'
        // ]);
                
        $category = Category::find($id);
        $category->name       = $request->name;
        $category->description = $request->description;
        $category->status     = $request->status;
        
        $category->save();

        return redirect()->route('categorias.index');
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
        $category = Category::find($id);
        
         if($category->status == 0 )
             $category->status     = 1;
         else
             $category->status     = 0;

         $category->save();

        return redirect()->route('categorias.index');
    }
}

