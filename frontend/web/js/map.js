/**
 * Created by nick on 16-7-7.
 */

    var xyUrl = "http://api.map.baidu.com/geoconv/v1/?coords=113.261503,23.131377&from=1&to=5&ak=HaOsFKGIzk0qYUK1udQUAMMQPd1T38BG&callback=callback";

    load_script(xyUrl);

function load_script(xyUrl, callback){
    var head = document.getElementsByTagName('head')[0];
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = xyUrl;
    //借鉴了jQuery的script跨域方法
    script.onload = script.onreadystatechange = function(){
        if((!this.readyState || this.readyState === "loaded" || this.readyState === "complete")){
            callback && callback();
            // Handle memory leak in IE
            script.onload = script.onreadystatechange = null;
            if ( head && script.parentNode ) {
                head.removeChild( script );
            }
        }
    };
    // Use insertBefore instead of appendChild  to circumvent an IE6 bug.
    head.insertBefore( script, head.firstChild );
}

function callback(xyResult){
    if(xyResult.error != 0){return;}//出错就直接返回;
    var point = new BMap.Point(xyResult.result[0].x, xyResult.result[0].y);
  
    var marker = new BMap.Marker(point);
    map.addOverlay(marker);
    marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
    var label = new window.BMap.Label(markerArr.title, { offset: new window.BMap.Size(20, -10) });
    label.setStyle({
        "borderColor": "#808080",
        "color": "#333",
        "cursor": "pointer",
    });
    marker.setLabel(label);
}