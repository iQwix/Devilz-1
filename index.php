<?php 

    $pageTitle = "Home";

    include "init.php";

?>
<!-- بداية قسم الترحيب -->
<div class="welcome">
    <div class="hero">
        <div class="hero-inner">
            <div class="text-center">
                <div class="welcome-header">
                    <img src="includes/layout/images/devilzLogo.png" class="img-avatar" alt="">
                    <h1>
                        Devilz
                    </h1>
                </div>
                <div class="welcome-body">
                    <p class="lead">الموقع الرسمي لفريق ديفيلز للرياضة الإلكترونية</p>
                    <div class="form-group">
                        <a href="#membersShow" onclick="resetHref();"><button type="submit" class="btn btn-dark">الإنضمام</button></a>
                        <a href="#"><button type="submit" class="btn btn-outline-light">تسجيل دخول</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- نهاية قسم صفحة الترحيب -->

<!-- بداية قسم من نحن -->
<div class="aboutUs" id="aboutUs">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 about-body">
                <h2 class="h1">من نحن ؟</h2>
                <p class="lead">أنا أحب البر والمزيون وكيف حالكم طيبين السلام عليكم ورحمه الله وبركاته والصلاة والسلام على رسوله الكريم محمد صلى الله عليه وسلم مع السلام احوبكم وش علومكم او ام جي واو</p>
            </div>
            <div class="col-lg-3">
                <img src="includes/layout/images/devilzLogo.png" class="aboutLogo" alt="">
            </div>
        </div>
    </div>
</div>
<!-- نهاية قسم من نحن -->

<!-- بداية قسم عدد الأعضاء -->
<div class="membersCount" id="membersCount">
    <div id="bg">
        <canvas></canvas>
        <canvas></canvas>
        <canvas></canvas>
    </div>
    <center>
        <div class="container">
            <h2 class="h1">أعضاء الفريق</h2>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header card-header-icon">
                            <div class="card-icon">
                                <i class="fas fa-film icon"></i>
                            </div>
                            <p class="card-category">المنتجين</p>
                            <h3 class="card-title">4</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header card-header-icon">
                            <div class="card-icon">
                                <i class="fas fa-paint-brush icon"></i>
                            </div>
                            <p class="card-category">المصممين</p>
                            <h3 class="card-title">16</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header card-header-icon">
                            <div class="card-icon">
                                <i class="fas fa-gamepad icon"></i>
                            </div>
                            <p class="card-category">اللاعبين</p>
                            <h3 class="card-title">43</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center>
</div>
<!-- نهاية قسم عدد الأعضاء -->

