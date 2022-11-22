@extends('pages.layouts.app')
@section('content')


<section class="inner-banner gray-bg text-center">
    <div class="thm-container">
        <div class="breadcumb">
            <a href="{{ route('homepage') }}">Home</a><!--
			--><span class="sep">-</span><!--
			--><span class="page-name">About Us</span>
        </div><!-- /.breadcumb -->
        <h3>About Us</h3>
    </div><!-- /.thm-container -->
</section><!-- /.inner-banner -->

<section class="cta-style-one sec-pad">
    <div class="thm-container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="countdown-title">
                    <h3>About <span style="color: #3ed4c9;">Trust InvestmentHubs</span></h3>
                    <p>Trust InvestmentHubs was founded by a team of professional individuals comprising of experts from the banking, finance and technology sectors, which are multi-billion dollars industries, in 2004.
                        We provide a unique global perspective through our global network, in-depth market and sector knowledge. This puts us in an excellent position to address the increasingly global needs of our clients.</p>
                    <p>Our work is always intended to provide a clear benefit to all our clients in both the short and long term investments. We focus our resources, leverage our global scale, and drive excellence in all we do while enhancing our partner-like culture to ensure profits on all sectors of our company.</p>
                </div><!-- /.countdown-title -->
            </div><!-- /.col-lg-6 col-md-12 col-sm-12 col-xs-12 -->
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <img src="{{ asset('front/new-assets/img/custom/about-1.jpg') }}" style="width: 100%;" />
            </div><!-- /.col-lg-6 col-md-12 col-sm-12 col-xs-12 -->
        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section><!-- /.count-down-style-one-wrapper -->


@endsection
