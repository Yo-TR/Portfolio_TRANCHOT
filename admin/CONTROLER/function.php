<?php 
function is_session_started(){
    if ( php_sapi_name() !== 'cli' ) {
    	return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
    }else{
    	return FALSE;
    }    
}
?>