<!-- بداية قسم عرض الأعضاء -->
<div class="membersShow" id="membersShow">
    <center>
        <div class="container">
            <h2 class="h1">الفرق وطلب الإنضمام</h2>
            <div class="owl-carousel owl-theme">
                <div class="card">
                    <div class="card-img">
                        <img class="card-img-top" src="includes/layout/images/Overwatch_bg.jpg">
                        <div class="overlay"></div>
                        <div class="card-options">
                            <button class="btn btn-light">عرض الأعضاء</button>
                            <button class="btn btn-dark">طلب الإنضمام</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">OverWatch</h5>
                        <p class="card-text">عدد اللاعبين: 12</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img">
                        <img class="card-img-top" src="includes/layout/images/R6S_bg.jpg">
                        <div class="overlay"></div>
                        <div class="card-options">
                            <button class="btn btn-light">عرض الأعضاء</button>
                            <button class="btn btn-dark">طلب الإنضمام</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Rainbow Six Siege</h5>
                        <p class="card-text">عدد اللاعبين: 12</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img">
                        <img class="card-img-top" src="includes/layout/images/Fortnite_lg.jpg">
                        <div class="overlay"></div>
                        <div class="card-options">
                            <button class="btn btn-light">عرض الأعضاء</button>
                            <button class="btn btn-dark">طلب الإنضمام</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Fortnite</h5>
                        <p class="card-text">عدد اللاعبين: 12</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img">
                        <img class="card-img-top" src="includes/layout/images/RL_lg.jpg">
                        <div class="overlay"></div>
                        <div class="card-options">
                            <button class="btn btn-light">عرض الأعضاء</button>
                            <button class="btn btn-dark">طلب الإنضمام</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Rocket League</h5>
                        <p class="card-text">عدد اللاعبين: 12</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img">
                        <img class="card-img-top" src="includes/layout/images/LOL_lg.jpg">
                        <div class="overlay"></div>
                        <div class="card-options">
                            <button class="btn btn-light">عرض الأعضاء</button>
                            <button class="btn btn-dark">طلب الإنضمام</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">League of Legends</h5>
                        <p class="card-text">عدد اللاعبين: 5</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img">
                        <img class="card-img-top" src="includes/layout/images/FIFA19_lg.jpg">
                        <div class="overlay"></div>
                        <div class="card-options">
                            <button class="btn btn-light">عرض الأعضاء</button>
                            <button class="btn btn-dark">طلب الإنضمام</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Fifa 19</h5>
                        <p class="card-text">عدد اللاعبين: 6</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img">
                        <img class="card-img-top" src="includes/layout/images/Cod_bg.jpg">
                        <div class="overlay"></div>
                        <div class="card-options">
                            <button class="btn btn-light">عرض الأعضاء</button>
                            <button class="btn btn-dark">طلب الإنضمام</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Black ops 4</h5>
                        <p class="card-text">عدد اللاعبين: 1</p>
                    </div>
                </div>
            </div>
            <button class="btn btn-secondary float-right">الإنضمام الى فريق المصممين والمنتجين</button>
            <br class="clearfloats" />
        </div>
    </center>
</div>
<!-- نهاية قسم عرض الأعضاء -->

<!-- بداية قسم التذاكر -->
<div class="callUsBackGround">
    <div class="callUs" id="callUs">
        <div class="container">
            <h2 class="h1">تواصل معنا</h2>
            <p class="lead">يمكنك التواصل معنا عن طريق الهاتف أو البريد الإلكتروني ويمكنك أيضا فتح تذكرة</p>
            <div class="tickets">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="fullname">الإسم كاملًا</label>
                            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="سهيل باحاوي">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">البريد الإلكتروني</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="test@gmail.com">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="type">نوع التذكرة</label>
                        <select class="form-control" id="type">
                            <option>إختار</option>
                            <option>شكوى</option>
                            <option>اقتراح</option>
                            <option>مساعدة</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="subject">عنوان التذكرة</label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="عندي مشكلة في شيء ما">
                    </div>
                    <div class="form-group">
                        <label for="describe">وصف التذكرة</label>
                        <textarea class="form-control" id="describe" name="describe" placeholder="عندي مشكلة في تسجيل الدخول المتصفح الي استخدمه قوقل كروم" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">أرسل</button>
                </form>
            </div>
            <div class="contact">
                <div class="row">

                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <p class="lead">0566983066 :الهاتف <i class="fas fa-phone-square"></i></p>
                    </div>
                    <div class="col-lg-12">
                        <p class="lead">Sbahawi@gmail.com :البريد الإلكتروني <i class="fas fa-envelope-square"></i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- نهاية قسم التذاكر -->

<!-- بداية سهم الطلوع للأعلى -->
<a class="scroll-up" onclick="topFunction();">
    <span class="left-bar"></span>
    <span class="right-bar"></span> 
    <svg width="40" height="40">
        <line class="top" x1="0" y1="0" x2="120" y2="0"/>
        <line class="left" x1="0" y1="40" x2="0" y2="-80"/>
        <line class="bottom" x1="40" y1="40" x2="-80" y2="40"/>
        <line class="right" x1="40" y1="0" x2="40" y2="1200"/>
    </svg>
</a>
<!-- نهاية سهم الطلوع للأعلى -->

<!-- بداية صفحة التحميل -->
    <section class="loadingOverLay text-center">
        <div class="sk-folding-cube loading">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </section>
<!-- نهاية صفحة التحميل -->

<?php include "includes/templates/footer.php"; ?>