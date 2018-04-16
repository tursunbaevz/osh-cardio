@extends('layouts.master')
@include ('layouts.nav')

@section('content')
<div class="wrapper">
    <div class="page-header page-header-small">
        <div class="page-header-image" data-parallax="true" style="background-image: url(img/photo.jpg);"></div>
        <div class="content-center">
            <h1 class="title">Контакты</h1>
        </div>
    </div>
    <div class="main">
        <div class="contact-content" style="    padding-bottom: 40px;
    padding-top: 40px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 ml-auto mr-auto">
                        <h2 class="title">Send us a message</h2>
                        <p class="description">You can contact us with anything related to our Products. We'll get in touch with you as soon as possible.<br><br>
                        </p>
                        <form role="form" id="contact-form" method="post">
                            <label>Your name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="now-ui-icons users_circle-08"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Your Name..." aria-label="Your Name...">
                            </div>
                            <label>Email address</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="now-ui-icons ui-1_email-85"></i></span>
                                </div>
                                <input type="email" class="form-control" placeholder="Email Here..." aria-label="Email Here...">
                            </div>
                            <label>Phone</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="now-ui-icons tech_mobile"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Number Here...">
                            </div>
                            <div class="form-group">
                                <label>Your message</label>
                                <textarea name="message" class="form-control" id="message" rows="6"></textarea>
                            </div>
                            <div class="submit text-center">
                                <input type="submit" class="btn btn-primary btn-raised btn-round" value="Contact Us">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5 ml-auto mr-auto">
                        <div class="info info-horizontal mt-5" style="padding: 0">
                            <div class="icon icon-primary">
                                <i class="now-ui-icons location_pin"></i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Find us at the office</h4>
                                <p> Bld Mihail Kogalniceanu, nr. 8,<br>
                                    7652 Bucharest,<br>
                                    Romania
                                </p>
                            </div>
                        </div>
                        <div class="info info-horizontal" style="padding: 0">
                            <div class="icon icon-primary">
                                <i class="now-ui-icons tech_mobile"></i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Give us a ring</h4>
                                <p> Michael Jordan<br>
                                    +40 762 321 762<br>
                                    Mon - Fri, 8:00-22:00
                                </p>
                            </div>
                        </div>
                        <div class="info info-horizontal" style="padding: 0">
                            <div class="icon icon-primary">
                                <i class="business_briefcase-24 now-ui-icons"></i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Legal Information</h4>
                                <p> Creative Tim Ltd.<br>
                                    VAT · EN2341241<br>
                                    IBAN · EN8732ENGB2300099123<br>
                                    Bank · Great Britain Bank
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 2GIS -->
    <div class="gis">
        <a class="dg-widget-link" href="http://2gis.kg/osh/firm/70000001031160528/center/72.79355406761171,40.52625311508752/zoom/18?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Оша</a><div class="dg-widget-link"><a href="http://2gis.kg/osh/firm/70000001031160528/photos/70000001031160528/center/72.79355406761171,40.52625311508752/zoom/17?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=photos">Фотографии компании</a></div><div class="dg-widget-link"><a href="http://2gis.kg/osh/center/72.793655,40.525973/zoom/18/routeTab/rsType/bus/to/72.793655,40.525973╎Кардиологический центр им. М. Алиева?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Кардиологический центр им. М. Алиева</a></div><script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":1000,"height":500,"borderColor":"#a3a3a3","pos":{"lat":40.526237,"lon":72.795646,"zoom":17},"opt":{"city":"osh"},"org":[{"id":"70000001031160528"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
    </div>
    <!--////-->

</div>

@endsection