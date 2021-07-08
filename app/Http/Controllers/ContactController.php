<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\GmailMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class ContactController extends Controller
{
    public function mail(Request $request)
    {
        $data = array(
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'message' => $request->input('message')
        );
        try {
            Mail::to($request->input('email'))->send(new GmailMail($data));
            return response()->json(['status' => 200, 'message' => 'Success']);
        } catch (ModelNotFoundException $ex) {
            return response()->json(['status' => 500, 'message' => $ex]);
        }        
    }
}
