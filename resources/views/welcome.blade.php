@extends('layouts.master')
@section('content')
    
<div class="content">
  
  <div class="home-page">
    <section class="hero ">
<div class="hero-bg " style="background-image: url('../dce5jani6jm7e.cloudfront.net/data/homepage/main-hero-bg-desk.png')"></div>
    <div class="container">
    <div class="hero__wrapper">
        <div class="hero__info" >
            <h1>Pro-Trading with licensed and accredited traders</h1>
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

<section class="invest">
  <div class="container">
      <div class="invest__wrapper">
          <div class="invest__image invest-image-desktop">
              <img data-src="{{ asset('copy/dce5jani6jm7e.cloudfront.net/data/homepage/tab-1.png') }}" title="Invest in famous brands" alt="Invest in famous brands" src="http://127.0.0.1:8000/copy/dce5jani6jm7e.cloudfront.net/data/homepage/tab-1.png" data-loaded="true">
          </div>
          <div class="invest__info">
              <h3>Find Pro-Trader</h3>
              <p>Use the search box below to find a specific pro trader using their Trader ID</p>
              <div class="">
                 
                       <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4 push-down-small">
                            </div>
                            <div class="col-sm-8">
                                <input placeholder="Trader ID" value="Trader ID" class="mdc-text-field__input -ym-disable-keys" name="contact[Name]" value="" id="inputFname" data-template="<div class='tooltips-blue-bg popover' role='tooltip'><div class='arrow'></div><div class='popover-content'></div></div>" placeholder="John" data-toggle="popover" data-content="Your first name with latin letters same as in your ID" data-original-title="" title="">
                                            </div>
                        </div>
                    </div>
              </div>
              <a href="start-trading/admiral-invest-stocks-and-etfs.html" id="btn_start_investing" class="mdc-button invest__info-link action-link mdc-button--color-positive mdc-button--unelevated mdc-button--large mdc-ripple-upgraded" color="positive" size="large" style="width: 100%;--mdc-ripple-fg-size:65px;--mdc-ripple-fg-scale:1.98639;--mdc-ripple-fg-translate-start:37px, -19.5469px;--mdc-ripple-fg-translate-end:22.0078px, -8.5px;"><div class="mdc-button__ripple" style="
"></div> <!----> <span class="mdc-button__label">
                  Search
              </span> <!----></a>
          </div>
      </div>
  </div>
</section>

            <section class="how-works">
        <div class="container">
            <h3>Top performing traders by ROI</h3>
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
                        <div data-v-74d9077d="" class="quote-row">
                          <div class="quote-cell symbol" style="
    display: flex;
    align-items: center;
    line-height: inherit;
    height:inherit;
    padding-bottom: 10px;
"><!---->
                            <img style="width:100%; max-width:70px; border-radius:50em" src="https://fxcmtrading.net/public/storage/traders/zx5h7gNwY2fk4oZXPqMaY6k5QFCTYQ2MrUzTbgTY.jpg">
                            <span>Adam Grogon</span>
                          </div>
                            <div class="quote-cell bid" style="
    display: grid;
    align-items: center;
    line-height: inherit;
    height:inherit;
    padding-bottom: 10px;
"> 1 </div>
                            <div class="quote-cell ask" style="
    display: grid;
    align-items: center;
    line-height: inherit;
    height:inherit;
    padding-bottom: 10px;
"> FOREX </div>
                            <div class="quote-cell spread" style="
    display: grid;
    align-items: center;
    line-height: inherit;
    height:inherit;
    padding-bottom: 10px;
"><span class="widget-green">3%</span></div>
                            <div class="quote-cell" style="
    display: grid;
    align-items: center;
    line-height: inherit;
    height:inherit;
    padding-bottom: 10px;
"><a class="btn btn-info" href="https://fxcmtrading.net/trader-profile/1">View Trader</a></div>
                            <!----></div>
                      </div>
              </div>
          </div>
        </div>
    </section>
    <section class="in-touch">
        <div class="container">
            <div class="in-touch__wrapper">
                <div class="in-touch__image"
                     image-text="Hello!">
                </div>
                <div class="in-touch__info">
                    <h3>Get in touch</h3>
                    <p>More questions? Contact us today!</p>
                    <scroll-button href="about-us/contact-us.html" class="action-link" color="positive"
                        size="large" id="btn_contact_us">Contact us
                    </scroll-button>
                </div>
            </div>
        </div>
    </section>
</div>
</div>

@endsection