<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Http\Requests\StorePasienRequest;
use App\Http\Requests\UpdatePasienRequest;
use Illuminate\Http\Request;
class PasienController extends Controller
{
    public function index()
    {
        $data = Pasien::all();
        $no = 1;
        return view('index',['datas' => $data,'no'=>$no]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {   
        $inputs = $request->all();
        Pasien::create($inputs);
        return redirect()->route('index');
    }

    public function edit(Pasien $data)
    {

        return view('update',['data'=>$data]);
    }

    public function update(Request $request, $data)
    {
        $validator=$this->validate($request,[
            'nama' => 'required|min:5',
            'alamat' => 'required|min:10',
            'tanggal_lahir' => 'required|date',
            'salary' => 'required|numeric'
        ]);
        $inputs = $request->all();
        $pasien = Pasien::findOrfail($data);
        $pasien->update($inputs);

        return redirect()->route('index');
    }

    public function delete($data)
    {
        $pasien = Pasien::findOrfail($data);
        $pasien->delete();

        return redirect()->route('index');
    }
}
