<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>填鸭 | 一文看打針抽獎及禮品優惠</title>

        <link rel="icon" type="image/png" href=
        <?php echo base_url('/images/filleasy_faviicon.png'); ?>
        sizes="16x16">
        <link href = /css/bootstrap/bootstrap.css rel="stylesheet" type="text/css"> <link href = /css/footerstyle.css rel="stylesheet" type="text/css"> <link href = /css/headerstyle.css rel="stylesheet" type="text/css">
        <link rel="stylesheet" id="cf7cfasd-style-css" href="/css/card.css" type="text/css" media="all" />
        <link rel="stylesheet" id="cf7cfasd-style-css" href="/css/Vaccine/Vaccine_list_of_promotions.css" type="text/css" media="all" />

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-KMPTNM8FK4"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'G-KMPTNM8FK4');
		</script>
		

    </head>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            delay: 400,
            disable: "mobile",
        });
    </script>

    <body>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <div class="bg--yellow">
                <div>                 
                    <img src="<?php echo base_url('/images/logo.png'); ?>" class="logo" />
            </div>

        <div class = "landing-page-flex">
        <div class = "landing-page-head">
         
        <h1 class="header__title">填鴨.</h1>
        <h2 class="header__subtitle">各式表格 ‧ 幫你搵 ‧ 幫你填 ‧ 幫你交</h2>
        </div>
        </div>

        <div class="bg--white" style="background-color: white;">
            <h1 class="header__3">【疫苗優惠】一文看打針抽獎及禮品優惠</h1>
            <h3 class="subheader__3">商界送機票、送酒店住宿、送股票、送千萬新樓（不斷更新）</h3>
            <h3 class="subheader__3" style ="margin-top:20px;">最後更新時間 : 2021/08/30 12:00</h3>
            


            <!--  to remember which ones the user filled in already-->
            <div class="startofform">
            	<img src="<?php echo base_url('/images/vaccine/clickme.png'); ?>" class="clickme" />
                <h1 class="startofform_header">按一按就可以保存 ------></h1>
                <input type="button" value="保存" onclick="save();" class="savebutton" />
            </div>
            
            <div class = "jumpbuttons">
                <button type="button" class="jumpbutton"  onclick="hide()">隱藏</button>
                <button type="button" class="jumpbutton"  onclick="show()">開啓</button>
                <button type="button" class="jumpbutton"  onclick="jump('announced')">尚未開始</button>
                <button type="button" class="jumpbutton"  onclick="jump('discounts')">禮品優惠</button>

            </div>

            	
            <div class="active_prizes">
                <h1 class = "active_prize_header">已打疫苗人士可參加的大抽獎!</h1>
            </div>
            
  
            <form class='vaccineform' action="" method= "post" id = 'vaccineform' onsubmit="event.preventDefault();>
            <div class="comp-form">
            
            
                     	    <input type="checkbox" id="cathay" name="cathay" value="cathay"/>
                <label class="checkbox-overlay" for="cathay">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 國泰航空 - 翱翔大抽獎 </h3>
                            <h4>
                                參加抽獎即有機會獲得：於國泰航空空中巴士 A321neo 專屬航班暢遊香港上空，時間約一小時三十分鐘、
贏取一百萬「亞洲萬里通」里數獎賞及十萬「亞洲萬里通」里數獎賞。
參加者須年滿18歲或以上，持有香港身份證以核實居民資格，且於8月31 日或之前在香港完成接種兩劑由新冠疫苗。
抽獎活動於 8月16日凌晨12時正 開始至 9月15日晚上 結束，為期 31 天
每位參加者只可參加活動乙次，重覆登記將會被取消資格。
獎品會於 9月24日 由電腦隨機抽出，得獎名單將於 9月30日於活動網頁內公佈，亦會刊登於《英文虎報》及《星島日報》。
國泰航空將於 9 月 30 日 以電郵個別通知得獎者。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/cathay.png" alt="" />
                        </div>
					<div class = 'flexlinkbutton'>
                        <a><button type="button" class="linkbutton" onclick="window.open('https://www.cathaypacific.com/cx/zh_HK/offers/cathay-vaccination-lucky-draw.html','_blank')">報名!</button></a>
                               
                        </div>
                        </div>
                </label>
             
                <input type="checkbox" id="regal_hotels" name="regal_hotels" value="regal_hotels"/>
                <label class="checkbox-overlay" for="regal_hotels">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 富豪國際酒店 - 住宿大抽獎 </h3>
                            <h4>
                                參加抽獎即有機會獲得：富薈酒店一年長期住宿 (4名)、富豪九龍酒店總統套房住宿 (10名)、
富豪國際酒店集團旗下客房住宿一晚、富豪國際酒店集團旗下之自助晚餐一位。
參加者須於9月15日23時59分或前完成接種兩劑新冠疫苗，並持有有效香港身份證，且登記成為富豪尊貴會會員。
抽獎登記於9月15日截止，並於9月29日公佈結果。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/regal_hotels.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://vaccine.regalluckydraw.com/index_tc.html','_blank')">報名!</button></a>
                    </div>
                </label>
                
                 <input type="checkbox" id="hkta" name="hkta" value="hkta"/>
                <label class="checkbox-overlay" for="hkta">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 香港戲院商會 - 睇戲套票大抽獎 </h3>
                            <h4>
                                參加抽獎即有機會獲得：365張電影禮券，可於指定日子使用，於全港戲院票房可兌換2D正價戲票一張(不包括VIP影院及使用受相關條款約束)。
參加者須持有香港身分證，並於9月30日或之前在香港完成接種兩劑新冠疫苗。
活動將於10月4日將進行抽獎屆時本網頁及所有得獎者將以登記時提供的流動電話號碼透過電話及短訊方式獲個別通知，
10月8日星島日報及英文虎報。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/hkta.png" alt="" style = "width:100px;"/>
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://www.hktaorg.com/zh-hk/events/view/4','_blank')">報名!</button></a>
                    </div>
                </label>
                
                 <input type="checkbox" id="usmartsecurities" name="usmartsecurities" value="usmartsecurities"/>
                <label class="checkbox-overlay" for="usmartsecurities">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 盈立證卷 - 股票大贈送 </h3>
                            <h4>
                                參加接種一針或以上的科興疫苗，送35股中國生物製藥(1177.HK)。
接種一針或以上Biotech疫苗，送1股輝瑞(PFE.US)
此優惠活動僅適用於新客戶參與，新客戶是指過去6 個月內並沒有成功開立任何交易帳戶。
參加者必須年滿 18 歲並持有效的香港居民身份證，已於香港完成接種新冠疫苗。
所有參加者須於8月31日或之前將有關疫苗接種證明書發送電郵至 usmartbusiness@usmarthk.com 與客戶服務部登記。
活動日期由6月1日下午6時起至8月31日下午6時。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/usmartsecurities.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://usmartsecurities.com/marketing/social-appfeature-smartorder/zh-hk/index.html?register-ct=ecp&register-cid=3276&utm_source=3276&utm_medium=SOCIAL-ORGANIC-FACEBOOK-FOOTER&utm_term=ORGANIC_POST&utm_content=LINK-N&utm_campaign=SOCIAL&channel_type=ecp&dclid=CI_ZosKTg_ICFc4GlgodwzsA8w#/','_blank')">報名!</button></a>
                    </div>
                </label>
            
            
             <input type="checkbox" id="lee_gardens" name="lee_gardens" value="lee_gardens"/>
                <label class="checkbox-overlay" for="lee_gardens">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 希慎集團 - 疫苗加碼賞大抽獎 </h3>
                            <h4>
                                參加疫苗加碼賞大抽獎即有機會獲得：
菲力偉國際健美免費健身會籍一年、Lee Gardens Apartments 一個月免費住宿、運動用品、休閒健美、樂園套票等各種精美禮遇，讓大家展開身心靈健康的精彩生活。
參加者須為Lee Gardens Club 會員並持有有效香港居民身份證，及於登記參加抽獎時已年滿18歲，且於9月30日或之前在香港完成接種兩劑新冠疫苗。只需網上登記，無須消費即可參加。
抽獎活動於 8月16日 開始至 9月12日 結束，每週登記參加「疫苗加碼賞」抽獎時間為每週一 上午10:00至每週日晚上 11:59。
得獎者將於每週二中午12:00後以Lee Gardens 手機應用程式內的推送通知獲取得獎通知，並可透過Lee Gardens手機應用程式內的「我的錢包」收取中獎獎品之電子換領券。參加者可再次登入活動網站連查詢抽獎記錄。 
得獎結果亦將會刊登於星島日報及英文虎報，刊登日期為 8 月 31 日、9 月 7 日、9 月 14 日及 9 月 21 日。

                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/lee_gardens.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://leegardens.com.hk/leegardensarea/LeeGardensHighlights/2021/09/Reward-Double-Up?lang=zh-HK','_blank')">報名!</button></a>
                    </div>
                </label>
                
         <input type="checkbox" id="Sun Hung Kai" name="Sun Hung Kai" value="Sun Hung Kai"/>
                <label class="checkbox-overlay" for="Sun Hung Kai">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 新地會 - 新地會大抽獎 </h3>
                            <h4>
                                參加日日獎大抽獎即有機會獲得：
Samsung Galaxy S21 Ultra 5G 及SmarTone 5G SIM only 月費計劃、The Point by SHKP 商場綜合會員計劃2500000積分。登記日期於8月9日上午9時正至9月15日中午12時正，並於8月16日至9月15日進行抽獎。
須為新地會會員、抽獎當天已年滿18歲的香港永久性居民，且在香港已完成接種兩劑新冠疫苗。
「日日獎」將於每個抽獎日下午1時30分由電腦系統於參加名單中，隨機按星期一至日於「普通會員」及「星級會員」組別進行，
「愛家特別大獎」抽獎將於9月15日下午1時30分由電腦系統於參加名單中隨機抽出。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/Sun Hung Kai.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://shkpclubdaydaydraw.shkp.com/','_blank')">報名!</button></a>
                    </div>
                </label>
            
             <input type="checkbox" id="hktourism" name="hktourism" value="hktourism"/>
                <label class="checkbox-overlay" for="hktourism">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 旅發局 - 賞你遊大抽獎 </h3>
                            <h4>
                                參加抽獎即有機會獲得：西區藝術出行、南丫島索罟灣、神風洞探索遊、南丫島風光漁民文化探索之旅、觀星及歷史文化體驗團等186種免費「賞你遊」旅行團，名額兩個。
參加者須於8月31日或之前已年滿18歲；及持有有效中華人民共和國香港特別行政區永久性居民身份證的香港永久居民；或持有有效香港居民身份證的香港非永久居民，且完成接種最少一劑新冠疫苗。
登記由即日起開始至8月31日下午5:30截止，抽獎結果將於9月10日公佈。
抽獎結果將於9月10日在抽獎網站公佈，得獎者屆時亦會收到短訊通知。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/hktourism.png" alt="" />
                        </div>
                        
                        <div class = 'flexlinkbutton'>

                        
                        <a><button type="button" class="linkbutton" onclick="window.open('https://register.luckydraw.discoverhongkong.com/tc/index.html','_blank')">報名!</button></a>
                        <a><button type="button" class="linkbutton" onclick="window.open('https://luckydraw.discoverhongkong.com/tc/index.html','_blank')">公佈!</button></a>
                        </div>
                    </div>
                </label>
            
               <input type="checkbox" id="hkab" name="hkab" value="hkab"/>
                <label class="checkbox-overlay" for="hkab">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 銀行公會 - 疫苗接種大抽獎 </h3>
                            <h4>
                                香港銀行公會 (“HKAB”) 會員攜手贊助價值港幣650萬元的豐富獎品
參加抽獎即有機會獲得：價值港幣100000元的信用卡免找數簽賬額或購物禮券
參加者須於2021年9月13日或之前年滿18歲，持有有效香港居民身份證，且於8月31日或之前接種至少兩劑新冠疫苗。
登記日期由7月26日上午10時至9月13日下午5時，並於9月17日進行大抽獎。
抽獎結果將於9月24日在網站公布，並在兩份本地報章：星島日報及英文虎報刊登，且得獎者亦會獲得個別通知。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/hkab.png" alt="" style = "width:230px"/>
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://www.hkabluckydraw.hk/zh/index.html','_blank')">報名!</button></a>
                    </div>
                </label>
            
               <input type="checkbox" id="EGL" name="EGL" value="EGL"/>
                <label class="checkbox-overlay" for="EGL">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> EGL 東瀛遊 - 開心旅行大抽獎 </h3>
                            <h4>
                                參加抽獎有機會獲得：一年免費任住大阪逸之彩酒店(Osaka Hinode Hotel)及沖繩逸之彩温泉度假酒店(Okinawa Hinode Resort and Hot Spring Hotel)雙人客房，名額乙份，價值約港幣$400000、
一年免費任住大阪逸之彩酒店(Osaka Hinode Hotel)雙人客房，名額乙份，價值約港幣$350000、
名額800份，總值約港幣$400,000
參加者須於登記參加抽獎活動時已年滿18歲的香港永久性居民，並於9月15日或之前完成接種兩劑新冠疫苗。
活動登記於7月22日開始，9月15日晚上11時59分結束，並於9月23日進行抽獎。
抽獎結果將於9月24日在本抽獎活動網頁，於9月28日在星島日報及英文虎報公佈。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/EGL.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://www.egltours.com/travel/pages/luckydrawtravel/index.html','_blank')">報名!</button></a>
                    </div>
                </label>
                
                  <input type="checkbox" id="FWD" name="FWD" value="FWD"/>
                <label class="checkbox-overlay" for="FWD">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 富衛集團 - 會員大抽獎 </h3>
                            <h4>
                                抽獎即有機會贏取獲得：香港半島酒店雙人半島套房一晚，包括早午晚餐、下午茶餐、60分鐘水療服務，來回勞斯萊斯房車接送及直昇機遨遊香港體驗、
港幣1000元Klook禮品卡、香港海洋公園雙人入場券、富衛1881公館 ODEA二人經典下午茶、每份港幣500 The North Face、Adidas現金券、
港幣50元GODIVA軟雪糕券、港幣25元天仁茗茶現金券。
參加者須為FWD MAX 會員，且於8月31日或之前接種至少一劑新冠疫苗。
倘若是FWD MAX 會員同時為富衛現有保單持有人，更可獲得多高達20次抽獎機會。
抽獎活動日期於7月19日中午十二時 至 8月31日下午十一時五十九分。
得獎將於9月17日或之前於FWD MAX登記之會員通訊電郵地址，收到得獎通知及領獎詳情。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/FWD.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://fwdmax.fwd.com.hk/#/tc/Events/FWDMAXluckydraw','_blank')">報名!</button></a>
                    </div>
                </label>
                
                
                <input type="checkbox" id="trip" name="trip" value="trip"/>
                <label class="checkbox-overlay" for="trip">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> trip.com - BestShot贏Trip </h3>
                            <h4>
                                參加者抽獎即有機會獲得：加拿大航空公司加拿大任何航點來回經濟艙機票、海洋公園親子入場門票、屁屁偵探展雙人門票、Legoland樂高探索中心親子門票、CinemaCIty 4DX電影雙人套票、Plaza Premium 環亞貴賓室2小時通行證。
參加者須於8月31日或之前已年滿18歲；及持有有效中華人民共和國香港特別行政區永久性居民身份證的香港永久居民；或持有有效香港居民身份證的香港非永久居民，且完成接種新冠疫苗。
登記於7月30日開始至8月31日截止，抽獎結果將於9月3日於網站公佈。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/trip.png" alt="" />
                        </div>
                        
                        
						<div class = 'flexlinkbutton'>
                        <a><button type="button" class="linkbutton" onclick="window.open('https://hk.trip.com/sale/w/2598/bestshot.html?locale=zh_hk','_blank')">報名!</button></a>
                        <a><button type="button" class="linkbutton" onclick="window.open('https://hk.trip.com/sale/w/2598/bestshot.html?locale=zh_hk','_blank')">公佈!</button></a>
                    </div>
                    </div>
                </label>
                
                 <input type="checkbox" id="sinopec" name="sinopec" value="sinopec"/>
                <label class="checkbox-overlay" for="sinopec">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 中國石化 - 送汽油大抽獎 </h3>
                            <h4>
                                參加抽獎即有機會獲得：1至2年入Sino x Power超級汽油獎賞、X card plus。
參加者須於9月30日或之前年滿 18 歲，並持有有效中華人民共和國香港特別行政區永久性居民身份證的香港永久居民；
或持有有效香港居民身份證的香港非永久居民，已於香港完成接種兩劑新冠疫苗。
登記日期為即日起至9月30日下午11時59分。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/sinopec.png" alt="" style = "width:125px"/>
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://www.sinopecvaccinationluckydraw.com/app/index.php/webforms/form/form?encid=b929fad8-04de-ad08-3c4b-2f2e84b118fb&tracker=6a8939d8-47d7-af49-6d37-cc5c4f9361f0&flang=chi&fbclid=IwAR0LUhbxnuzi_OcJaYdS7PhGTIKNE1xBwS869RTFGQ1h8iDAR0tFqZGuFqs','_blank')">報名!</button></a>
                    </div>
                </label>
                
                
                
            
             <input type="checkbox" id="kamkee_cafe" name="kamkee_cafe" value="kamkee_cafe"/>
                <label class="checkbox-overlay" for="kamkee_cafe">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 金記冰室 - 食金記大抽獎 </h3>
                            <h4>
                                參加抽獎有機會獲得：一世免費食金記冰室 (每月上限港幣3,000元) 、一年免費食金記冰室 (每月上限港幣3,000元) 、
三個月免費食金記冰室 (每月上限港幣3,000)、港幣10元電子現金卷。
參加者須7月13日至8月31日期間，於金記冰室消費滿50元或以上，持有有效香港居民身份證，並於8月31日或之前香港接種兩劑新冠疫苗。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/kamkee_cafe.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://www.kamkee.com.hk/vaccinationprizedraw_july/','_blank')">報名!</button></a>
                    </div>
                </label>
                
                
                      <input type="checkbox" id="HAIRROOM" name="HAIRROOM" value="HAIRROOM"/>
                <label class="checkbox-overlay" for="HAIRROOM">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> HAIRROOM - 剪髮大抽獎 </h3>
                            <h4>
                                凡參加HAIROOM抽獎即有機會獲得：一世免費剪髮 (每月上限1次) + 2年免費HAIROOM洗頭水 (每月上限1支)、
2年免費剪髮 (每月上限1次) + 2年免費HAIROOM洗頭水 (每月上限1支)，總值超過港幣5700元、
1年免費剪髮 (每月上限1次) + 1年免費HAIROOM洗頭水 (每月上限1支)，總值超過港幣2800元、

參加者須持有有效香港身份證的永久居民或非永久居民(「合資格參加者」)，登記活動時已年滿18歲，並於9月30日前已在香港完成接種兩劑新冠疫苗。
​抽獎結果將於10月5號在抽獎網站公布，並在英文虎報及頭條日報刊登。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/HAIRROOM.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://www.hairoom.hk/vaccination-lucky-draw.html','_blank')">報名!</button></a>
                    </div>
                </label>
            
            
            <input type="checkbox" id="Beauty_Media" name="Beauty_Media" value="Beauty_Media"/>
                <label class="checkbox-overlay" for="Beauty_Media">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 美麗傳媒 - 新冠疫苗接種大抽獎 </h3>
                            <h4>
                                參加抽獎有機會獲得：Apple iPhone12Pro Max 128GB一部
