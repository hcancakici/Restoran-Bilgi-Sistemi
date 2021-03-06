@extends('layout')

@section('script')


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
                    <form action="{{action('UrunController@store')}}" method="POST">
                        {{ csrf_field() }}


                        <div class="form-group">

                            <label>Ürün Adı</label>
                            <input class="form-control" placeholder="Ürün Adı" name="ad" required>
                        </div>

                        <div class="form-group">

                            <label>Fiyat</label>
                            <input class="form-control" placeholder="Fiyat" name="fiyat" required>
                        </div>

                        <div class="form-group">

                            <label>Malzemeler</label>

                            <select size="10" multiple class="form-control" name="malzemeler[]">
                                @foreach($malzemeler as $malzeme)
                                    <option value="{{ $malzeme->id }}">{{ $malzeme->ad }}</option>
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