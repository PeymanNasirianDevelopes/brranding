<?php
function RandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }

    return $randomString;
}

function user_images($photo){

    $filename=$photo->getClientOriginalExtension();
    $filename= RandomString().".". $filename;

    $photo->move(base_path().'/storage/app/public/users',$filename);
    return $filename;
}
