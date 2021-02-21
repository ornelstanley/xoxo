@extends('layouts.master')
@section('head')
<link href="https://dce5jani6jm7e.cloudfront.net/css/min/style.min.css?v=1.0.2" rel="stylesheet">
<link href="https://dce5jani6jm7e.cloudfront.net/app/app.css?v=1.0.13" rel="stylesheet">
<script src="https://dce5jani6jm7e.cloudfront.net/app/modules/jquery/js/jquery.js?v=3.3.1" type="text/javascript" ></script>


        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
              rel="stylesheet">
        <link rel="stylesheet" href="https://dce5jani6jm7e.cloudfront.net/build/am-prod/common.css?v=1cf1b9589f8bbd63834317917af141e8">
        <link rel="stylesheet" href="https://dce5jani6jm7e.cloudfront.net/build/am-prod/components.css?v=f8c975a5e5d5b0f438ca98f56d896156">
        <link rel="stylesheet" href="https://dce5jani6jm7e.cloudfront.net/build/am-prod/deprecated.css?v=63b4d4be0d3169caa3c4755c0fc73f50">

            <link href="https://dce5jani6jm7e.cloudfront.net/pages/new_instruments/css/styles.min.css?v=1.0.1" rel="stylesheet" type="text/css">
    <link href="https://dce5jani6jm7e.cloudfront.net/pages/new_instruments/css/components/libs/slick.css" rel="stylesheet"
          type="text/css">
    <style>
        #pro-page .why-us a {
            display: inline;
        }
    </style>
        <link rel="stylesheet" href="https://dce5jani6jm7e.cloudfront.net/build/am-prod/session.css?v=7f005a39b5363df822c8c5ab1290d465">
        <script src="https://dce5jani6jm7e.cloudfront.net/build/am-prod/session.js?v=718ef244dd1797378b0f9d0a8909dfbb"></script>
        <style>
            .mobile-nav-menu-item-no-sub:hover, .mobile-nav-menu-item-no-sub:focus, .mobile-nav-menu-item-no-sub:active {
                cursor: pointer;
                background-color: #1b5fba;
                color: #fff;
            }

            .mobile-nav-menu-item-no-sub {
                padding: 1.25rem 1.25rem 1.25rem 2.5rem;
                font-weight: 700;
                font-size: .875rem;
                line-height: 1rem;
                text-transform: uppercase;
                position: relative;
                display: block;
                color: #fff;
            }
            #navbar-main span.badge-new{
                line-height: 1 !important;
                margin-bottom: -4px;
            }
            #mobile_navigation_wrapper span.badge-new,
            #navbar-main span.badge-new {
                background-color: #26CD6F;
                border-radius: 4px;
                display: inline-block;
                padding: 4px 8px;
                text-align: center;
                font-size: 12px;
                margin-left: 8px;
                line-height: 16px;
            }
            #mobile_navigation_wrapper span.badge-new.badge-new-negative,
            #navbar-main span.badge-new.badge-new-negative {
                background-color: #F22738;
            }

             #dark_notification_block_rw230919 span b{
                 font-size: 14px !important;
             }
            #vue-slider .rtl{
                direction: rtl !important;
            }
            #vue-slider .radial{
                background: radial-gradient(circle, rgba(7,39,53,0.99) 0%, #031118 100%);
            }
            #vue-slider .radial .btn-primary{
                color: hsla(0,0%,100%,.87);
                background-color: #105ef6;
                font-size: 14px;
                line-height: normal;
                letter-spacing: 1.25px;
                text-transform: uppercase;
                font-style: normal;
                font-weight: 500;
                border: none;
                user-select: none;
                -webkit-appearance: none;
                overflow: visible;
                vertical-align: middle;
                border-radius: 4px;
                box-sizing: border-box;
                display: inline-flex;
                position: relative;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                text-decoration: none;
            }
            #vue-slider .radial .btn-primary:hover{
                background-color: #2469F6;
            }
        </style>
        <script>
            if (typeof setCookie === "undefined") {
                var setCookie = function setCookie(cname, cvalue, exdays) {
                    var d = new Date();
                    d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
                    var expires = "expires=" + d.toUTCString();
                    document.cookie = cname + '=' + cvalue + '; ' + expires;
                };
            }
            if (typeof getCookie === "undefined") {
                var getCookie = function getCookie(cname) {
                    var name = cname + '=',
                        ca = document.cookie.split(';');
                    for (var i = 0; i < ca.length; i++) {
                        var c = ca[i];
                        while (c.charAt(0) == ' ') {
                            c = c.substring(1);
                        }
                        if (c.indexOf(name) === 0) return c.substring(name.length, c.length);
                    }
                    return "";
                };
            }
        </script>

     
@endsection
@section('content')
              
