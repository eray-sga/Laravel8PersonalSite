<div class="row">
    <section class="services line graybg col-md-12 padding_50 padbot_50">
    <div class="section-title bottom_45"><span></span><h2>Neler yapar?</h2></div>
    <div class="row">
        @foreach ($service as $sc)
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service" style="height:280px;">
                <div class="icon">
                    <i class="{{$sc->icon}}"></i>
                </div>
                <span class="title">{{$sc->title}}</span>
                <p class="little-text">{!!$sc->description!!}</p>
            </div>
        </div>
        @endforeach
        
    </div>
</section>
</div>