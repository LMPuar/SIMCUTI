<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use App\Models\Jenis;
use App\Http\Requests\StorecutiRequest;
use App\Http\Requests\UpdatecutiRequest;
use Illuminate\Support\Str;

class CutiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.cuti.index',[
            'cutis' => Cuti::where('user_id', auth()->user()->id)->get()
        ]);
        return view('dashboard.cuti.index',[
            'cutis' => Cuti::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.cuti.create',[
            'jeniss' => Jenis::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecutiRequest $request)
    {
        $validateData = $request->validate([
            'alasan' => 'required|max:255',
            'prihal_cuti' => 'required',
            'jenis_id' => 'required',
            'mulai' => 'required',
            'berakhir' => 'required'
        ]);

        $validateData['user_id'] = auth()->user()->id;
        $validateData['excerpt'] = Str::limit(strip_tags($request->alasan), 100);

        Cuti::create($validateData);

        return redirect('/dashboard/cuti')->with('berhasil', 'tunggu komfirmasi');
    }

    /**
     * Display the specified resource.
     */
    public function show(cuti $cuti)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cuti $cuti)
    {
        return view('dashboard.cuti.edit',[
            'cuti' => $cuti,
            'jeniss' => Jenis::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecutiRequest $request, cuti $cuti)
    {
        $validateData = $request->validate([
            'alasan' => 'required|max:255',
            'prihal_cuti' => 'required',
            'jenis_id' => 'required',
            'mulai' => 'required',
            'berakhir' => 'required'
        ]);

        $validateData['user_id'] = auth()->user()->id;
        

        Cuti::where('id', $cuti->id)->update($validateData);

        return redirect('/dashboard/cuti')->with('berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cuti $cuti)
    {
        Cuti::destroy($cuti->id);

        return redirect('/dashboard/cuti')->with('berhasil menghapus');
    }
}
