<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		$this->response->body(View::factory('home/home'));
	}

	public function action_login()
	{
		$this->response->body(View::factory('home/login'));
	}

	public function action_authenticate()
	{
		echo("haha");
		$post = $this->request->param('idtoken');
		if (1==1)
		{
			if(1==1)
			{
				$id_token = $post;
				echo($post);
				echo ("something");
				require_once '../../vendor/autoload.php';
				$CLIENT_ID = '26808597848-u82upoffafu793802aive0aa9em7nj7q.apps.googleusercontent.com';
				$client = new Google_Client(['client_id' => $CLIENT_ID]);  // Specify the CLIENT_ID of the app that accesses the backend
				$payload = $client->verifyIdToken($id_token);
				if ($payload) 
				{
					$userid = $payload['sub'];
					$email = $payload['email'];
					echo ('Payload returned'+ $email);
					// If request specified a G Suite domain:
					//$domain = $payload['hd'];
				} 
				else 
				{
					echo ("Error inside");
				}
			}
			else
			{
				echo ("No post error");
			}
		}
		else
		{
			echo("some");
		}
	}

} // End Welcome
