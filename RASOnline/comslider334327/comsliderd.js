function comSlider334327() { 
var self = this; 
var g_HostRoot = "";
var g_TransitionTimeoutRef = null;
var g_CycleTimeout = 5;
var g_currFrame = 0;
var g_fontLoadJsRetries = 0;
var g_currDate = new Date(); var g_currTime = g_currDate.getTime();var g_microID = g_currTime + '-' + Math.floor((Math.random()*1000)+1); 
var g_InTransition = 0;var g_Navigation = 0;this.getCurrMicroID = function() { return g_microID; } 
this.comSLoadImgInFrame = function(frameid, src) 
{
     jqCS334327("#comSImg334327_"+frameid+" img").attr("src", src).load(function(){
         if (!this.complete || typeof this.naturalWidth == "undefined" || this.naturalWidth == 0)
         {
             //broken image
         }
     });
}
this.setNavStyle = function(id, background, color, border, type)
{
 if (background == "")
 {
     jqCS334327("#comSNavigation334327_"+id).css("background", "none");
 }
 else
 {
     jqCS334327("#comSNavigation334327_"+id).css("background", "#"+background);
 }
 jqCS334327("#comSNavigation334327_"+id).css("background", "#"+background);
 jqCS334327("#comSNavigation334327_"+id).css("color", "#"+color);
 jqCS334327("#comSNavigation334327_"+id).css("border", border+"px solid #"+color);
 var margin = (-1)*border;
 jqCS334327("#comSNavigation334327_"+id).css("margin-top", margin+"px");
 jqCS334327("#comSNavigation334327_"+id).css("margin-left", margin+"px");
 if (type == 0)
 {
   jqCS334327("#comImgBullet334327_"+id).show();
   jqCS334327("#comImgBulletcurr334327_"+id).hide();
 }
 else
 {
   jqCS334327("#comImgBulletcurr334327_"+id).show();
   jqCS334327("#comImgBullet334327_"+id).hide();
 }
}
this.targetClearTimeouts = function()
{
 if (g_TransitionTimeoutRef != null)     { window.clearTimeout(g_TransitionTimeoutRef); g_TransitionTimeoutRef = null;}
}
this.getNextFrame = function()
{
 var ret = g_currFrame;
 ret++;
 if (ret == 5) {ret = 0;}
 return ret;
}
this.getPrevFrame = function()
{
 var ret = g_currFrame;
 ret--;
 if (ret < 0) {ret = (5-1);}
 return ret;
}
this.stopAll = function()
{
jqCS334327("#comSFrame334327_0").stop(true, true);
jqCS334327("#comSFrameSek334327_0").stop(true, true);
jqCS334327("#comSFrame334327_1").stop(true, true);
jqCS334327("#comSFrameSek334327_1").stop(true, true);
jqCS334327("#comSFrame334327_2").stop(true, true);
jqCS334327("#comSFrameSek334327_2").stop(true, true);
jqCS334327("#comSFrame334327_3").stop(true, true);
jqCS334327("#comSFrameSek334327_3").stop(true, true);
jqCS334327("#comSFrame334327_4").stop(true, true);
jqCS334327("#comSFrameSek334327_4").stop(true, true);
}
this.switchFrame = function()
{
     g_Navigation = 1;
     var currFrame=g_currFrame;
     g_currFrame = self.getNextFrame();
     self.switchFromToFrame(currFrame, g_currFrame);
}
 
this.switchFramePrev = function()
{
     g_Navigation = 0;
     var currFrame=g_currFrame;
     g_currFrame = self.getPrevFrame();
     self.switchFromToFrame(currFrame, g_currFrame);
}
 
this.switchToFrame = function(toFrame)
{
     if ((g_InTransition == 1) || (g_currFrame == toFrame))
     {
         if (g_currFrame == toFrame) { return false; }
         self.stopAll();
     }
     var currFrame=g_currFrame;
     g_currFrame=toFrame;
     if (currFrame < g_currFrame)
         g_Navigation = 0;
     else
         g_Navigation = 1;
     self.switchFromToFrame(currFrame, g_currFrame);
}
 
this.switchFromToFrame =  function(currFrame, toFrame)
{
     if (g_InTransition == 1)
     {
         self.stopAll();
     }
g_InTransition = 1;
self.startTransitionTimer();
     jqCS334327("#comSFrameSek334327_"+currFrame+"").css("z-index", 1);
     jqCS334327("#comSFrameSek334327_"+toFrame+"").css("z-index", 2);
     jqCS334327("#comSFrameSek334327_"+toFrame+"").hide().fadeIn(1350, function() { 
if (g_microID !=objcomSlider334327.getCurrMicroID()){return false;};jqCS334327("#comSFrame334327_"+currFrame).hide(); g_InTransition = 0;
 } ); 
  self.setNavStyle(currFrame, '','CCCCCC',1, 0);  self.setNavStyle(toFrame, '','FFFFFF',1, 1);     jqCS334327("#comSFrame334327_"+toFrame).show(1, function(){  });
     
     
     
     
}
this.startTransitionTimer = function()
{
  self.targetClearTimeouts(); g_TransitionTimeoutRef = window.setTimeout(function() {objcomSlider334327.onTransitionTimeout(g_microID)}, g_CycleTimeout*1000);
}
this.onTransitionTimeout = function(microID)
{
   if (g_microID != microID) { return false; }
     self.switchFrame();
}
this.initFrame = function()
{
g_currFrame = 0;
self.startTransitionTimer();
     jqCS334327("#comSFrameSek334327_"+g_currFrame+"").hide().fadeIn(1350);
  jqCS334327("#comSFrame334327_"+g_currFrame).show(1, function(){if (g_microID !=objcomSlider334327.getCurrMicroID()){return false;};self.setNavStyle(g_currFrame, '','FFFFFF',1, 1);     });
  return true;
}

					this.scriptLoaded = function()
					{
				   jqCS334327 = jQuery334327.noConflict(false);jqCS334327("#comslider_in_point_334327").html('<div id="comSWrapper334327_" name="comSWrapper334327_" style="border:0px; width:667px; height:560px; position: relative;"><div id="comSWrapper334327_" name="comSWrapper334327_" style="overflow:hidden; background: none; border:0px; width:667px; height:560px; "><div id="comSFrameWrapper334327_" name="comSFrameWrapper334327_" style="position: absolute; top: 0px; left: 0px;"><div id="comSFrame334327_0" name="comSFrame334327_0" style="position:absolute; top:0px; left:0px; width:667px; height:500px;"><div id="comSFrameSek334327_0" name="comSFrameSek334327_0" style="position:absolute; overflow:hidden; top:0px; left:0px; width:667px; height:500px;"><div id="comSImg334327_0" name="comSImg334327_0" style="position:absolute; overflow:hidden; top:0px; left:0px; width:667px; height:500px;"><img style="border:0px; width:669px; height:500px;"></img></div><div id="comSHtml334327__bk0" name="comSHtml334327__bk0" style="background: #000000; position:absolute; overflow:hidden; top:0px; left:333px; width:0px; height:500px;"></div><script type="text/javascript"> jqCS334327("#comSHtml334327__bk0").fadeTo(0,0.5);</script><div id="comSHtml334327_0" name="comSHtml334327_0" style="padding:10px; background: transparent; position:absolute; overflow:hidden; top:0px; left:333px; width:0px; height:500px;"></div></div></div><div id="comSFrame334327_1" name="comSFrame334327_1" style="position:absolute; top:0px; left:0px; width:667px; height:500px;"><div id="comSFrameSek334327_1" name="comSFrameSek334327_1" style="position:absolute; overflow:hidden; top:0px; left:0px; width:667px; height:500px;"><div id="comSImg334327_1" name="comSImg334327_1" style="position:absolute; overflow:hidden; top:0px; left:0px; width:667px; height:500px;"><img style="border:0px; width:669px; height:500px;"></img></div></div></div><div id="comSFrame334327_2" name="comSFrame334327_2" style="position:absolute; top:0px; left:0px; width:667px; height:500px;"><div id="comSFrameSek334327_2" name="comSFrameSek334327_2" style="position:absolute; overflow:hidden; top:0px; left:0px; width:667px; height:500px;"><div id="comSImg334327_2" name="comSImg334327_2" style="position:absolute; overflow:hidden; top:0px; left:0px; width:667px; height:500px;"><img style="border:0px; width:669px; height:500px;"></img></div></div></div><div id="comSFrame334327_3" name="comSFrame334327_3" style="position:absolute; top:0px; left:0px; width:667px; height:500px;"><div id="comSFrameSek334327_3" name="comSFrameSek334327_3" style="position:absolute; overflow:hidden; top:0px; left:0px; width:667px; height:500px;"><div id="comSImg334327_3" name="comSImg334327_3" style="position:absolute; overflow:hidden; top:0px; left:0px; width:667px; height:500px;"><img style="border:0px; width:669px; height:500px;"></img></div></div></div><div id="comSFrame334327_4" name="comSFrame334327_4" style="position:absolute; top:0px; left:0px; width:667px; height:500px;"><div id="comSFrameSek334327_4" name="comSFrameSek334327_4" style="position:absolute; overflow:hidden; top:0px; left:0px; width:667px; height:500px;"><div id="comSImg334327_4" name="comSImg334327_4" style="position:absolute; overflow:hidden; top:0px; left:0px; width:667px; height:500px;"><img style="border:0px; width:669px; height:500px;"></img></div></div></div></div><a name="0" style="cursor:pointer; text-decoration:none !important; font-size:40px;" href=""><div id="comSNavigation334327_0" name="comSNavigation334327_0" style="margin-left:-1px; margin-top:-1px; border: 1px solid #CCCCCC; position:absolute; height:50px; width:66px; top:505px; left:158px; z-index: 5; text-align: center; vertical-align:bottom;  color: #CCCCCC;background: #; "><div id="height_workaround" style="font-size:1px;line-height:0;height:50px;">&nbsp;<img style="position: absolute; top: 0px; left: 0px; border:0px;" id="comImgBullet334327_0" name="comImgBullet334327_0" src="comslider334327/imgnav/1408301741247001.jpg?timstamp=1409414757" /><img style="display: none; position: absolute; position: absolute; top: 0px; left: 0px; border:0px;" id="comImgBulletcurr334327_0" name="comImgBulletcurr334327_0" src="comslider334327/imgnav/1408301741247001.jpg?timstamp=1409414757" /></div></div></a><a name="1" style="cursor:pointer; text-decoration:none !important; font-size:40px;" href=""><div id="comSNavigation334327_1" name="comSNavigation334327_1" style="margin-left:-1px; margin-top:-1px; border: 1px solid #CCCCCC; position:absolute; height:50px; width:66px; top:505px; left:229px; z-index: 5; text-align: center; vertical-align:bottom;  color: #CCCCCC;background: #; "><div id="height_workaround" style="font-size:1px;line-height:0;height:50px;">&nbsp;<img style="position: absolute; top: 0px; left: 0px; border:0px;" id="comImgBullet334327_1" name="comImgBullet334327_1" src="comslider334327/imgnav/1408301744593021.jpg?timstamp=1409414757" /><img style="display: none; position: absolute; position: absolute; top: 0px; left: 0px; border:0px;" id="comImgBulletcurr334327_1" name="comImgBulletcurr334327_1" src="comslider334327/imgnav/1408301744593021.jpg?timstamp=1409414757" /></div></div></a><a name="2" style="cursor:pointer; text-decoration:none !important; font-size:40px;" href=""><div id="comSNavigation334327_2" name="comSNavigation334327_2" style="margin-left:-1px; margin-top:-1px; border: 1px solid #CCCCCC; position:absolute; height:50px; width:66px; top:505px; left:300px; z-index: 5; text-align: center; vertical-align:bottom;  color: #CCCCCC;background: #; "><div id="height_workaround" style="font-size:1px;line-height:0;height:50px;">&nbsp;<img style="position: absolute; top: 0px; left: 0px; border:0px;" id="comImgBullet334327_2" name="comImgBullet334327_2" src="comslider334327/imgnav/1408301746339221.jpg?timstamp=1409414757" /><img style="display: none; position: absolute; position: absolute; top: 0px; left: 0px; border:0px;" id="comImgBulletcurr334327_2" name="comImgBulletcurr334327_2" src="comslider334327/imgnav/1408301746339221.jpg?timstamp=1409414757" /></div></div></a><a name="3" style="cursor:pointer; text-decoration:none !important; font-size:40px;" href=""><div id="comSNavigation334327_3" name="comSNavigation334327_3" style="margin-left:-1px; margin-top:-1px; border: 1px solid #CCCCCC; position:absolute; height:50px; width:66px; top:505px; left:371px; z-index: 5; text-align: center; vertical-align:bottom;  color: #CCCCCC;background: #; "><div id="height_workaround" style="font-size:1px;line-height:0;height:50px;">&nbsp;<img style="position: absolute; top: 0px; left: 0px; border:0px;" id="comImgBullet334327_3" name="comImgBullet334327_3" src="comslider334327/imgnav/1408301747531751.jpg?timstamp=1409414757" /><img style="display: none; position: absolute; position: absolute; top: 0px; left: 0px; border:0px;" id="comImgBulletcurr334327_3" name="comImgBulletcurr334327_3" src="comslider334327/imgnav/1408301747531751.jpg?timstamp=1409414757" /></div></div></a><a name="4" style="cursor:pointer; text-decoration:none !important; font-size:40px;" href=""><div id="comSNavigation334327_4" name="comSNavigation334327_4" style="margin-left:-1px; margin-top:-1px; border: 1px solid #CCCCCC; position:absolute; height:50px; width:66px; top:505px; left:442px; z-index: 5; text-align: center; vertical-align:bottom;  color: #CCCCCC;background: #; "><div id="height_workaround" style="font-size:1px;line-height:0;height:50px;">&nbsp;<img style="position: absolute; top: 0px; left: 0px; border:0px;" id="comImgBullet334327_4" name="comImgBullet334327_4" src="comslider334327/imgnav/1408301750019571.jpg?timstamp=1409414757" /><img style="display: none; position: absolute; position: absolute; top: 0px; left: 0px; border:0px;" id="comImgBulletcurr334327_4" name="comImgBulletcurr334327_4" src="comslider334327/imgnav/1408301750019571.jpg?timstamp=1409414757" /></div></div></a></div><div id="comSNavigationControl334327__back" name="comSNavigationControl334327__back" style=" cursor: pointer; margin: 0px; margin-left:5px; border: 0px; position:absolute; height:32px; width:32px; top:234px; left:0px; z-index: 6; text-align: center; vertical-align:bottom;  background-color: transparent; "><img class="def" style="position: absolute; top: 0px; left: 0px; border: 0px;" src="comslider334327/imgnavctl/defback.png?1409414589" /><img class="hover" style="position: absolute; top: 0px; left: 0px; display:none; border: 0px;" src="comslider334327/imgnavctl/defbackhover.png?1409414589" /></div><script type="text/javascript"> jqCS334327("#comSNavigationControl334327__back").bind(\'mouseenter\', function() {  jqCS334327(this).css(\'background-color\', \'transparent\'); jqCS334327("#comSNavigationControl334327__back img.hover").show(); jqCS334327("#comSNavigationControl334327__back img.def").hide(); });</script><script type="text/javascript"> jqCS334327("#comSNavigationControl334327__back").bind(\'mouseleave\', function() {  jqCS334327(this).css(\'background-color\', \'transparent\'); jqCS334327("#comSNavigationControl334327__back img.def").show();  jqCS334327("#comSNavigationControl334327__back img.hover").hide(); });</script><script type="text/javascript"> jqCS334327("#comSNavigationControl334327__back").bind(\'click\', function() { objcomSlider334327.switchFramePrev(); });</script><div id="comSNavigationControl334327__forward" name="comSNavigationControl334327__forward" style=" cursor: pointer; margin: 0px; margin-left:-5px; border: 0px; position:absolute; height:32px; width:32px; top:234px; left:635px; z-index: 6; text-align: center; vertical-align:bottom; background-color: transparent; "><img class="def" style="position: absolute; top: 0px; left: 0px; border: 0px;" src="comslider334327/imgnavctl/defforward.png?1409414589" /><img class="hover" style="position: absolute; top: 0px; left: 0px; display:none; border: 0px;" src="comslider334327/imgnavctl/defforwardhover.png?1409414589" /></div><script type="text/javascript"> jqCS334327("#comSNavigationControl334327__forward").bind(\'mouseenter\', function() {  jqCS334327(this).css(\'background-color\', \'transparent\'); jqCS334327("#comSNavigationControl334327__forward img.hover").show(); jqCS334327("#comSNavigationControl334327__forward img.def").hide(); });</script><script type="text/javascript"> jqCS334327("#comSNavigationControl334327__forward").bind(\'mouseleave\', function() {  jqCS334327(this).css(\'background-color\', \'transparent\'); jqCS334327("#comSNavigationControl334327__forward img.def").show();  jqCS334327("#comSNavigationControl334327__forward img.hover").hide(); });</script><script type="text/javascript"> jqCS334327("#comSNavigationControl334327__forward").bind(\'click\', function() { objcomSlider334327.switchFrame(); });</script><script type="text/javascript"> jqCS334327("#comSNavigationControl334327__back").fadeTo(0,0.8);</script><script type="text/javascript"> jqCS334327("#comSNavigationControl334327__forward").fadeTo(0,0.8);</script></div>');
                    jqCS334327("#comslider_in_point_334327 a").bind('click',  function() { if ((this.name.length > 0) && (isNaN(this.name) == false)) {  self.switchToFrame(parseInt(this.name)); return false;} });
                self.comSLoadImgInFrame("0", "comslider334327/img/1408301741247001.jpg?1409414589");
jqCS334327("#comSFrame334327_0").hide();
self.comSLoadImgInFrame("1", "comslider334327/img/1408301744593021.jpg?1409414589");
jqCS334327("#comSFrame334327_1").hide();
self.comSLoadImgInFrame("2", "comslider334327/img/1408301746339221.jpg?1409414589");
jqCS334327("#comSFrame334327_2").hide();
self.comSLoadImgInFrame("3", "comslider334327/img/1408301747531751.jpg?1409414589");
jqCS334327("#comSFrame334327_3").hide();
self.comSLoadImgInFrame("4", "comslider334327/img/1408301750019571.jpg?1409414589");
jqCS334327("#comSFrame334327_4").hide();
jqCS334327("#comSFrame334327_4").hide();
self.initFrame();

}
var g_CSIncludes = new Array();
var g_CSLoading = false;
var g_CSCurrIdx = 0; 
 this.include = function(src, last) 
                {
                    if (src != '')
                    {				
                            var tmpInclude = Array();
                            tmpInclude[0] = src;
                            tmpInclude[1] = last;					
                            //
                            g_CSIncludes[g_CSIncludes.length] = tmpInclude;
                    }            
                    if ((g_CSLoading == false) && (g_CSCurrIdx < g_CSIncludes.length))
                    {


                            var oScript = null;
                            if (g_CSIncludes[g_CSCurrIdx][0].split('.').pop() == 'css')
                            {
                                oScript = document.createElement('link');
                                oScript.href = g_CSIncludes[g_CSCurrIdx][0];
                                oScript.type = 'text/css';
                                oScript.rel = 'stylesheet';

                                oScript.onloadDone = true; 
                                g_CSLoading = false;
                                g_CSCurrIdx++;								
                                if (g_CSIncludes[g_CSCurrIdx-1][1] == true) 
                                        self.scriptLoaded(); 
                                else
                                        self.include('', false);
                            }
                            else
                            {
                                oScript = document.createElement('script');
                                oScript.src = g_CSIncludes[g_CSCurrIdx][0];
                                oScript.type = 'text/javascript';

                                //oScript.onload = scriptLoaded;
                                oScript.onload = function() 
                                { 
                                        if ( ! oScript.onloadDone ) 
                                        {
                                                oScript.onloadDone = true; 
                                                g_CSLoading = false;
                                                g_CSCurrIdx++;								
                                                if (g_CSIncludes[g_CSCurrIdx-1][1] == true) 
                                                        self.scriptLoaded(); 
                                                else
                                                        self.include('', false);
                                        }
                                };
                                oScript.onreadystatechange = function() 
                                { 
                                        if ( ( "loaded" === oScript.readyState || "complete" === oScript.readyState ) && ! oScript.onloadDone ) 
                                        {
                                                oScript.onloadDone = true;
                                                g_CSLoading = false;	
                                                g_CSCurrIdx++;
                                                if (g_CSIncludes[g_CSCurrIdx-1][1] == true) 
                                                        self.scriptLoaded(); 
                                                else
                                                        self.include('', false);
                                        }
                                }
                                
                            }
                            //
                            document.getElementsByTagName("head").item(0).appendChild(oScript);
                            //
                            g_CSLoading = true;
                    }

                }
                

}
objcomSlider334327 = new comSlider334327();
objcomSlider334327.include('comslider334327/js/helpers.js', false);
objcomSlider334327.include('comslider334327/js/jquery-1.10.1.js', false);
objcomSlider334327.include('comslider334327/js/jquery-ui-1.10.3.effects.js', true);
