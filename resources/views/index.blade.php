@extends('layouts.app')

@section('content')

<div class="fugu--hero-section" style="background-image: url(assets/images/all-img/v3/hero-bg.png)">
    <div id="fugu--counter"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="fugu--hero-content">
            <h1 class="wow fadeInUpX" data-wow-delay="0s">TRADER MOON LIGHT</h1>
            <p class="wow fadeInUpX" data-wow-delay="0.10s">Kini hadir sebagai patner trading anda dengan para mentor berkompeten dengan program program yang pastinya menjadi solusi untuk para trader semua.</p>
            <div class="fugu--btn-wrap fugu--hero-btn wow fadeInUpX" data-wow-delay="0.20s">
              <a class="fugu--btn bg-gray active" href="#">Get Started</a>
              <a class="fugu--btn bg-gray" href="#">View Artwork</a>
            </div>
            <div class="fugu--counter-wrap wow fadeInUpX" data-wow-delay="0.30s">
              <div class="fugu--counter-data">
                <h2><span data-percentage="45" class="fugu--counter">0</span><strong>K</strong></h2>
                <p>Artwork</p>
              </div>
              <div class="fugu--counter-data">
                <h2><span data-percentage="86" class="fugu--counter">0</span><strong>K</strong></h2>
                <p>Auction</p>
              </div>
              <div class="fugu--counter-data">
                <h2><span data-percentage="32" class="fugu--counter">0</span><strong>K</strong></h2>
                <p>Artist</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="fugu--hero-right" id="rotateOne">
            <div class="fugu--card-wrap">
              <div class="fugu--card-thumb">
                <img src="{{ asset('assets-fugu/images/all-img/v3/hero-thumb2.png') }}" alt="">
              </div>
              <div class="fugu--card-data">
                <h3>The Exorians Universe</h3>
                <p>Pre-sale : 18 May 2023</p>
                <div class="fugu--card-footer">
                  <div class="fugu--card-footer-data">
                    <span>Mint Price:</span>
                    <h4>0.194 ETH</h4>
                  </div>
                  <a class="fugu--btn btn-sm bg-white" href="#">Place a Bid</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="fugu--hero-shape1">
        <img src="{{ asset('assets-fugu/images/all-img/v3/shape-hero1.png') }}" alt="">
      </div>
      <div class="fugu--hero-shape2"></div>
    </div>
  </div>
  <!-- End fugu-hero-section -->


  <div class="fugu--slider-section">
    <div class="container">
      <div class="fugu--section-title">
        <div class="fugu--default-content content-sm">
          <h2>Benefit Bergabung Dengan Kami</h2>
          <p>Anyone can make a profile on Foundation but only selected creators can mint NFTs & published a complete guide.</p>
        </div>
      </div>
      <div class="row">

        @foreach($data['productType'] as $type)
        <div class="col-xl-3 col-md-6">
            <div class="fugu--iconbox-wrap wow fadeInUpX" data-wow-delay="0s">
                <div class="fugu--iconbox-thumb">
                    <img src="{{ asset($type['image']) }}" alt="">
                </div>
                <div class="fugu--iconbox-data">
                    <h4>{{ $type['name'] }}</h4>
                    <p>{{ $type['desc'] }}</p>
                </div>
            </div>
        </div>
    @endforeach
    
       
        
      </div>
    </div>
  </div>
  <!-- End roadmap section -->

  <div class="fugu--text-slider-section">
    <div class="fugu--text-slider">
      <div class="fugu--text-slider-data">
        <div class="fugu--text-slider-icon">
          <img src="{{ asset('assets-fugu/images/all-img/v3/daimond.png') }}" alt="">
        </div>
        <h3>Join signal VIP galaxy trade $100</h3>
      </div>
      <div class="fugu--text-slider-data">
        <div class="fugu--text-slider-icon">
          <img src="{{ asset('assets-fugu/images/all-img/v3/daimond.png') }}" alt="">
        </div>
        <h3>Join EA dan CT Minimal Deposit $2000</h3>
        
      </div>
      <div class="fugu--text-slider-data">
        <div class="fugu--text-slider-icon">
          <img src="{{ asset('assets-fugu/images/all-img/v3/daimond.png') }}" alt="">
        </div>
        <h3>Indikator SFT + VIP Edukasi Minimal Deposit $2000</h3>
      </div>

    </div>
  </div>
  <!-- End nexto text slider section -->

  


  <div class="fugu--newslatter-section">
    <br>
    <br>
    <div class="container">
      <div class="fugu--newslatter-wrap">
        <div class="fugu--section-title">
          <div class="fugu--default-content content-sm">
            <h2>Subscribe to get the latest news updates about NFTS</h2>
            <p>Get regular updates about interesting & secret upcoming NFT projects & events that are coming exclusively on our site.</p>
          </div>
        </div>
        <div class="fugu--newsletter">
          <input type="email" placeholder="Type your email here">
          <button type="submit" id="fugu--submit-btn">Subscribe</button>
        </div>
      </div>
    </div>
    <div class="fugu--shape4">
      <img src="{{ asset('assets-fugu/images/shape2/shape4.png') }}" alt="">
    </div>
  </div>
  <!-- End newslatter section -->

  <div class="fugu-go-top">
    <img src="{{ asset('assets-fugu/images/svg/arrow-black-right.svg') }}" alt="">
  </div>

@endsection
