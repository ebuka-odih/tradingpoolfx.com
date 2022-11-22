<section class="pricing btc-calculator sec-pad py-5">
    <div class="container">
        <div class="row">
            <!-- Free Tier -->
            <div class="col-lg-12">
                <div class="sec-title text-center">
                    <h3 style="color: #222; !important">Investment Plans</h3>
                </div><!-- /.sec-title text-center -->
            </div>
        </div>
        <div class="row">
            <!-- Free Tier -->
            @foreach($invest_plans as $item)
                <div class="col-lg-3">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-body">
                            <h5 class="card-title text-muted text-uppercase text-center">{{ $item->name }}</h5>
                            <h6 class="card-price text-center">{!! $item->total_return() !!}%</h6>
                            <hr>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Duration: {{ $item->term_days }} DAY(s)</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Daily Return: {{ $item->daily_interest }} %</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Ref Commision: 5%</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Instant Payment</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Price: <br><span style="color:#7eb20e; font-weight: 600; font-size: 18px;">${{ $item->min_deposit }} - ${{ $item->max_deposit }}</span></li>
                            </ul>
                            <a href="{{ route('user.user_deposits') }}"   style="background-color: #35c4ba!important;" class="btn btn-block btn-primary text-uppercase">GET STARTED</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
