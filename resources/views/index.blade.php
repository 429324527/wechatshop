<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- 360安全游览器使用webkit极速核 -->
    <meta name="renderer" content="webkit" />
    <!-- IE使用它支持的最高模式 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta property="wb:webmaster" content="bde65bab61e33f62" />
    <meta name="description" content="精彩小说尽在腾讯文学,腾讯文学提供玄幻小说,武侠小说,原创小说,网游小说,都市小说,言情小说,青春小说,历史小说,军事小说,网游小说,科幻小说,恐怖小说,首发小说最新章节免费小说阅读小说下载txt,精彩尽在腾讯文学!2013年热门小说:无敌唤灵,无红色权力,无限曙光,余罪,兵临天下,盛唐风月,武帝,大官人,勇闯天涯,机甲天王" />
    <meta name="keywords" content="腾讯文学,小说,小说网,言情小说,青春小说,玄幻小说,武侠小说,都市小说,历史小说,网络小说,小说下载,小说txt,小说全文阅读,原创网络文学,畅销图书,精品图书,传统出版,电子书" />
    <meta property="qc:admins" content="151626767763051673016375" />
    <meta name="baidu-site-verification" content="zgBU5TfI8l" />
    <title> 老天有眼 </title>
    <link rel="shortcut icon" type="image/x-icon" href="http://img1.chuangshi.qq.com/book/p1/ico/bookqq.ico" />
    <link rel="Bookmark" type="image/x-icon" href="http://img1.chuangshi.qq.com/book/p1/ico/bookqq.ico" />
    <link rel="stylesheet" type="text/css" href="/static/css/base.css" />
    <!-- prevent dom xss -->
    <script type="text/javascript" src="/static/js/aq_common.js"></script>
    <script type="text/javascript">
        var userLang = "";
    </script>
    <script type="text/javascript" src="/static/js/base.js"></script>
    <script type="text/javascript">
        var addToBookshelfAjaxUrl = "/public/addToBookshelf.html";

        $(function() {
            //书架
            CS.bookshelf.init(addToBookshelfAjaxUrl);

            //页面特定链接/按钮点击分析
            $.getScript("http://pingjs.qq.com/tcss.ping.js");
        });
    </script>
    <script type="text/javascript">
        var webSite = "book";
        var getLoginStatusAjaxUrl = "http://book.qq.com/ywlogin/getStatus.html",
            sendYWLoginStatusAjaxUrl = "http://book.qq.com/ywlogin/logined.html",
            logoutYWSsoAjaxUrl = "http://book.qq.com/public/logout.html",
            checkTokenAjaxUrl = "/api/checkTokenYw.html";

        $(function() {
            //未登录时，更新登录状态
            CS.ssoLogin.init(getLoginStatusAjaxUrl, sendYWLoginStatusAjaxUrl, logoutYWSsoAjaxUrl, checkTokenAjaxUrl, webSite);
            CS.ssoLogin.getLoginStatus();
        });
    </script>
    <!--[if lt IE 7]><script src="/static/js/dd_belatedpng.js" mce_src="DD_belatedPNG.js"></script><script type="text/javascript">        DD_belatedPNG.fix('.prev, .next, .dotted, .fantasy, .edit_ctrl span, .edit_ctrl a, .line2, .box2_left em, .help, a.aleft, a.aright, .QQ, .bottom_tool a, .msgup, .msgdown, .juanbox li a, .p_searchbtn, #sword, .QQ_ICO, .QQ_icon, .cm_writer, #PLoginImg img');
    </script><![endif]-->
</head>

<body>
    <link rel="stylesheet" type="text/css" href="/static/css/index.css" />
    <!-- 顶部导航 -->
    <div id="topNav" class="topNav"></div>
    <!-- 顶部导航的模板 --><textarea id="topNavBarTpl" style="display:none;"><div class="pageCenter"><!--顶部左边区块--><div id="topLeft" class="topLeft cf"><ul><li class="navNormal authority"><span><a class="topLink" href="http://book.qq.com" target="_blank">QQ阅读</a><b></b></span><div class="topSubList client"><a class="cs_ico" href="http://chuangshi.qq.com" target="_blank">创世中文</a><a class="yq_ico" href="http://yunqi.qq.com" target="_blank">云起书院</a><a class="ds_ico" href="http://dushu.qq.com" target="_blank">QQ阅读</a><a class="bookIntnet" href="http://www.qq.com" target="_blank" onclick="pgvSendClick({hottag:'ISD.SHOW.INDEX.LINK03'});">腾讯网</a></div></li><li class="navNormal authority"><span><a class="topLink" href="https://yuedu.reader.qq.com/common/common/down/dist/index.html?actid=11822" target="_blank">客户端下载</a><b></b></span><!-- <div class="topSubList client"><a class="bookIntnet" href="https://yuedu.reader.qq.com/common/common/down/dist/index.html?actid=11822" target="_blank">客户端下载</a><a class="bookIos" href="http://book.qq.com/act/reader/index.html" target="_blank">苹果端</a></div> --></li></ul></div><!--登录前后容器--><div class="loginBox"><%if isLogin%><div class="login_after"><span class="navline">|</span><a class="exit" attr="click:ywlogout;" href="javascript:;">退出</a><a class="userName" href="http://account.book.qq.com/usercenter/index.html">欢迎您，<%=userInfo.Nickname ? userInfo.Nickname : ''%></a></div><%else%><div class="login_before"><span class="navline">|</span><!-- <a class="reg" target="_blank" href="http://zc.qq.com/chs/index.html?from=pt">注册</a> --><a class="login" attr="click:openLoginPopup;" href="javascript:;">登录/注册</a></div><%/if%></div><!--顶部右边区块--><div class="topRight"><%if isLogin%><a class="myreader" href="http://account.book.qq.com/userfavorite/index.html">我的书架<b></b></a><%else%><a class="myreader" href="javascript:;">最近阅读<b></b></a><%/if%><a class="user_center" href="http://account.book.qq.com">个人中心<b></b></a><a class="author_Zone" href="https://write.qq.com/?siteid=3">作家专区</a><span class="navline">|</span><a class="pay" href="http://account.book.qq.com/public/recharge.html" target="_blank">充值</a><!-- 我的书架的下拉列表 --><div class="bookrack"><%if isLogin%><p><span class="ccc">书架藏书：<%=userInfo.collectBookNum ? userInfo.collectBookNum : 0%>本</span></p><div class="nav_hover_list cf"><a href="http://account.book.qq.com/userfavorite/index.html?bookshelf_show=2">最近阅读</a><%if userInfo.bookshelfList && userInfo.bookshelfList.length%><%each userInfo.bookshelfList as bookshelf i%><a class="a_nobg" href="http://account.book.qq.com/userfavorite/index.html?Favoriteid=<%=bookshelf.groupId%>"><%=bookshelf.groupName%></a><%/each%><%/if%></div><%else%><!-- 最近阅读列表 --><div class="nav_hover_list cf"><%if userInfo.recentReadList && userInfo.recentReadList.length%><%each userInfo.recentReadList as book i%><a class="a_nobg" href="<%=book.bookUrl%>"><%=book.bookName%></a><%/each%><%/if%></div><%if !userInfo.recentReadList || userInfo.recentReadList.length === 0%><p>最近没有阅读书</p><%/if%><%/if%></div><!-- 个人中心的下拉列表 --><div class="user_menu"><div class="nav_hover_list cf"><a href="http://account.book.qq.com/userfavorite/index.html">我的书架</a><a href="http://account.book.qq.com/usercenter/index.html">账户设置</a><a class="a_nobg" href="http://account.book.qq.com/usermoney/index.html">账务中心 </a><a class="a_nobg" href="https://write.qq.com/?siteid=3">作家专区</a></div></div><!--新短消息提示--><%if isLogin%><div id="topnav_msg" style="display:none;"><div id="pointy_msg"></div><p><a class="red2" href="http://account.book.qq.com/usermessage/index.html">有新短消息</a></p><a id="close_msg" href="javascript:" title="关闭">关闭</a></div><%/if%></div></div></textarea>
    <script type="text/javascript">
        var getUserInfoAjaxUrl = "/public/showhead.html", //获取用户信息 getUserNewMsgUrl = "http://account.book.qq.com/usermessage/getMessageNew.html", webSite = "book"; var addToBookshelfAjaxUrl = "/public/addToBookshelf.html"; $(function(){ //书架 CS.bookshelf.init(addToBookshelfAjaxUrl);
            //顶部导航条 CS.topNav.init(getUserInfoAjaxUrl, getUserNewMsgUrl); });
    </script>
    <div class="pageCenter">
        <div class="bookheader cf">
            <div class="logo fl">
                <a href="http://book.qq.com"><img alt="腾讯文学，文字之美，感动心灵！" src="/static/picture/txwxlogo.jpg"></a>
            </div>
            <div class="titleSearch fl cf">
                <div class="searchClass" id="searchClass"><em type="all" id="currentSiteBtn">全部</em>
                    <div id="searchSiteList" class="searchClass_SubBox" style="display:none;"><a href="javascript:" type="all">全部</a><a href="javascript:" type="chuangshi">创世</a><a href="javascript:" type="yunqi">云起</a><a href="javascript:" type="dushu">图书</a></div>
                </div><span></span><input id="searchInputBySite" type="text" class="clearInput" style="color: rgb(107, 8, 8);" def="大国重工" value="大国重工" /><input id="searchBySiteBtn" type="button" class="searchBtn">
                <div class="hotWords">热词： <a href="http://yunqi.qq.com/bk/gdyq/26835006.html" target="_blank">只想继承你的家产</a><a href="http://yunqi.qq.com/bk/gdyq/26550647.html" target="_blank">画春光</a><a href="http://yunqi.qq.com/bk/gdyq/24230535.html" target="_blank">农家小福女</a>
                    <a href="http://chuangshi.qq.com/bk/ds/13665778.html" target="_blank">三界红包群</a><a href="http://chuangshi.qq.com/bk/xx/20468795.html" target="_blank">飞剑问道</a><a href="http://chuangshi.qq.com/bk/xh/614782.html" target="_blank">全职法师</a></div>
            </div>
            <div id="headQrCode" class="headQrCode fr">
                <p>下载QQ阅读</p><img width="80" height="80" src="/static/picture/code03.png">
                <a href="javascript:" class="close"></a>
            </div>
        </div>
        <script type="text/javascript" src="/static/js/subnav.js"></script>
        <script type="text/javascript">
            var searchResultUrl = "/search/index/type/p1/wd/p2.html";

            $(function() {
                CS.page.subNav.init(searchResultUrl);
            });
        </script>
        <!-- 主体 start-->
        <!--焦点图-->
        <div class="focusWrap">
            <div id="focusBox" class="slider">
                <div class="conbox">
                    <div>
                        <a target="_blank" href="http://yunqi.qq.com/bk/ns/19818084.html"><img width="1000" height="360" src="/static/picture/758e5004aa42f91d22f191122b6ae5ec.jpg"></a>
                    </div>
                    <div>
                        <a target="_blank" href="http://yunqi.qq.com/bk/ns/25857070.html"><img width="1000" height="360" src="/static/picture/b3a3520112e70678e4a638a0257c0ea4.jpg"></a>
                    </div>
                    <div>
                        <a target="_blank" href="https://mall.jd.com/index-1000220931.html"><img width="1000" height="360" src="/static/picture/862f865fa574e0bc492332ea145e869d.jpg"></a>
                    </div>
                    <div>
                        <a target="_blank" href="https://activity.qidian.com/noah/857010561/index"><img width="1000" height="360" src="/static/picture/2f1225fa88289f748ce248f01005483f.jpg"></a>
                    </div>
                    <div>
                        <a target="_blank" href="http://yunqi.qq.com/bk/ns/25697936.html"><img width="1000" height="360" src="/static/picture/ce88ef9edce3dd2a9a90effeaf4b3f75.jpg"></a>
                    </div>
                    <div>
                        <a target="_blank" href="http://yunqi.qq.com/bk/ns/26615980.html"><img width="1000" height="360" src="/static/picture/64238cc586f845f28438a0810cfefe12.jpg"></a>
                    </div>
                </div>
                <div class="switcher">
                    <a target="_blank" href="http://yunqi.qq.com/bk/ns/19818084.html" class="cur"></a>
                    <a target="_blank" href="http://yunqi.qq.com/bk/ns/25857070.html"></a>
                    <a target="_blank" href="https://mall.jd.com/index-1000220931.html"></a>
                    <a target="_blank" href="https://activity.qidian.com/noah/857010561/index"></a>
                    <a target="_blank" href="http://yunqi.qq.com/bk/ns/25697936.html"></a>
                    <a target="_blank" href="http://yunqi.qq.com/bk/ns/26615980.html"></a>
                </div>
            </div>
            <!--悬浮窗-->
            <div class="focusInfo">
                <div class="focusInfoBox">
                    <h3 class="newNotice">最新资讯</h3>
                    <ul>
                        <li>【<a href="http://chuangshi.qq.com/news/47338442.html" target="_blank">公告</a>】<a href="http://chuangshi.qq.com/news/47338442.html" target="_blank">有福利 |随手举报参与有奖</a></li>
                    </ul>
                    <h3 class="rSite">阅文集团旗下网站</h3>
                    <p class="readSite"><a class="site_cs" href="http://chuangshi.qq.com" target="_blank">创世中文</a><a class="site_yq" href="http://yunqi.qq.com" target="_blank">云起书院</a><a class="site_cx" href="http://dushu.qq.com" target="_blank">QQ阅读</a></p>
                </div>
            </div>
        </div>
        <!--频道推荐版块-->
        <div class="channelWrap  mb20 cf">
            <div class="leftBox fl">
                <div class="channelTitle cf">
                    <div class="recLink fr" style="max-width: 410px;max-height: 35px;overflow: hidden;"><a href="http://chuangshi.qq.com/bk/xx/20327039.html" target="_blank">三寸人间</a><a href="http://chuangshi.qq.com/bk/xh/14608738.html" target="_blank">圣墟</a><a href="http://chuangshi.qq.com/bk/xh/24130981.html" target="_blank">明日之劫</a>
                        <a class="nobr" href="http://chuangshi.qq.com/bk/xh/23861765.html" target="_blank">召唤梦魇</a>
                    </div>
                    <h3>原创男生<span><a href="http://chuangshi.qq.com" target="_blank">chuangshi.qq.com</a></span></h3>
                </div>
                <div class="recBookWrap cf">
                    <div class="bigBook fl">
                        <a href="http://chuangshi.qq.com/bk/qh/24180485.html" target="_blank"><img src="/static/picture/t5_24180485.jpg" width="204" height="255" target="_blank"></a>
                        <h4>《<a href="http://chuangshi.qq.com/bk/qh/24180485.html" target="_blank">天启预报</a>》
                            <a href="http://account.book.qq.com/bk/author/AD1QOgdqWWtcNQtqV2JTYwA3WzlQMwNg" target="_blank">风月</a></h4>
                        <p>“我想要挨一顿毒打……”</p>
                    </div>
                    <div class="otherBook fl">
                        <ul>
                            <li>
                                <a href="http://chuangshi.qq.com/bk/ds/23451787.html" target="_blank"><img src="/static/picture/t5_23451787.jpg" width="62" height="78"></a>
                                <div class="otherBookInfo fl">
                                    <h4>《<a href="http://chuangshi.qq.com/bk/ds/23451787.html" target="_blank">学霸的黑科技时代</a>》</h4>
                                    <p>作者：<a href="http://account.book.qq.com/bk/author/AD1QPwdqWWpcNgtqV2hTZQA8WzNQPwNg" target="_blank">咬文嚼纸</a></p>
                                    <p class="intro">从国产操作系统到反重力技术，学霸无所不能</p>
                                </div>
                            </li>
                            <li>
                                <a href="http://chuangshi.qq.com/bk/ls/21526746.html" target="_blank"><img src="/static/picture/t5_21526746.jpg" width="62" height="78"></a>
                                <div class="otherBookInfo fl">
                                    <h4>《<a href="http://chuangshi.qq.com/bk/ls/21526746.html" target="_blank">覆汉</a>》</h4>
                                    <p>作者：<a href="http://account.book.qq.com/bk/author/AD1QOgdqWWhcNgtqV2ZTZQA9WzVQNANh" target="_blank">榴弹怕水</a></p>
                                    <p class="intro">从苟全性命于乱世，到夺取汉室天下！</p>
                                </div>
                            </li>
                            <li>
                                <a href="http://chuangshi.qq.com/bk/xh/421661.html" target="_blank"><img src="/static/picture/t5_421661.jpg" width="62" height="78"></a>
                                <div class="otherBookInfo fl">
                                    <h4>《<a href="http://chuangshi.qq.com/bk/xh/421661.html" target="_blank">武道霸主</a>》</h4>
                                    <p>作者：<a href="http://account.book.qq.com/bk/author/ADdQOwduWW1cMgtiV2NTYwA7WzY%25253D" target="_blank">蜀狂人</a></p>
                                    <p class="intro">武道霸主</p>
                                </div>
                            </li>
                        </ul>
                        <dl>
                            <dd class="fl">
                                <p><a href="http://chuangshi.qq.com/bk/xh/xx20003gx3/" target="_blank">异世大陆</a><em>丨</em><a href="http://chuangshi.qq.com/bk/xh/614782.html" target="_blank" class="blue">全职法师</a></p>
                                <p>主修一系，怎如全系全通</p>
                            </dd>
                            <dd class="fl">
                                <p><a href="http://chuangshi.qq.com/bk/xx/xx20018gx3/" target="_blank">神话修真</a><em>丨</em><a href="http://chuangshi.qq.com/bk/xx/20566688.html" target="_blank" class="blue">苍穹之上</a></p>
                                <p>千年苦修，只为立于苍穹上！</p>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="rightBox fr">
                <div class="threeTabBox tabSwitch">
                    <p>创世排行榜</p>
                    <div class="choiceBox"><span class="tabCur">人气榜<cite></cite></span><span>月票榜</span></div>
                </div>
                <!--男频榜-->
                <div class="rankListWrap">
                    <!--创世人气-->
                    <ul class="rankList rankHover numList tabList">
                        <li class="firstList">
                            <div class="hoverHide"><em>4294</em><span class="num3">1</span><a target="_blank" href="http://chuangshi.qq.com/bk/wx/23240412.html">鸿渐于磐</a></div>
                            <div class="detailWrap"><span class="num3">1</span>
                                <a target="_blank" href="http://chuangshi.qq.com/bk/wx/23240412.html"><img src="/static/picture/s_23240412.jpg" width="55" height="74" alt="鸿渐于磐" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://chuangshi.qq.com/bk/wx/23240412.html">鸿渐于磐</a></h4>
                                    <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/AD1QOgdqWWhcNwtvV2FTZAA6WzNQPgNi">徐鸣辰</a></p>
                                    <p>分类：<a target="_blank" href="http://chuangshi.qq.com/bk/wx/xx20011/">传统武侠</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>2290</em><span class="num3">2</span><a target="_blank" href="http://chuangshi.qq.com/bk/ds/14139469.html">美女总裁的全能高手</a></div>
                            <div class="detailWrap"><span class="num3">2</span>
                                <a target="_blank" href="http://chuangshi.qq.com/bk/ds/14139469.html"><img src="/static/picture/s_14139469.jpg" width="55" height="74" alt="美女总裁的全能高手" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://chuangshi.qq.com/bk/ds/14139469.html">美女总裁的全能高手</a></h4>
                                    <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADdQPQdiWW5cMgtqV2hTZwA2WzA%25253D">五杯咖啡</a></p>
                                    <p>分类：<a target="_blank" href="http://chuangshi.qq.com/bk/ds/xx20026/">异术超能</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>1960</em><span class="num3">3</span><a target="_blank" href="http://chuangshi.qq.com/bk/ls/20307022.html">唐残</a></div>
                            <div class="detailWrap"><span class="num3">3</span>
                                <a target="_blank" href="http://chuangshi.qq.com/bk/ls/20307022.html"><img src="/static/picture/s_20307022.jpg" width="55" height="74" alt="唐残" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://chuangshi.qq.com/bk/ls/20307022.html">唐残</a></h4>
                                    <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADZQMwdsWW5cNQtqV2lTYgA2">猫疲</a></p>
                                    <p>分类：<a target="_blank" href="http://chuangshi.qq.com/bk/ls/xx20029/">架空历史</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>1698</em><span>4</span><a target="_blank" href="http://chuangshi.qq.com/bk/xx/26281320.html">鹿妖逐鹿</a></div>
                            <div class="detailWrap"><span>4</span>
                                <a target="_blank" href="http://chuangshi.qq.com/bk/xx/26281320.html"><img src="/static/picture/s_26281320.jpg" width="55" height="74" alt="鹿妖逐鹿" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://chuangshi.qq.com/bk/xx/26281320.html">鹿妖逐鹿</a></h4>
                                    <p>作者：苍山大虫</p>
                                    <p>分类：<a target="_blank" href="http://chuangshi.qq.com/bk/xx/xx20101/">古典仙侠</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>1629</em><span>5</span><a target="_blank" href="http://chuangshi.qq.com/bk/ls/25476104.html">马谡别传</a></div>
                            <div class="detailWrap"><span>5</span>
                                <a target="_blank" href="http://chuangshi.qq.com/bk/ls/25476104.html"><img src="/static/picture/s_25476104.jpg" width="55" height="74" alt="马谡别传" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://chuangshi.qq.com/bk/ls/25476104.html">马谡别传</a></h4>
                                    <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/AD1QPwduWWpcNgtvV2hTbAA%25252FWzZQMQNk">高瞻非</a></p>
                                    <p>分类：<a target="_blank" href="http://chuangshi.qq.com/bk/ls/xx20029/">架空历史</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>1569</em><span>6</span><a target="_blank" href="http://chuangshi.qq.com/bk/xh/648963.html">万古神帝</a></div>
                            <div class="detailWrap"><span>6</span>
                                <a target="_blank" href="http://chuangshi.qq.com/bk/xh/648963.html"><img src="/static/picture/s_648963.jpg" width="55" height="74" alt="万古神帝" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://chuangshi.qq.com/bk/xh/648963.html">万古神帝</a></h4>
                                    <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADBQOAdvWW1cMAtjV2ZTbAA%25252B">飞天鱼</a></p>
                                    <p>分类：<a target="_blank" href="http://chuangshi.qq.com/bk/xh/xx20002/">东方玄幻</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>1532</em><span>7</span><a target="_blank" href="http://chuangshi.qq.com/bk/xh/21058239.html">伏天氏</a></div>
                            <div class="detailWrap"><span>7</span>
                                <a target="_blank" href="http://chuangshi.qq.com/bk/xh/21058239.html"><img src="/static/picture/s_21058239.jpg" width="55" height="74" alt="伏天氏" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://chuangshi.qq.com/bk/xh/21058239.html">伏天氏</a></h4>
                                    <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADZQOwdvWW9cNgtiV2BTYQA7">净无痕</a></p>
                                    <p>分类：<a target="_blank" href="http://chuangshi.qq.com/bk/xh/xx20002/">东方玄幻</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>1430</em><span>8</span><a target="_blank" href="http://chuangshi.qq.com/bk/xh/20733915.html">九龙圣祖</a></div>
                            <div class="detailWrap"><span>8</span>
                                <a target="_blank" href="http://chuangshi.qq.com/bk/xh/20733915.html"><img src="/static/picture/s_20733915.jpg" width="55" height="74" alt="九龙圣祖" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://chuangshi.qq.com/bk/xh/20733915.html">九龙圣祖</a></h4>
                                    <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADJQPQdvWW5cNAtjV2JTbA%25253D%25253D">庞飞烟</a></p>
                                    <p>分类：<a target="_blank" href="http://chuangshi.qq.com/bk/xh/xx20002/">东方玄幻</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>1403</em><span>9</span><a target="_blank" href="http://chuangshi.qq.com/bk/xh/29276081.html">开局无数神剑</a></div>
                            <div class="detailWrap"><span>9</span>
                                <a target="_blank" href="http://chuangshi.qq.com/bk/xh/29276081.html"><img src="/static/picture/s_29276081.jpg" width="55" height="74" alt="开局无数神剑" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://chuangshi.qq.com/bk/xh/29276081.html">开局无数神剑</a></h4>
                                    <p>作者：帝心似渊</p>
                                    <p>分类：<a target="_blank" href="http://chuangshi.qq.com/bk/xh/xx20003/">异世大陆</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>1323</em><span>10</span><a target="_blank" href="http://chuangshi.qq.com/bk/js/26617422.html">喋血年华</a></div>
                            <div class="detailWrap"><span>10</span>
                                <a target="_blank" href="http://chuangshi.qq.com/bk/js/26617422.html"><img src="/static/picture/s_26617422.jpg" width="55" height="74" alt="喋血年华" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://chuangshi.qq.com/bk/js/26617422.html">喋血年华</a></h4>
                                    <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADRQMgdpWWNcNwtvV2ZTZAA5WzY%25253D">虞猛</a></p>
                                    <p>分类：<a target="_blank" href="http://chuangshi.qq.com/bk/js/xx20033/">战争幻想</a></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!--新书月票-->
                    <ul class="rankList rankHover tabList numList hidden">
                        <li class="firstList">
                            <div class="hoverHide"><em>14117</em><span class="num3">1</span><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEPF1gVjUAPVRsATUBZg">万族之劫</a></div>
                            <div class="detailWrap"><span class="num3">1</span>
                                <a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEPF1gVjUAPVRsATUBZg"><img src="/static/picture/s_28027842.jpg" width="55" height="74" alt="万族之劫" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEPF1gVjUAPVRsATUBZg">万族之劫</a></h4>
                                    <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/AD1QOgdqWWtcMwtiV2dTbAA%25252BWzFQMwNn">老鹰吃小鸡</a></p>
                                    <p>分类：<a target="_blank" href="http://chuangshi.qq.com/bk/ds/xx20027/">恩怨情仇</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>12211</em><span class="num3">2</span><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEM11lVj4APFRjATcBbA">数风流人物</a></div>
                            <div class="detailWrap"><span class="num3">2</span>
                                <a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEM11lVj4APFRjATcBbA"><img src="/static/picture/s_27596768.jpg" width="55" height="74" alt="数风流人物" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEM11lVj4APFRjATcBbA">数风流人物</a></h4>
                                    <p>作者：瑞根</p>
                                    <p>分类：<a target="_blank" href="http://chuangshi.qq.com/bk/ls/xx20029/">架空历史</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>10136</em><span class="num3">3</span><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEM11mVjUAO1RtATkBYw">从火影开始掌控时间</a></div>
                            <div class="detailWrap"><span class="num3">3</span>
                                <a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEM11mVjUAO1RtATkBYw"><img src="/static/picture/s_27621987.jpg" width="55" height="74" alt="从火影开始掌控时间" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEM11mVjUAO1RtATkBYw">从火影开始掌控时间</a></h4>
                                    <p>作者：夜南听风</p>
                                    <p>分类：<a target="_blank" href="http://chuangshi.qq.com/bk/2cy/xx20061/">衍生同人</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>4856</em><span>4</span><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEM11jVjAAO1RlATkBYA">盖世双谐</a></div>
                            <div class="detailWrap"><span>4</span>
                                <a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEM11jVjAAO1RlATkBYA"><img src="/static/picture/s_27371184.jpg" width="55" height="74" alt="盖世双谐" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEM11jVjAAO1RlATkBYA">盖世双谐</a></h4>
                                    <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/AD1QOgdqWWpcNwtjV2VTZwA6WzlQNwNk">三天两觉</a></p>
                                    <p>分类：<a target="_blank" href="http://chuangshi.qq.com/bk/wx/xx20012/">武侠幻想</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>3184</em><span>5</span><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMl1jVjUAOlRsATYBbQ">重生创业时代</a></div>
                            <div class="detailWrap"><span>5</span>
                                <a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMl1jVjUAOlRsATYBbQ"><img src="/static/picture/s_26320879.jpg" width="55" height="74" alt="重生创业时代" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMl1jVjUAOlRsATYBbQ">重生创业时代</a></h4>
                                    <p>作者：公子不歌</p>
                                    <p>分类：<a target="_blank" href="http://chuangshi.qq.com/bk/ds/xx20020/">都市生活</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>2622</em><span>6</span><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEM11lVjcAOVRiATgBbA">我在足坛疯狂刷钱</a></div>
                            <div class="detailWrap"><span>6</span>
                                <a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEM11lVjcAOVRiATgBbA"><img src="/static/picture/s_27503698.jpg" width="55" height="74" alt="我在足坛疯狂刷钱" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEM11lVjcAOVRiATgBbA">我在足坛疯狂刷钱</a></h4>
                                    <p>作者：王大布</p>
                                    <p>分类：<a target="_blank" href="http://chuangshi.qq.com/bk/ty/xx20057/">足球运动</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>2381</em><span>7</span><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEM11lVj4APFRlATMBbQ">我真不是仙二代</a></div>
                            <div class="detailWrap"><span>7</span>
                                <a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEM11lVj4APFRlATMBbQ"><img src="/static/picture/s_27596129.jpg" width="55" height="74" alt="我真不是仙二代" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEM11lVj4APFRlATMBbQ">我真不是仙二代</a></h4>
                                    <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/AD1QPwduWWpcNgtqV2hTYAA5WzdQNgNn">明月地上霜</a></p>
                                    <p>分类：<a target="_blank" href="http://chuangshi.qq.com/bk/xx/xx20015/">修真文明</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>2296</em><span>8</span><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEM11jVjEAO1RtATYBZw">庶族无名</a></div>
                            <div class="detailWrap"><span>8</span>
                                <a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEM11jVjEAO1RtATYBZw"><img src="/static/picture/s_27361973.jpg" width="55" height="74" alt="庶族无名" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEM11jVjEAO1RtATYBZw">庶族无名</a></h4>
                                    <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADRQOAdoWWpcNAtuV2NTZAA2">王不过霸</a></p>
                                    <p>分类：<a target="_blank" href="http://chuangshi.qq.com/bk/ls/xx20084/">秦汉三国</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>2265</em><span>9</span><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEM11lVjYAPlRlATkBYA">我是神话创世主</a></div>
                            <div class="detailWrap"><span>9</span>
                                <a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEM11lVjYAPlRlATkBYA"><img src="/static/picture/s_27514184.jpg" width="55" height="74" alt="我是神话创世主" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEM11lVjYAPlRlATkBYA">我是神话创世主</a></h4>
                                    <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADBQMwdvWWpcMgtj">薪意</a></p>
                                    <p>分类：<a target="_blank" href="http://chuangshi.qq.com/bk/xh/xx20002/">东方玄幻</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>2092</em><span>10</span><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEPF1gVjQAPFRjATQBZA">我有一个熟练度面板</a></div>
                            <div class="detailWrap"><span>10</span>
                                <a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEPF1gVjQAPFRjATQBZA"><img src="/static/picture/s_28036750.jpg" width="55" height="74" alt="我有一个熟练度面板" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEPF1gVjQAPFRjATQBZA">我有一个熟练度面板</a></h4>
                                    <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADdQMgdpWW1cMgtrV2RTYgA6WzU%25253D">行为金融</a></p>
                                    <p>分类：<a target="_blank" href="http://chuangshi.qq.com/bk/xh/xx20002/">东方玄幻</a></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--原创女频-->
        <div class="channelWrap mb20 cf">
            <div class="leftBox fl">
                <div class="channelTitle cf">
                    <div class="recLink fr" style="max-width: 410px;max-height: 35px;overflow: hidden;"><a href="http://yunqi.qq.com/bk/gdyq/27182063.html" target="_blank">农门福宝小媳妇</a><a href="http://yunqi.qq.com/bk/xdyq/28073969.html" target="_blank">被最想拥抱的男人威胁了</a><a href="http://yunqi.qq.com/bk/khkj/27325720.html" target="_blank">天道美人黑化警告</a>
                        <a class="nobr" href="http://yunqi.qq.com/bk/xdyq/27404429.html" target="_blank">偏执秦爷被我的美貌征服了</a>
                    </div>
                    <h3>原创女生<span><a href="http://yunqi.qq.com" target="_blank">yunqi.qq.com</a></span></h3>
                </div>
                <div class="recBookWrap cf">
                    <div class="bigBook fl">
                        <a href="http://yunqi.qq.com/bk/gdyq/27182194.html" target="_blank"><img src="/static/picture/t5_27182194.jpg" width="204" height="255" target="_blank"></a>
                        <h4>《<a href="http://yunqi.qq.com/bk/gdyq/27182194.html" target="_blank">养崽崽后本宫躺赢了</a>》
                            <a href="http://account.book.qq.com/bk/author/ADRQPAdoWWJcPwtjV2RTYgA5WzE%25253D" target="_blank">梁妃儿</a></h4>
                        <p>穿书后我成了人生赢家，三个反派大佬都是我的崽</p>
                    </div>
                    <div class="otherBook fl">
                        <ul>
                            <li>
                                <a href="http://yunqi.qq.com/bk/xdyq/26878703.html" target="_blank"><img src="/static/picture/t5_26878703.jpg" width="62" height="78"></a>
                                <div class="otherBookInfo fl">
                                    <h4>《<a href="http://yunqi.qq.com/bk/xdyq/26878703.html" target="_blank">觉醒后我征服了全世界</a>》</h4>
                                    <p>作者：<a href="http://account.book.qq.com/bk/author/ADZQOAdoWWtcMwtqV2dTYgA%25252FWzY%25253D" target="_blank">孤木双</a></p>
                                    <p class="intro">宋先生，你印堂发黑命中缺我</p>
                                </div>
                            </li>
                            <li>
                                <a href="http://yunqi.qq.com/bk/xdyq/27416876.html" target="_blank"><img src="/static/picture/t5_27416876.jpg" width="62" height="78"></a>
                                <div class="otherBookInfo fl">
                                    <h4>《<a href="http://yunqi.qq.com/bk/xdyq/27416876.html" target="_blank">夫人她成了大佬们的团宠</a>》</h4>
                                    <p>作者：<a href="http://account.book.qq.com/bk/author/ADdQOQdrWW1cMQtqV2NTbAA8Wzg%25253D" target="_blank">神奇小小</a></p>
                                    <p class="intro">多了五个大佬儿子怎么办</p>
                                </div>
                            </li>
                            <li>
                                <a href="http://yunqi.qq.com/bk/xdyq/27512049.html" target="_blank"><img src="/static/picture/t5_27512049.jpg" width="62" height="78"></a>
                                <div class="otherBookInfo fl">
                                    <h4>《<a href="http://yunqi.qq.com/bk/xdyq/27512049.html" target="_blank">豪门权少又黑化了</a>》</h4>
                                    <p>作者：<a href="http://account.book.qq.com/bk/author/ADZQOAdrWWtcMQtoV2FTZgA%25252FWzg%25253D" target="_blank">凤元糖果</a></p>
                                    <p class="intro">权少，被你宠上心尖的白莲花又黑化了</p>
                                </div>
                            </li>
                        </ul>
                        <dl>
                            <dd class="fl">
                                <p><a href="http://yunqi.qq.com/bk/xdyq/xx30022so2/" target="_blank">婚恋情缘</a><em>丨</em><a href="http://yunqi.qq.com/bk/xdyq/26926196.html" target="_blank" class="blue">和首富老公离婚后我爆红了</a></p>
                                <p>霸总前夫又在扒我马甲</p>
                            </dd>
                            <dd class="fl">
                                <p><a href="http://yunqi.qq.com/bk/khkj/xx30044so2/" target="_blank">时空穿梭</a><em>丨</em><a href="http://yunqi.qq.com/bk/khkj/27398848.html" target="_blank" class="blue">快穿宿主她又软又甜</a></p>
                                <p>宿主她想享尽世间清福</p>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="rightBox fr">
                <div class="threeTabBox tabSwitch">
                    <p>云起排行榜</p>
                    <div class="choiceBox"><span class="tabCur">人气榜<cite></cite></span><span>月票榜</span></div>
                </div>
                <!--女频榜-->
                <div class="rankListWrap">
                    <!--云起人气-->
                    <ul class="rankList rankHover numList tabList">
                        <li class="firstList">
                            <div class="hoverHide"><em>7822109</em><span class="num3">1</span><a target="_blank" href="http://yunqi.qq.com/bk/gdyq/185422.html">邪王追妻</a></div>
                            <div class="detailWrap"><span class="num3">1</span>
                                <a target="_blank" href="http://yunqi.qq.com/bk/gdyq/185422.html"><img src="/static/picture/s_185422.jpg" width="55" height="74" alt="邪王追妻" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://yunqi.qq.com/bk/gdyq/185422.html">邪王追妻</a></h4>
                                    <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADRQOgdsWWhcNQtoV2lTYgA6WzQ%25253D">苏小暖</a></p>
                                    <p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/gdyq/xx30017/">穿越奇情</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>2792132</em><span class="num3">2</span><a target="_blank" href="http://yunqi.qq.com/bk/xhyq/607991.html">神医弃女</a></div>
                            <div class="detailWrap"><span class="num3">2</span>
                                <a target="_blank" href="http://yunqi.qq.com/bk/xhyq/607991.html"><img src="/static/picture/s_607991.jpg" width="55" height="74" alt="神医弃女" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://yunqi.qq.com/bk/xhyq/607991.html">神医弃女</a></h4>
                                    <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADRQPAdsWWhcNwtqV2ZTZwA2Wzk%25253D">MS芙子</a></p>
                                    <p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/xhyq/xx30002/">东方玄幻</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>1046493</em><span class="num3">3</span><a target="_blank" href="http://yunqi.qq.com/bk/khkj/22727621.html">这个大佬画风不对</a></div>
                            <div class="detailWrap"><span class="num3">3</span>
                                <a target="_blank" href="http://yunqi.qq.com/bk/khkj/22727621.html"><img src="/static/picture/s_22727621.jpg" width="55" height="74" alt="这个大佬画风不对" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://yunqi.qq.com/bk/khkj/22727621.html">这个大佬画风不对</a></h4>
                                    <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADZQPwdtWW1cMgtsV2FTZgA6">墨泠</a></p>
                                    <p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/khkj/xx30044/">时空穿梭</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>985305</em><span>4</span><a target="_blank" href="http://yunqi.qq.com/bk/gdyq/19818084.html">神医凰后</a></div>
                            <div class="detailWrap"><span>4</span>
                                <a target="_blank" href="http://yunqi.qq.com/bk/gdyq/19818084.html"><img src="/static/picture/s_19818084.jpg" width="55" height="74" alt="神医凰后" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://yunqi.qq.com/bk/gdyq/19818084.html">神医凰后</a></h4>
                                    <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADRQOgdsWWhcNQtoV2lTYgA6WzQ%25253D">苏小暖</a></p>
                                    <p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/gdyq/xx30017/">穿越奇情</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>700965</em><span>5</span><a target="_blank" href="http://yunqi.qq.com/bk/xdyq/21212492.html">电竞大神暗恋我</a></div>
                            <div class="detailWrap"><span>5</span>
                                <a target="_blank" href="http://yunqi.qq.com/bk/xdyq/21212492.html"><img src="/static/picture/s_21212492.jpg" width="55" height="74" alt="电竞大神暗恋我" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://yunqi.qq.com/bk/xdyq/21212492.html">电竞大神暗恋我</a></h4>
                                    <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADRQOgdsWW9cPgtuV2dTYAA5WzA%25253D">战七少</a></p>
                                    <p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/xdyq/xx30022/">婚恋情缘</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>648021</em><span>6</span><a target="_blank" href="http://yunqi.qq.com/bk/xhyq/13714263.html">云家小九超皮哒</a></div>
                            <div class="detailWrap"><span>6</span>
                                <a target="_blank" href="http://yunqi.qq.com/bk/xhyq/13714263.html"><img src="/static/picture/s_13714263.jpg" width="55" height="74" alt="云家小九超皮哒" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://yunqi.qq.com/bk/xhyq/13714263.html">云家小九超皮哒</a></h4>
                                    <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADdQPwdrWW5cNgtiV2JTbQ%25253D%25253D">水清竹</a></p>
                                    <p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/xhyq/xx30002/">东方玄幻</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>579009</em><span>7</span><a target="_blank" href="http://yunqi.qq.com/bk/gdyq/749376.html">锦绣农女种田忙</a></div>
                            <div class="detailWrap"><span>7</span>
                                <a target="_blank" href="http://yunqi.qq.com/bk/gdyq/749376.html"><img src="/static/picture/s_749376.jpg" width="55" height="74" alt="锦绣农女种田忙" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://yunqi.qq.com/bk/gdyq/749376.html">锦绣农女种田忙</a></h4>
                                    <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADdQOwdqWWJcMwtsV2RTZAA9WzM%25253D">巅峰小雨</a></p>
                                    <p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/gdyq/xx30019/">经商种田</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>577187</em><span>8</span><a target="_blank" href="http://yunqi.qq.com/bk/gdyq/704039.html">医妃惊世</a></div>
                            <div class="detailWrap"><span>8</span>
                                <a target="_blank" href="http://yunqi.qq.com/bk/gdyq/704039.html"><img src="/static/picture/s_704039.jpg" width="55" height="74" alt="医妃惊世" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://yunqi.qq.com/bk/gdyq/704039.html">医妃惊世</a></h4>
                                    <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADdQMwdvWW5cMQttV2ZTbQA3WzQ%25253D">顾染锦</a></p>
                                    <p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/gdyq/xx30017/">穿越奇情</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>530937</em><span>9</span><a target="_blank" href="http://yunqi.qq.com/bk/xdyq/753423.html">娱乐圈之女王在上</a></div>
                            <div class="detailWrap"><span>9</span>
                                <a target="_blank" href="http://yunqi.qq.com/bk/xdyq/753423.html"><img src="/static/picture/s_753423.jpg" width="55" height="74" alt="娱乐圈之女王在上" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://yunqi.qq.com/bk/xdyq/753423.html">娱乐圈之女王在上</a></h4>
                                    <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/AD1QPQdtWW9cNwtvV2FTYgA4">迷路的龙</a></p>
                                    <p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/xdyq/xx30023/">娱乐明星</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>440416</em><span>10</span><a target="_blank" href="http://yunqi.qq.com/bk/xhyq/19454424.html">至尊瞳术师</a></div>
                            <div class="detailWrap"><span>10</span>
                                <a target="_blank" href="http://yunqi.qq.com/bk/xhyq/19454424.html"><img src="/static/picture/s_19454424.jpg" width="55" height="74" alt="至尊瞳术师" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://yunqi.qq.com/bk/xhyq/19454424.html">至尊瞳术师</a></h4>
                                    <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADBQOwdtWW1cMgtsV2VTYgA5">陌烟</a></p>
                                    <p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/xhyq/xx30002/">东方玄幻</a></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!--月票pk榜-->
                    <ul class="rankList rankHover tabList numList hidden">
                        <li class="firstList">
                            <div class="hoverHide"><em>21307</em><span class="num3">1</span><a target="_blank" href="http://yunqi.qq.com/bk/xdyq/25697936.html">我的房分你一半</a></div>
                            <div class="detailWrap"><span class="num3">1</span>
                                <a target="_blank" href="http://yunqi.qq.com/bk/xdyq/25697936.html"><img src="/static/picture/s_25697936.jpg" width="55" height="74" alt="我的房分你一半" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://yunqi.qq.com/bk/xdyq/25697936.html">我的房分你一半</a></h4>
                                    <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADZQOgdvWWxcMAtpV2hTZgA3">叶非夜</a></p>
                                    <p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/xdyq/xx30028/">豪门世家</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>12599</em><span class="num3">2</span><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMF1gVjYAPVRtATMBYA">夫人你马甲又掉了</a></div>
                            <div class="detailWrap"><span class="num3">2</span>
                                <a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMF1gVjYAPVRtATMBYA"><img src="/static/picture/s_24017924.jpg" width="55" height="74" alt="夫人你马甲又掉了" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMF1gVjYAPVRtATMBYA">夫人你马甲又掉了</a></h4>
                                    <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/AD1QPwduWWpcNwtqV2ZTZQA8WzRQPwNm">一路烦花</a></p>
                                    <p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/xdyq/xx30028/">豪门世家</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>8424</em><span class="num3">3</span><a target="_blank" href="http://yunqi.qq.com/bk/khkj/22727621.html">这个大佬画风不对</a></div>
                            <div class="detailWrap"><span class="num3">3</span>
                                <a target="_blank" href="http://yunqi.qq.com/bk/khkj/22727621.html"><img src="/static/picture/s_22727621.jpg" width="55" height="74" alt="这个大佬画风不对" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://yunqi.qq.com/bk/khkj/22727621.html">这个大佬画风不对</a></h4>
                                    <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADZQPwdtWW1cMgtsV2FTZgA6">墨泠</a></p>
                                    <p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/khkj/xx30044/">时空穿梭</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>5016</em><span>4</span><a target="_blank" href="http://yunqi.qq.com/bk/gdyq/19818084.html">神医凰后</a></div>
                            <div class="detailWrap"><span>4</span>
                                <a target="_blank" href="http://yunqi.qq.com/bk/gdyq/19818084.html"><img src="/static/picture/s_19818084.jpg" width="55" height="74" alt="神医凰后" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://yunqi.qq.com/bk/gdyq/19818084.html">神医凰后</a></h4>
                                    <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADRQOgdsWWhcNQtoV2lTYgA6WzQ%25253D">苏小暖</a></p>
                                    <p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/gdyq/xx30017/">穿越奇情</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>4865</em><span>5</span><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEM11gVjUAPVRiATIBYQ">人间富贵花的日常</a></div>
                            <div class="detailWrap"><span>5</span>
                                <a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEM11gVjUAPVRiATIBYQ"><img src="/static/picture/s_27027635.jpg" width="55" height="74" alt="人间富贵花的日常" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEM11gVjUAPVRiATIBYQ">人间富贵花的日常</a></h4>
                                    <p>作者：西母娘娘</p>
                                    <p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/xdyq/xx30028/">豪门世家</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>4574</em><span>6</span><a target="_blank" href="http://yunqi.qq.com/bk/gdyq/27092009.html">重生后我成了权臣的掌中娇</a></div>
                            <div class="detailWrap"><span>6</span>
                                <a target="_blank" href="http://yunqi.qq.com/bk/gdyq/27092009.html"><img src="/static/picture/s_27092009.jpg" width="55" height="74" alt="重生后我成了权臣的掌中娇" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://yunqi.qq.com/bk/gdyq/27092009.html">重生后我成了权臣的掌中娇</a></h4>
                                    <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADRQPgdpWW9cMQtjV2NTbQA%25252FWzM%25253D">风吹小白菜</a></p>
                                    <p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/gdyq/xx30018/">宫闱宅斗</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>4562</em><span>7</span><a target="_blank" href="http://yunqi.qq.com/bk/gdyq/24230535.html">农家小福女</a></div>
                            <div class="detailWrap"><span>7</span>
                                <a target="_blank" href="http://yunqi.qq.com/bk/gdyq/24230535.html"><img src="/static/picture/s_24230535.jpg" width="55" height="74" alt="农家小福女" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://yunqi.qq.com/bk/gdyq/24230535.html">农家小福女</a></h4>
                                    <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADRQPQdjWW9cNQttV2RTbAA9WzI%25253D">郁雨竹</a></p>
                                    <p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/gdyq/xx30019/">经商种田</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>4541</em><span>8</span><a target="_blank" href="http://yunqi.qq.com/bk/xdyq/26878703.html">觉醒后我征服了全世界</a></div>
                            <div class="detailWrap"><span>8</span>
                                <a target="_blank" href="http://yunqi.qq.com/bk/xdyq/26878703.html"><img src="/static/picture/s_26878703.jpg" width="55" height="74" alt="觉醒后我征服了全世界" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://yunqi.qq.com/bk/xdyq/26878703.html">觉醒后我征服了全世界</a></h4>
                                    <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADZQOAdoWWtcMwtqV2dTYgA%25252FWzY%25253D">孤木双</a></p>
                                    <p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/xdyq/xx30027/">都市异能</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>4333</em><span>9</span><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMV1hVj8AOVRtATUBYg">我全家都是穿来的</a></div>
                            <div class="detailWrap"><span>9</span>
                                <a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMV1hVj8AOVRtATUBYg"><img src="/static/picture/s_25183946.jpg" width="55" height="74" alt="我全家都是穿来的" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMV1hVj8AOVRtATUBYg">我全家都是穿来的</a></h4>
                                    <p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/AD1QOgdqWWhcNgtrV2RTYgA6WzlQPgNg">YTT桃桃</a></p>
                                    <p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/gdyq/xx30019/">经商种田</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>3785</em><span>10</span><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMF1mVjYAOVRiATgBZQ">山河盛宴</a></div>
                            <div class="detailWrap"><span>10</span>
                                <a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMF1mVjYAOVRiATgBZQ"><img src="/static/picture/s_24613691.jpg" width="55" height="74" alt="山河盛宴" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMF1mVjYAOVRiATgBZQ">山河盛宴</a></h4>
                                    <p>作者：天下归元</p>
                                    <p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/gdyq/xx30017/">穿越奇情</a></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--畅销图书-->
        <div class="channelWrap mb20 cf">
            <div class="leftBox fl">
                <div class="channelTitle cf">
                    <div class="recLink fr" style="max-width: 410px;max-height: 35px;overflow: hidden;"><a href="http://dushu.qq.com/Intro.html?bid=733521" target="_blank">与神对话.1</a><a href="http://dushu.qq.com/Intro.html?bid=673180" target="_blank">内在的从容</a><a href="http://dushu.qq.com/Intro.html?bid=734236" target="_blank">法医异闻录</a>
                        <a class="nobr" href="http://dushu.qq.com/Intro.html?bid=735232" target="_blank">疲惫生活中的英雄梦想</a>
                    </div>
                    <h3>QQ阅读<span><a href="http://dushu.qq.com" target="_blank">dushu.qq.com</a></span></h3>
                </div>
                <div class="recBookWrap cf">
                    <div class="bigBook fl">
                        <a href="http://dushu.qq.com/Intro.html?bid=147318" target="_blank"><img src="/static/picture/t5_147318.jpg" width="204" height="255" target="_blank"></a>
                        <h4>《<a href="http://dushu.qq.com/Intro.html?bid=147318" target="_blank">橙红年代（陈伟霆、马思纯主演）</a>》
                            <a href="http://account.book.qq.com/bk/author/ADU%25253D" target="_blank">骁骑校</a></h4>
                        <p>橙红年代</p>
                    </div>
                    <div class="otherBook fl">
                        <ul>
                            <li>
                                <a href="http://dushu.qq.com/Intro.html?bid=752521" target="_blank"><img src="/static/picture/t5_752521.jpg" width="62" height="78"></a>
                                <div class="otherBookInfo fl">
                                    <h4>《<a href="http://dushu.qq.com/Intro.html?bid=752521" target="_blank">麻衣神算子</a>》</h4>
                                    <p>作者：<a href="http://account.book.qq.com/bk/author/ADU%25253D" target="_blank">骑马钓鱼</a></p>
                                    <p class="intro">麻衣神算子</p>
                                </div>
                            </li>
                            <li>
                                <a href="http://dushu.qq.com/Intro.html?bid=593655" target="_blank"><img src="/static/picture/t5_593655.jpg" width="62" height="78"></a>
                                <div class="otherBookInfo fl">
                                    <h4>《<a href="http://dushu.qq.com/Intro.html?bid=593655" target="_blank">爸爸去哪儿：父亲的力量</a>》</h4>
                                    <p>作者：<a href="http://account.book.qq.com/bk/author/ADU%25253D" target="_blank">郭涛</a></p>
                                    <p class="intro">父亲的力量</p>
                                </div>
                            </li>
                            <li>
                                <a href="http://dushu.qq.com/Intro.html?bid=567325" target="_blank"><img src="/static/picture/t5_567325.jpg" width="62" height="78"></a>
                                <div class="otherBookInfo fl">
                                    <h4>《<a href="http://dushu.qq.com/Intro.html?bid=567325" target="_blank">时光会记得</a>》</h4>
                                    <p>作者：<a href="http://account.book.qq.com/bk/author/ADU%25253D" target="_blank">独木舟</a></p>
                                    <p class="intro">时光会记得</p>
                                </div>
                            </li>
                        </ul>
                        <dl>
                            <dd class="fl">
                                <p><a href="http://dushu.qq.com/store/index/cat2/14000/sortkey/2/ps/30/p/1.html" target="_blank">心理学</a><em>丨</em><a href="http://dushu.qq.com/Intro.html?bid=725430" target="_blank" class="blue">怪咖心理学</a></p>
                                <p>让你迅速找到身边的怪咖</p>
                            </dd>
                            <dd class="fl">
                                <p><a href="http://dushu.qq.com/store/index/cat2/14100/sortkey/2/ps/30/p/1.html" target="_blank">文学</a><em>丨</em><a href="http://dushu.qq.com/Intro.html?bid=725411" target="_blank" class="blue">牛棚杂忆（图文典藏版）</a></p>
                                <p>季羡林先生以幽默甚至是调侃</p>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="rightBox fr">
                <div class="threeTabBox tabSwitch">
                    <p>畅销书周榜</p>
                    <div class="choiceBox"><span class="tabCur">畅销人气<cite></cite></span><span>免费人气</span>
                        <!-- <span>VIP人气</span> --></div>
                </div>
                <!--畅销人气榜-->
                <div class="rankListWrap">
                    <!--畅销人气-->
                    <ul class="rankList rankHover tabList numList">
                        <li class="firstList">
                            <div class="hoverHide"><em>2158</em><span class="num3">1</span><a target="_blank" href="http://dushu.qq.com/intro.html?bid=27019403">麻衣相师</a></div>
                            <div class="detailWrap"><span class="num3">1</span>
                                <a target="_blank" href="http://dushu.qq.com/intro.html?bid=27019403"><img src="/static/picture/s_27019403.jpg" width="55" height="74" alt="麻衣相师" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://dushu.qq.com/intro.html?bid=27019403">麻衣相师</a></h4>
                                    <p>作者：桃花渡</p>
                                    <p>分类：<a target="_blank" href="http://dushu.qq.com/store.html?cat2=13100&cat3=13107">侦探/悬疑/推理</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>2150</em><span class="num3">2</span><a target="_blank" href="http://dushu.qq.com/intro.html?bid=27291411">就是要宠坏你</a></div>
                            <div class="detailWrap"><span class="num3">2</span>
                                <a target="_blank" href="http://dushu.qq.com/intro.html?bid=27291411"><img src="/static/picture/s_27291411.jpg" width="55" height="74" alt="就是要宠坏你" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://dushu.qq.com/intro.html?bid=27291411">就是要宠坏你</a></h4>
                                    <p>作者：端木摇</p>
                                    <p>分类：<a target="_blank" href="http://dushu.qq.com/store.html?cat2=14300&cat3=14302">爱情/情感</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>2095</em><span class="num3">3</span><a target="_blank" href="http://dushu.qq.com/intro.html?bid=27587920">不乖娇娘</a></div>
                            <div class="detailWrap"><span class="num3">3</span>
                                <a target="_blank" href="http://dushu.qq.com/intro.html?bid=27587920"><img src="/static/picture/s_27587920.jpg" width="55" height="74" alt="不乖娇娘" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://dushu.qq.com/intro.html?bid=27587920">不乖娇娘</a></h4>
                                    <p>作者：苏静初</p>
                                    <p>分类：<a target="_blank" href="http://dushu.qq.com/store.html?cat2=14300&cat3=14314">古代言情</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>2094</em><span>4</span><a target="_blank" href="http://dushu.qq.com/intro.html?bid=25822787">掌中之物</a></div>
                            <div class="detailWrap"><span>4</span>
                                <a target="_blank" href="http://dushu.qq.com/intro.html?bid=25822787"><img src="/static/picture/s_25822787.jpg" width="55" height="74" alt="掌中之物" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://dushu.qq.com/intro.html?bid=25822787">掌中之物</a></h4>
                                    <p>作者：贝昕</p>
                                    <p>分类：<a target="_blank" href="http://dushu.qq.com/store.html?cat2=14300&cat3=14302">爱情/情感</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>1813</em><span>5</span><a target="_blank" href="http://dushu.qq.com/intro.html?bid=29404087">喂，那个笨蛋我爱你</a></div>
                            <div class="detailWrap"><span>5</span>
                                <a target="_blank" href="http://dushu.qq.com/intro.html?bid=29404087"><img src="/static/picture/s_29404087.jpg" width="55" height="74" alt="喂，那个笨蛋我爱你" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://dushu.qq.com/intro.html?bid=29404087">喂，那个笨蛋我爱你</a></h4>
                                    <p>作者：酒小七</p>
                                    <p>分类：<a target="_blank" href="http://dushu.qq.com/store.html?cat2=14300&cat3=14302">爱情/情感</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>104</em><span>6</span><a target="_blank" href="http://dushu.qq.com/intro.html?bid=25878008">你是我的荣耀</a></div>
                            <div class="detailWrap"><span>6</span>
                                <a target="_blank" href="http://dushu.qq.com/intro.html?bid=25878008"><img src="/static/picture/s_25878008.jpg" width="55" height="74" alt="你是我的荣耀" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://dushu.qq.com/intro.html?bid=25878008">你是我的荣耀</a></h4>
                                    <p>作者：顾漫</p>
                                    <p>分类：<a target="_blank" href="http://dushu.qq.com/store.html?cat2=14300&cat3=14302">爱情/情感</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>86</em><span>7</span><a target="_blank" href="http://dushu.qq.com/intro.html?bid=26955736">你好，周先生</a></div>
                            <div class="detailWrap"><span>7</span>
                                <a target="_blank" href="http://dushu.qq.com/intro.html?bid=26955736"><img src="/static/picture/s_26955736.jpg" width="55" height="74" alt="你好，周先生" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://dushu.qq.com/intro.html?bid=26955736">你好，周先生</a></h4>
                                    <p>作者：夜蔓</p>
                                    <p>分类：<a target="_blank" href="http://dushu.qq.com/store.html?cat2=14300&cat3=14302">爱情/情感</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>82</em><span>8</span><a target="_blank" href="http://dushu.qq.com/intro.html?bid=25792479">旧春归（全集）</a></div>
                            <div class="detailWrap"><span>8</span>
                                <a target="_blank" href="http://dushu.qq.com/intro.html?bid=25792479"><img src="/static/picture/s_25792479.jpg" width="55" height="74" alt="旧春归（全集）" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://dushu.qq.com/intro.html?bid=25792479">旧春归（全集）</a></h4>
                                    <p>作者：尤四姐</p>
                                    <p>分类：<a target="_blank" href="http://dushu.qq.com/store.html?cat2=14300&cat3=14302">爱情/情感</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>78</em><span>9</span><a target="_blank" href="http://dushu.qq.com/intro.html?bid=29501424">又想骗我谈恋爱</a></div>
                            <div class="detailWrap"><span>9</span>
                                <a target="_blank" href="http://dushu.qq.com/intro.html?bid=29501424"><img src="/static/picture/s_29501424.jpg" width="55" height="74" alt="又想骗我谈恋爱" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://dushu.qq.com/intro.html?bid=29501424">又想骗我谈恋爱</a></h4>
                                    <p>作者：鹿尧</p>
                                    <p>分类：<a target="_blank" href="http://dushu.qq.com/store.html?cat2=14300&cat3=14302">爱情/情感</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>76</em><span>10</span><a target="_blank" href="http://dushu.qq.com/intro.html?bid=25491842">天霜河白（上）</a></div>
                            <div class="detailWrap"><span>10</span>
                                <a target="_blank" href="http://dushu.qq.com/intro.html?bid=25491842"><img src="/static/picture/s_25491842.jpg" width="55" height="74" alt="天霜河白（上）" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://dushu.qq.com/intro.html?bid=25491842">天霜河白（上）</a></h4>
                                    <p>作者：倾泠月</p>
                                    <p>分类：<a target="_blank" href="http://dushu.qq.com/store.html?cat2=14300&cat3=14314">古代言情</a></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!--免费人气-->
                    <ul class="rankList rankHover numList tabList hidden">
                        <li class="firstList">
                            <div class="hoverHide"><em>0</em><span class="num3">1</span><a target="_blank" href="http://dushu.qq.com/intro.html?bid=795768">养生导引法</a></div>
                            <div class="detailWrap"><span class="num3">1</span>
                                <a target="_blank" href="http://dushu.qq.com/intro.html?bid=795768"><img src="/static/picture/s_795768.jpg" width="55" height="74" alt="养生导引法" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://dushu.qq.com/intro.html?bid=795768">养生导引法</a></h4>
                                    <p>作者：胡文焕</p>
                                    <p>分类：<a target="_blank" href="http://dushu.qq.com/store.html?cat2=19100&cat3=19101">经史子集</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hoverHide"><em>0</em><span class="num3">2</span><a target="_blank" href="http://dushu.qq.com/intro.html?bid=26268212">社交恐惧与人性的成长（鲜读版）</a></div>
                            <div class="detailWrap"><span class="num3">2</span>
                                <a target="_blank" href="http://dushu.qq.com/intro.html?bid=26268212"><img src="/static/picture/s_26268212.jpg" width="55" height="74" alt="社交恐惧与人性的成长（鲜读版）" /></a>
                                <div class="detailInfo">
                                    <h4><a target="_blank" href="http://dushu.qq.com/intro.html?bid=26268212">社交恐惧与人性的成长（鲜读版）</a></h4>
                                    <p>作者：王宇</p>
                                    <p>分类：
                                        <a target="_blank" href="http://dushu.qq.com/store.html?cat2=&cat3="></a>
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="recSiteWrap"><img class="csGirl" src="/static/picture/bookgirl.png" />
            <div class="qrCodeWrap">
                <div class="code1">
                    <p>下载客户端</p><img width="80" height="80" src="/static/picture/qq_read_qr_1.png" alt="" /></div>
                <div class="code2">
                    <p>关注微信</p><img src="/static/picture/bookqrcode.png" alt="" /></div>
            </div>
            <div class="siteLink">
                <a class="a_cs" href="http://chuangshi.qq.com" target="_blank"></a>
                <a class="a_yq" href="http://yunqi.qq.com" target="_blank"></a>
                <a class="a_dushu" href="http://dushu.qq.com" target="_blank"></a>
                <a class="a_bbs" href="http://kf.qq.com/product/chuangshi.html" target="_blank"></a>
                <div class="csLink">
                    <h3>创世中文</h3>
                    <p class="f12">chuangshi.qq.com</p>
                    <p>汇集最新最热最火的男性竞技小说在线阅读</p>
                </div>
                <div class="yqLink">
                    <h4>云起书院</h4>
                    <p class="f12">yunqi.qq.com</p>
                    <p>汇集言情小说阅读</p>
                </div>
                <div class="dushuLink">
                    <h4>QQ阅读</h4>
                    <p class="f12">dushu.qq.com</p>
                    <p>汇集畅销小说阅读</p>
                </div>
                <div class="bbsLink">
                    <h4>客服</h4>
                    <p class="f12">Custom</p>
                    <p>有问题 找客服</p>
                </div>
            </div>
        </div>
        <!-- 主体 end-->
    </div>
    <style>
        .footer_main {
            height: 170px;
        }
        
        .footer_main li {
            height: 180px;
        }
    </style>
    <div class="footer">
        <div class="footer_main cf">
            <ul>
                <li style="height: 170px;"><span>友情链接</span></li>
                <li style=""><a target="_blank" href="http://chuangshi.qq.com/">创世中文网</a><a target="_blank" href="http://yunqi.qq.com/">云起书院</a><a target="_blank" href="http://dushu.qq.com/">畅销图书</a><a target="_blank" href="http://www.qidian.com">起点中文网</a><a href="https://www.webnovel.com"
                        target="_blank">起点国际</a><a target="_blank" href="http://yuedu.163.com/yc/">网易原创</a><a target="_blank" href="http://faloo.com">飞卢小说网</a><a href="http://www.hongshu.com" target="_blank">红薯小说网</a></li>
                <li><a target="_blank" href="http://www.17read.com">一起读小说网</a><a target="_blank" href="https://book.km.com/">快猫小说</a><a target="_blank" href="http://xiaoshuo.sogou.com">搜狗小说</a><a target="_blank" href="http://www.3gsc.com.cn/">3G小说网</a>
                    <a target="_blank" href="http://xiaoshuo.360.cn">360小说</a><a target="_blank" href="http://www.17k.com">17K小说网</a><a target="_blank" href="http://mm.17k.com">言情小说</a></li>
                <li><a target="_blank" href="http://www.tadu.com">塔读文学</a><a target="_blank" href="http://www.rain8.com">雨枫轩</a><a target="_blank" href="http://www.zongheng.com">纵横小说网</a><a target="_blank" href="http://www.heiyan.com">黑岩阅读网</a><a target="_blank"
                        href="http://www.zongheng.com/mianfei">免费小说</a><a target="_blank" href="http://xiaoshuo.duba.com/?f=qd">金山小说</a><a target="_blank" href="http://www.lkong.net/forum.php">龙的天空</a></li>
                <li><a target="_blank" href="http://www.huanwen.com">幻文小说网</a><a target="_blank" href="http://www.motie.com/">磨铁中文网</a><a target="_blank" href="http://www.ruochu.com/">若初文学网</a><a target="_blank" href="http://www.bayueju.com/">八月居小说网</a>
                    <a target="_blank" href="http://www.kanshu.com/">看书网小说</a><a target="_blank" href="http://www.zhaoxiaoshuo.com/">找小说</a><a target="_blank" href="http://www.qwsy.com/">蔷薇书院</a></li>
                <li><a target="_blank" href="http://www.ting85.com/">畅听网</a><a target="_blank" href="http://www.shuhai.com/">书海小说网</a><a target="_blank" href="http://www.znds.com/">智能电视网</a><a target="_blank" href="http://www.banbijiang.com/">半壁江中文网</a>
                    <a href="http://www.zhulang.com/" target="_blank">逐浪小说网</a><a href="http://bbs.eben.cn/forum.php?mod=forumdisplay&fid=30" target="_blank">E人E本移动阅读</a><a target="_blank" href="http://www.feihuo.com/">飞火游戏</a></li>
                <li class="business"><span>商务合作</span>
                    <div class="Bcontact">
                        <p>外部渠道联系：</p>
                        <p>张小姐 <a href="mailto:zhanglin@yuewen.com">zhanglin@yuewen.com</a></p>
                        <p>腾讯内部联系：</p>
                        <p>卢小姐 <a href="mailto:luxiaoyun@yuewen.com">luxiaoyun@yuewen.com</a></p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="foot">
            <p><a href="http://www.tencent.com/" target="_blank" rel="nofollow">关于腾讯</a><a href="http://www.tencent.com/index_e.shtml" target="_blank" rel="nofollow">About Tencent</a><a href="http://www.qq.com/contract.shtml" target="_blank" rel="nofollow">服务协议</a>
                <a href="http://open.qq.com/" target="_blank" rel="nofollow">开放平台</a><a href="http://www.tencentmind.com/" target="_blank" rel="nofollow">广告服务</a><a href="http://hr.tencent.com/" target="_blank" rel="nofollow">腾讯招聘</a><a href="http://gongyi.qq.com/"
                    target="_blank" rel="nofollow">腾讯公益</a>
                <a href="https://www.yuewen.com/service.html" target="_blank" rel="nofollow">客服中心</a><a href="http://www.qq.com/map/" target="_blank" rel="nofollow">网站导航</a><a class="nobroder" target="_blank" href="https://jubao.yuewen.com/">违规举报</a></p>
            <p> Copyright&nbsp;&nbsp;©&nbsp;1998&nbsp;-&nbsp;2020&nbsp;Tencent.&nbsp;All&nbsp;Rights&nbsp;Reserved</p>
            <p>腾讯公司&nbsp;版权所有</p>
            <p>粤府新函[2001]87号 粤网文[2011]0483-070号 网络视听许可证1904073号 网站备案/许可证号：<a style="border-right: 0 solid #CCC;" href="http://beian.miit.gov.cn/publish/query/indexFirst.action" rel="noreferrer" target="_blank">粤B2-20090059 B2-20090028</a></p>
        </div>
        <div id="icp">
            <a href="http://www.cyberpolice.cn/wfjb/" target="_blank" rel="external nofollow"><img src="/static/picture/footer_img1.png" width="122" height="52"></a>
            <a href="http://www.cyberpolice.cn/wfjb/" target="_blank" rel="external nofollow"><img src="/static/picture/footer_img2.png"></a>
            <a href="http://beian.miit.gov.cn/state/outPortal/loginPortal.action" target="_blank" rel="external nofollow"><img src="/static/picture/footer_img3.png"></a>
            <a href="http://www.12377.cn/" target="_blank" rel="external nofollow"><img src="/static/picture/footer_img4.png"></a>
            <a href="http://www.wenming.cn/" target="_blank" rel="external nofollow"><img src="/static/picture/footer_img5.png"></a>
            <a href="http://www.shjbzx.cn/" target="_blank" rel="external nofollow"><img src="/static/picture/footer_img6.png"></a>
        </div>
    </div>
    <!-- 数据统计 -->
    <script type="text/javascript">
        var requestStatLogUrl = "http://account.book.qq.com/statlog/index.html",
            requestStatLogData = {
                'site': "bk",
                'url': "ACs",
                'bid': '',
                'uuid': '',
                'encrypt': 1
            };

        // var refreshKeyUrl = "http://book.qq.com/ywlogin/refreshkey.html";

        $(function() {
            function _requestStatLog() {
                var params = [],
                    url = '';

                $.each(requestStatLogData, function(name, val) {
                    params.push(name + '=' + encodeURIComponent(val));
                });
                url = requestStatLogUrl + '?' + params.join('&');

                if (document.referrer) {
                    url += '&ref=' + encodeURIComponent(document.referrer);
                }

                new Image().src = url;
            }
            _requestStatLog();

            // function _refreshKey(){
            // 	new Image().src = refreshKeyUrl;
            // }
            // setInterval(_refreshKey, 1800000); //每30分钟刷新一次key

            //public
            $.getScript("http://tajs.qq.com/stats?sId=34321758");
            //book.qq.com
            $.getScript("http://tajs.qq.com/stats?sId=34321514", function() {
                //点击流
                $.getScript("http://pingjs.qq.com/ping_tcss_ied.js", function() {
                    if (typeof(pgvMain) === 'function') {
                        pgvMain();
                    }
                });
            });
        });
    </script>
    <script type="text/javascript" src="/static/js/index.js"></script>
    <script type="text/javascript">
        $(function() {
            CS.page.index.main.init();
        });
    </script>
</body>

</html>