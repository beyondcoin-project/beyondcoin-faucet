<?php
define("BEYONDCOIN_FAUCET",true);
require_once('./lib/jsonRPCClient.php');
require_once('./lib/beyondcoin_faucet.php');
require_once('./lib/proxy_filter/proxy_filter.php');
require_once('./config.php');
if (!isset($config) || !class_exists("jsonRPCClient") || !class_exists("beyondcoin_faucet"))
	die("Faucet missing core components and/or config.");
$beyondcoin_faucet = new beyondcoin_faucet($config);
$beyondcoin_faucet->render();
?>
<script type="text/javascript" id="cookieinfo"
	src="//cookieinfoscript.com/js/cookieinfo.min.js">
</script>
