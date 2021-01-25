(function(d) {
    // Function
    d.cColorSwitcher=function(b){b=d.extend({position:"left",switcherTitle:"No Colors",switcherColors:[],switcherTarget:""},b);var a=d('<div id="cColorSwitcher"></div>'),e=d("head"),f=d("body");a.css({transform:"translateY(-50%)"}).addClass("clearfix");d('<div class="ccs--body"><h6>'+b.switcherTitle+"</h6><ul></ul></div>").appendTo(a).children("ul").append(function(){var a="",c;for(c=0;c<b.switcherColors.length;c++)"undefined"===typeof b.switcherColors[c].fgColor&&(b.switcherColors[c].fgColor="transparent"),
a=a+'<li data-file-path="'+b.switcherColors[c].filepath+'"><span style="background-color: '+b.switcherColors[c].bgColor+';"></span><span style="transform: rotate(45deg); background-color: '+b.switcherColors[c].fgColor+';"></span></li>';return a}).children("li").on("click",function(){var a=d(this);b.switcherTarget.length&&b.switcherTarget.attr("href",a.data("file-path"));a.hasClass("active")||a.addClass("active").siblings().removeClass("active");g.css("background-color",a.children("span").eq(0).css("background-color"));});
var g=d('<div class="ccs--toggle-btn"><i class="fa fa-paint-brush"></i></div>').css({"background-color":a.find("li span").eq(0).css("background-color")}).on("click",function(){a.hasClass("opened")?(a.removeClass("opened"),"right"===b.position?a.animate({right:"-220px"},500):a.animate({left:"-220px"},500)):(a.addClass("opened"),"right"===b.position?a.animate({right:"0"},500):a.animate({left:"0"},500))}).appendTo(a);"right"===b.position&&a.css({left:"auto",right:"-220px"});e.append('<style id="ccSwitcher">#cColorSwitcher {position: fixed; top: 50%; left: -220px; z-index: 999;} .ccs--body {float: left; width: 220px; padding: 14px 15px 20px; box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 10px 2px;} .ccs--body:before {content: " "; position: absolute; top: 0; left: 0; right: 50px; bottom: 0; background-color: #fff; z-index: 0;} .ccs--body > h6 {position: relative; margin: 0; font-size: 16px; line-height: 24px; z-index: 1;} .ccs--body > ul {margin: 0 -5px; padding: 0; list-style: none; overflow: hidden;} .ccs--body > ul > li {position: relative; float: left; width: 30px; height: 30px; margin: 10px 5px 0; overflow: hidden; cursor: pointer;} .ccs--body > ul > li > span:nth-child(1) {position: absolute; width: 100%; height: 100%;} .ccs--body > ul > li > span:nth-child(2) {position: absolute; top: 0; right: -2px; width: 20px; height: 45px;} .ccs--toggle-btn {float: right; width: 50px; padding: 15px 0px; color: #fff; font-family: Arial, sans-serif; font-size: 14px; font-weight: 100; line-height: 22px; text-align: center; cursor: pointer; box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 10px 2px;}</style>');
a.appendTo(f);return a;};

    // Setup
    $.cColorSwitcher({
        'switcherTitle': 'Main Colors:',
        'switcherColors': [{
            bgColor: '#1da1f2',
            filepath: 'css/colors/color-1.css'
        }, {
            bgColor: '#82b440',
            filepath: 'css/colors/color-2.css'
        }, {
            bgColor: '#ff5252',
            filepath: 'css/colors/color-3.css'
        }, {
            bgColor: '#e91e63',
            filepath: 'css/colors/color-4.css'
        }, {
            bgColor: '#f69323',
            filepath: 'css/colors/color-5.css'
        }, {
            bgColor: '#ffcb1a',
            filepath: 'css/colors/color-6.css'
        }, {
            bgColor: '#00b249',
            filepath: 'css/colors/color-7.css'
        }, {
            bgColor: '#d48b91',
            filepath: 'css/colors/color-8.css'
        }, {
            bgColor: '#179ea8',
            filepath: 'css/colors/color-9.css'
        }, {
            bgColor: '#8cbeb2',
            filepath: 'css/colors/color-10.css'
        }],
        'switcherTarget': $('#changeColorScheme')
    });
})(jQuery);