<?php

namespace Creativesyntax\Contactus\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Creativesyntax\Contactus\Models\Contactus;
use Illuminate\Support\Facades\Mail;
use Creativesyntax\Contactus\Mail\ContactusMailable;
use Session;

class ContactusController extends Controller
{
    public function index()
    {
        return view('contactus::index');
    }

    public function save(Request $request)
    {
        $contactusObj = new Contactus;
        $contactusObj->full_name = $request->input('full_name');
        $contactusObj->email_id = $request->input('email_id');
        $contactusObj->contact_no = $request->input('contact_no');
        $contactusObj->message = trim(html_entity_decode(trim($request->input('message')), ENT_QUOTES));
        if ($contactusObj->save()) {

            Mail::to(config('contactus.send_to_email'))->send(new ContactusMailable($request->all()));
            return redirect()->back()->with('msg', 'Thanks! Your message has been sent successfully. We will contact you very soon.');
        }
    }
}
