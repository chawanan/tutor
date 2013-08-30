<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <!-- Use the .htaccess and remove these lines to avoid edge case issues.
             More info: h5bp.com/b/378 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?=$title?></title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="humans.txt">

    <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />

    <!-- Facebook Metadata /-->
    <meta property="fb:page_id" content="" />
    <meta property="og:image" content="" />
    <meta property="og:description" content=""/>
    <meta property="og:title" content=""/>

    <!-- Google+ Metadata /-->
    <meta itemprop="name" content="">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <!-- We highly recommend you use SASS and write your custom styles in sass/_custom.scss.
             However, there is a blank style.css in the css directory should you prefer -->
    
    <link rel="stylesheet" href="<?=base_url("css/gumby.css")?>">
     <!--<link rel="stylesheet" href="css/style.css"> 
         <link rel="stylesheet" href="css/gumby.css">-->

    <!--<script src="js/libs/modernizr-2.6.2.min.js"></script>-->
    <script src="<?=base_url("js/libs/modernizr-2.6.2.min.js")?>"></script>
</head>

<style>
   /* .btn,.drawer { margin-bottom:10px; }
    .drawer { text-align: center; }
    h1.lead { border-bottom: 1px dotted #ccc; margin-bottom: 30px; }
    h4.lead { margin-bottom:10px; }
    #icon_map ul li { font-size: 16px; }
    .smallify { font-size: 13px; }
    .modal h2, .modal .btn { margin: 5% 0 20px; }
   */
    .navbar a.toggle:hover { background: #f7f7f7; }
    
    a.tooltip {outline:none; }
    a.tooltip strong {line-height:30px;}
    a.tooltip:hover {text-decoration:none;} 
    a.tooltip span {   /* Must separate into any browser */
        z-index:10;display:none; padding:14px 20px;
        margin-top: -30px; margin-left:28px;
        width:240px; line-height:16px;
    }
    a.tooltip:hover span{
        display:inline; position:absolute; color:#111;
        border:1px solid #DCA; background:#fffAF0;}
        
    /*CSS3 extras*/
    a.tooltip span
    {
        border-radius:4px;
        -moz-border-radius: 4px;
        -webkit-border-radius: 4px;
            
        -moz-box-shadow: 5px 5px 8px #CCC;
        -webkit-box-shadow: 5px 5px 8px #CCC;
        box-shadow: 5px 5px 8px #CCC;
    }
</style>

<body >
    
	<div class="row" style="margin-top: 5px; margin-bottom: 0px;">	
	    <div class="twelve columns" >
	        <div class="row">
	            <div class="two columns" >
                    <a href="#">
                        <img src="<?=base_url('img/director.jpg')?>"/>
                    </a>
                </div>
                <div class="ten columns">
                    <div class="row">
                        <div class=" push_seven one columns">
                            <a href="#"><img src="<?=base_url('img/icon/fb.png')?>"/></a>
                        </div>
                        <div class=" one columns">
                            <a href="#"><img src="<?=base_url('img/icon/tw.png')?>"/></a>
                        </div>
                        <div class=" one columns">
                            <a href="#"><img src="<?=base_url('img/icon/yt.png')?>"/></a>
                        </div>
                        <div class=" one columns">
                            <a href="#" class="tooltip">
                                <img src="<?=base_url('img/icon/mail.png')?>" />
                                <span>
                                    <img src="<?=base_url('img/icon/gmail.png')?>"/>
                                    <strong>google@gmail.com</strong><br />
                                    <img src="<?=base_url('img/icon/ymail.png')?>"/>
                                    <strong>yahoo@yahoo.com</strong><br />
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="seven columns" >
                            <br/>
                            <h3>Dr.Apichai</h3>
                            <h4>สำนักเตรียมผู้อำนวยการ</h4>
                        </div>
                        <div class=" four columns" >
                                <i class="icon-phone"></i><b>02-5555555, 085-5555555</b>
                        </div>
                    </div>
                </div>
	        </div>
	    </div>
	</div>

	<div class="navbar row" id="nav2" style="background: #3b5998; margin-bottom: 5px;">
		<a class="toggle" gumby-trigger="#nav2 > ul" href="#"><i class="icon-menu"></i></a>
		<ul class="twelve columns">
			<li><a href="#">หน้าแรก</a></li>
			<li><a href="#">ประวัติวิทยากร</a></li>
			<li><a href="#">หลักสูตรและการสมัคร</a></li>
			<li><a href="#">ข่าวการศึกษา</a></li>
			<li><a href="#">บทความ</a></li>
			<li><a href="#">ภาพกิจกรรม</a></li>
			<li><a href="#">ติดต่อเรา</a></li>			
		</ul>
	</div>
  </body>
</html>
