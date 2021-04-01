<? include $_SERVER["DOCUMENT_ROOT"]."/inc/user_config.php";?>
<? include $_SERVER["DOCUMENT_ROOT"]."/inc/function.php";?>
<? include $_SERVER["DOCUMENT_ROOT"]."/inc/dbconn.php";?>
<?php include 'header.php'; ?>
<script>
	function changeProducBox(pnum){
	<?
	$sql = "select * from tb_product where 1 order by idx  ";
	$rs = mysql_query($sql);
	$num=0;
	while ($row = mysql_fetch_array($rs)){
		$title = str_replace("\"","'",$row["title"]);
		$txt = str_replace("\"","'",$row["txt"]);

		$intro = str_replace("\"","'",$row["intro"]);
		$intro=str_replace("\r\n","",$intro);
		$intro=str_replace("\r\n","",$intro);
		$intro=str_replace("\r\n","",$intro);

		$activity1 = str_replace("\"","'",$row["activity1"]);
		$activity1=str_replace("\r\n","",$activity1);
		$activity1=str_replace("\n","",$activity1);
		$activity1=str_replace("\r","",$activity1);
		
		?>
		if(pnum==<?=$num?>){
			$("#productBox").fadeOut(200,function(){
				$("#productBox .program_title").text("<?=$title?>");
				$("#productBox .program_disc").html("<?=$txt?>");
				$("#productBox .discipline-section-title").html("<?=$intro?>");
				$("#productBox .bg-image-full").attr("style","background-image: url('/UploadFiles/product/<?=$row["img"]?>');");
				$("#productBox ul.discipline-activities").html("<?=$activity1?>");
			});
		}
		<?
		$num++;
	}
	?>

		$("#productBox").fadeIn();
	}

	$(document).ready(function(){
		/*
		changeProducBox(0);
		var productBoxNum = 0;
		$("#proboxleft").click(function(){
			productBoxNum--;
			if(productBoxNum <= 0){
				productBoxNum = <?=$num?>;
			}
			changeProducBox(productBoxNum);
		});*/
		/*
		$("#proboxright").click(function(){
			productBoxNum ++;
			if(productBoxNum >= <?=$num?>){
				productBoxNum = 0;
			}
			changeProducBox(productBoxNum);
		});
		*/
		/*
		$("body").addClass("page-template-page-disciplines");
		$("body").addClass("page-template-page-disciplines-php");
		*/
	});
</script>

