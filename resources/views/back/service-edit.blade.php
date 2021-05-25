@extends('back.layouts.master')
@section('content')
@section('title','Hizmet Düzenleme')
<div class="row">

    <div class="col-md-12">
        <h2>Hizmet Düzenle</h2>
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
                <form method="POST" action="{{route('serviceeditpost')}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">İkon</label>
                        <input name="icon" value="{{$supdate->icon}}" type="text"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Başlık</label>
                      <input name="title" value="{{$supdate->title}}" type="text"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">İçerik</label>
                      <textarea name="editor1" class="form-control">
                        {!!$supdate->description!!}
                      </textarea>
                      <script>
                        CKEDITOR.replace( 'editor1' );
                    </script>
                    </div>
                    <input type="hidden" name="id" value="{{$supdate->id}}">
                    
                    <button type="submit" class="btn btn-primary">KAYDET</button>
                    
                  </form>
            </div>
        </div>
    </div>
    
</div>



@endsection    

                
            

            