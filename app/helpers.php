<?php 
    
    // function flash($message, $level ='info')
    // {
    //     session()->flash('Status', $message);
    //     session()->flash('Status_Color', $level);
    // };

	function flash($message)
	{
	    $flash = app('App\Http\Flash');

	    return $flash->message($message);
	}
	
