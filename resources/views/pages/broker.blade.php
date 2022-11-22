@extends('pages.layouts.app2')
@section('content')

    <div id="content" class="site-content">
        <a href="contact" class="support"><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80"><defs><style>.cls-1{fill:#fff;stroke:#fff;stroke-miterlimit:10;}</style></defs><polygon class="cls-1" points="52.05 27.44 43.77 36.52 44.96 36.98 53.22 27.9 52.05 27.44"></polygon><path class="cls-1" d="M9.81,29.49a38.11,38.11,0,0,1,.54-4.15l0-.1.1,0c1.65-.41,3.14-.7,4.5-.9l1.68-1.69a48.63,48.63,0,0,0-7.07,1.31l-.42.11-.11.42A36.58,36.58,0,0,0,8.28,31Z"></path><path class="cls-1" d="M26.65,38.37l0,0-6.46,4.52.2.53a30.58,30.58,0,0,0,16.2,16.92l.47.18,4.23-4.84h.07a21.47,21.47,0,0,1,11,3.23l1.07-1.06A22.68,22.68,0,0,0,41,54.24h-.41l-4,4.56-.11,0A29.73,29.73,0,0,1,22,43.57l0-.12.1-.07,5.77-4,.08-.15C28,39,30.51,34,26.7,23.85l-.1-.26-.24-.13a8.6,8.6,0,0,0-2-.63l-1.26,1.26a11.27,11.27,0,0,1,2.29.54l.07,0,0,.07c3,8.23,1.53,12.77,1.2,13.6Z"></path><path class="cls-1" d="M39.73,71.6,41,70.32A36.91,36.91,0,0,1,19.15,58.65,37.26,37.26,0,0,1,9.93,37.31l-1.3,1.3a38.5,38.5,0,0,0,9.45,21A38,38,0,0,0,39.73,71.6Z"></path><path class="cls-1" d="M53.54,64.75c-.43,3.82-1.67,5.44-2.14,5.93l0,0h0a31.38,31.38,0,0,1-3.44.17h-.45L46,72.31c.65,0,1.27,0,1.84,0a31.62,31.62,0,0,0,3.94-.21l.17,0,.14-.1c.13-.09,2.72-2,3-8.84Z"></path><path class="cls-1" d="M71.72,40.85a33.05,33.05,0,0,0-57.3-22.61l1.07,1A31.68,31.68,0,1,1,60.35,63.94l1,1.07A33.41,33.41,0,0,0,71.72,40.85Z"></path><path class="cls-1" d="M39.21,26.55H32.69v-1L35.3,23a19.64,19.64,0,0,0,1.58-1.73,4.69,4.69,0,0,0,.57-1,3.07,3.07,0,0,0,.19-1.06,1.67,1.67,0,0,0-.48-1.26,1.86,1.86,0,0,0-1.34-.46,3.46,3.46,0,0,0-1.17.2,4.85,4.85,0,0,0-1.24.74l-.6-.77a4.61,4.61,0,0,1,3-1.14,3.15,3.15,0,0,1,2.2.72,2.47,2.47,0,0,1,.79,1.93A3.61,3.61,0,0,1,38.26,21a11.51,11.51,0,0,1-2,2.34l-2.17,2.13v.05h5.1Z"></path><path class="cls-1" d="M47.64,24.27H46.16v2.28H45.08V24.27H40.25v-1L45,16.56h1.19v6.68h1.48Zm-2.56-1v-3.3c0-.65,0-1.38.07-2.2h0a9.68,9.68,0,0,1-.61,1.08l-3.11,4.42Z"></path><path class="cls-1" d="M56.19,39.68a3.69,3.69,0,0,1,2.48.78,2.71,2.71,0,0,1,.9,2.15,3.12,3.12,0,0,1-1,2.43,4,4,0,0,1-2.73.88,5,5,0,0,1-2.57-.54v-1.1a4,4,0,0,0,1.19.49,6.16,6.16,0,0,0,1.4.17,2.8,2.8,0,0,0,1.87-.57,2,2,0,0,0,.66-1.63c0-1.4-.85-2.09-2.56-2.09a10.19,10.19,0,0,0-1.73.19l-.59-.37.38-4.67h5v1h-4l-.26,3A7.68,7.68,0,0,1,56.19,39.68Z"></path></svg><br>Contact</a>
        <br><br><br><br>


        <section id="header_content" class="header_content text-center no-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 center-block">
                        <h1 class="page-title">Introducing Broker</h1>
                    </div>
                    <div class="text-center img-wrapper col-lg-10 mt-2">
                        <p>Join our Introducing Broker (IB) program and gain the opportunity to earn ongoing, generous commission on the trading activities<br>
                            of your referred customers.</p>
                        <p><a class="btn rounded-btn green-btn mobile-button-space mr-4" href="{{ route('register') }}">Become Introducer</a></p>
                    </div>
                </div>
            </div>
        </section>
        <section id="pages_header" style=" background: url(wp-content/uploads/sites/11/2019/10/IB-Header.jpg) no-repeat center center transparent; padding-top:30px !important; padding-bottom:30px !important;" class="text-center header_spacing  header_img_bgr ">
        </section>
        <section class="three-blocks-content white-bgr clearfix">
            <div class="container">
                <h2 class="text-center">What you Get?</h2>									<div class="col-lg-10 text-center img-wrapper">
                    <p><em>Introducing Brokers</em>&nbsp;are core to our business and we have invested heavily to provide our introducers with fast, reliable and secure service, enabling you to spend less time managing back-office operations and more time managing your customer relationships.</p>
                </div>
                <div class="blocks-wrapper mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 tb-block">
                            <div class="item text-center img-wrapper equal-three-blocks">
                                <h3 class="mt-3">Attractive Commission</h3>																					<div class="font-size-14">
                                    <p>Our compensation structure has been carefully designed to help introducers and traders of all levels be sufficiently rewarded for their referrals – the more your customers trade, the more rebates you earn.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 tb-block">
                            <div class="item text-center img-wrapper equal-three-blocks">
                                <h3 class="mt-3">Advanced Reporting</h3>																					<div class="font-size-14">
                                    <p>Get total visibility and stay up-to-date with your commission payments and your customers’ trading activity and profitability with our exclusive and easy-to-use Partner Portal.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 tb-block">
                            <div class="item text-center img-wrapper equal-three-blocks">
                                <h3 class="mt-3">Marketing Instruments</h3>																					<div class="font-size-14">
                                    <p>We offer a variety of free marketing tools and materials including banners and personalised referral links for you to utilise to your full potential. You can track every click, impression, download and sign-up.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cta-block cta-bgr white-bgr   white-color " style="color: #FFF !important; background: url(wp-content/uploads/sites/11/2019/08/cta_img.jpg) no-repeat center center transparent; background-size: cover;   ">
            <div class="container text-center cta-text-content">
                <h2 class="text-center">How to Become an IB?</h2>
                <div class="img-wrapper text-center">
                    <div class="col content">
                        <p>Our IB program is our most straightforward way to earn a steady revenue stream, without adding to your cost base, and joining is quick and simple. Simply fill out our online registration form, and one of our executives will contact you to gather further information.</p>
                    </div>
                </div>
                <div class="mt-5 col-lg-10 img-wrapper text-center">
                    <a href="{{ route('register') }}" class="btn green-btn rounded-btn mobile-button-space">Submit Application Now</a>
                </div>
            </div>
        </section>
        <section class="count-block-content    clearfix">
            <div class="container">
                <h2 class="text-center">What your Customers Get?</h2>
                <div class="col-lg-10 img-wrapper text-center">
                    We value the business you bring in and strive to offer your customers with the best possible trading experience and transparent trading conditions. When you team up with us, your customers will receive:				</div>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="block-item col-lg-6">
                        <div class="clearfix eq-count_content count_wrapper " style="height: 236px;">
                            <div class="count_icon">
                                <span class="num">01</span>										</div>
                            <div class="count_content  has_num ">
                                <h3>Access to the Global Markets</h3>
                                <div>Gain access to over 50+ trading products, from Forex to CFD Commodity and Indices, all streamed and updated over dedicated fibre optic network.</div>
                            </div>
                        </div>
                    </div>
                    <div class="block-item col-lg-6">
                        <div class="clearfix eq-count_content count_wrapper " style="height: 236px;">
                            <div class="count_icon">
                                <span class="num">02</span>										</div>
                            <div class="count_content  has_num ">
                                <h3>Award-Winning Technology</h3>
                                <div>A choice of award-winning trading platforms and apps for tablets and smartphones – packed with tools to help your customers analyse the markets.</div>
                            </div>
                        </div>
                    </div>
                    <div class="block-item col-lg-6">
                        <div class="clearfix eq-count_content count_wrapper " style="height: 236px;">
                            <div class="count_icon">
                                <span class="num">03</span>										</div>
                            <div class="count_content  has_num ">
                                <h3>Excellent Liquidity &amp; Execution</h3>
                                <div>Your customers will benefit from exceptional liquidity, price transparency and trade execution across our full range of global markets.</div>
                            </div>
                        </div>
                    </div>
                    <div class="block-item col-lg-6">
                        <div class="clearfix eq-count_content count_wrapper " style="height: 236px;">
                            <div class="count_icon">
                                <span class="num">04</span>										</div>
                            <div class="count_content  has_num ">
                                <h3>Premium Support</h3>
                                <div>Our Support, Technical and Trading Desks are available around-the-clock to address any questions or concerns your customers may have quickly and efficiently.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="three-text-blocks-content grey-bgr clearfix">
            <div class="container">
                <h2 class="text-center">Refer new Customers to Us</h2>									<div class="col-lg-10 text-center img-wrapper">
                    <p>The program is available to individuals and introducers of all sizes including corporate. Commissions are paid in real-time to your IB account and can be withdrawn upon request. There are no minimum or limits on the trading volumes or the number of referred accounts.</p>
                    <p></p>
                </div>
                <div class="blocks-wrapper mt-5">
                    <div class="row">
                        <div class="col-md-4 tb-block">
                            <div class="item text-center img-wrapper equal-three-blocks">
                                <h3 class="mt-3">Easy Integration &amp; $0 Setup Cost</h3>																					<div class="font-size-14">
                                    There is no complex IT implementation required or mountains of paperwork to sign, and no upfront investment is required to join our IB program.											</div>
                            </div>
                        </div>
                        <div class="col-md-4 tb-block">
                            <div class="item text-center img-wrapper equal-three-blocks">
                                <h3 class="mt-3">Dedicated Premium Support</h3>																					<div class="font-size-14">
                                    You will be allocated a personal, dedicated IB Account Manager to support all your operational needs and provide ongoing business development support.											</div>
                            </div>
                        </div>
                        <div class="col-md-4 tb-block">
                            <div class="item text-center img-wrapper equal-three-blocks">
                                <h3 class="mt-3">Fast Client On-Boarding</h3>																					<div class="font-size-14">
                                    Our account opening process is fully automated, and you may track your customer online account applications in real-time via the Partner Portal.											</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5 text-center img-wrapper">
                    <a href="{{ route('register') }}" class="btn rounded-btn green-btn">Submit Application Now</a>
                </div>
            </div>
        </section>
        <section class="usp-block-content clearfix white-bgr bordered ">
            <div class="container">
                <h2>Why Partner with Us?</h2>
                <div class="usp-wrapper slick-initialized slick-slider slick-dotted"><button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Previous</button>
                    <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 5850px; transform: translate3d(-2340px, 0px, 0px);"><div class="usp-slide slick-slide slick-cloned" data-slick-index="-3" id="" aria-hidden="true" tabindex="-1" style="width: 350px;">
                                <div class="usp eq-blocks">

                                    <img width="150" height="150" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%20150'%3E%3C/svg%3E" class="pt-3 wp-post-image" alt="" loading="lazy" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/08/Cutting_Edge_Technology.png"><noscript><img width="150" height="150" src="wp-content/uploads/sites/11/2019/08/Cutting_Edge_Technology.png" class="pt-3 wp-post-image" alt="" loading="lazy" /></noscript>												<h3>MT4 &amp; MT5 Platforms</h3>
                                    <div class="usp-content">Trade effortlessly on intuitive, market-leading platforms designed and built for traders worldwide via our cutting-edge technology infrastructure.</div>
                                </div>
                            </div><div class="usp-slide slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true" tabindex="-1" style="width: 350px;">
                                <div class="usp eq-blocks">

                                    <img width="150" height="150" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%20150'%3E%3C/svg%3E" class="pt-3 wp-post-image" alt="" loading="lazy" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/06/Trusted_Regulated_Broker.png"><noscript><img width="150" height="150" src="wp-content/uploads/sites/11/2019/06/Trusted_Regulated_Broker.png" class="pt-3 wp-post-image" alt="" loading="lazy" /></noscript>												<h3>Multi jurisdiction regulation</h3>
                                    <div class="usp-content">Established in Australia and now regulated in multiple jurisdictions.</div>
                                </div>
                            </div><div class="usp-slide slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1" style="width: 350px;">
                                <div class="usp eq-blocks">

                                    <img width="150" height="150" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%20150'%3E%3C/svg%3E" class="pt-3 wp-post-image" alt="" loading="lazy" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/07/Dedicated_Customer_Support.png"><noscript><img width="150" height="150" src="wp-content/uploads/sites/11/2019/07/Dedicated_Customer_Support.png" class="pt-3 wp-post-image" alt="" loading="lazy" /></noscript>												<h3>Personal Customer Support</h3>
                                    <div class="usp-content">Find your feet with our two personalised account offerings. Our multilingual team is available to help you navigate the financial markets. You can trade at your own pace knowing we are only a phone call away.</div>
                                </div>
                            </div><div class="usp-slide slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide00" aria-describedby="slick-slide-control00" style="width: 350px;">
                                <div class="usp eq-blocks">

                                    <img width="150" height="150" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%20150'%3E%3C/svg%3E" class="pt-3 wp-post-image" alt="" loading="lazy" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/07/Lightning-Fast-Execution.png"><noscript><img width="150" height="150" src="wp-content/uploads/sites/11/2019/07/Lightning-Fast-Execution.png" class="pt-3 wp-post-image" alt="" loading="lazy" /></noscript>												<h3>Fast Execution</h3>
                                    <div class="usp-content">Our execution servers are located in Equinix data centres, where most of the world's financial institutions are hosted, ensuring optimal performance at all times.</div>
                                </div>
                            </div><div class="usp-slide slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide01" aria-describedby="slick-slide-control01" style="width: 350px;">
                                <div class="usp eq-blocks">

                                    <img width="150" height="150" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%20150'%3E%3C/svg%3E" class="pt-3 wp-post-image" alt="" loading="lazy" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/07/Premium-Liquidity.png"><noscript><img width="150" height="150" src="wp-content/uploads/sites/11/2019/07/Premium-Liquidity.png" class="pt-3 wp-post-image" alt="" loading="lazy" /></noscript>												<h3>Premium Liquidity</h3>
                                    <div class="usp-content">Our pricing is aggregated from multiple top-tier liquidity providers, allowing you to trade on spreads from as low as 0.0 pips.</div>
                                </div>
                            </div><div class="usp-slide slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide02" aria-describedby="slick-slide-control02" style="width: 350px;">
                                <div class="usp eq-blocks">

                                    <img width="150" height="150" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%20150'%3E%3C/svg%3E" class="pt-3 wp-post-image" alt="" loading="lazy" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/07/Complete-Transparency.png"><noscript><img width="150" height="150" src="wp-content/uploads/sites/11/2019/07/Complete-Transparency.png" class="pt-3 wp-post-image" alt="" loading="lazy" /></noscript>												<h3>Complete Transparency</h3>
                                    <div class="usp-content">Trade with us and receive direct market access with no dealing desk intervention or price manipulation. A fully transparent trading environment, at your fingertips.</div>
                                </div>
                            </div><div class="usp-slide slick-slide slick-current slick-active" data-slick-index="3" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide03" aria-describedby="slick-slide-control03" style="width: 350px;">
                                <div class="usp eq-blocks">

                                    <img width="150" height="150" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%20150'%3E%3C/svg%3E" class="pt-3 wp-post-image" alt="" loading="lazy" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/08/Cutting_Edge_Technology.png"><noscript><img width="150" height="150" src="wp-content/uploads/sites/11/2019/08/Cutting_Edge_Technology.png" class="pt-3 wp-post-image" alt="" loading="lazy" /></noscript>												<h3>MT4 &amp; MT5 Platforms</h3>
                                    <div class="usp-content">Trade effortlessly on intuitive, market-leading platforms designed and built for traders worldwide via our cutting-edge technology infrastructure.</div>
                                </div>
                            </div><div class="usp-slide slick-slide slick-active" data-slick-index="4" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide04" aria-describedby="slick-slide-control04" style="width: 350px;">
                                <div class="usp eq-blocks">

                                    <img width="150" height="150" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%20150'%3E%3C/svg%3E" class="pt-3 wp-post-image" alt="" loading="lazy" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/06/Trusted_Regulated_Broker.png"><noscript><img width="150" height="150" src="wp-content/uploads/sites/11/2019/06/Trusted_Regulated_Broker.png" class="pt-3 wp-post-image" alt="" loading="lazy" /></noscript>												<h3>Multi jurisdiction regulation</h3>
                                    <div class="usp-content">Established in Australia and now regulated in multiple jurisdictions.</div>
                                </div>
                            </div><div class="usp-slide slick-slide slick-active" data-slick-index="5" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide05" aria-describedby="slick-slide-control05" style="width: 350px;">
                                <div class="usp eq-blocks">

                                    <img width="150" height="150" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%20150'%3E%3C/svg%3E" class="pt-3 wp-post-image" alt="" loading="lazy" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/07/Dedicated_Customer_Support.png"><noscript><img width="150" height="150" src="wp-content/uploads/sites/11/2019/07/Dedicated_Customer_Support.png" class="pt-3 wp-post-image" alt="" loading="lazy" /></noscript>												<h3>Personal Customer Support</h3>
                                    <div class="usp-content">Find your feet with our two personalised account offerings. Our multilingual team is available to help you navigate the financial markets. You can trade at your own pace knowing we are only a phone call away.</div>
                                </div>
                            </div><div class="usp-slide slick-slide slick-cloned" data-slick-index="6" id="" aria-hidden="true" tabindex="-1" style="width: 350px;">
                                <div class="usp eq-blocks">

                                    <img width="150" height="150" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%20150'%3E%3C/svg%3E" class="pt-3 wp-post-image" alt="" loading="lazy" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/07/Lightning-Fast-Execution.png"><noscript><img width="150" height="150" src="wp-content/uploads/sites/11/2019/07/Lightning-Fast-Execution.png" class="pt-3 wp-post-image" alt="" loading="lazy" /></noscript>												<h3>Fast Execution</h3>
                                    <div class="usp-content">Our execution servers are located in Equinix data centres, where most of the world's financial institutions are hosted, ensuring optimal performance at all times.</div>
                                </div>
                            </div><div class="usp-slide slick-slide slick-cloned" data-slick-index="7" id="" aria-hidden="true" tabindex="-1" style="width: 350px;">
                                <div class="usp eq-blocks">

                                    <img width="150" height="150" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%20150'%3E%3C/svg%3E" class="pt-3 wp-post-image" alt="" loading="lazy" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/07/Premium-Liquidity.png"><noscript><img width="150" height="150" src="wp-content/uploads/sites/11/2019/07/Premium-Liquidity.png" class="pt-3 wp-post-image" alt="" loading="lazy" /></noscript>												<h3>Premium Liquidity</h3>
                                    <div class="usp-content">Our pricing is aggregated from multiple top-tier liquidity providers, allowing you to trade on spreads from as low as 0.0 pips.</div>
                                </div>
                            </div><div class="usp-slide slick-slide slick-cloned" data-slick-index="8" id="" aria-hidden="true" tabindex="-1" style="width: 350px;">
                                <div class="usp eq-blocks">

                                    <img width="150" height="150" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%20150'%3E%3C/svg%3E" class="pt-3 wp-post-image" alt="" loading="lazy" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/07/Complete-Transparency.png"><noscript><img width="150" height="150" src="wp-content/uploads/sites/11/2019/07/Complete-Transparency.png" class="pt-3 wp-post-image" alt="" loading="lazy" /></noscript>												<h3>Complete Transparency</h3>
                                    <div class="usp-content">Trade with us and receive direct market access with no dealing desk intervention or price manipulation. A fully transparent trading environment, at your fingertips.</div>
                                </div>
                            </div><div class="usp-slide slick-slide slick-cloned" data-slick-index="9" id="" aria-hidden="true" tabindex="-1" style="width: 350px;">
                                <div class="usp eq-blocks">

                                    <img width="150" height="150" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%20150'%3E%3C/svg%3E" class="pt-3 wp-post-image" alt="" loading="lazy" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/08/Cutting_Edge_Technology.png"><noscript><img width="150" height="150" src="wp-content/uploads/sites/11/2019/08/Cutting_Edge_Technology.png" class="pt-3 wp-post-image" alt="" loading="lazy" /></noscript>												<h3>MT4 &amp; MT5 Platforms</h3>
                                    <div class="usp-content">Trade effortlessly on intuitive, market-leading platforms designed and built for traders worldwide via our cutting-edge technology infrastructure.</div>
                                </div>
                            </div><div class="usp-slide slick-slide slick-cloned" data-slick-index="10" id="" aria-hidden="true" tabindex="-1" style="width: 350px;">
                                <div class="usp eq-blocks">

                                    <img width="150" height="150" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%20150'%3E%3C/svg%3E" class="pt-3 wp-post-image" alt="" loading="lazy" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/06/Trusted_Regulated_Broker.png"><noscript><img width="150" height="150" src="wp-content/uploads/sites/11/2019/06/Trusted_Regulated_Broker.png" class="pt-3 wp-post-image" alt="" loading="lazy" /></noscript>												<h3>Multi jurisdiction regulation</h3>
                                    <div class="usp-content">Established in Australia and now regulated in multiple jurisdictions.</div>
                                </div>
                            </div><div class="usp-slide slick-slide slick-cloned" data-slick-index="11" id="" aria-hidden="true" tabindex="-1" style="width: 350px;">
                                <div class="usp eq-blocks">

                                    <img width="150" height="150" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%20150'%3E%3C/svg%3E" class="pt-3 wp-post-image" alt="" loading="lazy" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/07/Dedicated_Customer_Support.png"><noscript><img width="150" height="150" src="wp-content/uploads/sites/11/2019/07/Dedicated_Customer_Support.png" class="pt-3 wp-post-image" alt="" loading="lazy" /></noscript>												<h3>Personal Customer Support</h3>
                                    <div class="usp-content">Find your feet with our two personalised account offerings. Our multilingual team is available to help you navigate the financial markets. You can trade at your own pace knowing we are only a phone call away.</div>
                                </div>
                            </div></div></div>





                    <button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button><ul class="slick-dots" style="" role="tablist"><li class="" role="presentation"><button type="button" role="tab" id="slick-slide-control00" aria-controls="slick-slide00" aria-label="1 of 2" tabindex="-1">1</button></li><li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control01" aria-controls="slick-slide01" aria-label="2 of 2" tabindex="-1">2</button></li><li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control02" aria-controls="slick-slide02" aria-label="3 of 2" tabindex="-1">3</button></li><li role="presentation" class="slick-active"><button type="button" role="tab" id="slick-slide-control03" aria-controls="slick-slide03" aria-label="4 of 2" tabindex="0" aria-selected="true">4</button></li><li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control04" aria-controls="slick-slide04" aria-label="5 of 2" tabindex="-1">5</button></li><li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control05" aria-controls="slick-slide05" aria-label="6 of 2" tabindex="-1">6</button></li></ul></div>
            </div>
        </section>
        <section class="faq-section clearfix white-bgr" style=" ">
            <div class="container">
                <h2 class="title">FAQs</h2>
                <div id="accordion" class="accordion faq-wrapper">
                    <div class="card mb-0">
                        <div class="margin-top-10 margin-bottom-10">
                            <div class="card-header arrow-down" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" href="#collapse0">
                                <a class="card-title">
                                    When can I start referring customers?										</a>
                            </div>
                            <div id="collapse0" class="card-body collapse show" data-parent="#accordion">
                                <div class="padding_30_both">
                                    <p>You can start promoting our services to your client base as soon as you receive a unique IB code/link from us in your Partner Portal area.</p>
                                </div>
                            </div>
                        </div>
                        <div class="margin-top-10 margin-bottom-10">
                            <div class="card-header arrow-up" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" href="#collapse1">
                                <a class="card-title">
                                    How are the IB fees calculated?										</a>
                            </div>
                            <div id="collapse1" class="card-body collapse " data-parent="#accordion">
                                <div class="padding_30_both">
                                    <p>Our IB compensation structure is based on the trading volumes of your referred customers and will be calculated automatically in real-time. So each time one of the customers in your network makes a trade, you will receive a commission.</p>
                                    <p>You will be able to access your customers’ trading activity details and corresponding fee calculation inside your Partner Portal.</p>
                                </div>
                            </div>
                        </div>
                        <div class="margin-top-10 margin-bottom-10">
                            <div class="card-header arrow-up" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" href="#collapse2">
                                <a class="card-title">
                                    When can I withdraw my IB commission?										</a>
                            </div>
                            <div id="collapse2" class="card-body collapse " data-parent="#accordion">
                                <div class="padding_30_both">
                                    <p>You may withdraw commission from your IB account at any given point in time by submitting a withdrawal request from your Partner Portal.</p>
                                </div>
                            </div>
                        </div>
                        <div class="margin-top-10 margin-bottom-10">
                            <div class="card-header arrow-up" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" href="#collapse3">
                                <a class="card-title">
                                    What is the Partner Portal?										</a>
                            </div>
                            <div id="collapse3" class="card-body collapse " data-parent="#accordion">
                                <div class="padding_30_both">
                                    <p>The Partner Portal is the central point for our IBs to monitor their customer trading activities, manage all marketing campaigns, track their success and view the revenue generated from their referrals. All of this is done in real-time with little to no intervention required from yourself or EightCap.</p>
                                    <p>The Partner Portal also lets you track your new customer account registrations in real-time, answering the age-old question, “Is that account opened yet?”</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>

@endsection
