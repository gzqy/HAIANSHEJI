/*
 * M['weburl'] 		//网站网址
 * M['lang']  		//网站语言
 * M['tem']  		//模板目录路径
 * M['classnow']  	//当前栏目ID
 * M['id']  		//当前页面ID
 * M['module']  	//当前页面所属模块
 * lazyloadbg       //延迟加载背景图片,base64：默认灰色
 * deviceType       //设备判断（p：PC,t：平板，m：手机）
 */
$(document).ready(function() {
        /*导航处理*/
        if (deviceType != 'p') {
            $('body').wrapInner('<div class="cover"></div>');
            $('.met-nav .nav>li>.dropdown-menu .visible-xs').removeClass('visible-xs');
        }
        $('.met-nav .dropdown a.link').click(function() {
            if (deviceType == 'p' && !Breakpoints.is('xs') && $(this).data("hover")) window.location.href = $(this).attr('href');
        });

        /*顶部固定边框阴影处理*/
        var navbarTop=$(".navbar-fixed-top");
        if (navbarTop.length&&deviceType == 'p') {
            $(window).scroll(function() {
                if (navbarTop.offset().top > 1) {
                    navbarTop.addClass("navbar-shadow animated fadeInDown");
                } else {
                    navbarTop.removeClass("navbar-shadow animated fadeInDown");
                }
            });
        }

        /*下拉菜单动画修复*/
        $(".navlist .dropdown-submenu").hover(
            function() {
                $(this).parent('.dropdown-menu').addClass('overflow-visible');
            },
            function() {
                $(this).parent('.dropdown-menu').removeClass('overflow-visible');
            }
        );
    var nav_li=$(".navlist .dropdown");
    (function($){
    $.fn.hoverDelay = function(options){
        var defaults = {
            // 鼠标经过的延时时间
            hoverDuring: 200,
            // 鼠标移出的延时时间
            outDuring: 0,
            // 鼠标经过执行的方法
            hoverEvent: function(){
                // 设置为空函数，绑定的时候由使用者定义
                $.noop();
            },
            // 鼠标移出执行的方法
            outEvent: function(){
                $.noop();    
            }
        };
        var sets = $.extend(defaults,options || {});
        var hoverTimer, outTimer;
        return $(this).each(function(){
        // 保存当前上下文的this对象
        var $this = $(this)
        $this.hover(function(){
            clearTimeout(outTimer);
            hoverTimer = setTimeout(function () {
                // 调用替换
                sets.hoverEvent.apply($this);
            }, sets.hoverDuring);
        }, function(){
            clearTimeout(hoverTimer);
            outTimer = setTimeout(function () {
                sets.outEvent.apply($this);
            }, sets.outDuring);
        });
    });
    }
})(jQuery);
// 具体使用，给id为“#test”的元素添加hoverEvent事件
if(nav_li.find('[data-hover]').length){
    nav_li.hoverDelay({
        // 自定义，outEvent同
        hoverEvent: function(){
           $(this).addClass('open');
        },
                outEvent: function(){
                   $(this).removeClass('open');
                }
    });
}
        /*服务范围*/
        var service_show = $("#serviceSlick").data("show");
        if(service_show){
        $('#serviceSlick').slick({
                lazyLoad: 'progressive',
                slidesToShow: 4,
                slidesToScroll: 2,
                prevArrow: '<a class="slick-prev" href=""><i class="fa fa-angle-left"></i></a>',
                nextArrow: '<a class="slick-next" href=""><i class="fa fa-angle-right"></i></a>',
                responsive: [{
                    breakpoint: 2000,
                    settings: {
                        slidesToShow: service_show[6],
                        slidesToScroll: 1
                    }
                }, {
                    breakpoint: 1600,
                    settings: {
                        slidesToShow: service_show[4],
                        slidesToScroll: 1
                    }
                }, {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: service_show[2],
                        slidesToScroll: 1,
                    }
                }, {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: service_show[0],
                        slidesToScroll: 1
                    }
                }]
            })
    }
            /*精英团队*/
        $('#exampleResponsive').slick({
            lazyLoad: 'ondemand',
            dots: true,
            infinite: false,
            speed: 500,
            slidesToShow: 3,
            slidesToScroll: 3,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    dots: true
                }
            }, {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true
                }
            }]
        });
        /*项目案例*/
        var product_show = $("#product_list").data("show");
        if(product_show){
        $('#product_list').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                prevArrow: '<a class="slick-prev" href=""><i class="fa fa-long-arrow-left"></i></a>',
                nextArrow: '<a class="slick-next" href=""><i class="fa fa-long-arrow-right"></i></a>',
                responsive: [{
                    breakpoint: 2000,
                    settings: {
                        slidesToShow: product_show[6],
                        slidesToScroll: 1,
                    }
                }, {
                    breakpoint: 1600,
                    settings: {
                        slidesToShow: product_show[4],
                        slidesToScroll: 1,
                    }
                }, {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: product_show[2],
                        slidesToScroll: 1,
                    }
                }, {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: product_show[0],
                        slidesToScroll: 1,

                    }
                }]
            })
    }
            /*大图轮播*/
        var metbanner = $('.met-banner'),
            metbanner_slide = '.met-banner .slick-slide';
        var bw = $("body").width();
        if (metbanner.length) {
            imageloadFun('.met-banner img:eq(0)', function() {
                var datah = metbanner.data('height').split('|'),
                    bannerAutoH = function() { //自适应
                        metbanner.find('img[srcset]').height('auto');
                        metbanner.find('img[data-lazy]').height(metbanner.find('img[srcset]').height());
                        if (metbanner.hasClass('fixedheight')) {
                            metbanner.find('img').width('');
                            var x = metbanner.find('img[srcset]').height();
                            metbanner.height(metbanner.find('img[srcset]').height());
                        } else {
                            metbanner.height('auto');
                        }
                    },
                    bannerFixedHeight = function(res) { //固定高度
                        metbanner.find('img').height('').width('auto');
                        metbanner.height(datah[res]);
                    };
                if (metbanner.hasClass('fixedheight')) {
                    Breakpoints.on('md lg', {
                        enter: function() {
                            bannerFixedHeight(0);
                        }
                    })
                    Breakpoints.on('sm', {
                        enter: function() {
                            bannerFixedHeight(1);
                        }
                    })
                    Breakpoints.on('xs', {
                        enter: function() {
                            bannerFixedHeight(2);
                        }
                    })
                    $(window).resize(function() {
                        if ($(window).width() < 430) bannerFixedHeight(2);
                    })
                } else {
                    bannerAutoH();
                    $(window).resize(function() {
                        bannerAutoH();
                    })
                };
                if ($(metbanner_slide).length > 1) {
                    metbanner.slick({
                        autoplay: true,
                        dots: false,
                        autoplaySpeed: 4000,
                        pauseOnHover: false,
                        fade: true,
                        prevArrow: '<a class="slick-prev" href=""><i class="fa fa-angle-left"></i></a>',
                        nextArrow: '<a class="slick-next" href=""><i class="fa fa-angle-left"></i></a>',
                        responsive: [{
                            breakpoint: 991,
                            settings: {
                                dots: true,
                                fade: false,
                            }
                        }]
                    });
                    metbanner.on('setPosition', function(event, slick) {
                        $(metbanner_slide + ' .banner-text').addClass('hide');
                        $(metbanner_slide + '.slick-active .banner-text').removeClass('hide');
                        var banner_index = metbanner.find('.slick-active').index(),
                            bannerprev = banner_index - 1,
                            bannernext = banner_index + 1;
                        metbanner_prevnext = metbanner_slide + ':eq(' + bannerprev + '),' + metbanner_slide + ':eq(' + bannernext + ')';
                        $(metbanner_prevnext).find('img').each(function() {
                            if ($(this).attr('data-lazy')) $(this).attr({
                                src: $(this).data('original'),
                                srcset: $(this).data('srcset')
                            }).removeAttr('data-lazy').removeAttr('data-srcset').removeClass('slick-loading');
                        })
                    });
                    if (deviceType == 'p') $(metbanner).slick('slickSetOption', 'swipe', false);
                }
            })
        }

        /*内页内滚导航条（移动端）*/
        if ($('.met-column-nav-ul').length) navtabSwiper('.met-column-nav-ul');


        /*底部微信*/
        if ($('#met-weixin').length) {
            var defaults = $.components.getDefaults("webuiPopover");
            var weixinContent = $('#met-weixin-content').html(),
                weixinSettings = {
                    title: '',
                    content: weixinContent,
                    placement: 'top',
                    trigger: 'hover',
                    width: 162,
                    padding: false,
                    offsetTop: -10,
                    animation: 'pop'
                };
            $('#met-weixin').webuiPopover($.extend({}, defaults, weixinSettings));
        }
        /*底部导航手机端处理*/
        if ($('.met-footnav').length) {
            Breakpoints.get('xs').on({
                enter: function() {
                    $('.met-footnav .mob-masonry').masonry({
                        itemSelector: ".masonry-item"
                    });
                }
            });
        }
        /*返回顶部*/
        $(".met-scroll-top").click(function() {
            $('html,body').animate({
                'scrollTop': 0
            }, 300);
        });
        //
        var wh = $(window).height();
        $(window).scroll(function() {
            if ($(this).scrollTop() > wh) {
                $(".met-scroll-top").removeClass('hide').addClass("animation-slide-bottom");
            } else {
                $(".met-scroll-top").addClass('hide').removeClass('animation-slide-bottom');
            }
        });

        /*首页窗口内动画预加载*/
        $('.met-index-body:eq(0) [data-plugin=appear],.met-page-ajax-body[data-plugin=appear]').each(function() {
            var thisT = $(this).offset().top,
                thisH = $(this).height();
            if (thisT < wh + $(window).scrollTop()) {
                var dataAnimate = $(this).attr('data-animate');
                $(this).removeClass("invisible").removeAttr('data-plugin').removeAttr('data-animate').addClass('appear-no-repeat animation-' + dataAnimate);
                $('img', this).each(function() {
                    $(this).attr({
                        src: $(this).data('original'),
                        srcset: $(this).data('srcset')
                    }).removeClass('imgloading').removeAttr('data-original').removeAttr('data-srcset');
                });
            }
        });
    })
    /*选项卡滑动导航标准处理（移动端）*/
