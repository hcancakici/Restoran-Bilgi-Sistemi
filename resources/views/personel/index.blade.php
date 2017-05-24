@extends('layout')

@section('content')

<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Personeller</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-3">
				<h1 class="page-header">Personel Listesi</h1>
			</div>
			<div class="col-md-6"><br><br>
				<form class="form-group" action="{{ action('PersonelController@search') }}" method="GET">
					<input class="form-control" name="ad" placeholder="Personel Ara">
				</form>
			</div>
			<div class="col-md-3 "><br><br>
				<a href="{{ action('PersonelController@add') }}" type="button" class="btn btn-success col-centered" >Personel Ekle</a>
			</div>
		</div><!--/.row-->
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<table data-toggle="table" class="table">
				    <thead>
				    <tr>
				        <th data-field="id" data-align="right">Adı</th>
				        <th data-field="name">Soyadı</th>
				        <th data-field="price">Kimlik Numarası</th>
				        <th data-field="price">İşlemler</th>
				    </tr>
				    </thead>
					<tbody>
					@foreach( $personeller as $personel )
						<tr>
							<td>{{ $personel->ad }}</td>
							<td>{{ $personel->soyad }}</td>
							<td>{{ $personel->tc }}</td>
							<td>
								<div class="col-md-2">
									<form class="form-group" method="GET" action="{{ action('PersonelController@edit', $personel->id) }}">
										{{ csrf_field() }}
										<button type="submit" class="btn btn-default">Düzenle</button>
									</form>
								</div>
								<div class="col-md-2">
									<form class="form-group" method="POST" action="{{ action('PersonelController@delete', $personel->id) }}">
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