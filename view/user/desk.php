<div id="custumize-bar">
    <span>شخصی سازی این صفحه</span>
</div>
<div id="desk-items">
    <div>
        <div id="calendar">
            <p>تقویم</p>
            <div>
                <p>دی ۱۴۰۰</p>
                <ul>
                    <li>ش</li>
                    <li>ی</li>
                    <li>د</li>
                    <li>س</li>
                    <li>چ</li>
                    <li>پ</li>
                    <li>ج</li>
                </ul>
                <ul>
                    <li>X</li>
                    <li>X</li>
                    <li>X</li>
                    <li>X</li>
                    <li>1</li>
                    <li style="background-color: #faa; color: #f00; padding: 0.5rem; margin: 0.5rem">2</li>
                    <li>3</li>
                </ul>
                <ul>
                    <li>4</li>
                    <li>5</li>
                    <li>6</li>
                    <li>7</li>
                    <li>8</li>
                    <li>9</li>
                    <li>10</li>
                </ul>
                <ul>
                    <li>11</li>
                    <li>12</li>
                    <li>13</li>
                    <li>14</li>
                    <li>15</li>
                    <li>16</li>
                    <li>17</li>
                </ul>
                <ul>
                    <li>18</li>
                    <li>19</li>
                    <li>20</li>
                    <li>21</li>
                    <li>22</li>
                    <li>23</li>
                    <li>24</li>
                </ul>
                <ul>
                    <li>25</li>
                    <li>26</li>
                    <li>27</li>
                    <li>28</li>
                    <li>29</li>
                    <li style="background-color: #faa; color: #f00; padding: 0.5rem 0.3rem; margin: 0.4rem">30</li>
                    <li>X</li>
                </ul>
            </div>
        </div>
        <div id="activites">
            <p>گاه‌شمار فعالیت ها</p>
            <div id="clk-alt">
                <img src="/assets/svg/main/clock.svg" alt="" onclick="activitiesMenu(3)">
                <img src="/assets/svg/main/sort-amount-down-alt.svg" alt="" onclick="activitiesMenu(0)">
                <div style="display: none">
                    <div>مرتب‌سازی بر اساس تاریخ‌ها</div>
                    <div>مرتب‌سازی بر اساس درس‌ها</div>
                </div>
                <div style="display: none">
                    <div>همه</div>
                    <div>تاخیر دار</div>
                    <br>
                    <div style="color: #777; cursor: default">مهلت</div>
                    <div>۷ روز آینده</div>
                    <div>۳۰ روز آینده</div>
                    <div>۳ ماه آینده</div>
                    <div>۶ ماه آینده</div>
                </div>
            </div>
            <div>
                <img src="/assets/svg/main/clipboard-list.svg" alt="">
                <p>مهلت هیچ فعالیتی نزدیک نیست</p>
            </div>
        </div>
        <div id="notifications">
            <p>تابلوی اعلانات</p>
            <p> (.هنوز اطلاعیه‌ای ارسال نشده است)</p>
            <div></div>
        </div>
    </div>

    <div>
        <div>
            <div>نمای کلی درس</div>
            <div onclick="openList(7)">
                <span>همه (به جز موارد حذف شده)</span>
                <img src="/assets/svg/main/filter.svg" alt="">
            </div>
            <div id="card" onclick="openList(0)">
                <span>کارت</span>
                <img src="/assets/svg/main/th.svg" alt="">
                <div style="display: none">
                    <div>کارت</div>
                    <div>لیست</div>
                    <div>خلاصه</div>
                </div>
                <div style="display: none">
                    <div>نام درس</div>
                    <div>آخرین زمان دسترسی</div>
                </div>
                <div style="display: none">
                    <div>همه (به جز موارد حذف شده)</div>
                    <div>در جریان</div>
                    <div>آینده</div>
                    <div>گذشته</div>
                    <div>ستاره‌دار</div>
                    <div>برای نمایش حذف شد</div>
                </div>
            </div>
            <div onclick="openList(4)">
                <span>نام درس</span>
                <img src="/assets/svg/main/sort-amount-down-alt.svg" alt="">
            </div>
        </div>
    
        <div id="lessons">
            <div>
                <div class="color-red">
                    <img src="/assets/media/image/os_lab.jpg" alt="">
                </div>
                <div>
                    <img src="/assets/svg/main/ellipsis-h.svg" alt="">
                    <span>گروه مهندسی کامپیوتر</span>
                    <span>کد درس : ۰۱-۱۳۱۰۰۵۷</span>
                    <span>نیم سال تحصیلی ۰۰۱</span>
                </div>
                <div>آزمایشگاه سیستم های عامل</div>
            </div>
            <div>
                <div class="color-orange">
                    <img src="" alt="">
                </div>
                <div>
                    <img src="/assets/svg/main/ellipsis-h.svg" alt="">
                    <span>گروه مهندسی کامپیوتر</span>
                    <span>کد درس : ۰۱-۱۳۱۰۰۵۷</span>
                    <span>نیم سال تحصیلی ۰۰۱</span>
                </div>
                <div>اصول طراحی کامپایلر</div>
            </div>
            <div>
                <div onclick="lessonPage()" class="color-yellow">
                    <img src="/assets/media/image/Cover.jpg" alt="">
                </div>
                <div>
                    <img src="/assets/svg/main/ellipsis-h.svg" alt="">
                    <span>گروه مهندسی کامپیوتر</span>
                    <span>کد درس : ۰۱-۱۳۱۰۰۵۷</span>
                    <span>نیم سال تحصیلی ۰۰۱</span>
                </div>
                <div onclick="lessonPage()">تحلیل و طراحی سیستم‌ها</div>
            </div>
            <div>
                <div class="color-green">
                    <img src="" alt="">
                </div>
                <div>
                    <img src="/assets/svg/main/ellipsis-h.svg" alt="">
                    <span>گروه دروس عمومی</span>
                    <span>کد درس : ۰۱-۱۳۱۰۰۵۷</span>
                    <span>نیم سال تحصیلی ۰۰۱</span>
                </div>
                <div>تفسیر موضوعی قرآن</div>
            </div>
            <div>
                <div class="color-blue">
                    <img src="" alt="">
                </div>
                <div>
                    <img src="/assets/svg/main/ellipsis-h.svg" alt="">
                    <span>گروه دروس عمومی</span>
                    <span>کد درس : ۰۱-۱۳۱۰۰۵۷</span>
                    <span>نیم سال تحصیلی ۰۰۱</span>
                </div>
                <div>دانش خانواده و جمعیت</div>
            </div>
            <div>
                <div class="color-dark-blue">
                    <img src="" alt="">
                </div>
                <div>
                    <img src="/assets/svg/main/ellipsis-h.svg" alt="">
                    <span>گروه مهندسی کامپیوتر</span>
                    <span>کد درس : ۰۱-۱۳۱۰۰۵۷</span>
                    <span>نیم سال تحصیلی ۰۰۱</span>
                </div>
                <div>ریزپردازنده و زبان اسمبلی</div>
            </div>
            <div>
                <div class="color-purple">
                    <img src="" alt="">
                </div>
                <div>
                    <img src="/assets/svg/main/ellipsis-h.svg" alt="">
                    <span>گروه مهندسی کامپیوتر</span>
                    <span>کد درس : ۰۱-۱۳۱۰۰۵۷</span>
                    <span>نیم سال تحصیلی ۰۰۱</span>
                </div>
                <div>شبکه های کامپیوتری</div>
            </div>
            <div>
                <div class="color-red">
                    <img src="" alt="">
                </div>
                <div>
                    <img src="/assets/svg/main/ellipsis-h.svg" alt="">
                    <span>گروه مهندسی کامپیوتر</span>
                    <span>کد درس : ۰۱-۱۳۱۰۰۵۷</span>
                    <span>نیم سال تحصیلی ۰۰۱</span>
                </div>
                <div>طراحی کامپیوتری سیستم های دیجیتال</div>
            </div>
        </div>
    </div>
</div>
<script src="/assets/js/user/desk.js"></script>