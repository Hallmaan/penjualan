@extends('layout.app')

@section('title')
Add Data
@endsection

@section('content')
<form method="POST" action="{{url('transaksi/save')}}">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<table>
		<tr>
			<td>Select Pembeli</td>
			<td><select name="id_pembeli">
				<option value="#">-- Pilih Pembeli --</option>
				@foreach($pembeli as $key)
				<option value="{{$key->id}}">{{$key->nama}}</option>
				@endforeach
				</select>
			</td>
		</tr>
		<tr>
			<td>Select Barang</td>
			<td><select name="id_barang">
				<option value="#">-- Pilih Barang --</option>
				@foreach($barang as $key)
				<option value="{{$key->id}}">{{$key->nama}}</option>
				@endforeach
				</select>
			</td>
		</tr>
		<tr>
			<td>Jumlah</td>
			<td><input type="number" name="jumlah" required></td>
		</tr>
		<tr>
			<td></td>
			<td><button type="submit" name="simpan">Simpan</button></td>
		</tr>
	</table>	
</form>
@endsection