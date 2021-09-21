<?php
error_reporting(0);
function curl_request($currency, $cmd, $postfields = null) {

		$bitcoin_username = "KJiou89uihkjGhfd5e5rsf3w";
		$bitcoin_password = "Jhoi879uhKJgyter4eRSD54e6y";
		$bitcoin_portnumber = 15419;
		$bitcoin_ip = "172.31.65.122";

		$data = array();
		$data['jsonrpc'] = 2.0;
		$data['id'] = 1;
		$data['method'] = $cmd;
		$data['params'] = $postfields;
		$url = 'http://' . $bitcoin_username . ':' . $bitcoin_password . '@' . $bitcoin_ip . ':' . $bitcoin_portnumber;

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($ch, CURLOPT_POST, count($postfields));
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$ret = curl_exec($ch);
		$re = curl_getinfo($ch);
		curl_close($ch);
		// if ($cmd == 'sendtoaddress') {
		// 	echo "<pre>";
		// 	print_r($re);
		// 	echo "<pre>";
		// 	print_r($ret);exit;
		// }

		if ($ret !== FALSE) {
			if (isset($formatted->error)) {

				throw new Exception($formatted->error->message, $formatted->error->code);
			} else {

				$output = json_decode($ret);

				return $output->result;
			}
		} else {

			return "";
		}
	}
$result = curl_request("BTC", 'getbalance');
print($result);
print_r($result);
?>

