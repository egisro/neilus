@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Get in touch</h1>
                <hr>
                <p>Contact Us 8.00am - 5.00pm Monday - Friday</p>
                <p><i class="fa fa-phone" aria-hidden="true"></i><span class="getint">+353 87 222 8059</span></p>
                <p><i class="fa fa-envelope" aria-hidden="true"></i><span class="getint">neilus.reynolds@gmail.com</span></p>
                <p><i class="fa fa-facebook" aria-hidden="true"></i><span class="getint">Write us a message at any time</span></p>
                <h4>Ballinasloe Headquarters</h4>
                <p>Some address</p>
                <p>Regional centres: Ballinasloe, West of Ireland and Midlands.</p>
            </div>

            <div class="col-lg-6">
                <h1>New Service Enquiry</h1>
                <hr>
                <form action="{{ url('contacts') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label name="Email"for="">Email <span class="reqfield">*</span></label>
                        <input id="email" name="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label name="phone"for="">Phone</label>
                        <input id="phone" name="phone" class="form-control">
                    </div>

                    <div class="form-group">
                        <label name="subject"for="">Subject <span class="reqfield">*</span></label>
                        <input id="subject" name="subject" class="form-control">
                    </div>

                    <div class="form-group">
                        <label name="message"for="">Message <span class="reqfield">*</span></label>
                        <textarea id="message" name="message" class="form-control" rows="4" placeholder="Type Your Enquiry here..."></textarea>
                    </div>
                    <input type="submit" class="btn btn-default btn-custom" value="Send Message">
                    {{--<button type="submit" class="btn btn-dark">Send Enquiry</button>--}}
                </form>
            </div>
        </div>
    </div>

@endsection