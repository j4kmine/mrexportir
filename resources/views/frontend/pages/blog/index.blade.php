@extends('../../../templatefrontend')


@section('content')
<style>
    h1.title {
        margin-top: 0px;
        font-weight: bold;
    }
    
    .article-section {
        margin-bottom: 20px;
    }
    
    button.btn.btn-cek.btn-more {
        padding: 10px 30px;
        font-size: 20px;
    }
    
    .title-main {
        background: #F5F5F5;
        margin-top: 5px;
        padding: 32px 30px;
        margin-bottom: 30px;
        padding-bottom: 50px;
        border-radius: 5px;
        box-shadow: 0px 2px grey;
    }
    
    .title-main h1.title {
        font-size: 25px;
    }
    
    .title-main-small {
        background: #F5F5F5;
        padding: 33px 22px;
        margin-left: -30px;
    }
    
    .thumbnail-side {
        padding-bottom: 20px;
    }
    
    .title-main-big {
        background: #F5F5F5;
        padding: 55px 22px;
        margin-left: -30px;
    }
    
    .container-full.big-slide {
        background: #F5F5F5;
        margin-bottom: 50px;
        padding: 0px 20px;
    }
    
    .slick-slide {
        outline: none
    }
    
    .o-video {
        width: 100%;
        height: 0;
        position: relative;
        padding-top: 56.25%;
        /* 9 / 16 * 100 */
    }
    
    .o-video>iframe {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        border: 0;
    }
    
    h1.title-video {
        color: #fff;
        padding: 42px 30px;
        margin-top: 0px;
        background-color: rgba(0, 0, 0, 0.7);
        margin-bottom: 0px;
    }
    
    .slider-wrapper {
        position: relative;
    }
    
    .slider-wrapper .fa {
        font-size: 30px;
        margin-left: 105px;
    }
    
    i.fa.fa-chevron-up {
        margin-bottom: 15px;
    }
    
    i.fa.fa-chevron-up.prev.slick-arrow {
        position: absolute;
        top: -44px;
        z-index: 999999;
    }
    
    i.fa.fa-chevron-down.next.slick-arrow {
        position: absolute;
        bottom: 11px;
    }
    
    .slider-wrapper {
        margin-top: 59px;
    }
    
    .thumbnail-side:hover {
        cursor: pointer;
    }
</style>
<script>
    $(document).ready(function() {
        // slick carousel
        $(".thumbnail-side").click(function() {
            $('iframe').attr('src', $(this).attr('data-video'));
            $('.title-video').text($(this).attr('data-title'))
        })

        $('.slider').slick({
            dots: false,
            vertical: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            verticalSwiping: true,
            prevArrow: $('.prev'),
            nextArrow: $('.next'),
        });
        $("button.btn.btn-cek.btn-more").click(function(e){
          e.preventDefault();
          var current_value  = $("#current_pagination").val();
          $('#current_pagination').remove();
          $.post("<?php echo url('/morenews')?>", {current_value : current_value}, 
              function(data){
                var cekdata = data.includes("<div");
                console.log(cekdata)
                if (cekdata) {
                    $( "#article-parent" ).append( data );
                } else {
                  var x = document.getElementById("btnMore");
                  x.style.display = "none";
                }
            
              
          });
      });
    });
</script>

    

<div class="container-full big-slide">
    <div class="row">
        @foreach($youtube as $key=>$blog)
            @if($key == 0) 
            <div class="col-md-7 nopadding right">
                <div class="o-video">
                    <iframe src="{{ $blog['url_youtube'] }}" allowfullscreen></iframe>
                </div>
                <h1 class="title-video">
                    {{ $blog['title'] }}
                </h1>
            </div>
            @endif
        @endforeach
        <div class="col-md-5">
            <div class="slider-wrapper">
                <i class="fa fa-chevron-up prev" aria-hidden="true"></i>
                @foreach($youtube as $key=>$blog)
                @if($key == 0) 
                <div class="slider">
                    <div class="thumbnail-side" data-video="  {{ $blog['url_youtube'] }}" data-title="  {{ $blog['title'] }}">
                        <div class="row">
                            <div class="col-md-5">
                                <img src="{{url('/images/'.$blog['imagesdetail']['path'])}}" class="img-responsive" />
                            </div>
                            <div class="col-md-7">
                                <div class="title-main-big">
                                    <h5>  {{ $blog['title'] }}</h5>
                                    <b class="date">05 Maret 2019</b>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
                @endif
                @endforeach
                <i class="fa fa-chevron-down next" aria-hidden="true"></i>
            </div>

        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-5">
            @foreach($blogs as $key=>$blog)
                 @if($key == 0) 
                 <a href="<?php echo TextHelp::generateLink($blog);?>">
                    <img src="{{url('/images/'.$blog['imagesdetail']['path'])}}" class="img-responsive" />
                    <div class="title-main">
                        <h1 class="title">{{ $blog['title'] }}</h1>
                        <b class="date">05 Maret 2019</b>
                    </div>
                </a>
                @endif
            @endforeach
        </div>
        <div class="col-md-6">
            @foreach($blogs as $key=>$blog)
            @if($key > 0 && $key < 4) 
                <div class="thumbnail-side">
                    <a href="<?php echo TextHelp::generateLink($blog);?>">
                        <div class="row">
                            <div class="col-md-5">
                                <img src="{{url('/images/'.$blog['imagesdetail']['path'])}}" class="img-responsive" />
                            </div>
                            <div class="col-md-7">
                                <div class="title-main-small">
                                    <h5>{{ $blog['title'] }}</h5>
                                    <b class="date">05 Maret 2019</b>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endif
            @endforeach
        </div>
    </div>
    <div id="article-parent">
        @foreach($blogs as $key=>$blog)
            @if($key > 3) 
                    <div class="article-section">
                        <a href="<?php echo TextHelp::generateLink($blog);?>">
                        <div class="row">
                            <div class='col-md-4'>
                                <img src="{{url('/images/'.$blog['imagesdetail']['path'])}}" class="img-responsive" />
                            </div>
                            <div class='col-md-8'>
                                <h1 class="title">{{ $blog['title'] }}</h1>
                                <b class="date">05 Maret 2019</b>
                            </div>
                        </div>
                    </a>
                    </div>
                    
                    @if ($key == 8)
                         <input type="hidden" id="current_pagination" value="{{ $blog['id'] }}">
                    @endif
            @endif
        @endforeach
    </div>
    <?php if(isset($blogs) && count($blogs)>7){ ?>
        <div class="row">
            <div class="col-md-12 text-center">
                <button class="btn btn-cek btn-more" id="btnMore"><b>Muat Lebih Banyak</b></button>
            </div>
        </div>
    <?php } ?>
</div>

<br/>
<br/>
@endsection