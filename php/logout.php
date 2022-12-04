<?php
    require_once "config.php";
    // destroy all sessions
    session_destroy();
    redirect_to("../index.html");