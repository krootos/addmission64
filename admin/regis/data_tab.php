<?php 

$start = 0;
$end = 40;

if(isset($_GET['catex'])){
	
  if(strcmp($_GET['op'], "นักเรียนในเขตพื้นที่บริการ") == 0 && strcmp($_GET['le'], "1") == 0 )	{
	if(strcmp($_GET['catex'], "1") == 0 ){
		$a = 11001;
		$b = 11016;
		$c = 11017;
		$d = 11032;
		$e = 11033;
	}elseif (strcmp($_GET['catex'], "3") == 0) {
		$a = 11041;
		$b = 11056;
		$c = 11057;
		$d = 11072;
		$e = 11073;
	}elseif (strcmp($_GET['catex'], "5") == 0) {
		$a = 11081;
		$b = 11096;
		$c = 11097;
		$d = 11112;
		$e = 11113;
	}elseif (strcmp($_GET['catex'], "7") == 0) {
		$a = 11121;
		$b = 11136;
		$c = 11137;
		$d = 11152;
		$e = 11153;

	}elseif (strcmp($_GET['catex'], "9") == 0) {
		$a = 11161;
		$b = 11176;
		$c = 11177;
		$d = 11192;
		$e = 11193;
	}elseif (strcmp($_GET['catex'], "11") == 0) {
		$a = 11201;
		$b = 11216;
		$c = 11217;
		$d = 11232;
		$e = 11233;
	}elseif (strcmp($_GET['catex'], "13") == 0) {
		$a = 11241;
		$b = 11256;
		$c = 11257;
		$d = 11272;
		$e = 11273;
	}elseif (strcmp($_GET['catex'], "15") == 0) {
		$a = 11281;
		$b = 11296;
		$c = 11297;
		$d = 11312;
		$e = 11313;
	}elseif (strcmp($_GET['catex'], "17") == 0) {
		$a = 11321;
		$b = 11336;
		$c = 11337;
		$d = 11352;
		$e = 11353;
	}elseif (strcmp($_GET['catex'], "18") == 0) {
		$a = 11361;
		$b = 11376;
		$c = 11377;
		$d = 11392;
		$e = 11393;
	}elseif (strcmp($_GET['catex'], "19") == 0) {
		$a = 11401;
		$b = 11416;
		$c = 11417;
		$d = 11432;
		$e = 11433;
	}elseif (strcmp($_GET['catex'], "14") == 0) {
		$a = 11441;
		$b = 11456;
		$c = 11457;
		$d = 11472;
		$e = 11473;
	}else{//16
		$a = 11481;
		$b = 11496;
		$c = 11497;
		$d = 11512;
		$e = 11513;
	}
  }elseif (strcmp($_GET['op'], "นักเรียนทั่วไป") == 0 && strcmp($_GET['le'], "1") == 0 ) {
  	if(strcmp($_GET['catex'], "2") == 0 ){
		$a = 12001;
		$b = 12016;
		$c = 12017;
		$d = 12032;
		$e = 12033;
	}elseif (strcmp($_GET['catex'], "4") == 0) {
		$a = 12041;
		$b = 12056;
		$c = 12057;
		$d = 12072;
		$e = 12073;
	}elseif (strcmp($_GET['catex'], "6") == 0) {
		$a = 12081;
		$b = 12096;
		$c = 12097;
		$d = 12112;
		$e = 12113;
	}elseif (strcmp($_GET['catex'], "8") == 0) {
		$a = 12121;
		$b = 12136;
		$c = 12137;
		$d = 12152;
		$e = 12153;

	}elseif (strcmp($_GET['catex'], "10") == 0) {
		$a = 12161;
		$b = 12176;
		$c = 12177;
		$d = 12192;
		$e = 12193;
	}else{//12
		$a = 12201;
		$b = 12216;
		$c = 12217;
		$d = 12232;
		$e = 12233;
	}
	/*elseif (strcmp($_GET['catex'], "14") == 0) {
		$a = 12241;
		$b = 12256;
		$c = 12257;
		$d = 12272;
		$e = 12273;
	}else{ //16
		$a = 12281;
		$b = 12296;
		$c = 12297;
		$d = 12312;
		$e = 12313;
	}*/
  }else{// ส่วนของ ม.4
  	if(strcmp($_GET['catex'], "1") == 0 ){
		$a = 21001;
		$b = 21016;
		$c = 21017;
		$d = 21032;
		$e = 21033;
	}elseif (strcmp($_GET['catex'], "2") == 0) {
		$a = 21041;
		$b = 21056;
		$c = 21057;
		$d = 21072;
		$e = 21073;
	}elseif (strcmp($_GET['catex'], "3") == 0) {
		$a = 21081;
		$b = 21096;
		$c = 21097;
		$d = 21112;
		$e = 21113;
	}elseif (strcmp($_GET['catex'], "4") == 0) {
		$a = 21121;
		$b = 21136;
		$c = 21137;
		$d = 21152;
		$e = 21153;
	}elseif (strcmp($_GET['catex'], "5") == 0) {
		$a = 21161;
		$b = 21176;
		$c = 21177;
		$d = 21192;
		$e = 21193;
	}elseif (strcmp($_GET['catex'], "6") == 0) {
		$a = 21201;
		$b = 21216;
		$c = 21217;
		$d = 21232;
		$e = 21233;
	}elseif (strcmp($_GET['catex'], "7") == 0) {
		$a = 21241;
		$b = 21256;
		$c = 21257;
		$d = 21272;
		$e = 21273;
	}elseif (strcmp($_GET['catex'], "8") == 0) {
		$a = 21281;
		$b = 21296;
		$c = 21297;
		$d = 21312;
		$e = 21313;
	}elseif (strcmp($_GET['catex'], "9") == 0) {
		$a = 21321;
		$b = 21336;
		$c = 21337;
		$d = 21352;
		$e = 21353;
	}elseif (strcmp($_GET['catex'], "10") == 0) {
		$a = 21361;
		$b = 21376;
		$c = 21377;
		$d = 21392;
		$e = 21393;
	}elseif (strcmp($_GET['catex'], "11") == 0) {
		$a = 21401;
		$b = 21416;
		$c = 21417;
		$d = 21432;
		$e = 21433;
	}elseif (strcmp($_GET['catex'], "12") == 0) {
		$a = 21441;
		$b = 21456;
		$c = 21457;
		$d = 21472;
		$e = 21473;
	}elseif (strcmp($_GET['catex'], "13") == 0) {
		$a = 21481;
		$b = 21496;
		$c = 21497;
		$d = 21512;
		$e = 21513;
	}elseif (strcmp($_GET['catex'], "14") == 0) {
		$a = 21521;
		$b = 21536;
		$c = 21537;
		$d = 21552;
		$e = 21553;
	}elseif (strcmp($_GET['catex'], "15") == 0) {
		$a = 21561;
		$b = 21576;
		$c = 21577;
		$d = 21592;
		$e = 21593;
	}elseif (strcmp($_GET['catex'], "16") == 0) {
		$a = 21601;
		$b = 21616;
		$c = 21617;
		$d = 21632;
		$e = 21633;
	}else{//17 ของ ม.4
		$a = 21641;
		$b = 21656;
		$c = 21657;
		$d = 21672;
		$e = 21673;
	}
  }
}

?>