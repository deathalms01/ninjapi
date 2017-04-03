<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use Abraham\TwitterOAuth\TwitterOAuth;

class TwitterController extends Controller
{
    public $twitter;

	public function __construct()
	{
		$consumer = "7AHOFn9lwxsMtPaI4QXMEwa3d";
		$consumerSecret = "GoSswcvARKj5g3x1QLfpufTeoX0BxNw8tWfxLEGmsLlOiLKieU";
		$accessToken = "552624401-7Mow59fkymDOWFjzOycHBPE9ULIWtYT8suoQrzIi";
		$accessTokenSecret = "azo8WbD5oDq5S1HInQi7QojXVLbQPf0jJ9hkb3TE4KqMQ";
		$this->twitter = new TwitterOAuth($consumer,$consumerSecret,$accessToken,$accessTokenSecret);
	}

    public function searchTwitterUser()
    {
    	//$toSearch = Request->$request->search;
		$toSearch = Input::only('search');
		$twitterUser = $this->twitter
		->get("users/search", ["q" => $toSearch['search']]);

	// 	$statuses = $tweets->statuses;
	// 	foreach ($statuses as $tweet) {
	// 		echo  $tweet->user->name.' '.'<img src="'.$tweet->user->profile_image_url.'">' .' '. $tweet->text.'<br>';
	// }

		return View::make('twitter.result',array('searchUsers' => $twitterUser, 'searchName' => $toSearch['search'], 'resultCount' => count($twitterUser)));
		//var_dump($twitterUser);
    }

    public function getTweets($user)
    {
    	$id = $user;

		$tweets = $this->twitter->get("statuses/user_timeline",["user_id" => $id]);	
		//var_dump($tweets);
		return view('twitter.twitterprofile', compact('tweets'));
    }


}
