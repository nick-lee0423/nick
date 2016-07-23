/**
 * Created by nick on 16-7-10.
 */
////////////////////////////////////////////////////  添加图标到地图并连线  ///////////////////////////////////////////
// 全局参数
var L=0;//标识是第几个
var Json =[];//接受转换了的百度坐标
var hashMap = {   //自定义创建的hasmap 装载转换后的坐标值
    Set : function(key,value){this[key] = value},
    Get : function(key){return this[key]},
    Contains : function(key){return this.Get(key) == null?false:true},
    Remove : function(key){delete this[key]}
}
window.loaded=SetMarkPoint();
//入口函数
function SetMarkPoint() {
    // map.clearOverlays();
    // map.centerAndZoom(point, 17);//为了箭头的太小设置
    //例如  设置这样一个字符串并拆分成数组对象 ，里面的是GPS坐标，转换成百度坐标后按顺序显示在地图上并且点之间用带箭头的红线
    var data="#测试|116.19045683|29.27100653#测试|116.19045244|29.27100924#测试|116.19045262|29.27100842#测试|116.19044917|29.27101235#测试|116.18752215|29.26957149#测试|116.18436463|29.26704273";//姓名+经纬度
    var DataRow = data.split("#");
    Json =[];//接受转换了的百度坐标  初始化全局变量
    var K=DataRow.length;//标示符判断最后K、L是否相等
    L=0;//初始化全局变量
    for(var J=0;J< DataRow.length;J++)
    {
        var dr = DataRow[J].split("|");
        //这里把函数放在外面去调用，因为函数里面是一个异步操作，如果写成内联函数或导致循环值出现不可预知的错误。
        GPSChanges(dr,J,K);//J为异步获取转换的GPS坐标的标示

    }
}



function GPSChanges(dr,i,K){
    alert(i);
    // var gpsPoint = new BMap.Point(dr[1], dr[2]);
    //因为转换GPS坐标是异步的，所以循环转换的时候返回来的时候顺序可能不一致，我们可以修改convertor.js的BMap.Convertor.translate()方法，重载一个带返回标示的参数translate()方法。
    // BMap.Convertor.translate(gpsPoint 要转换的GPS坐标,0 为GPS类型的坐标，回调函数，i为返回的标示)
    // BMap.Convertor.translate(gpsPoint, 0, function(gpsLocationPoint,Y) {
    //     var myCompOverlay = new ComplexCustomOverlay(gpsLocationPoint, dr[0]);
    //     map.addOverlay(myCompOverlay);//添加点
    //     alert(i);
    // },i);
}

(function(){        //闭包
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
    function translate(point,type,callback,X){
           var callbackName = 'cbk_' + Math.round(Math.random() * 10000);    //随机函数名
           var xyUrl = "http://api.map.baidu.com/ag/coord/convert?from="+ type + "&to=4&x=" + point.lng + "&y=" + point.lat + "&callback=BMap.Convertor." + callbackName;
          //动态创建script标签
           load_script(xyUrl);
           BMap.Convertor[callbackName] = function(xyResult){
               delete BMap.Convertor[callbackName];    //调用完需要删除改函数
               var point = new BMap.Point(xyResult.x, xyResult.y);
                  callback && callback(point,X);//修改返回参数，添加一个参数X
             }
         }

  window.BMap = window.BMap || {};
  BMap.Convertor = {};
  BMap.Convertor.translate = translate;
 })();