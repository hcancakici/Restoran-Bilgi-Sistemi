@extends('layout')

@section('content')


<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Malzeme  Ekle</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-10">
				<h1 class="page-header">Malzeme Ekle</h1>
			</div>

		</div><!--/.row-->

		<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-body">
			<form>
				<div class="form-group">
				
					<label>Malzeme Adı</label>
					<input class="form-control" placeholder="Malzeme Adı">
					</div>

					<div class="form-group">
				
						<label>Miktar</label>
						<input class="form-control" placeholder="Miktar">
					</div>

					<div class="row">
					<div class="col-md-6">
						<button type="reset" class="btn btn-default btn-block">Temizle</button>
					</div>

					<div class="col-md-6">
						<button type="submit" class="btn btn-primary btn-block">Kaydet</button>
					</div>

				</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection