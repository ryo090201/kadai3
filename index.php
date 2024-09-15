<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
    <title>kadai3</title>
</head>
<!-- キービジュアル -->
<body>
    <header>
        <div class="headerWrapper">
            <div class="headerTop">
                <div class="headerTop2">
                    <div class="headerLogo">
                        <img src="./image/logo_white.png" alt="">
                    </div>
                    <div class="header_content">
                        <div class="header_menu headerMenuWrapper">
                            <ul class="menu_list headerMenu">
                                <li class="menu_item">
                                    <a class="menu_link" href="">お部屋</a>
                                </li>
                                <li class="menu_item">
                                    <a class="menu_link" href="">プラン</a>
                                </li>
                                <li class="menu_item">
                                    <a class="menu_link" href="">四季</a>
                                </li>
                                <li class="menu_item">
                                    <a class="menu_link" href="">アクセス</a>
                                </li>
                            </ul>
                            <div class="headerReserve">
                                <a href="">予約</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="headerReserve_SP">
                    <a href="">予約</a>
                </div>
                <div class="header_menu-btn" id="sp_menuBtn">
                    <span></span>
                    <span></span>
                    <span></span>
                    <p class="menu">menu</p>
                </div>
            </div>
            <div class="headerBottom">
                <div class="headerText0">
                    <img class="headerText1" src="./image/text1.png" alt="">
                    <img class="headerText2" src="./image/text2.png" alt="">
                    <img class="headerText3" src="./image/text3.png" alt="">
                    <img class="headerText4" src="./image/text4.png" alt="">
                </div>
                <div class="headerScrooll">
                    <p>SCROOLL</p>
                    <div class="border"></div>
                </div>
            </div>
        </div>
    </header>
    <!-- 楽園雅苑 -->
    <div class="rakuenWrapper">
        <div class="rakuenCntents">
            <div class="contentsLeft">
                <div class="rakuenLogo">
                    <img src="./image/logo_gold.png" alt="">
                </div>
                <div class="rakuenText">
                    <p>自然美に囲まれた楽園で、<br>贅沢な癒しのひとときを<br>お過ごしください。</p>
                </div>
            </div>
            <div class="contentsRight">
                <div class="rakuenpic1">
                    <img src="./image/about_img_1.png" alt="">
                </div>
                <div class="rakuenpic2">
                    <img src="./image/about_img_2.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- お部屋 -->
    <div class="roomWrapper">
        <div class="roomContents">
            <div class="roomTop">
                <div class="roomTop_title">
                    <p class="roomLogo">お部屋</p>
                    <div class="border border2"></div>
                    <p class="roomEnglish">room</p>
                </div>
                <div class="roomIcon">
                    <img src="./image/room_cloud.png" alt="">
                </div>
            </div>
            <div class="roomExplain">
                <p>「楽園雅苑」の豪華なお部屋は、大分県自然の美しさと格式の高いサービスが調和した完璧な空間を提供します。桜花の調べが響くプレミア<br class="brSp">スィート、静寂の庭園に囲まれたデラックスルーム、そして自然のぬくもりを感じるスタンダードルーム。どの部屋も極上の癒しとくつろぎがお待ちしております。贅沢な温泉体験と非日常のくつろぎをお楽しみください。</p>
            </div>
            <div class="roomBottom">
                <div id="left" class="left">
                    <p class="left">スタンダートルーム<br>- 自然のぬくもり -</p>
                </div>
                <div class="center">
                    <p class="center">デラックスルーム<br>- 静寂の庭園 -</p>
                </div>
                <div class="right">
                    <p class="right">プレミアスィート<br>- 桜花の調べ -</p>
                </div>
            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="./js/index.js"></script>
</body>
</html>