$(function(){
    // 活动页--我要参与-显示页面
    $(".acbtn_ok").click(function(){
        $('.zhezhao').css('display','block');
        $('.xxl_set_sapp').css('display','block');
    });
    // 活动页--我要参与-隐藏页面
    $(".xxl_action_nobtn").click(function(){
        $('.zhezhao').css('display','none');
        $('.xxl_set_sapp').css('display','none');
    });

    $("#dropdown .input_select").click(function(){
        var ul = $("#dropdown ul");
        if(ul.css("display")=="none"){
            ul.slideDown("fast");
        }else{
            ul.slideUp("fast");
        }
    });
    $("#dropdown ul li a").click(function(){
        var txt = $(this).text();
        $("#dropdown .input_select").val(txt);
        var value = $(this).attr("rel");
        $("#dropdown ul").hide();
    });

    $("#dropdown2 .input_select").click(function(){
        var ul = $("#dropdown2 ul");
        if(ul.css("display")=="none"){
            ul.slideDown("fast");
        }else{
            ul.slideUp("fast");
        }
    });
    $("#dropdown2 ul li a").click(function(){
        var txt = $(this).text();
        $("#dropdown2 .input_select").val(txt);
        var value = $(this).attr("rel");
        $("#dropdown2 ul").hide();
    });


});

//一屏右侧点击切换
function slideSwitch3(wrap,hover){
    var ow=$(wrap).width(),index=0,len=$(wrap).find("li").length,timer = null;
    $(wrap).children("ul").width(ow*len);
    var btn = "<div class='slidecon'>";
    for (var i = 0; i < len; i++) {
        btn += "<span></span>";
    }
    btn += "</div>";
    var title = '<div class="slidetle"></div>',
        // prev = '<a class="slidemove leftbtn"></a>',
        next = '<a class="slidemove rightbtn"></a>';
    $(wrap).append(btn).append(title).append(next);
    $(wrap).children(".slidetle").text($(wrap).find("img:first").attr("title"));
    $(wrap).children('.slidecon').children('span').hover(function() {
        index = $(wrap).children('.slidecon').children('span').index(this);
        showPics(index);
    }).eq(0).addClass(hover);

    $(wrap).hover(
        function(){ clearInterval(timer); },
        function(){
            timer=setInterval(function(){
                if(index==(len-1)){index=0;}
                else{index++; }
                showPics(index);
            },20000);
        }
    ).trigger("mouseleave");

    // $(wrap).find(".leftbtn").click(function(){
    //     if(index==0){ index=len-1;}
    //     else{ index--;}
    //     showPics(index);
    // });
    $(wrap).find(".rightbtn").click(function(){
        if(index==(len-1)){ index=0;}
        else{ index++;}
        showPics(index);
    });
    function showPics(index){
        var nowLeft=-index*ow;
        $(wrap).children('.slidecon').children('span').eq(index).addClass(hover).siblings().removeClass();
        $(wrap).children('ul').stop(true,false).animate({"left":nowLeft},200);
        $(wrap).children(".slidetle").text($(wrap).find("img").eq(index).attr("title"));
    };
};

function new_slider(slidercon,mainspeed,inspeed,outspeed){
    this.slidercon = slidercon;
    this.mainspeed = mainspeed;
    this.inspeed = inspeed;
    this.outspeed = outspeed;
    var i = 1;
    var listcon = '<li class="current">' + 1 + '</li>';
    $(slidercon).append(
        '<div id="slider_title"></div>'
    );
    $(slidercon).children("#slider_title").html($(slidercon).children("ul:first").children("li:eq(0)").children("a").children("img").attr("title"));
    $(slidercon).append(
        '<ul id="slider_counter"></ul>'
    );
    for(var j = 2; j <= $(slidercon).children("ul:first").children("li").length; j ++){
        listcon = listcon + "<li>" + j + "</li>";
    };
    $(slidercon).children("#slider_counter").html(listcon);
    $(slidercon).children("#slider_counter").children("li").mouseover(function(){
        var index = $.inArray(this,$(slidercon).children("#slider_counter").children("li"));
        $(slidercon).children("#slider_counter").children("li").removeClass("current")
            .eq(index).addClass("current");
        $(slidercon).children("ul:first").children("li").fadeOut(outspeed)
            .eq(index).fadeIn(inspeed);
        $(slidercon).children("#slider_title").html($(slidercon).children("ul:first").children("li:eq(" + parseInt($(this).html()-1)  + ")").children("a").children("img").attr("title"));
        i = $(this).index() + 1;
        if(i == $(slidercon).children("ul:first").children("li").length){
            i = 0;
        };
    });
    function init(){
        $(slidercon).children("ul:first").children("li:not(" + i + ")").fadeOut(outspeed);
        $(slidercon).children("ul:first").children("li:eq(" + i + ")").fadeIn(inspeed);
        $(slidercon).children("#slider_counter").children("li:not(" + i + ")").removeClass("current");
        $(slidercon).children("#slider_counter").children("li:eq(" + i + ")").addClass("current");
        $(slidercon).children("#slider_title").html($(slidercon).children("ul:first").children("li:eq(" + i + ")").children("a").children("img").attr("title"));
        i++;
        if(i >= $(slidercon).children("ul:first").children("li").length){
            i = 0;
        };
    };
    var move = setInterval(init,mainspeed);
    $(slidercon).mouseover(function(){
        clearInterval(move);
    });
    $(slidercon).mouseout(function(){
        move = setInterval(init,mainspeed);
    });
};