參加者須於8月31日或之前已年滿18歲，持有有效香港身份證的香港居民，及於8月31日或之前在香港完成接種兩劑新冠疫苗。
參加玩法：必須完成以下所有程序方當作成功參與＊
1. [ #LIKE ] – 讚好本專頁；
2. [ #SHARE ] – 分享此post並設為公開，在自己Facebook；
3. [ #CM ] – 在留言欄tag 3位從未Like美麗傳媒專頁的朋友，邀請朋友Like專頁，再寫上參加《齊齊打疫苗，人人有獎抽》的字句；
此處必須3位都是新粉絲，如發現tag了舊粉絲視作無效。
4. [ #INBOX ] – 做好以上各項的粉絲可以私訊美麗傳媒，留下姓氏及電話。
活動截止時間於8月31日23時59分，得獎名單將於9月5日公佈，並於3個工作天內以電話及電郵通知得獎者。得獎名單將在Facebook公布。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/Beauty_Media.png" alt="" />
                        </div>
						<div class = 'flexlinkbutton'>
						
                        <a><button type="button" class="linkbutton" onclick="window.open('https://www.facebook.com/BeautyMediaHK/photos/a.131338407691357/998616684296854','_blank')">報名!</button></a>
                        <a><button type="button" class="linkbutton" onclick="window.open('https://www.facebook.com/BeautyMediaHK/photos/a.138628006962397/1030933784398477/','_blank')">公佈!</button></a>
                        </div>
                        
                    </div>
                </label>
            
               
            
             <input type="checkbox" id="shangrila" name="shangrila" value="shangrila"/>
                <label class="checkbox-overlay" for="shangrila">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 香格里拉集團 - 環遊世界大抽獎 </h3>
                            <h4>
                                參加抽獎有機會獲得：可獲一年免費酒店住宿，並適用於香格里拉集團全球100多間酒店。
在全球76個目的地體驗香格里拉以心相待的至善盛情，盡情享受不一樣的度假樂趣
抽獎報名日期由8 月 16 日至 9 月 15 日，8月31日下午11時59分截止登記。
參加者登記抽獎活動時需年滿18歲，並已完成接種兩劑新冠疫苗的香港永久居⺠。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/shangrila.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://www.shangri-la.com/group/shangrila-cares/luckydraw/tc/','_blank')">報名!</button></a>
                    </div>
                </label>
            
            
                <input type="checkbox" id="likashingfoundation" name="likashingfoundation" value="likashingfoundation"/>
                <label class="checkbox-overlay" for="likashingfoundation">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 長江集團 - 2000萬元禮卷大抽獎 </h3>
                            <h4>
                                參加抽獎有機會獲得：價值港幣5至500萬不同面值的長江集團禮券。
參加者於8月31日或之前需年滿18歲，並已完成接種兩劑新冠疫苗的香港永久或非永久居⺠。
抽獎登記日由7月20日至9月10日晚上11時59分，並於9月13日抽獎
得獎名單將於網站公佈，並在《信報財經新聞》、《星島日報》及《英文虎報》報章刊登。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/likashingfoundation.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://www.ck-lksf-supportvaccine.hk/','_blank')">報名!</button></a>
                    </div>
                </label>
                
                   <input type="checkbox" id="cmahk" name="cmahk" value="cmahk"/>
                <label class="checkbox-overlay" for="cmahk">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 香港中華廠商聯合會 - 「有種‧有賞」疫苗獎賞計劃 </h3>
                            <h4>
                                參加抽獎有機會獲得：超過1,300份總值超過港幣620萬元的獎品
參加者登記抽獎活動時需年滿18歲，並已在香港完成接種兩劑新冠疫苗。
大抽獎將分兩輪進行：首輪抽獎登記於7月18日上午9時至8月18日下午6時，抽獎日於8月30日。
終極抽獎登記於8月19日上午9時至9月18日下午6時，抽獎日於9月29日。
結果將於抽獎日後10個工作天內於廠商會網頁公布，透過電郵收到得獎通知及可在「e健行」查看得獎信息。
主要獎品的得獎结果亦會於10月5日在星島日報及虎報刊登。

                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/cmahk.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://www.cmatakeyourshot.com/tc/','_blank')">報名!</button></a>
                    </div>
                </label>
                
                <input type="checkbox" id="chinachem" name="chinachem" value="chinachem"/>
                <label class="checkbox-overlay" for="chinachem">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 華懋集團 - 大抽獎 </h3>
                            <h4>
                                參加抽獎有機會獲得：如心酒店標準客房 Staycation 一晚 連雙人早餐及自助晚餐、全年家庭電影通行證多張。
登記日由7月5日上午9時正至於9月1日中午12時00分截止。
參加者須持有有效香港居民身份證並於2021年8月31日或之前已年滿18歲，並於8月31日或之前在香港接種兩劑新冠疫苗。
結果將於大抽獎網站公布，得獎者將以登記時所提供的流動電話號碼，以短訊方式及電郵獲取得獎通知，並同日於am730及英文虎報刊登。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/chinachem.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://luckydraw.chinachemgroup.com/','_blank')">報名!</button></a>
                    </div>
                </label>
                
                 <input type="checkbox" id="goldsilver" name="goldsilver" value="goldsilver"/>
                <label class="checkbox-overlay" for="goldsilver">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 金銀業貿易場 - 重建經濟大抽獎 </h3>
                            <h4>
                                參加者需於9月29日或之前已年滿18歲，且持有有效香港永久性居民身份證的香港永久居民，或持有有效香港居民身份證的香港非永久居民。
並須於9月29日或之前完成接種兩劑新冠疫苗。
抽獎登記日於7月19日上午9:00開始，至2021年9月29日下午5:30結束，並於8月18日至9月30日進行抽獎。
得獎名單於10月8日在抽獎網站公布，並在兩份本地報紙The Standard及信報刊登。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/goldsilver.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://cgsegoldendraw.com/','_blank')">報名!</button></a>
                    </div>
                </label>
            
            
   				<input type="checkbox" id="3hk" name="3hk" value="3hk"/>
                <label class="checkbox-overlay" for="3hk">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 3香港 - 全民齊抽獎 </h3>
                            <h4>
                                年滿18歲之香港市民，並於8月31日或之前完成接種兩劑新冠疫苗，參加抽獎有機會獲得以下總值超過港幣1,000萬獎賞：(指定月費計劃客戶將有3次抽獎機會，而其他香港市民則有1次抽獎機會) iPhone 12 Pro (128GB)、上台獎賞：送港幣800手機折扣券、出5G月費計劃，再送額外33GB 5G數據活動將於 9 月 15 日 下午 5 時 59 分截止，並在9月30日公佈抽獎結果於本活動網站、英文虎報及星島日報刊登。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/3hk.png" alt="" style = "width:115px; margin-bottom:20px"/>
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://www.three.com.hk/3Care/jabso/index.html','_blank')">報名!</button></a>
                    </div>
                </label>
            
                         
          <input type="checkbox" id="HKCEC" name="HKCEC" value="HKCEC"/>
                <label class="checkbox-overlay" for="HKCEC">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 香港會展-總值逾50萬元大抽獎 </h3>
                            <h4>
                                參加抽獎即有機會獲得：單人全年免費任食香港會議展覽中心薈景自助晚餐(名額3個)、
其他獎品包括港幣1,000元香港會議展覽中心中庭晚餐禮券(名額30個)，獎品總值超過港幣50萬元
參加者須於8月31日或之前已年滿18歲，持有有效的香港身份證，並於8月31日或之前完成接種兩劑新冠疫苗。
抽獎將於9月9日以隨機方式進行，並於三個工作天內以電話及電郵通知得獎者。
得獎名單將在網頁上公佈，並於9月16日的英文虎報及星島日報上刊登。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/HKCEC.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://luckydraw.hkcec.com/tc/form.html','_blank')">報名!</button></a>
                    </div>
                </label>
                

            
       <input type="checkbox" id="goodman" name="goodman" value="goodman"/>
                <label class="checkbox-overlay" for="goodman">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 嘉民集團 - 總值逾100萬大抽獎 </h3>
                            <h4>
                                參加抽獎有機會獲得：價值逾60萬港元的Tesla Model 3 Long Range電動車一輛，以及多款從集團旗下物業的現金卷。
參加者可於7月13日10:0起至9月2日23:59抽獎活動網站上登記
登記者需9月2日或之前年滿18歲，並於8月31日或之前在香港接種兩劑新冠疫苗。
抽獎結果將於9月10日在#goodshot 抽獎活動網站上公佈，及刊登於英文虎報及星島日報。

                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/goodman.png" alt="" style = "width:125px;"/>
                        </div>
						<div class = 'flexlinkbutton'>
						
                        <a><button type="button" class="linkbutton" onclick="window.open('https://hkgoodshot.goodman.com/home','_blank')">報名!</button></a>
                        <a><button type="button" class="linkbutton" onclick="window.open('https://hkgoodshot.goodman.com/end','_blank')">公佈!</button></a>
                        </div>
                    </div>
                </label>
                
                
				<input type="checkbox" id="towngas" name="towngas" value="towngas"/>
                <label class="checkbox-overlay" for="towngas">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 香港中華煤氣 - 疫苗接種大抽獎 </h3>
                            <h4>
                                參加抽獎有機會獲得：價值港幣1000至10000元煤氣電子購物禮卷。
獲得電子購物禮券後可以在「好氣 Fun」網上購物平台登記會員及兌換產品或其他煤氣業務現金，煤氣電子購物禮券有效期至2022年9月30日。
參加者於登記參加本活動當日已年滿18歲，並已經接種至少一劑的新冠疫苗。
活動於7月2日上午10時正開始接受登記，並於9月26日下午11時59分結束。
抽獎共5輪，上一輪沒中獎的已登記市民，將自動進入下一期抽獎。
結果將於每次抽獎翌日在網站公佈(即8月3日、8月17日、8月31日、9月14日及9月28日)
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/towngas.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://luckydraw.towngas.com/','_blank')">報名!</button></a>
                    </div>
                </label>
            
            <input type="checkbox" id="sasa" name="sasa" value="sasa"/>
                <label class="checkbox-overlay" for="sasa">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> sasa國際 - 美麗全城大抽獎 </h3>
                            <h4>
                                參加抽獎有機會獲得：總值港幣2000元的莎莎現金券、一年莎莎實體店舖貴賓會籍。
抽獎日期於8月2日至10月4日，參加者登記抽獎活動時需年滿18歲，並已完成接種兩劑新冠疫苗的香港永久居⺠。
得獎名單將於莎莎的Facebook 及抽獎網站內公佈，英文虎報及星島日報刊登。

                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/sasa.png" alt="" />
                        </div>
						<div class = 'flexlinkbutton'>
						
                        <a><button type="button" class="linkbutton" onclick="window.open('https://vaccine.sasaluckydraw.com/?action=2qnetwork_reset_to_wait','_blank')">報名!</button></a>
                        <a><button type="button" class="linkbutton" onclick="window.open('https://vaccine.sasaluckydraw.com/?action=2qnetwork_reset_to_wait','_blank')">公佈!</button></a>
                        </div>
                    </div>
                </label>
                
              <input type="checkbox" id="sinounitedpublishing" name="sinounitedpublishing" value="sasa" />
 <label class="checkbox-overlay" for="sinounitedpublishing">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 聯合出版 - 二百萬元圖書禮券大抽獎 </h3>
                            <h4>
                                大抽獎總值港幣二百萬元，均有千元至萬元不等的圖書禮券
 合資格參加者：於7月31日（第一期抽獎）或之前 / 8月31日（第二期抽獎）或之前已年滿18歲得獎名單將於8月13日和9月15日在本抽獎網站公佈，同時在《英文虎報》及《星島日報》刊登。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/sinounitedpublishing.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://vaccine.mybookone.com.hk/zh_HK','_blank')">報名!</button></a>
                    </div>
                </label>

                
           <input type="checkbox" id="kwainternational" name="kwainternational" value="kwainternational"/>
                <label class="checkbox-overlay" for="kwainternational">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 嘉華國際 - 總值100萬元酒店禮卷大抽獎 </h3>
                            <h4>
                                參加抽獎即有機會獲得：價值港幣2000元的海景嘉福酒店電子餐飲禮券，並可換領六款指定的豐富獎品其中之一。
參加者須登記參加抽獎活動時已年滿12歲，持有有效香港居民身份證，並於7月6日至8月29日期間在香港接種第一劑或第二劑新冠疫苗。
為期八周的獎賞活動，於7月6日上午9時接受登記，並於8月29日下午11時59分結束。
抽獎結果於7月19日起，逢星期一於星島日報及英文虎報刊登。
亦會於抽獎日起計10日內，透過電話短訊及電郵方式通知得獎者。


                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/kwainternational.png" alt="" />
                        </div>
						<div class = 'flexlinkbutton'>
                        <a><button type="button" class="linkbutton" onclick="window.open('https://kwahcaresvaccination.kwih.com/Home/','_blank')">報名!</button></a>
                        <a><button type="button" class="linkbutton" onclick="window.open('https://kwahcaresvaccination.kwih.com/Home/','_blank')">報名!</button></a>
                        </div>
                    </div>
                </label>
                
                
                             <input type="checkbox" id="tcl" name="tcl" value="tcl"/>
                <label class="checkbox-overlay" for="tcl">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> TCL電子 - 家電大抽獎 </h3>
                            <h4>
                                參加抽獎有機會獲得：價值 港幣20,980 TCL 最新款 55"MINI LED TV、價值港幣3,680元的TS9030 (高端3.1聲道音響)、
價值港幣2,880元的32寸TV 32S520、價值港幣1,688元的BREEVA A1W (智能wifi空氣淨化器)、價值港幣1,000元的QLED 電視（65"/55"/50"C725系列）優惠劵、
價值港幣2,000元的MINI LED 電視優惠劵。
參加者須於9月3日或之前已年滿18歲，持有有效香港居民身份證，並已完成至少一劑的新冠疫苗接種。
抽獎的登記時間於6月28日至9月3日，得獎名單將於7月6日至9月7日的每個星期二公佈。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/tcl.png" alt="" />
                        </div>
                        <div class = 'flexlinkbutton'>
                        <a><button type="button" class="linkbutton" onclick="window.open('https://www.tcl.com/contents/acp/HKlottery01?activityId=38&fbclid=IwAR3JnwDAjuGV3aUoVZRH3MPbIn54Wt5m-a7nDcmaoTdhOYXjeuNblV8w1wg','_blank')">報名!</button></a>
                        <a><button type="button" class="linkbutton" onclick="window.open('https://www.tcl.com/contents/acp/HKlottery01?activityId=38&fbclid=IwAR3JnwDAjuGV3aUoVZRH3MPbIn54Wt5m-a7nDcmaoTdhOYXjeuNblV8w1wg','_blank')">公佈!</button></a>
                        </div>
                    </div>
                </label>

     		<input type="checkbox" id="Bar Pacific" name="Bar Pacific" value="Bar Pacific"/>
                <label class="checkbox-overlay" for="Bar Pacific">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 太平洋酒吧 - 六百萬幸運大抽獎 </h3>
                            <h4>
                                憑任何消費帳單可參加抽獎，每張賬單可以參加抽獎一次。
參加抽獎即有機會獲得：全單免費、即時享用威士忌、雞尾酒、紅酒、啤酒塔。
參加者須於7月9日起，完成接種至少一劑疫苗，且持有有效香港居民身份證。

                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/Bar Pacific.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://www.facebook.com/barpacifichk/photos/a.1528793080721687/2916373968630251/','_blank')">公報!</button></a>
                    </div>
                </label>
            
            
                            
                
                
				<input type="checkbox" id="Lucky Draw" name="Lucky Draw" value="Lucky Draw"/>
                <label class="checkbox-overlay" for="Lucky Draw">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 龍煌有限公司 - 過千萬終極大抽獎 </h3>
                            <h4>
                                參加抽獎有機會獲得：凱滙全新單位壹個、價值港幣10萬元的預付卡簽賬額或信用卡免找數簽賬額年滿18歲並已於9月1日或之前完成接種兩劑新冠疫苗的香港居民即可報名參加。
 活動於6月15日上午9時正開始接受登記，並於9月1日下午5時30分結束。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/luckydraw.png" alt="" />
                        </div>
						<div class = 'flexlinkbutton'>					
                        <a><button type="button" class="linkbutton" onclick="window.open('https://register.vaccinationluckydraw.hk/en/','_blank')">報名!</button></a>
                        <a><button type="button" class="linkbutton" onclick="window.open('https://register.vaccinationluckydraw.hk/en/result.html','_blank')">公佈!</button></a>
                        </div>
                    </div>
                </label>
                
                
          		<input type="checkbox" id="dream cruises" name="dream cruises" value="dream cruises"/>
                <label class="checkbox-overlay" for="dream cruises">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 星夢郵輪 - 豪華郵輪海上行宮大抽獎 </h3>
                            <h4>
                                參加抽獎有機會獲得：價值380萬無限任搭雲頂夢號，持有年度郵輪通行證，入住豪華海景露台房、入住雲頂夢號皇宮庭苑別墅(4-6人住)，盡享三日兩夜的郵輪假期於7月30日或之前已年滿18歲，並已完成接種兩劑新冠疫苗的香港永久及非永久居⺠均可參加。截止日期： 7 月 30 日 晚上 11 時 59 分
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/dream cruises.png" alt="" />
                        </div>
						<div class = 'flexlinkbutton'>						
                        <a><button type="button" class="linkbutton" onclick="window.open('https://campaign.dreamcruiseline.com/2021/sweepstake/en/index.html','_blank')">報名!</button></a>
                        <a><button type="button" class="linkbutton" onclick="window.open('https://www.facebook.com/DreamCruisesHQ/photos/a.1666177466970158/2909743659280193/','_blank')">公佈!</button></a>
                        </div>
                    </div>
                </label>
                
                
           		<input type="checkbox" id="Henderson" name="Henderson" value="Henderson"/>
                <label class="checkbox-overlay" for="Henderson">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 恒基兆業集團 - 「疫苗接種鼓勵計劃」抽獎 </h3>
                            <h4>
                                參加抽獎有機會獲得：九九九九實金、多張價值港幣1000商場電子購物禮券及超市零售現金券
 參加者登記抽獎活動時需年滿18歲，並已完成接種兩劑新冠疫苗的香港永久及非永久居⺠均可參加。得獎者將於抽獎網站www.hldluckydraw.hk公布，並在《南華早報》及《星島日報》刊登。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/Henderson.png" alt="" />
                        </div>
						<div class = 'flexlinkbutton'>
						<a><button type="button" class="linkbutton" onclick="window.open('https://www.hldluckydraw.hk/tc/index.html','_blank')">報名!</button></a>
						<a><button type="button" class="linkbutton" onclick="window.open('https://www.hldluckydraw.hk/tc/result.html','_blank')">公佈!</button></a>
						</div>
                    </div>
                </label>
            
       
                
			
                
             <input type="checkbox" id="airstar" name="airstar" value="airstar"/>
                <label class="checkbox-overlay" for="airstar">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 天星銀行airstar - 存款優惠大抽獎 </h3>
                            <h4>
                                抽獎即有機會獲得：3個月定期存款升息券（升息券）一張，定期存款金額上限為港幣50000元。
憑此升息券於本行開立港幣 3 個月定期存款，可享年利率 +8% 的優惠。
參加者須7月31日或之前在香港已完成接種第一劑新冠疫苗，且為天星銀行的個人銀行客戶（合資格客戶）
抽獎活動於6月28日開始至7月31日結束。
得獎結果將於 8 月 18 日透過公司網頁公布。另將根據本行紀錄的手機號碼及電郵地址，經手機短訊及電郵通知所有得獎者。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/airstar.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://www.airstarbank.com/pdf/Vaccination%20COVID-19%20Lucky%20Draw%20Terms%20and%20Conditions_ZH.pdf','_blank')">公報!</button></a>
                    </div>
                </label>
                
                 <input type="checkbox" id="NewPeopleParty" name="NewPeopleParty" value="NewPeopleParty"/>
                <label class="checkbox-overlay" for="NewPeopleParty">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 新民黨 - 百萬禮品大抽獎 </h3>
                            <h4>
                                參加抽獎即有機會獲得：時款手提電腦、電話、體驗套票、本地遊套票（二人）、100元餐飲卷、咖啡兌換卷。
甚至能獲得：勞力士Cellini 18K、女裝腕錶、鑽石手鍊、首飾吊墜、購物禮卷、大紅袍等。
參加者須於8月11日及31日或之前年滿18歲，持有有效香港永久居民身份證，且在香港接種兩劑新冠疫苗。
登記時間將於8月11日下午六時截止，並於8月23日進行抽獎。
抽獎結果將於9月13日刊登於星島日報及英文虎報
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/NewPeopleParty.png" alt="" />
                        </div>
						<div class = 'flexlinkbutton'>
                        <a><button type="button" class="linkbutton" onclick="window.open('https://luckydraw.npp.org.hk/?fbclid=IwAR34RClNF-PJ-EPSd7qhSkz_WfDzx0MoUg1qBSB2z4NQ29SGKS1NgDffkcA','_blank')">報名!</button></a>
                        <a><button type="button" class="linkbutton" onclick="window.open('https://luckydraw.npp.org.hk/?fbclid=IwAR34RClNF-PJ-EPSd7qhSkz_WfDzx0MoUg1qBSB2z4NQ29SGKS1NgDffkcA','_blank')">公佈!</button></a>
                        </div>
                        
                    </div>
                </label>
                
                <input type="checkbox" id="ChinaConstructionBank" name="ChinaConstructionBank" value="ChinaConstructionBank"/>
                <label class="checkbox-overlay" for="ChinaConstructionBank">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 建行亞洲 - 齊心抗疫大抽獎 </h3>
                            <h4>
                                參加抽獎即有機會獲得：港幣128000元、38000元、18000元、800元 建行亞洲信用卡免找數簽賬額。
參加者須於8月31日或之前成功接種疫苗。
登記日期於6月21日 上午10時 至 8月31日 晚上11時59分截止。
抽獎結果將於10月內於網站內公佈。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/ChinaConstructionBank.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://online.asia.ccb.com/PersonalHKWeb/resources/hongkong_tc/personal/global/form/vaccinationluckydraw/index.html?fbclid=IwAR0OrLMEasuC0GcizNd5FSUgpolmNOSlbiR3CPrhh8LwxtyUQtrqR8yjjRI','_blank')">報名!</button></a>
                    </div>
                </label>
                
                                
              <input type="checkbox" id="babingtoneducation" name="babingtoneducation" value="babingtoneducation"/>
                <label class="checkbox-overlay" for="babingtoneducation">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> Babington Education - 課程大抽獎 </h3>
                            <h4>
                                參加抽獎有機會獲得：Babington Education的English Ladder或 RWI課程的12 堂免費學費。
參加者須年滿18歲，並於9月1日或之前在香港完成接種兩劑新冠疫苗。
登記時間於6月12日上午9時至9月1日下午5時30分
抽獎結果將於9月8日在網站公佈。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/babingtoneducation.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://zh.babington.edu.hk/post/vaccination-covid-19-lucky-draw-1?fbclid=IwAR16rKpVK76fTuj1FLUthTHGRDtxMkb_fbJke9QBOQcy1iu5ABpvlJFuyrg','_blank')">報名!</button></a>
                    </div>
                </label>
                
               <input type="checkbox" id="WongTaiSinTemple" name="WongTaiSinTemple" value="WongTaiSinTemple"/>
                <label class="checkbox-overlay" for="WongTaiSinTemple">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 嗇色園黃大仙祠 - 神像大抽獎 </h3>
                            <h4>
                                抽獎活動於7月1日至9月15日期間，
參加抽獎即有機會獲得：3個黃大仙師金身神像、100個金吊墜，以及600張財神金箔卡。
若只接種一劑疫苗，只可抽取財神金箔卡，不能贏取吊墜或神像。
參加者須已完成接種疫苗，前往黃大仙祠總辦事處登記，並核對香港身份證及疫苗接種紀錄，以獲取抽獎卡並參與疫苗抽獎活動。
9月17日晚上的花燈廟會開幕禮上，抽出神像及金吊墜的得獎者。
隨後會於農曆6月至8月的每個初一及十五舉行抽獎，舉行合共6輪抽獎，每次抽出100名財神金箔卡的得獎者。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/WongTaiSinTemple.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://hd.stheadline.com/news/realtime/hk/2116692/%E5%8D%B3%E6%99%82-%E6%B8%AF%E8%81%9E-%E6%89%93%E9%87%9D%E5%84%AA%E6%83%A0-%E5%97%87%E8%89%B2%E5%9C%92%E9%BB%83%E5%A4%A7%E4%BB%99%E7%A5%A0%E6%8E%A8%E6%8A%BD%E7%8D%8E-%E7%8D%8E%E5%93%81%E5%8C%85%E6%8B%AC%E9%BB%83%E5%A4%A7%E4%BB%99%E5%B8%AB%E9%87%91%E8%BA%AB%E7%A5%9E%E5%83%8F','_blank')">公報!</button></a>
                    </div>
                </label>
                
                     <input type="checkbox" id="VisionFinance" name="VisionFinance" value="VisionFinance"/>
                <label class="checkbox-overlay" for="VisionFinance">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 睿智金融集團 - 實業環境股票大抽獎 </h3>
                            <h4>
                                參加抽獎有機會獲得：上海實業環境控股有限公司 (香港股票代號：807) 總值港幣約150萬元，共120 萬手，名額 15 名，每位得獎者將可獲8萬股)
獎品價值以6月15日收市價計算。
參加者須於9 月 1 日或之前年滿18歲，持有有效香港永久居民身份證，且在香港接種兩劑新冠疫苗。
抽獎登記日期於7月1日開始， 9月1日晚上11時59分結束。
抽獎將於9月17日進行，結果將於9月24日於星島日報及The Standard刊登。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/Vision_Finance_Group.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('http://www.vfg.hk/article.php?lang=gb2312&action=view&article_id=1799&fbclid=IwAR11NLGhxDVsVw6J2KuAVJyHj1WSoGyeKQl-QxQ3MalDfipjhdHHU7X8NUk','_blank')">公報!</button></a>
                    </div>
                </label>
                
			<input type="checkbox" id="HKChanmeimei" name="HKChanmeimei" value="HKChanmeimei"/>
                <label class="checkbox-overlay" for="HKChanmeimei">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 真滋味 - 魚粉大抽獎 </h3>
                            <h4>
                                參加抽獎即有機會獲得：5萬瓶大地牙鮮魚粉，總值港幣200萬元。
參加者須於8月31日或之前年滿18歲，持有有效香港永久居民身份證，且在香港接種兩劑新冠疫苗。
抽獎登記於7月8日上午9時至8月31日下午11時59分結束。
抽獎結果將於9月30日於公司網頁公佈，並刊登於經濟日報及香港虎報。

                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/HKChanmeimei.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://www.ccm73.com.hk/pages/vaclottery?fbclid=IwAR1pNyehd6qAkiXlam2SGocX4YunLgpy6GHedW37tolVKfI-ERfqiAAX2y0','_blank')">報名!</button></a>
                    </div>
                </label>

			
			    <input type="checkbox" id="HKGC" name="HKGC" value="HKGC" />
                <label class="checkbox-overlay" for="HKGC">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3>香港總商會 - 頭獎3部平治C系列房車</h3>
                            <h4>
                                香港總商會推出疫苗大抽獎，送出總值超過3000萬元的獎品，包括3部平治C系列房車。總商會大抽獎將於7月2日起接受登記，並在7月22日開始首輪抽獎，以每兩周抽獎一次直至9月底，期間一共舉行7輪抽獎，預計得獎者超過5000人。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/1200px-HKGCC_logo.svg.png" /> =
                        </div>
                        <div class = 'flexlinkbutton'>
                        <a><button type="button" class="linkbutton" onclick="window.open('https://www.hkgccluckydraw.com/tc/index.html','_blank')">報名!</button></a>
                        <a><button type="button" class="linkbutton" onclick="window.open('https://www.hkgccluckydraw.com/tc/index.html','_blank')">公佈!</button></a>
                        </div>
                    </div>
                </label>
                
                 <input type="checkbox" id="taikoo" name="taikoo" value="taikoo"/>
                <label class="checkbox-overlay" for="taikoo">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 太古地產 - 幸運大抽獎 </h3>
                            <h4>
                                參加抽獎有機會獲得：10,000元商場現金劵，可於太古廣場、太古城中心或東薈城名店倉使用。
所有商場現金劵可於發出後一年內使用。
參加者須於2021年8月31日或之前香港接種兩劑新冠疫苗。
第四輪抽獎將於9月2日正午進行，並於9月1日晚上11時59分59秒截止登記。

                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/taikoo.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://www.pacificplace.com.hk/zh-hk/entertainment/happenings/vaccination-lucky-draw-jul2021','_blank')">公報!</button></a>
                    </div>
                </label>
                

         	    <input type="checkbox" id="Sun Hung Kai" name="Sun Hung Kai" value="Sun Hung Kai"/>
                <label class="checkbox-overlay" for="Sun Hung Kai">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 新鴻基地產-公眾大抽獎 </h3>
                            <h4>
                                抽獎活動於7月1日至8月31日舉行參加抽獎有機會獲得：iPhone 12 128GB 及 SmarTone 5G SIM only 月費計劃、新地旗下酒店宅度假住宿套票、賺取The Point by SHKP商場綜合會員計劃375,000積分、新地旗下酒店港幣1,000元餐飲現金券、港幣1000元一田現金禮券
 參加者登記抽獎活動時需年滿18歲，並已完成接種兩劑新冠疫苗的香港永久及非永久居⺠均可參加。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/Sun Hung Kai.png" alt="" />
                        </div>
						<div class = 'flexlinkbutton'>
						
                        <a><button type="button" class="linkbutton" onclick="window.open('https://daydaydraw.shkp.com/','_blank')">報名!</button></a>
                        <a><button type="button" class="linkbutton" onclick="window.open('https://daydaydraw.shkp.com/publicWinnerList','_blank')">公佈!</button></a>
                        </div>
                    </div>
                </label>
                
      <input type="checkbox" id="ida" name="ida" value="ida"/>
                <label class="checkbox-overlay" for="ida">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 稻苗學會 - 疫苗接種大抽獎 </h3>
                            <h4>
                                參加抽獎有機會獲得：6人海參花膠鮑魚盆菜、多個餐飲消費劵組合、金牌蠔皇至尊鮑魚拼花膠560克、紅燒元貝至尊鮑魚560克、
Drip Coffee Set、掛耳滴漏咖啡(深度烘焙) 4 盒、香港情懷港式西冷紅茶掛耳濾包 + 黑白淡奶12杯裝套裝
參加者須持有有效香港居民身份證，並於8月31日或之前香港接種兩劑新冠疫苗。
抽獎登記將於6月29日開始，8月31日結束。抽獎於9月3日進行，並於9月4日公佈結果。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/ida.png" alt="" />
                        </div>
                        <div class = 'flexlinkbutton'>
                        
                        <a><button type="button" class="linkbutton" onclick="window.open('https://docs.google.com/forms/d/e/1FAIpQLSffhuqbclDGL0SE-Ns-8Q5vCtTqgOy8rctmWwtMMta_mXtTQQ/viewform?fbclid=IwAR0xJOqcW6CjpeQWfDvThvtHKW99w8xoAvodu4TjG4OUvctWWr7fmvF6u5Q','_blank')">報名!</button></a>
                        <a><button type="button" class="linkbutton" onclick="window.open('https://drive.google.com/file/d/1EwR7VL9NUDm_-llojken3KRMEdQWTvR0/view?fbclid=IwAR2c2mmAGXwnEw7ljlcXrkEkig062PtvihY661Pq0z_glPZ5O9BMyhdGyn8','_blank')">公佈!</button></a>
                        </div>
                    </div>
                </label>
                

           
                
                                
			<div class="active_prizes" style ="margin-top:50px;" id = "announced">
                <h1 class = "active_prize_header">未開始申請的抽獎</h1>
            </div>
            
            <input type="checkbox" id="wingon" name="wingon" value="wingon"/>
                <label class="checkbox-overlay" for="wingon">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 永安百貨 - 180萬元永安禮卷大抽獎 </h3>
                            <h4>
                                凡於任何部門 / 永安網店累積購物每滿淨值200元，
憑當日永安百貨貨品發票即可獲抽獎券乙張，投進抽獎券收集箱即可參加每周抽獎，
參加抽獎有機會獲得：豐富永安禮券，大獎更可獲1萬元永安禮券。
已在香港完成接種兩劑疫苗之合資格參加者才有機會獲得大獎、二獎及三獎，
僅接種一劑疫苗者則僅有機會獲得特別獎，即200元永安禮券。
參加者須已打兩針並購物滿指定金額，即可參加。
活動日期：8月2日至11月7日期間。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/wingon.png" alt="" style = "width:200px;" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://hk.jobsdb.com/hk/en/job/job-100003008573878','_blank')">公報!</button></a>
                    </div>
                </label>
            
               <input type="checkbox" id="manulife" name="manulife" value="manulife"/>
                <label class="checkbox-overlay" for="manulife">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 宏利公積金 - 單位大抽獎 </h3>
                            <h4>
                                宏利抽獎活動3個抽獎池分別覆蓋﹕
持有適用宏利強積金帳戶的現有成員、於指定時間供款至宏利個人帳戶或可扣稅自願性供款帳戶的新舊成員、於指定時間每月作出指定供款至可扣稅自願性供款的宏利強積金新舊成員。
抽獎獎項相同，分別提供85份獎品，頭獎是紅利單位回贈價值高達85萬港元。
所有合資格成員，只要在今年8月底前接種最少一劑新冠疫苗，並於今年10月底前完成接種第二劑。
即可於8月16日至9月30日期間，透過網上登記參與抽獎。


                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/manulife.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://inews.hket.com/article/3012851?lcc=an','_blank')">報名!</button></a>
                    </div>
                </label>
                
                <input type="checkbox" id="yfinsurance" name="yfinsurance" value="yfinsurance"/>
                <label class="checkbox-overlay" for="yfinsurance">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 萬通保險 - 旅遊禮卷大抽獎 </h3>
                            <h4>
                                參加抽獎有機會獲得：價值3萬元至10萬元的旅遊禮券
參加者須持有有效香港居民身份證，並已接種兩劑新冠疫苗。
再於萬通保險的YFLink服務及資訊應用程式綁定保單，即可參加。
抽獎登記日期為8月1日至9月30日
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/yfinsurance.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://inews.hket.com/article/3005320?lcc=an','_blank')">報名!</button></a>
                    </div>
                </label>
                
            
         		<input type="checkbox" id="hkairport" name="hkairport" value="hkairport"/>
                <label class="checkbox-overlay" for="hkairport">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 機管局 - 機票抽獎送贈計劃 </h3>
                            <h4>
                                參加抽獎即有機會獲得：機票一張。登記抽獎活動時需年滿18歲，並已完成接種兩劑新冠疫苗的香港永久居⺠。抽獎送贈計劃將於9月底截止，符合的市民須於截止日期前報名參加
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/Airport_Authority_Hong_Kong.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://www.hongkongairport.com/tc/','_blank')">報名!</button></a>
                    </div>
                </label>

             
				              <input type="checkbox" id="dorsett" name="dorsett" value="dorsett"/>
                <label class="checkbox-overlay" for="dorsett">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 帝盛酒店 - 種種有賞 </h3>
                            <h4>
                                參加者抽獎即有機會獲得：合共1000晚價值120萬元的免費酒店房間住宿，其他參與奬賞計劃的酒店包括中國內地、倫敦、馬來西亞和新加坡的帝盛酒店，以及帝盛酒店品牌旗下首個度假村概念酒店 —  Dorsett Gold Coast 黃金海岸帝盛酒店。
參加者須於8月31日或之前已年滿18歲；及持有有效中華人民共和國香港特別行政區永久性居民身份證的香港永久居民；或持有有效香港居民身份證的香港非永久居民，且完成接種新冠疫苗。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/dorsett.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://inews.hket.com/article/2979472/?lcc=an','_blank')">公佈!</button></a>
                    </div>
                </label>

                 <input type="checkbox" id="emperor" name="emperor" value="emperor"/>
                <label class="checkbox-overlay" for="emperor">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 英皇集團 - 戲票大抽獎 </h3>
                            <h4>
                                參加抽獎即有機會獲得：20000張戲票，供全港英皇戲院通用。
參加者須於8月31日或之前年滿18歲並在及持有有效中華人民共和國香港特別行政區永久性居民身份證的香港永久居民；或持有有效香港居民身份證的香港非永久居民，且完成種兩劑新冠疫苗（包括集團員工）。
抽獎登記於8月31日截止。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/emperor.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://inews.hket.com/article/2976618/?lcc=an','_blank')">公佈!</button></a>
                    </div>
                </label>


                  <input type="checkbox" id="chanfund" name="chanfund" value="chanfund"/>
                <label class="checkbox-overlay" for="chanfund">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 陳永棋/陳瑞球慈善基金 -  有種有賞 </h3>
                            <h4>
                                參加抽獎即有機會獲得：港幣30萬、70萬、100萬元的預付卡簽賬額、20個金吊嘴、10萬元K dollars消費獎賞、莎莎國際10萬元禮品等豐富獎品。
參加者須為登記前年滿18歲，並持有有效香港居民身份證的香港永久居民或非永久居民，且於已完成接種兩劑新冠疫苗。
參加者可於登記期透過「有種‧有賞」疫苗獎賞計劃的流動應用程式，提交相關資料。
此外，合資格市民在7月18日起至9月18日內，到參與計劃的商戶和餐廳單次消費滿港幣100元，並上載收據至流動應用程式，即可額外贏取1次參加簽賬額以外獎品的抽獎機會。
首輪抽獎將於8月31日進行，終極大抽獎將於9月30日進行。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/chanfund.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://topick.hket.com/article/2977414/%E3%80%90%E6%89%93%E9%87%9D%E5%84%AA%E6%83%A0%E3%80%91%E9%99%B3%E6%B0%B8%E6%A3%8B%E9%99%B3%E7%91%9E%E7%90%83%E6%85%88%E5%96%84%E5%9F%BA%E9%87%91%E5%90%91%E5%BB%A0%E5%95%86%E6%9C%83%E6%8D%90100%E8%90%AC%E5%85%83%E4%BD%9C%E7%96%AB%E8%8B%97%E6%8A%BD%E7%8D%8E%E3%80%80%E5%B7%B2%E6%8E%A5%E7%A8%AE%E8%80%85%E4%BA%A6%E6%9C%89%E5%90%8D%E7%89%8C%E6%9C%8D%E8%A3%9D%E8%B3%BC%E7%89%A9%E5%88%B8','_blank')">報名!</button></a>
                    </div>
                </label>

                
                <input type="checkbox" id="manulife_insurance" name="manulife_insurance" value="manulife_insurance"/>
                <label class="checkbox-overlay" for="manulife_insurance">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 宏利香港保險 - 保費代用卷抽獎 </h3>
                            <h4>
                                參加抽獎即有機會獲得：保費代用卷以支付新購或現有宏利香港保單保費
所有卷均適用於所有宏利人壽、健康及儲蓄產品。接種疫苗副作用免費保障保障期至今年12月31日
參加者須9月12日或之前年滿18歲，持有有效身分證，並已8於月31日或之前及9月23日或之前分別完成接種第一劑及第二劑新冠疫苗。
登記於8月1日上午12時正開始，至9月12日下午 11時59分截止。
抽獎將於9月24日進行，並於9月30日透過英文虎報、星島日報及抽獎網站公佈結果。亦會透過電話、短訊或電郵通知得獎者。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/manulife.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://inews.hket.com/article/2980462?lcc=an','_blank')">報名!</button></a>
                    </div>
                </label>



                <input type="checkbox" id="LINK" name="LINK" value="LINK" />
                <label class="checkbox-overlay" for="LINK">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3>領展 - 5,000元中式酒樓餐飲現金券</h3>
                            <h4>獎品有400份5,000元中式酒樓餐飲現金券及小型家庭電器，總值逾200萬元。</h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/LINK.png" alt="" style="width:125px"/>
                        </div>
                        <a>
                            <button type="button" class="linkbutton" onclick="window.open('https://www.linkreit.com/tc/media/news/get-vaccinated-and-get-your-lucky-draw-link-works-with-you-to-bring-life-back-to-normal-145','_blank')">
                                公報!
                            </button>
                        </a>
                    </div>
                </label>

                
          <input type="checkbox" id="Prudential" name="Prudential" value="Prudential"/>
                <label class="checkbox-overlay" for="Prudential">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 英國保誠 - 疫苗接種大抽獎 </h3>
                            <h4>
                                 參加抽獎有機會獲得保險計劃10年保障：保誠自願醫保尚賓計劃，每年保障高達港幣12000000元、
保誠精選「旅遊樂」旅遊保障計劃 - 個人全年計劃，每次旅程之醫療費用及人身意外保障最高保障額達港幣1200000元，全年不限旅遊次數
抽獎需要透過Pulse健康應用程式登記
參加者須於9月15日或之前已年滿18歲，持有有效香港身份證，且完成接種至少一劑新冠疫苗。
抽獎將於9月27日進行，得獎名單將於10月6日刊登於保誠企業網站、星島日報及英文虎報。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/Prudential.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://www.prudential.com.hk/tc/promotion/covid-19-vaccination-lucky-draw/index.html','_blank')">公報!</button></a>
                    </div>
                </label>



                <input type="checkbox" id="greateagleholdings" name="greateagleholdings" value="greateagleholdings" />
                <label class="checkbox-overlay" for="greateagleholdings">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3>鷹君旗下酒店 - 送3000晚住宿及餐飲優惠</h3>
                            <h4>
                                鷹君公布，即日起至8月31日，旗下酒店及商場推行一連串消費優惠，香港朗廷酒店、香港康得思酒店及香港逸東酒店，將提供共3,000晚酒店房間及其住宿餐飲的半價優惠，予已完成接種兩劑疫苗並能出示相關証明的香港居民，先到先得。已接種兩劑疫苗的港人，到鷹君酒店的餐廳及明閣（灣仔）消費，亦可享八五折優惠。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/400px-GreatEagleHoldings_logo.svg.png" alt="" />
                        </div>
                        <a><button type="button" class="linkbutton" style="visibility: hidden;">公報!</button></a>
                    </div>
                </label>




   <input type="checkbox" id="citic_group" name="citic_group" value="citic_group"/>
                <label class="checkbox-overlay" for="citic_group">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 中信銀行國際 (存款優惠) - 抗疫定存優惠 </h3>
                            <h4>
                                新舊客戶，親臨信銀國際任何一間分行
以新資金敘造1個月港元定期存款，即享1厘年利率優惠，起存額為1萬港元，上限為20萬港元。
優惠日期於6 月 1 日開始，9 月 30 日結束
參加者須接種兩劑疫苗。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/citic_group.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://www.cncbinternational.com/_document/about-us/media-center/2021-05-31/tc/p210531.pdf?fbclid=IwAR2AdScOZ-P26GkTvLn4w5ZnMunb8GsYhEWQBPY2Mha9YXUXk2kJr6no7_U','_blank')">公報!</button></a>
                    </div>
                </label>


              



                <input type="checkbox" id="marriott" name="marriott" value="marriott" />
                <label class="checkbox-overlay" for="marriott">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3>萬豪 - 送出共500萬積分換全球酒店住宿</h3>
                            <h4> 萬豪國際集團公布，將會以抽獎形式送出500萬積分予「Marriott Bonvoy萬豪旅享家」香港會員，10位得獎者各人將可獲得50萬積分，以兌換酒店體驗。抽獎活動的參加方法及詳情稍後公布。

                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/marriott.png" alt="" />
                        </div>
                        <a><button type="button" class="linkbutton" style="visibility: hidden;">公報!</button></a>
                    </div>
                </label>


         		<input type="checkbox" id="jardines" name="jardines" value="jardines"/>
                <label class="checkbox-overlay" for="jardines">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 怡和集團 - 禮品大抽獎 </h3>
                            <h4>
                                參加抽獎有機會獲得：獎品總值港幣1,000萬，包括：三輛平治房車，以及適用於中環置地廣場、文華東方酒店、美心集團、惠康、萬寧、宜家家居、必勝客和肯德基等的購物、餐飲和住宿禮券。抽獎活動將於7月至9月期間舉行。參加者登記抽獎活動時需年滿18歲，並已完成接種兩劑新冠疫苗的香港永久居⺠。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/jardines.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://inews.hket.com/article/2980760/?lcc=an','_blank')">報名!</button></a>
                    </div>
                </label>      
             

        <input type="checkbox" id="mtr" name="mtr" value="mtr"/>
                <label class="checkbox-overlay" for="mtr">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 港鐵 - 車程優惠大抽獎 </h3>
                            <h4>
                                參加抽獎有機會獲得：500張全年車票，總值高達約港幣1,000萬元。
車票持有人可於一年內無限次乘搭港鐵本地車程，機場快綫、 港鐵接駁巴士、往來羅湖及落馬洲的車程及東鐵綫頭等車費除外。

                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/mtr.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://topick.hket.com/article/2970848/%E3%80%90%E7%96%AB%E8%8B%97%E6%8E%A5%E7%A8%AE%E3%80%91%E6%B8%AF%E9%90%B5%E5%B0%87%E9%80%81%E5%87%BA500%E5%BC%B5%E5%B9%B4%E7%A5%A8%E7%B8%BD%E5%80%BC1000%E8%90%AC%E5%85%83%E3%80%80%E9%BC%93%E5%8B%B5%E5%B8%82%E6%B0%91%E6%8E%A5%E7%A8%AE%E7%96%AB%E8%8B%97','_blank')">公報!</button></a>
                    </div>
                </label>


        	    <input type="checkbox" id="newworld" name="newworld" value="newworld"/>
                <label class="checkbox-overlay" for="newworld">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 新世界發展 - 疫苗津貼計劃 </h3>
                            <h4>
                                推出首輪關顧基層人士接種疫苗的津貼計劃：
                                作為疫苗接種薪金或健康諮詢的津貼，每人均可獲港幣1,000資助
                                津貼預計由六月底至八月底陸續分批發放，受惠者須向有關非牟利機構出示已接種兩劑疫苗的紀錄。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/newworld.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://www.nwd.com.hk/zh-hans/content/%E6%96%B0%E4%B8%96%E7%95%8C%E6%96%A5%E4%B8%80%E5%8D%83%E4%B8%87%E5%85%83%E5%A4%A5%E9%9D%9E%E7%89%9F%E5%88%A9%E6%9C%BA%E6%9E%84%E5%8A%A9%E5%9F%BA%E5%B1%82%E6%8A%97%E7%96%AB-%E9%A6%96%E9%98%B6%E6%AE%B5%E6%8F%90%E4%BE%9B1000%E5%85%83%E6%8E%A5%E7%A7%8D%E7%96%AB%E8%8B%97%E8%B5%84%E5%8A%A9-%E6%83%A0%E5%8F%8A5000%E4%BA%BA','_blank')">公報!</button></a>
                    </div>
                </label>
                


            
			<div class="active_prizes" style ="margin-top:50px;" id ="discounts">
                <h1 class = "active_prize_header">禮品優惠</h1>
            </div>
            
          
            
            <input type="checkbox" id="citic" name="citic" value="citic"/>
                <label class="checkbox-overlay" for="citic">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 信銀國際 - 抗疫定存優惠 </h3>
                            <h4>
                                新舊客戶，親臨信銀國際任何一間分行
以新資金敘造1個月港元定期存款，即享1厘年利率優惠，起存額為1萬港元，上限為20萬港元。
優惠日期於6 月 1 日開始，9 月 30 日結束
參加者須接種兩劑疫苗。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/citic.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://wealth.hket.com/article/2972704/%E3%80%90%E6%89%93%E9%87%9D%E5%8A%A0%E6%81%AF%E3%80%91%E4%BF%A1%E9%8A%80%E6%8A%97%E7%96%AB%E5%AE%9A%E5%AD%98%E5%84%AA%E6%83%A0%E3%80%80%E6%89%93%E9%BD%8A%E5%85%A9%E9%87%9D%E9%80%A01%E5%80%8B%E6%9C%88%E6%B8%AF%E5%85%83%E5%AE%9A%E5%AD%98%E4%BA%AB1%E5%8E%98%E5%B9%B4%E6%81%AF','_blank')">報名!</button></a>
                    </div>
                </label>
                
               <input type="checkbox" id="HangLung" name="HangLung" value="HangLung"/>
                <label class="checkbox-overlay" for="HangLung">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 恆隆地產 - 消費禮卷派發 </h3>
                            <h4>
                                市民須於今年9月底前完成接種兩劑疫苗，並於恒隆商場包括Fashion Walk、雅蘭中心、荷李活商業中心、家樂坊、淘大商場、康怡廣場及山頂廣場單一消費滿港幣100元，即可獲發總值港幣200元的恒隆電子購物禮券。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/500px-Hang_Lung_Properties.svg.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://topick.hket.com/article/2974685?lcc=at','_blank')">報名!</button></a>
                    </div>
                </label>

                <input type="checkbox" id="AIA" name="AIA" value="AIA" />
                <label class="checkbox-overlay" for="AIA">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3>友邦香港 - AIA「智遊保」合共200 港元保費折扣優惠</h3>
                            <h4>
                                友邦香港推出接種「2019冠狀病毒病」疫苗獎勵計劃，送出合共200港元AIA「智遊保」保費折扣優惠，包括即時100港元的 AIA「智遊保」保費折扣，以及適用於下一次投保AIA「智遊保」計劃時的100 港元保費折扣。此優惠數量有限，並為先到先得，送完即止。友邦香港接種「2019冠狀病毒病」疫苗獎勵計劃現已接受登記至2021 年9 月 30 日。於2021年9月30日前投保「 智遊保」並於申請時輸入由香港特別行政區政府衞生署發出的「2019冠狀病毒病疫苗接種紀錄」中所示的參考編號即享上述優惠。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/AIA_logo.png" alt="" style="width:125px" />
                        </div>
                        <a><button type="button" class="linkbutton" onclick="window.open('https://inews.hket.com/article/2985330?lcc=an','_blank')">報名!</button></a>
                    </div>
                </label>         

                <input type="checkbox" id="getnice_financial" name="getnice_financial" value="getnice_financial" />
                <label class="checkbox-overlay" for="getnice_financial">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3>結好證券 - 抽新股免息200萬九成孖展額度</h3>
                            <h4>
                                 結好證券推出打疫苗大獎賞，送出抽新股免息200萬九成孖展額度，名額不限。結好證券打疫苗大獎賞現已接受登記至2021年9月1日。參加者需於2021年9月1日前成功開啟結好證券帳戶，並已在香港接種最少一劑新冠疫苗。參加辦法請參閱條款細則。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/getnice_financial.png" alt="" style="width:125px" />
                        </div>
                        <a><button type="button" class="linkbutton" onclick="window.open('https://www.facebook.com/GetNiceSecuritiesLimited/photos/a.120782909927450/190011056337968','_blank')">報名!</button></a>
                    </div>
                </label> 

                <input type="checkbox" id="hkwatertaxi" name="hkwatertaxi" value="hkwatertaxi" />
                <label class="checkbox-overlay" for="hkwatertaxi">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3>香港水上的士 - 「水上的士」全程船票</h3>
                            <h4>
                                 香港水上的士推出疫苗接種鼓勵計劃，送出「水上的士」全程船票，包括2021年7月1號晚上7時20分特別航班全程船票60張及其他於2021年7月1日至2021年9月30日每航班送出全程船票20張。香港水上的士疫苗接種鼓勵計劃現已接受登記預約未來四個航班的船票，且須於航班開航前一天14:00前完成登記，先到先得。參加者必須於登記參加活動時，已在香港接種兩劑新冠疫苗，並持有有效香港居民身份證。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/hkwatertaxi.png" alt="" style="width:200px" />
                        </div>
                        <a><button type="button" class="linkbutton" onclick="window.open('https://www.facebook.com/Hong-Kong-Water-Taxi-107420477630138/?ref=py_c','_blank')">報名!</button></a>
                    </div>
                </label> 

                <input type="checkbox" id="1_win_securities" name="1_win_securities" value="1_win_securities" />
                <label class="checkbox-overlay" for="1_win_securities">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3>一盈證券 - 三個月免佣港股交易服務獎賞</h3>
                            <h4>
                                 一盈證券推出疫苗獎賞計劃，送出三個月免佣港股交易服務獎賞，不限交易次數，佣金回贈上限為港幣一萬元整，名額不限。一盈證券疫苗獎賞計劃現已接受登記至2021年09月30日。參加者必須年滿18歲，已接種至少一劑新冠疫苗之人士（香港客戶和國內客戶均適用此優惠），並於2021年09月30日前成功完成新開戶程序之客人，新客戶指於2021年06月04日00:00前未曾開通一盈證券賬戶的人士。參加辦法請參閱條款細則。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/1_win_securities.png" alt="" style="width:175px" />
                        </div>
                        <a><button type="button" class="linkbutton" onclick="window.open('https://www.iwinsec.com/#/home/zh_TW','_blank')">報名!</button></a>
                    </div>
                </label> 

                <input type="checkbox" id="KWG_Group" name="KWG_Group" value="KWG_Group" />
                <label class="checkbox-overlay" for="KWG_Group">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3>合景泰富龍湖集團 - 尚‧珒溋1%樓價折扣優惠</h3>
                            <h4>
                                合景泰富龍湖集團推出已接種新冠疫苗人士優惠，買家購入龍湖（0960）與合景泰富（1813）旗下新盤啟德 尚‧珒溋之樓盤時，可額外獲得1%的樓價折扣優惠。上述優惠適用於簽署臨時合約時，已於香港接種一劑或以上2019冠狀病毒病疫苗（新冠疫苗）的人士。若買家為公司客，則只需要其中一位董事為「合資格已接種新冠疫苗人士」。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/upper_river_bank.png" alt="" style="width:150px" />
                        </div>
                        <a><button type="button" class="linkbutton" onclick="window.open('https://inews.hket.com/article/2976341/?lcc=an','_blank')">報名!</button></a>
                    </div>
                </label> 

               
                </label> 

                


                <input type="checkbox" id="shenshuibu" name="shenshuibu" value="shenshuibu"/>
                <label class="checkbox-overlay" for="shenshuibu">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 深水埗各界慶典委員會 - 針強疫苗大抽獎 </h3>
                            <h4>
                                7月1日起開放登記領取防疫禮物包，
參加者須於須年滿18歲或以上，持有有效香港永久性居民身份證的香港永久性居民，且於7月1日起接種新冠疫苗(包括第一針及第二針在7月1日後接種)，
登記日期於8月1日早上9時30分 至 8月21日晚上11時59分。
成功登記人士將於9月上旬收到手機短訊通知。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/shenshuibu.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://inews.hket.com/article/2984928/?lcc=an','_blank')">報名!</button></a>
                    </div>
                </label>
                
                <input type="checkbox" id="yata" name="yata" value="yata"/>
                <label class="checkbox-overlay" for="yata">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 一田百貨- 【期間限定】疫苗優惠日 </h3>
                            <h4>
                                「疫苗優惠日」於7月8日起至8月31日推出。
 已接種疫苗的市民逢星期四到一田購物，付款前出示針卡證明，便可享全單95折優惠。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/yata.png" alt="" style="width:300px; margin-top:10px;" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://inews.hket.com/article/2972907/?lcc=an','_blank')">公報</button></a>
                    </div>
                </label>


                <input type="checkbox" id="langhamplace" name="langhamplace" value="langhamplace"/>
                <label class="checkbox-overlay" for="langhamplace">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 朗豪坊 - 消費百分百奬賞 </h3>
                            <h4>
                                參加抽獎即可獲贈：港幣100元指定商戶的現金券1張。
參加者須為LP CLUB會員於商場即日消費滿HK$100或以上，並出示已完成接種兩劑新冠疫苗的注射紀錄
獎賞日期於6月1日至8月31日期間進行。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/langhamplace.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://www.langhamplace.com.hk/zh-hk/happenings/46?ypos=403','_blank')">報名!</button></a>
                    </div>
                </label>



	        <div class="active_prizes" style ="margin-top:50px;">
                <h1 class = "active_prize_header">已截止的抽獎及禮品優惠</h1>
            </div>
            
            
            <input type="checkbox" id="disneyland" name="disneyland" value="disneyland" />
            <label class="checkbox-overlay" for="disneyland">
                <div class="flex-grid-app-explain">
                    <div class="col text" data-aos="fade-right">
                        <h3>香港迪士尼樂園 - 送250元禮品包</h3>
                        <h4>
                            香港迪士尼樂園表示，6月2日至6月28日期間，所有醫院管理局員工及已注射至少一劑新冠疫苗的市民，於網上登記成為MyDisney會員後，可於樂園內的指定商品店鋪免費領取價值約250元的禮品包一個，每日名額約1,000份，換完即止。
                        </h4>
                    </div>
                    <div class="col col-image" data-aos="fade-left">
                        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                            <path
                                fill="#F1C21B"
                                d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                transform="translate(100 100)"
                            />
                        </svg>

                        <img src="./images/vaccine/220px-Hong_Kong_Disneyland.svg.png" alt="" />
                    </div>

                    <a><button type="button" class="linkbutton" onclick="window.open('https://www.hongkongdisneyland.com/zh-hk/mydisney-fans/','_blank')">報名!</button></a>
                </div>
            </label>
            
            <input type="checkbox" id="oceanpark" name="oceanpark" value="oceanpark" />
                <label class="checkbox-overlay" for="oceanpark">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3>海洋公園 - 優惠券總值超過$200</h3>
                            <h4>
                                由即日起至2021年6月30日，已接種最少一劑疫苗的香港居民，在海洋公園票務部出示疫苗接種紀錄，即可獲贈一套園內優惠券，總值超過港幣$200，包括灣景餐廳指定主菜買一送一、指定小食亭「司華力腸配樽裝飲品套餐」買一送一、攤位遊戲買$50送$50等優惠。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/ocean park.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://www.oceanpark.com.hk/tc/tickets-and-offers/offers/special-offer-for-vaccinated-hong-kong-residents-offer-valid-until-30-june','_blank')">報名!</button></a>
                    </div>
                </label>
                
                
			    <input type="checkbox" id="cks" name="cks" value="cks" />
                <label class="checkbox-overlay" for="cks">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 富裕小輪 - 7月至9月送維港遊「水上的士」全程船票 </h3>
                            <h4> 為進一步支持政府的「新冠疫苗接種計畫」，富裕小輪將於今年7月1日至今年9月30日期間推出「疫苗接種鼓勵計畫」，以先到先得形式，向已完成接種兩劑新冠疫苗的香港居民送出「水上的士」全程船票，包括今年7月1號晚上7時20分特別航班全程船票60張及其他時間航班全程船票20張。合資格人士可通過「水上的士」熱線電話2994 8155進行登記。
                                
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/cks.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://www.fortuneferry.com.hk/timetable.php','_blank')">報名!</button></a>
                    </div>
                </label>   
                
                
               
                <input type="checkbox" id="boclife" name="boclife" value="boclife" />
                <label class="checkbox-overlay" for="boclife">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 中銀人壽 - 10,000 份免費新冠疫苗接種前健康評估 （已滿已截止）</h3>
                            <h4> 中銀人壽將與醫思集團聯手，向全港市民免費送出 10,000 份「新冠疫苗接種前健康評估」，讓市民接種前做足檢查，專業有效地合力提高香港的社區疫苗接種率，並保障市民的健康。
                                
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/boclife.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://echealthcare.com/zh/promo/bocl','_blank')">報名!</button></a>
                    </div>
                </label>

                <input type="checkbox" id="newway" name="newway" value="newway" />
                <label class="checkbox-overlay" for="newway">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> Neway - 免費唱K兩小時 </h3>
                            <h4> 已接種新冠疫苗的顧客即可免費唱K 2小時。
                                
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/newway.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://www.facebook.com/newaykaraokebox/photos/a.10150763951435797/10159421011435797','_blank')">報名!</button></a>
                    </div>
                </label>      
      

                <input type="checkbox" id="Pricerite" name="Pricerite" value="Pricerite" />
                <label class="checkbox-overlay" for="Pricerite">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 實惠-免費升級至VIP會籍同免除1.5萬元購物門檻 （已截止） </h3>
                            <h4> 實惠推出「打疫苗，免費升級VIP」活動，已接種疫苗的顧客於6月30日內消費，可免除1.5萬元的購物門檻，直接升級至VIP會籍。除了全年95折購物優惠，VIP會員可享送貨優惠及生日月份一次性85折等優惠。是次活動並不設限額，已接種最少一劑新冠疫苗的顧客可參與，凡出示疫苗接種紀錄。
                                
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/Pricerite.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://inews.hket.com/article/2972678/?lcc=an','_blank')">報名!</button></a>
                    </div>
                </label>     

                <input type="checkbox" id="MCL" name="MCL" value="MCL" />
                <label class="checkbox-overlay" for="MCL">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> MCL - 有機會換電影票 （已滿） </h3>
                            <h4> 填妥以下資料即有機會獲取你所選擇的電影換票證乙張。換票證數量有限，先報先得，送完即止。是次獎勵計劃受「條款及細則」約束。參加者(包括永久和非永久香港居民)只限登記一次。
                                
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/MCL.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://supporthk.mclcinema.com.hk/Home/Finished','_blank')">報名!</button></a>
                    </div>
                </label> 
                
                <input type="checkbox" id="HKL" name="HKL" value="HKL"/>
                <label class="checkbox-overlay" for="HKL">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 香港人壽 - 健康背包 </h3>
                            <h4>
                                參加者有機會獲得：每人一份健康背包，其中包括免費住院現金保障、免費意外死亡保障、海外專家第二醫療意見服務、 「MediEasy 門診服務」優惠及健康服務折扣優惠，價值高達港幣 112,000。活動將於  6 月 30 日上午 9 時正至 8月 31 日下午 11 時 59 分 (推廣期) 開放接受登記。「健康背包」之保障期將由登記日起至12 月 31 日止。合資格參加者必須於登記日期年齡介乎 18 至 65 歲，並已完成接種新冠疫苗之人士，整個登記過程必須於香港境內進行。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/HKL.png" alt="" />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://www.hklife.com.hk/filemanager/pressrelease/tc/1124/file/Healthcare_PR2_tc.pdf','_blank')">報名!</button></a>
                    </div>
                </label>


                <input type="checkbox" id="MCL" name="hkytcot" value="hkytcot" />
                <label class="checkbox-overlay" for="hkytcot">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3> 香港青苗粵劇團 - 免費戲票派發活動 </h3>
                            <h4> 香港青苗粵劇團推出免費戲票派發活動。已接種最少一劑2019年新型冠狀病毒疫苗的香港居民可贏取每人兩張7月1-3日香港青苗粵劇團的演出門票，名額限1000張，先到先得。
                                
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/hkytcot.png" alt="" style = "width:100px"/>
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('http://hkyoungtalent.com/news/vabonus.htm?fbclid=IwAR13htPMx-fMJV5pX52_c9BWgwfCxQF-WU1vrqJSyM9dEN5_YbZEAeLBs9E','_blank')">報名!</button></a>
                    </div>
                </label> 
                
                <input type="checkbox" id="DAB" name="DAB" value="DAB" />
                <label class="checkbox-overlay" for="DAB">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3>民建聯 - 100部華為Mate 40 Pro智能手機</h3>
                            <h4>
								民建聯推出民建聯29周年會慶大抽獎，送出100部華為Mate 40 Pro智能手機。民建聯29周年會慶大抽獎 現已接受登記至2021年7月9日，並在2021年7月10日抽獎。參加者必須年滿18歲，領獎時完成在香港接種兩劑新冠疫苗，並持有有效香港永久居民身份證。參加辦法請參閱條款細則。                          
								 </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/DAB.png" alt=""  />
                        </div>

                        <a><button type="button" class="linkbutton" onclick="window.open('https://www.facebook.com/dab.hk.1992/posts/2909497739290737','_blank')">報名!</button></a>
                    </div>
                </label>
                
                <input type="checkbox" id="hkbf" name="hkbf" value="hkbf" />
                <label class="checkbox-overlay" for="hkbf">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3>貿發局 - 香港書展門票</h3>
                            <h4>
                                貿發局將撥出3.5萬張香港書展門票，供接種至少一劑疫苗市民，屆時憑針卡、以先到先得形式免費入場，每天設有配額。另外，至少逾60間展商為已接種疫苗的市民提供各項優惠，包括購書折扣、現金優惠券、贈送書籍，以及禮品等。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/hkbf.png" alt="" style="width:150px" />
                        </div>
                        <a><button type="button" class="linkbutton" onclick="window.open('https://inews.hket.com/article/2990259/?lcc=an','_blank')">報名!</button></a>
                    </div>
                </label> 
                
                   <input type="checkbox" id="jingminlian" name="jingminlian" value="jingminlian" />
                <label class="checkbox-overlay" for="jingminlian">
                    <div class="flex-grid-app-explain">
                        <div class="col text" data-aos="fade-right">
                            <h3>經民聯&MCL院線 - 換取30000張免費戲票</h3>
                            <h4>
                                經民聯與MCL院線合作，共推出30000張戲票，讓已注射至少一劑新冠疫苗的市民換取。每名參加者只限登記1次，獎賞以先到先得形式送出，額滿即止。
                            </h4>
                        </div>
                        <div class="col col-image" data-aos="fade-left">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="svg-background">
                                <path
                                    fill="#F1C21B"
                                    d="M39.9,-65.7C54.1,-61,69.5,-55,78.7,-43.9C87.9,-32.7,90.8,-16.3,89.8,-0.6C88.7,15.1,83.6,30.2,76.2,44.4C68.8,58.6,59,71.9,45.9,78.3C32.8,84.6,16.4,84.1,2.6,79.6C-11.2,75.1,-22.5,66.8,-33,58.9C-43.5,51.1,-53.2,43.7,-61,34C-68.7,24.2,-74.5,12.1,-73.8,0.4C-73.2,-11.4,-66.2,-22.8,-59.9,-35C-53.6,-47.3,-48,-60.4,-38.2,-67.6C-28.3,-74.8,-14.2,-76.1,-0.6,-75C12.9,-73.9,25.8,-70.4,39.9,-65.7Z"
                                    transform="translate(100 100)"
                                />
                            </svg>

                            <img src="./images/vaccine/jingminlian.png" alt="" style="width:200px" />
                        </div>
                        <a><button type="button" class="linkbutton" onclick="window.open('https://hd.stheadline.com/news/realtime/hk/2102806/%E5%8D%B3%E6%99%82-%E6%B8%AF%E8%81%9E-%E6%89%93%E9%87%9D%E5%84%AA%E6%83%A0-%E7%B6%93%E6%B0%91%E8%81%AF%E9%80%813%E8%90%AC%E5%BC%B5%E6%88%B2%E7%A5%A8','_blank')">報名!</button></a>
                    </div>



                <input type="submit" name="Submit" value="Submit" class="form__button" />
            </div>
            
          

            <footer class="footer">
 
			<img src="<?php echo base_url('/images/logo.png'); ?>" class="logo" />
			
            </footer>

                  <script type="text/javascript" src="/js/Site_JS/Vaccine_list_of_companies/Vaccine_list_of_companies.js"></script>

            <script>
                AOS.init();
            </script>
        </div>
    </body>
</html>
