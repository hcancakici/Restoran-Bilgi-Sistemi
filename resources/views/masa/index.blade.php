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
				<a href="{{ action('MalzemeController@add') }}" type="button" class="btn btn-success col-centered" >Masa Ekle</a>


			</div>
		</div><!--/.row-->

		<div class="row">

			<div class="col-lg-3">
				<center><svg class="glyph stroked bacon burger"><use xlink:href="#stroked-bacon-burger"/></svg></center>
				<br><center>Masa1</center>
			</div>
			<div class="col-lg-3">
				<center><svg class="glyph stroked bacon burger"><use xlink:href="#stroked-bacon-burger"/></svg></center>
				<br><center>Masa2</center>
			</div>
			<div class="col-lg-3">
				<center><svg class="glyph stroked bacon burger"><use xlink:href="#stroked-bacon-burger"/></svg></center>
				<br><center>Masa3</center>
			</div>
			<div class="col-lg-3">
				<center><svg class="glyph stroked bacon burger"><use xlink:href="#stroked-bacon-burger"/></svg></center>
				<br><center>Masa4</center>
			</div>
		</div>
		<div class="row">

			<div class="col-lg-3">
				<center><svg class	="glyph stroked bacon burger"><use xlink:href="#stroked-bacon-burger"/></svg></center>
				<br><center>Masa5</center>
			</div>
			<div class="col-lg-3">
				<center><svg class="glyph stroked bacon burger"><use xlink:href="#stroked-bacon-burger"/></svg></center>
				<br><center>Masa6</center>
			</div>
			<div class="col-lg-3">
				<center><svg class="glyph stroked bacon burger"><use xlink:href="#stroked-bacon-burger"/></svg></center>
				<br><center>Masa7</center>
			</div>
			<div class="col-lg-3">
				<center><svg class="glyph stroked bacon burger"><use xlink:href="#stroked-bacon-burger"/></svg></center>
				<br><center>Masa8</center>
			</div>
		</div>



@endsection