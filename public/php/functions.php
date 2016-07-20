<?php
function inputHas($key) {
    if (isset($_REQUEST[$key])) {
        return true;
    } else {
        return false;
    }
}

function inputGet($key, $default = null) {
    if (inputHas($key)) {
        return $_REQUEST[$key];
    } else {
        return $default;
    }
}

function escape($input) {
    return htmlspecialchars(strip_tags($input));
}

function clearSession()
{
    // clear $_SESSION array
    session_unset();

    // delete session data on the server and send the client a new cookie
    session_regenerate_id(true);
}