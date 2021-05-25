@extends('back.layouts.master')
@section('content')
@section('title','Blog Ekleme')
<div class="row">

    <div class="col-md-12">
        <h2>Blog Ekle</h2>
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
                <form method="POST" action="{{route('blogeditpost')}}">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Başlık</label>
                      <input name="title" value="{{$blogedit->title}}" type="text"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">URL</label>
                        <input name="slug" value="{{$blogedit->slug}}" type="text"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">İçerik</label>
                        <textarea name="editor1" class="form-control">
                            {!!$blogedit->description!!}
                        </textarea>
                        <script>
                          CKEDITOR.replace( 'editor1' );
                      </script>
                      </div>

                    <input type="hidden" value="{{$blogedit->id}}" name="id">
                    <button type="submit" class="btn btn-primary">KAYDET</button>
                    
                  </form>
            </div>
        </div>
    </div>
    
</div>



@endsection    

                
            

            