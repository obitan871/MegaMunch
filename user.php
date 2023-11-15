<?php

class User {
    var $id;
    var $username = "";
    var $isSignedIn = false;
    var $user_type = "";


    function isSignedIn() {
        return $this->isSignedIn;
    }
}

?>
