<?php

namespace App\Http\Controllers\patrimonio;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Patrimonio;
use Illuminate\Http\Request;

class PatrimonioController extends Controller
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
            $patrimonio = Patrimonio::where('descricao', 'LIKE', "%$keyword%")
                ->orWhere('estado', 'LIKE', "%$keyword%")
                ->orWhere('valor', 'LIKE', "%$keyword%")
                ->orWhere('quantidade', 'LIKE', "%$keyword%")
                ->orWhere('total', 'LIKE', "%$keyword%")
                ->orWhere('dataAquisicao', 'LIKE', "%$keyword%")
                ->orWhere('observacao', 'LIKE', "%$keyword%")
                ->orWhere('foto', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $patrimonio = Patrimonio::latest()->paginate($perPage);
        }

        return view('patrimonio.patrimonio.index', compact('patrimonio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('patrimonio.patrimonio.create');
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
        

        if ($request->hasFile('foto')) {
            foreach($request['foto'] as $file){
                $uploadPath = public_path('/uploads/foto');

                $extension = $file->getClientOriginalExtension();
                $fileName = rand(11111, 99999) . '.' . $extension;

                $file->move($uploadPath, $fileName);
                $requestData['foto'] = $fileName;
            }
        }

        Patrimonio::create($requestData);

        return redirect('patrimonio/patrimonio')->with('flash_message', 'Patrimonio added!');
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
        $patrimonio = Patrimonio::findOrFail($id);

        return view('patrimonio.patrimonio.show', compact('patrimonio'));
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
        $patrimonio = Patrimonio::findOrFail($id);

        return view('patrimonio.patrimonio.edit', compact('patrimonio'));
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
        

        if ($request->hasFile('foto')) {
            foreach($request['foto'] as $file){
                $uploadPath = public_path('/uploads/foto');

                $extension = $file->getClientOriginalExtension();
                $fileName = rand(11111, 99999) . '.' . $extension;

                $file->move($uploadPath, $fileName);
                $requestData['foto'] = $fileName;
            }
        }

        $patrimonio = Patrimonio::findOrFail($id);
        $patrimonio->update($requestData);

        return redirect('patrimonio/patrimonio')->with('flash_message', 'Patrimonio updated!');
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
        Patrimonio::destroy($id);

        return redirect('patrimonio/patrimonio')->with('flash_message', 'Patrimonio deleted!');
    }
}
