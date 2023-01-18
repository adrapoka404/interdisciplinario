<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Editor;
use Illuminate\Http\Request;

use App\Http\Requests\EditoresRequest;

class EditoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $editors = Editor::orderBy('id', 'desc')->paginate(2);
        
        return view('admin.editores.index', compact('editors'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.editores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EditoresRequest $request)
    {
        // $request->validate([
        //     'name'          => 'required',
        //     'mail'          => 'required',
        //     'speciality'    => 'required',
        //     'semblance'     => 'required',
        //     'status'        => 'required'
        // ]);

        $editor = new Editor();
        $editor->create($request->all());

        return redirect()->route('editores.index');
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
        $editor = Editor::find($id);
        
        return view('admin.editores.edit', compact('editor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditoresRequest $request, $id)
    {
        // $request->validate([
        //     'name'          => 'required',
        //     'mail'          => 'required',
        //     'speciality'    => 'required',
        //     'semblance'     => 'required',
        //     'status'        => 'required'
        // ]);

        $editor = Editor::find($id);
        $editor->name       = $request->name;
        $editor->mail       = $request->mail;
        $editor->speciality = $request->speciality;
        $editor->semblance  = $request->semblance;
        $editor->status     = $request->status;

        $editor->save();

        return redirect()->route('editores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $editor = Editor::find($id);
        
        if($editor->status == 0 )
            $editor->status     = 1;
        else
            $editor->status     = 0;

        $editor->save();

        return redirect()->route('editores.index');
    }
}
