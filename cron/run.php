<?php
    define("BEYONDCOIN_FAUCET",true);
    chdir("..");
    require_once('./lib/jsonRPCClient.php');
    require_once('./lib/beyondcoin_faucet.php');
    require_once('./config.php');
    if (!isset($config) || !class_exists("jsonRPCClient") || !class_exists("beyondcoin_faucet"))
        die("Faucet missing core components and/or config.");
    $beyondcoin_faucet = new beyondcoin_faucet($config);
    $beyondcoin_faucet->execute_staged_payments();
?>