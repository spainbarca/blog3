<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCursoRequest;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cursos = Curso::orderBy('id','desc')->paginate(12);
        return view ('cursos.index', compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCursoRequest $request)
    {

        /* $curso = new Curso();
        $curso->name=$request->name;
        $curso->description=$request->description;
        $curso->category=$request->category;

        $curso->save(); */

        /* $curso = Curso::create([
            'name' => $request->name,
            'description' => $request->description,
            'category' => $request->category
        ]); */

        //return $request->all();
        $curso = Curso::create($request->all());

        return redirect()->route('cursos.show', $curso);
    }

    /**
     * Display the specified resource.
     */
    public function show(Curso $curso)
    {
        return view ('cursos.show', compact('curso'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact('curso'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Curso $curso)
    {
       /*  $curso->name=$request->name;
        $curso->description=$request->description;
        $curso->category=$request->category;

        $curso->save(); */

        $curso->update($request->all());
        return redirect()->route('cursos.show', $curso);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Curso $curso)
    {
        $curso->delete();
        return redirect()->route('cursos.index');
    }
}
