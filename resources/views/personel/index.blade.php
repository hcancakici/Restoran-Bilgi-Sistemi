@extends('layout')

@section('content')

<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Kontrol Paneli</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-10">
				<h1 class="page-header">Personel Listesi</h1>
			</div>
			<div class="col-lg-2 "><br><br>
				<a href="{{ action('MalzemeController@add') }}" type="button" class="btn btn-success col-centered" >Personel Ekle</a>


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
				</table>
			</div>
		</div>
	</div>
</div>

@endsection