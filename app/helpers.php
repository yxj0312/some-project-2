<?php 
    
    function flash($message, $level ='info')
    {
        session()->flash('Status', $message);
        session()->flash('Status_Color', $level);
    };
