<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
//panggil model barang
use App\barang;
//panggil class input
use Illuminate\Support\Facades\Input;

class BarangController extends Controller
{
    public function index()
    {
    	$data['barang'] = \App\barang::paginate(10);
    	return view('barang.all')->with($data);
    }
    public function add()
    {
    	return view('barang.add');
    }
    public function save()
    {
    	$a = new \App\barang;
    	$a->nama = input::get('nama');
    	$a->jenis = input::get('jenis');
    	$a->jumlah = input::get('jumlah');
    	$a->harga = input::get('harga');
    	$a->save();

    	return redirect(url('barang/all'));
    }
    public function edit($id)
    {
    	$data['barang'] = barang::find($id);
    	return view('barang.edit')->with($data);
    }

    public function update()
    {
    	$a = barang::find(input::get('id'));
    	$a->nama = input::get('nama');
    	$a->jenis = input::get('jenis');
    	$a->jumlah = input::get('jumlah');
    	$a->harga = input::get('harga');
    	$a->save();

    	return redirect(url('barang/all'));
    }

    public function delete($id)
    {
    	$a = barang::find($id);
    	$a->delete();

    	return redirect(url('barang/all'));
    }
}
