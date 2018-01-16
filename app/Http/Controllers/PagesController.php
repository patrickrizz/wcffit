<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller {

	public function getIndex() {
		//process variable data or params
		//talk to the model		
		//recieve from the model
		//compile or process data from model
		//pass data to the correct view
		$posts = Post::orderBy('created_at', 'desc')->limit(4)->get();

		 $data = \App\Page::where('permalink', '=', 'index')->get()->toArray();
    		 return view('pages.home', ['title' => "West County Fitness | Girard, PA", 'contents' => $data])->withPosts($posts);

	}

	public function getUri($uri) {

		$data = \App\Page::where('permalink', '=', $uri)->get()->toArray();
		return view('pages.subpage', ['title' => $uri,'contents' => $data]);	

	}
	
	

	public function getContact(Request $request) {

		$data = \App\Page::where('permalink', '=', 'Contact')->get()->toArray();
    		$input = $request->only('name', 'email', 'subject', 'message');
		$emailSent = false;

    		if ($request->isMethod('post')) {
        		$message = "Hello here is a message from ".$_SERVER['SERVER_NAME']. " " .
					"Name:".$request['name']. " " .
					"Email:".$request['email']. " " .
					"Message:".$request['message'];
		
			$subject="Premium template message: ".$request['subject'];
			$email = 'patrick.rizzardi@prkdigital.com';
			$primaryEmail = 'westcountyfitnessllc@gmail.com';
			$curl_post_data = array(
				'from' => 'webmaster@wcffit.com', 
				'to' => $primaryEmail,
				'subject' => $request['subject'], 
				'text' => $message 
		); 

		$service_url = 'https://api.mailgun.net/v3/wcffit.com/messages'; 

		$curl = curl_init($service_url); 
		curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC); 
		curl_setopt($curl, CURLOPT_USERPWD, "api:key-208d4887aeee490febc76a6584ab027d"); 
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
		curl_setopt($curl, CURLOPT_POST, true); 
		curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data); 
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); 
		$curl_response = curl_exec($curl); 
		curl_close($curl);
//		var_dump($curl_response);
//		exit;
		
		$emailSent = true;
	}

	return view('pages.contact', ['title' => "contact", 'contents' => $data, 'emailSent' => $emailSent]);


	}

		public function postContact() {



		}	

}

?>
