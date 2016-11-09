@extends('layout.app')

@section('title')
All Data
@endsection

@section('content')
	<table>
		<thead>
			<tr>
				<th>Nama</th>
				<th>Jenis</th>
				<th>Jumlah</th>
				<th>Harga</th>
				<th>Action</th>
				<th colspan=2>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($barang as $key)
			<tr>
				<td>{{$key->nama}}</td>
				<td>{{$key->jenis}}</td>
				<td>{{$key->jumlah}}</td>
				<td>{{$key->harga}}</td>
				<td><a href="{{url('barang/edit/'.$key->id)}}">Edit</a></td>
				<td><a href="{{url('barang/delete/'.$key->id)}}"
				onclick="return confirm('hapus Data{{$key->id}}?')">Hapus</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection