<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Message;
use App\Email;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Mail;

class MessagesController extends Controller
{
	public function __construct()
	{
		$this->middleware('jwt.auth', ['except' => ['index', 'store']]);
	}
    //
	public function index(){

		$messages = Message::orderBy('id', 'desc')->take(50)->get();
		return response()->json([
			'data' => $messages
			]);
	}

	public function store(Request $request){

		if(! $request->photo or ! $request->name or ! $request->message){
			return response()->json([
				'error' => 'Please Provide all field required'
				], 422);
		}
		else {
			$message = Message::create([
				'photo' => $request->photo,
				'name' => $request->name,
				'message' => $request->message
				]);

			if($request->email){
				$emails = Email::where('email', $request->email)->first();
				if(!$emails){
					$email = Email::create([
						'email' => $request->email
						]);
				}
				
			}

			return response()->json([
				'message' => 'Message Created Succesfully',
				'data' => $message
				], 200);
		}

	}

	public function adminList(){
		$messages = Message::orderBy('id', 'desc')->get();
		return response()->json([
			'data' => $messages
			], 200);
	}

	public function adminEmails(){
		$emails = Email::orderBy('id', 'desc')->get();
		return response()->json([
			'data' => $emails
			], 200);
	}

	public function adminDelete($id){
		$message = Message::find($id);
		$message->delete();
		$messages = Message::orderBy('id', 'desc')->get();
		return response()->json([
			'message' => 'Message deleted successfully',
			'data' => $messages
			], 200);
	}

	public function adminDeleteEmail($id){
		$email = Email::find($id);
		$email->delete();
		$emails = Email::orderBy('id', 'desc')->get();
		return response()->json([
			'message' => 'Email deleted successfully',
			'data' => $emails
			], 200);
	}

	public function adminDash(){

		$messages = Message::count();
		$emails = Email::count();
		return response()->json([
			'data' => [
			'nbMessages' => $messages,
			'nbEmails' => $emails
			]
			]);
	}

	public function adminExport(){
		$emails = Email::select('email')->get();
		return response()->json([
			'data' => $emails
			], 200);

	}

	public function sendMails(Request $request){
		$emails = Email::get();
		foreach ($emails as $email) {
			# code...
			Mail::send('emails.template', ['data' => $request], function ($m) use ($email, $request) {
            $m->from($_ENV['EMAIL'], $_ENV['APPNAME']);

            $m->to($email->email)->subject($request->title);
        });
			return response()->json([
			'message' => 'Mails sent successfully'
			], 200);
		}
	}
}
