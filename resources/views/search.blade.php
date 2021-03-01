@extends('layouts.master')
@section('content')
    
<div class="content1">
  
  <div class="home-page">
    <section class="hero ">
<div class="hero-bg " style="background-image: url('copy/dce5jani6jm7e.cloudfront.net/data/homepage/main-hero-bg-desk.png')"></div>
    <div class="container">
    <div class="hero__wrapper">
        <div class="hero__info" >
            <h1>Pro-Trading for licensed and accredited traders</h1>
            <p>Our pro trading platform offers one of the best ROI driven solution through experienced traders</p>
            <scroll-button href="{{route('learn-more')}}" class="hero__link action-link"
               color="positive" size="large" id="btn_try_now">Learn more
            </scroll-button>
        </div>
        <div class="hero__image">
                                <img src="{{ asset('copy/dce5jani6jm7e.cloudfront.net/data/homepage/main-hero-device.png') }}" alt="">
                        </div>
        <scroll-button-icon class="hero__scroll-btn" :offset="-155" target=".invest" icon="arrow_back_ios"></scroll-button-icon>
    </div>
</div>
</section>


            <section class="how-works">
        <div class="container">
            <h3>Search Result</h3>
            <div class="conditions__wrapper">
                    
              <div class="conditions__block conditions-quotes" style="
width: 100%;
">
                  <div class="conditions__quotes">
                      <div data-v-8aad739a="" class="quotes-widget"><!---->
                        <div data-v-8aad739a="" class="vue-quotes-table">
                          <div data-v-0f386588="" data-v-8aad739a="" class="header-container">
                        <div data-v-0f386588="" class="quote-header"> Trader </div>
                        <div data-v-0f386588="" class="quote-header"> Ranking </div>
                        <div data-v-0f386588="" class="quote-header"> Expertise </div>
                        <div data-v-0f386588="" class="quote-header"> Last week ROI </div>
                        <div data-v-0f386588="" class="quote-header"></div><!---->
                      </div><div data-v-74d9077d="" data-v-8aad739a="" class="quote-row-container">
                       
                @foreach ($traders as $trader)
               
                        <div data-v-74d9077d="" class="quote-row">
                          <div class="quote-cell symbol" style="
    display: flex;
    align-items: center;
    line-height: inherit;
    height:inherit;
    padding-bottom: 10px;
"><!---->
                            <img style="width:100%; max-width:70px; border-radius:50em" 
                            src="{{ asset("public/storage/$trader->profileUrl") }}">
                            <span>{{ $trader->name }}</span>
                          </div>
                            <div class="quote-cell bid" style="
    display: grid;
    align-items: center;
    line-height: inherit;
    height:inherit;
    padding-bottom: 10px;
">{{ $trader->ranking }}</div>
                            <div class="quote-cell ask" style="
    display: grid;
    align-items: center;
    line-height: inherit;
    height:inherit;
    padding-bottom: 10px;
">{{ $trader->expertise}}</div>
                            <div class="quote-cell spread" style="
    display: grid;
    align-items: center;
    line-height: inherit;
    height:inherit;
    padding-bottom: 10px;
"><span class="widget-green">{{ $trader->lastWeekReturn }}</span></div>
                            <div class="quote-cell" style="
    display: grid;
    align-items: center;
    line-height: inherit;
    height:inherit;
    padding-bottom: 10px;
"><a class="btn btn-info" href="/register?traderID={{$trader->uid}}">Trade under {{ $trader->name }}</a></div>
                            <!----></div>
                            
                @endforeach
                      </div>
              </div>
          </div>
        </div>
    </section>
</div>
</div>

@endsection