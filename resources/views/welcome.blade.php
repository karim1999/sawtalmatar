<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="@if(session('language')=="ar")
    {{$api['site_profile']->icon_ar}}
    @else
    {{$api['site_profile']->icon_en}}
    @endif
        " />


    <meta name="description" content="
    @if(session('language')=="ar")
    {{$api['site_profile']->site_description_ar}}
    @else
    {{$api['site_profile']->site_description_en}}
    @endif
        ">

    <title>
        @if(session('language')=="ar")
            {{$api['site_profile']->site_name_ar}} | {{$api['site_profile']->site_sub_name_ar}}
        @else
            {{$api['site_profile']->site_name_en}} | {{$api['site_profile']->site_sub_name_en}}
        @endif
    </title>
    {!!$api['site_profile']->google_analytics!!}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Tajawal&display=swap" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-174669370-8"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-174669370-8');
    </script>

    <!-- Styles -->
    <style>
        *{
            font-family: 'Tajawal', sans-serif;
            text-decoration: none!important;
            direction: rtl;
        }
        html, body {
            color: #636b6f;
            font-weight: 200;

            margin: 0;
        }

        .full-height {
            min-height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
        body{
            background: url('{{env('PUBLIC_PATH')}}/images/background.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: fixed;

        }
        .row{
            margin: 0px;
        }

        ::-webkit-scrollbar {
            display: none;
        }


        .home-specialization{
            transition: all .3s ease-in-out;
            /*background: #f2fffb!important;*/
        }
        .home-specialization:hover{

            box-shadow: 0 40px 21px rgba(187,193,195,0.35);



            border-radius: 5px;
            -webkit-transform: translateY(-11px);
            transform: translateY(-11px);
            transition: background-color 0.3s, box-shadow 0.3s, border-color 0.3s, -webkit-transform 0.3s;
            transition: background-color 0.3s, box-shadow 0.3s, border-color 0.3s, transform 0.3s;
            transition: background-color 0.3s, box-shadow 0.3s, border-color 0.3s, transform 0.3s, -webkit-transform 0.3s;

        }


        @if(session('language')=="ar")
             *{
            direction: ltr;
        }
        .text-left,.text-md-left{
            text-align: left!important;
        }
        .text-right,.text-md-right{
            text-align: right!important;
        }
        @else

            *{
            direction: rtl;
        }
        .text-left,.text-md-left{
            text-align: right!important;
        }
        .text-right,.text-md-right{
            text-align: left!important;
        }
        @endif


    </style>
</head>
<body>


<div class="col-12">
    @if(session('language')=="ar" && session('popup_status')!="false" && $api['advs']->popup_status==1)
        {!!$api['advs']->popup_ar!!}
    @elseif(session('language')!="ar" && session('popup_status')!="false" && $api['advs']->popup_status==1)
        {!!$api['advs']->popup_en!!}
    @endif
</div>


@if($api['advs']->header_status==1 &&  session('header_status')!="false")
    <div class="col-12 px-0" style="background-color: #EB593C; color: white; text-align: center; padding: 5px">
        @if(session('language')=="ar")
            {!!preg_replace('!(((f|ht)tp(s)?://)[-a-zA-Zа-яА-Я()0-9@:%_+.~#?&;//=]+)!i', '<a href="$1">$1</a>', $api['advs']->header_ar)!!}
        @else
            {!!preg_replace('!(((f|ht)tp(s)?://)[-a-zA-Zа-яА-Я()0-9@:%_+.~#?&;//=]+)!i', '<a href="$1">$1</a>', $api['advs']->header_en)!!}
        @endif
    </div>
    @endif












<div class="col-12 px-0 full-height pt-2" style="position: relative;">
    <div class="col-12 row px-0" style="position: relative;width: 100%;  z-index: 1">
        <div class="container-fluid" style="position: absolute;">
            <div class="col-12 px-0 row">

                <div class="col-12 col-md-4 text-center    py-1 px-1" style="color: #ddd;direction: rtl;" >
                    <a href="#" class="d-inline-block py-3 px-1">
                        <img src="{{env('PUBLIC_PATH')}}/site_images/instagram.png" style="width: 30px;" class="">
                    </a>
                    <a href="#" class="d-inline-block py-3 px-1">
                        <img src="{{env('PUBLIC_PATH')}}/site_images/twitter.png" style="width: 30px;" class="">
                    </a>
                    <a href="#" class="d-inline-block py-3 px-1">
                        <img src="{{env('PUBLIC_PATH')}}/site_images/facebook.png" style="width: 30px;" class="">
                    </a>

                </div>
                <div class="col-12 col-md-4 text-center d-none d-md-block  p-0" style="position: relative; color: #ddd">

                </div>


                <div class="col-12 col-md-4 text-center  " >
                    @if(session('language')=="ar")
                        <a href="{{env('LINK_EN')}}" class="d-inline-block py-2 px-1" style="color: #fff">
                            English
                        </a>
                    @else
                        <a href="{{env('LINK_AR')}}" class="d-inline-block py-3 px-1" style="color: #fff">
                            عربي
                        </a>
                    @endif
                </div>



                {{-- <div class="col-6 text-left" >



                </div> --}}

            </div>
        </div>
    </div>
    <div class="col-12 pt-5 pt-md-0">
        <div class="container pt-5 pt-md-0">
            <div class="col-12 px-0 text-center pt-4 pt-md-3">

                <div id="">
                    <a href="/"
                       style="position: relative;z-index: 2 "
                    >
                        <img src="@if(session('language')=="ar")
                        {{$api['site_profile']->logo_ar_path}}
                        @else
                        {{$api['site_profile']->logo_en_path}}
                        @endif" style="width: 130px;">
                    </a>
                </div>
                <span class="logo-text"></span>
                <div class="col-12 pt-3">
                    <p style="color: #fff;font-size: 17px">
                        @lang('index.title')   </p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 px-0 row "  >
        <div class="col-12 px-0">
            @if(session('intro_status')!="false" && $api['advs']->intro_status==1)
                <div class="container">
                    <div class="col-12 pt-4 text-center">
                        <div   style="background: rgba(0, 0, 0, 0.63);width: 600px;max-width: 100%; border-radius: 10px;display: inline-block;" id="important-annonce">
                            <div class="col-12 row py-3">

                                <div class="col-2 text-left px-0">
                                    <img src="{{env('PUBLIC_PATH')}}/site_images/error.png" style="cursor: pointer;width: 20px" onclick="$('#important-annonce').slideUp();">
                                </div>
                                <div class="col-10 text-right px-0" style="font-weight: bold;color: #fff">
                                    @lang('index.annonce')
                                </div>
                            </div>
                            <div class="col-12 text-right">
                                <p style="color: #ddd">
                                    @if(session('language')=="ar")
                                        {!!$api['advs']->intro_ar!!}
                                    @else
                                        {!!$api['advs']->intro_en!!}
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <div class="container pt-5">
                <div class="col-12 text-center">
                    <div class="col-12">
                        <span class="d-block" style="color: #fff;font-weight: bold;">@lang('index.play')</span>
                        <span class="d-block text-center mt-2">
                                    <img src="{{env('PUBLIC_PATH')}}/site_images/play-button.png" class="d-inline-block  play-button paused" style="width: 70px;max-width: 100%;opacity: .9;cursor: pointer;" onclick="">
                                </span>
                        <div class="col-12 px-0 py-3">

                            <div class="d-inline-block">
                                <img src="{{env('PUBLIC_PATH')}}/site_images/Minus.png" class="" style="cursor: pointer;width: 15px; opacity: .6;" id="minus-val">
                            </div>
                            <div class="d-inline-block px-2">

                                <div style="width: 160px;height: 2px;background: #ccc;border-radius: 0px;top: -2px;position: relative;  " class="text-left" >
                                    <div style="display: inline-block;background: #fff;border-radius: 10px;top: -2px;position: absolute;height: 4px;width: 100%;top: -1px" id="val">
                                    </div>
                                </div>
                            </div>
                            <div class="d-inline-block">
                                <img src="{{env('PUBLIC_PATH')}}/site_images/Plus.png" class="" style="cursor: pointer;width: 15px;opacity: .6;" id="plus-val">
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <div class="container pt-5 pb-5 mb-5 ">

                <style type="text/css">
                    .home-specialization.active img{
                        border:2px solid #eee;
                    }
                    .home-specialization.active span{
                        font-weight: bold;
                    }
                </style>
                <div class="col-12 px-0 row text-center justify-content-center   pb-5 mb-5 ">

                    <div class="d-inline-block px-4 mt-3 home-specialization" style="cursor: pointer;" data-song="{{env('PUBLIC_PATH')}}/sounds/rain_tent.mp3">
                        <img src="{{env('PUBLIC_PATH')}}/site_images/umbrella.png" style="width: 80px; border-radius: 5px;padding: 13px"   >
                        <span class="d-block pt-3" style=" color: #fff">@lang('index.type1')</span>
                    </div>
                    <div class="d-inline-block px-4 mt-3 home-specialization" style="cursor: pointer;" data-song="{{env('PUBLIC_PATH')}}/sounds/drops.mp3">
                        <img src="{{env('PUBLIC_PATH')}}/site_images/drops.png" style="width: 80px; border-radius: 5px;padding: 13px"   >
                        <span class="d-block pt-3" style=" color: #fff">@lang('index.type2')</span>
                    </div>
                    <div class="d-inline-block px-4  mt-3 home-specialization" style="cursor: pointer;" data-song="{{env('PUBLIC_PATH')}}/sounds/rain_thunder.mp3">
                        <img src="{{env('PUBLIC_PATH')}}/site_images/storm.png" style="width: 80px; border-radius: 5px;padding: 13px"   >
                        <span class="d-block pt-3" style=" color: #fff">@lang('index.type3')</span>
                    </div>
                    <div class="d-inline-block px-4  mt-3 home-specialization active" style="cursor: pointer;" data-song="{{env('PUBLIC_PATH')}}/sounds/rain_only.mp3">
                        <img src="{{env('PUBLIC_PATH')}}/site_images/rain.png" style="width: 80px;border-radius: 5px;padding: 13px"   >
                        <span class="d-block pt-3" style="color: #fff">@lang('index.type4')</span>
                    </div>
                </div>
            </div>



        </div>
    </div>




    <div class="container-fluid" style="position: absolute;bottom: 0px">
        <div class="col-12 px-0 row">
            <div class="col-12 col-md-4 text-center    py-3 px-1" style="color: #ddd;direction: rtl;" >
                @lang('index.designer')
            </div>
            <div class="col-12 col-md-4 text-center  py-3" style="position: relative; color: #ddd">
                @lang('index.copy_rights')
            </div>
            <div class="col-12 col-md-4 text-center  " >
                <a href="#" class="d-inline-block py-3 px-1" style="color: #ddd">
                    @lang('index.privacy_title')
                </a>
                <a href="#" class="d-inline-block py-3 px-1" style="color: #ddd">
                    @lang('index.terms_title')
                </a>
            </div>
        </div>
    </div>





</div>



{{-- <div class="flex-center position-ref full-height">


</div> --}}

<audio  id="audio-matar" loop>
    <source src="{{env('PUBLIC_PATH')}}/sounds/rain_only.mp3" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>


<link rel="stylesheet" type="text/css" href="https://footer.devlab.ae/public/styles.css">
@if(session('language')=='ar')
    <iframe src="https://footer.devlab.ae/ar" class="col-12 footer-iframe px-0 mt-5" style="width: 100%"></iframe>
@endif
@if(session('language')=='en')
    <iframe src="https://footer.devlab.ae/en" class="col-12 footer-iframe px-0" style="width: 100%"></iframe>
@endif

<script src="https://code.jquery.com/jquery-3.4.1.min.js" ></script>
<script type="text/javascript">
    $('.home-specialization').on('click',function(){
        $('.play-button').removeClass('paused');
        //alert($(this).data('song'));
        $('.home-specialization').removeClass('active');
        $(this).addClass('active');
        $("#audio-matar").attr("src", $(this).data('song'));
        $('#audio-matar')[0].play();
        $('.play-button').attr('src','{{env('PUBLIC_PATH')}}/site_images/pause-button.png');

        /*if($(this).hasClass('paused')){

            $(this).attr('src','{{env('PUBLIC_PATH')}}/site_images/play-button.png');

            }else{
                $(this).attr('src','{{env('PUBLIC_PATH')}}/site_images/pause-button.png');

            }
            */
    });
    $('.play-button').on('click',function(){

        if(!$(this).hasClass('paused'))
        {
            $(this).addClass('paused');
            $('#audio-matar')[0].pause();
            $(this).attr('src','{{env('PUBLIC_PATH')}}/site_images/play-button.png');
        }
        else {
            var vid = document.getElementById("audio-matar");
            vid.volume = 1;
            $(this).removeClass('paused');
            $('#audio-matar')[0].play();
            $(this).attr('src','{{env('PUBLIC_PATH')}}/site_images/pause-button.png');
        }

    });
    $('#plus-val').on('click',function(){
        var vid = document.getElementById("audio-matar");
        if($('#val').width() !=$('#val').parent().width() && vid.volume!=1)
        {

            vid.volume = vid.volume + .1;

            //$('#audio-matar').data("volumeLevel","0.1");
            $('#val').width($('#val').width()+$('#val').parent().width()*.1);
        }
    })
    $('#minus-val').on('click',function(){
        var vid = document.getElementById("audio-matar");

        if($('#val').width() !=0 && vid.volume!=0){
            vid.volume = vid.volume - .1;
            $('#val').width($('#val').width()-$('#val').parent().width()*.1);
        }
    })
</script>



<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
@if(session('language')=="ar" && $api['footer']->footer_ar_enabled==1)
    {!!$api['footer']->footer_ar!!}
@elseif($api['footer']->footer_en_enabled==1)
    {!!$api['footer']->footer_en!!}
@endif

</body>
</html>
