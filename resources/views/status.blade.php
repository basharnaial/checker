
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ar-SA" lang="ar-SA" prefix="og: http://ogp.me/ns#" class="no-js">
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
		<meta name="omni_page" content="acs::web::System Status">
	    <title>إتمام للخدمات - حالة النظام</title>
	   	<link rel="stylesheet" type="text/css" href="//check.etmaam.host/resources/css/ac-globalnav.built.css">
	    <link rel="stylesheet" type="text/css" href="//check.etmaam.host/resources/css/ac-globalfooter.built.css">
	    <link rel="stylesheet" href="//check.etmaam.host/resources/css/site-rtl.built.css" type="text/css">
      <link rel="icon" href="/support/systemstatus/icons/favicon.ico" />
      <script src="/support/systemstatus/scripts/packager-20210806A.launch-20220414A-prod.js" ></script>
	</head>

<body class="ac-gn-current-support" style="">
	<nav id="ac-globalnav" class="js no-touch" role="navigation" aria-label="الملاحة العالمية عبر الموقع" data-hires="false" data-analytics-region="global nav" lang="ar-SA" dir="rtl" data-store-locale="" data-store-api="//" data-search-locale="" data-search-api="//" data-analytics-key-listener-added="true">
		<div class="ac-gn-content">
			<ul class="ac-gn-header">
				<li class="ac-gn-item ac-gn-menuicon">
					<label class="ac-gn-menuicon-label" for="ac-gn-menustate" aria-hidden="true"> <span class="ac-gn-menuicon-bread ac-gn-menuicon-bread-top">
								<span class="ac-gn-menuicon-bread-crust ac-gn-menuicon-bread-crust-top"></span> </span> <span class="ac-gn-menuicon-bread ac-gn-menuicon-bread-bottom">
								<span class="ac-gn-menuicon-bread-crust ac-gn-menuicon-bread-crust-bottom"></span> </span>
					</label>
					<a href="#ac-gn-menustate" class="ac-gn-menuanchor ac-gn-menuanchor-open" id="ac-gn-menuanchor-open"> <span class="ac-gn-menuanchor-label">افتح القائمة</span> </a>
					<a href="#" class="ac-gn-menuanchor ac-gn-menuanchor-close" id="ac-gn-menuanchor-close"> <span class="ac-gn-menuanchor-label">أغلق القائمة</span> </a>
				</li>
				<li class="ac-gn-item ac-gn-">
					<a class="ac-gn-link " href="/" data-analytics-title=" home" id="ac-gn-firstfocus-small"> <span class="ac-gn-link-text">إتمام</span> </a>
				</li>
			</ul>
			<ul class="ac-gn-list">
				<li class="ac-gn-item ac-gn-">

					<a class="ac-gn-link" href="/" data-analytics-title=" home" id="ac-gn-firstfocus"> 
											<img src="http://check.etmaam.host/resources/assets/img/logo-white.png" width="100px"> 

					<span class="ac-gn-link-text">
					    
					    إتمام للخدمات</span> </a>
				</li>
				<li class="ac-gn-item ac-gn-item-menu ac-gn-mac">
					<a class="ac-gn-link" href="//www.etmaam.com.sa" data-analytics-title="العودة للموقع الرسمي">العودة للموقع الرسمي <span class="ac-gn-link-text">العودة للموقع الرسمي</span> </a>
				</li>
			</ul>
		</div>
	</nav>
	<div id="ac-gn-curtain" class="ac-gn-curtain"></div>
	<div id="ac-gn-placeholder" class="ac-nav-placeholder"></div>
	<div id="ac-gn-viewport-emitter">&nbsp;</div>
	<div dir="rtl" id="ssp">
		<main data-reactroot="" id="ssp-main" class="main" role="main">
			<section class="section-hero">
				<h1 class="section-headline">حالة النظام</h1></section>
			<div class="wrapper">
				<div class="lights-container">
					<section class="section-legend" role="group" aria-label="وسيلة الإيضاح">
						<ul class="light-content light-image">
							<li>
								<div class="light-available"></div><span role="text"><span class="a11y"><!-- react-text: 18 -->الدائرة الخضراء: <!-- /react-text --><!-- react-text: 19 --> <!-- /react-text --></span>
								<!-- react-text: 20 -->متوفر
								<!-- /react-text -->
								</span>

							</li>


							<li>
								<div class="light-issue"></div><span role="text"><span class="a11y"><!-- react-text: 18 -->الدائرة الخضراء: <!-- /react-text --><!-- react-text: 19 --> <!-- /react-text --></span>
								<!-- react-text: 20 -->غير متوفر
								<!-- /react-text -->
								</span>

							</li>

						</ul>
					</section>
					<section class="section-lights">
						<table id="ssp-lights-table" role="presentation">
							<tbody>
								<tr>
								    
								    

									@foreach($services as $service)
									

									<td id="info-tooltip-wrapper-{{$service->id}}" class="info-tooltip-wrapper">
										<div class="light-container">
											<div class="light-content light-image">
												@if($service->status == 1) 
												<div class="light-available"></div>
												@elseif($service->status == 0) 
												<div class="light-issue"></div>
												@endif
											</div>
											<div class="light-content light-name"><span role="text"><!-- react-text: 31 -->{{$service->name}}<!-- /react-text --><!-- react-text: 32 --> <!-- /react-text --><span class="a11y">: available</span></span>
											</div>
										</div>
									</td>

									@endforeach
			
								    <!--loop for point green-->



									<!--<td id="info-tooltip-wrapper-1" class="info-tooltip-wrapper">-->
									<!--	<div class="light-container">-->
									<!--		<div class="light-content light-image">-->
									<!--			<div class="light-available"></div>-->
									<!--		</div>-->
									<!--		<div class="light-content light-name"><span role="text"><!-- react-text: 40 --><!-- /react-text --><!-- react-text: 41 --> <!-- /react-text --><span class="a11y">: available</span></span>
									<!--		</div>-->
									<!--	</div>-->
									<!--</td>-->
									<!--<td id="info-tooltip-wrapper-2" class="info-tooltip-wrapper">-->
									<!--	<div class="light-container">-->
									<!--		<div class="light-content light-image">-->
									<!--			<div class="light-available"></div>-->
									<!--		</div>-->
									<!--		<div class="light-content light-name"><span role="text"><!-- react-text: 49 --><!-- /react-text --><!-- react-text: 50 --> <!-- /react-text --><span class="a11y">: available</span></span>
									<!--		</div>-->
									<!--	</div>-->
									<!--</td>-->
								</tr>
								<tr>

							</tbody>
						</table>
					</section>
				</div>
			</div>
		</main>
	</div>
	<script src="localizer.js"></script>
	<script src="/support/systemstatus/scripts/client.min.built.js"></script>
	<div id="viewport-emitter">&nbsp;</div>
	<footer id="ac-globalfooter" class="js flexbox" lang="ar-SA" data-analytics-region="global footer" role="contentinfo" aria-labelledby="ac-gf-label">
		<div class="ac-gf-content">
			<h2 class="ac-gf-label" id="ac-gf-label">/</h2>
			<nav class="ac-gf-breadcrumbs" aria-label="Breadcrumbs" role="navigation">
				<a href="https://www.etmaam.com.sa/" class="home ac-gf-breadcrumbs-home analytics-exitlink"> 
										<img src="http://check.etmaam.host/resources/assets/img/Logo.png" width="20px"> 
				<span class="" aria-hidden="true"></span> <span class="ac-gf-breadcrumbs-home-label">Etmaam For Business Services</span> <span class="ac-gf-breadcrumbs-home-chevron"></span> <span class="ac-gf-breadcrumbs-home-mask"></span> </a>
				<div class="ac-gf-breadcrumbs-path">
					<ol class="ac-gf-breadcrumbs-list" vocab="http://schema.org/" typeof="BreadcrumbList">
						<li class="ac-gf-breadcrumbs-item" property="itemListElement" typeof="ListItem"> <span property="name">حالة النظام</span>
							<meta property="position" content="1"> </li>
					</ol>
				</div>
			</nav>
			<section class="ac-gf-footer">
			
				<div class="ac-gf-footer-legal">
					<div class="ac-gf-footer-legal-copyright">العلامة التجارية وجميع الحقوق محفوظة. © <span id="footer_msg_year">2022</span> لشركة إتمام للخدمات</div>
				</div>
			</section>
		</div>
	</footer>

</body>
</html>