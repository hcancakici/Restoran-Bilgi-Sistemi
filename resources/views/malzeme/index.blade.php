@extends('layout')

@section('content')

<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Malzemeler</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-10">
				<h1 class="page-header">Malzeme Listesi</h1>
			</div>
			<div class="col-md-2 "><br><br>
				<a href="{{ action('MalzemeController@add') }}" type="button" class="btn btn-success col-centered" >Malzeme Ekle</a>


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
				        <th data-field="name">İşlem</th>
				    </tr>
				    </thead>
				    <tbody>

				    	@foreach ($malzemeler as $malzeme)
				    		<tr>
				    			<td>{{ $malzeme->ad }}</td>
								<td>{{ $malzeme->miktar }}</td>
				    			<td><button class="btn btn-danger">Sil</button></td>
				    		</tr>
				    	@endforeach
				    </tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection