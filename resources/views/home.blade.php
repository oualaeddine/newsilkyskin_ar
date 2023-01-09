<!DOCTYPE html>
<html lang="en">
<head>
    <title>New Silky Skin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>

{{-- 	<meta name="keywords" content="xmall,hmizat,avito,jumia,online shopping,">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="subject" content="e-commerce">
    <meta name="language" content="AR">
    <meta name="robots" content="index,follow" />
    <meta name="Classification" content="Business">
    <meta name="author" content="hobrt, hobrt.me">
    <meta name="designer" content="hobrt lhbib">
    <meta name="reply-to" content="hobrtme@gmail.com">
    <meta name="owner" content="hobrt.me">
    <meta name="og:type" content="e-commerce"/>
    <meta name="og:image" content="uploads/large_"/> --}}



<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
          crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css"
        rel="stylesheet" type='text/css'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
          integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
          crossorigin="anonymous"/>

    <!--Custom css-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css', Request::secure()) }}">

    <!-- Global site tag (gtag.js) - Google Analytics -->


</head>
<body>
<div class="text-center sold sticky_2">
    <p>تخفيض 11.11 % + توصيل مجاني</p>
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
                    <img src="{{ asset('app_logo.png', Request::secure()) }}" alt="app-icon"></a>
            </nav>
        </div>

    </div>
</header>

