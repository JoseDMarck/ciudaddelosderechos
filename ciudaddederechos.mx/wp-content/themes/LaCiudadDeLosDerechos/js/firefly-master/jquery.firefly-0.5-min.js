!function(e){var f={total:10,ofTop:0,ofLeft:0,on:"document.body",twinkle:.2,minPixel:1,maxPixel:2,color:"#fff",namespace:"jqueryFireFly",_paused:!1};e.firefly=function(t){if(e.firefly.settings=e.extend({},f,t),e.firefly.eleHeight=e(e.firefly.settings.on).height(),e.firefly.eleWidth=e(e.firefly.settings.on).width(),e(window).resize(function(){if("document.body"!==e.firefly.settings.on){var f=e(e.firefly.settings.on).offset();e.firefly.offsetTop=f.top,e.firefly.offsetLeft=f.left,e.firefly.eleHeight=e(e.firefly.settings.on).height(),e.firefly.eleWidth=e(e.firefly.settings.on).width()}else e.firefly.offsetTop=0,e.firefly.offsetLeft=0,e.firefly.eleHeight=e(document.body).height(),e.firefly.eleWidth=e(document.body).width()}),"document.body"!==e.firefly.settings.on){var r=e(e.firefly.settings.on).offset();e.firefly.offsetTop=r.top,e.firefly.offsetLeft=r.left,e.firefly.eleHeight=e(e.firefly.settings.on).height(),e.firefly.eleWidth=e(e.firefly.settings.on).width()}else e.firefly.offsetTop=0,e.firefly.offsetLeft=0,e.firefly.eleHeight=e(document.body).height(),e.firefly.eleWidth=e(document.body).width();for(i=0;i<e.firefly.settings.total;i++){var l=e.firefly.randomPixel(e.firefly.settings.minPixel,e.firefly.settings.maxPixel),n=e.firefly.create(l);e.firefly.fly(n)}return e.firefly.sparks=e(e.firefly.settings.on).children("."+e.firefly.settings.namespace),this.pause=function(f){e.firefly.settings._paused=!0,f&&e.each(e.firefly.sparks,function(f,i){e(i).stop(!0)})},this.resume=function(){e.firefly.settings._paused=!1,e.each(e.firefly.sparks,function(f,i){e.firefly.fly(i)})},this},e.firefly.create=function(f){return spark=e("<div>").hide(),spark.addClass(e.firefly.settings.namespace),e.firefly.settings._onSparkID++,"document.body"===e.firefly.settings.on?e(document.body).append(spark):e(e.firefly.settings.on).append(spark),spark.css({position:"absolute",width:f,height:f,"background-color":e.firefly.settings.color,"z-index":e.firefly.random(20),top:e.firefly.offsetTop+e.firefly.random(e.firefly.eleHeight-50),left:e.firefly.offsetLeft+e.firefly.random(e.firefly.eleWidth-50)}).show()},e.firefly.fly=function(f){e(f).animate({top:e.firefly.offsetTop+e.firefly.random(e.firefly.eleHeight-50),left:e.firefly.offsetLeft+e.firefly.random(e.firefly.eleWidth-50),opacity:e.firefly.opacity(e.firefly.settings.twinkle)},{duration:2e3*(e.firefly.random(10)+5),done:function(){e.firefly.settings._paused||e.firefly.fly(f)}})},e.firefly.randomPixel=function(e,f){return Math.floor(Math.random()*(f-e+1)+e)},e.firefly.random=function(e){return Math.ceil(Math.random()*e)-1},e.firefly.opacity=function(e){return op=Math.random(),op<e?0:1}}(jQuery);