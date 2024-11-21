<!doctype html>
<style>
         html {
         font-size: 14px;
         }
         @media (min-width: 768px) {
         html {
         font-size: 16px;
         }
         }
         .container {
         max-width: 960px;
         }
         .pricing-header {
         max-width: 700px;
         }
         .card-deck .card {
         min-width: 220px;
         }
         .border-top {
         border-top: 1px solid #e5e5e5;
         }
         .border-bottom {
         border-bottom: 1px solid #e5e5e5;
         }
         .box-
		 
		 
		 shadow {
         box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05);
         }
        .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        background-color: #f44336;
    }
		 .nav-link {
        color: #f44336;
    }

    .nav-link:focus,
    .nav-link:hover {
        color: #cd3a2f;
    }
      </style>
   </head>
   <body>
   
      <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
         <div class="d-flex flex-column flex-md-row align-items-center container">            
           <a href="index.php"class="d-flex align-items-center text-dark text-decoration-none">
              <img class="img-fluid" src="/img/nro.png" alt="" width="36" height="36">
<span class="fs-5">Ngọc Rồng Blue</span>     
            </a>
            
              <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto" style="font-weight: 500">
<a class="me-3 py-2 text-dark text-decoration-none" href="tai-ve.php">Tải về</a>
<a class="me-3 py-2 text-dark text-decoration-none" href="lich-su-nap-the.php">Lịch sử</a>
<a class="me-3 py-2 text-dark text-decoration-none" target="_blank" href="https://zalo.me/g/yyjfse898">Cộng đồng</a>
<a class="me-3 py-2 text-dark text-decoration-none" target="_blank" href="https://zalo.me/g/yyjfse898">Hỗ trợ</a>
</nav>
            <?php if($_login == null) { ?>
            <nav class="my-2 my-md-0 mr-md-3">
               <a class="btn btn-outline-primary" href="/login.php" style="font-weight: 500">Đăng nhập</a>
			   
               <?php } else { ?>
               <a class="btn btn-outline-primary" href="/profile.php">
			   
               <span><?php echo ($_username); ?> - <?php echo number_format($_coin); ?> TCoin</span>
               </a>	
               <?php } ?>
            </nav>
         </div>
      </div>
   </body>
<html lang="vi">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="Msruh98BwtuR1HQqNzwaI4SN9KMSzNbNcDc3tWEn">
        <base href="https://bantool.net/">
        <link href="/images/favicon.ico" rel="shortcut icon">
        <title>Ngọc Rồng Blue</title>
        <meta name="title" content="Data NRO - BanTool.Net">
        <meta name="description" content="BanTool.Net cung cấp các giải pháp auto, tự động hoá, tool, phần mềm chất lượng, giúp bạn tiết kiệm thời gian, công sức, tiền bạc khi sử dụng.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://bantool.net">
        <meta property="og:title" content="Data NRO - BanTool.Net">
        <meta property="og:description" content="BanTool.Net cung cấp các giải pháp auto, tự động hoá, tool, phần mềm chất lượng, giúp bạn tiết kiệm thời gian, công sức, tiền bạc khi sử dụng.">
        <meta property="og:image" content="https://bantool.net/images/thumb-meta.png">
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://bantool.net">
        <meta property="twitter:title" content="Data NRO - BanTool.Net">
        <meta property="twitter:description" content="BanTool.Net cung cấp các giải pháp auto, tự động hoá, tool, phần mềm chất lượng, giúp bạn tiết kiệm thời gian, công sức, tiền bạc khi sử dụng.">
        <meta property="twitter:image" content="https://bantool.net/images/thumb-meta.png">
        <link href="https://bantool.net/assets/user/css/app.css" rel="stylesheet">
        <script src="https://bantool.net/assets/user/js/app.js" type="d8ee49f103ccbbc954b39a47-text/javascript"></script>
        <script src="https://bantool.net/assets/user/js/drnxloc.js" type="d8ee49f103ccbbc954b39a47-text/javascript"></script>
        <link href="https://bantool.net/assets/user/js/app.10f6e6fd.js" rel="preload" as="script">
        <link href="https://bantool.net/assets/user/js/chunk-vendors.1e51aea2.js" rel="preload" as="script">
        <style></style>
        <link rel="preconnect" href="https://fonts.gstatic.com">
    </head>
    <body>
        <div id="app" class="flex-wrapper">
            <main>
                <div class="body-main">
                    <div class="card shadow">
                        <div class="card-body">
                            <h3 class="c-text-left c-uppercase c-border-l-4 c-border-green-600 c-font-bold c-text-2xl px-3">Search Data NRO</h3>
                            <div id="app-nro"></div>
                            <script src="./dataNRO/data.js" type="d8ee49f103ccbbc954b39a47-text/javascript"></script>
                            <script src="./dataNRO/app.js" type="d8ee49f103ccbbc954b39a47-text/javascript"></script>
                            <style></style>
                            <div id="slider-function" class="carosel-scale center mt-3">
                                <div class="owl-carousel owl-theme">
                                    <div class="item-slide">
                                        <img src="/images/sidebar/footer/ft-1.png"/>
                                    </div>
                                    <div class="item-slide">
                                        <img src="/images/sidebar/footer/ft-2.png"/>
                                    </div>
                                    <div class="item-slide">
                                        <img src="/images/sidebar/footer/ft-3.png"/>
                                    </div>
                                    <div class="item-slide">
                                        <img src="/images/sidebar/footer/ft-4.png"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main></div><script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="d8ee49f103ccbbc954b39a47-|49" defer=""></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"7a971d66acd5096f","version":"2023.2.0","r":1,"token":"a7893aaba1374b52870834fb79986540","si":100}' crossorigin="anonymous"></script>
</body><script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js" type="d8ee49f103ccbbc954b39a47-text/javascript"></script>
<script type="d8ee49f103ccbbc954b39a47-text/javascript"></script>
</html>
