<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title>CydiaImpactor</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/framework7.ios.css?v=1.0">
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
</head>

<body style="background: #eeeeeeb5;" >



<div style="margin-top: 250px;" class="left"><a href="https://ifenix.me/Impactor/" class="back link">
   <i class="icon back"></i></a></div>

 <p style="color: #000;margin-top: 50px;"> Press Install to complete the download process </p>


        <?php

if(isset($_POST['submit'])){

  $url = $_POST['url'];
  $rand = 'q1w2e3r4t5y6u7i7o8p9asdf7g5h7j8k7l5z4x6cv8b8n9m';
  $rand2= substr(str_shuffle($rand),1,5);

$plist = "

<!DOCTYPE plist PUBLIC \"-//Apple//DTD PLIST 1.0//EN\" \"http://www.apple.com/DTDs/PropertyList-1.0.dtd\">
<plist version=\"1.0\">
<dict>
<!-- array of downloads. -->
	<key>items</key>
	<array>
		<dict>
			<!-- an array of assets to download -->
				<key>assets</key>
				<array>
					<dict>
						<!-- required. the asset kind. -->
						<key>kind</key>
						<string>software-package</string>
						<key>url</key>
						<string>$url</string>
					</dict>
					<dict>
						<key>kind</key>
						<string>display-image</string>
						<key>needs-shine</key>
						<true/>
						<key>url</key>
						<string>https://e.top4top.net/p_974e8d8m1.png</string>
					</dict>
					<dict>
						<key>kind</key>
						<string>full-size-image</string>
						<key>needs-shine</key>
						<true/>
						<key>url</key>
						<string>https://e.top4top.net/p_974e8d8m1.png</string>
					</dict>
				</array>
				<key>metadata</key>
			<dict>
				<key>bundle-identifier</key>
				<string>me.$rand2.AZinstaller</string>
				<key>bundle-version</key>
				<string>5.4</string>
				<key>kind</key>
				<string>software</string>
				<key>title</key>
				<string>

install Application

You used MY Toles #itsFywre
twitter   : @its_Fywre
snapchat  : @its_fywre
instagram : @its_fywre

itsFywre


				</string>
			</dict>
		</dict>
	</array>
</dict>
</plist>


";

  file_put_contents(__DIR__.'/installer/'.$rand2.".plist",$plist);


 $pathinstall = "https://ifenix.me/Impactor/"."/installer/$rand2".".plist";



 $action ="itms-services://?action=download-manifest&url=";

 $goplist= "<center >
 <br><br>
 <span class='download download-az down'>" .  "" . "<a  id='downapp' onclick=\"window.location='$action$pathinstall'\">" . " Install   </a>" . "</span></center>";


 echo $goplist;

 die();

}


?>
</form>
</div>
</section>
</center>
