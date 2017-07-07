function comSlider334359() { 
var self = this; 
var g_HostRoot = "";
var g_TransitionTimeoutRef = null;
var g_CycleTimeout = 10;
var g_currFrame = 0;
var g_fontLoadJsRetries = 0;
var g_currDate = new Date(); var g_currTime = g_currDate.getTime();var g_microID = g_currTime + '-' + Math.floor((Math.random()*1000)+1); 
var g_InTransition = 0;var g_Navigation = 0;this.getCurrMicroID = function() { return g_microID; } 
this.comSLoadImgInFrame = function(frameid, src) 
{
     jqCS334359("#comSImg334359_"+frameid+" img").attr("src", src).load(function(){
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
     jqCS334359("#comSNavigation334359_"+id).css("background", "none");
 }
 else
 {
     jqCS334359("#comSNavigation334359_"+id).css("background", "#"+background);
 }
 jqCS334359("#comSNavigation334359_"+id).css("background", "#"+background);
 jqCS334359("#comSNavigation334359_"+id).css("color", "#"+color);
 jqCS334359("#comSNavigation334359_"+id).css("border", border+"px solid #"+color);
 var margin = (-1)*border;
 jqCS334359("#comSNavigation334359_"+id).css("margin-top", margin+"px");
 jqCS334359("#comSNavigation334359_"+id).css("margin-left", margin+"px");
 if (type == 0)
 {
   jqCS334359("#comImgBullet334359_"+id).show();
   jqCS334359("#comImgBulletcurr334359_"+id).hide();
 }
 else
 {
   jqCS334359("#comImgBulletcurr334359_"+id).show();
   jqCS334359("#comImgBullet334359_"+id).hide();
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
jqCS334359("#comSFrame334359_0").stop(true, true);
jqCS334359("#comSFrameSek334359_0").stop(true, true);
jqCS334359("#comSFrame334359_1").stop(true, true);
jqCS334359("#comSFrameSek334359_1").stop(true, true);
jqCS334359("#comSFrame334359_2").stop(true, true);
jqCS334359("#comSFrameSek334359_2").stop(true, true);
jqCS334359("#comSFrame334359_3").stop(true, true);
jqCS334359("#comSFrameSek334359_3").stop(true, true);
jqCS334359("#comSFrame334359_4").stop(true, true);
jqCS334359("#comSFrameSek334359_4").stop(true, true);
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
     jqCS334359("#comSFrameSek334359_"+currFrame+"").css("z-index", 1);
     jqCS334359("#comSFrameSek334359_"+toFrame+"").css("z-index", 2);
     jqCS334359("#comSFrameSek334359_"+toFrame+"").hide().fadeIn(1350, function() { 
 } ); 
 jqCS334359("#comSFrameSek334359_"+currFrame+"").fadeOut(1350);
  self.setNavStyle(currFrame, '','FFFFFF',1, 0);  self.setNavStyle(toFrame, 'FFFFFF','FFFFFF',3, 1);jqCS334359("#comSFrame334359_"+currFrame).hide("slide", { direction: "right" }, 1500); jqCS334359("#comSFrame334359_"+toFrame).show("slide", { direction: "left" }, 1500, function() {if (g_microID !=objcomSlider334359.getCurrMicroID()){return false;}; jqCS334359("#comSFrame334359_"+currFrame).hide(); g_InTransition = 0;
});
     
     
     
     
}
this.startTransitionTimer = function()
{
  self.targetClearTimeouts(); g_TransitionTimeoutRef = window.setTimeout(function() {objcomSlider334359.onTransitionTimeout(g_microID)}, g_CycleTimeout*1000);
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
     jqCS334359("#comSFrameSek334359_"+g_currFrame+"").hide().fadeIn(1350);
  jqCS334359("#comSFrame334359_"+g_currFrame).show(1, function(){if (g_microID !=objcomSlider334359.getCurrMicroID()){return false;};self.setNavStyle(g_currFrame, 'FFFFFF','FFFFFF',3, 1);     });
  return true;
}

					this.scriptLoaded = function()
					{
				   jqCS334359 = jQuery334359.noConflict(false);jqCS334359("#comslider_in_point_334359").html('<div id="comSWrapper334359_" name="comSWrapper334359_" style="overflow:hidden; background: none; border:0px; width:567px; height:400px; position: relative;"><div id="comSFrameWrapper334359_" name="comSFrameWrapper334359_" style="position: absolute; top: 0px; left: 0px;"><div id="comSFrame334359_0" name="comSFrame334359_0" style="position:absolute; top:0px; left:0px; width:567px; height:400px;"><div id="comSFrameSek334359_0" name="comSFrameSek334359_0" style="position:absolute; overflow:hidden; top:0px; left:0px; width:567px; height:400px;"><div id="comSImg334359_0" name="comSImg334359_0" style="position:absolute; overflow:hidden; top:0px; left:0px; width:567px; height:400px;"><img style="border:0px; width:533px; height:400px;"></img></div></div></div><div id="comSFrame334359_1" name="comSFrame334359_1" style="position:absolute; top:0px; left:0px; width:567px; height:400px;"><div id="comSFrameSek334359_1" name="comSFrameSek334359_1" style="position:absolute; overflow:hidden; top:0px; left:0px; width:567px; height:400px;"><div id="comSImg334359_1" name="comSImg334359_1" style="position:absolute; overflow:hidden; top:0px; left:0px; width:567px; height:400px;"><img style="border:0px; width:533px; height:400px;"></img></div></div></div><div id="comSFrame334359_2" name="comSFrame334359_2" style="position:absolute; top:0px; left:0px; width:567px; height:400px;"><div id="comSFrameSek334359_2" name="comSFrameSek334359_2" style="position:absolute; overflow:hidden; top:0px; left:0px; width:567px; height:400px;"><div id="comSImg334359_2" name="comSImg334359_2" style="position:absolute; overflow:hidden; top:0px; left:0px; width:567px; height:400px;"><img style="border:0px; width:533px; height:400px;"></img></div></div></div><div id="comSFrame334359_3" name="comSFrame334359_3" style="position:absolute; top:0px; left:0px; width:567px; height:400px;"><div id="comSFrameSek334359_3" name="comSFrameSek334359_3" style="position:absolute; overflow:hidden; top:0px; left:0px; width:567px; height:400px;"><div id="comSImg334359_3" name="comSImg334359_3" style="position:absolute; overflow:hidden; top:0px; left:0px; width:567px; height:400px;"><img style="border:0px; width:533px; height:400px;"></img></div></div></div><div id="comSFrame334359_4" name="comSFrame334359_4" style="position:absolute; top:0px; left:0px; width:567px; height:400px;"><div id="comSFrameSek334359_4" name="comSFrameSek334359_4" style="position:absolute; overflow:hidden; top:0px; left:0px; width:567px; height:400px;"><div id="comSImg334359_4" name="comSImg334359_4" style="position:absolute; overflow:hidden; top:0px; left:0px; width:567px; height:400px;"><img style="border:0px; width:533px; height:400px;"></img></div></div></div></div><a name="0" style="cursor:pointer; text-decoration:none !important; font-size:36px;" href=""><div id="comSNavigation334359_0" name="comSNavigation334359_0" style="margin-left:-1px; margin-top:-1px; border: 1px solid #FFFFFF; position:absolute; height:45px; width:60px; top:345px; left:10px; z-index: 5; text-align: center; vertical-align:bottom;  color: #FFFFFF;background: #; "><div id="height_workaround" style="font-size:1px;line-height:0;height:45px;">&nbsp;<img style="position: absolute; top: 0px; left: 0px; border:0px;" id="comImgBullet334359_0" name="comImgBullet334359_0" src="comslider334359/imgnav/1408301839309851.jpg?timstamp=1409417169" /><img style="display: none; position: absolute; position: absolute; top: 0px; left: 0px; border:0px;" id="comImgBulletcurr334359_0" name="comImgBulletcurr334359_0" src="comslider334359/imgnav/1408301839309851.jpg?timstamp=1409417169" /></div></div></a><a name="1" style="cursor:pointer; text-decoration:none !important; font-size:36px;" href=""><div id="comSNavigation334359_1" name="comSNavigation334359_1" style="margin-left:-1px; margin-top:-1px; border: 1px solid #FFFFFF; position:absolute; height:45px; width:60px; top:345px; left:80px; z-index: 5; text-align: center; vertical-align:bottom;  color: #FFFFFF;background: #; "><div id="height_workaround" style="font-size:1px;line-height:0;height:45px;">&nbsp;<img style="position: absolute; top: 0px; left: 0px; border:0px;" id="comImgBullet334359_1" name="comImgBullet334359_1" src="comslider334359/imgnav/1408301839493611.jpg?timstamp=1409417169" /><img style="display: none; position: absolute; position: absolute; top: 0px; left: 0px; border:0px;" id="comImgBulletcurr334359_1" name="comImgBulletcurr334359_1" src="comslider334359/imgnav/1408301839493611.jpg?timstamp=1409417169" /></div></div></a><a name="2" style="cursor:pointer; text-decoration:none !important; font-size:36px;" href=""><div id="comSNavigation334359_2" name="comSNavigation334359_2" style="margin-left:-1px; margin-top:-1px; border: 1px solid #FFFFFF; position:absolute; height:45px; width:60px; top:345px; left:150px; z-index: 5; text-align: center; vertical-align:bottom;  color: #FFFFFF;background: #; "><div id="height_workaround" style="font-size:1px;line-height:0;height:45px;">&nbsp;<img style="position: absolute; top: 0px; left: 0px; border:0px;" id="comImgBullet334359_2" name="comImgBullet334359_2" src="comslider334359/imgnav/1408301844165301.jpg?timstamp=1409417169" /><img style="display: none; position: absolute; position: absolute; top: 0px; left: 0px; border:0px;" id="comImgBulletcurr334359_2" name="comImgBulletcurr334359_2" src="comslider334359/imgnav/1408301844165301.jpg?timstamp=1409417169" /></div></div></a><a name="3" style="cursor:pointer; text-decoration:none !important; font-size:36px;" href=""><div id="comSNavigation334359_3" name="comSNavigation334359_3" style="margin-left:-1px; margin-top:-1px; border: 1px solid #FFFFFF; position:absolute; height:45px; width:60px; top:345px; left:220px; z-index: 5; text-align: center; vertical-align:bottom;  color: #FFFFFF;background: #; "><div id="height_workaround" style="font-size:1px;line-height:0;height:45px;">&nbsp;<img style="position: absolute; top: 0px; left: 0px; border:0px;" id="comImgBullet334359_3" name="comImgBullet334359_3" src="comslider334359/imgnav/1408301844463081.jpg?timstamp=1409417169" /><img style="display: none; position: absolute; position: absolute; top: 0px; left: 0px; border:0px;" id="comImgBulletcurr334359_3" name="comImgBulletcurr334359_3" src="comslider334359/imgnav/1408301844463081.jpg?timstamp=1409417169" /></div></div></a><a name="4" style="cursor:pointer; text-decoration:none !important; font-size:36px;" href=""><div id="comSNavigation334359_4" name="comSNavigation334359_4" style="margin-left:-1px; margin-top:-1px; border: 1px solid #FFFFFF; position:absolute; height:45px; width:60px; top:345px; left:290px; z-index: 5; text-align: center; vertical-align:bottom;  color: #FFFFFF;background: #; "><div id="height_workaround" style="font-size:1px;line-height:0;height:45px;">&nbsp;<img style="position: absolute; top: 0px; left: 0px; border:0px;" id="comImgBullet334359_4" name="comImgBullet334359_4" src="comslider334359/imgnav/1408301845143381.jpg?timstamp=1409417169" /><img style="display: none; position: absolute; position: absolute; top: 0px; left: 0px; border:0px;" id="comImgBulletcurr334359_4" name="comImgBulletcurr334359_4" src="comslider334359/imgnav/1408301845143381.jpg?timstamp=1409417169" /></div></div></a></div>');
                    jqCS334359("#comslider_in_point_334359 a").bind('click',  function() { if ((this.name.length > 0) && (isNaN(this.name) == false)) {  self.switchToFrame(parseInt(this.name)); return false;} });
                self.comSLoadImgInFrame("0", "comslider334359/img/1408301839309851.jpg?1409417156");
jqCS334359("#comSFrame334359_0").hide();
self.comSLoadImgInFrame("1", "comslider334359/img/1408301839493611.jpg?1409417156");
jqCS334359("#comSFrame334359_1").hide();
self.comSLoadImgInFrame("2", "comslider334359/img/1408301844165301.jpg?1409417156");
jqCS334359("#comSFrame334359_2").hide();
self.comSLoadImgInFrame("3", "comslider334359/img/1408301844463081.jpg?1409417156");
jqCS334359("#comSFrame334359_3").hide();
self.comSLoadImgInFrame("4", "comslider334359/img/1408301845143381.jpg?1409417156");
jqCS334359("#comSFrame334359_4").hide();
jqCS334359("#comSFrame334359_4").hide();
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
objcomSlider334359 = new comSlider334359();
objcomSlider334359.include('comslider334359/js/helpers.js', false);
objcomSlider334359.include('comslider334359/js/jquery-1.10.1.js', false);
objcomSlider334359.include('comslider334359/js/jquery-ui-1.10.3.effects.js', true);