<div id="pro-page">

    <section class="hero">
        <div class="inner">
            <h1>Admiral Markets Pro</h1>
            <p class="description btn-subheader">Find out if you`re eligible for professional terms</p>
            <a href="#"
               id="btn_check_eligibility"
               class="btn custom-btn scroll-btn" data-scrollto="#services">CHECK ELIGIBILITY</a>
            <ul class="about">
                <li class="icon-31">Established in 2001*</li>
                <li class="icon-16">Over 120,000 clients worldwide</li>
                <li class="icon-08">Over 7,500 markets</li>
            </ul>
        </div>
    </section>

        <section class="why-us">
            <div class="container">

                <h1>Admiral Markets Pro</h1>
                <p>
                                                                        Professional trading terms give you access to a number of exclusive benefits at no extra cost. Admiral Markets Pro service is for experienced CFD traders who are seeking for a truly premium trading experience. With higher leverage, loyalty programs and priority access to our products, Admiral Markets Pro is a choice for a seasoned trader.
                                                            </p>

                                    <ul class="benefits">
                        <li class="icon-79">
                            <div class="inner">
                                <h4>Potential</h4>
                                <p class="description">
                                    Professional clients get access to higher leverage and can use trading strategies which benefit from a greater exposure. Remember, high rewards come with high risks.**
                                </p>
                            </div>
                        </li>
                        <li class="icon-21">
                            <div class="inner">
                                <h4>Bonuses</h4>
                                <p class="description">
                                    Earn cash rebates for your trading and get access to all existing and prospective incentives, discounts and rewards.
                                </p>
                            </div>
                        </li>
                        <li class="icon-23">
                            <div class="inner">
                                <h4>Protection</h4>
                                <p class="description">
                                    Segregation of funds, ICF protection up to 20,000 EUR and Negative Balance Protection Policy with the maximum payout of 50,000 EUR. <a href="https://admiralmarkets.com/about-us/financial-security?regulator=cysec">More...</a>
                                </p>
                            </div>
                        </li>

                    </ul>
                    <ul class="benefits">
                        <li class="icon-4">
                            <div class="inner">
                                <h4>Liberty</h4>
                                <p class="description">
                                    Experience a higher degree of freedom when choosing your trading strategy, money management rules and level of risk appetite.
                                </p>
                            </div>
                        </li>
                        <li class="icon-5">
                            <div class="inner">
                                <h4>Priority</h4>
                                <p class="description">
                                    Get early access to our new products and additional services first, before they are made available to other clients.
                                </p>
                            </div>
                        </li>
                        <li class="icon-6">
                            <div class="inner">
                                <h4>Best Execution</h4>
                                <p class="description">
                                                                            We owe all our clients a duty of best execution and professional clients benefit from our Best Execution Policy. <a href="https://admiralmarkets.com/start-trading/documents/order-execution-policy?regulator=cysec"
                                           target="_blank">More...</a>
                                                                    </p>
                            </div>
                        </li>

                    </ul>
                
                <div class="risk-disclosure">
                    <div class="row" dir="ltr">
            <div class="col-sm-12">
                <div class="alert text-muted">
                    <small>
                        <strong>
                                                            Risk disclosure:
                                                    </strong>

                            
                        
                                                            Forex and CFD`s carry a high level of risk and losses may exceed your initial deposit. Admiral Markets recommends you seek advice from an independent financial advisor to ensure that you understand

                                                                    <a href="https://admiralmarkets.com/risk-disclosure?regulator=cysec">the risks involved with Forex, CFD’s, Margin and Leveraged trading.</a>
                                                            
                        
                                                        Additionally, please be advised to study our <a href="https://admiralmarkets.com/start-trading/documents?regulator=cysec" target="_blank" class="">Key Information Documents</a> in order to understand the nature, risks, costs, potential gains and losses of products offered by us.
                                                    </small>
                </div>
            </div>
        </div>
    
                </div>

            </div>
        </section>

        <section id="services" class="services">
            <h1>
                Am I eligible for Admiral Markets Pro terms?
            </h1>
            <p class="description">
                To be eligible for the Admiral Markets Pro service, you need to meet certain criteria. If you answer yes to two of three questions below, you could be eligible for Admiral Markets Pro.
            </p>
        <ul class="services-list">
            <li>
                <div class="inner">
                    <p><span class="service-tooltip-trigger"></span>Have you made 10 transactions of a significant size per quarter in the last year in relevant markets?</p>

                    <div class="tooltip">
                        <div class="tooltip-inner">
                            <h4><b>Acceptable parameters</b></h4>
                            <ul>
                                <li><b>Markets:</b> Forex, CFDs, spread bets or other financial instruments (e.g. shares, ETFs, futures, options and other derivatives).</li>
                                <li><b>Trade frequency:</b> an average frequency of 10 transactions per quarter over the previous 4 quarters (in summary with Admiral Markets and/or other providers).</li>
                                <li><b>Trade sizes:</b> a notional value of 10`000 EUR per trade for equities and 20`000 EUR per trade for Forex, CFDs and other financial instruments or equivalent in your local currency.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="inner">
                    <p><span class="service-tooltip-trigger"></span>Does your portfolio of financial instruments exceed 500,000 EUR?</p>

                    <div class="tooltip">
                        <div class="tooltip-inner">
                            <h4><b>Acceptable parameters</b></h4>
                            <ul>
                                <li><b>Portfolio structure:</b> shares, shares ISA, ETFs, mutual funds, derivatives (only available cash deposits on your accounts or profits realised from investing in derivatives) and SIPP (excluding non-financial instruments), debt instruments and cash savings; does not include property, direct commodity ownership, company pension, non-tradeable assets, luxury cars and jewellry as well as notional values of leveraged instruments.</li>
                                <li><b>Portfolio size:</b> over 500,000 EUR or equivalent in your local currency.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="inner">
                    <p><span class="service-tooltip-trigger"></span>
                                                    Have you worked in the financial sector for at least 1 year, including self-employment?
                                            </p>

                    <div class="tooltip">
                        <div class="tooltip-inner">
                            <h4><b>Acceptable parameters</b></h4>
                            <ul>
                                <li><b>Position:</b> a professional position in the financial sector (e.g. banking, financial services or self-employment), which requires knowledge of the transactions and services envisaged.</li>
                                <li><b>Work duration:</b> at least 1 year.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <a class="scroll-btn" href="#" data-scrollto="#registration" style="font-size: 18px;">
            Not eligible for Admiral Markets Pro?
        </a>
    </section>

                <section class="apply" id="vue-slide-thumb">
            <h1 class="centered">Apply Now</h1>


            <div class="checkbox-toggle-wrap">
                <div class="switch large">
                    <input class="switch-input" id="yes-no" type="checkbox" name="switch"/>
                    <label class="switch-paddle" for="yes-no">
                                <span class="switch-active"
                                      aria-hidden="true">Not a client yet?</span>
                        <span class="switch-inactive"
                              aria-hidden="true">Already trading with us?</span>
                    </label>
                </div>
            </div>


            <div class="horiszon" style="">
                <div class="apply-now-not-client">
                    <div class="wrap ">
                        <div class="step-wrap" style=" ">
                            <ol class="steps">
                                <li>
                                    <h4>Open an account with us</h4>

                                    <p>Apply for for a live trading account</p>

                                </li>
                                <li>
                                    <h4>Complete your application</h4>
                                    <p>Confirm your eligibility in the account application form</p>
                                </li>
                                <li>
                                    <h4>Welcome to Admiral Markets Pro</h4>
                                    <p>Receive an approval by email and enjoy the benefits of the professional service</p>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="wrap">
                        <p class="muted centered p-t-lg">Start your Admiral Markets Pro application by opening a live trading account</p>

                    <a href="#"
                       id="btn_open_account"
                       class="btn custom-btn open-reg scroll-btn" data-scrollto="#registration-form">
                        OPEN AN ACCOUNT
                    </a>
                </div>
            </div>

                <div class="apply-now-already-client" style="display: none;">
                    <div class="wrap " style="">
                        <div class="step-wrap">
                            <ol class="steps">
                                <li style="">
                                    <h4>Request to be a professional client</h4>
                                    <p>Confirm your eligibility in the Professional Terms section in Trader`s Room</p>
                                </li>
                                <li style="">

                                    <h4>Welcome to Admiral Markets Pro</h4>
                                    <p>Receive an approval by email and enjoy the benefits of the professional service</p>
                                </li>
                            </ol>
                        </div>

                    </div>

                    <div class="wrap">
                        <p class="muted centered p-t-lg">Start your Admiral Markets Pro application by filling the Professional Terms form</p>

                        <a rel="nofollow" style="" target="_blank" href="https://tr.admiralmarkets.com.cy/index/auth/lang/en"
                           class="custom-btn btn analyt-existing-clicked-tr">LOGIN TO TRADER`S ROOM</a>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="contact container">
            <div class="inner">
                <h1>Get in Touch</h1>

                <p>Any questions about Admiral Markets Pro?</p>
                <ul class="contacts">
                    <li class="phone">

                                                    <a href="tel:+35722262181">+357 22 262 181</a>
                        
                    </li>
                    <li class="hidden-xs open-chat">
                        <a rel="nofollow" target="_blank"
                           href="https://v2.zopim.com/widget/livechat.html?api_calls=%5B%5D&amp;hostname=admiralmarkets.com&amp;key=1qRkJv7AupI1cw9qs5jAn4kVk6IMXCg6&amp;lang=en_GB&amp;"
                           id="btn_open_live_chat"
                           class="btn-outline ">
                            OPEN LIVE CHAT
                        </a>
                    </li>
                    <li class="email">
                        <a href="mailto:global@admiralmarkets.com">global@admiralmarkets.com</a>
                    </li>
                </ul>
                <a rel="nofollow" target="_blank"
                   href="https://v2.zopim.com/widget/livechat.html?api_calls=%5B%5D&amp;hostname=admiralmarkets.com&amp;key=1qRkJv7AupI1cw9qs5jAn4kVk6IMXCg6&amp;lang=en_GB&amp;"
                   class="btn-outline hidden-md">OPEN LIVE CHAT</a>
            </div>
        </section>

        <section class="faq" id="faq">
            <h1>Frequently Asked Questions</h1>

            <ul class="accordion">

                                    <li>
                        <div class="item">
                            <a class="faq-header">
                                <p class="tab-title"> What is the difference between your standard service and Admiral Markets Pro?</p>
                            </a>

                            <div class="tab-content">
                                                                    <p>Admiral Markets Pro service is provided to professional clients and gives access to higher trading leverage, cash rebates and priority access to new products. While the standard service provided to retail clients is subject to a number of regulatory restrictions, Admiral Markets Pro allows experienced traders to access unrestricted terms and experience a higher degree of freedom in trading.</p>
                                                                <p>Admiral Markets Pro is not an account - it is a set of trading terms and additional benefits which can be accessed by an eligible client with any CFD account, which includes Admiral.Markets, Admiral.MT5 and Admiral.Prime accounts.</p>
                                <p>Both professional and retail clients get the same access to our trading platforms, instruments and trading tools and have the same spreads, commissions and daily financing. There is no difference in terms of any costs.</p>
                            </div>
                        </div>
                    </li>
                
                <li>
                    <div class="item">
                        <a class="faq-header">
                            <p class="tab-title"> What if I am not eligible for Admiral Markets Pro?</p>
                        </a>

                        <div class="tab-content">
                            If you are not eligible for Admiral Markets Pro, you can still trade thousands of financial instruments in the world`s most popular trading platforms, MetaTrader 4 & MetaTrader 5, on the standard retail trading terms. Remember, you can apply to professional terms later, when the eligibility criteria are met. <a href="https://admiralmarkets.com/start-trading/account-types?regulator=cysec" target="_self" class="">Learn more...</a>
                        </div>
                    </div>
                </li>


                                <li>
                    <div class="item">
                        <a class="faq-header">
                            <p class="tab-title"> Do Admiral Markets Pro clients get the same protections as retail clients?</p>
                        </a>

                        <div class="tab-content">
                                                            <p>Protections similar to those available to retail clients:</p>
                                <ul style='font-weight: normal !important; color: #8B8EA8;  list-style: disc; font-size: 16px;'>
                                    <li style='font-weight: normal !important;color: #8B8EA8;'>
                                        <b>Segregated funds:</b> as with a retail account, we will hold and maintain an amount equal to your account in a segregated money bank account.
                                    </li>
                                    <li style='font-weight: normal !important;color: #8B8EA8;'>
                                        <b>Deposit protection by ICF:</b> as with a retail account, you can be compensated by the <a rel="nofollow" href="https://www.cysec.gov.cy/en-GB/complaints/tae/" target="_blank" class="">Investor Compensation Fund</a> on up to 20,000 EUR you hold with us.
                                    </li>
                                    <li style='font-weight: normal !important;color: #8B8EA8;'>
                                        <b>Use of CySEC:</b> as with a retail account, you are able to complain to the <a rel="nofollow" href="https://www.cysec.gov.cy/en-GB/home/" target="_blank" class="">Cyprus Securities and Exchange Commission</a> if you are dissatisfied with the result of a complaint to us.
                                    </li>
                                </ul>


                                                            <p>
                                    In addition, either professional and retail clients get access to our exclusive <a href="https://admiralmarkets.com/products/volatility-protection?regulator=cysec" target="_blank" class="">Volatility Protection Settings</a> service, which helps minimise the risks connected to market volatility.
                                </p>
                        </div>
                    </div>
                </li>
                

                <li>
                    <div class="item">
                        <a class="faq-header">
                            <p class="tab-title"> Which protections are different or not available to professional clients?</p>
                        </a>

                        <div class="tab-content">
                                                            <p>Protections different from those available to retail clients:</p>

                                <ul style='font-weight: normal !important; color: #8B8EA8;  list-style: disc; font-size: 16px;'>
                                    <li style='font-weight: normal !important;color: #8B8EA8;'>
                                        <b>No leverage restrictions:</b> as a professional client, you won`t be subject to the leverage restrictions and will be able to use a higher leverage; by doing so, you can amplify your gains and losses.
                                    </li>
                                    <li style='font-weight: normal !important;color: #8B8EA8;'>
                                        <b>Negative balance protection:</b> you can get a maximum coverage of 50,000 EUR for your netted account deficits as per our <a href="https://admiralmarkets.com/start-trading/documents/negative-balance-protection-policy-pro?regulator=cysec" target="_blank" class="">Negative Balance Protection Policy</a>, while retail clients have no such limit and are covered on per-account basis.
                                    </li>
                                    <li style='font-weight: normal !important;color: #8B8EA8;'>
                                        <b>Communications and risk warnings:</b> we will have a option to communicate with you using a professional language; also, we may not issue a risk warning when we get in touch or promote a new product.
                                    </li>
                                </ul>

                                                    </div>
                    </div>
                </li>

                                            <li>
                            <div class="item">
                                <a class="faq-header">
                                    <p class="tab-title"> Why the CFD leverage is restricted?</p>
                                </a>

                                <div class="tab-content">
                                                                            <p>The European Securities and Markets Authority (ESMA) has restricted leverage to between 1:30 and 1:2 for retail clients, considering that high leverage is not suitable for this client category.</p>
                                                                        <p> These restrictions do not apply to Admiral Markets Pro clients, who are classified as professional clients. Professional clients can access a x17 - x25 higher leverage of up to 1:500 for CFDs on currencies, indices, metals and oil. So, whereas the requirement to 1 lot on EURUSD for a professional client is 200 EUR, it is 3,333.33 EUR for a retail one. </p>
                                </div>
                            </div>
                        </li>
                    
                <li>
                    <div class="item">
                        <a class="faq-header">
                            <p class="tab-title">What is included in my `financial instruments portfolio`?</p>
                        </a>

                        <div class="tab-content">
                                                            <p>Your financial instruments portfolio may include shares, ETFs, mutual funds, derivatives (only available cash deposits on your accounts or profits realised from investing in derivatives), debt instruments and cash savings.</p>
                                <p>Your financial instruments portfolio does not include property, direct commodity ownership, company pension, non-tradeable assets, luxury cars and jewelry as well as notional values of leveraged instruments.</p>
                                <p>The portfolio size needs to be over 500,000 EUR or equivalent in your local currency.</p>
                                                    </div>
                    </div>
                </li>

                <li>
                    <div class="item">
                        <a class="faq-header">
                            <p class="tab-title"> Do I need to open an account before I can upgrade to Admiral Markets Pro?</p>
                        </a>

                        <div class="tab-content">
                            <p>If you are a new client, you can apply for professional categorisation at the same time as applying for an account in Trader`s Room. You will receive two confirmations by email, one for your account application and another one for your professional categorisation. You are free to start trading on retail terms while you are waiting for approval of your application to Admiral Markets Pro.</p>


                            <p>
                                If you already have a CFD account with us (account types: Admiral.Markets, Admiral.MT5 or Admiral.Prime), you can <a href="https://admiralmarkets.com/login?regulator=cysec" target="_blank" class="">apply to Admiral Markets Pro now</a> in Trader`s Room, if you think you may be eligible.
                            </p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="item">
                        <a class="faq-header">
                            <p class="tab-title"> How will I know when I`ve been upgraded from a retail account to Admiral Markets Pro?</p>
                        </a>

                        <div class="tab-content">
                            <p>We`ll contact you by email to notify you when your application to become a professional client has been approved and you have switched to Admiral Markets Pro. Your login credentials for trading platforms will remain the same. Remember, while you are waiting for access to Admiral Markets Pro, you can still trade on your standard retail account.</p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="item">
                        <a class="faq-header">
                            <p class="tab-title"> What are the tax implications of upgrading to Admiral Markets Pro?</p>
                        </a>

                        <div class="tab-content">
                            <p>Switching to Admiral Markets Pro does not change the nature of financial products we provide to you so there are no tax implications. For any specific, individual case or personal questions about your tax obligations please contact a tax advisor of your choice.</p>
                        </div>
                    </div>
                </li>
            </ul>

            <div class="subnote">
                <p class="muted">
                    More questions about trading with us?
                </p>

                <a href="https://admiralmarkets.com/faq?regulator=cysec" target="_blank" class="">See all our FAQs</a>
            </div>
        </section>

        <section class="hidden-sm chart" id="vue-chart">
            <div class="inner">
                <h1>What you can trade with us</h1>
                <p class="description">
                    Admiral Markets Pro gives you access to more than 3,000*** products, including CFDs on currency pairs, indices, precious metals, energies, stocks, ETFs, bonds and cryptocurrencies.
                </p>

                <div id="quotes">
                    <app-quotes></app-quotes>
                </div>

            </div>
        </section>

        <section class="footnote1" id="registration">
            <div class="inner container">
                <h1>Not eligible for Admiral Markets Pro?</h1>
                <p class="description">
                    You can still trade over <a href="https://admiralmarkets.com/start-trading/contract-specifications?regulator=cysec" target="_self" class="">3,000 markets</a> in the world`s most popular trading platforms, MetaTrader 4 & 5, with access to our exclusive <a href="https://admiralmarkets.com/trading-platforms/metatrader-se?regulator=cysec" target="_self" class="">MT Supreme Edition</a> and <a href="https://admiralmarkets.com/products/volatility-protection?regulator=cysec" target="_self" class="">Volatility Protection Settings</a>, market news and analysis by Dow Jones Newswires and free education.
                </p>

                <span id="registration-form">
                    <script src="https://dce5jani6jm7e.cloudfront.net/app/modules/sentry/js/sentry.js"></script>

    <sign-up-form json='{"cid":2339,"ref_id":null,"form_label":"admiral-markets-pro","class":"sign-up-first-step","type":"text-form","advanced":false,"header":"Sign up with Admiral Markets","subHeader":"Sign up for your Trader\u2019s Room account and open live or demo trading account.","fields":{"first_name":{"class":"first_name","type":"text","related-to":"","hints":"","hintHeader":"","hintRules":"","oc_id":"","label":"First Name","groupName":"","groupClass":"","value":"","isMask":"","advancedView":"","name":"first_name","dayOptions":"","monthOptions":"","yearOptions":"","day_placeholder":"","month_placeholder":"","year_placeholder":"","buttons":[],"selectOptionPlaceholder":"","placeholder":"John","validationRules":{"errors":{"noMatch":"Please, provide valid First Name (latin letters only)","minLength":"First Name should be at least 1 characters","maxLength":"First Name can be maximum 225 characters","required":"First Name field cannot be left blank","errors":"Validation Rule errors"},"pattern":"^[a-zA-Z .-]*$","minLengthRule":1,"maxLengthRule":225,"requiredRule":true,"errorsRule":{"minLength":"First Name should be at least 1 characters","maxLength":"First Name can be maximum 225 characters","required":"First Name field cannot be left blank","noMatch":"Please, provide valid First Name (latin letters only)"}}},"last_name":{"class":"last_name","type":"text","related-to":"","hints":"","hintHeader":"","hintRules":"","oc_id":"","label":"Last Name","groupName":"","groupClass":"","value":"","isMask":"","advancedView":"","name":"last_name","dayOptions":"","monthOptions":"","yearOptions":"","day_placeholder":"","month_placeholder":"","year_placeholder":"","buttons":[],"selectOptionPlaceholder":"","placeholder":"Smith","validationRules":{"errors":{"noMatch":"Please, provide valid Last Name (latin letters only)","minLength":"Last Name should be at least 1 characters","maxLength":"Last Name can be maximum 225 characters","required":"Last Name field cannot be left blank","errors":"Validation Rule errors"},"pattern":"^[a-zA-Z .-]*$","minLengthRule":1,"maxLengthRule":225,"requiredRule":true,"errorsRule":{"minLength":"Last Name should be at least 1 characters","maxLength":"Last Name can be maximum 225 characters","required":"Last Name field cannot be left blank","noMatch":"Please, provide valid Last Name (latin letters only)"}}},"email":{"class":"email","type":"email","related-to":"","hints":"","hintHeader":"","hintRules":"","oc_id":"","label":"Email","groupName":"","groupClass":"","value":"","isMask":"","advancedView":"","name":"email","dayOptions":"","monthOptions":"","yearOptions":"","day_placeholder":"","month_placeholder":"","year_placeholder":"","buttons":[],"selectOptionPlaceholder":"","placeholder":"john@example.com","validationRules":{"errors":{"noMatch":"Please provide valid Email","minLength":"Email should be at least 4 characters","maxLength":"Email can be maximum 255 characters","required":"Email field cannot be left blank","errors":"Validation Rule errors"},"pattern":"^(([^\u003C\u003E()\\[\\]\\.,;:\\s@\u0022]+(\\.[^\u003C\u003E()\\[\\]\\.,;:\\s@\u0022]+)*)|(\u0022.+\u0022))@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}])|(([a-zA-Z\\-0-9]+\\.)+[a-zA-Z]{2,}))$","minLengthRule":4,"maxLengthRule":255,"requiredRule":true,"errorsRule":{"minLength":"Email should be at least 4 characters","maxLength":"Email can be maximum 255 characters","required":"Email field cannot be left blank","noMatch":"Please provide valid Email"}}}},"request":{"__default":{"functionName":"validateEmail","arguments":{"url":"https:\/\/admiralmarkets.com\/fcm-forms\/validate-email?regulator=cysec"},"nextFunction":"signUpStep2"},"signUpStep2":{"functionName":"signUpStep2","arguments":{"logInStepUrl":"https:\/\/admiralmarkets.com\/fcm-forms\/config\/login-step?regulator=cysec","regFormNextStepUrl":"https:\/\/admiralmarkets.com\/fcm-forms\/config\/signup-step-2?regulator=cysec","verifyEmailStepUrl":"https:\/\/admiralmarkets.com\/fcm-forms\/config\/verify-email?regulator=cysec"}}},"credentials":null,"virtual_page_view_unverified_user":null,"virtual_page_view_verified_user":null,"virtual_page_view_new_user_form":null,"first_ep":null,"registration_event":"Submitted Reg Form","errors":{"email_exists":"This email cannot be used. If you already have an account with us, try \u003Ca href=https://admiralmarkets.com/u0022////admiralmarkets.com//login/u0022/u003Elogging in\u003C\/a\u003E."},"locale":"en","langPrefix":"\/","platform":"","leverage":"","downloadFormExistingCustomer":"","requiredError":"Please fill all the fields.","badResponseError":"Something went wrong, please, try again later.","wrongPasswordLogin":"Inserted password from your Trader`s Room is wrong. Please, try one more time.","throttlingError":"You have exceeded the amount of log-in attempts. Please try again in {interval} minute(s).","alreadyExists":"Please use a different phone number","passwordsShouldMatchError":"Passwords are not matching","badFormatError":"Please, fill in the field(s) in a right format.","policyText":"By proceeding, I agree to the \u003Ca href=https://admiralmarkets.com/u0022https:////admiralmarkets.com//privacy-policy?regulator=cysec\u0022\u003EPrivacy policy\u003C\/a\u003E and consent to Admiral Markets contacting me regarding available services and for marketing purposes. I understand that I can opt-out from marketing immediately by contacting \u003Ca href=https://admiralmarkets.com/u0022https:////admiralmarkets.com//about-us//contact-us?regulator=cysec\u0022\u003ECustomer Support\u003C\/a\u003E or via editing my \u003Ca href=https://admiralmarkets.com/u0022https:////admiralmarkets.com//login?regulator=cysec\u0022\u003ESubscriptions\u003C\/a\u003E Settings.","signUp":true,"otp":{"header":"Two-Step Verification","subHeaderGauth":"Enter the code you see in your Google Authenticator app","subHeaderSms":"6 digit verification code was sent to the phone number ending in *","subHeaderEmail":"Please check your email for your one-time access code.","otpDelay1":"You can request a new code in","otpDelay2":"seconds","otpSmsResend":"RESEND SMS","otpSmsError1":"Sorry!","otpSmsError2":"You have reached the limit of allowed SMS verification attempts.","otpSmsError3":"Please try again later or \u003Ca href=https://admiralmarkets.com/u0022https:////admiralmarkets.com//about-us//contact-us?regulator=cysec\u0022 target=\u0022_blank\u0022 class=\u0022\u0022\u003Econtact us\u003C\/a\u003E","expiredError":"This one time code has expired","inputLabel":"Your one time code","back":"Return to previous step"},"country":"NG"}'></sign-up-form>
    <link rel="stylesheet" href="https://dce5jani6jm7e.cloudfront.net/build/am-prod/forms.css?v=3ce8d6da514b313fba9c0de7eff98e28">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Material+Icons">
    <script src="https://dce5jani6jm7e.cloudfront.net/build/am-prod/forms.js?v=3ce8d6da514b313fba9c0de7eff98e28" type="text/javascript"></script>

                </span>
            </div>
        </section>

        <section class="footnote2 container">
            <p>* This data refers to Admiral Markets Group.</p>
            <br/>
            <p>** It is important to note that a higher leverage also means higher risks. You need to fully understand the practical reason for trading with higher leverage and, if you`re doing so, to always keep your account sufficiently funded.</p>

            
        </section>

        <section class="instrument-awards">
    <div class="instrument-container">
        <div class="instrument-awards__slider">
            <div class="instrument-awards__item">
                <div class="instrument-awards__item-flex-cont">
                    <svg aria-label="Award icon" width="25px" height="65px" viewBox="0 0 25 65" version="1.1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="miscs/awards/award-light" fill="#FFFFFF">
                                <path d="M5.79243788,29.941 C5.87043788,28.086 5.50943788,26.19 4.62043788,24.612 C3.73143788,23.043 2.45943788,22.118 1.06543788,22.076 C0.629437879,24.132 0.934437879,26.356 1.95143788,27.933 C2.96843788,29.518 4.42143788,30.121 5.79243788,29.941 M6.56643788,37.44 C6.28543788,35.422 5.54243788,33.452 4.29543788,31.912 C3.05243788,30.382 1.51943788,29.608 0.00943787885,29.814 C-0.0935621211,32.127 0.650437879,34.495 2.04843788,36.012 C3.44843788,37.539 5.13043788,37.903 6.56643788,37.44 M6.37243788,22.435 C6.74343788,20.787 6.72043788,19.025 6.16743788,17.473 C5.61343788,15.928 4.61143788,14.911 3.36943788,14.663 C2.67243788,16.433 2.60343788,18.457 3.26143788,20.022 C3.91943788,21.595 5.11843788,22.371 6.37243788,22.435 M24.5184379,62.568 C22.8544379,61.483 21.6284379,60.369 20.5524379,59.327 C20.1564379,58.943 19.5224379,58.954 19.1384379,59.351 C18.7544379,59.747 18.7654379,60.38 19.1624379,60.765 C20.2544379,61.822 21.6154379,63.063 23.4254379,64.243 C23.5944379,64.353 23.7834379,64.405 23.9714379,64.405 C24.2974379,64.405 24.6184379,64.246 24.8094379,63.952 C25.1114379,63.489 24.9804379,62.869 24.5184379,62.568 M8.30243788,15.119 C8.90443788,13.711 9.16943788,12.13 8.92343788,10.661 C8.67643788,9.197 7.94143788,8.142 6.87843788,7.737 C5.99043788,9.206 5.61243788,10.985 5.94443788,12.477 C6.27443788,13.975 7.20443788,14.859 8.30243788,15.119 M20.6604379,52.629 C20.5764379,50.349 19.8024379,48.256 18.5884379,46.523 C16.8864379,47.334 15.5484379,48.959 15.4304379,51.345 C15.3034379,53.718 16.5304379,56.298 18.5524379,58.087 C20.0464379,56.902 20.7344379,54.896 20.6604379,52.629 M12.3984379,51.943 C11.1754379,49.805 9.52843788,47.913 7.52543788,46.678 C5.52943788,45.455 3.53543788,45.17 1.95343788,45.993 C2.77143788,48.67 4.60943788,51.077 6.81743788,52.22 C9.03343788,53.376 11.0444379,53.07 12.3984379,51.943 M3.58943788,44.054 C5.38743788,45.446 7.26043788,45.512 8.69943788,44.733 C7.99143788,42.614 6.82343788,40.637 5.20843788,39.205 C3.59643788,37.783 1.82043788,37.217 0.242437879,37.709 C0.547437879,40.236 1.79543788,42.674 3.58943788,44.054 M11.4694379,54.081 C9.08543788,53.157 6.91543788,53.228 5.41543788,54.415 C6.85743788,57.149 9.37443788,59.396 12.0034379,60.188 C14.6454379,60.994 16.7184379,60.25 17.8784379,58.76 C16.0444379,56.713 13.8644379,55.016 11.4694379,54.081 M6.99543788,22.538 C8.21243788,22.876 9.56143788,22.52 10.7314379,21.577 C11.9044379,20.628 12.6834379,19.295 13.0504379,17.86 C11.9034379,17.35 10.5064379,17.417 9.24143788,18.348 C7.97843788,19.273 7.15943788,20.877 6.99543788,22.538 M15.1044379,8.743 C16.2734379,8.323 17.2704379,7.472 17.9804379,6.425 C17.2584379,5.732 16.1724379,5.436 14.9434379,5.828 C13.7174379,6.216 12.6354379,7.224 12.0174379,8.446 C12.8244379,9.048 13.9384379,9.16 15.1044379,8.743 M12.3044379,15.043 C13.5024379,14.37 14.4154379,13.276 14.9764379,12.024 C14.0384379,11.398 12.7844379,11.26 11.5114379,11.908 C10.2424379,12.55 9.25743788,13.857 8.83743788,15.312 C9.85843788,15.809 11.1094379,15.711 12.3044379,15.043 M16.7474379,2.923 C17.5284379,2.013 18.0354379,0.986 18.2384379,0 C17.2544379,0.199 16.2074379,0.807 15.3894379,1.761 C14.5704379,2.714 14.1444379,3.823 14.1124379,4.805 C15.0414379,4.475 15.9654379,3.834 16.7474379,2.923 M13.0144379,40.868 C13.7194379,39.06 13.7724379,37.137 13.3224379,35.358 C11.6944379,35.494 10.1214379,36.403 9.26243788,38.247 C8.40243788,40.078 8.51743788,42.442 9.46443788,44.427 C11.0514379,43.982 12.3074379,42.666 13.0144379,40.868 M11.5824379,8.191 C12.3504379,7.041 12.8494379,5.677 12.8754379,4.339 C12.8984379,3.005 12.4194379,1.965 11.5504379,1.452 C10.5384379,2.618 9.91943788,4.123 9.96243788,5.488 C10.0024379,6.858 10.6644379,7.787 11.5824379,8.191 M11.1224379,34.655 C12.0564379,33.126 12.4064379,31.369 12.2654379,29.661 C10.7634379,29.536 9.19643788,30.132 8.13043788,31.673 C7.06443788,33.204 6.79143788,35.352 7.31243788,37.29 C8.82543788,37.151 10.1884379,36.175 11.1224379,34.655 M16.1494379,46.94 C16.5214379,44.873 16.2024379,42.833 15.3944379,41.04 C13.6934379,41.49 12.1884379,42.747 11.6404379,44.879 C11.0864379,47 11.6984379,49.517 13.1444379,51.46 C14.7334379,50.663 15.7724379,48.995 16.1494379,46.94 M6.48843788,29.929 C7.87443788,30.053 9.26343788,29.402 10.3494379,28.171 C11.4374379,26.932 12.0284379,25.375 12.1604379,23.785 C10.8224379,23.443 9.31743788,23.756 8.11943788,24.989 C6.92143788,26.213 6.33743788,28.103 6.48843788,29.929"
                                      id="Left"></path>
                            </g>
                        </g>
                    </svg>
                    <div class="instrument-awards__body">
                        <h5 class="instrument-awards__title">
                            BEST CFD BROKER 2020
                        </h5>
                        <p class="instrument-awards__text">
                            Deutsches Kundeninstitut award Top CFD Broker 2016, 2018 - 2020
                        </p>
                    </div>
                    <svg aria-label="Award icon" width="25px" height="65px" viewBox="0 0 25 65" version="1.1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="miscs/awards/award-light" transform="translate(-235.000000, 0.000000)" fill="#FFFFFF">
                                <path d="M240.792438,29.941 C240.870438,28.086 240.509438,26.19 239.620438,24.612 C238.731438,23.043 237.459438,22.118 236.065438,22.076 C235.629438,24.132 235.934438,26.356 236.951438,27.933 C237.968438,29.518 239.421438,30.121 240.792438,29.941 M241.566438,37.44 C241.285438,35.422 240.542438,33.452 239.295438,31.912 C238.052438,30.382 236.519438,29.608 235.009438,29.814 C234.906438,32.127 235.650438,34.495 237.048438,36.012 C238.448438,37.539 240.130438,37.903 241.566438,37.44 M241.372438,22.435 C241.743438,20.787 241.720438,19.025 241.167438,17.473 C240.613438,15.928 239.611438,14.911 238.369438,14.663 C237.672438,16.433 237.603438,18.457 238.261438,20.022 C238.919438,21.595 240.118438,22.371 241.372438,22.435 M259.518438,62.568 C257.854438,61.483 256.628438,60.369 255.552438,59.327 C255.156438,58.943 254.522438,58.954 254.138438,59.351 C253.754438,59.747 253.765438,60.38 254.162438,60.765 C255.254438,61.822 256.615438,63.063 258.425438,64.243 C258.594438,64.353 258.783438,64.405 258.971438,64.405 C259.297438,64.405 259.618438,64.246 259.809438,63.952 C260.111438,63.489 259.980438,62.869 259.518438,62.568 M243.302438,15.119 C243.904438,13.711 244.169438,12.13 243.923438,10.661 C243.676438,9.197 242.941438,8.142 241.878438,7.737 C240.990438,9.206 240.612438,10.985 240.944438,12.477 C241.274438,13.975 242.204438,14.859 243.302438,15.119 M255.660438,52.629 C255.576438,50.349 254.802438,48.256 253.588438,46.523 C251.886438,47.334 250.548438,48.959 250.430438,51.345 C250.303438,53.718 251.530438,56.298 253.552438,58.087 C255.046438,56.902 255.734438,54.896 255.660438,52.629 M247.398438,51.943 C246.175438,49.805 244.528438,47.913 242.525438,46.678 C240.529438,45.455 238.535438,45.17 236.953438,45.993 C237.771438,48.67 239.609438,51.077 241.817438,52.22 C244.033438,53.376 246.044438,53.07 247.398438,51.943 M238.589438,44.054 C240.387438,45.446 242.260438,45.512 243.699438,44.733 C242.991438,42.614 241.823438,40.637 240.208438,39.205 C238.596438,37.783 236.820438,37.217 235.242438,37.709 C235.547438,40.236 236.795438,42.674 238.589438,44.054 M246.469438,54.081 C244.085438,53.157 241.915438,53.228 240.415438,54.415 C241.857438,57.149 244.374438,59.396 247.003438,60.188 C249.645438,60.994 251.718438,60.25 252.878438,58.76 C251.044438,56.713 248.864438,55.016 246.469438,54.081 M241.995438,22.538 C243.212438,22.876 244.561438,22.52 245.731438,21.577 C246.904438,20.628 247.683438,19.295 248.050438,17.86 C246.903438,17.35 245.506438,17.417 244.241438,18.348 C242.978438,19.273 242.159438,20.877 241.995438,22.538 M250.104438,8.743 C251.273438,8.323 252.270438,7.472 252.980438,6.425 C252.258438,5.732 251.172438,5.436 249.943438,5.828 C248.717438,6.216 247.635438,7.224 247.017438,8.446 C247.824438,9.048 248.938438,9.16 250.104438,8.743 M247.304438,15.043 C248.502438,14.37 249.415438,13.276 249.976438,12.024 C249.038438,11.398 247.784438,11.26 246.511438,11.908 C245.242438,12.55 244.257438,13.857 243.837438,15.312 C244.858438,15.809 246.109438,15.711 247.304438,15.043 M251.747438,2.923 C252.528438,2.013 253.035438,0.986 253.238438,0 C252.254438,0.199 251.207438,0.807 250.389438,1.761 C249.570438,2.714 249.144438,3.823 249.112438,4.805 C250.041438,4.475 250.965438,3.834 251.747438,2.923 M248.014438,40.868 C248.719438,39.06 248.772438,37.137 248.322438,35.358 C246.694438,35.494 245.121438,36.403 244.262438,38.247 C243.402438,40.078 243.517438,42.442 244.464438,44.427 C246.051438,43.982 247.307438,42.666 248.014438,40.868 M246.582438,8.191 C247.350438,7.041 247.849438,5.677 247.875438,4.339 C247.898438,3.005 247.419438,1.965 246.550438,1.452 C245.538438,2.618 244.919438,4.123 244.962438,5.488 C245.002438,6.858 245.664438,7.787 246.582438,8.191 M246.122438,34.655 C247.056438,33.126 247.406438,31.369 247.265438,29.661 C245.763438,29.536 244.196438,30.132 243.130438,31.673 C242.064438,33.204 241.791438,35.352 242.312438,37.29 C243.825438,37.151 245.188438,36.175 246.122438,34.655 M251.149438,46.94 C251.521438,44.873 251.202438,42.833 250.394438,41.04 C248.693438,41.49 247.188438,42.747 246.640438,44.879 C246.086438,47 246.698438,49.517 248.144438,51.46 C249.733438,50.663 250.772438,48.995 251.149438,46.94 M241.488438,29.929 C242.874438,30.053 244.263438,29.402 245.349438,28.171 C246.437438,26.932 247.028438,25.375 247.160438,23.785 C245.822438,23.443 244.317438,23.756 243.119438,24.989 C241.921438,26.213 241.337438,28.103 241.488438,29.929"
                                      id="Right" transform="translate(247.486015, 32.202500) scale(-1, 1) translate(-247.486015, -32.202500) "></path>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="instrument-awards__item">
                <div class="instrument-awards__item-flex-cont">
                    <svg aria-label="Award icon" width="25px" height="65px" viewBox="0 0 25 65" version="1.1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="miscs/awards/award-light" fill="#FFFFFF">
                                <path d="M5.79243788,29.941 C5.87043788,28.086 5.50943788,26.19 4.62043788,24.612 C3.73143788,23.043 2.45943788,22.118 1.06543788,22.076 C0.629437879,24.132 0.934437879,26.356 1.95143788,27.933 C2.96843788,29.518 4.42143788,30.121 5.79243788,29.941 M6.56643788,37.44 C6.28543788,35.422 5.54243788,33.452 4.29543788,31.912 C3.05243788,30.382 1.51943788,29.608 0.00943787885,29.814 C-0.0935621211,32.127 0.650437879,34.495 2.04843788,36.012 C3.44843788,37.539 5.13043788,37.903 6.56643788,37.44 M6.37243788,22.435 C6.74343788,20.787 6.72043788,19.025 6.16743788,17.473 C5.61343788,15.928 4.61143788,14.911 3.36943788,14.663 C2.67243788,16.433 2.60343788,18.457 3.26143788,20.022 C3.91943788,21.595 5.11843788,22.371 6.37243788,22.435 M24.5184379,62.568 C22.8544379,61.483 21.6284379,60.369 20.5524379,59.327 C20.1564379,58.943 19.5224379,58.954 19.1384379,59.351 C18.7544379,59.747 18.7654379,60.38 19.1624379,60.765 C20.2544379,61.822 21.6154379,63.063 23.4254379,64.243 C23.5944379,64.353 23.7834379,64.405 23.9714379,64.405 C24.2974379,64.405 24.6184379,64.246 24.8094379,63.952 C25.1114379,63.489 24.9804379,62.869 24.5184379,62.568 M8.30243788,15.119 C8.90443788,13.711 9.16943788,12.13 8.92343788,10.661 C8.67643788,9.197 7.94143788,8.142 6.87843788,7.737 C5.99043788,9.206 5.61243788,10.985 5.94443788,12.477 C6.27443788,13.975 7.20443788,14.859 8.30243788,15.119 M20.6604379,52.629 C20.5764379,50.349 19.8024379,48.256 18.5884379,46.523 C16.8864379,47.334 15.5484379,48.959 15.4304379,51.345 C15.3034379,53.718 16.5304379,56.298 18.5524379,58.087 C20.0464379,56.902 20.7344379,54.896 20.6604379,52.629 M12.3984379,51.943 C11.1754379,49.805 9.52843788,47.913 7.52543788,46.678 C5.52943788,45.455 3.53543788,45.17 1.95343788,45.993 C2.77143788,48.67 4.60943788,51.077 6.81743788,52.22 C9.03343788,53.376 11.0444379,53.07 12.3984379,51.943 M3.58943788,44.054 C5.38743788,45.446 7.26043788,45.512 8.69943788,44.733 C7.99143788,42.614 6.82343788,40.637 5.20843788,39.205 C3.59643788,37.783 1.82043788,37.217 0.242437879,37.709 C0.547437879,40.236 1.79543788,42.674 3.58943788,44.054 M11.4694379,54.081 C9.08543788,53.157 6.91543788,53.228 5.41543788,54.415 C6.85743788,57.149 9.37443788,59.396 12.0034379,60.188 C14.6454379,60.994 16.7184379,60.25 17.8784379,58.76 C16.0444379,56.713 13.8644379,55.016 11.4694379,54.081 M6.99543788,22.538 C8.21243788,22.876 9.56143788,22.52 10.7314379,21.577 C11.9044379,20.628 12.6834379,19.295 13.0504379,17.86 C11.9034379,17.35 10.5064379,17.417 9.24143788,18.348 C7.97843788,19.273 7.15943788,20.877 6.99543788,22.538 M15.1044379,8.743 C16.2734379,8.323 17.2704379,7.472 17.9804379,6.425 C17.2584379,5.732 16.1724379,5.436 14.9434379,5.828 C13.7174379,6.216 12.6354379,7.224 12.0174379,8.446 C12.8244379,9.048 13.9384379,9.16 15.1044379,8.743 M12.3044379,15.043 C13.5024379,14.37 14.4154379,13.276 14.9764379,12.024 C14.0384379,11.398 12.7844379,11.26 11.5114379,11.908 C10.2424379,12.55 9.25743788,13.857 8.83743788,15.312 C9.85843788,15.809 11.1094379,15.711 12.3044379,15.043 M16.7474379,2.923 C17.5284379,2.013 18.0354379,0.986 18.2384379,0 C17.2544379,0.199 16.2074379,0.807 15.3894379,1.761 C14.5704379,2.714 14.1444379,3.823 14.1124379,4.805 C15.0414379,4.475 15.9654379,3.834 16.7474379,2.923 M13.0144379,40.868 C13.7194379,39.06 13.7724379,37.137 13.3224379,35.358 C11.6944379,35.494 10.1214379,36.403 9.26243788,38.247 C8.40243788,40.078 8.51743788,42.442 9.46443788,44.427 C11.0514379,43.982 12.3074379,42.666 13.0144379,40.868 M11.5824379,8.191 C12.3504379,7.041 12.8494379,5.677 12.8754379,4.339 C12.8984379,3.005 12.4194379,1.965 11.5504379,1.452 C10.5384379,2.618 9.91943788,4.123 9.96243788,5.488 C10.0024379,6.858 10.6644379,7.787 11.5824379,8.191 M11.1224379,34.655 C12.0564379,33.126 12.4064379,31.369 12.2654379,29.661 C10.7634379,29.536 9.19643788,30.132 8.13043788,31.673 C7.06443788,33.204 6.79143788,35.352 7.31243788,37.29 C8.82543788,37.151 10.1884379,36.175 11.1224379,34.655 M16.1494379,46.94 C16.5214379,44.873 16.2024379,42.833 15.3944379,41.04 C13.6934379,41.49 12.1884379,42.747 11.6404379,44.879 C11.0864379,47 11.6984379,49.517 13.1444379,51.46 C14.7334379,50.663 15.7724379,48.995 16.1494379,46.94 M6.48843788,29.929 C7.87443788,30.053 9.26343788,29.402 10.3494379,28.171 C11.4374379,26.932 12.0284379,25.375 12.1604379,23.785 C10.8224379,23.443 9.31743788,23.756 8.11943788,24.989 C6.92143788,26.213 6.33743788,28.103 6.48843788,29.929"
                                      id="Left"></path>
                            </g>
                        </g>
                    </svg>
                    <div class="instrument-awards__body">
                        <h5 class="instrument-awards__title">
                            BEST CFD BROKER 2020
                        </h5>
                        <p class="instrument-awards__text">
                            Brokerwahl.de CFD Broker of the Year 2019 - 2020 First Place
                        </p>
                    </div>
                    <svg aria-label="Award icon" width="25px" height="65px" viewBox="0 0 25 65" version="1.1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="miscs/awards/award-light" transform="translate(-235.000000, 0.000000)" fill="#FFFFFF">
                                <path d="M240.792438,29.941 C240.870438,28.086 240.509438,26.19 239.620438,24.612 C238.731438,23.043 237.459438,22.118 236.065438,22.076 C235.629438,24.132 235.934438,26.356 236.951438,27.933 C237.968438,29.518 239.421438,30.121 240.792438,29.941 M241.566438,37.44 C241.285438,35.422 240.542438,33.452 239.295438,31.912 C238.052438,30.382 236.519438,29.608 235.009438,29.814 C234.906438,32.127 235.650438,34.495 237.048438,36.012 C238.448438,37.539 240.130438,37.903 241.566438,37.44 M241.372438,22.435 C241.743438,20.787 241.720438,19.025 241.167438,17.473 C240.613438,15.928 239.611438,14.911 238.369438,14.663 C237.672438,16.433 237.603438,18.457 238.261438,20.022 C238.919438,21.595 240.118438,22.371 241.372438,22.435 M259.518438,62.568 C257.854438,61.483 256.628438,60.369 255.552438,59.327 C255.156438,58.943 254.522438,58.954 254.138438,59.351 C253.754438,59.747 253.765438,60.38 254.162438,60.765 C255.254438,61.822 256.615438,63.063 258.425438,64.243 C258.594438,64.353 258.783438,64.405 258.971438,64.405 C259.297438,64.405 259.618438,64.246 259.809438,63.952 C260.111438,63.489 259.980438,62.869 259.518438,62.568 M243.302438,15.119 C243.904438,13.711 244.169438,12.13 243.923438,10.661 C243.676438,9.197 242.941438,8.142 241.878438,7.737 C240.990438,9.206 240.612438,10.985 240.944438,12.477 C241.274438,13.975 242.204438,14.859 243.302438,15.119 M255.660438,52.629 C255.576438,50.349 254.802438,48.256 253.588438,46.523 C251.886438,47.334 250.548438,48.959 250.430438,51.345 C250.303438,53.718 251.530438,56.298 253.552438,58.087 C255.046438,56.902 255.734438,54.896 255.660438,52.629 M247.398438,51.943 C246.175438,49.805 244.528438,47.913 242.525438,46.678 C240.529438,45.455 238.535438,45.17 236.953438,45.993 C237.771438,48.67 239.609438,51.077 241.817438,52.22 C244.033438,53.376 246.044438,53.07 247.398438,51.943 M238.589438,44.054 C240.387438,45.446 242.260438,45.512 243.699438,44.733 C242.991438,42.614 241.823438,40.637 240.208438,39.205 C238.596438,37.783 236.820438,37.217 235.242438,37.709 C235.547438,40.236 236.795438,42.674 238.589438,44.054 M246.469438,54.081 C244.085438,53.157 241.915438,53.228 240.415438,54.415 C241.857438,57.149 244.374438,59.396 247.003438,60.188 C249.645438,60.994 251.718438,60.25 252.878438,58.76 C251.044438,56.713 248.864438,55.016 246.469438,54.081 M241.995438,22.538 C243.212438,22.876 244.561438,22.52 245.731438,21.577 C246.904438,20.628 247.683438,19.295 248.050438,17.86 C246.903438,17.35 245.506438,17.417 244.241438,18.348 C242.978438,19.273 242.159438,20.877 241.995438,22.538 M250.104438,8.743 C251.273438,8.323 252.270438,7.472 252.980438,6.425 C252.258438,5.732 251.172438,5.436 249.943438,5.828 C248.717438,6.216 247.635438,7.224 247.017438,8.446 C247.824438,9.048 248.938438,9.16 250.104438,8.743 M247.304438,15.043 C248.502438,14.37 249.415438,13.276 249.976438,12.024 C249.038438,11.398 247.784438,11.26 246.511438,11.908 C245.242438,12.55 244.257438,13.857 243.837438,15.312 C244.858438,15.809 246.109438,15.711 247.304438,15.043 M251.747438,2.923 C252.528438,2.013 253.035438,0.986 253.238438,0 C252.254438,0.199 251.207438,0.807 250.389438,1.761 C249.570438,2.714 249.144438,3.823 249.112438,4.805 C250.041438,4.475 250.965438,3.834 251.747438,2.923 M248.014438,40.868 C248.719438,39.06 248.772438,37.137 248.322438,35.358 C246.694438,35.494 245.121438,36.403 244.262438,38.247 C243.402438,40.078 243.517438,42.442 244.464438,44.427 C246.051438,43.982 247.307438,42.666 248.014438,40.868 M246.582438,8.191 C247.350438,7.041 247.849438,5.677 247.875438,4.339 C247.898438,3.005 247.419438,1.965 246.550438,1.452 C245.538438,2.618 244.919438,4.123 244.962438,5.488 C245.002438,6.858 245.664438,7.787 246.582438,8.191 M246.122438,34.655 C247.056438,33.126 247.406438,31.369 247.265438,29.661 C245.763438,29.536 244.196438,30.132 243.130438,31.673 C242.064438,33.204 241.791438,35.352 242.312438,37.29 C243.825438,37.151 245.188438,36.175 246.122438,34.655 M251.149438,46.94 C251.521438,44.873 251.202438,42.833 250.394438,41.04 C248.693438,41.49 247.188438,42.747 246.640438,44.879 C246.086438,47 246.698438,49.517 248.144438,51.46 C249.733438,50.663 250.772438,48.995 251.149438,46.94 M241.488438,29.929 C242.874438,30.053 244.263438,29.402 245.349438,28.171 C246.437438,26.932 247.028438,25.375 247.160438,23.785 C245.822438,23.443 244.317438,23.756 243.119438,24.989 C241.921438,26.213 241.337438,28.103 241.488438,29.929"
                                      id="Right" transform="translate(247.486015, 32.202500) scale(-1, 1) translate(-247.486015, -32.202500) "></path>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="instrument-awards__item">
                <div class="instrument-awards__item-flex-cont">
                    <svg aria-label="Award icon" width="25px" height="65px" viewBox="0 0 25 65" version="1.1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="miscs/awards/award-light" fill="#FFFFFF">
                                <path d="M5.79243788,29.941 C5.87043788,28.086 5.50943788,26.19 4.62043788,24.612 C3.73143788,23.043 2.45943788,22.118 1.06543788,22.076 C0.629437879,24.132 0.934437879,26.356 1.95143788,27.933 C2.96843788,29.518 4.42143788,30.121 5.79243788,29.941 M6.56643788,37.44 C6.28543788,35.422 5.54243788,33.452 4.29543788,31.912 C3.05243788,30.382 1.51943788,29.608 0.00943787885,29.814 C-0.0935621211,32.127 0.650437879,34.495 2.04843788,36.012 C3.44843788,37.539 5.13043788,37.903 6.56643788,37.44 M6.37243788,22.435 C6.74343788,20.787 6.72043788,19.025 6.16743788,17.473 C5.61343788,15.928 4.61143788,14.911 3.36943788,14.663 C2.67243788,16.433 2.60343788,18.457 3.26143788,20.022 C3.91943788,21.595 5.11843788,22.371 6.37243788,22.435 M24.5184379,62.568 C22.8544379,61.483 21.6284379,60.369 20.5524379,59.327 C20.1564379,58.943 19.5224379,58.954 19.1384379,59.351 C18.7544379,59.747 18.7654379,60.38 19.1624379,60.765 C20.2544379,61.822 21.6154379,63.063 23.4254379,64.243 C23.5944379,64.353 23.7834379,64.405 23.9714379,64.405 C24.2974379,64.405 24.6184379,64.246 24.8094379,63.952 C25.1114379,63.489 24.9804379,62.869 24.5184379,62.568 M8.30243788,15.119 C8.90443788,13.711 9.16943788,12.13 8.92343788,10.661 C8.67643788,9.197 7.94143788,8.142 6.87843788,7.737 C5.99043788,9.206 5.61243788,10.985 5.94443788,12.477 C6.27443788,13.975 7.20443788,14.859 8.30243788,15.119 M20.6604379,52.629 C20.5764379,50.349 19.8024379,48.256 18.5884379,46.523 C16.8864379,47.334 15.5484379,48.959 15.4304379,51.345 C15.3034379,53.718 16.5304379,56.298 18.5524379,58.087 C20.0464379,56.902 20.7344379,54.896 20.6604379,52.629 M12.3984379,51.943 C11.1754379,49.805 9.52843788,47.913 7.52543788,46.678 C5.52943788,45.455 3.53543788,45.17 1.95343788,45.993 C2.77143788,48.67 4.60943788,51.077 6.81743788,52.22 C9.03343788,53.376 11.0444379,53.07 12.3984379,51.943 M3.58943788,44.054 C5.38743788,45.446 7.26043788,45.512 8.69943788,44.733 C7.99143788,42.614 6.82343788,40.637 5.20843788,39.205 C3.59643788,37.783 1.82043788,37.217 0.242437879,37.709 C0.547437879,40.236 1.79543788,42.674 3.58943788,44.054 M11.4694379,54.081 C9.08543788,53.157 6.91543788,53.228 5.41543788,54.415 C6.85743788,57.149 9.37443788,59.396 12.0034379,60.188 C14.6454379,60.994 16.7184379,60.25 17.8784379,58.76 C16.0444379,56.713 13.8644379,55.016 11.4694379,54.081 M6.99543788,22.538 C8.21243788,22.876 9.56143788,22.52 10.7314379,21.577 C11.9044379,20.628 12.6834379,19.295 13.0504379,17.86 C11.9034379,17.35 10.5064379,17.417 9.24143788,18.348 C7.97843788,19.273 7.15943788,20.877 6.99543788,22.538 M15.1044379,8.743 C16.2734379,8.323 17.2704379,7.472 17.9804379,6.425 C17.2584379,5.732 16.1724379,5.436 14.9434379,5.828 C13.7174379,6.216 12.6354379,7.224 12.0174379,8.446 C12.8244379,9.048 13.9384379,9.16 15.1044379,8.743 M12.3044379,15.043 C13.5024379,14.37 14.4154379,13.276 14.9764379,12.024 C14.0384379,11.398 12.7844379,11.26 11.5114379,11.908 C10.2424379,12.55 9.25743788,13.857 8.83743788,15.312 C9.85843788,15.809 11.1094379,15.711 12.3044379,15.043 M16.7474379,2.923 C17.5284379,2.013 18.0354379,0.986 18.2384379,0 C17.2544379,0.199 16.2074379,0.807 15.3894379,1.761 C14.5704379,2.714 14.1444379,3.823 14.1124379,4.805 C15.0414379,4.475 15.9654379,3.834 16.7474379,2.923 M13.0144379,40.868 C13.7194379,39.06 13.7724379,37.137 13.3224379,35.358 C11.6944379,35.494 10.1214379,36.403 9.26243788,38.247 C8.40243788,40.078 8.51743788,42.442 9.46443788,44.427 C11.0514379,43.982 12.3074379,42.666 13.0144379,40.868 M11.5824379,8.191 C12.3504379,7.041 12.8494379,5.677 12.8754379,4.339 C12.8984379,3.005 12.4194379,1.965 11.5504379,1.452 C10.5384379,2.618 9.91943788,4.123 9.96243788,5.488 C10.0024379,6.858 10.6644379,7.787 11.5824379,8.191 M11.1224379,34.655 C12.0564379,33.126 12.4064379,31.369 12.2654379,29.661 C10.7634379,29.536 9.19643788,30.132 8.13043788,31.673 C7.06443788,33.204 6.79143788,35.352 7.31243788,37.29 C8.82543788,37.151 10.1884379,36.175 11.1224379,34.655 M16.1494379,46.94 C16.5214379,44.873 16.2024379,42.833 15.3944379,41.04 C13.6934379,41.49 12.1884379,42.747 11.6404379,44.879 C11.0864379,47 11.6984379,49.517 13.1444379,51.46 C14.7334379,50.663 15.7724379,48.995 16.1494379,46.94 M6.48843788,29.929 C7.87443788,30.053 9.26343788,29.402 10.3494379,28.171 C11.4374379,26.932 12.0284379,25.375 12.1604379,23.785 C10.8224379,23.443 9.31743788,23.756 8.11943788,24.989 C6.92143788,26.213 6.33743788,28.103 6.48843788,29.929"
                                      id="Left"></path>
                            </g>
                        </g>
                    </svg>
                    <div class="instrument-awards__body">
                        <h5 class="instrument-awards__title">
                            BEST FOREX BROKER 2019
                        </h5>
                        <p class="instrument-awards__text">
                            Brokervergleich Best Forex Broker 2016 - 2019 First Place
                        </p>
                    </div>
                    <svg aria-label="Award icon" width="25px" height="65px" viewBox="0 0 25 65" version="1.1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="miscs/awards/award-light" transform="translate(-235.000000, 0.000000)" fill="#FFFFFF">
                                <path d="M240.792438,29.941 C240.870438,28.086 240.509438,26.19 239.620438,24.612 C238.731438,23.043 237.459438,22.118 236.065438,22.076 C235.629438,24.132 235.934438,26.356 236.951438,27.933 C237.968438,29.518 239.421438,30.121 240.792438,29.941 M241.566438,37.44 C241.285438,35.422 240.542438,33.452 239.295438,31.912 C238.052438,30.382 236.519438,29.608 235.009438,29.814 C234.906438,32.127 235.650438,34.495 237.048438,36.012 C238.448438,37.539 240.130438,37.903 241.566438,37.44 M241.372438,22.435 C241.743438,20.787 241.720438,19.025 241.167438,17.473 C240.613438,15.928 239.611438,14.911 238.369438,14.663 C237.672438,16.433 237.603438,18.457 238.261438,20.022 C238.919438,21.595 240.118438,22.371 241.372438,22.435 M259.518438,62.568 C257.854438,61.483 256.628438,60.369 255.552438,59.327 C255.156438,58.943 254.522438,58.954 254.138438,59.351 C253.754438,59.747 253.765438,60.38 254.162438,60.765 C255.254438,61.822 256.615438,63.063 258.425438,64.243 C258.594438,64.353 258.783438,64.405 258.971438,64.405 C259.297438,64.405 259.618438,64.246 259.809438,63.952 C260.111438,63.489 259.980438,62.869 259.518438,62.568 M243.302438,15.119 C243.904438,13.711 244.169438,12.13 243.923438,10.661 C243.676438,9.197 242.941438,8.142 241.878438,7.737 C240.990438,9.206 240.612438,10.985 240.944438,12.477 C241.274438,13.975 242.204438,14.859 243.302438,15.119 M255.660438,52.629 C255.576438,50.349 254.802438,48.256 253.588438,46.523 C251.886438,47.334 250.548438,48.959 250.430438,51.345 C250.303438,53.718 251.530438,56.298 253.552438,58.087 C255.046438,56.902 255.734438,54.896 255.660438,52.629 M247.398438,51.943 C246.175438,49.805 244.528438,47.913 242.525438,46.678 C240.529438,45.455 238.535438,45.17 236.953438,45.993 C237.771438,48.67 239.609438,51.077 241.817438,52.22 C244.033438,53.376 246.044438,53.07 247.398438,51.943 M238.589438,44.054 C240.387438,45.446 242.260438,45.512 243.699438,44.733 C242.991438,42.614 241.823438,40.637 240.208438,39.205 C238.596438,37.783 236.820438,37.217 235.242438,37.709 C235.547438,40.236 236.795438,42.674 238.589438,44.054 M246.469438,54.081 C244.085438,53.157 241.915438,53.228 240.415438,54.415 C241.857438,57.149 244.374438,59.396 247.003438,60.188 C249.645438,60.994 251.718438,60.25 252.878438,58.76 C251.044438,56.713 248.864438,55.016 246.469438,54.081 M241.995438,22.538 C243.212438,22.876 244.561438,22.52 245.731438,21.577 C246.904438,20.628 247.683438,19.295 248.050438,17.86 C246.903438,17.35 245.506438,17.417 244.241438,18.348 C242.978438,19.273 242.159438,20.877 241.995438,22.538 M250.104438,8.743 C251.273438,8.323 252.270438,7.472 252.980438,6.425 C252.258438,5.732 251.172438,5.436 249.943438,5.828 C248.717438,6.216 247.635438,7.224 247.017438,8.446 C247.824438,9.048 248.938438,9.16 250.104438,8.743 M247.304438,15.043 C248.502438,14.37 249.415438,13.276 249.976438,12.024 C249.038438,11.398 247.784438,11.26 246.511438,11.908 C245.242438,12.55 244.257438,13.857 243.837438,15.312 C244.858438,15.809 246.109438,15.711 247.304438,15.043 M251.747438,2.923 C252.528438,2.013 253.035438,0.986 253.238438,0 C252.254438,0.199 251.207438,0.807 250.389438,1.761 C249.570438,2.714 249.144438,3.823 249.112438,4.805 C250.041438,4.475 250.965438,3.834 251.747438,2.923 M248.014438,40.868 C248.719438,39.06 248.772438,37.137 248.322438,35.358 C246.694438,35.494 245.121438,36.403 244.262438,38.247 C243.402438,40.078 243.517438,42.442 244.464438,44.427 C246.051438,43.982 247.307438,42.666 248.014438,40.868 M246.582438,8.191 C247.350438,7.041 247.849438,5.677 247.875438,4.339 C247.898438,3.005 247.419438,1.965 246.550438,1.452 C245.538438,2.618 244.919438,4.123 244.962438,5.488 C245.002438,6.858 245.664438,7.787 246.582438,8.191 M246.122438,34.655 C247.056438,33.126 247.406438,31.369 247.265438,29.661 C245.763438,29.536 244.196438,30.132 243.130438,31.673 C242.064438,33.204 241.791438,35.352 242.312438,37.29 C243.825438,37.151 245.188438,36.175 246.122438,34.655 M251.149438,46.94 C251.521438,44.873 251.202438,42.833 250.394438,41.04 C248.693438,41.49 247.188438,42.747 246.640438,44.879 C246.086438,47 246.698438,49.517 248.144438,51.46 C249.733438,50.663 250.772438,48.995 251.149438,46.94 M241.488438,29.929 C242.874438,30.053 244.263438,29.402 245.349438,28.171 C246.437438,26.932 247.028438,25.375 247.160438,23.785 C245.822438,23.443 244.317438,23.756 243.119438,24.989 C241.921438,26.213 241.337438,28.103 241.488438,29.929"
                                      id="Right" transform="translate(247.486015, 32.202500) scale(-1, 1) translate(-247.486015, -32.202500) "></path>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="instrument-awards__item">
                <div class="instrument-awards__item-flex-cont">
                    <svg aria-label="Award icon" width="25px" height="65px" viewBox="0 0 25 65" version="1.1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="miscs/awards/award-light" fill="#FFFFFF">
                                <path d="M5.79243788,29.941 C5.87043788,28.086 5.50943788,26.19 4.62043788,24.612 C3.73143788,23.043 2.45943788,22.118 1.06543788,22.076 C0.629437879,24.132 0.934437879,26.356 1.95143788,27.933 C2.96843788,29.518 4.42143788,30.121 5.79243788,29.941 M6.56643788,37.44 C6.28543788,35.422 5.54243788,33.452 4.29543788,31.912 C3.05243788,30.382 1.51943788,29.608 0.00943787885,29.814 C-0.0935621211,32.127 0.650437879,34.495 2.04843788,36.012 C3.44843788,37.539 5.13043788,37.903 6.56643788,37.44 M6.37243788,22.435 C6.74343788,20.787 6.72043788,19.025 6.16743788,17.473 C5.61343788,15.928 4.61143788,14.911 3.36943788,14.663 C2.67243788,16.433 2.60343788,18.457 3.26143788,20.022 C3.91943788,21.595 5.11843788,22.371 6.37243788,22.435 M24.5184379,62.568 C22.8544379,61.483 21.6284379,60.369 20.5524379,59.327 C20.1564379,58.943 19.5224379,58.954 19.1384379,59.351 C18.7544379,59.747 18.7654379,60.38 19.1624379,60.765 C20.2544379,61.822 21.6154379,63.063 23.4254379,64.243 C23.5944379,64.353 23.7834379,64.405 23.9714379,64.405 C24.2974379,64.405 24.6184379,64.246 24.8094379,63.952 C25.1114379,63.489 24.9804379,62.869 24.5184379,62.568 M8.30243788,15.119 C8.90443788,13.711 9.16943788,12.13 8.92343788,10.661 C8.67643788,9.197 7.94143788,8.142 6.87843788,7.737 C5.99043788,9.206 5.61243788,10.985 5.94443788,12.477 C6.27443788,13.975 7.20443788,14.859 8.30243788,15.119 M20.6604379,52.629 C20.5764379,50.349 19.8024379,48.256 18.5884379,46.523 C16.8864379,47.334 15.5484379,48.959 15.4304379,51.345 C15.3034379,53.718 16.5304379,56.298 18.5524379,58.087 C20.0464379,56.902 20.7344379,54.896 20.6604379,52.629 M12.3984379,51.943 C11.1754379,49.805 9.52843788,47.913 7.52543788,46.678 C5.52943788,45.455 3.53543788,45.17 1.95343788,45.993 C2.77143788,48.67 4.60943788,51.077 6.81743788,52.22 C9.03343788,53.376 11.0444379,53.07 12.3984379,51.943 M3.58943788,44.054 C5.38743788,45.446 7.26043788,45.512 8.69943788,44.733 C7.99143788,42.614 6.82343788,40.637 5.20843788,39.205 C3.59643788,37.783 1.82043788,37.217 0.242437879,37.709 C0.547437879,40.236 1.79543788,42.674 3.58943788,44.054 M11.4694379,54.081 C9.08543788,53.157 6.91543788,53.228 5.41543788,54.415 C6.85743788,57.149 9.37443788,59.396 12.0034379,60.188 C14.6454379,60.994 16.7184379,60.25 17.8784379,58.76 C16.0444379,56.713 13.8644379,55.016 11.4694379,54.081 M6.99543788,22.538 C8.21243788,22.876 9.56143788,22.52 10.7314379,21.577 C11.9044379,20.628 12.6834379,19.295 13.0504379,17.86 C11.9034379,17.35 10.5064379,17.417 9.24143788,18.348 C7.97843788,19.273 7.15943788,20.877 6.99543788,22.538 M15.1044379,8.743 C16.2734379,8.323 17.2704379,7.472 17.9804379,6.425 C17.2584379,5.732 16.1724379,5.436 14.9434379,5.828 C13.7174379,6.216 12.6354379,7.224 12.0174379,8.446 C12.8244379,9.048 13.9384379,9.16 15.1044379,8.743 M12.3044379,15.043 C13.5024379,14.37 14.4154379,13.276 14.9764379,12.024 C14.0384379,11.398 12.7844379,11.26 11.5114379,11.908 C10.2424379,12.55 9.25743788,13.857 8.83743788,15.312 C9.85843788,15.809 11.1094379,15.711 12.3044379,15.043 M16.7474379,2.923 C17.5284379,2.013 18.0354379,0.986 18.2384379,0 C17.2544379,0.199 16.2074379,0.807 15.3894379,1.761 C14.5704379,2.714 14.1444379,3.823 14.1124379,4.805 C15.0414379,4.475 15.9654379,3.834 16.7474379,2.923 M13.0144379,40.868 C13.7194379,39.06 13.7724379,37.137 13.3224379,35.358 C11.6944379,35.494 10.1214379,36.403 9.26243788,38.247 C8.40243788,40.078 8.51743788,42.442 9.46443788,44.427 C11.0514379,43.982 12.3074379,42.666 13.0144379,40.868 M11.5824379,8.191 C12.3504379,7.041 12.8494379,5.677 12.8754379,4.339 C12.8984379,3.005 12.4194379,1.965 11.5504379,1.452 C10.5384379,2.618 9.91943788,4.123 9.96243788,5.488 C10.0024379,6.858 10.6644379,7.787 11.5824379,8.191 M11.1224379,34.655 C12.0564379,33.126 12.4064379,31.369 12.2654379,29.661 C10.7634379,29.536 9.19643788,30.132 8.13043788,31.673 C7.06443788,33.204 6.79143788,35.352 7.31243788,37.29 C8.82543788,37.151 10.1884379,36.175 11.1224379,34.655 M16.1494379,46.94 C16.5214379,44.873 16.2024379,42.833 15.3944379,41.04 C13.6934379,41.49 12.1884379,42.747 11.6404379,44.879 C11.0864379,47 11.6984379,49.517 13.1444379,51.46 C14.7334379,50.663 15.7724379,48.995 16.1494379,46.94 M6.48843788,29.929 C7.87443788,30.053 9.26343788,29.402 10.3494379,28.171 C11.4374379,26.932 12.0284379,25.375 12.1604379,23.785 C10.8224379,23.443 9.31743788,23.756 8.11943788,24.989 C6.92143788,26.213 6.33743788,28.103 6.48843788,29.929"
                                      id="Left"></path>
                            </g>
                        </g>
                    </svg>
                    <div class="instrument-awards__body">
                        <h5 class="instrument-awards__title">
                            BEST FOREX/CFD BROKER 2018
                        </h5>
                        <p class="instrument-awards__text">
                            Traders` Magazine ES Award in the category &quot;Best CFD Broker 2018&quot; &amp; &quot;Best Forex Broker 2018&quot;
                        </p>
                    </div>
                    <svg aria-label="Award icon" width="25px" height="65px" viewBox="0 0 25 65" version="1.1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="miscs/awards/award-light" transform="translate(-235.000000, 0.000000)" fill="#FFFFFF">
                                <path d="M240.792438,29.941 C240.870438,28.086 240.509438,26.19 239.620438,24.612 C238.731438,23.043 237.459438,22.118 236.065438,22.076 C235.629438,24.132 235.934438,26.356 236.951438,27.933 C237.968438,29.518 239.421438,30.121 240.792438,29.941 M241.566438,37.44 C241.285438,35.422 240.542438,33.452 239.295438,31.912 C238.052438,30.382 236.519438,29.608 235.009438,29.814 C234.906438,32.127 235.650438,34.495 237.048438,36.012 C238.448438,37.539 240.130438,37.903 241.566438,37.44 M241.372438,22.435 C241.743438,20.787 241.720438,19.025 241.167438,17.473 C240.613438,15.928 239.611438,14.911 238.369438,14.663 C237.672438,16.433 237.603438,18.457 238.261438,20.022 C238.919438,21.595 240.118438,22.371 241.372438,22.435 M259.518438,62.568 C257.854438,61.483 256.628438,60.369 255.552438,59.327 C255.156438,58.943 254.522438,58.954 254.138438,59.351 C253.754438,59.747 253.765438,60.38 254.162438,60.765 C255.254438,61.822 256.615438,63.063 258.425438,64.243 C258.594438,64.353 258.783438,64.405 258.971438,64.405 C259.297438,64.405 259.618438,64.246 259.809438,63.952 C260.111438,63.489 259.980438,62.869 259.518438,62.568 M243.302438,15.119 C243.904438,13.711 244.169438,12.13 243.923438,10.661 C243.676438,9.197 242.941438,8.142 241.878438,7.737 C240.990438,9.206 240.612438,10.985 240.944438,12.477 C241.274438,13.975 242.204438,14.859 243.302438,15.119 M255.660438,52.629 C255.576438,50.349 254.802438,48.256 253.588438,46.523 C251.886438,47.334 250.548438,48.959 250.430438,51.345 C250.303438,53.718 251.530438,56.298 253.552438,58.087 C255.046438,56.902 255.734438,54.896 255.660438,52.629 M247.398438,51.943 C246.175438,49.805 244.528438,47.913 242.525438,46.678 C240.529438,45.455 238.535438,45.17 236.953438,45.993 C237.771438,48.67 239.609438,51.077 241.817438,52.22 C244.033438,53.376 246.044438,53.07 247.398438,51.943 M238.589438,44.054 C240.387438,45.446 242.260438,45.512 243.699438,44.733 C242.991438,42.614 241.823438,40.637 240.208438,39.205 C238.596438,37.783 236.820438,37.217 235.242438,37.709 C235.547438,40.236 236.795438,42.674 238.589438,44.054 M246.469438,54.081 C244.085438,53.157 241.915438,53.228 240.415438,54.415 C241.857438,57.149 244.374438,59.396 247.003438,60.188 C249.645438,60.994 251.718438,60.25 252.878438,58.76 C251.044438,56.713 248.864438,55.016 246.469438,54.081 M241.995438,22.538 C243.212438,22.876 244.561438,22.52 245.731438,21.577 C246.904438,20.628 247.683438,19.295 248.050438,17.86 C246.903438,17.35 245.506438,17.417 244.241438,18.348 C242.978438,19.273 242.159438,20.877 241.995438,22.538 M250.104438,8.743 C251.273438,8.323 252.270438,7.472 252.980438,6.425 C252.258438,5.732 251.172438,5.436 249.943438,5.828 C248.717438,6.216 247.635438,7.224 247.017438,8.446 C247.824438,9.048 248.938438,9.16 250.104438,8.743 M247.304438,15.043 C248.502438,14.37 249.415438,13.276 249.976438,12.024 C249.038438,11.398 247.784438,11.26 246.511438,11.908 C245.242438,12.55 244.257438,13.857 243.837438,15.312 C244.858438,15.809 246.109438,15.711 247.304438,15.043 M251.747438,2.923 C252.528438,2.013 253.035438,0.986 253.238438,0 C252.254438,0.199 251.207438,0.807 250.389438,1.761 C249.570438,2.714 249.144438,3.823 249.112438,4.805 C250.041438,4.475 250.965438,3.834 251.747438,2.923 M248.014438,40.868 C248.719438,39.06 248.772438,37.137 248.322438,35.358 C246.694438,35.494 245.121438,36.403 244.262438,38.247 C243.402438,40.078 243.517438,42.442 244.464438,44.427 C246.051438,43.982 247.307438,42.666 248.014438,40.868 M246.582438,8.191 C247.350438,7.041 247.849438,5.677 247.875438,4.339 C247.898438,3.005 247.419438,1.965 246.550438,1.452 C245.538438,2.618 244.919438,4.123 244.962438,5.488 C245.002438,6.858 245.664438,7.787 246.582438,8.191 M246.122438,34.655 C247.056438,33.126 247.406438,31.369 247.265438,29.661 C245.763438,29.536 244.196438,30.132 243.130438,31.673 C242.064438,33.204 241.791438,35.352 242.312438,37.29 C243.825438,37.151 245.188438,36.175 246.122438,34.655 M251.149438,46.94 C251.521438,44.873 251.202438,42.833 250.394438,41.04 C248.693438,41.49 247.188438,42.747 246.640438,44.879 C246.086438,47 246.698438,49.517 248.144438,51.46 C249.733438,50.663 250.772438,48.995 251.149438,46.94 M241.488438,29.929 C242.874438,30.053 244.263438,29.402 245.349438,28.171 C246.437438,26.932 247.028438,25.375 247.160438,23.785 C245.822438,23.443 244.317438,23.756 243.119438,24.989 C241.921438,26.213 241.337438,28.103 241.488438,29.929"
                                      id="Right" transform="translate(247.486015, 32.202500) scale(-1, 1) translate(-247.486015, -32.202500) "></path>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>
    </div>
    <script type="text/javascript" src="https://dce5jani6jm7e.cloudfront.net/campaign/de_elections/js/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.min.js"></script>

    <script>
        $(document).ready(function () {
            $('.instrument-awards__slider').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                arrows: false,
                infinite: false,
                responsive: [{
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        dots: true
                    }
                }]
            });

        });

        var vueQuotesConfig = {
            'pairs': "EURUSD,GBPUSD,USDCHF,USDJPY,EURJPY",
            'fullPathUrl': "https://admiralmarkets.com/start-trading/contract-specifications/instrument",
            'defaultQuoteUrl': "https://admiralmarkets.com/api/ajax/quotes_cfd?regulator=cysec",
            'tokenUrl': "https://admiralmarkets.com/api/ajax/quotes_token?regulator=cysec",
            'showBuyBtn': true,
            'showSellBtn': true,
            'quotesUpdateTimeMs': 3000,
            'translations': {
                pricesAboveParagraph: "Prices above are indicative only",
                showAllInstruments: "Show all instruments",
                sellButton: 'Sell',
                buyButton: 'Buy'
            },

            'links': {
                showInstruments: 'https://admiralmarkets.com/start-trading/contract-specifications?regulator=cysec',
                sellButtonLink: 'https://admiralmarkets.com/login?regulator=cysec',
                buyButtonLink: 'https://admiralmarkets.com/login?regulator=cysec'
            },

            tabs: [
                {name: 'FOREX', pairs: 'EURUSD,GBPUSD,USDCHF,USDJPY'},
                {name: 'INDICES', pairs: '[CAC40],[DJI30],[SP500],[FTSE100],[DAX30]'},
                {name: 'COMMODITIES', pairs: 'GOLD,WTI,SILVER,NGAS'},
                {name: 'SHARES', pairs: '#AAPL,#GOOG,#FB,#BNP,#BMW'},
                {name: 'ETFS', pairs: '#QQQ,#XLF,#GDX,#AMLP,#SPXU'},
                {name: 'BONDS', pairs: '#USTNote_H1,#Bund_H1' },

                            ],

            defaultActiveTabIndex: 0,
            spreadValues: {"[CAC40]":1,"[DAX30]":1,"[DJI30]":1,"BRENT":1,"GOLD":1,"WTI":1,"AUDUSD":10000,"EURJPY":100,"EURUSD":10000,"GBPUSD":10000,"USDCHF":10000,"USDCAD":10000,"USDJPY":100,"BTCUSD":1,"[SP500]":1,"[FTSE100]":1,"SILVER":1,"NGAS":1,"#AAPL":100,"#GOOG":100,"#FB":100,"#BNP":1000,"#BMW":1000,"#GDX":100,"#AMLP":100,"#SPXU":100,"_ustnote":100,"_bund":100,"#XLF":100,"#QQQ":100,"#EEMUS":100,"#SPY":100,"EXS1":100,"ISF":1,"CSSMI":100,"BNKE":100,"DBXD":100,"[NQ100]":1},
            instrumentSlugs: {"#USTNote_H1":"_ustnote","#Bund_H1":"_bund"},
            instrumentNames: {"#USTNote_H1":"US 10Yr T-Note","#Bund_H1":"Bund"},
        };

        var switcher = $('#yes-no');

        $(function () {
            var $activeSwitch = $('.switch-active', '#vue-slide-thumb');
            var $inactiveSwitch = $('.switch-inactive', '#vue-slide-thumb');

            if (!switcher.is(':checked')) {
                $(".apply-now-already-client").show();
                $('.apply-now-not-client').hide();

                $activeSwitch.addClass('active');
                $inactiveSwitch.removeClass('active');
            }

            switcher.on('change load', function () {
                if ($(this).is(':checked')) {
                    $(".apply-now-already-client").show();
                    $('.apply-now-not-client').hide();

                    $activeSwitch.removeClass('active');
                    $inactiveSwitch.addClass('active');

                } else {
                    $(".apply-now-already-client").hide();
                    $('.apply-now-not-client').show();

                    $activeSwitch.addClass('active');
                    $inactiveSwitch.removeClass('active');
                }
            });
            switcher.change();

            $(".scroll-btn").on("click", function (e) {
                e.preventDefault();

                var id = $(this).data('scrollto'),
                    top = $(id).offset().top - 80;

                $('body,html').animate({scrollTop: top}, 1500);
            });


            $('.accordion .item', '#faq').click(function (e) {
                if ($(e.target).is('a')) {
                    return;
                }

                if (!$(this).hasClass('animation-in-progress')) {
                    e.preventDefault();
                    $(this).addClass('animation-in-progress');

                    var $content = $('.tab-content', $(this));
                    if ($(this).hasClass('active')) {
                        $(this).removeClass('active');
                    } else {
                        $(this).addClass('active');
                    }

                    var that = this;
                    $content.stop(false, true).slideToggle(400, function () {
                        $(that).removeClass('animation-in-progress');
                    });
                }
            });


            $(".open-list").click(function (e) {
                e.preventDefault();
                $(".why-us .benefits:last-of-type").toggle();
                $(".open-list").toggle();
            });

            var serviceTooltips = [].slice.call(
                document.querySelectorAll('#services .service-tooltip-trigger')
            );

            serviceTooltips.forEach(function(element) {
               element.addEventListener('click', function(event) {
                    event.preventDefault();
                    hideServiceTooltips();
                    showServiceTooltip($(this));
               });


               element.addEventListener('mouseover', function (event) {
                   hideServiceTooltips();
                   showServiceTooltip($(this));
               });

                element.addEventListener('mouseout', function (event) {
                    hideServiceTooltips();
                });
            });

            document.addEventListener('click', function(e) {
               if (!$(e.target).hasClass('service-tooltip-trigger')) {
                   hideServiceTooltips();
               }
            });
        });

        function showServiceTooltip($serviceTrigger) {
            var parent = $serviceTrigger.parents('.inner');
            var $tooltip = $('.tooltip', $(parent));

            if ($tooltip && $tooltip.length !== 0) {
                $tooltip.css('display', 'block');
                $tooltip.css('opacity', '1');
            }
        }

        function hideServiceTooltips() {
            var tooltips = [].slice.call(
                document.querySelectorAll('#services .tooltip')
            );

            tooltips.forEach(function(tooltip) {
                $(tooltip).css('display', 'none');
                $(tooltip).css('opacity', '0');
            });
        }
    </script>
            </div>

@endsection