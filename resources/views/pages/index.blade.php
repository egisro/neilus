@extends('layouts.app')



@section('content')
    <!-- Introduction -->

    <div class="intro section" id="about">
        <div class="container">
            <p>Neilus Linen Rental Service</p>
            <div class="units-row units-split wrap">
                <div class="unit-20">
                    <img src="img/ava.jpg" alt="Avatar">
                </div>
                <div class="unit-80">
                    <h1>Our Credo:<br><span id="typed"></span></h1>
                </div>
                <div class="container">
                    <p>
                        Linen partner to some of the best-known hotels and hospitals in the country, we deliver over one million freshly laundered items weekly. From sourcing only premium quality linens to implementing the best in new technologies, we remain committed to innovation and customer service.
                        For over ninety years, Celtic Linen has been the byword for fresh, quality linen. Now under new ownership by Causeway Capital, our commitment to innovation and service delivery and our fresh, personal approach take care of customers in every corner of Ireland. In both the Hospitality and Healthcare sectors, we put our customers ﬁrst.
                    </p>
                    <p>
                        <b>We're taking care of hospitality...</b>
                        From perfect premium bathroom towelling to crisp, perfectly clean bed linen and luxurious cotton table linen, we continue to excel in an industry that itself thrives on the pursuit of excellence!
                    </p>
                    <p>
                        <b>We're taking care of healthcare...</b>
                        As partner supplier to some of Ireland’s largest hospitals, our linen and scrubs services operate to the highest standards of hygiene and infection control. We also operate a highly successful direct-to-ward linen system.
                    </p>
                    <p>
                        <b>Environmentally responsible...</b>
                        Proud to be an environmentally responsible and friendly laundry with full ISO accreditation and certiﬁcation, we encourage our customers to explore our products and services and support them in making new choices. The signiﬁcant new investment in upgraded plant equipment and processes revolutionised our service offering and delivery.
                        With strategic distribution hubs in the four corners of Ireland, our logistics network is efficient and convinient. We dedicate resources to improving our service and continue to focus on delivering a better experience for our customers. All our teams are committed to constant improvement of our customerss – because this in turn means improvements for their customers!
                    </p>
                </div>
            </div>
            <hr>
        </div>
    </div>

    <div class="container jumbobox">
        <div class="jumbotron text-center bgr">
            <h1>Neilus Express Linen</h1>
            <p><a class="btn btn-primary btn-lg" href="login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
        </div>
    </div>






    <!-- Javascript -->
    {{--<script src="js/jquery.min.js"></script>--}}
    {{--<script src="js/typed.min.js"></script>--}}
    {{--<script src="js/kube.js"></script>--}}
    {{--<script src="js/site.js"></script>--}}
    {{--<script>--}}
        {{--function newTyped(){}$(function(){$("#typed").typed({--}}
            {{--// Change to edit type effect--}}
            {{--strings: ["professionalism", "speed", "timming"],--}}

            {{--typeSpeed:90,backDelay:700,contentType:"html",loop:!0,resetCallback:function(){newTyped()}}),$(".reset").click(function(){$("#typed").typed("reset")})});--}}
    {{--</script>--}}
@endsection
