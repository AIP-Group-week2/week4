<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Hrrp\Request;

class postingcontroller extends Controller
{
	pubilc funcation store(Request $request)
	{
	   $this->validate($request, [
				'movietitle' => ' required ',
				]);
}
public funcation update(Request $request, Post $post)

{
}
	
}
