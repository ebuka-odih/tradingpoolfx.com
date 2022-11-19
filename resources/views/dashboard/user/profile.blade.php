@extends('dashboard.layout.app')
@section('content')

<div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>My Profile</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
<div class="content mt-3">

    <div class="animated fadeIn">

        <div>
            <form method="post" action="{{ route('user.updateProfile') }}" enctype="multipart/form-data" novalidate="novalidate">
                @csrf
                @method('PATCH')
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Personal Details (Active User)</strong>
                        </div>
                        <div class="card-body">
                            <!-- Credit Card -->
                            <div id="pay-invoice">
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="cc-exp" class="control-label mb-1">Title</label>
                                                <select id="cc-exp" class="form-control form-control" name="title">
                                                    <option value="NA">Please select</option>
                                                    <option value="Mr">Mr</option>
                                                    <option value="Mrs">Mrs</option>
                                                    <option value="Miss">Miss</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="x_card_code" class="control-label mb-1">Gender</label>
                                            <div class="input-group">
                                                <select id="selectLg" class="form-control form-control" name="gender">
                                                    <option value="NA">Please select</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <label for="x_card_code" class="control-label mb-1">First Name</label>
                                            <div class="input-group">
                                                <input id="FirstName" type="text" class="form-control cc-cvc" data-val="true" data-val-required="Please enter your first name" data-val-cc-cvc="Please enter your first name" autocomplete="off" name="first_name" value="{{ old('firstname', optional($user)->firstname) }}">
                                                <div class="input-group-addon">
                                                    <span class="fa fa-user-circle fa-lg" data-toggle="popover" data-container="body" data-html="true" data-title="First Name" data-content="<div class='text-center one-card'>Your First Name<div class='visa-mc-cvc-preview'></div></div>" data-trigger="hover"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="x_card_code" class="control-label mb-1">Last Name</label>
                                            <div class="input-group">
                                                <input id="LastName" type="text" class="form-control cc-cvc" data-val="true" data-val-required="Please enter your last name" data-val-cc-cvc="Please enter your last name" autocomplete="off" name="last_name" value="{{ old('lastname', optional($user)->lastname) }}">
                                                <div class="input-group-addon">
                                                    <span class="fa fa-user-circle fa-lg" data-toggle="popover" data-container="body" data-html="true" data-title="Last Name" data-content="<div class='text-center one-card'>Your Last Name<div class='visa-mc-cvc-preview'></div></div>" data-trigger="hover"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <label for="x_card_code" class="control-label mb-1 mt-3">Phone Number</label>
                                            <div class="input-group">
                                                <input id="PhoneNumber" type="text" class="form-control cc-cvc" data-val="true" data-val-required="Please enter your phone number" data-val-cc-cvc="Please enter your phone number" autocomplete="off" name="phone" value="{{ old('phone', optional($user)->phone) }}">
                                                <div class="input-group-addon">
                                                    <span class="fa fa-mobile-phone fa-lg" data-toggle="popover" data-container="body" data-html="true" data-title="Phone Number" data-content="<div class='text-center one-card'>Your Phone Number<div class='visa-mc-cvc-preview'></div></div>" data-trigger="hover"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <label for="x_card_code" class="control-label mb-1 mt-3">Marital Status</label>
                                            <div class="input-group">
                                                <select id="selectLg" class="form-control form-control" name="marital_status">
                                                    <option value="NA">Please select</option>
                                                    <option value="Single">Single</option>
                                                    <option value="Married">Married</option>
                                                    <option value="In a Relationship">In a Relationship</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="x_card_code" class="control-label mb-1 mt-3">Country</label>
                                            <div class="input-group">
                                                <select id="selectLg" class="form-control form-control" name="country">
                                                    <option value="NA">Please select</option>
                                                    <option value="af">Afghanistan</option>
                                                    <option value="al">Albania</option>
                                                    <option value="dz">Algeria</option>
                                                    <option value="as">American Samoa</option>
                                                    <option value="ad">Andorra</option>
                                                    <option value="ao">Angola</option>
                                                    <option value="ai">Anguilla</option>
                                                    <option value="aq">Antarctica</option>
                                                    <option value="ag">Antigua And Barbuda</option>
                                                    <option value="ar">Argentina</option>
                                                    <option value="am">Armenia</option>
                                                    <option value="aw">Aruba</option>
                                                    <option value="au">Australia</option>
                                                    <option value="at">Austria</option>
                                                    <option value="az">Azerbaijan</option>
                                                    <option value="bs">Bahamas</option>
                                                    <option value="bh">Bahrain</option>
                                                    <option value="bd">Bangladesh</option>
                                                    <option value="bb">Barbados</option>
                                                    <option value="by">Belarus</option>
                                                    <option value="be">Belgium</option>
                                                    <option value="bz">Belize</option>
                                                    <option value="bj">Benin</option>
                                                    <option value="bm">Bermuda</option>
                                                    <option value="bt">Bhutan</option>
                                                    <option value="bo">Bolivia</option>
                                                    <option value="ba">Bosnia And Herzegovina</option>
                                                    <option value="bw">Botswana</option>
                                                    <option value="bv">Bouvet Island</option>
                                                    <option value="br">Brazil</option>
                                                    <option value="io">British Indian Ocean continent</option>
                                                    <option value="bn">Brunei Darussalam</option>
                                                    <option value="bg">Bulgaria</option>
                                                    <option value="bf">Burkina Faso</option>
                                                    <option value="bi">Burundi</option>
                                                    <option value="kh">Cambodia</option>
                                                    <option value="cm">Cameroon</option>
                                                    <option value="ca">Canada</option>
                                                    <option value="cv">Cape Verde</option>
                                                    <option value="ky">Cayman Islands</option>
                                                    <option value="cf">Central African Republic</option>
                                                    <option value="td">Chad</option>
                                                    <option value="cl">Chile</option>
                                                    <option value="cn">China</option>
                                                    <option value="cx">Christmas Island</option>
                                                    <option value="cc">Cocos (Keeling) Islands</option>
                                                    <option value="co">Colombia</option>
                                                    <option value="km">Comoros</option>
                                                    <option value="cg">Congo</option>
                                                    <option value="ck">Cook Islands</option>
                                                    <option value="cr">Costa Rica</option>
                                                    <option value="ci">Cote D'Ivoire</option>
                                                    <option value="hr">Croatia</option>
                                                    <option value="cu">Cuba</option>
                                                    <option value="cy">Cyprus</option>
                                                    <option value="cz">Czech Republic</option>
                                                    <option value="dk">Denmark</option>
                                                    <option value="dj">Djibouti</option>
                                                    <option value="dm">Dominica</option>
                                                    <option value="do">Dominican Republic</option>
                                                    <option value="ec">Ecuador</option>
                                                    <option value="eg">Egypt</option>
                                                    <option value="sv">El Salvador</option>
                                                    <option value="gq">Equatorial Guinea</option>
                                                    <option value="er">Eritrea</option>
                                                    <option value="ee">Estonia</option>
                                                    <option value="et">Ethiopia</option>
                                                    <option value="fk">Falkland Islands (Malvinas)</option>
                                                    <option value="fo">Faroe Islands</option>
                                                    <option value="fj">Fiji</option>
                                                    <option value="fi">Finland</option>
                                                    <option value="fr">France</option>
                                                    <option value="fx">France, Metropolitan</option>
                                                    <option value="gf">French Guiana</option>
                                                    <option value="pf">French Polynesia</option>
                                                    <option value="tf">French Southern Territories</option>
                                                    <option value="ga">Gabon</option>
                                                    <option value="gm">Gambia</option>
                                                    <option value="ge">Georgia</option>
                                                    <option value="de">Germany</option>
                                                    <option value="gh">Ghana</option>
                                                    <option value="gi">Gibraltar</option>
                                                    <option value="gr">Greece</option>
                                                    <option value="gl">Greenland</option>
                                                    <option value="gd">Grenada</option>
                                                    <option value="gp">Guadeloupe</option>
                                                    <option value="gu">Guam</option>
                                                    <option value="gt">Guatemala</option>
                                                    <option value="gn">Guinea</option>
                                                    <option value="gw">Guinea-Bissau</option>
                                                    <option value="gy">Guyana</option>
                                                    <option value="ht">Haiti</option>
                                                    <option value="hm">Heard Island and Mcdonald Islands</option>
                                                    <option value="hn">Honduras</option>
                                                    <option value="hk">Hong Kong</option>
                                                    <option value="hu">Hungary</option>
                                                    <option value="is">Iceland</option>
                                                    <option value="in">India</option>
                                                    <option value="id">Indonesia</option>
                                                    <option value="ir">Iran, Islamic Republic Of</option>
                                                    <option value="iq">Iraq</option>
                                                    <option value="ie">Ireland</option>
                                                    <option value="il">Israel</option>
                                                    <option value="it">Italy</option>
                                                    <option value="jm">Jamaica</option>
                                                    <option value="jp">Japan</option>
                                                    <option value="jo">Jordan</option>
                                                    <option value="kz">Kazakhstan</option>
                                                    <option value="ke">Kenya</option>
                                                    <option value="ki">Kiribati</option>
                                                    <option value="kp">Korea, Democratic People'S Republic Of</option>
                                                    <option value="kr">Korea, Republic Of</option>
                                                    <option value="kw">Kuwait</option>
                                                    <option value="kg">Kyrgyzstan</option>
                                                    <option value="la">Lao People's Democratic Republic</option>
                                                    <option value="lv">Latvia</option>
                                                    <option value="lb">Lebanon</option>
                                                    <option value="ls">Lesotho</option>
                                                    <option value="lr">Liberia</option>
                                                    <option value="ly">Libyan Arab Jamahiriya</option>
                                                    <option value="li">Liechtenstein</option>
                                                    <option value="lt">Lithuania</option>
                                                    <option value="lu">Luxembourg</option>
                                                    <option value="mo">Macau</option>
                                                    <option value="mk">Macedonia, The Former Yugoslav Republic Of</option>
                                                    <option value="mg">Madagascar</option>
                                                    <option value="mw">Malawi</option>
                                                    <option value="my">Malaysia</option>
                                                    <option value="mv">Maldives</option>
                                                    <option value="ml">Mali</option>
                                                    <option value="mt">Malta</option>
                                                    <option value="mh">Marshall Islands</option>
                                                    <option value="mq">Martinique</option>
                                                    <option value="mr">Mauritania</option>
                                                    <option value="mu">Mauritius</option>
                                                    <option value="yt">Mayotte</option>
                                                    <option value="mx">Mexico</option>
                                                    <option value="fm">Micronesia, Federated States Of</option>
                                                    <option value="md">Moldova, Republic Of</option>
                                                    <option value="mc">Monaco</option>
                                                    <option value="mn">Mongolia</option>
                                                    <option value="ms">Montserrat</option>
                                                    <option value="ma">Morocco</option>
                                                    <option value="mz">Mozambique</option>
                                                    <option value="mm">Myanmar</option>
                                                    <option value="na">Namibia</option>
                                                    <option value="nr">Nauru</option>
                                                    <option value="np">Nepal</option>
                                                    <option value="nl">Netherlands</option>
                                                    <option value="an">Netherlands Antilles</option>
                                                    <option value="nc">New Caledonia</option>
                                                    <option value="nz">New Zealand</option>
                                                    <option value="ni">Nicaragua</option>
                                                    <option value="ne">Niger</option>
                                                    <option value="ng">Nigeria</option>
                                                    <option value="nu">Niue</option>
                                                    <option value="nf">Norfolk Island</option>
                                                    <option value="mp">Northern Mariana Islands</option>
                                                    <option value="no">Norway</option>
                                                    <option value="om">Oman</option>
                                                    <option value="pk">Pakistan</option>
                                                    <option value="pw">Palau</option>
                                                    <option value="pa">Panama</option>
                                                    <option value="pg">Papua New Guinea</option>
                                                    <option value="py">Paraguay</option>
                                                    <option value="pe">Peru</option>
                                                    <option value="ph">Philippines</option>
                                                    <option value="pn">Pitcairn</option>
                                                    <option value="pl">Poland</option>
                                                    <option value="pt">Portugal</option>
                                                    <option value="pr">Puerto Rico</option>
                                                    <option value="qa">Qatar</option>
                                                    <option value="re">Reunion</option>
                                                    <option value="ro">Romania</option>
                                                    <option value="ru">Russian Federation</option>
                                                    <option value="rw">Rwanda</option>
                                                    <option value="sh">Saint Helena</option>
                                                    <option value="kn">Saint Kitts And Nevis</option>
                                                    <option value="lc">Saint Lucia</option>
                                                    <option value="pm">Saint Pierre And Miquelon</option>
                                                    <option value="vc">Saint Vincent And The Grenadines</option>
                                                    <option value="ws">Samoa</option>
                                                    <option value="sm">San Marino</option>
                                                    <option value="st">Sao Tome And Principe</option>
                                                    <option value="sa">Saudi Arabia</option>
                                                    <option value="sn">Senegal</option>
                                                    <option value="sc">Seychelles</option>
                                                    <option value="sl">Sierra Leone</option>
                                                    <option value="sg">Singapore</option>
                                                    <option value="sk">Slovakia (Slovak Republic)</option>
                                                    <option value="si">Slovenia</option>
                                                    <option value="sb">Solomon Islands</option>
                                                    <option value="so">Somalia</option>
                                                    <option value="za">South Africa</option>
                                                    <option value="es">Spain</option>
                                                    <option value="lk">Sri Lanka</option>
                                                    <option value="sd">Sudan</option>
                                                    <option value="sr">Suriname</option>
                                                    <option value="sj">Svalbard And Jan Mayen Islands</option>
                                                    <option value="sz">Swaziland</option>
                                                    <option value="se">Sweden</option>
                                                    <option value="ch">Switzerland</option>
                                                    <option value="sy">Syrian Arab Republic</option>
                                                    <option value="tw">Taiwan, Province Of China</option>
                                                    <option value="tj">Tajikistan</option>
                                                    <option value="tz">Tanzania, United Republic Of</option>
                                                    <option value="th">Thailand</option>
                                                    <option value="tg">Togo</option>
                                                    <option value="tk">Tokelau</option>
                                                    <option value="to">Tonga</option>
                                                    <option value="tt">Trinidad And Tobago</option>
                                                    <option value="tn">Tunisia</option>
                                                    <option value="tr">Turkey</option>
                                                    <option value="tm">Turkmenistan</option>
                                                    <option value="tc">Turks And Caicos Islands</option>
                                                    <option value="tv">Tuvalu</option>
                                                    <option value="ug">Uganda</option>
                                                    <option value="ua">Ukraine</option>
                                                    <option value="ae">United Arab Emirates</option>
                                                    <option value="gb">United Kingdom</option>
                                                    <option value="us">United States</option>
                                                    <option value="um">United States Minor Outlying Islands</option>
                                                    <option value="uy">Uruguay</option>
                                                    <option value="uz">Uzbekistan</option>
                                                    <option value="vu">Vanuatu</option>
                                                    <option value="va">Vatican City State (Holy See)</option>
                                                    <option value="ve">Venezuela</option>
                                                    <option value="vn">Vietnam</option>
                                                    <option value="vg">Virgin Islands (British)</option>
                                                    <option value="vi">Virgin Islands (U.S.)</option>
                                                    <option value="wf">Wallis And Futuna Islands</option>
                                                    <option value="eh">Western Sahara</option>
                                                    <option value="ye">Yemen</option>
                                                    <option value="yu">Yugoslavia</option>
                                                    <option value="zr">Zaire</option>
                                                    <option value="zm">Zambia</option>
                                                    <option value="zw">Zimbabwe</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="input-group">
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block mt-4">
                                                    <i class="fa fa-database fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Save Profile Details</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div> <!-- .card -->

                </div><!--/.col-->

                <div class="col-lg-5 col-md-6">
                    <section class="card">
                        <div class="twt-feed blue-bg">
                            <div class="corner-ribon black-ribon">
                                <i class="fa fa-user-circle"></i>
                            </div>
                            <div class="fa fa-twitter wtt-mark"></div>

                            <div class="media">
                                <img id="img-preview"  class="align-self-center rounded-circle mr-3" style="width:85px; height:85px; visibility: hidden" alt="" src="{{ auth()->user()->avatar }}">
                                <input hidden="" class="upload" id="fileUpload" type="file" onchange="ValidateImageExt(this);" name="fileUpload">
                                <label hidden="hidden" class="uploaded-img"></label>

                                <div class="media-body">
                                    <h2 class="text-white display-6">{{ auth()->user()->fullname() }}</h2>
                                    <p class="text-light">{{ auth()->user()->email }}</p>

{{--                                    <div class="twt-write col-sm-12">--}}
{{--                                        <button type="button" onclick="$('#fileUpload').click();" class="btn btn-outline-light" style="border-radius:10px; color:#fefefe">--}}
{{--                                            Update Profile Photo--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        </div>

                    </section>
                </div>
                <input name="__RequestVerificationToken" type="hidden" value="CfDJ8DT1a3CTqnpCgig_T_wqfVk5ouJOs_lyEuinaEOjiTmGqrY13jI8DEdLEoIqYqwf79xC-3HnRE1t3vEhXhafAHRPpDnYvZ8wiDDEkXA-pX2WY16cvKXjGAY4udjeEECi0wxyxvaCDCkpimHTfvAYYoO2e0vzZwfR1-rqQyR3xUwgW-goO9JsbLSkJCMFWJQ8zw"></form>
        </div>
    </div>

</div>

@endsection
