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
        <span>سامانه درس افزار دانشگاه صنعتی همدان</span>
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
            <img src="/assets/svg/main/envelope.svg" alt="">
            <img src="/assets/svg/main/bell.svg" alt="">
        </div>
    </div>
    <?php } ?>
    <div id="content" style="right: 0">
        <?php echo $innerPage ?>
    </div>
    <script src="/assets/js/main.js"></script>
</body>
</html>