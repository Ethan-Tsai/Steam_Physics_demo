$(document).ready(function() {

    /*=========================使用者可更改部分開始=============================*/

    /*
    使用youtube->分享->嵌入(裡面的src="http....")
	
    (1)
    更改網址:
    ["嵌入網址1",
     "嵌入網址2",
     .
     .
     .
    ]
	
    (2)
    更改連結文字:
    ["嵌入網址1的文字",
     "嵌入網址2的文字",
     .
     .
     .
    ]
    (3)
    若是只有填入嵌入網址，而沒有文字，上方youtube影片將為嵌入網址1的影片
    e.g.
    videoENG=["https://www.youtube.com/embed/II1g92jFItE"];
    videoENG_name=[];
    上方影片就會是https://www.youtube.com/embed/II1g92jFItE
    而下方不會出現相關連結
	
	
    */
    /*art網址*/
    var videoART = ["https://www.youtube.com/embed/tBG-zbNIoy8",
        "https://www.youtube.com/embed/D2Iyi1mkiWg",
        "https://www.youtube.com/embed/HZClP-m9g24",
        "https://www.youtube.com/embed/gu-1a43cw_s"
    ];
    /*art連結文字*/
    var videoART_name = ["THE PHYSICS OF BASEBALL PITCHES - ft. DodgerFilms Crew",
        "王建民全盛時期變態伸卡球",
        "Lesson 8 - Adventures with Bernoulli - Demonstrations in Physics",
        "【中央大學】物理演示實驗－風洞 wind tunnel"
    ];


    /*engineering的網址*/
    var videoENG = ["https://www.youtube.com/embed/b6Ep4O3lPes",
        "https://www.youtube.com/embed/1ohL6KgasjA",
        "https://www.youtube.com/embed/iiiJ6iMpBEo",
        "https://www.youtube.com/embed/X1kQFJcKEaM"
    ];
    /*ngineering連結文字*/
    var videoENG_name = ["【生活裡的科學】20130914 - 流體追追追 - 伯努力效應",
        "CARBURETORS | How They Work",
        "ZIP WAY 日緯 文氏管流量計",
        "The science behind the Dyson Airwrap™ styler. The Coanda effect explained."
    ];


    /*technology的網址*/
    var videoTEC = ["https://www.youtube.com/embed/phSlc8B4kFo",
        "https://www.youtube.com/embed/w78JT6azrZU",
        "https://www.youtube.com/embed/TFNl4R-vT50",
        "https://www.youtube.com/embed/cDH9vOO_u_Y"
    ];
    /*technology連結文字*/
    var videoTEC_name = ["Festo Bernoulli Gripper OGGB",
        "How do Wings generate LIFT ?",
        "Baseball Aerodynamics 棒球空氣動力學",
        "F1空氣動力學"
    ];

    /*science的網址*/
    var videoSCI = ["https://www.youtube.com/embed/7Wlk0I2TFFc",
        "https://www.youtube.com/embed/NIHNtjFJook",
        "https://www.youtube.com/embed/uosgVIfc-1E",
        "https://www.youtube.com/embed/i23p2paii2w"
    ];
    /*science的網址*/
    var videoSCI_name = ["【科學不一樣】「康達效應」驚喜　手掌微氣流指揮飛機",
        "Homemade Wind Tunnel (Part 1)",
        "05 白努利白球",
        "【科普】虎门大桥异常抖动，浅谈卡门涡街"
    ];

    /*math的網址*/
    var videoMATH = [];
    /*math連結文字*/
    var videoMATH_name = [];

    /*other的網址*/
    var videoOTH = [];
    /*other連結文字*/
    var videoOTH_name = [];

    /*chat的網址*/
    var videoCHAT = ["https://www.youtube.com/embed/wphHKwWJHyQ",
        "https://www.youtube.com/embed/h_n4In_PMYQ",
        "https://www.youtube.com/embed/2d4khcMBd7c",
        "https://www.youtube.com/embed/PXSmwELnM7w",
        "https://www.youtube.com/embed/bzQmIocUqXE",
        "https://www.youtube.com/embed/XlXewkapIT4",
        "https://www.youtube.com/embed/tZLx3S2dgKg"
    ];
    /*chat連結文字*/
    var videoCHAT_name = ["2021 魔力棒球 高中生優秀講解影片",
        "2020 中山大學校慶演示 魔力棒球 講解影片1",
        "2020 中山大學校慶演示 魔力棒球 講解影片2",
        "2020台中場 線上活動 魔力棒球 高中生優秀講解影片",
        "2020台中場 線上活動 魔力棒球 講解影片",
        "2019台北場 魔力棒球 實驗講解",
        "2017台北場 魔力棒球 實驗講解"
    ];


    /*設定底下的pdf長度*/
    /*長度大小:不要讓內部的pdf有右邊的拉把(scroll bar)即可*/

    /*更新：no need to set if you are using jpg version(tell others)*/
    var art_html_height = 1000;
    var eng_html_height = 1000;
    var tec_html_height = 3400;
    var sci_html_height = 5000;
    var math_html_height = 6000;
    var oth_html_height = 1000;
    var chat_html_height = 1000;


    /*=========================使用者更改部分結束==================================*/





    /*video function*/
    //$('#totalVideo').attr('src', videoEng + "&autoplay=1");
    //videoMove();
    /*=======================================================================*/
    /*Button function*/

    /*function reload_html(html,height){
    	var parent = $('#inner-html').parent();
    	var newElement = "<embed src='html/"+htm+"' id"+"='inner-html'>";
	
    	$('#inner-html').remove();
    	parent.append(newElement);
    	
    	$("#inner-html").attr("height",height);
    	$("#inner-html").attr("width","100%");
    	
    }
    $("#art_btn").click(reload_html('art.htm',art_html_height));*/



    /*$("#m_art_btn").click(function(){

    	window.location.href = "test.html";
    	//alert("zz");
    	
    	
    	var parent = document.getElementById("inner-html").parent();
    	//var parent = $('#inner-html').parent();
    	var newemb = "<embed src='html/art.htm' id='inner-html'>";
    	$('#inner-html').remove();
    	parent.append(newemb);
    	$("#inner-html").attr("height",art_html_height);
    	$("#inner-html").attr("width","100%"); 
    		

    });*/

    //videoMove();

    $("#art_btn").click(function() {

        var videoArt = "";
        videoArt = $("#art_changing_video").attr("href");

        if (videoArt == "" && videoART.length > 0)
            videoArt = videoART[0] + "?enablejsapi=1"; /*Take first*/



        var parent2 = $('#totalVideo').parent();
        var newframe = "<iframe id='totalVideo' src='' frameborder=0 allowfullscreen></iframe>";

        $('#totalVideo').remove();
        if (videoArt != "") {
            parent2.append(newframe);

            $("#totalVideo").addClass("video-style");
            $('#totalVideo').attr('src', videoArt + "&autoplay=1");
        }


        var parent = $('#inner-html').parent();
        var newemb = "<embed src='../heading_pdf/art.jpg' id='inner-html' pluginspage='http://www.adobe.com/products/acrobat/readstep2.html'></embed>";
        $('#inner-html').remove();
        parent.append(newemb);
        //$("#inner-html").attr("height",art_html_height);
        //$("#inner-html").height(art_html_height);
        /*Origin
        $("#inner-html").width("55%");
        */
        /***New change***/
        var wid = "";
        if ($(window).width() < 1019)
            wid = "150%";
        else
            wid = "55%";
        $("#inner-html").width(wid);
        /************/
        $("#inner-html").addClass("inner-html");



    });


    $("#eng_btn").click(function() {

        var videoEng = "";
        videoEng = $("#eng_changing_video").attr("href");

        if (videoEng == "" && videoENG.length > 0)
            videoEng = videoENG[0] + "?enablejsapi=1"; /*Take first*/



        var parent2 = $('#totalVideo').parent();
        var newframe = "<iframe id='totalVideo' src='' frameborder=0 allowfullscreen></iframe>";
        $('#totalVideo').remove();

        if (videoENG != "") {
            parent2.append(newframe);
            /*$("#totalVideo").attr("height","600");
            $("#totalVideo").attr("width","60%");*/
            $("#totalVideo").addClass("video-style");
            $('#totalVideo').attr('src', videoEng + "&autoplay=1");

        }
        var parent = $('#inner-html').parent();
        var newElement = "<embed src='../heading_pdf/engineering.jpg' pluginspage='http://www.adobe.com/products/acrobat/readstep2.html' id='inner-html'></embed>";

        $('#inner-html').remove();
        parent.append(newElement);

        //$("#inner-html").height(eng_html_height);
        /*Origin
        $("#inner-html").width("55%");
        */
        /***New change***/
        var wid = "";
        if ($(window).width() < 1019)
            wid = "100%";
        else
            wid = "55%";
        $("#inner-html").width(wid);
        /************/
        $("#inner-html").addClass("inner-html");
    });
    $("#tec_btn").click(function() {

        var videoTec = "";
        videoTec = $("#tec_changing_video").attr("href");

        if (videoTec == "" && videoTEC.length > 0)
            videoTec = videoTEC[0] + "?enablejsapi=1"; /*Take first*/


        var parent2 = $('#totalVideo').parent();
        var newframe = "<iframe id='totalVideo' src='' frameborder=0 allowfullscreen></iframe>";
        $('#totalVideo').remove();
        if (videoTEC != "") {
            parent2.append(newframe);
            $("#totalVideo").addClass("video-style");
            $('#totalVideo').attr('src', videoTec + "&autoplay=1");
        }

        /*$("#totalVideo").attr("height","0");
        $("#totalVideo").attr("width","0");*/


        var parent = $('#inner-html').parent();
        var newElement = "<embed src='../heading_pdf/technology.jpg' pluginspage='http://www.adobe.com/products/acrobat/readstep2.html' id='inner-html'></embed>";

        $('#inner-html').remove();
        parent.append(newElement);

        //$("#inner-html").height(tec_html_height);
        /*Origin
        $("#inner-html").width("55%");
        */
        /***New change***/
        var wid = "";
        if ($(window).width() < 1019)
            wid = "100%";
        else
            wid = "55%";
        $("#inner-html").width(wid);
        /************/
        $("#inner-html").addClass("inner-html");
    });
    $("#sci_btn").click(function() {

        var videoSci = "";
        videoSci = $("#sci_changing_video").attr("href");

        if (videoSci == "" && videoSCI.length > 0)
            videoSci = videoSCI[0] + "?enablejsapi=1"; /*Take first*/

        var parent2 = $('#totalVideo').parent();
        var newframe = "<iframe id='totalVideo' src='' frameborder=0 allowfullscreen></iframe>";
        $('#totalVideo').remove();

        if (videoSCI != "") {
            parent2.append(newframe);
            $("#totalVideo").addClass("video-style");
            $('#totalVideo').attr('src', videoSci + "&autoplay=1");
        }


        var parent = $('#inner-html').parent();
        var newElement = "<embed src='../heading_pdf/science.jpg' pluginspage='http://www.adobe.com/products/acrobat/readstep2.html' id='inner-html'></embed>";

        $('#inner-html').remove();
        parent.append(newElement);

        //$("#inner-html").height(sci_html_height);
        /*Origin
        $("#inner-html").width("55%");
        */
        /***New change***/
        var wid = "";
        if ($(window).width() < 1019)
            wid = "100%";
        else
            wid = "55%";
        $("#inner-html").width(wid);
        /************/
        $("#inner-html").addClass("inner-html");
    });
    $("#math_btn").click(function() {

        var videoMath = "";
        videoMath = $("#math_changing_video").attr("href");

        if (videoMath == "" && videoMATH.length > 0)
            videoMath = videoMATH[0] + "?enablejsapi=1"; /*Take first*/

        var parent2 = $('#totalVideo').parent();
        var newframe = "<iframe id='totalVideo' src='' frameborder=0 allowfullscreen></iframe>";
        $('#totalVideo').remove();

        if (videoMATH != "") {
            parent2.append(newframe);

            $("#totalVideo").addClass("video-style");
            $('#totalVideo').attr('src', videoMath + "&autoplay=1");
        }



        var parent = $('#inner-html').parent();
        var newElement = "<embed src='../heading_pdf/math.jpg' pluginspage='http://www.adobe.com/products/acrobat/readstep2.html' id='inner-html'></embed>";

        $('#inner-html').remove();
        parent.append(newElement);

        //$("#inner-html").height(math_html_height);
        /*Origin
        $("#inner-html").width("55%");
        */
        /***New change***/
        var wid = "";
        if ($(window).width() < 1019)
            wid = "100%";
        else
            wid = "55%";
        $("#inner-html").width(wid);
        /************/
        $("#inner-html").addClass("inner-html");
    });
    $("#oth_btn").click(function() {

        var videoOth = "";
        videoOth = $("#oth_changing_video").attr("href");

        if (videoOth == "" && videoOTH.length > 0)
            videoOth = videoOTH[0] + "?enablejsapi=1"; /*Take first*/

        var parent2 = $('#totalVideo').parent();
        var newframe = "<iframe id='totalVideo' src='' frameborder=0 allowfullscreen></iframe>";
        $('#totalVideo').remove();

        if (videoOth != "") {
            parent2.append(newframe);

            $("#totalVideo").addClass("video-style");
            $('#totalVideo').attr('src', videoOth + "&autoplay=1");
        }


        var parent = $('#inner-html').parent();
        var newElement = "<embed src='../heading_pdf/other.jpg' pluginspage='http://www.adobe.com/products/acrobat/readstep2.html' id='inner-html'></embed>";

        $('#inner-html').remove();
        parent.append(newElement);

        //$("#inner-html").height(oth_html_height);

        /*Origin
        $("#inner-html").width("55%");
        */
        /***New change***/
        var wid = "";
        if ($(window).width() < 1019)
            wid = "100%";
        else
            wid = "55%";
        $("#inner-html").width(wid);
        /************/


        $("#inner-html").addClass("inner-html");
    });
    $("#chat_btn").click(function() {

        var videoChat = "";
        videoChat = $("#chat_changing_video").attr("href");

        if (videoChat == "" && videoCHAT.length > 0)
            videoChat = videoCHAT[0] + "?enablejsapi=1"; /*Take first*/

        var parent2 = $('#totalVideo').parent();
        var newframe = "<iframe id='totalVideo' src='' frameborder=0 allowfullscreen></iframe>";
        $('#totalVideo').remove();

        if (videoChat != "") {
            parent2.append(newframe);

            $("#totalVideo").addClass("video-style");
            $('#totalVideo').attr('src', videoChat + "&autoplay=1");
        }


        var parent = $('#inner-html').parent();
        var newElement = "<embed src='../heading_pdf/fb.jpg' pluginspage='http://www.adobe.com/products/acrobat/readstep2.html' id='inner-html'></embed>";

        $('#inner-html').remove();
        parent.append(newElement);

        //$("#inner-html").height(chat_html_height);

        /*Origin
        $("#inner-html").width("55%");
        */
        /***New change***/
        var wid = "";
        if ($(window).width() < 1019)
            wid = "100%";
        else
            wid = "55%";
        $("#inner-html").width(wid);
        /************/


        $("#inner-html").addClass("inner-html");
    });
    /*=======================================================================*/


    /*===================Dynamic addition of video link======================*/

    /*Use let to declare in order to make video_link be the local variables*/
    let page_type = 7; /*6 types of buttons(no chat)*/

    for (let j = 0; j < page_type; j++) {
        let page_length; /*length of link array*/
        let type_name = "";
        let video_array; /*link array*/
        let video_name; /*link name array*/
        let name_length; /*lengh of link name array*/
        switch (j) {
            case 0:
                type_name = 'art';
                page_length = videoART.length;
                video_array = videoART.slice();
                video_name = videoART_name.slice();
                break;
            case 1:
                type_name = 'eng';
                page_length = videoENG.length;
                video_array = videoENG.slice();
                video_name = videoENG_name.slice();
                break;
            case 2:
                type_name = 'tec';
                page_length = videoTEC.length;
                video_array = videoTEC.slice();
                video_name = videoTEC_name.slice();
                break;
            case 3:
                type_name = 'sci';
                page_length = videoSCI.length;
                video_array = videoSCI.slice();
                video_name = videoSCI_name.slice();
                break;
            case 4:
                type_name = 'math';
                page_length = videoMATH.length;
                video_array = videoMATH.slice();
                video_name = videoMATH_name.slice();
                break;
            case 5:
                type_name = 'oth';
                page_length = videoOTH.length;
                video_array = videoOTH.slice();
                video_name = videoOTH_name.slice();
                break;
            case 6:
                type_name = 'chat';
                page_length = videoCHAT.length;
                video_array = videoCHAT.slice();
                video_name = videoCHAT_name.slice();
                break;
            default:
                ;
        }


        for (let i = 1; i <= page_length; i++) {

            let video_link = video_array[i - 1] + "?enablejsapi=1";
            let new_element = '<a id="' + type_name + 'link' + i + '" class="html-content"></a></br>'
            $('.' + type_name + '-html-video').append(new_element);


            $('#' + type_name + 'link' + i).click(function() {

                $('#' + type_name + '_changing_video').attr("href", video_link);
                $('#' + type_name + '_btn').trigger("click");
            });


            if (video_name.length > 0 && i == 1) {
                let str = ''
                $('.' + type_name + '-html-video').prepend(str);
            }

            $('a#' + type_name + 'link' + i).text(video_name[i - 1]);
        }
    }




    /*=======================================================================*/

    /*Screen resize============================================*/
    /*$(window).resize(function() {

    	if(screen.height>=800)
    	{
    		$('#iframeArt').attr("height", 400);
    		$('#iframeEng').attr("height", 400);
    		$('#iframeTec').attr("height", 400);
    		$('#iframeSci').attr("height", 400);
    		$('#iframeMath').attr("height", 400);
    		$('#iframeChat').attr("height", 400);

    	}
    	else if(screen.height<800 && screen.height>=650)
    	{
    		$('#iframeArt').attr("height", 300);
    		$('#iframeEng').attr("height", 300);
    		$('#iframeTec').attr("height", 300);
    		$('#iframeSci').attr("height", 300);
    		$('#iframeMath').attr("height", 300);
    		$('#iframeChat').attr("height", 300);

    	}
    	else if(screen.height<650)
    	{
    		$('#iframeArt').attr("height", 200);
    		$('#iframeEng').attr("height", 200);
    		$('#iframeTec').attr("height", 200);
    		$('#iframeSci').attr("height", 200);
    		$('#iframeMath').attr("height", 200);
    		$('#iframeChat').attr("height", 200);

    	}

    });*/


    //elementMove();

});

/*=================Responsive Desgin======================*/


function openNav() {
    $('.container a').css('display', 'none');
    document.getElementById("mySidenav").style.width = "230px";
    document.getElementById("main").style.marginLeft = "230px";
    $('.sidebar').css('opacity', '0');
    setTimeout("$('.container a').css('display','block');", 500);
}

function closeNav() {
    $('.container a').css('display', 'none');
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    $('.sidebar').css('opacity', '1');

}

/*=========================================================*/