<?php
    session_start();
        // destory session
    if(session_destroy()) {
        // Go back to home page
        header("Location: login.php");
    }
