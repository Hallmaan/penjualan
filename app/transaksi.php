<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    public function barang()
    {
    	return $this->belongsTo('App\barang','id_barang');
    }
    public function pembeli()
    {
    	return $this->belongsTo('App\pembeli','id_pembeli');
    }
}
