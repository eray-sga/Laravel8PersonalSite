@extends('front.layout')
@section('title') İletişim - @endsection
@section('body')
<div id="contact">
    <div class="row">
        <!-- Contact Form -->
        <section class="contact-form col-md-6 padding_30 padbot_45">
            <div class="section-title top_15 bottom_30"><span></span><h2>İletişim Formu</h2></div>
            @if(session('success')) <!--Mesaj başarıyla kaydedildiyse-->
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif
    @if($errors->any()) <!--form validation kontrolleri-->
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
    @endif
            <form action="{{route('contactpost')}}" class="site-form" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <input name="name" class="site-input" placeholder="İsim">
                    </div>
                    <div class="col-md-6">
                        <input name="email" class="site-input" placeholder="E-mail">
                    </div>
                    <div class="col-md-12">
                        <textarea name="message" class="site-area" placeholder="Mesaj"></textarea>
                    </div>
                    <div class="col-md-12 top_15 bottom_30">
                        <button class="site-btn" type="submit">Gönder</button>
                    </div>
                </div>
            </form>  
        </section>
        <!-- Contact Informations -->
        <section class="contact-info col-md-6 padding_30 padbot_45">
            <div class="section-title top_15 bottom_30"><span></span><h2>İletişim Bilgileri</h2></div>
            <ul>
                <li><span>E-mail:</span> eray@eraykalkan.com.tr</li>
                <li><span>Telegram:</span> @byteptr</li>
                <li>
                    <div class="social-icons top_15"> 
                        <a class="tw" target="_blank" href="https://twitter.com/pentester_eray"><i class="fa fa-twitter" aria-hidden="true"></i></a> 
                        <a class="ins" target="_blank" href="https://www.linkedin.com/in/erayklkn/"><i class="fa fa-linkedin" aria-hidden="true"></i></a> 
                    </div>
                </li>
            </ul>
        </section>
        
    </div>
</div>
@endsection