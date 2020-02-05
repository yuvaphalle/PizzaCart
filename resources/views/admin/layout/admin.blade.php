<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>

    <link rel="stylesheet" media="screen" href="httpss://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
@include('admin.layout.includes.header')
<div class="page-content">
    @if(Session::has('message'))
        <div class="alert alert-info">
            <p>{{ Session::get('message') }}</p>
        </div>
    @endif

    <div >
        @include('admin.layout.includes.sidenav')
        <div class="col-md-10 display-area">
            <div class="row text-center">
                <div class="col-md-10 col-md-offset-1">
                    <div class="content-box-large">
                    </div>
                </div>

            </div>
        </div><!--/Display area after sidenav-->
    </div>
        @yield('content')

</div><!--/Page Content-->

<script src="httpss://code.jquery.com/jquery.js"></script>
<script src="httpss://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $(".submenu > a").click(function (e) {
            e.preventDefault();
            var $li = $(this).parent("li");
            var $ul = $(this).next("ul");

            if ($li.hasClass("open")) {
                $ul.slideUp(350);
                $li.removeClass("open");
            } else {
                $(".nav > li > ul").slideUp(350);
                $(".nav > li").removeClass("open");
                $ul.slideDown(350);
                $li.addClass("open");
            }
        });
    });
</script>



</body>
</html>
