<?php

namespace App\Http\Controllers\Teste;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Teste;
use Illuminate\Http\Request;

class TesteController extends Controller
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
            $teste = Teste::where('nome', 'LIKE', "%$keyword%")
                ->orWhere('campo1', 'LIKE', "%$keyword%")
                ->orWhere('campo2', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $teste = Teste::latest()->paginate($perPage);
        }

        return view('teste.teste.index', compact('teste'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('teste.teste.create');
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
        
        Teste::create($requestData);

        return redirect('admin/teste')->with('flash_message', 'Teste added!');
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
        $teste = Teste::findOrFail($id);

        return view('teste.teste.show', compact('teste'));
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
        $teste = Teste::findOrFail($id);

        return view('teste.teste.edit', compact('teste'));
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
        
        $teste = Teste::findOrFail($id);
        $teste->update($requestData);

        return redirect('admin/teste')->with('flash_message', 'Teste updated!');
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
        Teste::destroy($id);

        return redirect('admin/teste')->with('flash_message', 'Teste deleted!');
    }
}
