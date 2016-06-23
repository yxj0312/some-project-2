<?php

namespace App\Http;

class Flash {

	public function message($message)
	{
		session()->flash('flash_message',$message);  
	}
	

}

//$flash->message('Hello There');
//$flash->error('')
//$flash->aside()
//$flash->overlay()
//$flash->success()