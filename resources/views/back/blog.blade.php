@extends('back.layouts.master')
@section('content')
@section('title','Blog Yönetimi')

<div class="row">
    <div class="col-md-12">
        <h2>Blog</h2>
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
            <a href="{{route('blogadd')}}" class="btn btn-success">EKLE</a>
            <div class="card-body">

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Başlık</th>
                        <th scope="col">İçerik</th>
                        <th>İşlemler</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($bloglist as $blog)
                        <tr>
                            <td>{{$blog->title}}</td>
                            <td>@php echo Str::substr($blog->description,0,20) @endphp</td>
                            <td>
                                <a href="{{route('blogedit',$blog->id)}}" title="Düzenle" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                                <a href="{{route('blogdelete',$blog->id)}}" onclick="return confirm('Silmek istediğinize emin misiniz?')" title="Sil" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                            </td>
                          </tr>
                        @endforeach
                      
                    </tbody>
                  </table>

            </div>
        </div>
    </div>
@endsection    


                
            

            