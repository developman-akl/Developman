<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Jobs\SendEmailJob;

class ContactController extends Controller
{
	public function contact(Request $request) 
	{
		$validator = Validator::make($request->all(), [
			'name' => 'required|string|max:60', 
			'email' => 'required|email', 
			'message' => 'required|string|max:500' 
		]);

		if ($validator->fails()) {
			return response()->json([
				'status' => 'error',
				'message' => 'Please fill in all the fields!',
			], 500);
		}

		$details = $validator->validated();

		$url = 'https://www.google.com/recaptcha/api/siteverify';

		$remoteip = $_SERVER['REMOTE_ADDR'];
		
ray($remoteip);

		$data = [
			'secret' => config('services.recaptcha.secret'),
			'response' => $request->get('recaptcha'),
			'remoteip' => $remoteip
		];

		$options = [
			'http' => [
			'header' => "Content-type: application/x-www-form-urlencoded\r\n",
			'method' => 'POST',
			'content' => http_build_query($data)
			]
		];

		$context = stream_context_create($options);
		$result = file_get_contents($url, false, $context);
		$resultJson = json_decode($result);

ray($context, $result, $resultJson);

		if ($resultJson->success != true || $resultJson->score < 0.3) {
			return response()->json([
				'status' => 'error',
				'message' => 'ReCaptcha Error'
			], 200);
		}

		dispatch(new SendEmailJob($details));

		return response()->json([
			'status' => 'success',
			'message' => 'Thank you for contacting me! I will be in touch as soon as possible.'
		], 200);
	}
}