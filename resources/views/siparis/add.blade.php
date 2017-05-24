@extends('layout')

@section('script')


    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
    <link rel="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js">

@endsection

@section('content')

    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active">Ürün  Ekle</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-10">
            <h1 class="page-header">Ürün Ekle</h1>
        </div>

    </div><!--/.row-->

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="{{action('SiparisController@store')}}" method="POST">
                        {{ csrf_field() }}

                        <div class="form-group">

                            <label>Masa</label>
                            <input class="form-control" value="{{ $masa_no }}" name="masa_no" readonly>
                        </div>

                        <div class="form-group">

                            <label>Personel</label>
                            <select class="form-control" name="personel">
                                @foreach($personeller as $personel)
                                <option value="{{ $personel->id }}">{{ $personel->ad }} {{ $personel->soyad }} </option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <label>Ürünler</label>
                            <select multiple class="form-control" name="urunler[]">
                                @foreach($urunler as $urun)
                                    <option value="{{ $urun->id }}">{{ $urun->ad }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="reset" class="btn btn-default btn-block">Temizle</button>
                                </div>

                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary btn-block">Kaydet</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>


@endsection