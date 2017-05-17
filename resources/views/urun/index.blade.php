@extends('layout')

@section('content')

<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Ürün</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-10">
				<h1 class="page-header">Ürün Listesi</h1>
			</div>
			<div class="col-lg-2 "><br><br>
				<a href="{{ action('MalzemeController@add') }}" type="button" class="btn btn-success col-centered" >Ürün Ekle</a>


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
				        <th data-field="price">işlemler</th>
				    </tr>
				    </thead>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection