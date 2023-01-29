<!DOCTYPE html>
<html lang="en">
<head>
    <title>New Silky Skin</title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
          crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link
        href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css"
        rel="stylesheet" type='text/css'>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css', Request::secure()) }}">
</head>
<body>
<div class="text-center sold sticky_2">
    <p>تخفيض 10.80 % + توصيل مجاني</p>
</div>
<header>
    <div class="container-fluid header-main p-0">
        <div class="container-fluid  p-0">
            <nav class="navbar navbar-expand-lg">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation">
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                </div>
                <a class="navbar-brand" href="{{ route('checkout.index') }}">
                    <img src="{{ url('/app_logo.png') }}" alt="app-icon"></a>
            </nav>
        </div>
    </div>
</header>
<main>
    <section class="section-1-checkout" id="section-1-checkout">
        <form action="{{ route('checkout.order') }}" id="loginForm" class="container" method="post"
              enctype="multipart/form-data">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-6 img-responsive">
                        @csrf
                        <input type="hidden" value="{{ $product_qte }}" name="product_qte">
                        <input type="hidden" value="{{ $product_color }}" name="product_color">
                        <input type="hidden" value="{{ $price }}" name="price">
                        <label class="" for="white" data-aos="fade_in" data-aos-duration="1000" id="white"
                               style="margin-top: 20px">
                            @if($product_color == "white")
                                <img src="{{ url('assets/assets/product-1.jpg') }}" class="image-checkout"
                                     alt="image-checkout">
                            @else
                                <img src="{{ url('assets/assets/product-2.jpg') }}" class="image-checkout"
                                     alt="image-checkout">
                            @endif
                            <p class="price"> دج {{ $price }} - <span
                                    style="text-decoration-line: line-through;">دج {{$discount_p}}</span></p>
                        </label>
                        <hr>
                        <div class="row total-price">
                            <div class="col-md-4">
                                <div class="total-price-p">
                                    @if($product_color == "white")
                                        (أبيض)<span>&emsp;</span>{{ $product_qte }}
                                    @else
                                    (وردي)
                                        <span>&emsp;</span>{{ $product_qte }}
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="total-price-text">
                                    الكمية المطلوبة
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row shipping">
                            <div class="col-md-4">
                                <div class="shipping-pricc">
                                    دج 0
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="shipping-text">
                                    مصاريف الشحن
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row total-price">
                            <div class="col-md-4">
                                <div class="total-price-p">
                                    {{ $price }} دج
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="total-price-text">
                                    المبلغ الواجب أداؤه
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-first text-right" data-aos="fade-left" data-aos-duration="1000">
                        <hr class="hr_checkout">
                        <h1>تأكيد الطلب</h1>
                        <hr>
                        <p style="font-family: cairo" id="color-text">الإسم الكامل</p>
                        <input type="text" oninvalid="InvalidMsg_1(this);" onchange="this.setCustomValidity('')"
                               class="form-control first-form" name="name" id="name" placeholder="أكتب أسمك" required>
                        <hr>
                        <p style="font-family: cairo" id="color-text">الهاتف</p>
                        <input type="text" oninvalid="InvalidMsg_2(this);" class="form-control number_ltr" name="phone"
                               id="phone" placeholder="أكتب رقم هاتفك" required>
                        <hr>
                        <p style="font-family: cairo" id="color-text">الولاية</p>
                        <input type="text" oninvalid="InvalidMsg_3(this);" class="form-control first-form" name="wilaya"
                               id="wilaya" placeholder="أكتب ولايتك" required>
                        <hr>
                        <div class="confirm-p text-center">
                            <button class="btn primary-btn-2 btn-primary btn-lg" role="submit" id="btn-shaky-3"> تأكيد
                                طلبك</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</main>
<footer class="footer-second">
    <div class="container text-center">
        <div class="row text-center">
            {{--            <div class="col-md-2">
                            <a href="#">تتبع طلبك</a>
                        </div>--}}
            <div class="col-md-2">
                <a href="#">سياسة الخصوصية</a>
            </div>
            {{--            <div class="col-md-2">
                            <a href="#">سياسة الشحن</a>
                        </div>--}}
            <div class="col-md-2">
                <a href="#">سياسة الخدمة</a>
            </div>
            {{--   <div class="col-md-2">
                   <a href="#">ضمان استرداد الأموال</a>
               </div>--}}
            {{--            <div class="col-md-2">
                            <a href="#">الأسئلة الشائعة</a>
                        </div>--}}
        </div>
        <div class="copy-rights">
            <p>copyright © 2020</p>
        </div>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="{{ url('/assets/js/main.js') }}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>
