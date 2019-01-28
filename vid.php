<?php

$user = array(
"arief", "indosec", "mozzakod"
);

$acak = str_shuffle("1234");

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'http://www.jetssh.com/create-account-ssh-3-days.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "serverid=2070&username=".$user[rand(0, 2)].$acak."&password=123");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Cookie: _ga=GA1.2.1682258372.1548660543; _gid=GA1.2.397898322.1548660545; PHPSESSID=gjolb6v0560e7jvldbt0jukmg2; HstCfa3660500=1548660550973; HstCmu3660500=1548660550973; HstCnv3660500=1; c_ref_3660500=http^%^3A^%^2F^%^2Fjetssh.com^%^2F; HstCns3660500=2; _gat_gtag_UA_127762168_1=1; HstCla3660500=1548662020070; HstPn3660500=7; HstPt3660500=7';
$headers[] = 'Origin: http://www.jetssh.com';
$headers[] = 'Accept-Encoding: gzip, deflate';
$headers[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36';
$headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
$headers[] = 'Accept: */*';
$headers[] = 'Referer: http://www.jetssh.com/create-ssh-server-3-days/2070/ssh-server-canada';
$headers[] = 'X-Requested-With: XMLHttpRequest';
$headers[] = 'Connection: keep-alive';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
		$d = date('d');
		$date = $d + 7;
preg_match_all("/<br>(.*?)<br>/ix", $result, $mantap);
// print_r($mantap);
if (!empty($mantap[1][2])) {
		echo "\nSUCCESS !!\n\nHost IP : ca.jetssh.com\n".$mantap[1][1]."\nPassword : 123\n".$mantap[1][2]."\n";
		echo "Expired : ".$date."-".date('F-y')."\n\n";
		}else{
			echo "GAGAL !!\nHarap Tunggu 1 menit Untuk Membuat Akun Lagi\n";
			
			}