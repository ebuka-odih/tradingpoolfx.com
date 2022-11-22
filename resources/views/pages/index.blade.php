@extends('pages.layouts.app2')
@section('content')
    <style>
        .trustwallet{
            background-image: linear-gradient(to bottom right,#0b65c6 50%,#105BAA 100%);
            color: #fff
        }
        .row2 {
            display: flex;
            flex-wrap: wrap;
            margin-right: -20px;
            margin-left: -20px;
        }

    </style>

    <div id="content" class="site-content">
        <a href="contact" class="support"><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80"><defs><style>.cls-1{fill:#fff;stroke:#fff;stroke-miterlimit:10;}</style></defs><polygon class="cls-1" points="52.05 27.44 43.77 36.52 44.96 36.98 53.22 27.9 52.05 27.44"/><path class="cls-1" d="M9.81,29.49a38.11,38.11,0,0,1,.54-4.15l0-.1.1,0c1.65-.41,3.14-.7,4.5-.9l1.68-1.69a48.63,48.63,0,0,0-7.07,1.31l-.42.11-.11.42A36.58,36.58,0,0,0,8.28,31Z"/><path class="cls-1" d="M26.65,38.37l0,0-6.46,4.52.2.53a30.58,30.58,0,0,0,16.2,16.92l.47.18,4.23-4.84h.07a21.47,21.47,0,0,1,11,3.23l1.07-1.06A22.68,22.68,0,0,0,41,54.24h-.41l-4,4.56-.11,0A29.73,29.73,0,0,1,22,43.57l0-.12.1-.07,5.77-4,.08-.15C28,39,30.51,34,26.7,23.85l-.1-.26-.24-.13a8.6,8.6,0,0,0-2-.63l-1.26,1.26a11.27,11.27,0,0,1,2.29.54l.07,0,0,.07c3,8.23,1.53,12.77,1.2,13.6Z"/><path class="cls-1" d="M39.73,71.6,41,70.32A36.91,36.91,0,0,1,19.15,58.65,37.26,37.26,0,0,1,9.93,37.31l-1.3,1.3a38.5,38.5,0,0,0,9.45,21A38,38,0,0,0,39.73,71.6Z"/><path class="cls-1" d="M53.54,64.75c-.43,3.82-1.67,5.44-2.14,5.93l0,0h0a31.38,31.38,0,0,1-3.44.17h-.45L46,72.31c.65,0,1.27,0,1.84,0a31.62,31.62,0,0,0,3.94-.21l.17,0,.14-.1c.13-.09,2.72-2,3-8.84Z"/><path class="cls-1" d="M71.72,40.85a33.05,33.05,0,0,0-57.3-22.61l1.07,1A31.68,31.68,0,1,1,60.35,63.94l1,1.07A33.41,33.41,0,0,0,71.72,40.85Z"/><path class="cls-1" d="M39.21,26.55H32.69v-1L35.3,23a19.64,19.64,0,0,0,1.58-1.73,4.69,4.69,0,0,0,.57-1,3.07,3.07,0,0,0,.19-1.06,1.67,1.67,0,0,0-.48-1.26,1.86,1.86,0,0,0-1.34-.46,3.46,3.46,0,0,0-1.17.2,4.85,4.85,0,0,0-1.24.74l-.6-.77a4.61,4.61,0,0,1,3-1.14,3.15,3.15,0,0,1,2.2.72,2.47,2.47,0,0,1,.79,1.93A3.61,3.61,0,0,1,38.26,21a11.51,11.51,0,0,1-2,2.34l-2.17,2.13v.05h5.1Z"/><path class="cls-1" d="M47.64,24.27H46.16v2.28H45.08V24.27H40.25v-1L45,16.56h1.19v6.68h1.48Zm-2.56-1v-3.3c0-.65,0-1.38.07-2.2h0a9.68,9.68,0,0,1-.61,1.08l-3.11,4.42Z"/><path class="cls-1" d="M56.19,39.68a3.69,3.69,0,0,1,2.48.78,2.71,2.71,0,0,1,.9,2.15,3.12,3.12,0,0,1-1,2.43,4,4,0,0,1-2.73.88,5,5,0,0,1-2.57-.54v-1.1a4,4,0,0,0,1.19.49,6.16,6.16,0,0,0,1.4.17,2.8,2.8,0,0,0,1.87-.57,2,2,0,0,0,.66-1.63c0-1.4-.85-2.09-2.56-2.09a10.19,10.19,0,0,0-1.73.19l-.59-.37.38-4.67h5v1h-4l-.26,3A7.68,7.68,0,0,1,56.19,39.68Z"/></svg><br />Contact</a>


        <section class="home_header_section">
            <div class="container pt-5 mt-5">
                <div class="row dfalcen">
                    <div class="col-md-6">
                        <h1>Trade CFDs on FX, Cryptos, Indices and more with a leading global MT4 broker</h1>
                        <div class="home_header_subtext mb-5">Start trading on low spreads with Metrics Trade Plc today and choose from over 1000 financial instruments.</div>
                        <a href="{{ route('register') }}" class=" btn rounded-btn green-btn" tabindex="0">Create account</a>
                        <div class="bottom-text">
                            <p><a href="{{ route('login') }}" rel="noopener" tabindex="0" class="bbtn_header">Login</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 text-right imageinrighthead">
                        <img width="400" height="596" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20400%20596'%3E%3C/svg%3E" alt="" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2021/07/first-slider_one-phone02_8cap_phone.png"/><noscript><img width="400" height="596" src="wp-content/uploads/sites/11/2021/07/first-slider_one-phone02_8cap_phone.png" alt=""/></noscript>
                    </div>
                </div>
            </div>
        </section>

        <section class="why-trade-with-us clearfix "  >
            <div class="container">
                <h2 class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.2s" style="animation-delay: 0.2s; opacity: 1;">Why trade with us</h2>
                <div class="description animated" data-animation="fadeInUpShorter" data-animation-delay="0.2s" style="animation-delay: 0.2s; opacity: 1;">
                    MT4 &amp; MT5 delivered on a rock-solid, reliable infrastructure enhanced with a transparent, personalised service.                    </div>

                <div class="usp-wrapper">
                    <div class="usp-slide">
                        <div class="usp eq-blocks">
                            <img width="150" height="150" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%20150'%3E%3C/svg%3E" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/07/Lightning-Fast-Execution.png" /><noscript><img width="150" height="150" src="wp-content/uploads/sites/11/2019/07/Lightning-Fast-Execution.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" /></noscript>                                                        <h3>Fast Execution</h3>
                            <div class="usp-content">Our execution servers are located in Equinix data centres, where most of the world's financial institutions are hosted, ensuring optimal performance at all times.</div>
                        </div>
                    </div>
                    <div class="usp-slide">
                        <div class="usp eq-blocks">
                            <img width="150" height="150" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%20150'%3E%3C/svg%3E" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/06/Trusted_Regulated_Broker.png" /><noscript><img width="150" height="150" src="wp-content/uploads/sites/11/2019/06/Trusted_Regulated_Broker.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" /></noscript>                                                        <h3>Multi jurisdiction regulation</h3>
                            <div class="usp-content">Established in Australia and now regulated in multiple jurisdictions.</div>
                        </div>
                    </div>
                    <div class="usp-slide">
                        <div class="usp eq-blocks">
                            <img width="150" height="150" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%20150'%3E%3C/svg%3E" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/07/Premium-Liquidity.png" /><noscript><img width="150" height="150" src="wp-content/uploads/sites/11/2019/07/Premium-Liquidity.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" /></noscript>                                                        <h3>Premium Liquidity</h3>
                            <div class="usp-content">Our pricing is aggregated from multiple top-tier liquidity providers, allowing you to trade on spreads from as low as 0.0 pips.</div>
                        </div>
                    </div>
                    <div class="usp-slide">
                        <div class="usp eq-blocks">
                            <img width="150" height="150" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%20150'%3E%3C/svg%3E" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/07/Complete-Transparency.png" /><noscript><img width="150" height="150" src="wp-content/uploads/sites/11/2019/07/Complete-Transparency.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" /></noscript>                                                        <h3>Complete Transparency</h3>
                            <div class="usp-content">Trade with us and receive direct market access with no dealing desk intervention or price manipulation. A fully transparent trading environment, at your fingertips.</div>
                        </div>
                    </div>
                    <div class="usp-slide">
                        <div class="usp eq-blocks">
                            <img width="150" height="150" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%20150'%3E%3C/svg%3E" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/08/Cutting_Edge_Technology.png" /><noscript><img width="150" height="150" src="wp-content/uploads/sites/11/2019/08/Cutting_Edge_Technology.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" /></noscript>                                                        <h3>MT4 &amp; MT5 Platforms</h3>
                            <div class="usp-content">Trade effortlessly on intuitive, market-leading platforms designed and built for traders worldwide via our cutting-edge technology infrastructure.</div>
                        </div>
                    </div>
                    <div class="usp-slide">
                        <div class="usp eq-blocks">
                            <img width="150" height="150" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%20150'%3E%3C/svg%3E" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/07/Dedicated_Customer_Support.png" /><noscript><img width="150" height="150" src="wp-content/uploads/sites/11/2019/07/Dedicated_Customer_Support.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" /></noscript>                                                        <h3>Personal Customer Support</h3>
                            <div class="usp-content">Find your feet with our two personalised account offerings. Our multilingual team is available to help you navigate the financial markets. You can trade at your own pace knowing we are only a phone call away.</div>
                        </div>
                    </div>
                    <div class="usp-slide">
                        <div class="usp eq-blocks">
                            <img width="150" height="150" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%20150'%3E%3C/svg%3E" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/07/Global_Market_Opportunities.png" /><noscript><img width="150" height="150" src="wp-content/uploads/sites/11/2019/07/Global_Market_Opportunities.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" /></noscript>                                                        <h3>Global Market Opportunities</h3>
                            <div class="usp-content">Expand your portfolio and discover over 1000 financial instruments across a range of CFD asset classes, including Forex, Indices, Commodities, Shares and Cryptocurrencies.</div>
                        </div>
                    </div>
                    <div class="usp-slide">
                        <div class="usp eq-blocks">
                            <img width="150" height="150" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%20150'%3E%3C/svg%3E" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/07/Various_Payment_Methods.png" /><noscript><img width="150" height="150" src="wp-content/uploads/sites/11/2019/07/Various_Payment_Methods.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" /></noscript>                                                        <h3>Fast Payment Methods</h3>
                            <div class="usp-content">Your money. Your choice. We offer a wide range of deposit and withdrawal methods to suit your needs.</div>
                        </div>
                    </div>
                    <div class="usp-slide">
                        <div class="usp eq-blocks">
                            <img width="150" height="150" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%20150'%3E%3C/svg%3E" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/08/Professional_Trading_Conditions.png" /><noscript><img width="150" height="150" src="wp-content/uploads/sites/11/2019/08/Professional_Trading_Conditions.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" /></noscript>                                                        <h3>Meeting Your Needs</h3>
                            <div class="usp-content">Whatever your level of experience, our trading environment is designed with you in mind. Rest assured you're getting the best possible trading conditions.</div>
                        </div>
                    </div>
                </div>

            </div>
        </section>


        <section class="tab_content home_tab_content text-center clearfix">
            <div class="container">
                <h2>Choose your trading  platform</h2>
                <div class="description">
                    Trade on MT4 across desktop and mobile or MT5 across webtrader, desktop and mobile, all on our powerful and secure technology infrastructure.                    </div>

                <nav class="nav-justified ">
                    <div class="nav nav-tabs " id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="tab_0-tab"
                           data-toggle="tab" href="#tab_0" role="tab"
                           aria-controls="tab_0"
                           aria-selected="true">MetaTrader 4</a>
                        <a class="nav-item nav-link " id="tab_1-tab"
                           data-toggle="tab" href="#tab_1" role="tab"
                           aria-controls="tab_1"
                           aria-selected="">MetaTrader 5</a>
                    </div>
                </nav>

                <div class="tab-content home-tab-content" id="nav-tabContent">
                    <div class="tab-pane fade active show"
                         id="tab_0"
                         role="tabpane_0" aria-labelledby="tab_0-tab">
                        <div class="container">
                            <div class="row top_space">
                                <div class="col-md-8">
                                    <img width="750" height="492" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20750%20492'%3E%3C/svg%3E" alt="Key features of MT4" data-lazy-src="wp-content/uploads/sites/11/2019/07/%d0%9cetaTrader4-devices.jpg" /><noscript><img width="750" height="492" src="wp-content/uploads/sites/11/2019/07/%d0%9cetaTrader4-devices.jpg" alt="Key features of MT4" /></noscript>                                            </div>
                                <div class="col-md-4 mt-5 content-part">
                                    <h3 class="text-left">Key features of MT4</h3>                                                <div class="list-style no"><ul>
                                            <li>Trade FX, Cryptos, Indices and Commodities</li>
                                            <li>Mobile &amp; Desktop</li>
                                            <li>Award-winning platform</li>
                                            <li>Instruments in 9 time-frames</li>
                                            <li>30 pre-installed indicators</li>
                                        </ul>
                                    </div>	                                                                                                <div class="mt-4 buttons">

                                    </div>
                                </div>

                                <div class="bottom-text">
                                    <ul class="d-none"><li><img width="32" height="32" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2032%2032'%3E%3C/svg%3E" alt="" data-lazy-src="wp-content/uploads/sites/11/2019/09/win.png" /><noscript><img width="32" height="32" src="wp-content/uploads/sites/11/2019/09/win.png" alt="" /></noscript>Windows PC </li><li><img width="35" height="35" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2035%2035'%3E%3C/svg%3E" alt="" data-lazy-src="wp-content/uploads/sites/11/2019/09/osx.png" /><noscript><img width="35" height="35" src="wp-content/uploads/sites/11/2019/09/osx.png" alt="" /></noscript>Apple OSX </li><li><img width="130" height="50" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20130%2050'%3E%3C/svg%3E" alt="" data-lazy-src="wp-content/uploads/sites/11/2019/09/available-logos_apple.png" /><noscript><img width="130" height="50" src="wp-content/uploads/sites/11/2019/09/available-logos_apple.png" alt="" /></noscript></li><li><img width="130" height="50" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20130%2050'%3E%3C/svg%3E" alt="" data-lazy-src="wp-content/uploads/sites/11/2019/09/available-logos_google.png" /><noscript><img width="130" height="50" src="wp-content/uploads/sites/11/2019/09/available-logos_google.png" alt="" /></noscript></li>
                                    </ul>                                            </div>
                            </div>

                        </div>
                    </div>

                    <div class="tab-pane fade  "
                         id="tab_1"
                         role="tabpane_1" aria-labelledby="tab_1-tab">
                        <div class="container">
                            <div class="row top_space">
                                <div class="col-md-8">
                                    <img width="750" height="492" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20750%20492'%3E%3C/svg%3E" alt="Key features of MT5" data-lazy-src="wp-content/uploads/sites/11/2019/07/%d0%9cetaTrader5-devices.jpg" /><noscript><img width="750" height="492" src="wp-content/uploads/sites/11/2019/07/%d0%9cetaTrader5-devices.jpg" alt="Key features of MT5" /></noscript>                                            </div>
                                <div class="col-md-4 mt-5 content-part">
                                    <h3 class="text-left">Key features of MT5</h3>                                                <div class="list-style no"><ul>
                                            <li>Trade FX, Cryptos, Indices, Commodities &amp; Shares</li>
                                            <li>Mobile &amp; Desktop, Web Trading</li>
                                            <li>Award-winning platform</li>
                                            <li>Instruments in 21 time-frames</li>
                                            <li>80 pre-installed indicators</li>
                                        </ul>
                                    </div>	                                                                                                <div class="mt-4 buttons">

                                    </div>
                                </div>

                                <div class="bottom-text">
                                    <ul class="d-none"><li><img width="32" height="32" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2032%2032'%3E%3C/svg%3E" alt="" data-lazy-src="wp-content/uploads/sites/11/2019/09/win.png" /><noscript><img width="32" height="32" src="wp-content/uploads/sites/11/2019/09/win.png" alt="" /></noscript>Windows PC </li><li><img width="35" height="35" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2035%2035'%3E%3C/svg%3E" alt="" data-lazy-src="wp-content/uploads/sites/11/2019/09/osx.png" /><noscript><img width="35" height="35" src="wp-content/uploads/sites/11/2019/09/osx.png" alt="" /></noscript>Apple OSX </li><li><img width="130" height="50" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20130%2050'%3E%3C/svg%3E" alt="" data-lazy-src="wp-content/uploads/sites/11/2019/09/available-logos_apple.png" /><noscript><img width="130" height="50" src="wp-content/uploads/sites/11/2019/09/available-logos_apple.png" alt="" /></noscript></li><li><img width="130" height="50" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20130%2050'%3E%3C/svg%3E" alt="" data-lazy-src="wp-content/uploads/sites/11/2019/09/available-logos_google.png" /><noscript><img width="130" height="50" src="wp-content/uploads/sites/11/2019/09/available-logos_google.png" alt="" /></noscript></li>
                                    </ul>                                            </div>
                            </div>

                        </div>
                    </div>


                </div>

            </div>
        </section>
        <section class="account-types clearfix">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="img-wrapper text-center col-lg-10 mb-5">
                        <h2>Choose your account type</h2>
                        <div class="mt-3">
                            We offer two account types to choose from. Simply select your preferred account type in our application form.                            </div>
                    </div>

                    <div class="col-lg-4 col-12 mb-4">
                        <div class="equal-blocks account-block">
                            <h3 class="account-title">Raw</h3>							    <div class="account_20 pt-3">Spreads From</div>							    <div class="account_60">0.0<span class="account_18">pips</span></div>
                            <div class="account_20">$3.5 Commission</div>                                <div class="mt-3 deposit-wrapper">
                                <div class="row min_deposit_value_global"><div class="col-8">Minimum Deposit</div><div class="col-4 value">$100</div></div>
                                <div class="row min_deposit_value_au"><div class="col-8">Minimum Deposit</div><div class="col-4 value">250 AUD</div></div>
                                <div class="row"><div class="col-8">Minimum Trade Size</div><div class="col-4 value">0.01</div></div>
                                <div class="row"><div class="col-8">EAs Available</div><div class="col-4 value">Yes</div></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mb-4">
                        <div class="equal-blocks account-block">
                            <h3 class="account-title">Standard</h3>		                        <div class="account_20 pt-3">Spreads From</div>		                        <div class="account_60">1.0<span class="account_18">pips</span></div>
                            <div class="account_20">No Commission</div>                                <div class="mt-3 deposit-wrapper">
                                <div class="row min_deposit_value_global"><div class="col-8">Minimum Deposit</div><div class="col-4 value">$100</div></div>
                                <div class="row min_deposit_value_au"><div class="col-8">Minimum Deposit</div><div class="col-4 value">500 AUD</div></div>
                                <div class="row"><div class="col-8">Minimum Trade Size</div><div class="col-4 value">0.01</div></div>
                                <div class="row"><div class="col-8">EAs Available</div><div class="col-4 value">Yes</div></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-10 img-wrapper">
                        <div class="text-center">
                            <div class="mt-4">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=" cta-widget clearfix" style="">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="width:80%; margin-left:10%;">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="https://d1e00ek4ebabms.cloudfront.net/production/40373dab-5925-4741-acf2-85f727d25525.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Apply for a live account in a few minutes or try a free demo account.</h2>                                            <a href="{{ route('register') }}" target="_self" class="green-btn btn rounded-btn">Create Account</a>
                            <a href="{{ route('login') }}" target="_self" class="blue-btn btn rounded-btn">Login</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://fxmedia.s3.amazonaws.com/articles/Best_Forex_Trading_Strategies-2.jpeg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Start Trading on our premium accounts today!</h2>                                            <a href="{{ route('register') }}" target="_self" class="green-btn btn rounded-btn">Create Account</a>
                            <a href="{{ route('login') }}" target="_self" class="blue-btn btn rounded-btn">Login</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT60oGLWwzkajXr7TAd2ek87kFhCGHGuFb_1YVyqjc2kqJah1ydhTXbz0NWoQZ86fSAa9Q&amp;usqp=CAU" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Don't miss this oppertunity!.</h2>                                            <a href="{{ route('register') }}" target="_self" class="green-btn btn rounded-btn">Create Account</a>
                            <a href="{{ route('login') }}" target="_self" class="blue-btn btn rounded-btn">Login</a>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


        </section>
        <section class="latest_posts clearfix">
            <div class="container text-center">
                <h2 class="title">Latest Analysis &#038; Education</h2>

                <div class="tab-content-wrapper">
                    <ul class="nav nav-tabs" >
                        <li class="nav-item ">
                            <a href="#analysis" class="nav-link analysis active" data-toggle="tab" ><h3>Analysis</h3></a>
                        </li>

                        <li class="nav-item ">
                            <a href="#education" class="education nav-link " data-toggle="tab" ><h3>Education</h3></a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="analysis">
                            <div class="row">
                                <div class="col-md-6 col-lg-3">
                                    <div class="avatar">
                                        <img data-del="avatar" src="https://st.depositphotos.com/1269204/1219/i/600/depositphotos_12196477-stock-photo-smiling-men-isolated-on-the.jpg"/><noscript><img data-del="avatar" src='images/favicon.png' class='avatar pp-user-avatar avatar-163 photo ' height='163' width='163'/></noscript>                                        <div class="author_name">Joseph Jeffriess</div>                                        <div class="author_title">Market Analyst</div>                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-3">
                                    <div class="latest-post-content">
                                        <h3><a href="#" class="link"><span>Crypto News:</span> Crypto Focus: Another Choppy Week on the Markets</a></h3>                                        <div>It's been a choppy week, with little direction at the end of it all on the top... </div>                                        <a href="{{ route('register') }}" class="btn blue-btn rounded-btn mt-3">Register</a>
                                    </div>
                                </div>

                                <div class="col-md-12 col-lg-6">
                                    <div class="img-video-container">
                                        <img width="600" height="418" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20600%20418'%3E%3C/svg%3E" class="btn_overlay" alt="" border="0" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2021/11/iStock-1200052375-600x418.jpg" /><noscript><img width="600" height="418" src="wp-content/uploads/sites/11/2021/11/iStock-1200052375-600x418.jpg" class="btn_overlay" alt="" border="0" /></noscript>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane " id="education">

                            <div class="edu-posts">

                                <div class="edu-wrapper">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="latest-edu-content text-left">
                                                <h3><a href="#" class="link">How to choose an FX Broker that meets your needs in 2022</a></h3>	                                                <div>Choosing an FX broker in 2002 isn’t necessarily... </div>                                                    <a href="{{ route('register') }}" class="btn blue-btn rounded-btn mt-3 mr-3">Register</a>                                                    <a href="{{ route('login') }}" class="btn blue-bordered-btn rounded-btn mt-3">Login</a>                                                </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="img-video-container">
                                                <img width="600" height="316" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20600%20316'%3E%3C/svg%3E" class="btn_overlay" alt="" border="0" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/08/ib-img-600x316.jpg" /><noscript><img width="600" height="316" src="wp-content/uploads/sites/11/2019/08/ib-img-600x316.jpg" class="btn_overlay" alt="" border="0" /></noscript>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>


            <!-- Video Modal -->
            <div class="modal fade" id="LatestPostModal" tabindex="-1" role="dialog" aria-labelledby="LatestPostModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <!-- 16:9 aspect ratio -->
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="#" id="video" allowscriptaccess="always" allow="autoplay" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Video Modal -->
        </section>
        <!-- reviews -->
        <section class="why-trade-with-us clearfix" >
            <div class="container">
                <h2>Reviews</h2>
                <div class="description">
                    Here is what our clients had to say about us!                    </div>

                <div class="usp-wrapper">

                    <div class='usp-slide'>
                        <div class='usp eq-blocks'>
                            <img width='100%' height='auto' src='jpg.html' class='attachment-post-thumbnail size-post-thumbnail wp-post-image ' alt='' loading='lazy' data-lazy-src=' jpg' /><noscript><img width='100%' height='auto' src='jpg.html' class='attachment-post-thumbnail size-post-thumbnail wp-post-image' alt='' loading='lazy' /></noscript>
                            <h3>Review</h3>
                            <h5> Linda lokiji Smith(Director ShibeMint)</h5>
                            <h6> 2019-12-14 21:30:23 </h6>
                            <div class='usp-content'>
                                Es ist immer eine Freude, gleichgesinnte Seelen in jeder Arena zu finden, in der Sie sich kreuzen, und das galt für alle, denen ich bei &quot;company&quot;. begegnet bin.
                            </div>
                        </div>
                    </div>

                    <div class='usp-slide'>
                        <div class='usp eq-blocks'>
                            <img width='100%' height='auto' src='bop.html' class='attachment-post-thumbnail size-post-thumbnail wp-post-image ' alt='' loading='lazy' data-lazy-src=' bop' /><noscript><img width='100%' height='auto' src='bop.html' class='attachment-post-thumbnail size-post-thumbnail wp-post-image' alt='' loading='lazy' /></noscript>
                            <h3>SATISFIED</h3>
                            <h5> Martin heitto(CEO BankToTheFuture)</h5>
                            <h6> 2021-12-03 00:34:01 </h6>
                            <div class='usp-content'>
                                After having a negative experience with another Broker, I found Legend Trades Plc. Legend Trades Plc transformed my investment experience! and made sure we understood how the system works also what our priorities were in terms of retirement plan and investment income. Couldn’t have asked for a better broker!
                            </div>
                        </div>
                    </div>

                    <div class='usp-slide'>
                        <div class='usp eq-blocks'>
                            <img width='100%' height='auto' src='jbp.html' class='attachment-post-thumbnail size-post-thumbnail wp-post-image ' alt='' loading='lazy' data-lazy-src=' jbp' /><noscript><img width='100%' height='auto' src='jbp.html' class='attachment-post-thumbnail size-post-thumbnail wp-post-image' alt='' loading='lazy' /></noscript>
                            <h3>My view</h3>
                            <h5> James vandecamp(CTO Blue Ocean Gaming)</h5>
                            <h6> 2021-06-11 21:49:53 </h6>
                            <div class='usp-content'>
                                It is evident they place a high value on client relationships and their one-to-one approach has suited my requirements perfectly. Moreover, the team works fluidly alongside other advisers to make sure they provide an on-going and dependable service.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of reviews -->
        <section class="three-steps">
            <div class="container">
                <h2 class="text-center">Begin trading in three steps</h2>
                <div id="stepper" class="bs-stepper vertical">
                    <div class="bs-stepper-content col-md-6 text-right">
                        <div id="test-lv-1" class="content fade dstepper-block active">
                            <img width="400" height="672" src="https://a.c-dn.net/c/content/dam/publicsites/igcom/us/images/Content/IGUS_Platforms-by-traders-for-traders_2.png" alt="" data-lazy-src="https://a.c-dn.net/c/content/dam/publicsites/igcom/us/images/Content/IGUS_Platforms-by-traders-for-traders_2.png" alt="" /></noscript>
                        </div>

                        <div id="test-lv-2" class="content hidden">
                            <img width="400" height="672" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20400%20672'%3E%3C/svg%3E" alt="" data-lazy-src="https://www.oanda.com/media/images/45._trading-phone_1_dyho1TL.max-870x870.max-560x530.png"/><noscript><img width="400" height="672" src="wp-content/uploads/sites/11/2020/10/verify-step-2.png" alt=""/></noscript>
                        </div>

                        <div id="test-lv-3" class="content hidden">
                            <img width="400" height="672" src="https://www.metatrader5.com/c/2/0/Trading-System-in-MetaTrader5-for-Android.jpg" alt="" data-lazy-src="https://www.metatrader5.com/c/2/0/Trading-System-in-MetaTrader5-for-Android.jpg" /><noscript><img width="400" height="672" src="wp-content/uploads/sites/11/2020/10/funding-step-3.png" alt="" /></noscript>
                        </div>
                    </div>

                    <div class="bs-stepper-header col-md-6">
                        <div class="step active" data-target="#test-lv-1">
                            <button type="button" class="step-1 step-trigger">
                                <span class="bs-stepper-circle">1</span>
                            </button>
                            <div class="title-wrapper">
                                <h3 class="bs-stepper-label">Apply</h3>
                                <div class="step-content">
                                    <div>Complete a simple application form.</div>
                                </div>
                            </div>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#test-lv-2">
                            <button type="button" class="step-2 step-trigger">
                                <span class="bs-stepper-circle">2</span>
                            </button>
                            <div class="title-wrapper">
                                <h3 class="bs-stepper-label">Verify</h3>
                                <div class="step-content">
                                    <div>Upload documents to verify your account.</div>
                                </div>
                            </div>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#test-lv-3">
                            <button type="button" class="step-3 step-trigger">
                                <span class="bs-stepper-circle">3</span>
                            </button>
                            <div class="title-wrapper">
                                <h3 class="bs-stepper-label">Fund & Trade</h3>
                                <div class="step-content">
                                    <div>Fund account with as little as $100 and start trading the global financial markets</div>
                                </div>
                            </div>
                        </div>

                        <a href="{{ route('register') }}" class="btn green-btn rounded-btn max-width-200 open-account-btn mt-2">Create Account</a>                        </div>
                </div>

            </div>
        </section>

        <script>

            // 3-steps widget

            //var stepper = new Stepper(document.querySelector('#stepper'), {
            //    animation: true,
            //    linear: false
            //});

        </script>


        <section class="payment-logos "><div class="container text-center"><div class="row"><div class="col"><img width="54" height="41" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2054%2041'%3E%3C/svg%3E" alt="" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/10/Mastercard-Logo.png" /><noscript><img width="54" height="41" src="wp-content/uploads/sites/11/2019/10/Mastercard-Logo.png" alt="" /></noscript></div><div class="col"><img width="54" height="41" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2054%2041'%3E%3C/svg%3E" alt="" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/10/Visa-Logo.png" /><noscript><img width="54" height="41" src="wp-content/uploads/sites/11/2019/10/Visa-Logo.png" alt="" /></noscript></div><div class="col"><img width="54" height="41" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2054%2041'%3E%3C/svg%3E" alt="" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/10/Poli-Payment-Logo.png" /><noscript><img width="54" height="41" src="wp-content/uploads/sites/11/2019/10/Poli-Payment-Logo.png" alt="" /></noscript></div><div class="col"><img width="54" height="41" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2054%2041'%3E%3C/svg%3E" alt="" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/10/WireTransfer-Logo.png" /><noscript><img width="54" height="41" src="wp-content/uploads/sites/11/2019/10/WireTransfer-Logo.png" alt="" /></noscript></div><div class="col"><img width="54" height="41" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2054%2041'%3E%3C/svg%3E" alt="" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/10/Bpay-Logo.png" /><noscript><img width="54" height="41" src="wp-content/uploads/sites/11/2019/10/Bpay-Logo.png" alt="" /></noscript></div><div class="col"><img width="54" height="41" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2054%2041'%3E%3C/svg%3E" alt="" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/10/Skrill-Logo.png" /><noscript><img width="54" height="41" src="wp-content/uploads/sites/11/2019/10/Skrill-Logo.png" alt="" /></noscript></div><div class="col"><img width="105" height="41" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20105%2041'%3E%3C/svg%3E" alt="" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/10/Neteller-Logo.png" /><noscript><img width="105" height="41" src="wp-content/uploads/sites/11/2019/10/Neteller-Logo.png" alt="" /></noscript></div><div class="col"><img width="54" height="41" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2054%2041'%3E%3C/svg%3E" alt="" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/10/UnionPay-Logo.png" /><noscript><img width="54" height="41" src="wp-content/uploads/sites/11/2019/10/UnionPay-Logo.png" alt="" /></noscript></div><div class="col"><img width="104" height="41" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20104%2041'%3E%3C/svg%3E" alt="" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2021/09/paypal.png" /><noscript><img width="104" height="41" src="wp-content/uploads/sites/11/2021/09/paypal.png" alt="" /></noscript></div></div></div></section>
    </div>

@endsection