<style>
	.business-slider {width:150px; height:40px; bottom:5%; left:50%; margin-left:-75px;position:absolute;}
	.slider-nav{width: 40px;
    height: 40px;
    top: initial;
    background-color: #5bb7e7;
    border-radius: 50px;
    -webkit-transition: .1s;
    transition: .1s;cursor:pointer;}
	.fl{float:left;}
	.fr{float:right;}
	.business-slider .slider-nav.fl .fa {margin-left: 13px;}
	.business-slider .slider-nav.fr .fa {margin-left: 16px;}
	.business-slider .slider-nav .fa {font-size: 30px;line-height: 40px;color: #000;}
	.slider-nav:hover {opacity: .8; }
</style>

<style>
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;400&display=swap');
@import url(https://cdn.jsdelivr.net/gh/moonspam/NanumSquare@1.0/nanumsquare.css);
@media screen and (min-device-width : 769px) {
        .Rows-Text {text-align: justify;}
        .thinkfarm {width: 20%; height: 20%;}
        .thinktools {width : 20%; height : 20%;}
}
@media screen and (max-device-width : 768px) {
        .Rows-Text {text-align: left;}
        .thinkfarm {width : 50%; height : 50%;}
        .thinktools {width : 50%; height : 50%;}
}
</style>



<div id="content-container">
	<div id="content" class="site-content">
		<div class="page-header BG-Black">
			<div class="container row">
				<div class="Text-White">
						<div class="Rows-Header">WHAT WE DO</div>
						<div class="Rows-RowTitle">Disciplines &amp; Capabilities</div>
						<div class="Rows-Text">
							SW engineering is the scientific and technical approach over all tasks.<br>
							Therefore, it has to help solve the realistic problems we encounter. 
						</div>
				</div>
			</div>
		</div>

		
		<div class="row-Margin">&nbsp;</div>
		
		<!-- 1 SET Start -->
				
				
				
				<div class="container row" >
					<div class="Width90P">
					<div class="Rows-ColumBorder">
						<div class="FullWidth">
							<!--<div class="Rows-Activities" style="font-weight: 900; font-size: 12pt; font-family: 'NanumSquare', sans-serif">-->
							<div class="Rows-Activities">
								"씽크포비엘은 데이터 밸런스 기반, 인공지능(AI)<br>
								신뢰성 검증 분야에서 가장 독보적인 기술력을 갖췄습니다"	
							</div>
							
							<!--<div class="Rows-Description" style="font-weight: 500; font-family: 'Noto Sans KR', sans-serif; font-size: 10pt; text-align: justify; line-height: 24px;">-->
							<div class="Rows-Text" style="line-height: 24px;">
							<br>
							씽크포비엘은 2008년 창업한 이래 소프트웨어(SW) 엔지니어링 분야에서 주목할 만한 성과를 이뤄왔습니다. 특히 데이터 밸런스에 기반한 인공지능(AI)
							신뢰성 검증 분야에서 세계 최고 수준 기술력을 갖춘 공학 기업입니다. 이런 기술력을 바탕으로 현장에서 벌어지는 다양한 문제를 과학적이면서 기술적
							관점에서 실질적인 해법을 도출해 낼 수 있습니다. 
							
							아울러 문제 현상에 국한하지 않고 원인과 본질을 조명해낼 수 있는 각종 도구(Tool)를 개발해
							소프트웨어 공학에 새로운 글로벌 표준을 제시하고 있습니다. 또한 지난 시간 축적한 노하우로 더 나은 미래 삶을 창출한다는 목표로 스마트 축산 시장에
							도전장을 내밀었고, 스마트 축산 서비스 플랫폼 '씽크팜(Thinkfarm)'을 개발해 축산농가가 더욱 부유하고 건강해 질 수 있도록 돕고 있습니다.
							</div>
							
						</div>
						
					</div>
					
				
				</div>
				</div>
			</div>
		
		<div class="row-Margin">&nbsp;</div>
		<div style="text-align: center; padding-left: 0%; padding-right:0%;">
		 <!-- <img src="images/business/maptree.jpg" style="border:0px; padding-left: 0%; width: 70%; height: 70%;"> -->
		<div class="content-BGimageBase" style="background-image:url('images/business/20210204_business_maptree-08.jpg');  background-color: #FFFFFF;"></div>
		</div>
		<div class="row-Margin">&nbsp;</div>

		

		
		<!-- 1 SET END -->
		
		<!-- 2 SET Start -->
		<div class="row-Margin">&nbsp;</div>
	
			
			<div class="row-Margin">&nbsp;</div>
			<div class="Width90P">
                <div style="text-align: left; padding-left: 0%; padding-right:0%;">
                    <img src="images/business/1215_service-01_1.jpg" style="padding-left: 0%; width: 200px; height: 54px;">
                </div>
			</div>

			<div class="row-Margin">&nbsp;</div>
			<div class="bg-white discipline-list">
                        <div class="Row-BGimageBase" style="background-image:url('images/business/20210204_business_maptree-06.jpg');  background-color: #FFFFFF;">
                            <div class="container row">

                            </div>
                        </div>
            </div>

			
				

				
				<!--<div class="container row" style="background: #f8f8f8; padding-right: 3%; padding-left: 3%; padding-top: 2%; padding-bottom: 2%;"> -->
				<div class="container row">				
					<div class="Width90P">
					<div class="Rows-ColumBorder">
						<div class="FullWidth">
							<!--<div class="Rows-Activities" style="font-weight: 900; font-size: 12pt; font-family: 'NanumSquare', sans-serif">-->
							<div class="Rows-Activities">
								"우리는 제품을 위한 품질이 아닌 기업을 위한 품질을 추구합니다."<br>
								"이것이 현실적 문제를 과학적으로 해결하는 산업 현장 중심 공학적 가치입니다."
							</div>
							
							<!--<div class="Rows-Description" style="font-weight: 500; font-family: 'Noto Sans KR', sans-serif; font-size: 10pt; text-align: justify; line-height: 24px;">-->
							<div class="Rows-Text" style="line-height: 24px;">
							<br>
							씽크포비엘은 소프트웨어 공학 컨설팅 기업입니다. 지금까지 300여 개 중소 소프트웨어 연구개발(R&D) 기업을 대상으로
							컨설팅을 진행함으로써 산업 현장에서 발생된 어려움을 해결하고 고객사가 원하는 수준의 SW 품질을 달성할 수 있도록
							지원했습니다. 이를 통해 비즈니스 관점에서 문제점을 발견하고 해결해내는 ‘소프트웨어 T-Biz 엔지니어링’ 체계를 확립할 수 
							있었습니다. 이를테면 컨설팅을 받는 업체가 지금 1년차인지 4~5년차에 접어들었는지 또는 인력은 어느 정도 있는지, 자금은 
							어느 정도인지, 기술력은 어느 정도인지 등 업체 상황을 파악하고 이에 따라 현재 사업 역량을 어느 곳에 집중해야 하는가를
							제시해줄 수 있습니다.
							<br>
							<br>
							우리는 ‘소프트웨어 T-Biz 엔지니어링’을 기반으로 기존에 ‘잘 만들게 해주는’ 컨설팅에서 한 발 더 나아가 ‘잘 팔리게 만들어주는’
							컨설팅에 초점을 맞췄습니다. 소프트웨어 특성에 부합하는 비즈니스를 분석할 수 있도록 선도적·과학적·기술적·객관적 프레임
							워크이자 기술(기법)인 ‘Be the Decacorn’을 개발했습니다. 이를 통해 고객사가 제품 기획부터 제품에 대한 마케팅까지
							압축적이고 집약적인 개발을 가능하게 만들어 시장에서 필요한 서비스를 제공할 수 있도록 돕고 있습니다.
							<br>
							<br>
							우리는 아울러 최근 인공지능(AI) 기술이 적용된 소프트웨어 활용범위가 넓어지고 있는 것에 주목해 AI 기술로 학습된 소프트웨어
							데이터를 검증하는 분야에서도 괄목할 성과를 이뤄내고 있습니다. 특히 데이터 밸런스 기반 신뢰성 검증 기술을 세계 최초로
							개발하며 업계를 선도하고 있습니다.
							
							</div>
								
						</div>
					
					</div>
					
				</div>
				</div>
				<div class="row-Margin">&nbsp;</div>  
				<div class="row-Margin">&nbsp;</div> 
				<div class="content-BGimageBase" style="background-image:url('images/business/business_Contents1.jpg'); background-size: contain;"></div>
				<br>
				 
				
				<div class="row-Margin">&nbsp;</div>
				<div class="row-Margin">&nbsp;</div> 
				<div class="Rows-Description">
				
				
				<table>
					<tr>
									
						<td style="padding-left: 22%;">
							<div class="Rows-Activities">SQA 컨설팅 서비스</div>							
							<!--<ul class="Rows-Text" style="font-family: 'Noto Sans KR', sans-serif; font-size: 10pt; font-weight: 500;">-->
							<ul class="Rows-Text">
							<li>품질 관리 체계 수입 및 조직 구성</li>
							<li>프로세스 자동화 기반 도구 구축 및 활용 가이드</li>
							<li>GS 인증 획등 지원</li>							
							</ul>
							
						</td>
									
						<td style="padding-right: 10%;">
							<div class="Rows-Activities">SQA 멘토링 서비스</div>
							<!--<ul class="Rows-Text" style="font-family: 'Noto Sans KR', sans-serif; font-size: 10pt; font-weight: 500;">-->
							<ul class="Rows-Text">
							<li>SW공학에 대한 기초적인 교육</li>
							<li>인식 개선을 위한 성공/실패 사례 소개</li>
							<li>실용주의 관점의 실무교육</li>							
							</ul>
						</td>				
					</tr>			
				</table>
					<div class="row-Margin">&nbsp;</div>
					<div class="row-Margin">&nbsp;</div>
					<div class="row-Margin">&nbsp;</div> 	
				</div>
				</div>
				
				
			
				

	
	
		
		
		
		<!-- History Set -->
		<div class="bg-white discipline-list">
		<div class="Row-BGimageBase" style="background-image: url('images/business/image_books.jpg');">
			    <div class="container row">
					<div class="Text-Black">
						<div class="Rows-Header">Make It Awesome</div>
						<div class="Rows-RowTitle">Business History</div>
						<div class="Rows-Text">We share our knowledge and experience with you</div>
					</div>
					</div>
				</div>
		</div>

		<div class="company_info" style="margin:0px;">
			<div class="container row">
				
				<?
				$sql = "select * from tb_biz_history where 1 order by ymd desc ";
				$rs = mysql_query($sql);
				while ($row = mysql_fetch_array($rs)){
							
							$current_year = substr($row["ymd"], 0, 4);
							$current_month = substr($row["ymd"],5, 2);
							
							if($current_year != $prev_year)
							{
								$prev_year = $current_year;
								?>
								<div class="business-History-date1"><?=$current_year?></div>
								<div class="business-rows">
								<div class="business-History-date2"><?=$current_month?></div>
								<!--<div class="business-History-contents" style="font-weight: 500; font-family: 'Noto Sans KR', sans-serif; font-size: 10pt;"><?=$row["contents"]?></div>-->
								<div class="business-History-contents"><?=$row["contents"]?></div>
								</div>
								<?
							}
							else
							{
								?>
								<div class="business-rows">
								<div class="business-History-date2"><?=$current_month?></div>
								<!--<div class="business-History-contents" style="font-weight: 500; font-family: 'Noto Sans KR', sans-serif; font-size: 10pt;"><?=$row["contents"]?></div>-->
								<div class="business-History-contents" ><?=$row["contents"]?></div>
								</div>
								<?
							}
						}
						?>
			</div>
		</div>
		
		<div class="row-Margin">&nbsp;</div>
		<div class="row-Margin-Underline">&nbsp;</div>
		<!-- History Set END -->


		<!-- 3 SET Start -->
		<div class="row-Margin">&nbsp;</div

			<div class="row-Margin">&nbsp;</div>
			<div class="Width90P">
			<div style="text-align: left; padding-left: 0px; padding-right:0%;">	
				<img src="images/business/1215_product-03_1.jpg" style="padding-left: 0%; width: 232px; height: 54px;">		 
			</div>
			</div>
		    <div class="row-Margin">&nbsp;</div>
            <div class="row-Margin">&nbsp;</div>
            <div class="Width90P">
                <div style="text-align: left; padding-left: 0%; padding-right:0%;">
                    <img class="thinktools" src="images/business/thinkforbl_BI_02_Thinktools.jpg">
                </div>
            </div>

			<div class="bg-white discipline-list">
			    <div class="Row-BGimageBase" style="background-image:url('images/business/20210204_business_maptree-04.jpg');  background-color: #FFFFFF;">
			    <div class="container row">
                    <div class="Text-White">
                        <!--<div class="Rows-RowTitle">Thinktools</div>-->
                	    <!--<div class="Rows-Header">The human lives in a safety software by</div>-->
                	</div>
                </div>
			</div>
			<div class="container row">
                        	<div class="Width90P">
                        		<div class="Rows-ColumBorder">
                        			<div class="FullWidth">
                        			    <!--<div class="Rows-Activities" style="font-weight: 900; font-size: 12pt; font-family: 'NanumSquare', sans-serif">-->
                        			    <div class="Rows-Activities">
                        				    '잘 만들게 해주는' 컨설팅에서 '잘 팔리게 만들어주는'  사업 동반자로
                        				</div>


                        				<!--<div class="Rows-Description" style="font-weight: 500; font-family: 'Noto Sans KR', sans-serif; font-size: 10pt; text-align: justify; line-height: 24px;">-->
                        				<div class="Rows-Text" style="line-height: 24px;">
                        				    <br>
                        				    THINKTOOLS는 우리 고객사가 데카콘(DECACORN, 기업가치 100억 달러가 넘는 신생기업)으로 거듭날 수 있도록 컨설팅을 효율적으로 수행하는 도구입니다.
                        				    씽크포비엘은 소프트웨어 산업 특성에 따라 높은 수준 공학 활동이 필요한 영역과 다양한 지원 도구를 갖추고 이를 THINKTOOLS라고 이름 지었습니다.
                        				    THINKTOOLS는 특히 세이프티 영역 소프트웨어, 미션 크리티컬 영역(Mission Critical Area), 사이버 물리 시스템(Cyber-Physical Systems),
                        					대형 프로젝트 거버넌스 등에 특화된 도구입니다.
                        				</div>

                        			</div>

                        		</div>

                        	</div>
                        </div>
			<div class="row-Margin">&nbsp;</div>

			<div class="row-Margin">&nbsp;</div>

			<div class="container row">	
			</div>
			</div>
		</div>
	    <!-- <div class="container row" style="background: #f8f8f8; padding-right: 3%; padding-left: 3%; padding-top: 2%; padding-bottom: 2%;"> -->

		<!-- 3 SET End -->
		
		<!-- 4 SET Start -->
		<div class="row-Margin">&nbsp;</div>
			<!--<div class="content-BGimageBase" style="background-image:url('images/business/1215_think-03_3.jpg');  background-size: contain;">-->
			</div>
		</div>

				<div class="container row">
					<div class="Width90P">
					<div style="text-align: left; padding-left: 0%; padding-right:0%;">	
					<!--<img src="images/business/thinkforbl_BI_01_CETA.jpg" style="padding-left: 0%; width: 147px; height: 70px;">-->
					<div class="workwithus-Title" style="font-weight: 600">CETA</div>
					</div>
					
					<div class="Rows-ColumBorder">
						<div class="FullWidth">
							
							<!--<div class="Rows-Activities" style="font-weight: 900; font-size: 12pt; font-family: 'NanumSquare', sans-serif">-->
							<div class="Rows-Activities">
								“세상에 어떤 방법보다 신뢰할 수 있고, 효율적이며, 표준화된 테스팅 도구”
							</div>
							
							<!--<div class="Rows-Description" style="font-weight: 500; font-family: 'Noto Sans KR', sans-serif; font-size: 10pt; text-align: justify; line-height: 24px;">-->
							<div class="Rows-Text" style="line-height: 24px;">
							<br>
							CETA(세타)는 소프트웨어나 인공지능 검증 설계를 데이터 밸런스에 기반해 지원할 수 있는 세계 유일 반 자동화 도구입니다. 
							기존에 전문가 경험에 의존하거나, 주관에 따라 진행하던 검증 설계를 과학적·기술적·객관적으로 수행하는 것이 가능합니다. 
							세타는 아울러 인간이 유발하는 실수를 이론적/기술적 방법을 통해 자동 도출해냅니다. 또한 효율적 검증을 위해 
							자동 도출된 수만 개 테스트케이스 중 기능 특성에 적합한 검증 우선 순위를 제안합니다.
							
							</div>
							
						</div>
					
					</div>
					
				</div>
				</div>
		<!-- 4 SET End -->
		
		<!-- 5 SET Start -->
		<div class="row-Margin">&nbsp;</div>
        <div class="row-Margin">&nbsp;</div>

			  
			<div class="container row">	
			</div>
			</div>
		</div>
			
				
	
				
				<div class="container row">
					<div class="Width90P">
					<div style="text-align: left; padding-left: 0%; padding-right:0%;">	
					<!--<img src="images/business/thinkforbl_BI_03_dronace.jpg" style="padding-left: 0%; width: 267px; height: 80
					px;">-->
					<div class="workwithus-Title" style="font-weight: 600">DRONACE</div>
					</div>

					<div class="Rows-ColumBorder">
						<div class="FullWidth">
							
							<!--<div class="Rows-Activities" style="font-weight: 900; font-size: 12pt; font-family: 'NanumSquare', sans-serif">-->
							<div class="Rows-Activities">
								"더 적은 노력과 시간을 들이고도, 보다 안전한 플라잉카(Flying Car) 세상을 만들 수 있습니다”
							</div>
							
							
							<!--<div class="Rows-Description" style="font-weight: 500; font-family: 'Noto Sans KR', sans-serif; font-size: 10pt; text-align: justify; line-height: 24px;">-->
							<div class="Rows-Text" style="line-height: 24px;">
							<br>
							DRONACE(드로네이스)는 물리 레벨의 시험 환경을 가상으로 구성함으로써, 드론이나 플라잉카가 실제 비행하지 않고도 
							사무실 책상에 앉아 탑재된 소프트웨어 안전성을 체크할 수 있는 세계 유일 도구입니다. 사람이 직접 원격 조종하던 
							기존 드론과 달리, 인공지능으로 스스로 판단해 움직이는 산업용 자율임무수행 드론이 활발히 개발되고 있습니다. 
							한 걸음 더 나아가 플라잉카가 자동차를 대체할 수 있는 미래 교통수단으로 주목받고 있기도 합니다. 하늘을 날아다니는 만큼 
							고도의 안전성이 확보돼야 하는데, 센서와 하드웨어 고장률을 진단하는 수준의 기존 시험 방식으로는 드론에 장착된 
							소프트웨어 안전성을 확실하게 검증하기 어려운 현실입니다. 드로네이스는 이런 문제를 해결해 줄 수 있는 효율적 대안이 될 것입니다.
							
							</div>
								
						</div>
					
					</div>
					
				</div>
				</div>
		<!-- 5 SET End -->

		<!-- 6 SET Start -->
		<div class="row-Margin">&nbsp;</div>
		<div class="row-Margin">&nbsp;</div>

			<div class="bg-white discipline-list">
			<!--<div class="content-BGimageBase" style="background-image:url('images/business/1215_think-03_7.jpg'); background-size: contain;">-->


			
			
			</div>
		</div>


		
		
				

				
				<div class="container row">
					<div class="Width90P">
					<div style="text-align: left; padding-left: 0%; padding-right:0%;">	
					<!--<img src="images/business/thinkforbl_BI_04_smac.jpg" style="padding-left: 0%; width: 168px; height: 70px%;">-->
					<div class="workwithus-Title" style="font-weight: 600">SMAC</div>
					</div>

					<div class="Rows-ColumBorder">
						<div class="FullWidth">
							<!--<div class="Rows-Activities" style="font-weight: 900; font-size: 12pt; font-family: 'NanumSquare', sans-serif">-->
							<div class="Rows-Activities">
								“인공지능이 당신의 전장 코드를 안전하게 만들어 줍니다”
							</div>
							<!--<div class="Rows-Description" style="font-weight: 500; font-family: 'Noto Sans KR', sans-serif; font-size: 10pt; text-align: justify; line-height: 24px;">-->
							<div class="Rows-Text" style="line-height: 24px;">
							<br>
							SMAC(스맥)은 기존에 세이프티 전문가가 손수 진행해야 했던 코드 안전성 확보 컨설팅을 인공지능 기술을 활용해 보다 
							객관적이고 전문적으로 수행해주는 도구입니다. 기존의 코드 검사 도구는 이미 구현된 코드만 확인할 뿐 반드시 필요한 
							안전 메커니즘 코드 구현 여부를 검증하지 않기 때문에 안전을 보장받을 수 없습니다. SMAC은 개발된 코드를 인공지능 
							기반으로 분석해 세이프티 매커니즘이 필요한 위치를 발견하고 가이드 합니다.
							</div>		
						</div>
					
					</div>
					
				</div>
				</div>
		<!-- 6 SET End -->


		<!-- 7 SET Start -->
		<div class="row-Margin">&nbsp;</div>
		<div class="row-Margin">&nbsp;</div>
	
			

			<div class="bg-white discipline-list">
			<!--<div class="content-BGimageBase" style="background-image:url('images/business/1215_think-03_5.jpg');  background-size: contain;">-->


  
			<div class="container row">	
			</div>
			</div>
		</div>
		
			
				
		
				
				<div class="container row">
					<div class="Width90P">
					<div style="text-align: left; padding-left: 0%; padding-right:0%;">	
					<!--<img src="images/business/thinkforbl_BI_09_kiuwan.jpg" style="padding-left: 0%; width: 251px; height: 81px;">-->
					<div class="workwithus-Title" style="font-weight: 600">kiuwan</div>
					</div>

					<div class="Rows-ColumBorder">
						<div class="FullWidth">
							
							<!--<div class="Rows-Activities" style="font-weight: 900; font-size: 12pt; font-family: 'NanumSquare', sans-serif">-->
							<div class="Rows-Activities">
								“현실적이고 실용적인 코드 수정 전략 수립을 돕는 컨설턴트”
							</div>
							
							
							<!--<div class="Rows-Description" style="font-weight: 500; font-family: 'Noto Sans KR', sans-serif; font-size: 10pt; text-align: justify; line-height: 24px;">-->
						    <div class="Rows-Text" style=" line-height: 24px;">
							<br>
							KIUWAN(키우완)은 스페인에서 개발돼 전 세계 25개국 이상에서 500여 개 기업이 활용하고 있는 코드의 
							결함/보안 위험 부분 발견 및 품질 목표 기반 리소스 활용 전략 제시 컨설턴트 도구입니다. 기존 도구는 
							코드를 분석해 문제점을 도출해 주는 수준에 그쳤지만, 키우완은 한 발 더 나아가 코드의 문제점으로 인한 
							사업적 영향과 의미까지 파악해 개선방안에 우선 순위를 정하는 수정 전략까지 제시해 줍니다. 기존 전문가 
							투입에 따른 비용과 시간 낭비, 출시 지연에 따른 사업진행 방해와 같은 어려움을 극복시켜줍니다. 
							씽크포비엘은 현재 국내 공식 키우완 파트너로, 다양한 기업에 솔루션을 제시해 주고 있습니다.
							
							</div>
								
						</div>
					
					</div>
					
				</div>
				</div>
		<!-- 7 SET End -->
		<!-- <div class="row-Margin-Underline">&nbsp;</div> -->
		<!-- 8 SET Start -->
		<div class="row-Margin">&nbsp;</div>
		<div class="row-Margin">&nbsp;</div>
		<div class="row-Margin">&nbsp;</div>
		<div class="Width90P">
            <div style="text-align: left; padding-left: 0%; padding-right:0%;">
                <img class="thinkfarm" src="images/business/thinkforbl_BI_05_thinkfarm.jpg">
            </div>
        </div>
		<div class="bg-white discipline-list">
		    <div class="Row-BGimageBase" style="background-image:url('images/business/20210204_business_maptree-05.jpg');  background-color: #FFFFFF;">
		    <div class="container row">
                                <div class="Text-White">
                                    <!--<div class="Rows-RowTitle">ThinkFarm</div>-->
                            	    <!--<div class="Rows-Header">We leads Healthy Livestock in Think Farm</div>-->
                            	</div>
                            </div>
		</div>

			<div class="container row">
            					<div class="Width90P">
            					<div class="Rows-ColumBorder">
            						<div class="FullWidth">

            							<!--<div class="Rows-Activities" style="font-weight: 900; font-size: 12pt; font-family: 'NanumSquare', sans-serif">-->
            							<div class="Rows-Activities">
            								“인공지능 머신러닝 기술이 우리 농장을 더 건강하고 부유하게 만듭니다”
            							</div>

            							<!--<div class="Rows-Description" style="font-weight: 500; font-family: 'Noto Sans KR', sans-serif; font-size: 10pt; text-align: justify; line-height: 24px;">-->
            							<div class="Rows-Text" style="line-height: 24px;">
            							<br>
            							THINKFARM(씽크팜)은 신뢰성 높은 인공지능(AI) 기술 기반 축산 서비스를 제공하겠다는 목표로 스마트 축산 시장에 진출한
            							씽크포비엘이 자체 개발한 축산농가 토털 관리 도구입니다. 농민과 정부, 연구기관과 수의사 등이 연계돼 축산 관련 교육과
            							경영관리 서비스 제공은 물론 백신과 사료 배합 추천 서비스와 같은 토털 축산 서비스를 제공하는 ‘LaaS(Livestock as a Service)’ 집약체입니다.
            							축산농가에는 비용 절감으로 인한 소득 증대를, 농축산업에는 글로벌 경쟁력을, 국민에게는 안전한 먹거리를 각각 제공하는 것이 가능합니다.
            							씽크팜은 현재 ‘Pig-T’, ‘Milk-T’, ‘Cow-T’ 3종의 도구가 개발돼 있습니다.

            							</div>

            						</div>

            					</div>

            				</div>
            				</div>
			<div class="row-Margin">&nbsp;</div>
			<div class="bg-white discipline-list">

			<div class="container row">	
			</div>
			</div>
		</div>
			
	
				
				<!--<div class="container row" style="background: #f8f8f8; padding-right: 3%; padding-left: 3%; padding-top: 2%; padding-bottom: 2%;"> -->

		<!-- 8 SET End -->

		<!-- 8-1 SET Start -->
		<div class="row-Margin">&nbsp;</div>
        <div class="row-Margin">&nbsp;</div>
			
			<div class="bg-white discipline-list">
			 
			
			  
			<div class="container row">	
			</div>
			</div>
		</div>

				
				<div class="container row">
					<div class="Width90P">
					<div style="text-align: left; padding-left: 0%; padding-right:0%;">	
					<!--<img src="images/business/thinkforbl_BI_06_pigt.jpg" style="padding-left: 0%; width: 128px; height: 115px;">-->
					<div class="workwithus-Title" style="font-weight: 600">Pig-T</div>
					</div>
					<div class="row-Margin">&nbsp;</div>
					<div class="Rows-ColumBorder">
						<div class="FullWidth">
							
							<!--<div class="Rows-Activities" style="font-weight: 900; font-size: 12pt; font-family: 'NanumSquare', sans-serif">-->
							<div class="Rows-Activities">
								“모돈의 이상징후나 공태 여부를 사전에 감지한다”
							</div>
							
							<!--<div class="Rows-Description" style="font-weight: 500; font-family: 'Noto Sans KR', sans-serif; font-size: 10pt; text-align: justify; line-height: 24px;">-->
							<div class="Rows-Text" style="line-height: 24px;">
							<br>
								Pig-T(피그티)는 CCTV를 통해 모돈의 질병이나 이상징후를 인공지능 기반으로 감시하고, 
								포착된 상태를 농장주 스마트폰으로 알려줍니다. 적절한 모돈 회전율을 유지함으로써 
								생산성을 높이고, 자돈의 폐사를 줄일 수 있습니다.
							
							</div>
								
						</div>
					
					</div>
					
				</div>
				</div>
		<!-- 8-1 SET End -->

		<!-- 8-2 SET Start -->
		<div class="row-Margin">&nbsp;</div>
        <div class="row-Margin">&nbsp;</div>
	
			

			<div class="bg-white discipline-list">
			
			
			

			<div class="container row">	
			</div>
			</div>
		</div>
				<div class="container row">
					<div class="Width90P">
					<div style="text-align: left; padding-left: 0%; padding-right:0%;">	
					<!--<img src="images/business/thinkforbl_BI_08_milkt.jpg" style="padding-left: 0%; width: 128px; height: 115px;">-->
					<div class="workwithus-Title" style="font-weight: 600">Milk-T</div>
					</div>
					<div class="row-Margin">&nbsp;</div>
					<div class="Rows-ColumBorder">
						<div class="FullWidth">
							
							<!--<div class="Rows-Activities" style="font-weight: 900; font-size: 12pt; font-family: 'NanumSquare', sans-serif">-->
							<div class="Rows-Activities">
								“우유 생산성을 높이기 위해 사료 공급을 통제·관리한다”
							</div>
							
							<!--<div class="Rows-Description" style="font-weight: 500; font-family: 'Noto Sans KR', sans-serif; font-size: 10pt; text-align: justify; line-height: 24px;">-->
							<div class="Rows-Text" style="line-height: 24px;">
							<br>
								Milk-T(밀크티)는 인공지능 기반 분석을 통해 우유를 많이 생산하거나 
								또는 목표 우유량을 생산하기 위해 어떻게 젖소 사료를 배합하고 어떤 소에게 
								얼마만큼 사료를 줘야 하는지를 가이드해 줄 수 있습니다.
							
							</div>
							
						</div>
					
					</div>
					
				</div>
				</div>
		<!-- 8-2 SET End -->

		<!-- 8-3 SET Start -->
		<div class="row-Margin">&nbsp;</div>
        <div class="row-Margin">&nbsp;</div>
	
			
			
			<div class="bg-white discipline-list">
			
			

			<div class="container row">	
			</div>
			</div>
		</div>

				
				<div class="container row">
					<div class="Width90P">
					<div style="text-align: left; padding-left: 0%; padding-right:0%;">	
					<!--<img src="images/business/thinkforbl_BI_07_cowt.jpg" style="padding-left: 0%; width: 128px; height: 115px;">-->
					<div class="workwithus-Title" style="font-weight: 600">Cow-T</div>
					</div>
					<div class="row-Margin">&nbsp;</div>	
					<div class="Rows-ColumBorder">
						<div class="FullWidth">
							
							<!--<div class="Rows-Activities" style="font-weight: 900; font-size: 12pt; font-family: 'NanumSquare', sans-serif">-->
							<div class="Rows-Activities">
								“인공지능이 육우 출하 시점을 가이드해 준다”
							</div>
							
							<!--<div class="Rows-Description" style="font-weight: 500; font-family: 'Noto Sans KR', sans-serif; font-size: 10pt; text-align: justify; line-height: 24px;">-->
							<div class="Rows-Text" style=" line-height: 24px;">
							<br>
								Cow-T(카우티)는 사물인터넷(IoT) 기술로 한우나 육우의 체성분 데이터를 수집하고, 
								인공지능 기술로 소의 체중과 체성분을 분석한 후 최적의 출하시기를 가이드함으로써 
								축산농가 경제성을 높여줍니다.
							
							</div>
								
						</div>
					
					</div>
					
				</div>
				</div>
		<!-- 8-3 SET End -->
		
		<div class="row-Margin">&nbsp;</div>
		<div class="row-Margin">&nbsp;</div>
		<div class="row-Margin-Underline">&nbsp;</div>
		<div class="row-Margin">&nbsp;</div>
		<div class="row-Margin">&nbsp;</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		<!-- Products Start :: ADM -->
		


		<!-- Products END :: ADM -->


		<div class="Row-FootMovie" data-video-bg-mpfour="/video/business-bg.mp4" data-autoplay="true" data-poster="/images/business/bg-business.png">
			<div class="GR">&nbsp;</div>
			<div class="container row">
				<div class="Row-MovieText">
					We detect your problem and optimizes your wants and needs to any problems. 
				</div>
			</div>
		</div>
	



	</div>
</div>


<?php include 'footer.php'; ?>


<? include $_SERVER["DOCUMENT_ROOT"]."/inc/dbclose.php";?>
