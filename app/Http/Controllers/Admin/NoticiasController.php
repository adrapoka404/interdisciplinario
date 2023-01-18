<?php

namespace App\Http\Controllers\Admin;

use App\Models\Notice;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\NoticiasRequest;

class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = notice::orderBy('id', 'desc')->paginate(2);
        return view('admin.noticias.index', compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // aqui creas tu noticia
        return view('admin.noticias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NoticiasRequest $request)
    {
        // $request->validate([
        //     'name'          => 'required',
        //     'editor'          => 'required',
        //     'case'           => 'required',
        //     'created_at'           => 'required',
        //     'status'     => 'required',
            
        // ]);

        $notice = new Notice();
        $notice->create($request->all());

        return redirect()->route('noticias.index');
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
        $notice = Notice::find($id);
        
        return view('admin.noticias.edit', compact('notice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NoticiasRequest $request, $id)
    {
        //
        // $request->validate([
        //     'name'          => 'required',
        //     'editor'        => 'required',
        //     'case'          => 'required',
        //     'created_at'          => 'required',
        //     'status'          => 'required',
            
        // ]);

        $notice = Notice::find($id);
        $notice->name       = $request->name;
        $notice->editor       = $request->editor;
        $notice->case = $request->case;
        $notice->created_at = $request->created_at;
        $notice->status = $request->status;
        

        $notice->save();

        return redirect()->route('noticias.index');


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
        $notice = Notice::find($id);
        
        if($notice->status == 0 )
            $notice->status     = 1;
        else
            $notice->status     = 0;

        $notice->save();

        return redirect()->route('noticias.index');

        
    }
}
