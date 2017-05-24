@extends('layout')


@section('content')

    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active">Sipariş Ayrıntıları</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sipariş Ayrıntıları</h1>
        </div>

    </div><!--/.row-->

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-group">
                        <div class="form-control">
                            <input class="form-control" value="{{ $siparis->urun() }}" disabled>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection