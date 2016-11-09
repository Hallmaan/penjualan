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
				<th colspan=2>Action</th>
			</tr>
		</thead>
		<a href="{{url('pembeli/add')}}">Add baru</a>
		<tbody>
			@foreach($pembeli as $key)
			<tr>
				<td>{{$key->nama}}</td>
				<td>{{$key->alamat}}</td>
				<td><a href="{{url('pembeli/edit/'.$key->id)}}">Edit</a></td>
				<td><a href="{{url('pembeli/delete/'.$key->id)}}"
				onclick="return confirm('hapus Data{{$key->id}}?')">Hapus</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection