@extends('back.layouts.master')
@section('content')
@section('title','Beceri Düzenleme')
<div class="row">

    <div class="col-md-12">
        <h2>Beceri Düzenle</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach
            </div>
        @endif
    </div>

    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{route('skilleditpost')}}">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Başlık</label>
                      <input name="title" value="{{$skupdate->title}}" type="text"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Yüzde</label>
                        <input name="percent" value="{{$skupdate->percent}}" type="text"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <input type="hidden" name="id" value="{{$skupdate->id}}">
                    
                    <button type="submit" class="btn btn-primary">KAYDET</button>
                    
                  </form>
            </div>
        </div>
    </div>
    
</div>



@endsection    

                
            

            