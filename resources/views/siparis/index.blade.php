@extends('layout')

@section('content')

<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Siparişler</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sipariş Listesi</h1>
			</div>

		</div><!--/.row-->

		<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<table data-toggle="table" class="table">
				    <thead>
				    <tr>
				        <th data-field="id" data-align="right">Sipariş No</th>
				        <th data-field="name">Masa No</th>
				        <th data-field="name">Personel</th>
						<th data-field="price">Tutar</th>
				        <th data-field="islemler">İşlemler</th>
				    </tr>
				    </thead>
					<tbody>
					@foreach( $siparisler as $siparis )
						<tr>
							<td>{{ $siparis->id }}</td>
							<td>{{ $siparis->masa_id}}</td>
							<td>{{ $siparis->personel()->get()[0]['ad'] }} {{ $siparis->personel()->get()[0]['soyad'] }}</td>
							<td>{{ $siparis->tutar}}</td>
							<td>
								<div class="col-md-2">
									<form class="form-group" method="POST" action="{{ action('SiparisController@delete', $siparis->id) }}">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}

										<button type="submit" class="btn btn-danger">Sil</button>
									</form>
								</div>

						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection