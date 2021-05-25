<div class="row">
    <section class="design-skills col-md-12 padding_60 padbot_50">
        <div class="section-title bottom_45"><span></span><h2>Beceriler</h2></div>
        <ul class="skill-list">
            @foreach ($skills as $skill)
            <li> 
                <h3>{{$skill->title}}</h3>
                <div class="progress">
                    <div class="percentage" style="width:{{$skill->percent}}%;"></div>
                </div>
            </li>
            @endforeach
            
        </ul>
    </section>
    
</div>