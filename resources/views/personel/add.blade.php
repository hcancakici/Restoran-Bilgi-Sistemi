@extends('layout')

@section('content')


    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active">Personel  Ekle</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-10">
            <h1 class="page-header">Persone Ekle</h1>
        </div>

    </div><!--/.row-->

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="{{ action('PersonelController@store')  }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">

                            <label>İsim</label>
                            <input class="form-control" placeholder="İsim" name="isim" required>
                        </div>

                        <div class="form-group">

                            <label>Soyisim</label>
                            <input class="form-control" placeholder="Soyisim" name="soyisim" required>
                        </div>

                        <div class="form-group">

                            <label>TC Kimlik Numarası</label>
                            <input class="form-control" placeholder="TC Kimlik No" name="tc" pattern=".{11,11}" required title="Lütfen 11 karakterli kimlik numaranızı girin!">
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