@extends('front.layout')
@section('title') Blog Detay - @endsection
@section('description'){{$blog->title}}@endsection
@section('keyword'){{$blog->title}}@endsection
@section('body')
<div id="blog-post">
    <div class="row">
        <!--Blog Post-->
        <div class="col-md-8 post">
            
            <div class="post-content">
                <h1 class="blog-title bottom_30 top_30" style="border-bottom:2px solid #dfdfdf;">{{$blog->title}}</h1>
                <p>{!!$blog->description!!}</p>
            </div>
            
    
        </div> 
@endsection
