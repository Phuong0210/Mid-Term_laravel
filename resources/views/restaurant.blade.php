<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>restaurant</title>
    <link rel="stylesheet" href="resources/css/app.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="mkdf-container bg-main-default">
            <div class="mkdf-overlapping-content-holder">
                <div class="mkdf-overlapping-content">
                    <div class="mkdf-overlapping-content-inner">
                        <div class="mkdf-container-inner clearfix">
                            <div id="pl-26" class="panel-layout">
                                <div id="pg-26-0" class="panel-grid panel-no-style">
                                    <div id="pgc-26-0-0" class="panel-grid-cell">
                                        <div id="panel-26-0-0-0"
                                            class="so-panel widget widget_hl_food_menu hl_food_menu panel-first-child"
                                            data-index="0">
                                            <div data-mkdf-parallax-speed="1"
                                                class="vc_row wpb_row vc_row-fluid mkdf-section vc_custom_1505573460551 mkdf-content-aligment-center mkdf-parallax-section-holder mkdf-parallax-section-holder-touch-disabled"
                                                style="background:url(http://at06.chonweb.vn/wp-content/uploads/2019/08/BahnMiBonus1.jpg); background-size:cover; background-position: 50% -44px;     padding: 108px !important; background-attachment: fixed;">
                                                <div class="clearfix mkdf-full-section-inner">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div
                                                                    class="wpb_single_image wpb_content_element vc_align_center">
                                                                    <figure class="wpb_wrapper vc_figure">
                                                                        <div
                                                                            class="vc_single_image-wrapper vc_box_rounded  vc_box_border_grey">
                                                                            <img src="http://at06.chonweb.vn/wp-content/themes/halink.at06/dev/enqueue/css/img/title-graphic-menu.png"
                                                                                class="vc_single_image-img attachment-full"
                                                                                alt="Bánh mì" />
                                                                        </div>
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="alert">
                                                @if (Session::has('success'))
                                                    {{ Session::get('success') }}
                                                @endif
                                            </div>
                                            <div class="table-wrapper">
                                                <div class="table-title">
                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <h2>MENU</h2>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <a href="{{ route('t_restaurants.create') }}"> <button
                                                                    type="button" class="btn btn-info add-new"><i
                                                                        class="fa fa-plus"></i> Add New</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div><h3 class="text-center">CƠM</h3></div>
    
                                                <div class='row'>
                                                    @foreach($t_restaurants as $res)
                                                    @if($res->categories_id=="1")
                                                    
                                                    <div class="col-3">
                                                        <a href="{{route('t_restaurants.show',$res->id)}}" class="text-decoration:none">
                                                        <img src="/image/{{$res ->image}}" class="img-thumbnail" alt=""></div>
                                                        <button type="button" class="btn btn-info" value="{{route('t_restaurants.show',$res->id)}}">Detail</button>
                                                    </a>
                                                        <div class="col-9 ">
                                                            <br>
                                                            <div class="row">
                                                            <div class="col-8 text-dark"><h3>{{$res->pro_name}}</h3></div>
                                                            <div class="col-4 text-dark  text-right">{{$res->price}} .vnđ</div>
                                                            </div>
                                                            <p class='text-dark'>{{$res->description}}</p>
                                                        
                                                    </div>
                                                    
                                                        
                                                    @endif
                                                    @endforeach
                                                </div>
                                                <div><h3 class="text-center">BÁNH MÌ</h3></div>
                                                
                                                <div class='row'>
                                                    
                                                    @foreach($t_restaurants as $res)
                                                    @if($res->categories_id=="2")
                                                    <div class="col-6">
                                                    <a href="{{route('t_restaurants.show',$res->id)}}" class="text-decoration:none">
                                                        <div class="row">
                                                        <div class="col-3"><img src="/image/{{$res ->image}}" class="img-thumbnail" alt=""></div>
                                                        <button type="button" class="btn btn-info" value="{{route('t_restaurants.show',$res->id)}}">Detail</button>
                                                    </a>
                                                        <div class="col-9 text-dark">
                                                            <br>
                                                            <div class="row">
                                                                <div class="col-8"><h3>{{$res->pro_name}}</h3></div>
                                                                <div class="col-4  text-right">{{$res->price}} .vnđ</div>
                                                            </div>
                                                            <p>{{$res->description}}</p>
                                                        </div>
                                                        </div>
                                                       
                                                    </div>
                                                    
                                                    @endif
                                                    @endforeach
                                                    
                                                    
                                                </div>
                                                <div><h3 class="text-center">BÚN PHỞ</h3></div>
                                                
                                                <div class="row">
                                                    
                                                    @foreach($t_restaurants as $res)
                                                    @if($res->categories_id=="3")
                                                    
                                                    <div class="col-4">
                                                    <a href="{{route('t_restaurants.show',$res->id)}}" class="text-decoration:none">
                                                        <div><img src="/image/{{$res ->image}}" style="width:300px;height:250px" class="img-thumbnail" alt=""></div>
                                                        <button type="button" class="btn btn-info" value="{{route('t_restaurants.show',$res->id)}}">Detail</button>
                                                    </a>
                                                        <div class="text-dark">
                                                            <br>
                                                            <div class="row">
                                                                <div class="col-6"><h3>{{$res->pro_name}}</h3></div>
                                                                <div class="col-6  text-right">{{$res->price}} .vnđ</div>
                                                            </div>
                                                            <p>{{$res->description}}</p>
                                                        </div>
                                                    
                                                    </div>
                                                    
                                                    
                                                    @endif
                                                    @endforeach
                                                    
                                                    
                                                </div>
                                                
                                            </div>
</body>

</html>
