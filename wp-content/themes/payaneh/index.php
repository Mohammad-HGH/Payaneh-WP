<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package payaneh
 */

get_header();
?>

	




	<div id="bodyMain">
<!--bodyTopMain start -->
<div id="bodyTopMain">
<!--bodyTop start -->
<div id="bodyTop">
<!--bodyTopi start -->
<div id="bodyTopi">
<!--mid1 start -->
<div id="mid1">
<!--	<div style="height:18px; vertical-align:middle ">
	<g:plusone size="small" annotation="inline"></g:plusone>
	<script type="text/javascript">
	  window.___gcfg = {lang: 'fa'};
	
	  (function() {
		var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		po.src = 'https://apis.google.com/js/plusone.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	  })();
	</script>
	</div> -->
    <div class="linkBody">
        <div align="center">
            <div align="center">
                <div align="center" >
				<!--<input type="submit" value=""  onclick="document.location='https://payaneh.ir/fa/bus.php';" class="indexbutton"  style="cursor:pointer; background-image:url(images/bus.jpg); background-repeat:no-repeat; background-position:center; width:130px; height:90px; text-align:right"  >-->
				<a href="bus.html" target="_self"><img src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/bus.jpg" class="indexbutton"></a>
				&nbsp;
				<a href="bus2.html" target="_self"><img src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/bus2.jpg" class="indexbutton"></a>	
				<!--<input type="submit" value=""  onclick="document.location='https://payaneh.ir/fa/bus2.php';" class="indexbutton"  style="cursor:pointer; background-image:url(images/bus2.jpg); background-repeat:no-repeat; background-position:center; width:130px; height:90px; text-align:right"  >-->
				&nbsp;
				<a href="https://payaneh.ir/etrain/" target="_self"><img src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/train.jpg" class="indexbutton"></a>				
				<!--<input type="submit" value="" onclick="document.location='https://payaneh.ir/fa/train.php';" class="indexbutton"  style="cursor:pointer; background-image:url(images/train.jpg); background-repeat:no-repeat; background-position:center; width:130px; height:90px; text-align:right"  >-->
				
                </div>
				<br>
 				<div align="right">&quot; &nbsp;<a href="TicRefund.html"  style="color:#FFFFFF ;font-weight:normal;">استرداد بليط </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;&nbsp;<a href="search.html"  style="color:#FFFFFF ;font-weight:normal;">استعلام خريد قبلي </a></div>
				<br>
                <div align="right"><form name="search_company" method="get" action="#" onsubmit="return false;">
&quot;&nbsp;<label for="source_city">انتخاب شرکت </br></label>
                   &nbsp;&nbsp;<label for="source_city">استان</label>
                  
                <select  name="source_prov" id="source_prov" style="font-weight:normal; font-size:14px; font-family:Tahoma; width:130px;">
					<option value="0">انتخاب نمایید</option>					
                                <option value="26000000">  آذربایجان  شرقی</option>
                                <option value="57000000">  آذربایجان  غربی</option>
                                <option value="21000000">  اصفهان</option>
                                <option value="18000000"> البرز</option>
                                <option value="83000000">  ایلام</option>
                                <option value="11000000">  تهران</option>
                                <option value="33000000">  خراسان  جنوبی</option>
                                <option value="31000000">  خراسان  رضوی</option>
                                <option value="32000000">  خراسان  شمالی</option>
                                <option value="36000000">  خوزستان</option>
                                <option value="67000000">  زنجان</option>
                                <option value="87000000">  سمنان</option>
                                <option value="61000000">  سیستان  وبلوچستان</option>
                                <option value="41000000">  فارس</option>
                                <option value="81000000">  لرستان</option>
                                <option value="16000000">  مازندران</option>
                                <option value="51000000">  مرکزئ</option>
                                <option value="64000000">  هرمزگان</option>
                                <option value="75000000">  همدان</option>
                                <option value="77000000">  چهارمحال  وبختیارئ</option>
                                <option value="73000000">  کردستان</option>
                                <option value="45000000">  کرمان</option>
                                <option value="85000000">  کهگیلویه  وبویراحمد</option>
                                <option value="97000000">  گلستان</option>
                                <option value="54000000">  گیلان</option>
                                <option value="93000000">  یزد</option>
                                </select>
			<script language="javascript" type="text/javascript">
			function setCookie(cname, cvalue) {
				var d = new Date();
				d.setTime(d.getTime() + (360*24*60*60*1000));
				var expires = "expires="+ d.toUTCString();
				document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
			} 
			</script>			 
				&nbsp;شهر:&nbsp;<span name='AJAX_LAYERS' id='AJAX_LAYERS' style='visibility:visible;' > </span> <span name="myspanS" id="myspanS"></span>
				&nbsp;&nbsp;&nbsp;
                <input  type="image"  src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/search1.png" onclick="serach_company(document.search_company.source_city.value);setCookie('sCity',document.search_company.source_city.value);return false;" style="cursor:pointer; border:1 solid #999999; vertical-align:bottom"  />
				<img src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/ajax.gif"  style="visibility:hidden" id="M1" name="M1">				
                </form>
				
            </div>
            </div>
            <div id="search_company_list" style="width:400px ">
                        
            </div>
        </div>
        <br class="spacer" />
    </div>
</div>
<!--mid1 end -->
<!--left1 start -->
<div id="left1">
<table border="0" cellpadding="0" cellspacing="0" width="90%" >
<tr>
<td align="center"  valign="top">
	 <hr><span style="font-size:12">نماد اعتماد</span><hr>
	<a target="_blank" href="https://trustseal.enamad.ir/?id=43542&amp;Code=r4zRYXgVBrzLeFJXlZeG"><img src="https://trustseal.enamad.ir/logo.aspx?id=43542&amp;Code=r4zRYXgVBrzLeFJXlZeG" alt="" style="cursor:pointer" id="r4zRYXgVBrzLeFJXlZeG" ></a>
</td>
<td align="center" nowrap></td>
<td width="50%" align="center"  valign="top">
<hr><span style="font-size:12px">نماد ساماندهی</span><hr>
	<img id='rgvjsizprgvjrgvjoeuk' style='cursor:pointer' onclick='window.open("https://logo.samandehi.ir/Verify.aspx?id=39338&amp;p=xlaopfvlxlaoxlaomcsi", "Popup","toolbar=no, scrollbars=no, location=no, statusbar=no, menubar=no, resizable=0, width=450, height=630, top=30")' alt='logo-samandehi' src='<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/samandehi-logo.png'/>
</td>
</tr>
<tr>
<td align="right" valign="top" nowrap  >
    <hr><span style="font-size:12" >اخبار سایت</span><hr>
	<iframe id="NewsWindow" src="news_win.html" width="95%" height="350px" marginwidth="0" marginheight="0" frameborder="0" scrolling="no" ></iframe>

	
	<div align="left" style="width:100px "><hr><a href="news_all.html" >مشاهده همه اخبار</a></div>
	</td>
<td align="center">&nbsp;</td>
<td align="center" valign="top">
	<hr>
	<span style="font-size:12">امروز</span>	<hr>
		<span style="font-size:12px">پنجشنبه&nbsp;22&nbsp;اردیبهشت&nbsp;1401</span><br><br>
   <hr><span style="font-size:12">پروانه فعالیت</span><hr>
    <div align="center"><a href="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/parvaneh.jpg" target="_blank"><img src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/eanjoman.png" border="0" width="80%" height="80%"><br><br></a></div>
<img src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/logo-etehadieh.png" alt="" onclick="window.open('https://ecunion.ir/verify/payaneh.ir?token=40126905acf0232abc6a', 'Popup','toolbar=no, location=no, statusbar=no, menubar=no, scrollbars=1, resizable=0, width=580, height=600, top=30')" style="cursor:pointer"> 
  </td>
</tr>
<tr>
<td  align="right" valign="top" nowrap>
    <hr><span style="font-size:12">خرید بلیط از شرکتهای مسافربری</span><hr>
	<table border="0" cellpadding="0" cellspacing="0">
        <tr><td nowrap class='link4'>ایران پیما تعاونی 1</td>
				<td align=left><a class='link4' target='_blank' href='http://iranpeyma.info/' target='_blank'><b>iranpeyma.info</b></a></td></tr><tr><td nowrap class='link4'>همسفر</td>
				<td align=left><a class='link4' target='_blank' href='http://hamsafarco.ir/' target='_blank'><b>hamsafarco.ir</b></a></td></tr><tr><td nowrap class='link4'> ترابربی تا تعاونی 15</td>
				<td align=left><a class='link4' target='_blank' href='http://t15.ir/' target='_blank'><b>t15.ir</b></a></td></tr><tr><td nowrap class='link4'>آريا سفر تعاونی 11</td>
				<td align=left><a class='link4' target='_blank' href='http://ariasafar.ir/' target='_blank'><b>ariasafar.ir</b></a></td></tr><tr><td nowrap class='link4'>گیتی پیما</td>
				<td align=left><a class='link4' target='_blank' href='http://gitipeyma.org/' target='_blank'><b>gitipeyma.org</b></a></td></tr><tr><td nowrap class='link4'>پی ام تی تعاونی 2</td>
				<td align=left><a class='link4' target='_blank' href='http://pmtco.ir/' target='_blank'><b>pmtco.ir</b></a></td></tr><tr><td nowrap class='link4'>لوان نور تعاونی 8</td>
				<td align=left><a class='link4' target='_blank' href='http://t8lavannor.ir/' target='_blank'><b>t8lavannor.ir</b></a></td></tr><tr><td nowrap class='link4'>سیروسفر </td>
				<td align=left><a class='link4' target='_blank' href='http://seirosafar.info/' target='_blank'><b>seirosafar.info</b></a></td></tr><tr><td nowrap class='link4'>مارال سیر تعاونی 10</td>
				<td align=left><a class='link4' target='_blank' href='http://t10.ir/' target='_blank'><b>t10.ir</b></a></td></tr><tr><td nowrap class='link4'>گیتی نورد تعاوني 12</td>
				<td align=left><a class='link4' target='_blank' href='http://gitynavard.com/' target='_blank'><b>gitynavard.com</b></a></td></tr>	</table>
</td>
	<td></td>	
<td align="center" valign="top" nowrap>
    <hr><span style="font-size:12">خرید بلیط استاني</span><hr>
    <a href="http://www.farsmosafer.ir/" class="link3" target="_blank">فارس &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>www.farsmosafer.ir</b>&nbsp;&nbsp;&nbsp;</a>
    <a href="http://www.gilanmosafer.ir/" class="link3" target="_blank">گيلان &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>www.gilanmosafer.ir</b>&nbsp;&nbsp;&nbsp;</a>
    <a href="http://www.golestansafar.ir/" class="link3" target="_blank"> گلستان&nbsp;&nbsp;&nbsp;&nbsp;<b>www.golestansafar.ir</b>&nbsp;&nbsp;&nbsp;</a>
    <a href="http://www.sk-bus.ir/" class="link3" target="_blank">خراسان جنوبي&nbsp;&nbsp;&nbsp;&nbsp;<b>www.sk-bus.ir</b>&nbsp;&nbsp;&nbsp;</a>    
    <a href="http://www.yazdmosafer.ir/" class="link3" target="_blank">یزد&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>www.yazdmosafer.ir</b>&nbsp;&nbsp;&nbsp;</a>    	
    <a href="http://www.mazandsafar.ir/" class="link3" target="_blank">&#1605;&#1575;&#1586;&#1606;&#1583;&#1585;&#1575;&#1606;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>www.mazandsafar.ir</b>&nbsp;&nbsp;&nbsp;</a>
</td>
</tr>
</table> 
</div>
<!--left1 end -->
<br class="spacer" />
</div>
<!--bodyTopi end -->
</div>
<!--bodyTop end -->
<br class="spacer" />
</div>
<!--bodyTopMain end -->
<!-- =========================================================== -->
<!--bodyBotMain start -->
<div id="bodyBotMain">
    <div id="dialog" align="center">
        <div class="title">
            <a href="#" onclick="closePopUp('dialog');">[ X بستن ]</a>
        </div>
        <div id="subcoresults">
            <div id="subCompanies"></div>
        </div>
    </div>
    <div id="dialog2" align="center">
        <div class="title">
            <a href="#" onclick="closePopUp('dialog2');">[ X بستن ]</a>
        </div>
        <div id="subDialog">
            <div id="subDialogs"></div>
        </div>
    </div>

<!--bodyBot start -->
<div id="bodyBot">
<!--left2 start -->
<div id="left2">
		
    <div class="groups">
    <table align="center" cellpadding="1" cellspacing="0">
	<tr><td valign="top" align="center">						  
	<hr>		
	<table align="center" cellpadding="1" cellspacing="0" vspace="0">
	<!--<div  align="center" ><button onClick="document.location='./busa.php'"><b class="red">پیش فروش بلیط اتوبوس اربعین حسینی</b></button></div>-->
	<div  align="center" > <img src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/busicn.jpg"><br> بلیط اتوبوس</div>
            <tr>							<td class="logo">
								<a  class="link" onClick="fetchSubCompanies('T01')" id="T01_coId" rel="T01_content" href="http://localhost/payaneh/bus/%d8%a7%db%8c%d8%b1%d8%a7%d9%86-%d9%be%db%8c%d9%85%d8%a7/" title="ایران پیما تعاونی 1" ><img  alt="ایران پیما تعاونی 1(50 لينك خرید بلیط)" src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/logos/T01.jpg" />
								ایران پیما<br>تعاونی  1</a>
							</td> 
													<td class="logo"  width="90px" align="center">
								<a class="link" onClick="fetchSubCompanies('HMSFR')" id="HMSFR_coId" rel="HMSFR_content" href="#sub_companies.php?coId=HMSFR&coname=همسفر" title="همسفر" ><img  alt="همسفر(47  لينك )" src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/logos/HMSFR.jpg" />
								همسفر</a>
							</td> 
													<td class="logo"  width="90px" align="center">
								<a class="link" onClick="fetchSubCompanies('T15')" id="T15_coId" rel="T15_content" href="#sub_companies.php?coId=T15&coname= ترابربی تا تعاونی 15" title=" ترابربی تا تعاونی 15" ><img  alt=" ترابربی تا تعاونی 15(30  لينك )" src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/logos/T15.jpg" />
								 ترابربی تا <br>تعاونی 15</a>
							</td> 
													<td class="logo"  width="90px" align="center">
								<a class="link" onClick="fetchSubCompanies('T11')" id="T11_coId" rel="T11_content" href="#sub_companies.php?coId=T11&coname=آريا سفر تعاونی 11" title="آريا سفر تعاونی 11" ><img  alt="آريا سفر تعاونی 11(29  لينك )" src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/logos/T11.jpg" />
								آريا سفر <br>تعاونی 11</a>
							</td> 
						</tr><tr>							<td class="logo"  width="90px" align="center">
								<a class="link" onClick="fetchSubCompanies('GTYPMA')" id="GTYPMA_coId" rel="GTYPMA_content" href="#sub_companies.php?coId=GTYPMA&coname=گیتی پیما" title="گیتی پیما" ><img  alt="گیتی پیما(26  لينك )" src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/logos/GTYPMA.jpg" />
								گیتی پیما</a>
							</td> 
													<td class="logo"  width="90px" align="center">
								<a class="link" onClick="fetchSubCompanies('T02')" id="T02_coId" rel="T02_content" href="#sub_companies.php?coId=T02&coname=پی ام تی تعاونی 2" title="پی ام تی تعاونی 2" ><img  alt="پی ام تی تعاونی 2(26  لينك )" src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/logos/T02.jpg" />
								پی.ام.تی <br>تعاونی 2</a>
							</td> 
													<td class="logo"  width="90px" align="center">
								<a class="link" onClick="fetchSubCompanies('T13')" id="T13_coId" rel="T13_content" href="#sub_companies.php?coId=T13&coname=تک سفر ایرانیان" title="تک سفر ایرانیان" ><img  alt="تک سفر ایرانیان(24  لينك )" src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/logos/T13.jpg" />
								تک سفر ایرانیان</a>
							</td> 
													<td class="logo"  width="90px" align="center">
								<a class="link" onClick="fetchSubCompanies('T04')" id="T04_coId" rel="T04_content" href="#sub_companies.php?coId=T04&coname=ميهن نور تعاوني 4" title="ميهن نور تعاوني 4" ><img  alt="ميهن نور تعاوني 4(20  لينك )" src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/logos/T04.jpg" />
								ميهن نور<br> تعاوني 4</a>
							</td> 
						</tr><tr>							<td class="logo"  width="90px" align="center">
								<a class="link" onClick="fetchSubCompanies('T08')" id="T08_coId" rel="T08_content" href="#sub_companies.php?coId=T08&coname=لوان نور تعاونی 8" title="لوان نور تعاونی 8" ><img  alt="لوان نور تعاونی 8(20  لينك )" src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/logos/T08.jpg" />
								لوان نور<br> تعاونی 8</a>
							</td> 
													<td class="logo"  width="90px" align="center">
								<a class="link" onClick="fetchSubCompanies('T07')" id="T07_coId" rel="T07_content" href="#sub_companies.php?coId=T07&coname=عدل تعاوني 7" title="عدل تعاوني 7" ><img  alt="عدل تعاوني 7(18  لينك )" src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/logos/T07.jpg" />
								عدل <br>تعاوني 7</a>
							</td> 
													<td class="logo"  width="90px" align="center">
								<a class="link" onClick="fetchSubCompanies('SYRSFR')" id="SYRSFR_coId" rel="SYRSFR_content" href="#sub_companies.php?coId=SYRSFR&coname=سیروسفر " title="سیروسفر " ><img  alt="سیروسفر (16  لينك )" src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/logos/SYRSFR.jpg" />
								سیروسفر </a>
							</td> 
													<td class="logo"  width="90px" align="center">
								<a class="link" onClick="fetchSubCompanies('ASYSFR')" id="ASYSFR_coId" rel="ASYSFR_content" href="#sub_companies.php?coId=ASYSFR&coname=آسیا سفر" title="آسیا سفر" ><img  alt="آسیا سفر(15  لينك )" src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/logos/ASYSFR.jpg" />
								آسیا سفر</a>
							</td> 
						</tr><tr>							<td class="logo"  width="90px" align="center">
								<a class="link" onClick="fetchSubCompanies('T17')" id="T17_coId" rel="T17_content" href="#sub_companies.php?coId=T17&coname=پيك صبا" title="پيك صبا" ><img  alt="پيك صبا(13  لينك )" src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/logos/T17.jpg" />
								پيك صبا</a>
							</td> 
													<td class="logo"  width="90px" align="center">
								<a class="link" onClick="fetchSubCompanies('T16')" id="T16_coId" rel="T16_content" href="#sub_companies.php?coId=T16&coname=جهان گشت مهر" title="جهان گشت مهر" ><img  alt="جهان گشت مهر(12  لينك )" src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/logos/T16.jpg" />
								جهان گشت مهر</a>
							</td> 
													<td class="logo"  width="90px" align="center">
								<a class="link" onClick="fetchSubCompanies('ROYAL')" id="ROYAL_coId" rel="ROYAL_content" href="#sub_companies.php?coId=ROYAL&coname=رویال سفر ایرانیان" title="رویال سفر ایرانیان" ><img  alt="رویال سفر ایرانیان(10  لينك )" src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/logos/ROYAL.jpg" />
								رویال سفر ایرانیان</a>
							</td> 
													<td class="logo"  width="90px" align="center">
								<a class="link" onClick="fetchSubCompanies('T10')" id="T10_coId" rel="T10_content" href="#sub_companies.php?coId=T10&coname=مارال سیر تعاونی 10" title="مارال سیر تعاونی 10" ><img  alt="مارال سیر تعاونی 10(8  لينك )" src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/logos/T10.jpg" />
								مارال سیر<br> تعاونی 10</a>
							</td> 
						</tr><tr>							<td class="logo"  width="90px" align="center">
								<a class="link" onClick="fetchSubCompanies('T12')" id="T12_coId" rel="T12_content" href="#sub_companies.php?coId=T12&coname=گیتی نورد تعاوني 12" title="گیتی نورد تعاوني 12" ><img  alt="گیتی نورد تعاوني 12(8  لينك )" src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/logos/T12.jpg" />
								گیتی نورد<br> تعاوني 12</a>
							</td> 
													<td class="logo"  width="90px" align="center">
								<a class="link" onClick="fetchSubCompanies('T14')" id="T14_coId" rel="T14_content" href="#sub_companies.php?coId=T14&coname=پارسیان شماره 14" title="پارسیان شماره 14" ><img  alt="پارسیان شماره 14(6  لينك )" src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/logos/T14.jpg" />
								پارسیان<br> شماره 14</a>
							</td> 
													<td class="logo"  width="90px" align="center">
								<a class="link" onClick="fetchSubCompanies('T06')" id="T06_coId" rel="T06_content" href="#sub_companies.php?coId=T06&coname=ایمن سفر ایرانیان" title="ایمن سفر ایرانیان" ><img  alt="ایمن سفر ایرانیان(5  لينك )" src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/logos/T06.jpg" />
								ایمن سفر ایرانیان</a>
							</td> 
													<td class="logo"  width="90px" align="center">
								<a class="link" onClick="fetchSubCompanies('T09')" id="T09_coId" rel="T09_content" href="#sub_companies.php?coId=T09&coname=راهپیمای پارسیان تعاوني 9" title="راهپیمای پارسیان تعاوني 9" ><img  alt="راهپیمای پارسیان تعاوني 9(5  لينك )" src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/logos/T09.jpg" />
								راهپیمای پارسیان<br> تعاوني 9</a>
							</td> 
						</tr><tr>							<td class="logo"  width="90px" align="center">
								<a class="link" onClick="fetchSubCompanies('MAHAN')" id="MAHAN_coId" rel="MAHAN_content" href="#sub_companies.php?coId=MAHAN&coname=ماهان سفر" title="ماهان سفر" ><img  alt="ماهان سفر(4  لينك )" src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/logos/MAHAN.jpg" />
								ماهان سفر</a>
							</td> 
													<td class="logo"  width="90px" align="center">
								<a class="link" onClick="fetchSubCompanies('T03')" id="T03_coId" rel="T03_content" href="#sub_companies.php?coId=T03&coname=سفرسیر تعاونی 3" title="سفرسیر تعاونی 3" ><img  alt="سفرسیر تعاونی 3(4  لينك )" src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/logos/T03.jpg" />
								سفرسیر<br>تعاونی 3</a>
							</td> 
													<td class="logo"  width="90px" align="center">
								<a class="link" onClick="fetchSubCompanies('IRNPYMN')" id="IRNPYMN_coId" rel="IRNPYMN_content" href="#sub_companies.php?coId=IRNPYMN&coname=ایران پیمان" title="ایران پیمان" ><img  alt="ایران پیمان(4  لينك )" src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/logos/IRNPYMN.jpg" />
								ایران پیمان</a>
							</td> 
													<td class="logo"  width="90px" align="center">
								<a class="link" onClick="fetchSubCompanies('ARTA')" id="ARTA_coId" rel="ARTA_content" href="#sub_companies.php?coId=ARTA&coname=آرتاسبلان" title="آرتاسبلان" ><img  alt="آرتاسبلان(2  لينك )" src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/logos/ARTA.jpg" />
								آرتا سبلان</a>
							</td> 
						</tr><tr>							<td class="logo"  width="90px" align="center">
								<a class="link" onClick="fetchSubCompanies('JVN')" id="JVN_coId" rel="JVN_content" href="#sub_companies.php?coId=JVN&coname=جوان سیر ایثار" title="جوان سیر ایثار" ><img  alt="جوان سیر ایثار(1  لينك )" src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/logos/JVN.jpg" />
								جوان سیر ایثار</a>
							</td> 
													<td class="logo"  width="90px" align="center">
								<a class="link" onClick="fetchSubCompanies('SPHR')" id="SPHR_coId" rel="SPHR_content" href="#sub_companies.php?coId=SPHR&coname=سپهر آسیا" title="سپهر آسیا" ><img  alt="سپهر آسیا(1  لينك )" src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/logos/SPHR.jpg" />
								سپهر آسیا</a>
							</td> 
													<td class="logo"  width="90px" align="center">
								<a class="link" onClick="fetchSubCompanies('T05')" id="T05_coId" rel="T05_content" href="#sub_companies.php?coId=T05&coname=کیان سفر پاسارگاد" title="کیان سفر پاسارگاد" ><img  alt="کیان سفر پاسارگاد(1  لينك )" src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/logos/T05.jpg" />
								کیان سفر پاسارگاد</a>
							</td> 
						            </table>   <div><hr>
	    <div  align="center" > <img src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/train.png"><br>بلیط قطار</div>
		<div  align="center" >  <a href="http://payaneh.ir/etrain/?%d8%a8%d9%84%db%8c%d8%b7%20%d9%82%d8%b7%d8%a7%d8%b1%20%d8%b3%d9%81%db%8c%d8%b1%20%d8%b1%db%8c%d9%84"><img src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/SafirLogo.png" width="110" height="50"></a>&nbsp;
					  		    <a href="http://payaneh.ir/etrain/?%d8%a8%d9%84%db%8c%d8%b7%20%d9%82%d8%b7%d8%a7%d8%b1%20%d8%b1%d8%ac%d8%a7"><img src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/rajalogo.jpg" ></a>&nbsp;
    							<a href="http://payaneh.ir/etrain/?%d8%a8%d9%84%db%8c%d8%b7%20%d9%82%d8%b7%d8%a7%d8%b1%20%d9%81%d8%af%da%a9"><img src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/fadaklogo.jpg" width="70" height="70"></a>
							  </div>
	</div>
	</td>
	<td width="5px"></td>
	<td valign="top" >
	    <table cellpadding="1" cellspacing="1" border="0">
<!--	<tr><td align="center"><a href="http://top.ir" target="_blank" ><img src="images/top2i.jpg" alt="Top" width="151" ></a></td></tr>-->
		<tr><td align="center"><hr><div align="center"><a href="https://m.payaneh.ir/">سایت جدید پایانه</div><br><img src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/newpayaneh.jpg" alt="سایت جدید" border="1"/></a></td></tr>
	<tr><td align="center"><hr><a href="https://cafebazaar.ir/app/ir.sepand.payaneh/?l=fa" target="_blank"><img src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/appDownload.jpg" alt="دانلود" width="151" border="1"/></a><hr></td></tr>
				<tr><td align="left" width="155px">
		<a href="https://mahansafarshiraz.ir/" target="_blank" ><img src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/mahansafarshiraz.gif" width="151" height="140"></a> 
		</td></tr>		
				<tr><td align="left" width="155px">
		<a href="http://gitipeyma.org/" target="_blank" ><img src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/gitytabligh.gif" width="151" height="70"></a> 
		</td></tr>		
				<tr><td align="left" width="155px">
		<a href="http://payaneh.ir/etravel/E-PreSale/List.php?Token=11233-43" target="_blank" ><img src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/t8zanjan.gif" alt="تعاونی 8 لوان نور - پایانه غرب آزادی" width="151" height="151"></a> 
		</td></tr>		
				<tr><td align="left" width="155px">
		<a href="https://payaneh.ir/etravel/E-PreSale/List.php?Token=1101209-20" target="_blank" ><img src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/t11e.gif" alt="Top" width="151" ></a> 
		</td></tr>		
				<tr><td align="left" width="155px">
		<a href="http://www.aftabseir.com/" target="_blank" ><img src="<?php echo get_stylesheet_directory_uri()
 ?>/assets/images/Aftabseir.gif" width="151" height="70"></a> 
		</td></tr>		
			
		<tr><td align="center">
				</td></tr>
		</table>
	</td>
	</tr>
    <tr>
    </tr>
    </table>
            <br>
    </div>
</div>
<!--left2 end -->
<br class="spacer" />
</div>
<!--bodyBot end -->
<br class="spacer" />
</div>
<!--bodyBotMain end -->
<!-- =========================================================== -->
</div>
</div>
<!-- bodyMain end -->


<?php
get_footer();
