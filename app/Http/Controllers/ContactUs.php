<?php

namespace App\Http\Controllers;

use App\domain\model\ContactUsMessage;
use App\Jobs\SendContactusEmail;
use App\Mail\ContactUsMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Stevebauman\Location\Location;
use Webpatser\Uuid\Uuid;


class ContactUs extends Controller
{

    public function contactUs(Request $request){
        $validator = Validator::make($request->all(),
            [
                'name' => 'required|string|min:3',
                'email' => 'required|string|min:6',
                'message' => 'required|string|min:6',

            ]
        );

        if ($validator->fails()) {
            return Redirect::back()->with('message',array('receiveResultStatusCode' => 200,
                'result'=>array('raison'=>$validator->errors()->first(), 'success'=>0, 'faillure'=>1)));
        }

        if (!($request->get('phone') === '')){
            $validator = Validator::make($request->all(),
                [
                    'phone' => 'phone:AUTO',
                ]
            );
            if ($validator->fails()) {
                return Redirect::back()->with('message',array('receiveResultStatusCode' => 200,
                    'result'=>array('raison'=>$validator->errors()->first(), 'success'=>0, 'faillure'=>1)));
            }
        }

        //$location = geoip()->getLocation($request->ip())->toArray();
        $location = new Location();
        $position = $location->get($request->ip());

        $message = ContactUsMessage::create(
            [
                'contact_us_messageid'=>Uuid::generate()->string,
                'name'=>$request->get('name'),
                'surname'=>$request->get('surname'),
                'phone'=>$request->get('phone'),
                'email'=>$request->get('email'),
                'message'=>$request->get('message'),
                'position'=>/*$request->ip()*/json_encode($position)
            ]
        );

        $message->save();
        $template = 'contact-us-mail-template';
        $from = env('MAIL_USERNAME');
        $contactUsMailable = new ContactUsMailable($from, $template, $message, url(''));

        SendContactusEmail::dispatch($message->email, env('administrators_email'), $contactUsMailable);

        return Redirect::back()->with('message',array('receiveResultStatusCode' => 200,
            'result'=>array('response'=>"Message enregistre avec succes.", 'success'=>1, 'faillure'=>0)));

    }
//protected $fillable = ['contact_us_messageid', 'name', 'surname', 'phone', 'email', 'message', 'position'];
}
