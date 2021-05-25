@include('front.layouts.head')

    
<!-- Header
================================================== --> 
<div class="row">
    @include('front.layouts.nav')
        
    <!-- Page Content
    ================================================== --> 
    <div class="col-md-12">
        <div id="content" class="panel-container">
          
            
           @yield('body')
            
        </div><!-- Content - End -->
     </div> <!-- col-md-12 end -->
</div><!-- row end -->
<!-- Footer
================================================== --> 
@include('front.layouts.footer')