function navtabSwiper(navObj) {
    var navtabSdefault = function() {
        var navObjW = sonWidthSum(navObj + '>li') + $('.caret', navObj).length;
        if (navObjW > $(navObj).parent().width()) {
            if ($(navObj).hasClass('swiper-wrapper')) {
                if (!$(navObj).hasClass('flex-start')) $(navObj).addClass('flex-start');
            } else {
                $(navObj)
                    .addClass("swiper-wrapper flex-start")
                    .wrap("<div class=\"swiper-container swiper-navtab\"></div>").after('<div class="swiper-scrollbar"></div>')
                    .find(">li").addClass("swiper-slide");
                var swiperNavtab = new Swiper('.swiper-navtab', {
                    slidesPerView: 'auto',
                    scrollbar: '.swiper-scrollbar',
                    scrollbarHide: false,
                    scrollbarDraggable: true,
                    preventClicks : false
                });
            }
        } else if ($(navObj).hasClass('flex-start')) {
            $(navObj).removeClass('flex-start');
        }
    };
    navtabSdefault();
    $(window).resize(function() {
            navtabSdefault();
        })
        //下拉菜单被隐藏特殊情况处理
    if ($(navObj + ' .dropdown').length){
    $(".swiper-navtab").addClass("overflow-visible");
    $(".sidebar_tile").addClass("overflow-visible");}
}
/*异步加载文件*/
function include(file, fun) {
    var files = typeof file == "string" ? [file] : file;
    for (var i = 0; i < files.length; i++) {
        var name = files[i].replace(/^\s|\s$/g, ""),
            att = name.split('.'),
            ext = att[att.length - 1].toLowerCase();
        if (ext == 'js') {
            var filesi = document.createElement('script');
            filesi.src = name;
            filesi.type = "text/javascript";
        } else if (ext == 'css') {
            var filesi = document.createElement('link');
            filesi.href = name;
            filesi.type = 'text/css';
            filesi.rel = "stylesheet";
        }
        if (typeof filesi != "undefined") {
            document.getElementsByTagName('head')[0].appendChild(filesi);
        }
        if (typeof fun === "function") {
            filesi.onload = filesi.onreadystatechange = function() {
                var r = filesi.readyState;
                if (!r || r === 'loaded' || r === 'complete') {
                    filesi.onload = filesi.onreadystatechange = null;
                    fun();
                }
            };
        }
    }
}
/*图片高度预设*/
function imageSize(risObj, risImg) {
    var risObjs = risObj.split(','),
        risImg = risImg ? risImg : 'img';
    for (var i = 0; i < risObjs.length; i++) {
        $(risObjs[i]).each(function() {
            var scale = $(this).data('scale');
            if (scale) {
                $(risImg, this).height($(risImg, this).width() * scale);
                $(risImg, this).each(function() {
                    var thisimg = $(this);
                    imageloadFun(this, function() {
                        thisimg.height('');
                    })
                });
                var $this = $(this);
                $(window).resize(function() {
                    var resImg = $this.find(risImg + '.imgload');
                    resImg.height(resImg.width() * scale);
                });
            }
        });
    }
}
/*图片加载完成回调*/
function imageloadFun(risObj, fun) {
    $(risObj).each(function() {
        if ($(this).data('lazy') || $(this).data('original')) {
            var thisimg = $(this),
                loadtime = setInterval(function() {
                    if (thisimg.attr('src') == thisimg.data('original') || thisimg.attr('src') == thisimg.data('lazy')) {
                        clearInterval(loadtime);
                        var img = new Image(),
                            img_url = thisimg.attr('src');
                        img.src = img_url;
                        if (img.complete) {
                            if (typeof fun === "function") fun();
                            return;
                        }
                        img.onload = function() {
                            if (typeof fun === "function") fun();
                        };
                    }
                }, 100)
        } else if ($(this).attr('src')) {
            var img = new Image(),
                img_url = $(this).attr('src');
            img.src = img_url;
            if (img.complete) {
                if (typeof fun === "function") fun();
                return;
            }
            img.onload = function() {
                if (typeof fun === "function") fun();
            };
        }
    });
};
/*父元素宽度计算*/
function sonWidthSum(sonObj, sonNum) {
    var sonObjs = $(sonObj),
        sonTrueNum = sonObjs.length,
        parentObjW = 0;
    if (sonNum > sonTrueNum || !sonNum) sonNum = sonTrueNum;
    for (var i = 0; i < sonNum; i++) {
        var sonObjW = sonObjs.eq(i).outerWidth() + parseInt(sonObjs.eq(i).css('marginLeft')) + parseInt(sonObjs.eq(i).css('marginRight'));
        parentObjW += sonObjW;
    }
    return parentObjW + sonNum;
}
/*手动appear动画*/
// function appear(appearObj,isappear){
//     thisAppear=$(appearObj).data('animate')?$(appearObj):$(appearObj).find('[data-animate]');
//     thisAppear.each(function() {
//         var animate=$(this).data('animate'),
//             animation='animation-'+animate+'';
//         if(isappear){
//             $(this).addClass(animation).addClass('appear-no-repeat').removeClass('invisible');
//         }else{
//             $(this).removeClass(animation).removeClass('appear-no-repeat').addClass('invisible');
//         }
//     });
// }
/*画廊*/
$.fn.galleryLoad = function(dynamic) {
    $("body").addClass("met-white-lightGallery"); //画廊皮肤
    if (dynamic) {
        $(this).lightGallery({
            autoplayControls: false,
            getCaptionFromTitleOrAlt: false,
            dynamic: true,
            dynamicEl: dynamic,
            thumbWidth: 64,
            thumbContHeight: 84,
        });
    } else {
        $(this).lightGallery({
            selector: '.lg-item-box:not(.slick-cloned)',
            autoplayControls: false,
            exThumbImage: 'data-exthumbimage',
            getCaptionFromTitleOrAlt: false,
            thumbWidth: 64,
            thumbContHeight: 84,
        });
    }
    $(this).on('onSlideClick.lg', function() {
        $('.lg-outer .lg-toolbar').toggleClass('opacity0');
        if ($('.lg-outer .lg-toolbar').hasClass('opacity0')) {
            $('.lg-outer').removeClass('lg-thumb-open');
        } else {
            $('.lg-outer').addClass('lg-thumb-open');
        }
        if (Breakpoints.is('xs')) {
            if ($('.lg-outer .lg-toolbar').hasClass('opacity0')) {
                $('.lg-outer .lg-actions').addClass('hide');
            } else {
                $('.lg-outer .lg-actions').removeClass('hide');
            }
        } else {
            $('.lg-outer .lg-actions').removeClass('hide');
        }
    });
}