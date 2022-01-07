<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>درس افزار</title>
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/<?php echo IndexTool::getInstance()->getUpperCategory() ?>/<?php echo IndexTool::getInstance()->getInnerCategory() ?>.css">
</head>
<body>
    <div id="msg-bar">
        <div>
            <input class="search-input" type="text" name="">
            <img src="/assets/svg/main/cog.svg" alt="">
        </div>
        <div>
            <img src="/assets/svg/main/user-circle-black.svg" alt="">
            <span>مخاطبین</span>
        </div>
        <div>
            <div>
                <span onclick="msgBarOpenDiv(0)">ستاره‌دار (1)</span>
                <div id="msg-bar-menu0" style="display: none">
                    <img src="/assets/svg/main/user-circle.svg" alt="">
                    <span>نام دانشجو</span>
                </div>
            </div>
            <div>
                <span onclick="msgBarOpenDiv(1)">کروه (0)</span>
                <div id="msg-bar-menu1" style="display: none">
                    <img src="/assets/svg/main/user-circle.svg" alt="">
                    <p>هیچ مکالمه گروهی ندارید</p>
                </div>
            </div>
            <div>
                <span onclick="msgBarOpenDiv(2)">خصوصی (0)</span>
                <div id="msg-bar-menu2" style="display: none">
                    <img src="/assets/svg/main/user-circle.svg" alt="">
                    <p>هیچ مکالمه خصوصی ندارید</p>
                </div>
            </div>
        </div>
    </div>
    <div id="bar-menu">
        <div>
            <span>میز کار</span>
        </div>
        <div>
            <span>صفحهٔ اصلی سایت</span>
        </div>
        <div>
            <span>تقویم</span>
        </div>
        <div>
            <span>فایل‌های شخصی</span>
        </div>
        <div>
            <span>درس‌های من</span>
        </div>
        <div>
            <span>اطلاعیه های آموزشی ترم ۰۰۱</span>
        </div>
        <div>
            <span>ریزپردازنده و زبان اسمبلی(۱۳۱۰۰۵۰_۰۱)</span>
        </div>
        <div>
            <span>اصول طراحی کامپایلر(۱۳۱۰۰۳۹_۰۱)</span>
        </div>
        <div>
            <span>تحلیل و طراحی سیستم‌ها (۱۳۱۲۰۴۶_۰۱)</span>
        </div>
        <div>
            <span>آزمایشگاه سیستم های عامل(۱۳۱۰۰۵۷_۰۱)</span>
        </div>
        <div>
            <span>طراحی کامپیوتری سیستم های دیجیتال(۱۳۱۰۰۴۵_۰۱)</span>
        </div>
        <div>
            <span>شبکه های کامپیوتری(۱۳۱۰۰۱۵_۰۱)</span>
        </div>
        <div>
            <span>دانش خانواده و جمعیت(۱۱۱۱۰۲۱_۰۳)</span>
        </div>
        <div>
            <span>تفسیر موضوعی قرآن(۱۱۱۱۰۰۹_۰۳)</span>
        </div>
    </div>
    <?php if (IndexTool::getInstance()->getRoute() != "main/home" && IndexTool::getInstance()->getRoute() != "user/login") {?>
    <div id="nav-bar">
        <img src="/assets/svg/main/bars.svg" alt="" onclick="barMenu()">
        <img src="/assets/media/image/hut-logo.png" alt="">
        <a style="color: #fff" href="/user/desk">سامانه درس افزار دانشگاه صنعتی همدان</a>
        <div>
            <div>
                <img src="/assets/svg/main/user-circle.svg" alt="" onclick="userMenu()">
                <div id="user-menu" data-lock="false" style="opacity: 0; display: none">
                    <div onclick="userMenuPage(0)">
                        <span>میز کار</span>
                        <img src="/assets/svg/main/tachometer-alt.svg" alt="">
                    </div>
                    <div onclick="userMenuPage(1)">
                        <span>مشخصات فردی</span>
                        <img src="/assets/svg/main/user-alt.svg" alt="">
                    </div>
                    <div onclick="userMenuPage(2)">
                        <span>نمره‌ها</span>
                        <img src="/assets/svg/main/table.svg" alt="">
                    </div>
                    <div onclick="userMenuPage(3)">
                        <span>پیام‌ها</span>
                        <img src="/assets/svg/main/envelope-black.svg" alt="">
                    </div>
                    <div onclick="userMenuPage(4)">
                        <span>ترجیحات</span>
                        <img src="/assets/svg/main/wrench.svg" alt="">
                    </div>
                    <div onclick="userMenuPage(5)">
                        <span>خروج از سایت</span>
                        <img src="/assets/svg/main/sign-out-alt.svg" alt="">
                    </div>
                </div>
            </div>
            <span>نام دانشجو</span>
            <img src="/assets/svg/main/envelope.svg" alt="" onclick="msgBar()">
            <div id="bell">
                <img src="/assets/svg/main/bell.svg" alt="" onclick="openBellList()">
                <div style="display: none">
                    <img src="/assets/svg/main/cog-purple.svg" alt="">
                    <img src="/assets/svg/main/check.svg" alt="">
                    <hr style="clear: left; margin: 0; color: #eee">
                    <div class="bell-items">
                        <img src="" alt="">
                        <span>آزمایشگاه سیستم های عامل(۱۳۱۰۰۵۷_۰۱): در پاسخ به: روز و شرایط برگزاری آزمون درس آزمایشگاه سیستم های عامل</span>
                        <br><br>
                        <span>2 ساعت 13 دقیقه قبل</span>
                        <a href="/user/notification/1">مشاهده متن کامل اطلاعیه</a>
                    </div>
                    <div class="bell-items">
                        <img src="" alt="">
                        <span>اصول طراحی کامپایلر(۱۳۱۰۰۳۹_۰۱): لینک ویدئوهای ضبط شده جلسه سی و دوم (آفلاین)</span>
                        <br><br>
                        <span>14 ساعت 7 دقیقه قبل</span>
                        <a href="/user/notification/2">مشاهده متن کامل اطلاعیه</a>
                    </div>
                    <div class="bell-items">
                        <img src="" alt="">
                        <span>تحلیل و طراحی سیستم‌ها (۱۳۱۲۰۴۶_۰۱): آزمون پروژه عملی</span>
                        <br><br>
                        <span>15 ساعت 26 دقیقه قبل</span>
                        <a href="/user/notification/3">مشاهده متن کامل اطلاعیه</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <div id="content" style="left: 0; right: 0">
        <?php echo $innerPage ?>
    </div>
    <script src="/assets/js/main.js"></script>
</body>
</html>