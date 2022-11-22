@extends('pages.layouts.app2')
@section('content')

    <div id="content" class="site-content">
        <a href="contact" class="support"><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80"><defs><style>.cls-1{fill:#fff;stroke:#fff;stroke-miterlimit:10;}</style></defs><polygon class="cls-1" points="52.05 27.44 43.77 36.52 44.96 36.98 53.22 27.9 52.05 27.44"></polygon><path class="cls-1" d="M9.81,29.49a38.11,38.11,0,0,1,.54-4.15l0-.1.1,0c1.65-.41,3.14-.7,4.5-.9l1.68-1.69a48.63,48.63,0,0,0-7.07,1.31l-.42.11-.11.42A36.58,36.58,0,0,0,8.28,31Z"></path><path class="cls-1" d="M26.65,38.37l0,0-6.46,4.52.2.53a30.58,30.58,0,0,0,16.2,16.92l.47.18,4.23-4.84h.07a21.47,21.47,0,0,1,11,3.23l1.07-1.06A22.68,22.68,0,0,0,41,54.24h-.41l-4,4.56-.11,0A29.73,29.73,0,0,1,22,43.57l0-.12.1-.07,5.77-4,.08-.15C28,39,30.51,34,26.7,23.85l-.1-.26-.24-.13a8.6,8.6,0,0,0-2-.63l-1.26,1.26a11.27,11.27,0,0,1,2.29.54l.07,0,0,.07c3,8.23,1.53,12.77,1.2,13.6Z"></path><path class="cls-1" d="M39.73,71.6,41,70.32A36.91,36.91,0,0,1,19.15,58.65,37.26,37.26,0,0,1,9.93,37.31l-1.3,1.3a38.5,38.5,0,0,0,9.45,21A38,38,0,0,0,39.73,71.6Z"></path><path class="cls-1" d="M53.54,64.75c-.43,3.82-1.67,5.44-2.14,5.93l0,0h0a31.38,31.38,0,0,1-3.44.17h-.45L46,72.31c.65,0,1.27,0,1.84,0a31.62,31.62,0,0,0,3.94-.21l.17,0,.14-.1c.13-.09,2.72-2,3-8.84Z"></path><path class="cls-1" d="M71.72,40.85a33.05,33.05,0,0,0-57.3-22.61l1.07,1A31.68,31.68,0,1,1,60.35,63.94l1,1.07A33.41,33.41,0,0,0,71.72,40.85Z"></path><path class="cls-1" d="M39.21,26.55H32.69v-1L35.3,23a19.64,19.64,0,0,0,1.58-1.73,4.69,4.69,0,0,0,.57-1,3.07,3.07,0,0,0,.19-1.06,1.67,1.67,0,0,0-.48-1.26,1.86,1.86,0,0,0-1.34-.46,3.46,3.46,0,0,0-1.17.2,4.85,4.85,0,0,0-1.24.74l-.6-.77a4.61,4.61,0,0,1,3-1.14,3.15,3.15,0,0,1,2.2.72,2.47,2.47,0,0,1,.79,1.93A3.61,3.61,0,0,1,38.26,21a11.51,11.51,0,0,1-2,2.34l-2.17,2.13v.05h5.1Z"></path><path class="cls-1" d="M47.64,24.27H46.16v2.28H45.08V24.27H40.25v-1L45,16.56h1.19v6.68h1.48Zm-2.56-1v-3.3c0-.65,0-1.38.07-2.2h0a9.68,9.68,0,0,1-.61,1.08l-3.11,4.42Z"></path><path class="cls-1" d="M56.19,39.68a3.69,3.69,0,0,1,2.48.78,2.71,2.71,0,0,1,.9,2.15,3.12,3.12,0,0,1-1,2.43,4,4,0,0,1-2.73.88,5,5,0,0,1-2.57-.54v-1.1a4,4,0,0,0,1.19.49,6.16,6.16,0,0,0,1.4.17,2.8,2.8,0,0,0,1.87-.57,2,2,0,0,0,.66-1.63c0-1.4-.85-2.09-2.56-2.09a10.19,10.19,0,0,0-1.73.19l-.59-.37.38-4.67h5v1h-4l-.26,3A7.68,7.68,0,0,1,56.19,39.68Z"></path></svg><br>Contact</a>
        <br><br><br><br>

        <section id="header_content" class="header_content text-center no-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 center-block">
                        <h1 class="page-title">MetaTrader 4 Trading Platform</h1>
                    </div>
                    <div class="text-center img-wrapper col-lg-10 mt-2">
                        <p>Trade Forex, Indices and Commodites with Metrics Trade Plc to experience the multi-award winning MT4 platform. The same intuitive interface, robot trading capabilities and advanced charting package all built on our rock-solid technology infrastructure.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="pages_header" style=" background: url(wp-content/uploads/sites/11/2019/10/mt4-header-1.jpg) no-repeat center center transparent; " class="text-center header_spacing  header_img_bgr ">
        </section>
        <div class="buttons mt-4">
            <div class="container">
                <div class="row">
                    <div class="mt-3 mb-4 col-lg-10 img-wrapper text-center">
                        <a href="{{ route('register') }}" class="btn green-btn rounded-btn mobile-button-space">Create Account</a>
                        <a href="{{ route('login') }}" class="btn blue-btn rounded-btn mobile-button-space">Login</a>
                    </div>
                </div>
            </div>
        </div>
        <section class="usp-block-content clearfix grey-bgr bordered ">
            <div class="container">
                <h2>Access these MT4 features</h2>
                <div class="text-center img-wrapper col-lg-10 mt-4 mb-4">
                    <p>As an intuitive and fully customisable trading interface, MT4 provides a smooth and efficient trading experience for serious traders.</p>
                </div>
                <div class="usp-wrapper slick-initialized slick-slider slick-dotted"><button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Previous</button>
                    <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 4290px; transform: translate3d(-1170px, 0px, 0px);"><div class="usp-slide slick-slide slick-cloned" data-slick-index="-3" id="" aria-hidden="true" tabindex="-1" style="width: 350px;">
                                <div class="usp eq-blocks">

                                    <h3>Flexible Trading System</h3>
                                    <div class="usp-content">Trade using a method that suits you - from 1 click trading direct from charts to market, pending, stop orders as well as trailing stops.</div>
                                </div>
                            </div><div class="usp-slide slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true" tabindex="-1" style="width: 350px;">
                                <div class="usp eq-blocks">

                                    <h3>Technical Analysis</h3>
                                    <div class="usp-content">Identify trends and determine your entry and exit points using an advanced range of charting tools. 9 time-frames, 30 built-in indicators and 24 graphic objects, all at your fingertips.</div>
                                </div>
                            </div><div class="usp-slide slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1" style="width: 350px;">
                                <div class="usp eq-blocks">

                                    <h3>Security</h3>
                                    <div class="usp-content">Trade with peace of mind that all data exchanges between the platform and the servers are encrypted.</div>
                                </div>
                            </div><div class="usp-slide slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide00" aria-describedby="slick-slide-control00" style="width: 350px;">
                                <div class="usp eq-blocks">

                                    <h3>Trade with Robots</h3>
                                    <div class="usp-content">Automate your analysis and trading execution by downloading a free-of-charge trading robot or purchase one from the MetaTrader Market.</div>
                                </div>
                            </div><div class="usp-slide slick-slide slick-active" data-slick-index="1" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide01" aria-describedby="slick-slide-control01" style="width: 350px;">
                                <div class="usp eq-blocks">

                                    <h3>Flexible Trading System</h3>
                                    <div class="usp-content">Trade using a method that suits you - from 1 click trading direct from charts to market, pending, stop orders as well as trailing stops.</div>
                                </div>
                            </div><div class="usp-slide slick-slide slick-active" data-slick-index="2" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide02" aria-describedby="slick-slide-control02" style="width: 350px;">
                                <div class="usp eq-blocks">

                                    <h3>Technical Analysis</h3>
                                    <div class="usp-content">Identify trends and determine your entry and exit points using an advanced range of charting tools. 9 time-frames, 30 built-in indicators and 24 graphic objects, all at your fingertips.</div>
                                </div>
                            </div><div class="usp-slide slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide03" aria-describedby="slick-slide-control03" style="width: 350px;">
                                <div class="usp eq-blocks">

                                    <h3>Security</h3>
                                    <div class="usp-content">Trade with peace of mind that all data exchanges between the platform and the servers are encrypted.</div>
                                </div>
                            </div><div class="usp-slide slick-slide slick-cloned" data-slick-index="4" id="" aria-hidden="true" tabindex="-1" style="width: 350px;">
                                <div class="usp eq-blocks">

                                    <h3>Trade with Robots</h3>
                                    <div class="usp-content">Automate your analysis and trading execution by downloading a free-of-charge trading robot or purchase one from the MetaTrader Market.</div>
                                </div>
                            </div><div class="usp-slide slick-slide slick-cloned" data-slick-index="5" id="" aria-hidden="true" tabindex="-1" style="width: 350px;">
                                <div class="usp eq-blocks">

                                    <h3>Flexible Trading System</h3>
                                    <div class="usp-content">Trade using a method that suits you - from 1 click trading direct from charts to market, pending, stop orders as well as trailing stops.</div>
                                </div>
                            </div><div class="usp-slide slick-slide slick-cloned" data-slick-index="6" id="" aria-hidden="true" tabindex="-1" style="width: 350px;">
                                <div class="usp eq-blocks">

                                    <h3>Technical Analysis</h3>
                                    <div class="usp-content">Identify trends and determine your entry and exit points using an advanced range of charting tools. 9 time-frames, 30 built-in indicators and 24 graphic objects, all at your fingertips.</div>
                                </div>
                            </div><div class="usp-slide slick-slide slick-cloned" data-slick-index="7" id="" aria-hidden="true" tabindex="-1" style="width: 350px;">
                                <div class="usp eq-blocks">

                                    <h3>Security</h3>
                                    <div class="usp-content">Trade with peace of mind that all data exchanges between the platform and the servers are encrypted.</div>
                                </div>
                            </div></div></div>



                    <button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button><ul class="slick-dots" style="" role="tablist"><li class="slick-active" role="presentation"><button type="button" role="tab" id="slick-slide-control00" aria-controls="slick-slide00" aria-label="1 of 2" tabindex="0" aria-selected="true">1</button></li><li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control01" aria-controls="slick-slide01" aria-label="2 of 2" tabindex="-1">2</button></li><li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control02" aria-controls="slick-slide02" aria-label="3 of 2" tabindex="-1">3</button></li><li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control03" aria-controls="slick-slide03" aria-label="4 of 2" tabindex="-1">4</button></li></ul></div>
                <a href="{{ route('register') }}" class="btn rounded-btn green-btn mt-5">Create Account</a>
            </div>
        </section>
        <section class="content-block  ">
            <div class="container">
                <h2 class="text-center">Why trade on MT4 with Metrics Trade Plc?</h2>
                <div class="img-wrapper text-center">
                    <div class="col content ">
                        <p>Experience MT4 delivered on our technology infrastructure - engineered with speed, transparent pricing and reliability in mind.</p>
                    </div>
                </div>
                <div class="usp-block-content">
                    <div class="usp-wrapper slick-initialized slick-slider slick-dotted"><button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Previous</button>
                        <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 4290px; transform: translate3d(-1170px, 0px, 0px);"><div class="usp-slide slick-slide slick-cloned" data-slick-index="-3" id="" aria-hidden="true" tabindex="-1" style="width: 350px;">
                                    <div class="usp equal-blocks">
                                        <img width="150" height="150" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%20150'%3E%3C/svg%3E" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/06/Trusted_Regulated_Broker.png"><noscript><img width="150" height="150" src="wp-content/uploads/sites/11/2019/06/Trusted_Regulated_Broker.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" /></noscript>												<h3>Multi jurisdiction regulation</h3>
                                        <div class="usp-content">Established in Australia and now regulated in multiple jurisdictions.</div>
                                    </div>
                                </div><div class="usp-slide slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true" tabindex="-1" style="width: 350px;">
                                    <div class="usp equal-blocks">
                                        <img width="150" height="150" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%20150'%3E%3C/svg%3E" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/07/Lightning-Fast-Execution.png"><noscript><img width="150" height="150" src="wp-content/uploads/sites/11/2019/07/Lightning-Fast-Execution.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" /></noscript>												<h3>Fast Execution</h3>
                                        <div class="usp-content">Our execution servers are located in Equinix data centres, where most of the world's financial institutions are hosted, ensuring optimal performance at all times.</div>
                                    </div>
                                </div><div class="usp-slide slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1" style="width: 350px;">
                                    <div class="usp equal-blocks">
                                        <img width="150" height="150" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%20150'%3E%3C/svg%3E" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/07/Premium-Liquidity.png"><noscript><img width="150" height="150" src="wp-content/uploads/sites/11/2019/07/Premium-Liquidity.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" /></noscript>												<h3>Premium Liquidity</h3>
                                        <div class="usp-content">Our pricing is aggregated from multiple top-tier liquidity providers, allowing you to trade on spreads from as low as 0.0 pips.</div>
                                    </div>
                                </div><div class="usp-slide slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide10" aria-describedby="slick-slide-control10" style="width: 350px;">
                                    <div class="usp equal-blocks">
                                        <img width="150" height="150" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%20150'%3E%3C/svg%3E" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/10/Spread.png"><noscript><img width="150" height="150" src="wp-content/uploads/sites/11/2019/10/Spread.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" /></noscript>												<h3>Spreads from 0.0 pips</h3>
                                        <div class="usp-content">Trade FX on a Raw Account to take advantage of institutional-grade pricing. The price you need when you need it.</div>
                                    </div>
                                </div><div class="usp-slide slick-slide slick-active" data-slick-index="1" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide11" aria-describedby="slick-slide-control11" style="width: 350px;">
                                    <div class="usp equal-blocks">
                                        <img width="150" height="150" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%20150'%3E%3C/svg%3E" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/06/Trusted_Regulated_Broker.png"><noscript><img width="150" height="150" src="wp-content/uploads/sites/11/2019/06/Trusted_Regulated_Broker.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" /></noscript>												<h3>Multi jurisdiction regulation</h3>
                                        <div class="usp-content">Established in Australia and now regulated in multiple jurisdictions.</div>
                                    </div>
                                </div><div class="usp-slide slick-slide slick-active" data-slick-index="2" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide12" aria-describedby="slick-slide-control12" style="width: 350px;">
                                    <div class="usp equal-blocks">
                                        <img width="150" height="150" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%20150'%3E%3C/svg%3E" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/07/Lightning-Fast-Execution.png"><noscript><img width="150" height="150" src="wp-content/uploads/sites/11/2019/07/Lightning-Fast-Execution.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" /></noscript>												<h3>Fast Execution</h3>
                                        <div class="usp-content">Our execution servers are located in Equinix data centres, where most of the world's financial institutions are hosted, ensuring optimal performance at all times.</div>
                                    </div>
                                </div><div class="usp-slide slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide13" aria-describedby="slick-slide-control13" style="width: 350px;">
                                    <div class="usp equal-blocks">
                                        <img width="150" height="150" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%20150'%3E%3C/svg%3E" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/07/Premium-Liquidity.png"><noscript><img width="150" height="150" src="wp-content/uploads/sites/11/2019/07/Premium-Liquidity.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" /></noscript>												<h3>Premium Liquidity</h3>
                                        <div class="usp-content">Our pricing is aggregated from multiple top-tier liquidity providers, allowing you to trade on spreads from as low as 0.0 pips.</div>
                                    </div>
                                </div><div class="usp-slide slick-slide slick-cloned" data-slick-index="4" id="" aria-hidden="true" tabindex="-1" style="width: 350px;">
                                    <div class="usp equal-blocks">
                                        <img width="150" height="150" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%20150'%3E%3C/svg%3E" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/10/Spread.png"><noscript><img width="150" height="150" src="wp-content/uploads/sites/11/2019/10/Spread.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" /></noscript>												<h3>Spreads from 0.0 pips</h3>
                                        <div class="usp-content">Trade FX on a Raw Account to take advantage of institutional-grade pricing. The price you need when you need it.</div>
                                    </div>
                                </div><div class="usp-slide slick-slide slick-cloned" data-slick-index="5" id="" aria-hidden="true" tabindex="-1" style="width: 350px;">
                                    <div class="usp equal-blocks">
                                        <img width="150" height="150" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%20150'%3E%3C/svg%3E" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/06/Trusted_Regulated_Broker.png"><noscript><img width="150" height="150" src="wp-content/uploads/sites/11/2019/06/Trusted_Regulated_Broker.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" /></noscript>												<h3>Multi jurisdiction regulation</h3>
                                        <div class="usp-content">Established in Australia and now regulated in multiple jurisdictions.</div>
                                    </div>
                                </div><div class="usp-slide slick-slide slick-cloned" data-slick-index="6" id="" aria-hidden="true" tabindex="-1" style="width: 350px;">
                                    <div class="usp equal-blocks">
                                        <img width="150" height="150" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%20150'%3E%3C/svg%3E" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/07/Lightning-Fast-Execution.png"><noscript><img width="150" height="150" src="wp-content/uploads/sites/11/2019/07/Lightning-Fast-Execution.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" /></noscript>												<h3>Fast Execution</h3>
                                        <div class="usp-content">Our execution servers are located in Equinix data centres, where most of the world's financial institutions are hosted, ensuring optimal performance at all times.</div>
                                    </div>
                                </div><div class="usp-slide slick-slide slick-cloned" data-slick-index="7" id="" aria-hidden="true" tabindex="-1" style="width: 350px;">
                                    <div class="usp equal-blocks">
                                        <img width="150" height="150" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%20150'%3E%3C/svg%3E" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/07/Premium-Liquidity.png"><noscript><img width="150" height="150" src="wp-content/uploads/sites/11/2019/07/Premium-Liquidity.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" /></noscript>												<h3>Premium Liquidity</h3>
                                        <div class="usp-content">Our pricing is aggregated from multiple top-tier liquidity providers, allowing you to trade on spreads from as low as 0.0 pips.</div>
                                    </div>
                                </div></div></div>



                        <button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button><ul class="slick-dots" style="" role="tablist"><li class="slick-active" role="presentation"><button type="button" role="tab" id="slick-slide-control10" aria-controls="slick-slide10" aria-label="1 of 2" tabindex="0" aria-selected="true">1</button></li><li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control11" aria-controls="slick-slide11" aria-label="2 of 2" tabindex="-1">2</button></li><li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control12" aria-controls="slick-slide12" aria-label="3 of 2" tabindex="-1">3</button></li><li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control13" aria-controls="slick-slide13" aria-label="4 of 2" tabindex="-1">4</button></li></ul></div>
                </div>
            </div>
        </section>
        <section class="content-block grey-bgr ">
            <div class="container">

            </div>
        </section></div>


@endsection
