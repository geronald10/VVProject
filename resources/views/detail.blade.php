@extends('layouts.app')

@section('content')
<div id="fh5co-main">
    <div class="container">
        <div class="row">
            <h3 class="row-title-detail">Smartphone Details</h3>
            <div class="content col-md-9">
                <div class="col-md-4 img-detail-border">
                    <img src="{{ URL::to('/assets/hydrogen/images/apple-iphone-7.jpg') }}" alt="Apple Iphone 7" class="img-rounded img-responsive">
                </div>
                <div class="col-md-8 content-detail">
                    <h3 class="phone-title-detail">Apple iPhone 7 - 128 GB</h3>
                    <hr class="hr-divider"/>
                    <p>Released 2016, September</p>
                    <p>138g, 7.1mm thickness</p>
                    <p>iOS 10.0.1, up to iOS 10.2</p>
                    <p>32/128/256GB storage, no card slot</p>
                    <div class="col-md-3 border-p-detail">
                        <span class="glyphicon glyphicon-phone p-detail" aria-hidden="true"></span>
                        <p class="p-detail">4.7"</p><span>750x1334 pixels</span>
                    </div>
                    <div class="col-md-3 border-p-detail">
                        <span class="glyphicon glyphicon-camera p-detail" aria-hidden="true"></span>
                        <p class="p-detail">12MP</p><span>2160p</span>
                    </div>
                    <div class="col-md-3 border-p-detail">
                        <span class="glyphicon glyphicon-hdd p-detail" aria-hidden="true"></span>
                        <p class="p-detail">2GB RAM</p><span>Apple A10 Fusion</span>
                    </div>
                    <div class="col-md-3 border-p-detail">
                        <span class="glyphicon glyphicon-time p-detail" aria-hidden="true"></span>
                        <p class="p-detail">1960mAh</p><span>Li-Ion</span>
                    </div>
                </div>
                <p> The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. </p>

            </div>
            <div class="col-md-3">
                <div class="panel panel-primary">
                  <div class="panel-heading">Panel with panel-primary class</div>
                  <div class="panel-body">Panel Content</div>
                </div>
            </div>
           
        </div>
        
   </div>
</div>

<div id="fh5co-secondary">
<div class="container">
    <div class="row">
        <div class="content-tab col-md-9">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#home">Rekomendasi Penjual</a></li>
              <li><a data-toggle="tab" href="#menu1">Ulasan Smartphone</a></li>
              <li><a data-toggle="tab" href="#menu2">Link Terkait</a></li>
            </ul>

            <div class="tab-content">
              <div id="home" class="tab-content-detail tab-pane fade in active">
                <h3>Rekomendasi Penjual</h3>
                <p>Some content.</p>
              </div>
              <div id="menu1" class="tab-content-detail tab-pane fade">
                <h3>Ulasan Smartphone</h3>
                <p>Some content in menu 1.</p>
              </div>
              <div id="menu2" class="tab-content-detail tab-pane fade">
                <h3>Link Terkait</h3>
                <p>Some content in menu 2.</p>
              </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection