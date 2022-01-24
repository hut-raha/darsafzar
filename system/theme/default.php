<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>درس افزار</title>
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/<?php echo IndexTool::getInstance()->getUpperCategory() ?>/<?php echo IndexTool::getInstance()->getInnerCategory() ?>.css">
</head>
<body style="background-color: #fff">
    <div id="msg-bar">
        <div>
            <input class="search-input" type="text" name="">
            <img class="gears" src="/assets/svg/main/cog.svg" alt="">
        </div>
        <div>
            <img class="users" src="/assets/svg/main/user-circle-black.svg" alt="">
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
        <a href="<?php if (IndexTool::getInstance()->getRoute() != "user/desk" && IndexTool::getInstance()->getRoute() != "user/account" && IndexTool::getInstance()->getRoute() != "user/grades" && IndexTool::getInstance()->getRoute() != "user/messages" && IndexTool::getInstance()->getRoute() != "user/prefrences" && IndexTool::getInstance()->getRoute() != "user/desk" && IndexTool::getInstance()->getRoute() != "user/notification") { echo "/user/lesson/sad"; } else { echo "/user/desk"; } ?>">
            <div>
                <span><?php if (IndexTool::getInstance()->getRoute() == "user/lesson") { echo "تحلیل و طراحی سیستم‌ها (۱۳۱۲۰۴۶_۰۱)"; } else { echo "میز کار"; } ?></span>
            </div>
        </a>
        <a href="<?php if (IndexTool::getInstance()->getRoute() != "user/desk" && IndexTool::getInstance()->getRoute() != "user/account" && IndexTool::getInstance()->getRoute() != "user/grades" && IndexTool::getInstance()->getRoute() != "user/messages" && IndexTool::getInstance()->getRoute() != "user/prefrences" && IndexTool::getInstance()->getRoute() != "user/desk" && IndexTool::getInstance()->getRoute() != "user/notification") { echo "/lesson/users"; } else { echo "/user/desk"; } ?>">
            <div>
                <span><?php if (IndexTool::getInstance()->getRoute() == "user/lesson") { echo "شرکت کنندگان"; } else { echo "صفحهٔ اصلی سایت"; } ?></span>
            </div>
        </a>
        <a href="<?php if (IndexTool::getInstance()->getRoute() != "user/desk" && IndexTool::getInstance()->getRoute() != "user/account" && IndexTool::getInstance()->getRoute() != "user/grades" && IndexTool::getInstance()->getRoute() != "user/messages" && IndexTool::getInstance()->getRoute() != "user/prefrences" && IndexTool::getInstance()->getRoute() != "user/desk" && IndexTool::getInstance()->getRoute() != "user/notification") { echo "/user/grades"; }?>">
            <div>
                <span><?php if (IndexTool::getInstance()->getRoute() == "user/lesson") { echo "نمره‌ها"; } else { echo "تقویم"; } ?></span>
            </div>
        </a>
        <a href="<?php if (IndexTool::getInstance()->getRoute() != "forum/desk" && IndexTool::getInstance()->getRoute() != "forum/account" && IndexTool::getInstance()->getRoute() != "forum/grades" && IndexTool::getInstance()->getRoute() != "forum/messages" && IndexTool::getInstance()->getRoute() != "user/prefrences" && IndexTool::getInstance()->getRoute() != "user/desk" && IndexTool::getInstance()->getRoute() != "user/notification") { echo "/forum/sad/12"; } ?>">
            <div>
                <span><?php if (IndexTool::getInstance()->getRoute() == "user/lesson") { echo "تالار اعلانات"; } else { echo "فایل‌های شخصی"; } ?></span>
            </div>
        </a>
        <a href="<?php if (IndexTool::getInstance()->getRoute() != "user/desk" && IndexTool::getInstance()->getRoute() != "user/account" && IndexTool::getInstance()->getRoute() != "user/grades" && IndexTool::getInstance()->getRoute() != "user/messages" && IndexTool::getInstance()->getRoute() != "user/prefrences" && IndexTool::getInstance()->getRoute() != "user/desk" && IndexTool::getInstance()->getRoute() != "user/notification") { echo "/class/online"; } ?>">
            <div>
                <span><?php if (IndexTool::getInstance()->getRoute() == "user/lesson") { echo "کلاس های آنلاین"; } else { echo "درس‌های من"; } ?></span>
            </div>
        </a>
        <a href="">
            <div>
                <span><?php if (IndexTool::getInstance()->getRoute() == "user/lesson") { echo "فایل های بارگذاری شده"; } else { echo "اطلاعیه های آموزشی ترم ۰۰۱"; } ?></span>
            </div>
        </a>
        <a href="">
            <div>
                <span><?php if (IndexTool::getInstance()->getRoute() == "user/lesson") { echo "تمرین ها"; } else { echo "ریزپردازنده و زبان اسمبلی(۱۳۱۰۰۵۰_۰۱)"; } ?></span>
            </div>
        </a>
        <a href="">
            <div>
                <span><?php if (IndexTool::getInstance()->getRoute() == "user/lesson") { echo "آزمون ها"; } else { echo "اصول طراحی کامپایلر(۱۳۱۰۰۳۹_۰۱)"; } ?></span>
            </div>
        </a>
        <a href="<?php if (IndexTool::getInstance()->getRoute() != "user/desk" && IndexTool::getInstance()->getRoute() != "user/account" && IndexTool::getInstance()->getRoute() != "user/grades" && IndexTool::getInstance()->getRoute() != "user/messages" && IndexTool::getInstance()->getRoute() != "user/prefrences" && IndexTool::getInstance()->getRoute() != "user/desk" && IndexTool::getInstance()->getRoute() != "user/notification") { echo "/user/desk"; } else { echo "/user/lesson/sad"; } ?>">
            <div>
                <span><?php if (IndexTool::getInstance()->getRoute() == "user/lesson") { echo "میز کار"; } else { echo "تحلیل و طراحی سیستم‌ها (۱۳۱۲۰۴۶_۰۱)"; } ?></span>
            </div>
        </a>
        <a href="<?php if (IndexTool::getInstance()->getRoute() != "user/desk" && IndexTool::getInstance()->getRoute() != "user/account" && IndexTool::getInstance()->getRoute() != "user/grades" && IndexTool::getInstance()->getRoute() != "user/messages" && IndexTool::getInstance()->getRoute() != "user/prefrences" && IndexTool::getInstance()->getRoute() != "user/desk" && IndexTool::getInstance()->getRoute() != "user/notification") { echo "/user/desk"; } ?>">
            <div>
                <span><?php if (IndexTool::getInstance()->getRoute() == "user/lesson") { echo "صفحهٔ اصلی سایت"; } else { echo "آزمایشگاه سیستم های عامل(۱۳۱۰۰۵۷_۰۱)"; } ?></span>
            </div>
        </a>
        <a href="">
            <div>
                <span><?php if (IndexTool::getInstance()->getRoute() == "user/lesson") { echo "تقویم"; } else { echo "طراحی کامپیوتری سیستم های دیجیتال(۱۳۱۰۰۴۵_۰۱)"; } ?></span>
            </div>
        </a>
        <a href="">
            <div>
                <span><?php if (IndexTool::getInstance()->getRoute() == "user/lesson") { echo "فایل‌های شخصی"; } else { echo "شبکه های کامپیوتری(۱۳۱۰۰۱۵_۰۱)"; } ?></span>
            </div>
        </a>
        <a href="">
            <div>
                <span><?php if (IndexTool::getInstance()->getRoute() == "user/lesson") { echo "درس‌های من"; } else { echo "دانش خانواده و جمعیت(۱۱۱۱۰۲۱_۰۳)"; } ?></span>
            </div>
        </a>
        <a href="">
            <div>
                <span><?php if (IndexTool::getInstance()->getRoute() == "user/lesson") { echo "ریزپردازنده و زبان اسمبلی(۱۳۱۰۰۵۰_۰۱)"; } else { echo "تفسیر موضوعی قرآن(۱۱۱۱۰۰۹_۰۳)"; } ?></span>
            </div>
        </a>
        <?php if (IndexTool::getInstance()->getRoute() == "/user/lesson/sad") { ?>
            <div>
                <span>اصول طراحی کامپایلر(۱۳۱۰۰۳۹_۰۱)</span>
                <span>تحلیل و طراحی سیستم‌ها (۱۳۱۲۰۴۶_۰۱)</span>
                <span>آزمایشگاه سیستم های عامل(۱۳۱۰۰۵۷_۰۱)</span>
                <span>طراحی کامپیوتری سیستم های دیجیتال(۱۳۱۰۰۴۵_۰۱)</span>
                <span>شبکه های کامپیوتری(۱۳۱۰۰۱۵_۰۱)</span>
                <span>دانش خانواده و جمعیت(۱۱۱۱۰۲۱_۰۳)</span>
                <span>تفسیر موضوعی قرآن(۱۱۱۱۰۰۹_۰۳)</span>
            </div>
        <?php } ?>
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
            <div id="toggle-dark" style="background-color: rgb(255, 255, 255)" onclick="toggleDark(this)">
                <div></div>
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