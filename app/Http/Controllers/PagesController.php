<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
<<<<<<< HEAD
        $messages=Message::latest()->paginate(10);
=======
        $messages=Message::paginate(10);
>>>>>>> 09dc42edc533234ff5427dcf35d566e0a5488e78

	    return view('welcome', [
	    	'messages' => $messages,
		]);
    }
}
