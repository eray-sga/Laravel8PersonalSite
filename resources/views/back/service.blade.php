@extends('back.layouts.master')
@section('content')
@section('title','Hizmetler Yönetimi')

<div class="row">
    <div class="col-md-12">
        <h2>Hizmetler</h2>
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
            <a href="{{route('serviceadd')}}" class="btn btn-success">EKLE</a>
            <div class="card-body">

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">İkon</th>
                        <th scope="col">Başlık</th>
                        <th scope="col">Açıklama</th>
                        <th>İşlemler</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($slist as $list)
                        <tr>
                            <td>{{$list->icon}}</td>
                            <td>{{$list->title}}</td>
                            <td>@php echo Str::substr($list->description,0,35)."..." @endphp</td>
                            <td>
                                <a href="{{route('serviceedit',$list->id)}}" title="Düzenle" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                                <a href="{{route('servicedelete',$list->id)}}" onclick="return confirm('Silmek istediğinize emin misiniz?')" title="Sil" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                            </td>
                          </tr>
                        @endforeach
                      
                    </tbody>
                  </table>

            </div>
        </div>
    </div>
@endsection    


                
            

            