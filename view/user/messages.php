<div id="messages">
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
            <span onclick="messageOpenDiv(0)">ستاره‌دار (1)</span>
            <div id="message-menu0" style="display: none">
                <img src="/assets/svg/main/user-circle.svg" alt="">
                <span>نام دانشجو</span>
            </div>
        </div>
        <div>
            <span onclick="messageOpenDiv(1)">کروه (0)</span>
            <div id="message-menu1" style="display: none">
                <img src="/assets/svg/main/user-circle.svg" alt="">
                <p>هیچ مکالمه گروهی ندارید</p>
            </div>
        </div>
        <div>
            <span onclick="messageOpenDiv(2)">خصوصی (0)</span>
            <div id="message-menu2" style="display: none">
                <img src="/assets/svg/main/user-circle.svg" alt="">
                <p>هیچ مکالمه خصوصی ندارید</p>
            </div>
        </div>
    </div>
</div>
<script src="/assets/js/user/messages.js"></script>