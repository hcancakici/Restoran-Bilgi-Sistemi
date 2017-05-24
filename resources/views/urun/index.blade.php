@extends('layout')

@section('content')

<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Ürün</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-3">
				<h1 class="page-header">Ürün Listesi</h1>
			</div>
			<div class="col-md-6"><br><br>
				<form class="form-group" action="{{ action('UrunController@search') }}" method="GET">
					<input class="form-control" name="ad" placeholder="Ürün Ara">
				</form>
			</div>
			<div class="col-md-3"><br><br>
				<a href="{{ action('UrunController@add') }}" type="button" class="btn btn-success col-centered" >Ürün Ekle</a>
			</div>
		</div><!--/.row-->

		<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<table data-toggle="table" class="table">
				    <thead>
				    <tr>
				        <th data-field="id" data-align="right">Ürün Adı</th>
				        <th data-field="name">Fiyatı</th>
				        <th data-field="price">İşlemler</th>
				    </tr>
				    </thead>
					<tbody>

					@foreach ($urunler as $urun)
						<tr>
							<td>{{ $urun->ad }}</td>
							<td>{{ $urun->fiyat }}$</td>
							<td data-align="right">
								<div class="col-md-2">
									<form class="form-group" method="POST" action="{{ action('UrunController@edit', $urun->id) }}">
										{{ csrf_field() }}

										<button type="submit" class="btn btn-default">Düzenle</button>
									</form>
								</div>
								<div class="col-md-2">
									<form class="form-group" method="POST" action="{{ action('UrunController@delete', $urun->id) }}">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}

										<button type="submit" class="btn btn-danger">Sil</button>
									</form>
								</div>
							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection