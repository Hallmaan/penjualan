@extends('layout.app')

@section('title')
Add Data
@endsection

@section('content')
<form method="POST" action="{{url('pembeli/save')}}">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" value="{{$pembeli->nama}}" required></td>
		</tr>
		<tr>
			<TD>ALAMAT</TD>
			<td><textarea name="alamat" rows="8" cols="40" required>{{$pembeli->alamat}}</textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><button type="submit" name="simpan">Simpan</button></td>
		</tr>
	</table>	
</form>
@endsection