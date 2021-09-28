<?php 
function validatelogin(LoginRequest $request){
    if(!isset($request->username)){
        throw new ValidationException("Username is NULL");
    }else if(!isset($request->password)){
        throw new ValidationException("Password is NULL");
    }
}

?>