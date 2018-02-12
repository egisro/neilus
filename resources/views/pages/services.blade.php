@extends('layouts.app')

@section('content')

    <div class="containerr">
        <div class="row">
            <div class="col-md-12">
                <h1>{{$title}}</h1>
                <hr>
                <h3>Neilus Linen range of services. Taking care of your customers, together.</h3>
                <p>Reliable clean linen is a crucial part of the customer experience. Our clients come to Neilus Linen Express because we are a highly experienced and trusted linen partner. We are committed to working in partnership with our customers, because when we completely understand a customer’s needs we can design the most responsive and flexible service.
                    We encourage customers to make new choices and explore our new products and services. We’re understandably proud of our reputation for providing consistently high quality linen rental and commercial laundry services to all our customers! Whether you are an independent or national group customer, you can be sure that we will always put your linen service requirements first.</p>
                <p>As one of Ireland’s leading linen rental providers in terms of quality, innovation and environmental responsibility, we offer a complete supply and managed hire services. We provide the linen you require and manage the laundry with collection and delivery as you need it through our linen inventory management system. We take great care to ensure that each and every product is laundered to the highest quality. We are committed to the continuing development of our teams and to ongoing reinvestment in machinery and equipment. Attention to detail is key to our commercial laundry services, just like a well-presented bedroom or restaurant is key to the success of our hotel and restaurant clients. Considerable investment in the latest laundry processing techniques enables us to process high volumes of used linen in a fast and cost-effective manner. From the moment your linen is picked up, attention to detail is given throughout the sorting, washing, drying and packing processes, right through to the return delivery.</p>
            </div>
        </div>
        <hr>

        <div class="row display-flex">

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{ "img/hotel.jpg" }}" alt="...">
                    <div class="caption">
                        <h3>Hotels</h3>
                        <p>A comfortable guest is a happy guest! From crisp sheeting to fluffy towels, our hotel linens will enhance your guests’ experience.</p>
                        <p><a href="#" class="btn btn-default" role="button">Order</a></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{ "img/hostel.jpg" }}" alt="...">
                    <div class="caption">
                        <h3>Hostels</h3>
                        <p>Our quality assured linen products delivered direct to your hostel door are ideal for your guests and your budget!</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{ "img/hospital.jpg" }}" alt="...">
                    <div class="caption">
                        <h3>Hospitals</h3>
                        <p>From cost-effective direct-to-ward delivery to our innovative ScrubEx system, all our hospital linen services are managed to the highest standards of infection control and hygiene.</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row display-flex">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{ "img/spa.jpg" }}" alt="...">
                    <div class="caption">
                        <h3>Spa & Leisure</h3>
                        <p>Pamper your guests with the luxury and comfort of our cost-efficient and stylish 100% cotton Spa & Leisure Range.</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{ "img/restaurant.jpg" }}" alt="...">
                    <div class="caption">
                        <h3>Restaurants & Catering</h3>
                        <p>Make your table settings extra-special with 100% cotton napkins and tablecloths. Flexible ordering means scaling up for large events won’t incur unnecessary costs.</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{ "img/nursing.jpg" }}" alt="...">
                    <div class="caption">
                        <h3>Nursing Homes</h3>
                        <p>Nursing homes of all sizes use our extensive range of products, all of which have been tried and tested in the healthcare environment.</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                    </div>
                </div>
            </div>


        </div>


        </div>



    @if(count($services)>0)
        <ul class="list-group">
        @foreach($services as $service)
            <li class="list-group-item">{{$service}}</li>
        @endforeach
        </ul>
        @endif
    <p>email. Lorem ipsum dolor sit amet, consectetur.m</p>
@endsection