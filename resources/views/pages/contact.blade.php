
@extends('pages.layouts.app')
@section('content')


<section class="inner-banner gray-bg text-center">
    <div class="thm-container">
        <div class="breadcumb">
            <a href="{{ route('homepage') }}">Home</a><!--
			--><span class="sep">-</span><!--
			--><span class="page-name">Contact Us</span>
        </div><!-- /.breadcumb -->
        <h3>Contact Us</h3>
    </div><!-- /.thm-container -->
</section><!-- /.inner-banner -->

<section class="contact-page-wrapper sec-pad">
    <div class="thm-container">
        <div class="row">
            <div class="col-md-8">
                <form action="https://zengofx.com/inc/sendemail.php" method="post" class="contact-form row">
                    <div class="col-md-6">
                        <input type="text" placeholder="Name" name="name" />
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6">
                        <input type="text" placeholder="Email Address" name="email" />
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6">
                        <input type="text" placeholder="Phone" name="phone" />
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6">
                        <input type="text" placeholder="Subject" name="topic" />
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-12">
                        <textarea name="message" placeholder="Type message here"></textarea>
                        <button class="thm-btn yellow-bg" type="submit">Send Message</button>
                    </div><!-- /.col-md-12 -->
                </form><!-- /.contact-form -->
            </div><!-- /.col-md-8 -->
            <div class="col-md-4">
                <div class="contact-sidebar">
                    <div class="single-contact-info">
                        <div class="title">
                            <h3>Address</h3>
                        </div><!-- /.title -->
                        <p>725  Parkway Street, Los Angeles <br />CA 90017, United States</p>
                    </div><!-- /.single-contact-info -->
                    <div class="single-contact-info">
                        <div class="title">
                            <h3>Phone: </h3>
                        </div><!-- /.title -->
                        <p>WhatsApp: +1(860)852‑7017 <br /> Mobile: +1(860)852‑7017</p>
                    </div><!-- /.single-contact-info -->
                    <div class="single-contact-info">
                        <div class="title">
                            <h3>Email</h3>
                        </div><!-- /.title -->
                        <p>support@zengoinvest.com</p>
                    </div><!-- /.single-contact-info -->
                </div><!-- /.contact-sidebar -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section><!-- /.contact-page-wrapper -->



@endsection

