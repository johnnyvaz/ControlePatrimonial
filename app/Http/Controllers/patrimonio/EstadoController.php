<?php

namespace App\Http\Controllers\patrimonio;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $estado = Estado::where('descricao', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $estado = Estado::latest()->paginate($perPage);
        }

        return view('patrimonio.estado.index', compact('estado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('patrimonio.estado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Estado::create($requestData);

        return redirect('patrimonio/estado')->with('flash_message', 'Estado added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $estado = Estado::findOrFail($id);

        return view('patrimonio.estado.show', compact('estado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $estado = Estado::findOrFail($id);

        return view('patrimonio.estado.edit', compact('estado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $estado = Estado::findOrFail($id);
        $estado->update($requestData);

        return redirect('patrimonio/estado')->with('flash_message', 'Estado updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Estado::destroy($id);

        return redirect('patrimonio/estado')->with('flash_message', 'Estado deleted!');
    }
}
