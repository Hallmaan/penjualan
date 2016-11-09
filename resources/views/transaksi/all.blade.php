@extends('layout.app')

@section('title')
All Data
@endsection

@section('content')
	<table>
		<thead>
			<tr>
				<th>Nama Pembeli</th>
				<th>Nama Barang</th>
				<th>Jumlah</th>
				<th>Total</th>
			</tr>
		</thead>
		<a href="{{url('transaksi/add')}}">Add baru</a>
		<tbody>
			@foreach($transaksi as $key)
			<tr>
				<td>{{$key->pembeli->nama}}</td>
				<td>{{$key->barang->nama}}</td>
				<td>{{$key->jumlah}}</td>
				<td>{{$key->total}}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection