@extends('back.layouts.master')
@section('content')
@section('title','Hakkımızda')

<div class="row">
    <div class="col-md-12">
        <h2>Hakkımızda</h2>
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
                <form method="POST" action="{{route('aboutupdate')}}">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Başlık</label>
                      <input name="title" type="text" value="{{$list->title}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">İçerik</label>
                      <textarea name="editor1" class="form-control">
                        {!!$list->description!!}
                      </textarea>
                      <script>
                        CKEDITOR.replace( 'editor1' );
                    </script>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">KAYDET</button>
                    
                  </form>

                  
            </div>
            
        </div>
    </div>
    
    
</div>


@endsection    


                
            

            