<main>
    <section class="section-1 " id="section-1">

        <div class="container text-right main-text">

            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <h1>جهاز نيو سيلكي سكين <br> لنزع الشعر</h1>
                    <br>
                    <h4>
                        كوني مدللة
                    </h4>
                    <br>
                    <a class="shakeit btn primary-btn btn-primary btn-lg" href="{{ route('checkout.product') }}" role="button"
                       data-aos="zoom-out" data-aos-duration="1000" for="pink" id="btn-shaky"> اشترِ الآن </a>
                </div>
            </div>
            <a class="shakeit btn primary-btn btn-primary btn-lg mobileshow_dis btn-mobile" href="{{ route('checkout.product') }}"
               role="button" for="pink" id="btn-shaky"> اشترِ الآن </a>
        </div>

    </section>

    <section class="section-2" id="section-2">

        <div class="container text-center">

            <div class="row">

                <div class="col-md-5 text-first" data-aos="fade-left" data-aos-duration="600">

                    <h1>مناسب لجميع مناطق الجسم</h1>
                    <br>
                    <h4>
                        بإمكانك استعمال جهاز ليزر نيو سيلكي سكين على جميع مناطق الجسم حتى الوجه و المنطقة الحساسة
                    </h4>
                    <br>
                    <a class="shakeit btn primary-btn btn-primary btn-lg" href="{{ route('checkout.product') }}" role="button"
                       for="pink" id="btn-shaky"> اشترِ الآن </a>

                </div>
                <div class="col-md-7 img-responsive" data-aos="fade-right" data-aos-duration="600">
                    <a href="{{ route('checkout.product') }}"> <img
                            src="{{ asset('assets/assets/pg-2_1.jpg', Request::secure()) }}"
                            class="rounded image-pg-2-1 float-right" alt="image-pg-2"></a>
                    <a href="{{ route('checkout.product') }}"> <img
                            src="{{ asset('assets/assets/pg-2_2.jpg', Request::secure()) }}"
                            class="rounded image-pg-2-2 float-left" alt="image-pg-2"> </a>
                </div>
            </div>
        </div>

    </section>

    <section class="section-3" id="section-3">

        <div class="container text-center">
            <div class="row">

                <div class="col-md-6 img-responsive">

                    <form action="{{ route('checkout.confirm') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label class="" for="white" data-aos="fade_in" data-aos-duration="1000" id="white">

                            <img src="{{ asset('assets/assets/product-1.jpg', Request::secure()) }}"
                                 class="image-pg-3-1" alt="image-pg-2">

                        </label>

                        <label class="pink-hidden" data-aos="fade_in" data-aos-duration="1000" for="pink" id="pink">
                            <img src="{{ asset('assets/assets/product-2.jpg', Request::secure()) }}"
                                 class="image-pg-3-2" alt="image-pg-2">
                        </label>

                </div>
                <div class="col-md-6 text-first text-right" data-aos="fade-left" data-aos-duration="1000">
                    <h1>جهاز ليزر  نيو سيلكي سكين</h1>

                    <hr>
                    ({{$nb_rating}} تقييم )
                    @if($stars_nb == 5)
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    @elseif($stars_nb == 4)
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    @elseif( $stars_nb == 3)
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    @elseif($stars_nb == 2)
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    @elseif($stars_nb == 1)
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    @endif


                    <hr>
                    <div class="discount">
                        <h3 class="price_1">{{$price}} دج</h3>
                        <h3 class="price_2">{{$discount_p}} دج -</h3>
                    </div>
                    <hr>

                    <p style="font-family: cairo" id="color-text">اختر اللون - الأبيض</p>
                    <input type="radio" class="color-swatch--pink" name="p_color" value="pink" id="pink">
                    <input type="radio" class="color-swatch--white" name="p_color" value="white" id="white" checked>
                    <hr>
                    <label for="Qte"> : الكمية </label>
                    <div class="input-group">
                        <div class="col-md-9"></div>

                        <span class="input-group-btn"><button class="btn btn-light value-control" type="button"
                                                              data-action="minus" data-min="1" data-target="qte"><i
                                    class="fa fa-minus"></i></button></span>
                        <input type="number" value="1" min="1" max="10" oninvalid="InvalidMsg(this);"
                               onchange="this.setCustomValidity('')" class="form-control col-md-2 number_ltr" id="qte"
                               style="width: 10px;" name="qte" required/>
                        <span class="input-group-btn"><button class="btn btn-light value-control" type="button"
                                                              data-action="plus" data-max="10" data-target="qte"><i
                                    class="fa fa-plus"></i></button></span>
                    </div>

                    <hr>
                    <div class="confirm-p text-center">
                        <button class="btn primary-btn-2 btn-primary btn-lg" role="submit" id="btn-shaky-3"> تأكيد
                            طلبك</a>

                    </div>

                    </form>
                </div>
            </div>
        </div>


    </section>

    <section class="section-4" id="section-4">
        <div class="container text-right" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">

            <h1>تواصل معنا </h1>

            <div class="row">
                <form action="{{ route('contact') }}" class="container first-form" method="post"
                      enctype="multipart/form-data" style="width: 100%">
                    @csrf
                    <div class="form-row ">
                        <div class="col">
                            <label for="name">إسمك</label>
                            <input type="text" class="form-control" name="name" id="name" required
                                   placeholder="أكتب أسمك">
                        </div>
                        <div class="col">
                            <label for="email">البريد الإلكتروني</label>
                            <input type="text" class="form-control" name="email" id="email"
                                   placeholder="أكتب بريدك الإلكتروني" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message">رسالتك</label>
                        <textarea class="form-control textarea" name="message" id="message" rows="3" required
                                  placeholder="أكتب رسالتك"></textarea>
                    </div>
                    <div class="col text-center">
                        <button class="btn primary-btn btn-primary center btn-lg" role="submit" id="btn-shaky">
                            إرسال</a>
                    </div>

                </form>


            </div>
        </div>

    </section>

    <section class="section-5" id="section-5">
        <div class="container" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">

            <div class="row">
                <div class="col-md-3 text-center">
                    <h2>Let customers speak for us</h2>
                    @if($stars_nb == 5)
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    @elseif($stars_nb == 4)
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    @elseif( $stars_nb == 3)
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    @elseif($stars_nb == 2)
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    @elseif($stars_nb == 1)
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    @endif
                    <h6>From {{$nb_rating}} reviews</h6>
                    <a class="nav-link" href="{{$instagram_link}}"><i class="fab fa-instagram fa-3x"></i></a>
                </div>

                <div class="col-md-9 text-center">

                    <div id="blogCarousel" class="carousel slide" data-ride="carousel">

                        <a class="carousel-control-prev" href="#blogCarousel" role="button" data-slide="prev">
                            <i class="fa fa-arrow-left"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#blogCarousel" role="button" data-slide="next">
                            <i class="fa fa-arrow-right"></i>
                            <span class="sr-only" style="color: black">Next</span>
                        </a>

                        <!-- Carousel items -->
                        <div class="carousel-inner">

                            @foreach ($rating as $rate)

                                @if($rate['active'] == 1)
                                    <div class="carousel-item active">

                                        <div class="col-md-4">

                                            <div class="rating">
                                                @if($rate['rating']== 5)
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                @elseif($rate['rating'] == 4)
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                @elseif( $rate['rating'] == 3)
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                @elseif($rate['rating'] == 2)
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                @elseif($rate['rating'] == 1)
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                @endif
                                            </div>
                                            <div class="title">
                                                <h6>{{json_encode($rate['title'], JSON_UNESCAPED_UNICODE)}}</h6>
                                            </div>
                                            <div class="content">
                                                <p>{{json_encode($rate['content'], JSON_UNESCAPED_UNICODE)}}</p>
                                            </div>

                                            <div class="info">
                                                <div class="name">
                                                    <h6>{{json_encode($rate['name'], JSON_UNESCAPED_UNICODE)}}</h6>
                                                </div>
                                                <div class="p-name">
                                                    <p>{{json_encode($rate['p_name'], JSON_UNESCAPED_UNICODE)}}</p>
                                                </div>
                                                <div class="date">
                                                    <p>{{$rate['date']}}</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                @elseif($rate['active'] == 0)

                                    <div class="carousel-item">

                                        <div class="col-md-4">

                                            <div class="rating">
                                                @if($rate['rating']== 5)
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                @elseif($rate['rating'] == 4)
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                @elseif( $rate['rating'] == 3)
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                @elseif($rate['rating'] == 2)
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                @elseif($rate['rating'] == 1)
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                @endif
                                            </div>
                                            <div class="title">
                                                <h6>{{json_encode($rate['title'], JSON_UNESCAPED_UNICODE)}}</h6>
                                            </div>
                                            <div class="content">
                                                <p>{{json_encode($rate['content'], JSON_UNESCAPED_UNICODE)}}</p>
                                            </div>

                                            <div class="info">
                                                <div class="name">
                                                    <h6>{{json_encode($rate['name'], JSON_UNESCAPED_UNICODE)}}</h6>
                                                </div>
                                                <div class="p-name">
                                                    <p>{{json_encode($rate['p_name'], JSON_UNESCAPED_UNICODE)}}</p>
                                                </div>
                                                <div class="date">
                                                    <p>{{$rate['date']}}</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                            @endif





                        @endforeach


                        <!--.carousel-inner-->
                        </div>

                    </div>
                </div>

            </div>

    </section>


</main>
<footer class="footer-main">
    <div class="container text-center">
        <div class="row text-center">
            <div class="col-md-2">
                <a href="#">تتبع طلبك</a>
            </div>
            <div class="col-md-2">
                <a href="#">سياسة الخصوصية</a>
            </div>
            <div class="col-md-2">
                <a href="#">سياسة الشحن</a>
            </div>
            <div class="col-md-2">
                <a href="#">سياسة الخدمة</a>
            </div>
            <div class="col-md-2">
                <a href="#">ضمان استرداد الأموال</a>
            </div>
            <div class="col-md-2">
                <a href="#">الأسئلة الشائعة</a>
            </div>
        </div>
        <div class="copy-rights">

            <p>copyright © 2020</p>

        </div>

    </div>
</footer>


<!--
    <footer></footer> -->


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" crossorigin="anonymous"></script>


<script>
    AOS.init();
</script>


<script>
    @if(Session::has('success'))
    toastr.success("{{ Session::get('success') }}")
    @endif

    @if(Session::has('orange'))
    toastr.info("{{ Session::get('orange') }}")
    @endif

    @if(Session::has('danger'))
    toastr.error("{{ Session::get('danger') }}")
    @endif
</script>


</body>
</html>
