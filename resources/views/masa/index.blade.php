@extends('layout')

@section('content')

<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Masalar</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-10">
				<h1 class="page-header">Masalar</h1>
			</div>
			<div class="col-md-2 "><br><br>
				<a href="{{ action('MasaController@add') }}" type="button" class="btn btn-success col-centered" >Masa Ekle</a>


			</div>
		</div><!--/.row-->

		<div class="row">
		@for($i = 0; $i < $masalar->count(); $i++)

			<div class="col-lg-3">
				<center>Masa {{ $masalar[$i]->no }}</center>
				<center><a href="{{ action('SiparisController@add', $masalar[$i]->id) }}" ><svg class="glyph stroked bacon burger"><use xlink:href="#stroked-bacon-burger"/></svg></a></center>

			</div>
			@if($i % 4 == 0 && $i != 0)
				</div>
				<div class="row">
					@endif
			@endfor
				</div>



@endsection