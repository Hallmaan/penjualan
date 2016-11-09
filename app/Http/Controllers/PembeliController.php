<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\pembeli;
//panggil class input
use Illuminate\Support\Facades\Input;

class PembeliController extends Controller
{
    public function index()
    {
    	$data['pembeli'] = \App\pembeli::paginate(10);
    	return view('pembeli.all')->with($data);
    }
    public function add()
    {
    	return view('pembeli.add');
    }
    public function save()
    {
    	$a = new \App\pembeli;
    	$a->nama = input::get('nama');
    	$a->alamat = input::get('alamat');
    	$a->save();

    	return redirect(url('pembeli/all'));
    }
    public function edit($id)
    {
    	$data['pembeli'] = pembeli::find($id);
    	return view('pembeli.edit')->with($data);
    }

    public function update()
    {
    	$a = pembeli::find(input::get('id'));
    	$a->nama = input::get('nama');
    	$a->alamat = input::get('alamat');
    	$a->save();

    	return redirect(url('pembeli/all'));
    }

    public function delete($id)
    {
    	$a = pembeli::find($id);
    	$a->delete();

    	return redirect(url('pembeli/all'));
    }
}
