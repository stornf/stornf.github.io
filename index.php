
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<title>My App</title>
<link rel="stylesheet" href="css/framework7.ios.min.css">
<link rel="stylesheet" href="css/framework7.ios.colors.min.css">
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
</head>
<body style="background: #16222A;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #3A6073, #16222A);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #3A6073, #16222A); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
  <div class="views tabs toolbar-fixed">
  <div id="tab1" class="view tab active">
  <div class="navbar">
  <div class="navbar-inner">
  <div class="center">STORNF</div>
  </div>
  </div>
  <div class="pages navbar-fixed">
  <div data-page="home-1" class="page">


    <form data-search-list=".list-block-search" data-search-in=".item-title" class="searchbar searchbar-init">
    <div class="searchbar-input">
    <input type="search" placeholder="Search"><a href="#" class="searchbar-clear"></a>
    </div><a href="#" class="searchbar-cancel">Cancel</a>
    </form>
    <div class="searchbar-overlay"></div>
    <div class="page-content">
    <div class="content-block searchbar-not-found">
    <div style="margin-top: 47px;color: #777; text-align: center;" >Nothing found</div>
    </div>
    <div class="list-block list-block-search searchbar-found">
      <div class="list-block media-list inset">


      <ul style="margin-bottom: 15px;">
      <li style="height: auto;border-radius: 15px;margin-bottom: 15px;background: #16222A;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #3A6073, #16222A);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #3A6073, #16222A); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
" class="li-dark">
      <div class="item-content lazy lazy-fadeIn lazy-loaded" style="height: auto;">
      <div class="item-media" style="margin-top: -4px;">
      <img src="img/unc0ver.png" class="lazy lazy-fadeIn lazy-loaded" width="60px" height="60px" style="border-radius: 12px;">
      </div>
      <div class="item-inner" style="    margin-top: 3px;">
      <div class="item-title">
      <div class="item-title" style="color: #fff;">unc0ver</div>
      <span class="spandark" style="color: #ffffffcf;border-radius: 20px;font-size: 12px;padding: 1px 7px 1px 7px;background: #8ed9ff57;">v3.0.0~b43</span>
      <span class="spandark2" style="border-radius: 20px;font-size: 12px;padding: 1px 7px 1px 7px;margin-left: 4px;color: #ffffffde;background: #ddafff7d;">21.68 MB</span>
      </div>
      <div class="item-after" dir="rtl" style="margin-top: -28px;">
      <a class="installbutton button button-fill button-round" onclick="Deezer();" style="color: #ffffff;background: #ffffff26;box-shadow: 0px 0px 0px 3px rgba(0, 0, 0, 0.05);">INSTALL</a>

      </div>
      <div class="item-text" style="height: auto;margin-top: 4px;color: #ffffff36;">Jailbreak for iOS 11.0 to 11.4.1</div>
      </div>
      </div>
      </li>
      </ul>


    </div>
    </div>
    </div>


  </div>
  </div>
  </div>
  <div id="tab2" class="view tab">
  <div class="navbar">
  <div class="navbar-inner">
  <div class="center">View 2</div>
  </div>
  </div>
  <div class="pages navbar-fixed">
  <div data-page="home-2" class="page">
  <div class="page-content">
  <div class="content-block">
  <p>This is view 2</p>
  </div>
  </div>
  </div>
  </div>
  </div>
  <div id="tab3" class="view tab">
  <div class="navbar">
  <div class="navbar-inner">
  <div class="center">View 3</div>
  </div>
  </div>
  <div class="pages navbar-fixed">
  <div data-page="home-3" class="page">
  <div class="page-content">
  <div class="content-block">
  <p>This is view 3</p>
  </div>
  </div>
  </div>
  </div>
  </div>
<div class="toolbar tabbar tabbar-labels">
    <div class="toolbar-inner">
        <a href="#tab1" class="tab-link active">
            <i class="icon apps"></i>
            <span class="tabbar-label">store</span>
        </a>
        <a href="#tab2" class="tab-link">
            <i class="icon Alerts">
             <span class="badge bg-red">5</span>
            </i>
            <span class="tabbar-label">Alerts</span>
        </a>
        <a href="#tab3" class="tab-link">
            <i class="icon Settings"></i>
            <span class="tabbar-label">Settings</span>
        </a>
    </div>
</div>
</div>
<script type="text/javascript" src="js/framework7.min.js"></script>
<script>
  var myApp = new Framework7();
</script>
<script>
      var myApp = new Framework7({
        animateNavBackIcon:true
      });
      var mainView = myApp.addView('.view-main', {
        dynamicNavbar: true,
      });
</script>
</body>
</html>
