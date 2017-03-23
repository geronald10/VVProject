@extends('layouts.app')

@section('content')
<div id="fh5co-main">
	<div class="container">
	<div class="row">
	<h3 class="row-title">Recommendation Result:</h3>
	<div class="col-md-12 label-caption">Categories :
		<span class="label label-primary-caption">Video and Photography</span>
		<span class="label label-primary-caption">Games</span>
		<span class="label label-primary-caption">Utilities</span>
	</div>

    <div id="fh5co-board" data-columns>
    	<div class="item">
    		<a href="{{ url('detail') }}">
        		<div class="animate-box">
	        		<img src="{{ URL::to('/assets/hydrogen/images/apple-iphone-7.jpg') }}" alt="filtered smartphone">
        		</div>
        		<!-- <div class="fh5co-item-title animate-box">Iphone 7 128GB</div> -->
    			<div class="fh5co-desc">Apple iPhone 7 - 128 GB</div>
			</a>
    	</div>
    	<div class="item">
 			<a href="about.html">
        		<div class="animate-box">
        			<img src="/assets/hydrogen/images/lenovo-a7010-hero.png" alt="filtered smartphone">
        		</div>
        		<div class="fh5co-desc">Lenovo A7010 Hero</div>
    		</a>
    	</div>
    	<div class="item">
    		<a href="about.html">
        		<div class="animate-box">
	        		<img src="/assets/hydrogen/images/apple-iphone-7.jpg" alt="filtered smartphone">
        		</div>
        		<!-- <div class="fh5co-item-title animate-box">Iphone 7 128GB</div> -->
    			<div class="fh5co-desc">Iphone 7 128GB</div>
			</a>
    	</div>
    	<div class="item">
 			<a href="about.html">
        		<div class="animate-box">
        			<img src="/assets/hydrogen/images/lenovo-a7010-hero.png" alt="filtered smartphone">
        		</div>
        		<div class="fh5co-desc">Lenovo A7010 Hero</div>
    		</a>
    	</div>
    	<div class="item">
    		<a href="about.html">
        		<div class="animate-box">
	        		<img src="/assets/hydrogen/images/apple-iphone-7.jpg" alt="filtered smartphone">
        		</div>
        		<!-- <div class="fh5co-item-title animate-box">Iphone 7 128GB</div> -->
    			<div class="fh5co-desc">Iphone 7 128GB</div>
			</a>
    	</div>
    	<div class="item">
 			<a href="about.html">
        		<div class="animate-box">
        			<img src="/assets/hydrogen/images/lenovo-a7010-hero.png" alt="filtered smartphone">
        		</div>
        		<div class="fh5co-desc">Lenovo A7010 Hero</div>
    		</a>
    	</div>
    </div>
    </div>
   </div>
</div>
@endsection