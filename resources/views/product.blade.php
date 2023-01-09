<!DOCTYPE html>
<html lang="en">
<head>
    <title>New Silky Skin</title>
    <meta charset="utf-8">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
          integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
          crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css', Request::secure()) }}">
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
                    <img src="{{ url('/app_logo.png') }}" alt="app-icon"></a>
            </nav>
        </div>
    </div>
</header>
<main>
    <section class="section-1-product" id="section-1-product">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-6 img-responsive">

                    <label class="" for="white" data-aos="fade_in" data-aos-duration="1000" id="white">
                        <img src="{{ url('assets/assets/product-1.jpg') }}" class="image-pg-3-1" alt="image-pg-2">
                    </label>
                    <label class="pink-hidden" data-aos="fade_in" data-aos-duration="1000" for="pink" id="pink">
                        <img src="{{ url('assets/assets/product-2.jpg') }}" class="image-pg-3-2" alt="image-pg-2">
                    </label>
                </div>
                <div class="col-md-6 text-first text-right" data-aos="fade-left" data-aos-duration="1000">
                    <form action="{{ route('checkout.confirm') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <h1>جهاز ليزر سيلكي سكن</h1>
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
                                                                  data-action="minus" data-min="1"
                                                                  data-target="font-size"><i
                                        class="fa fa-minus"></i></button></span>
                            <input type="number" value="1" min="1" max="10" oninvalid="InvalidMsg(this);"
                                   onchange="this.setCustomValidity('')" class="form-control col-md-2 number_ltr"
                                   id="font-size" name="qte"/>
                            <span class="input-group-btn"><button class="btn btn-light value-control" type="button"
                                                                  data-action="plus" data-max="10"
                                                                  data-target="font-size"><i
                                        class="fa fa-plus"></i></button></span>
                        </div>
                        <hr>
                        <div class="confirm-p text-center">
                            <button class="btn primary-btn-2 btn-primary btn-lg" role="submit" id="btn-shaky-3"> تأكيد
                                طلبك
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="how_to">
        <div class="container">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6 col-sm-12">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <button class="btn " style="float:left;font-size: 2vmin;" type="button"
                                                data-toggle="collapse" data-target="#collapseOne" aria-expanded="false"
                                                aria-controls="collapseOne">
                                            <i class="fas fa-arrow-down"></i>
                                        </button>
                                    </div>
                                    <div class="col-sm-4">
                                        <h4 class="mb-0" style="float:right;font-size: 3vmin;"><span
                                                class="">الوصف</span></h4>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                 data-parent="#accordionExample">
                                <div class="card-body">
                                    <p style="text-align: right;"><strong>لجسم اكثر نعومة واحساس بشعور الأنوثة الطاغية
                                            &nbsp;&nbsp;</strong></p>
                                    <meta charset="utf-8">
                                    <p dir="rtl" class="p1" style="text-align: right;"><span class="s1">ليزر</span><span
                                            class="s2"> </span><span class="s1">سيلكي</span><span
                                            class="s2"> </span><span class="s1">سكن</span><span class="s2"> </span><span
                                            class="s1">بتقنية</span><span class="s2"> IPL </span><span
                                            class="s1">صنع</span><span class="s2"> </span><span
                                            class="s1">خصيصا</span><span class="s2"> </span><span
                                            class="s1">للأنثى</span><span class="s2"> </span><span
                                            class="s1">الذي</span><span class="s2"> </span><span
                                            class="s1">تبحث</span><span class="s2"> </span><span
                                            class="s1">عن</span><span class="s2"> </span><span
                                            class="s1">البشرة</span><span class="s2"> </span><span
                                            class="s1">الناعمة</span><span class="s2"> </span><span
                                            class="s1">وشعور</span><span class="s2"> </span><span
                                            class="s1">الأنوثة</span><span class="s2"> </span><span
                                            class="s1">الطاغية،</span><span class="s2"> </span><span
                                            class="s1">حافظي</span><span class="s2"> </span><span
                                            class="s1">على</span><span class="s2"> </span><span
                                            class="s1">خصوصيتك&nbsp;</span><span class="s2"></span><span class="s1">واستخدميه</span><span
                                            class="s2"> </span><span class="s1">بكل</span><span class="s2"> </span><span
                                            class="s1">سهوله</span><span class="s2"> </span><span
                                            class="s1">وانتي</span><span class="s2"> </span><span
                                            class="s1">في</span><span class="s2"> </span><span
                                            class="s1">البيت</span><span class="s2"> </span></p>
                                    <p style="text-align: right;"><span>&nbsp;</span><strong><br>ننائج ملحوظة بعد 3-4&nbsp;جلسات
                                            •</strong></p>
                                    <p style="text-align: right;"><strong>يمكنك استعماله على جميع اجزاء
                                            الجسم&nbsp;•</strong></p>
                                    <p style="text-align: right;"><strong>لطيف على البشره ولايتسبب
                                            بالألم&nbsp;•</strong><br><strong></strong></p>
                                    <p style="text-align: right;"><strong>فقط دقائق للاستعمال على كامل
                                            الجسم&nbsp;•</strong></p>
                                    <meta charset="utf-8">
                                    <p dir="rtl" class="p1" style="text-align: right;"><strong><span
                                                class="s1">•&nbsp;</span><span class="s2">يقلل</span><span
                                                class="s3"> </span><span class="s2">من</span><span
                                                class="s3"> </span><span class="s2">الحاجة</span><span
                                                class="s3"> </span><span class="s2">المستمرة</span><span class="s3">&nbsp;</span><span
                                                class="s2" mce-data-marked="1">لإزالة الشعر</span></strong></p>
                                    <p dir="rtl" class="p1" style="text-align: right;"><strong><span class="s3"><span
                                                    class="s1">•&nbsp;</span>يمكنك</span><span
                                                class="s3">&nbsp;</span><span class="s2">استخدامه</span><span
                                                class="s3"> </span><span class="s2">في</span><span
                                                class="s3"> </span><span class="s2">خصوصية</span><span
                                                class="s3"> </span><span class="s2">تامة</span><span class="s3"> </span><span
                                                class="s2">داخل</span><span class="s3"> </span><span
                                                class="s2">منزلك</span></strong></p>
                                    <p dir="rtl" class="p1" style="text-align: right;"><span
                                            class="s1">•<strong> 300 </strong></span><strong><span class="s2">ألف</span><span
                                                class="s1"> </span><span class="s2">ومضة</span><span class="s1"> </span><span
                                                class="s2">تكفيك</span><span class="s1"> </span><span class="s2">لإستخدام</span><span
                                                class="s1"> </span><span class="s2">الجهاز</span><span
                                                class="s1"> </span><span class="s2">لأكثر</span><span
                                                class="s1"> </span><span class="s2">من</span><span
                                                class="s1"> 10 </span><span class="s2">سنوات</span></strong></p>
                                    <p style="text-align: right;"><strong> لايحتاج لتغيير العدسة صالح مدى
                                            الحياة</strong><strong>&nbsp;•</strong></p>
                                    <p dir="rtl" class="p1" style="text-align: right;"><strong><span
                                                class="s1">• 90 </span><span class="s2">يوم</span><span
                                                class="s1"> </span><span class="s2">ضمان</span><span class="s1"> </span><span
                                                class="s2">استرداد</span><span class="s1">&nbsp;</span><span class="s2">المبلغ المدفوع</span></strong>
                                    </p>
                                    <p dir="rtl" class="p1">&nbsp;</p>
                                    <h2 dir="rtl" class="p2"><strong><span class="s2">9 اسباب</span><span
                                                class="s1"> </span><span class="s2">تجعلك</span><span
                                                class="s1"> </span><span class="s2">تعشقين</span><span class="s1"> Silkyskin</span></strong>
                                    </h2>
                                    <div class="container">
                                        <p style="text-align: right;"><img class="img-responsive_for"
                                                                           src="https://cdn.shopify.com/s/files/1/0399/7604/2645/files/UntitledDesign_970867935_480x480.png?v=1597582722"
                                                                           alt=""></p>
                                    </div>
                                    <p dir="rtl" class="p1" style="text-align: right;">&nbsp;</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <button class="btn " style="float:left;font-size: 2vmin;" type="button"
                                                data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                            <i class="fas fa-arrow-down"></i>
                                        </button>
                                    </div>
                                    <div class="col-sm-10">
                                        <h4 class="mb-0" style="float:right;font-size: 3vmin;"><span class="">طريقة الإستخدام</span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                 data-parent="#accordionExample">
                                <div class="card-body">
                                    <video controls="controls" style="max-width: 100%; height: auto;">
                                        <source
                                            src="https://cdn.shopify.com/s/files/1/0399/7604/2645/files/video-output-CF74869A-08EC-4C0B-A671-15F7A6F29C70.mp4?v=1601264493"
                                            type="video/mp4">
                                        Your browser does not support our video.
                                    </video>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <button class="btn " style="float:left;font-size: 2vmin;" type="button"
                                                data-toggle="collapse" data-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                            <i class="fas fa-arrow-down"></i>
                                        </button>
                                    </div>
                                    <div class="col-sm-10">
                                        <h4 class="mb-0" style="float:right;font-size: 3vmin;"><span class="">الأسئلة الشائعة</span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                 data-parent="#accordionExample">
                                <div class="card-body" style="text-align: right;">
                                    <div class="first-form">
                                        <strong>كيف يعمل الجهاز ؟</strong>&nbsp;
                                    </div>
                                    <div style="direction: rtl;">الجهاز يعمل بتقنية IPL الذي تساعد في تعطيل الخلايا
                                        المسؤولة عن نمو الشعر
                                    </div>
                                    <div style="direction: rtl;"></div>
                                    <div style="direction: rtl;">
                                        <strong>هل الجهاز عليه ضمان ؟</strong>&nbsp;
                                    </div>
                                    <div style="direction: rtl;">نعم، الجهاز عليه ضمان لمدة&nbsp;12 شهر&nbsp;<span
                                            class="s1">يغطي</span><span class="s2"> </span><span
                                            class="s1">أي</span><span class="s2"> </span><span
                                            class="s1">أخطاء</span><span class="s2">&nbsp;أو عيوب مصنعيه</span><span
                                            class="s2">.&nbsp; </span><span class="s1">إذا</span><span
                                            class="s2"> </span><span class="s1">كنت</span><span class="s2"> </span><span
                                            class="s1">تواجه</span><span class="s2"> </span><span
                                            class="s1">أي</span><span class="s2"> </span><span
                                            class="s1">مشاكل</span><span class="s2"> </span><span
                                            class="s1">تتعلق</span><span class="s2"> </span><span
                                            class="s1">بجهازك</span><span class="s2"> </span><span
                                            class="s1">،</span><span class="s2"> </span><span
                                            class="s1">فيرجى</span><span class="s2"> </span><span
                                            class="s1">التواصل</span><span class="s2"> </span><span
                                            class="s1">معنا</span><span class="s2"> </span><span class="s1">على</span>
                                        <p dir="rtl" class="p1"><a href="mailto:support@newsilkyskin.me"
                                                                   class="js-no-transition">support@newsilkyskin.me</a>
                                        </p>
                                        <p class="p2"><strong>هل يتسبب بالألم ؟</strong>&nbsp;</p>
                                        <p class="p2">واحدة من اهم مزايا تقنية IPL ان الألم جدا خفيف مقارنة بالأساليب
                                            التقليدية لإزالة الشعر، يشرح معظم عملائنا انه يتسبب بشعور دافئ على الجلد
                                            فقط.</p>
                                        <p class="p1"><strong><span class="s1">هل</span><span class="s2"> </span><span
                                                    class="s1">يعمل</span><span class="s2"> </span><span class="s1">الجهاز</span><span
                                                    class="s2">&nbsp;</span><span class="s1">على</span><span
                                                    class="s2"> </span><span class="s1">البشرة</span><span
                                                    class="s2"> </span><span class="s1">الحساسة؟</span></strong></p>
                                        <p class="p2"><span class="s2">تم</span><span class="s1"> </span><span
                                                class="s2">تصميم</span><span class="s1"> </span><span
                                                class="s2">جهازنا</span><span class="s1"> </span><span
                                                class="s2">ليكون</span><span class="s1"> </span><span
                                                class="s2">مناسب</span><span class="s1">&nbsp;</span><span class="s2">للاستخدام</span><span
                                                class="s1"> </span><span class="s2">في</span><span
                                                class="s1"> </span><span class="s2">المنزل</span><span
                                                class="s1"> </span><span class="s2">،</span><span
                                                class="s1"> </span><span class="s2">لذا</span><span
                                                class="s1"> </span><span class="s2">فإنه</span><span class="s1"> </span><span
                                                class="s2">لطيفة</span><span class="s1"> </span><span
                                                class="s2">على</span><span class="s1"> </span><span
                                                class="s2">البشرة</span><span class="s1"> </span><span
                                                class="s2">و</span><span class="s1"> </span><span
                                                class="s2">مناسب</span><span class="s1"> </span><span
                                                class="s2">لأنواع</span><span class="s1"> </span><span
                                                class="s2">البشرة</span><span class="s1"> </span><span class="s2">الحساسة</span><span
                                                class="s1">! </span></p>
                                        <p class="p2"><strong><span
                                                    class="s1">كم المدة المتوقعة لظهور&nbsp;النتائج؟</span></strong></p>
                                        <p class="p2"><span class="s1">يبدأ معظم العملاء في ملاحظة بطئ ظهور الشعر&nbsp;بعد 3-4 جلسات فقط ، واختفاء الشعر ونتائج مرضية بعد 12 جلسة. تختلف النتائج من شخص لآخر.</span>
                                        </p>
                                        <p class="p2"><strong><span
                                                    class="s1">&nbsp;كم مرة أحتاج لاستخدامه؟</span></strong></p>
                                        <p class="p2"><span class="s1">نوصي باستخدام الجهاز مرة واحدة في الأسبوع خلال الأسابيع الثمانية الأولى. بعد هذه الفترة نوصي باستخدام الجهاز مرة في الشهر لمدة شهرين أو حتى الرضا. إذا كنت ترغب في الحفاظ على بشرة ناعمة بلا شعر ، نوصي باستخدام الجهاز مرة كل شهرين إلى 3 أشهر ، أو حسب الحاجة.</span>
                                        </p>
                                        <p class="p2"><span class="s1"><strong>هل من الطبيعي أن تكون هناك رائحة احتراق طفيفة عند استخدام الجهاز&nbsp;؟</strong><br> نعم ، هذا طبيعي تمامًا ، قد تشم رائحة حرق طفيفة ولكن هذا يعني أنه قد يكون هناك بعض الشعر الذي لم يتم حلقه.&nbsp;</span><span>لنتائج افضل&nbsp;</span>يرجى
                                            التأكد من أنك حلقتي الشعر بالكامل قبل بدأ الإستخدام .&nbsp;</p>
                                        <p class="p2"><strong><span
                                                    class="s1">كم سنة يمكنني استعمال الجهاز؟</span></strong></p>
                                        <p class="p2"><span class="s1">يتمتع جهازنا بعدد ومضات&nbsp;يصل إلى 300000 ومضة ، والتي ستستمر لأكثر من 10&nbsp;أعوام إذا تم استخدامها وفقًا للتوجيهات.</span>
                                        </p>
                                        <p class="p2"><strong><span class="s1">ما هي مناطق الجسم الي يمكنني استخدام الجهاز فيها؟</span></strong>
                                        </p>
                                        <p class="p2"><span class="s1">يمكنك استخدام جهازنا على جسمك بالكامل ، بما في ذلك المنطقة الحساسة&nbsp;و&nbsp;</span><span
                                                class="s1">الوجه (تأكد من عدم الاقتراب من عينيك).</span></p>
                                        <p class="p2"><strong><span class="s1">هل أحتاج إلى الحلاقة قبل استخدام هذا المنتج؟</span></strong>
                                        </p>
                                        <p class="p2"><span class="s1">نعم ، نوصي بحلق المناطق التي ترغبين في استهدافها قبل استخدام الجهاز لتعمل تقنية IPL على إستهداف بصيلة الشعر مباشرة وتحقيق نتائج افضل</span>
                                        </p>
                                        <p class="p2"><strong><span class="s1">&nbsp;ماهي طرق إزالة الشعر التي يمكنني استخدامها بين الجلسات؟</span></strong>
                                        </p>
                                        <p class="p2"><span class="s1">بين جلساتك يجب أن تحلق فقط عند الحاجة. نوصي بعدم إزالة الشعر بالشمع أو النتف.&nbsp;</span>
                                        </p>
                                        <p class="p2"><strong>هل يعمل على جميع انواع البشرة؟&nbsp;</strong></p>
                                        <p class="p2">جهازنا مناسب للجميع باستثناء ألوان البشرة الداكنة جدا. يرجى الرجوع
                                            إلى مخطط لون البشرة أدناه لمعرفة ما إذا كان الجهاز مناسبًا لك أم لا.</p>
                                        <meta charset="utf-8">
                                        <div class="container">
                                            <p class="p2"><img class="img-responsive_for"
                                                               data-src="https://i.shgcdn.com/532ffb3f-656b-4bd4-aa18-adf7f0d8d23e/-/format/auto/-/preview/3000x3000/-/quality/lighter/"
                                                               width="308" height="52" alt=""
                                                               class="shogun-image shogun-lazyloading shogun-lazyloaded"
                                                               src="https://i.shgcdn.com/532ffb3f-656b-4bd4-aa18-adf7f0d8d23e/-/format/auto/-/preview/3000x3000/-/quality/lighter/">
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </section>
    <section class="section-2-product" id="section-2-product">
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
                    <a class="nav-link" href="#"><i class="fab fa-instagram fa-3x"></i></a>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer class="footer-second_p">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous"></script>
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
