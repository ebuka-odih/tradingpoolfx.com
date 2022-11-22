@extends('pages.layouts.app2')
@section('content')

<div id="content" class="site-content">
    <a href="contact" class="support"><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80"><defs><style>.cls-1{fill:#fff;stroke:#fff;stroke-miterlimit:10;}</style></defs><polygon class="cls-1" points="52.05 27.44 43.77 36.52 44.96 36.98 53.22 27.9 52.05 27.44"></polygon><path class="cls-1" d="M9.81,29.49a38.11,38.11,0,0,1,.54-4.15l0-.1.1,0c1.65-.41,3.14-.7,4.5-.9l1.68-1.69a48.63,48.63,0,0,0-7.07,1.31l-.42.11-.11.42A36.58,36.58,0,0,0,8.28,31Z"></path><path class="cls-1" d="M26.65,38.37l0,0-6.46,4.52.2.53a30.58,30.58,0,0,0,16.2,16.92l.47.18,4.23-4.84h.07a21.47,21.47,0,0,1,11,3.23l1.07-1.06A22.68,22.68,0,0,0,41,54.24h-.41l-4,4.56-.11,0A29.73,29.73,0,0,1,22,43.57l0-.12.1-.07,5.77-4,.08-.15C28,39,30.51,34,26.7,23.85l-.1-.26-.24-.13a8.6,8.6,0,0,0-2-.63l-1.26,1.26a11.27,11.27,0,0,1,2.29.54l.07,0,0,.07c3,8.23,1.53,12.77,1.2,13.6Z"></path><path class="cls-1" d="M39.73,71.6,41,70.32A36.91,36.91,0,0,1,19.15,58.65,37.26,37.26,0,0,1,9.93,37.31l-1.3,1.3a38.5,38.5,0,0,0,9.45,21A38,38,0,0,0,39.73,71.6Z"></path><path class="cls-1" d="M53.54,64.75c-.43,3.82-1.67,5.44-2.14,5.93l0,0h0a31.38,31.38,0,0,1-3.44.17h-.45L46,72.31c.65,0,1.27,0,1.84,0a31.62,31.62,0,0,0,3.94-.21l.17,0,.14-.1c.13-.09,2.72-2,3-8.84Z"></path><path class="cls-1" d="M71.72,40.85a33.05,33.05,0,0,0-57.3-22.61l1.07,1A31.68,31.68,0,1,1,60.35,63.94l1,1.07A33.41,33.41,0,0,0,71.72,40.85Z"></path><path class="cls-1" d="M39.21,26.55H32.69v-1L35.3,23a19.64,19.64,0,0,0,1.58-1.73,4.69,4.69,0,0,0,.57-1,3.07,3.07,0,0,0,.19-1.06,1.67,1.67,0,0,0-.48-1.26,1.86,1.86,0,0,0-1.34-.46,3.46,3.46,0,0,0-1.17.2,4.85,4.85,0,0,0-1.24.74l-.6-.77a4.61,4.61,0,0,1,3-1.14,3.15,3.15,0,0,1,2.2.72,2.47,2.47,0,0,1,.79,1.93A3.61,3.61,0,0,1,38.26,21a11.51,11.51,0,0,1-2,2.34l-2.17,2.13v.05h5.1Z"></path><path class="cls-1" d="M47.64,24.27H46.16v2.28H45.08V24.27H40.25v-1L45,16.56h1.19v6.68h1.48Zm-2.56-1v-3.3c0-.65,0-1.38.07-2.2h0a9.68,9.68,0,0,1-.61,1.08l-3.11,4.42Z"></path><path class="cls-1" d="M56.19,39.68a3.69,3.69,0,0,1,2.48.78,2.71,2.71,0,0,1,.9,2.15,3.12,3.12,0,0,1-1,2.43,4,4,0,0,1-2.73.88,5,5,0,0,1-2.57-.54v-1.1a4,4,0,0,0,1.19.49,6.16,6.16,0,0,0,1.4.17,2.8,2.8,0,0,0,1.87-.57,2,2,0,0,0,.66-1.63c0-1.4-.85-2.09-2.56-2.09a10.19,10.19,0,0,0-1.73.19l-.59-.37.38-4.67h5v1h-4l-.26,3A7.68,7.68,0,0,1,56.19,39.68Z"></path></svg><br>Contact</a>
    <br><br><br>
    <br>


    <section id="header_content" class="header_content text-center no-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 center-block">
                    <h1 class="page-title">Check Our Spreads</h1>
                </div>
                <div class="text-center img-wrapper col-lg-10 mt-2">
                    <p>Start trading with Metrics Trade Plc today with spreads from 0.0 pips* and fast execution.<br>
                        Open an account and gain exposure to more than 1000 financial instruments on our award-winning platforms<span style="font-weight: 400;">**</span>.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="pages_header" class="text-center header_spacing ">
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







    <section class="forex-trading white-bgr">
        <div class="container text-center">
            <h2>Forex Trading</h2>
            <div class="mt-5 img-wrapper">
                Our Forex spreads are variable depending on underlying market prices. We aim to offer minimum spreads in most conditions, but when market prices go wider, our spreads will increase too.                    </div>

            <div class="tabs">
                <nav class="nav-justified ">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">

                        <a class="nav-item nav-link active" id="tab-major-forex-pairs-tab" data-toggle="tab" href="#tab-major-forex-pairs-0" role="tab" aria-controls="tab-major-forex-pairs" aria-selected="true">Major Forex Pairs</a>

                        <a class="nav-item nav-link " id="tab-minor-forex-pairs-tab" data-toggle="tab" href="#tab-minor-forex-pairs-1" role="tab" aria-controls="tab-minor-forex-pairs" aria-selected="false">Minor Forex Pairs</a>

                        <a class="nav-item nav-link " id="tab-exotic-forex-pairs-tab" data-toggle="tab" href="#tab-exotic-forex-pairs-2" role="tab" aria-controls="tab-exotic-forex-pairs" aria-selected="false">Exotic Forex Pairs</a>
                    </div>
                </nav>

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane spreads-content fade active show" id="tab-major-forex-pairs-0" role="tabpanel" aria-labelledby="tab-major-forex-pairs-tab">
                        <div class="container">
                            <div class="row content">
                                <div class="col-lg-12 col-md-12  content-part justify-content-center align-self-center">
                                    <div class="no no"><p>
                                        </p><table id="tablepress-2" class="tablepress tablepress-id-2 tablepress-responsive">
                                            <thead>
                                            <tr class="row-1 odd">
                                                <th class="column-1">Symbol</th><th class="column-2">Raw account<br>
                                                    Lowest spread*</th><th class="column-3">Standard account<br>
                                                    Lowest spread</th><th class="column-4">Average Spread</th>
                                            </tr>
                                            </thead>
                                            <tbody class="row-hover">
                                            <tr class="row-2 even">
                                                <td class="column-1">AUD/USD</td><td class="column-2">0.0 pips</td><td class="column-3">1.0 pips</td><td class="column-4">0.27 pips</td>
                                            </tr>
                                            <tr class="row-3 odd">
                                                <td class="column-1">EUR/USD</td><td class="column-2">0.0 pips</td><td class="column-3">1.0 pips</td><td class="column-4">0.06 pips</td>
                                            </tr>
                                            <tr class="row-4 even">
                                                <td class="column-1">GBP/USD</td><td class="column-2">0.0 pips</td><td class="column-3">1.0 pips</td><td class="column-4">0.73 pips</td>
                                            </tr>
                                            <tr class="row-5 odd">
                                                <td class="column-1">NZD/USD</td><td class="column-2">0.0 pips</td><td class="column-3">1.0 pips</td><td class="column-4">0.44 pips</td>
                                            </tr>
                                            <tr class="row-6 even">
                                                <td class="column-1">USD/CAD</td><td class="column-2">0.0 pips</td><td class="column-3">1.0 pips</td><td class="column-4">0.2 pips</td>
                                            </tr>
                                            <tr class="row-7 odd">
                                                <td class="column-1">USD/CHF</td><td class="column-2">0.0 pips</td><td class="column-3">1.0 pips</td><td class="column-4">0.19 pips</td>
                                            </tr>
                                            <tr class="row-8 even">
                                                <td class="column-1">USD/JPY</td><td class="column-2">0.0 pips</td><td class="column-3">1.0 pips</td><td class="column-4">0.23 pips</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <p></p>
                                    </div>                                                                                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane spreads-content fade  " id="tab-minor-forex-pairs-1" role="tabpanel" aria-labelledby="tab-minor-forex-pairs-tab">
                        <div class="container">
                            <div class="row content">
                                <div class="col-lg-12 col-md-12  content-part justify-content-center align-self-center">
                                    <div class="no no"><p>
                                        </p><table id="tablepress-3" class="tablepress tablepress-id-3 tablepress-responsive">
                                            <thead>
                                            <tr class="row-1 odd">
                                                <th class="column-1">Symbol</th><th class="column-2">Raw account<br>
                                                    Lowest spread*</th><th class="column-3">Standard account<br>
                                                    Lowest spread</th><th class="column-4">Average Spread</th>
                                            </tr>
                                            </thead>
                                            <tbody class="row-hover">
                                            <tr class="row-2 even">
                                                <td class="column-1">AUD/CAD</td><td class="column-2">0.1 pips</td><td class="column-3">1.1 pips</td><td class="column-4">0.83 pips</td>
                                            </tr>
                                            <tr class="row-3 odd">
                                                <td class="column-1">AUD/CHF</td><td class="column-2">0.1 pips</td><td class="column-3">1.1 pips</td><td class="column-4">1.27 pips</td>
                                            </tr>
                                            <tr class="row-4 even">
                                                <td class="column-1">AUD/JPY</td><td class="column-2">0.1 pips</td><td class="column-3">1.1 pips</td><td class="column-4">0.49 pips</td>
                                            </tr>
                                            <tr class="row-5 odd">
                                                <td class="column-1">AUD/NZD</td><td class="column-2">0.2 pips</td><td class="column-3">1.2 pips</td><td class="column-4">0.93 pips</td>
                                            </tr>
                                            <tr class="row-6 even">
                                                <td class="column-1">CAD/CHF</td><td class="column-2">0.3 pips</td><td class="column-3">1.3 pips</td><td class="column-4">0.94 pips</td>
                                            </tr>
                                            <tr class="row-7 odd">
                                                <td class="column-1">CAD/JPY</td><td class="column-2">0.2 pips</td><td class="column-3">1.2 pips</td><td class="column-4">0.45 pips</td>
                                            </tr>
                                            <tr class="row-8 even">
                                                <td class="column-1">CHF/JPY</td><td class="column-2">0.3 pips</td><td class="column-3">1.3 pips</td><td class="column-4">1.77 pips</td>
                                            </tr>
                                            <tr class="row-9 odd">
                                                <td class="column-1">EUR/AUD</td><td class="column-2">0.2 pips</td><td class="column-3">1.2 pips</td><td class="column-4">0.48 pips</td>
                                            </tr>
                                            <tr class="row-10 even">
                                                <td class="column-1">EUR/CAD</td><td class="column-2">0.0 pips</td><td class="column-3">1.0 pips</td><td class="column-4">0.85 pips</td>
                                            </tr>
                                            <tr class="row-11 odd">
                                                <td class="column-1">EUR/CHF</td><td class="column-2">0.2 pips</td><td class="column-3">1.2 pips</td><td class="column-4">1.16 pips</td>
                                            </tr>
                                            <tr class="row-12 even">
                                                <td class="column-1">EUR/GBP</td><td class="column-2">0.0 pips</td><td class="column-3">1.0 pips</td><td class="column-4">0.42 pips</td>
                                            </tr>
                                            <tr class="row-13 odd">
                                                <td class="column-1">EUR/JPY</td><td class="column-2">0.3 pips</td><td class="column-3">1.3 pips</td><td class="column-4">0.59 pips</td>
                                            </tr>
                                            <tr class="row-14 even">
                                                <td class="column-1">EUR/NZD</td><td class="column-2">0.2 pips</td><td class="column-3">1.2 pips</td><td class="column-4">2.01 pips</td>
                                            </tr>
                                            <tr class="row-15 odd">
                                                <td class="column-1">GBP/AUD</td><td class="column-2">0.3 pips</td><td class="column-3">1.3 pips</td><td class="column-4">1.66 pips</td>
                                            </tr>
                                            <tr class="row-16 even">
                                                <td class="column-1">GBP/CAD</td><td class="column-2">0.4 pips</td><td class="column-3">1.4 pips</td><td class="column-4">1.3 pips</td>
                                            </tr>
                                            <tr class="row-17 odd">
                                                <td class="column-1">GBP/CHF</td><td class="column-2">0.3 pips</td><td class="column-3">1.3 pips</td><td class="column-4">1.58 pips</td>
                                            </tr>
                                            <tr class="row-18 even">
                                                <td class="column-1">GBP/JPY</td><td class="column-2">0.1 pips</td><td class="column-3">1.1 pips</td><td class="column-4">0.89 pips</td>
                                            </tr>
                                            <tr class="row-19 odd">
                                                <td class="column-1">GBP/NZD</td><td class="column-2">0.2 pips</td><td class="column-3">1.2 pips</td><td class="column-4">2.35 pips</td>
                                            </tr>
                                            <tr class="row-20 even">
                                                <td class="column-1">NZD/CAD</td><td class="column-2">0.1 pips</td><td class="column-3">1.1 pips</td><td class="column-4">1.42 pips</td>
                                            </tr>
                                            <tr class="row-21 odd">
                                                <td class="column-1">NZD/CHF</td><td class="column-2">0.1 pips</td><td class="column-3">1.1 pips</td><td class="column-4">1.32 pips</td>
                                            </tr>
                                            <tr class="row-22 even">
                                                <td class="column-1">NZD/JPY</td><td class="column-2">0.1 pips</td><td class="column-3">1.1 pips</td><td class="column-4">0.73 pips</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <p></p>
                                    </div>                                                                                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane spreads-content fade  " id="tab-exotic-forex-pairs-2" role="tabpanel" aria-labelledby="tab-exotic-forex-pairs-tab">
                        <div class="container">
                            <div class="row content">
                                <div class="col-lg-12 col-md-12  content-part justify-content-center align-self-center">
                                    <div class="no no"><p>
                                        </p><table id="tablepress-4" class="tablepress tablepress-id-4 tablepress-responsive">
                                            <thead>
                                            <tr class="row-1 odd">
                                                <th class="column-1">Symbol</th><th class="column-2">Raw account<br>
                                                    Lowest spread*</th><th class="column-3">Standard account<br>
                                                    Lowest spread</th><th class="column-4">Average Spread</th>
                                            </tr>
                                            </thead>
                                            <tbody class="row-hover">
                                            <tr class="row-2 even">
                                                <td class="column-1">AUD/SGD</td><td class="column-2">0.2 pips</td><td class="column-3">1.2 pips</td><td class="column-4">2.22 pips</td>
                                            </tr>
                                            <tr class="row-3 odd">
                                                <td class="column-1">EUR/NOK</td><td class="column-2">0.1 pips</td><td class="column-3">1.1 pips</td><td class="column-4">64.03 pips</td>
                                            </tr>
                                            <tr class="row-4 even">
                                                <td class="column-1">EUR/TRY</td><td class="column-2">6.8 pips</td><td class="column-3">7.8 pips</td><td class="column-4">95.95 pips</td>
                                            </tr>
                                            <tr class="row-5 odd">
                                                <td class="column-1">EUR/HUF</td><td class="column-2">0.1 pips	</td><td class="column-3">1.1 pips</td><td class="column-4">35.14 pips</td>
                                            </tr>
                                            <tr class="row-6 even">
                                                <td class="column-1">SGD/JPY</td><td class="column-2">0.2 pips	</td><td class="column-3">1.2 pips</td><td class="column-4">2.33 pips</td>
                                            </tr>
                                            <tr class="row-7 odd">
                                                <td class="column-1">USD/DKK</td><td class="column-2">0.1 pips	</td><td class="column-3">1.1 pips</td><td class="column-4">6.27 pips</td>
                                            </tr>
                                            <tr class="row-8 even">
                                                <td class="column-1">USD/HKD</td><td class="column-2">0.1 pips</td><td class="column-3">1.1 pips</td><td class="column-4">2.18 pips</td>
                                            </tr>
                                            <tr class="row-9 odd">
                                                <td class="column-1">USD/HUF</td><td class="column-2">0.1 pips</td><td class="column-3">1.1 pips</td><td class="column-4">19.82 pips</td>
                                            </tr>
                                            <tr class="row-10 even">
                                                <td class="column-1">USD/NOK</td><td class="column-2">0.1 pips</td><td class="column-3">1.1 pips</td><td class="column-4">58.17 pips</td>
                                            </tr>
                                            <tr class="row-11 odd">
                                                <td class="column-1">USD/PLN	</td><td class="column-2">0.1 pips</td><td class="column-3">1.1 pips</td><td class="column-4">25.24 pips</td>
                                            </tr>
                                            <tr class="row-12 even">
                                                <td class="column-1">USD/SEK</td><td class="column-2">0.1 pips</td><td class="column-3">1.1 pips</td><td class="column-4">35.09 pips</td>
                                            </tr>
                                            <tr class="row-13 odd">
                                                <td class="column-1">USD/SGD</td><td class="column-2">1.0 pips</td><td class="column-3">2.0 pips</td><td class="column-4">1.37 pips</td>
                                            </tr>
                                            <tr class="row-14 even">
                                                <td class="column-1">USD/TRY</td><td class="column-2">0.1 pips</td><td class="column-3">1.1 pips</td><td class="column-4">47.17 pips</td>
                                            </tr>
                                            <tr class="row-15 odd">
                                                <td class="column-1">USD/ZAR	</td><td class="column-2">0.1 pips</td><td class="column-3">1.1 pips</td><td class="column-4">64.59 pips</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <p></p>
                                    </div>                                                                                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="mt-5">
            </div>

        </div>
    </section>



    <section class="forex-trading white-bgr">
        <div class="container text-center">
            <h2>Indices Trading</h2>
            <div class="mt-5 img-wrapper">
                When trading global indices with Metrics Trade Plc, you are trading Cash CFDs, meaning you can trade in small contract sizes, perfect for those who are just starting out.
            </div>

            <div class="tabs">
                <nav class="">
                    <div class="nav " id="nav-tab" role="tablist">

                    </div>
                </nav>

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane spreads-content fade active show" id="tab-indices-trading-0" role="tabpanel" aria-labelledby="tab-indices-trading-tab">
                        <div class="container">
                            <div class="row content">
                                <div class="col-lg-12 col-md-12  content-part justify-content-center align-self-center">
                                    <div class="no no"><p>
                                        </p><table id="tablepress-5" class="tablepress tablepress-id-5 tablepress-responsive">
                                            <thead>
                                            <tr class="row-1 odd">
                                                <th class="column-1">Symbol</th><th class="column-2">Raw account<br>
                                                    Lowest spread*</th><th class="column-3">Standard account<br>
                                                    Lowest spread</th><th class="column-4">Average Spread</th>
                                            </tr>
                                            </thead>
                                            <tbody class="row-hover">
                                            <tr class="row-2 even">
                                                <td class="column-1">AUS200</td><td class="column-2">0 AUD</td><td class="column-3">0 AUD</td><td class="column-4">1.10 AUD</td>
                                            </tr>
                                            <tr class="row-3 odd">
                                                <td class="column-1">HK50</td><td class="column-2">5 HKD</td><td class="column-3">5 HKD</td><td class="column-4">8.45 HKD</td>
                                            </tr>
                                            <tr class="row-4 even">
                                                <td class="column-1">JPN225 </td><td class="column-2">0.45 JPY</td><td class="column-3">0.45 JPY</td><td class="column-4">750.0 JPY</td>
                                            </tr>
                                            <tr class="row-5 odd">
                                                <td class="column-1">GER30</td><td class="column-2">1 EUR</td><td class="column-3">1 EUR</td><td class="column-4">2.2 EUR</td>
                                            </tr>
                                            <tr class="row-6 even">
                                                <td class="column-1">FRA40</td><td class="column-2">0 EUR</td><td class="column-3">0 EUR</td><td class="column-4">0.9 EUR</td>
                                            </tr>
                                            <tr class="row-7 odd">
                                                <td class="column-1">EUSTX50</td><td class="column-2">1.0 EUR</td><td class="column-3">1.0 EUR</td><td class="column-4">2.75 EUR</td>
                                            </tr>
                                            <tr class="row-8 even">
                                                <td class="column-1">NDX100</td><td class="column-2">0.3 USD</td><td class="column-3">0.3 USD</td><td class="column-4">1.10 USD</td>
                                            </tr>
                                            <tr class="row-9 odd">
                                                <td class="column-1">SPX500</td><td class="column-2">0.4 USD</td><td class="column-3">0.4 USD</td><td class="column-4">0.55 USD</td>
                                            </tr>
                                            <tr class="row-10 even">
                                                <td class="column-1">UK100</td><td class="column-2">1.2 GBP</td><td class="column-3">1.2 GBP</td><td class="column-4">1.40 GBP</td>
                                            </tr>
                                            <tr class="row-11 odd">
                                                <td class="column-1">US30</td><td class="column-2">0.25 USD</td><td class="column-3">0.25 USD</td><td class="column-4">2.40 USD</td>
                                            </tr>
                                            <tr class="row-12 even">
                                                <td class="column-1">USDX</td><td class="column-2">0.2 USD</td><td class="column-3">0.2 USD</td><td class="column-4">1.1 USD</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <p></p>
                                    </div>                                                                                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="mt-5">
            </div>

        </div>
    </section>



    <section class="forex-trading white-bgr">
        <div class="container text-center">
            <h2>Commodities Trading</h2>
            <div class="mt-5 img-wrapper">
                Just like indices, when you’re trading precious metals such as Gold or Silver with us, you’re trading it as a CFD and both are traded against the US Dollar.                    </div>

            <div class="tabs">
                <nav class="">
                    <div class="nav " id="nav-tab" role="tablist">

                    </div>
                </nav>

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane spreads-content fade active show" id="tab-commodities-trading-0" role="tabpanel" aria-labelledby="tab-commodities-trading-tab">
                        <div class="container">
                            <div class="row content">
                                <div class="col-lg-12 col-md-12  content-part justify-content-center align-self-center">
                                    <div class="no no"><p>
                                        </p><table id="tablepress-9" class="tablepress tablepress-id-9 tablepress-responsive">
                                            <thead>
                                            <tr class="row-1 odd">
                                                <th class="column-1">Symbol</th><th class="column-2">Raw account<br>
                                                    Lowest spread*</th><th class="column-3">Standard account<br>
                                                    Lowest spread</th><th class="column-4">Average Spread</th>
                                            </tr>
                                            </thead>
                                            <tbody class="row-hover">
                                            <tr class="row-2 even">
                                                <td class="column-1">Brent Crude Oil (UKOUSD)</td><td class="column-2">0.03 USD</td><td class="column-3">0.03 USD</td><td class="column-4">0.05 USD</td>
                                            </tr>
                                            <tr class="row-3 odd">
                                                <td class="column-1">West Texas Intermediate Crude Oil (USOUSD)</td><td class="column-2">0.03 USD</td><td class="column-3">0.03 USD</td><td class="column-4">0.05 USD</td>
                                            </tr>
                                            <tr class="row-4 even">
                                                <td class="column-1">Silver (XAGUSD)</td><td class="column-2">0.01 USD</td><td class="column-3">0.01 USD</td><td class="column-4">0.05 USD</td>
                                            </tr>
                                            <tr class="row-5 odd">
                                                <td class="column-1">Gold (XAUUSD)</td><td class="column-2">0.1 USD</td><td class="column-3">0.1 USD</td><td class="column-4">0.12 USD</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <p></p>
                                    </div>                                                                                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="mt-5">
            </div>

        </div>
    </section>



    <section class="forex-trading -bgr">
        <div class="container text-center">
            <h2>Cryptocurrencies CFD Trading</h2>
            <div class="mt-5 img-wrapper">
                Trade cryptocurrency CFDs such as Bitcoin, Ethereum, Cardano and Litecoin all against the US Dollar. Take long and short positions to take advantage of volatile conditions<sup>1</sup>.                    </div>

            <div class="tabs">
                <nav class="">
                    <div class="nav " id="nav-tab" role="tablist">

                    </div>
                </nav>

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane spreads-content fade active show" id="tab-cryptocurrencies-trading-0" role="tabpanel" aria-labelledby="tab-cryptocurrencies-trading-tab">
                        <div class="container">
                            <div class="row content">
                                <div class="col-lg-12 col-md-12  content-part justify-content-center align-self-center">
                                    <div class="no no"><p>
                                        </p><table id="tablepress-12" class="tablepress tablepress-id-12 tablepress-responsive">
                                            <thead>
                                            <tr class="row-1 odd">
                                                <th class="column-1">Symbol</th><th class="column-2">Raw account<br>
                                                    Lowest spread*</th><th class="column-3">Standard account<br>
                                                    Lowest spread</th><th class="column-4">Average spread</th>
                                            </tr>
                                            </thead>
                                            <tbody class="row-hover">
                                            <tr class="row-2 even">
                                                <td class="column-1">Bitcoin (BTCUSD)</td><td class="column-2">12 USD</td><td class="column-3">12 USD</td><td class="column-4">31.2 USD</td>
                                            </tr>
                                            <tr class="row-3 odd">
                                                <td class="column-1">Cardano (ADAUSD)</td><td class="column-2">0.004 USD</td><td class="column-3">0.004 USD</td><td class="column-4">0.0066 USD</td>
                                            </tr>
                                            <tr class="row-4 even">
                                                <td class="column-1">Bitcoin Cash (BCHUSD)</td><td class="column-2">$ 0</td><td class="column-3">$ 0</td><td class="column-4">1.1 USD</td>
                                            </tr>
                                            <tr class="row-5 odd">
                                                <td class="column-1">Ethereum (ETHUSD)</td><td class="column-2">0.45 USD</td><td class="column-3">0.45 USD</td><td class="column-4">3.5 USD</td>
                                            </tr>
                                            <tr class="row-6 even">
                                                <td class="column-1">Tron (TRXUSD)</td><td class="column-2">0.00019 USD</td><td class="column-3">0.00019 USD</td><td class="column-4">0.00019 USD</td>
                                            </tr>
                                            <tr class="row-7 odd">
                                                <td class="column-1">EOS (EOSUSD)</td><td class="column-2">0.34 USD</td><td class="column-3">0.34 USD</td><td class="column-4">0.34 USD</td>
                                            </tr>
                                            <tr class="row-8 even">
                                                <td class="column-1">Dash (DSHUSD)</td><td class="column-2">12.3 USD</td><td class="column-3">12.3 USD</td><td class="column-4">12.3 USD</td>
                                            </tr>
                                            <tr class="row-9 odd">
                                                <td class="column-1">Stellar-Lumens (XLMUSD)</td><td class="column-2">0.008 USD</td><td class="column-3">0.008 USD</td><td class="column-4">0.008 USD</td>
                                            </tr>
                                            <tr class="row-10 even">
                                                <td class="column-1">Monero (XMRUSD)</td><td class="column-2">1.9 USD</td><td class="column-3">1.9 USD</td><td class="column-4">1.9 USD</td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                            <tr class="row-11 odd">
                                                <th class="column-1">More</th><th colspan="3" class="column-2"></th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                        <p></p>
                                    </div>                                                                                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="mt-5">
            </div>

        </div>
    </section>



    <section class="forex-trading white-bgr">
        <div class="container text-center">
            <h2>Shares Trading</h2>
            <div class="mt-5 img-wrapper">
                Trade more than 350 US, European and Australian shares on the MT5 platform and take advantage of our low spreads with the Raw Account. Below are some of the largest US, European and Australian companies you can start trading on, including Netflix, Facebook, Commonwealth Bank and Woolworths.                    </div>

            <div class="tabs">
                <nav class="nav-justified ">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">

                        <a class="nav-item nav-link active" id="tab-us-shares-tab" data-toggle="tab" href="#tab-us-shares-0" role="tab" aria-controls="tab-us-shares" aria-selected="true">US Shares</a>

                        <a class="nav-item nav-link " id="tab-london-stock-exchange-tab" data-toggle="tab" href="#tab-london-stock-exchange-1" role="tab" aria-controls="tab-london-stock-exchange" aria-selected="false">London Stock Exchange</a>

                        <a class="nav-item nav-link " id="tab-german-stock-exchange-xetra-tab" data-toggle="tab" href="#tab-german-stock-exchange-xetra-2" role="tab" aria-controls="tab-german-stock-exchange-xetra" aria-selected="false">German Stock Exchange (XETRA)</a>

                        <a class="nav-item nav-link " id="tab-australian-shares-tab" data-toggle="tab" href="#tab-australian-shares-3" role="tab" aria-controls="tab-australian-shares" aria-selected="false">Australian Shares</a>
                    </div>
                </nav>

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane spreads-content fade active show" id="tab-us-shares-0" role="tabpanel" aria-labelledby="tab-us-shares-tab">
                        <div class="container">
                            <div class="row content">
                                <div class="col-lg-12 col-md-12  content-part justify-content-center align-self-center">
                                    <div class="no no"><p>
                                        </p><table id="tablepress-24" class="tablepress tablepress-id-24 tablepress-responsive">
                                            <thead>
                                            <tr class="row-1 odd">
                                                <th class="column-1">Symbol</th><th class="column-2">Standard and Raw account<br>
                                                    Lowest spreads</th>
                                            </tr>
                                            </thead>
                                            <tbody class="row-hover">
                                            <tr class="row-2 even">
                                                <td class="column-1">Apple</td><td class="column-2">$0.02 per share, per side ($4 per lot round turn)</td>
                                            </tr>
                                            <tr class="row-3 odd">
                                                <td class="column-1">Alphabet (Google)</td><td class="column-2">$0.02 per share, per side ($4 per lot round turn)</td>
                                            </tr>
                                            <tr class="row-4 even">
                                                <td class="column-1">Facebook</td><td class="column-2">$0.02 per share, per side ($4 per lot round turn)</td>
                                            </tr>
                                            <tr class="row-5 odd">
                                                <td class="column-1">Amazon</td><td class="column-2">$0.02 per share, per side ($4 per lot round turn)</td>
                                            </tr>
                                            <tr class="row-6 even">
                                                <td class="column-1">Pfizer</td><td class="column-2">$0.02 per share, per side ($4 per lot round turn)</td>
                                            </tr>
                                            <tr class="row-7 odd">
                                                <td class="column-1">Netflix</td><td class="column-2">$0.02 per share, per side ($4 per lot round turn)</td>
                                            </tr>
                                            <tr class="row-8 even">
                                                <td class="column-1">Microsoft</td><td class="column-2">$0.02 per share, per side ($4 per lot round turn)</td>
                                            </tr>
                                            <tr class="row-9 odd">
                                                <td class="column-1">Intel</td><td class="column-2">$0.02 per share, per side ($4 per lot round turn)</td>
                                            </tr>
                                            <tr class="row-10 even">
                                                <td class="column-1">Salesforce</td><td class="column-2">$0.02 per share, per side ($4 per lot round turn)</td>
                                            </tr>
                                            <tr class="row-11 odd">
                                                <td class="column-1">Tesla</td><td class="column-2">$0.02 per share, per side ($4 per lot round turn)</td>
                                            </tr>
                                            <tr class="row-12 even">
                                                <td class="column-1">Nike</td><td class="column-2">$0.02 per share, per side ($4 per lot round turn)</td>
                                            </tr>
                                            <tr class="row-13 odd">
                                                <td class="column-1">Coca-Cola</td><td class="column-2">$0.02 per share, per side ($4 per lot round turn)</td>
                                            </tr>
                                            <tr class="row-14 even">
                                                <td class="column-1">Adobe</td><td class="column-2">$0.02 per share, per side ($4 per lot round turn)</td>
                                            </tr>
                                            <tr class="row-15 odd">
                                                <td class="column-1">NovartisUS</td><td class="column-2">$0.02 per share, per side ($4 per lot round turn)</td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                            <tr class="row-16 even">
                                                <th class="column-1">More</th><th class="column-2"></th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                        <p></p>
                                    </div>                                                                                                            <div class="mt-4 buttons">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane spreads-content fade  " id="tab-london-stock-exchange-1" role="tabpanel" aria-labelledby="tab-london-stock-exchange-tab">
                        <div class="container">
                            <div class="row content">
                                <div class="col-lg-12 col-md-12  content-part justify-content-center align-self-center">
                                    <div class="no no"><p>
                                        </p><table id="tablepress-27" class="tablepress tablepress-id-27 tablepress-responsive">
                                            <thead>
                                            <tr class="row-1 odd">
                                                <th class="column-1">Symbol</th><th class="column-2">Commission</th>
                                            </tr>
                                            </thead>
                                            <tbody class="row-hover">
                                            <tr class="row-2 even">
                                                <td class="column-1">AstraZeneca</td><td class="column-2">0.1% Per Lot</td>
                                            </tr>
                                            <tr class="row-3 odd">
                                                <td class="column-1">British American Tobacco</td><td class="column-2">0.1% Per Lot</td>
                                            </tr>
                                            <tr class="row-4 even">
                                                <td class="column-1">Bhp Group</td><td class="column-2">0.1% Per Lot</td>
                                            </tr>
                                            <tr class="row-5 odd">
                                                <td class="column-1">Bp</td><td class="column-2">0.1% Per Lot</td>
                                            </tr>
                                            <tr class="row-6 even">
                                                <td class="column-1">Glaxosmithkline</td><td class="column-2">0.1% Per Lot</td>
                                            </tr>
                                            <tr class="row-7 odd">
                                                <td class="column-1">HSBC Hldgs</td><td class="column-2">0.1% Per Lot</td>
                                            </tr>
                                            <tr class="row-8 even">
                                                <td class="column-1">Royal Dutch Shell</td><td class="column-2">0.1% Per Lot</td>
                                            </tr>
                                            <tr class="row-9 odd">
                                                <td class="column-1">Tesco</td><td class="column-2">0.1% Per Lot</td>
                                            </tr>
                                            <tr class="row-10 even">
                                                <td class="column-1">Unilever</td><td class="column-2">0.1% Per Lot</td>
                                            </tr>
                                            <tr class="row-11 odd">
                                                <td class="column-1">Royal Mail</td><td class="column-2">0.1% Per Lot</td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                            <tr class="row-12 even">
                                                <th class="column-1">More</th><th class="column-2"></th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                        <p></p>
                                    </div>                                                                                                            <div class="mt-4 buttons">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane spreads-content fade  " id="tab-german-stock-exchange-xetra-2" role="tabpanel" aria-labelledby="tab-german-stock-exchange-xetra-tab">
                        <div class="container">
                            <div class="row content">
                                <div class="col-lg-12 col-md-12  content-part justify-content-center align-self-center">
                                    <div class="no no"><p>
                                        </p><table id="tablepress-28" class="tablepress tablepress-id-28 tablepress-responsive">
                                            <thead>
                                            <tr class="row-1 odd">
                                                <th class="column-1">Symbol</th><th class="column-2">Commission</th>
                                            </tr>
                                            </thead>
                                            <tbody class="row-hover">
                                            <tr class="row-2 even">
                                                <td class="column-1">SAP</td><td class="column-2">0.1% Per Lot</td>
                                            </tr>
                                            <tr class="row-3 odd">
                                                <td class="column-1">Bayer</td><td class="column-2">0.1% Per Lot</td>
                                            </tr>
                                            <tr class="row-4 even">
                                                <td class="column-1">Siemens AG</td><td class="column-2">0.1% Per Lot</td>
                                            </tr>
                                            <tr class="row-5 odd">
                                                <td class="column-1">Allianz</td><td class="column-2">0.1% Per Lot</td>
                                            </tr>
                                            <tr class="row-6 even">
                                                <td class="column-1">BASF</td><td class="column-2">0.1% Per Lot</td>
                                            </tr>
                                            <tr class="row-7 odd">
                                                <td class="column-1">Deutsche Telekom</td><td class="column-2">0.1% Per Lot</td>
                                            </tr>
                                            <tr class="row-8 even">
                                                <td class="column-1">Volkswagen</td><td class="column-2">0.1% Per Lot</td>
                                            </tr>
                                            <tr class="row-9 odd">
                                                <td class="column-1">Daimler</td><td class="column-2">0.1% Per Lot</td>
                                            </tr>
                                            <tr class="row-10 even">
                                                <td class="column-1">BMW</td><td class="column-2">0.1% Per Lot</td>
                                            </tr>
                                            <tr class="row-11 odd">
                                                <td class="column-1">Adidas</td><td class="column-2">0.1% Per Lot</td>
                                            </tr>
                                            <tr class="row-12 even">
                                                <td class="column-1">Henkel</td><td class="column-2">0.1% Per Lot</td>
                                            </tr>
                                            <tr class="row-13 odd">
                                                <td class="column-1">Continental</td><td class="column-2">0.1% Per Lot</td>
                                            </tr>
                                            <tr class="row-14 even">
                                                <td class="column-1">Lufthansa</td><td class="column-2">0.1% Per Lot</td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                            <tr class="row-15 odd">
                                                <th class="column-1">More</th><th class="column-2"></th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                        <p></p>
                                    </div>                                                                                                            <div class="mt-4 buttons">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane spreads-content fade  " id="tab-australian-shares-3" role="tabpanel" aria-labelledby="tab-australian-shares-tab">
                        <div class="container">
                            <div class="row content">
                                <div class="col-lg-12 col-md-12  content-part justify-content-center align-self-center">
                                    <div class="no no"><p>
                                        </p><table id="tablepress-22" class="tablepress tablepress-id-22 tablepress-responsive">
                                            <thead>
                                            <tr class="row-1 odd">
                                                <th class="column-1">Symbol</th><th class="column-2">Standard account<br>
                                                    Lowest spread</th><th class="column-3">Raw account<br>
                                                    Lowest spread*</th>
                                            </tr>
                                            </thead>
                                            <tbody class="row-hover">
                                            <tr class="row-2 even">
                                                <td class="column-1">BHP Group</td><td class="column-2">1.0 pips</td><td class="column-3">1.0 pips</td>
                                            </tr>
                                            <tr class="row-3 odd">
                                                <td class="column-1">Rio Tinto</td><td class="column-2">1.0 pips</td><td class="column-3">1.0 pips</td>
                                            </tr>
                                            <tr class="row-4 even">
                                                <td class="column-1">Commonwealth Bank</td><td class="column-2">1.0 pips</td><td class="column-3">1.0 pips</td>
                                            </tr>
                                            <tr class="row-5 odd">
                                                <td class="column-1">Westpac Banking Corp</td><td class="column-2">1.0 pips</td><td class="column-3">1.0 pips</td>
                                            </tr>
                                            <tr class="row-6 even">
                                                <td class="column-1">National Australian Bank</td><td class="column-2">1.0 pips</td><td class="column-3">1.0 pips</td>
                                            </tr>
                                            <tr class="row-7 odd">
                                                <td class="column-1">ANZ Banking Group</td><td class="column-2">1.0 pips</td><td class="column-3">1.0 pips</td>
                                            </tr>
                                            <tr class="row-8 even">
                                                <td class="column-1">Woolworths</td><td class="column-2">1.0 pips</td><td class="column-3">1.0 pips</td>
                                            </tr>
                                            <tr class="row-9 odd">
                                                <td class="column-1">Macquarie Group</td><td class="column-2">1.0 pips</td><td class="column-3">1.0 pips</td>
                                            </tr>
                                            <tr class="row-10 even">
                                                <td class="column-1">Wesfarmers</td><td class="column-2">1.0 pips</td><td class="column-3">1.0 pips</td>
                                            </tr>
                                            <tr class="row-11 odd">
                                                <td class="column-1">Telstra</td><td class="column-2">1.0 pips</td><td class="column-3">1.0 pips</td>
                                            </tr>
                                            <tr class="row-12 even">
                                                <td class="column-1">Transurban</td><td class="column-2">1.0 pips</td><td class="column-3">1.0 pips</td>
                                            </tr>
                                            <tr class="row-13 odd">
                                                <td class="column-1">Fortescue</td><td class="column-2">1.0 pips</td><td class="column-3">1.0 pips</td>
                                            </tr>
                                            <tr class="row-14 even">
                                                <td class="column-1">Woodside Petroleum</td><td class="column-2">1.0 pips</td><td class="column-3">1.0 pips</td>
                                            </tr>
                                            <tr class="row-15 odd">
                                                <td class="column-1">Goodman</td><td class="column-2">1.0 pips</td><td class="column-3">1.0 pips</td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                            <tr class="row-16 even">
                                                <th class="column-1">Over 150 more</th><th class="column-2">1.0 pips</th><th class="column-3">1.0 pips</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                        <p></p>
                                    </div>                                                                                                            <div class="mt-4 buttons">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="mt-5">
            </div>

        </div>
    </section>



    <section class="forex-trading grey-bgr">
        <div class="container text-center">
            <h2>Important notice</h2>



            <div class="mt-5">
                <p style="text-align: center;">* Commission charged at $3.5 per standard lot traded.</p>
                <p style="text-align: center;">** Metrics Trade Plc awarded Best MT4 Forex Broker Global 2020</p>
                <p style="text-align: center;">The rates above are indicative only and spreads are subject to change without prior notice depending on the market conditions (e.g. spreads may widen during illiquid or volatile market conditions). <span style="font-weight: 400;">Spreads may also widen due to important news announcements</span>, political uncertainty, unexpected events leading to volatile market conditions or at the close of the business day and on weekends when liquidity is lower.</p>
                <p style="text-align: center;">A volume of 1 lot is equal to 100,000 of the first-named currency.</p>
                <p style="text-align: center;">In Forex trading, if you leave one or more positions opened at 24:00 (GMT+2) for the next trading day, there will be a daily Swap adjustment to your position. From Wednesday to Thursday, Swap is charged for 3 days instead of 1. This is to cover the settlement of trades over the weekend.</p>
                <p style="text-align: center;">For more info on swaps refer to our legal documents, online trading platform and our articles online.</p>
            </div>

        </div>
    </section>


    <section class="what-are-spreads">
        <div class="container text-center">
            <h2>What are Spreads?</h2>

            <div class="mt-5 col-lg-10 img-wrapper">
                In trading, the spread illustrates the gap between the buy (bid) and the sell (ask) price of a financial asset. Spread is one of the key costs involved in Forex and CFD trading – the tighter the spread is, the better value you’re getting as a trader.            </div>

            <div class="mt-5 col-lg-10 img-wrapper">
                <a href="{{ route('register') }}" class="btn mr-2 green-btn rounded-btn mobile-button-space">Create Account</a>


            </div>
        </div>
    </section>

    <section class="trading-spreads no-bottom-padding">
        <div class="container text-center">
            <h2>Metrics Trade Plc Trading Spreads</h2>

            <div class="mt-5 col-lg-10 img-wrapper">
                <p>Metrics Trade Plc offers a Transparent Pricing Model, made up of low, highly competitive and tight rates. The spreads on our MetaTrader 4 or MetaTrader 5 platforms are variable, with quotes coming from numerous leading banks and institutions and other top-tier liquidity sources globally.</p>
                <p>&nbsp;</p>
                <p><img class="size-full wp-image-237 aligncenter" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20650%20411'%3E%3C/svg%3E" alt="" width="650" height="411" data-lazy-src="wp-content/uploads/sites/11/2019/07/Spreads-Screen-Image.png"><noscript><img class="size-full wp-image-237 aligncenter" src="wp-content/uploads/sites/11/2019/07/Spreads-Screen-Image.png" alt="" width="650" height="411" /></noscript></p>


            </div>
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
                                What is a Spread										</a>
                        </div>
                        <div id="collapse0" class="card-body collapse show" data-parent="#accordion">
                            <div class="padding_30_both">
                                <p>In forex trading, a spread is the difference between the buy price (ask) and the sell price (bid) of a security or forex pair. The difference is usually represented in pips. When trading a position, a spread is the gap or the difference between the short position and the long position.</p>
                            </div>
                        </div>
                    </div>
                    <div class="margin-top-10 margin-bottom-10">
                        <div class="card-header arrow-up" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" href="#collapse1">
                            <a class="card-title">
                                How to view real-time spreads?										</a>
                        </div>
                        <div id="collapse1" class="card-body collapse " data-parent="#accordion">
                            <div class="padding_30_both">
                                <p>Our price feed comes from a number of leading liquidity providers and banks, allowing us to offer market-leading spreads as low as 0 pip on our Raw accounts, and 1.0 pip on Standard accounts.</p>
                                <p>If you wish to view real, live market rates across our entire product range, you may do this by going to our MetaTrader 4 or MetaTrader 5 trading platform.</p>
                                <p>On our trading platform:<br>
                                    1. go to the&nbsp;<em>Market Watch</em>&nbsp;window area;<br>
                                    2. right-click inside the window area and click ‘<em>Spreads</em>‘; and<br>
                                    3. a new column should appear displaying the real-time spreads for each Forex currency pair, commodity or index market.</p>
                                <p>Alternatively, compare our real-time rates on the go from your favourite smart devices via the MetaTrader 4 or MetaTrader 5 mobile apps.</p>
                            </div>
                        </div>
                    </div>
                    <div class="margin-top-10 margin-bottom-10">
                        <div class="card-header arrow-up" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" href="#collapse2">
                            <a class="card-title">
                                How is a Spread Calculated?										</a>
                        </div>
                        <div id="collapse2" class="card-body collapse " data-parent="#accordion">
                            <div class="padding_30_both">
                                <p>Essentially, the tighter the spread, the lower the cost of trading. The wider the spread, the higher it costs.</p>
                                <p>For example, let’s say EURUSD is quoted with a buy price of 1.0984 and a sell price of 1.0983. The spread can be calculated by subtracting 1.0983 from 1.0984 – giving a total spread of 0.0001 or 1 pip.</p>
                                <p>At Metrics Trade Plc, prices are quoted up to 5 decimal points.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="payment-logos "><div class="container text-center"><div class="row"><div class="col"><img width="54" height="41" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2054%2041'%3E%3C/svg%3E" alt="" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/10/Mastercard-Logo.png"><noscript><img width="54" height="41" src="wp-content/uploads/sites/11/2019/10/Mastercard-Logo.png" alt="" /></noscript></div><div class="col"><img width="54" height="41" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2054%2041'%3E%3C/svg%3E" alt="" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/10/Visa-Logo.png"><noscript><img width="54" height="41" src="wp-content/uploads/sites/11/2019/10/Visa-Logo.png" alt="" /></noscript></div><div class="col"><img width="54" height="41" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2054%2041'%3E%3C/svg%3E" alt="" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/10/Poli-Payment-Logo.png"><noscript><img width="54" height="41" src="wp-content/uploads/sites/11/2019/10/Poli-Payment-Logo.png" alt="" /></noscript></div><div class="col"><img width="54" height="41" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2054%2041'%3E%3C/svg%3E" alt="" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/10/WireTransfer-Logo.png"><noscript><img width="54" height="41" src="wp-content/uploads/sites/11/2019/10/WireTransfer-Logo.png" alt="" /></noscript></div><div class="col"><img width="54" height="41" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2054%2041'%3E%3C/svg%3E" alt="" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/10/Bpay-Logo.png"><noscript><img width="54" height="41" src="wp-content/uploads/sites/11/2019/10/Bpay-Logo.png" alt="" /></noscript></div><div class="col"><img width="54" height="41" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2054%2041'%3E%3C/svg%3E" alt="" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/10/Skrill-Logo.png"><noscript><img width="54" height="41" src="wp-content/uploads/sites/11/2019/10/Skrill-Logo.png" alt="" /></noscript></div><div class="col"><img width="105" height="41" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20105%2041'%3E%3C/svg%3E" alt="" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/10/Neteller-Logo.png"><noscript><img width="105" height="41" src="wp-content/uploads/sites/11/2019/10/Neteller-Logo.png" alt="" /></noscript></div><div class="col"><img width="54" height="41" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2054%2041'%3E%3C/svg%3E" alt="" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2019/10/UnionPay-Logo.png"><noscript><img width="54" height="41" src="wp-content/uploads/sites/11/2019/10/UnionPay-Logo.png" alt="" /></noscript></div><div class="col"><img width="104" height="41" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20104%2041'%3E%3C/svg%3E" alt="" data-lazy-src="https://www.eightcap.com/en/wp-content/uploads/sites/11/2021/09/paypal.png"><noscript><img width="104" height="41" src="wp-content/uploads/sites/11/2021/09/paypal.png" alt="" /></noscript></div></div></div></section>
</div>

@endsection
