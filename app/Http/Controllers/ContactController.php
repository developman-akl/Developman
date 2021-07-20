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

		dispatch(new SendEmailJob($details));
      
		return response()->json([
			'status' => 'success',
			'message' => 'Thank you for contacting me! I will be in touch as soon as possible.'
		], 200);
	}
}