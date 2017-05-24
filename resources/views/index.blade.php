@extends('layout')

@section('content')
<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Kontrol Paneli</li>
			</ol>
		</div><!--/.row-->

<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Kontrol Paneli</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{{ $dataset['urun'] }}</div>
							<div class="text-muted">Ürün</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-orange panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked empty-message"><use xlink:href="#stroked-empty-message"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{{ $dataset['kazanc'] }}$</div>
							<div class="text-muted">Toplam Kazanç</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{{ $dataset['personel'] }}</div>
							<div class="text-muted">Personel</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-red panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{{ $dataset['siparis'] }}</div>
							<div class="text-muted">Toplam Sipariş</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->

<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">Azalan Malzemeler</h3>
	</div>
</div><!--/.row-->

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<table data-toggle="table" class="table">
					<thead>
					<tr>
						<th data-align="right">Malzeme Adı</th>
						<th data-align="right">Miktar</th>
					</tr>
					</thead>
					<tbody>

					@foreach ($dataset['malzemeler'] as $malzeme)
						<tr>
							<td>{{ $malzeme->ad }}</td>
							<td>{{ $malzeme->miktar }}</td>

						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection