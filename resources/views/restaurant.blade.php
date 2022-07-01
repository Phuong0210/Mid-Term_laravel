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

                                                @foreach ($t_restaurants as $res)
                                                    <form method="post" action="">
                                                        @csrf

                                                        <div data-mkdf-parallax-speed="1"
                                                            class="vc_row wpb_row vc_row-fluid mkdf-section mkdf-content-aligment-left"
                                                            style="">
                                                            <div class="clearfix mkdf-full-section-inner">
                                                                <div
                                                                    class="wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill">
                                                                    <div class="vc_column-inner vc_custom_1505498075306">
                                
                                                                        <div class="wpb_wrapper">
                                                                            <div
                                                                                class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_double vc_sep_border_width_2 vc_sep_pos_align_center vc_sep_color_black vc_separator-has-text">
                                                                                <span
                                                                                    class="vc_sep_holder vc_sep_holder_l"><span
                                                                                        class="vc_sep_line"></span></span>
                                                                                <h4 class="menu-tt">
                                                                                    {{ $res->category->name }}</h4>
                                                                                <span
                                                                                    class="vc_sep_holder vc_sep_holder_r"><span
                                                                                        class="vc_sep_line"></span></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="hl-food-list vc_row wpb_row vc_row-fluid mkdf-section vc_custom_1447769555653 mkdf-content-aligment-left">
                                                            <div class="clearfix mkdf-full-section-inner">
                                                                <div class="wpb_column vc_column_container vc_col-sm-6">
                                                                    <div class="vc_column-inner ">
                                                                        <div class="wpb_wrapper">
                                                                            <div
                                                                                class="mkdf-menu-list mkdf-ml-with-featured-image">
                                                                                <ul class="mkdf-ml-holder">

                                                                                    <li class="mkdf-ml-item clearfix">
                                                                                        <div class="mkdf-ml-item-image">
                                                                                            <img src="/image/{{ $res['image'] }}"
                                                                                                class="card-img-top"
                                                                                                alt="..."
                                                                                                width="100px">
                                                                                        </div>
                                                                                        <div
                                                                                            class="mkdf-ml-item-content">
                                                                                            <div
                                                                                                class="mkdf-ml-top-holder">
                                                                                                <div
                                                                                                    class="mkdf-ml-title-holder">
                                                                                                    <h4
                                                                                                        class="mkdf-ml-title">
                                                                                                        <a
                                                                                                            href="t_restaurants.show">{{ $res['pro_name'] }}</a>
                                                                                                    </h4>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="mkdf-ml-dots">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="mkdf-ml-price-holder">
                                                                                                    <h4
                                                                                                        class="mkdf-ml-price">
                                                                                                        69,000 ₫
                                                                                                    </h4>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="mkdf-ml-bottom-holder clearfix">
                                                                                                <div
                                                                                                    class="mkdf-ml-excerpt-holder">
                                                                                                    <p>{{ $res['description'] }}
                                                                                                    </p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </li>




                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                    </form>
                                                @endforeach
                                            </div>
</body>

</html>
