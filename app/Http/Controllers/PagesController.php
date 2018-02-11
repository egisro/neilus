<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Mail;


class PagesController extends Controller
{
    public function index(){
        return view('pages.index');

    }
    public function services(){
        $data = array(
            'title' => 'services',
            'services' => ['Web design', 'programing', 'SEO']);
        return view('pages.services')->with($data);
    }
    public function callendar(){
        return view('pages.callendar');

    }
    public function orders(){
        return view('pages.orders');

    }
    public function contacts(){
        return view('pages.contacts');

    }
    public function postContacts(Request $request) {
        $this->validate($request, [
            'email'=>'required|email',
            'subject'=>'min:5',
            'message'=>'min:10']);
        $data = array(
          'email' => $request->email,
          'phone' => $request->phone,
          'subject' => $request->subject,
           'bodyMessage' => $request->message
        );
        Mail::send('emails.contacts', $data, function($message) use($data){
            $message->from($data['email']);
            $message->to('egdamo@gmail.com');
            $message->subject($data['subject']);

        });
        Session::flash('success', 'Your Enquery was Sent!');
        return redirect('/') -> with('success', 'Your Enquiry was Sent!');
    }
}
