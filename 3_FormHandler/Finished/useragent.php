<?php
    $agent = getenv("HTTP_USER_AGENT");
    echo " You are using $agent.";

    $myBrowser = get_browser($agent, true);
    print "<pre>";
    print_r($myBrowser);
    print "<pre";
?>

