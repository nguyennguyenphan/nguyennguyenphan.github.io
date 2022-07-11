error_reporting(0);
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");
$Ngay=`date "+%d/%m/%Y"`;
$Gio=`date "+%H:%M"`;
$res="\033[0m";
$hong="\033[1;35m";
$trang="\033[1;37m";
$xnhac= "\033[1;96m";
$den="\033[1;90m";
$do="\033[1;91m";
$luc="\033[1;92m";
$vang="\e[1;93m";
$xduong="\e[1;94m";
$BBlack="\033[1;30m" ;      
$BRed="\033[1;31m"         ;
$BGreen="\033[1;32m"       ;
$BYellow="\033[1;33m"   ;
$BBlue="\033[1;34m"        ;
$BPurple="\033[1;35m"      ;
$BCyan="\033[1;36m"   ;
$BWhite="\033[1;37m"    ;
$Blue="\033[0;34m";
$res="\033[0m";
$red="\033[1;31m";
$BGreen="\033[1;32m";
$cyan="\033[1;36m";
$yellow="\033[1;33m";
$turquoise="\033[1;34m";
$lightSkyBlue="\033[1;35m";
$maufullznhac= "\033[1;47;1;34m";
$haodz = $do."[".$luc."●".$do."] ".$trang."=> ";
$gola = $do."[".$luc."●".$do."]";
$thanhngang = $xduong."==========================================================\n";
$ngreen="\033[42m";
$maul=rand(31,37);$maui="\033[1;".$maul."m";$end="\033[0m";$whiteb="\033[1;37m";$ress = "\033[0;32m";$res = "\033[0;33m";$red = "\033[0;31m";$green = "\033[0;37m";$yellow = "\033[0;33m";$white = "\033[0;33m";$xnhac = "\033[1;96m";$trang = "\033[1;90m";$do = "\033[1;91m";@system('clear');echo "\033[1;36m \n";
$t=
 $trang."\033[1;  (c).-.(c)             ░██████╗░░█████╗░██╗░░░░░░█████╗░";
for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
  usleep(2000);
}
echo "\033[1;32m\n";
$t=
 $trang."\033[1;   / ._. \              ██╔════╝░██╔══██╗██║░░░░░██╔══██╗";
for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
  usleep(2000);
}
echo "\033[1;95m\n";
$t=
 $trang."\033[1; __\( Y )/__            ██║░░██╗░███████║██║░░░░░██║░░██║";
for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
  usleep(2000);
}
echo "\033[1;31m\n";
$t= 
 $trang."\033[1;(_.-/'-'\-._)           ██║░░╚██╗██╔══██║██║░░░░░██║░░██║";
for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
  usleep(2000);
}
echo "\033[1;34m\n";
$t=
 $trang."\033[1;   ||   ||              ╚██████╔╝██║░░██║███████╗╚█████╔╝";
for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
  usleep(2000);
}
echo "\033[1;35m\n";
$t=
 $trang."\033[1; _.' `-' '._            ░╚═════╝░╚═╝░░╚═╝╚══════╝░╚════╝░";
 for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
 usleep(2000);
 }
 echo "\033[1;36m\n";
$t=
 $trang."\033[1;(.-./`-'\.-.)      █░█ ▄▀█ █▀█   ▀█▀ █░█ ▄▀█ █    ▀█▀ █▀█ █▀█ █░░";
 for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
 usleep(2000);
 }
 echo "\033[1;37m\n";
$t=
 $trang."\033[1; `-'     `-'       █▀█ █▀█ █▄█   ░█░ █▀█ █▀█ █    ░█░ █▄█ █▄█ █▄▄    ";
 for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
 usleep(2000);
 }
 //key//

 echo "\n";
 echo $thanhngang.
  $a=date('d'); 
          $b=date("m");
          $thoigian=date('d/m');
  $day = [];
  $day= date('d-m-y');
  $today = date("d-m-y");
  $d = date("d-m");
  $color2=array($a+$b+3740+$a*$b+49827);
  $cl1=$color2[array_rand($color2)];
  
  $color3=array($a+$b+3740+$a*$b+49827);
  $cl2=$color3[array_rand($color3)];
  
  $color4=array($a+$b+3740+$a*$b+49827);
  $cl3=$color4[array_rand($color4)];
  
  $color5=array($a+$b+3740+$a*$b+49827);
  $cl4=$color5[array_rand($color5)];
  $key = "thaihao".substr(md5($today), 0 , 8);
  $long_url = urlencode("https://thaihao.online/keytoolfree.php?key=$key");
  $api_token = '81e9fb486cb74b0738dee500ce01b64799b77400';
  $api_url = "https://link1s.com/api?api={$api_token}&url={$long_url}";
  $result = @json_decode(file_get_contents($api_url), true);
  $checkkey = file_get_contents("https://thaihao.online/keytoolfree.php?key=$key");
  $d = date("d-m");
  $_check = file_exists("hàotool$d.txt");
  echo $BGreen."Truy Cập Vào Link : $BWhite".$result["shortenedUrl"]."".$BGreen." Để Lấy Key Miễn Phí\n";
  echo "\033[1;31m[\033[1;33mTHÔNG BÁO\033[1;31m]\033[1;32m Đây Là Tool Free. Key Tool Phải Lấy Lại Mỗi Ngày Nhé \n";
  if ($_check !='1'){
  $gh = date("d-m", strtotime("yesterday"));
  $yt = "hàotool$gh.txt";
  $_check2 = file_exists("$yt");
  if($_check2==1){
    unlink("$yt");
  }
  for($j = 3;$j> 0;$j--){
    echo $BCyan."Chuyển Hướng Đến Trang Lấy Key Sau $BCyan".$j;
    sleep(1);
    echo "\r";
    echo "                                          \r";
  }
  system("termux-open-url ".$result["shortenedUrl"]."");
  echo $BWhite."- - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
      echo "\e[1;95m┌─[\e[1;37m\e[1;42m Nhập Key Đã Lấy\e[0m\e[1;95m]
  └──╼ \e[1;32mH\e[1;36mÀ\e[1;95mO : $vang ";
      $keyy = trim(fgets(STDIN));
      }
  if ($_check =='1'){
    $keyy = file_get_contents("hàotool$d.txt");
    $vt = 1;
    echo $BGreen."Đang Lấy Key...";
    sleep(2);
    echo "\r                                         \r";
  }
  if($keyy == ''){
    echo $BRed."Key Sai Rồi, Vào Link Phía Trên Để Lấy Key\n";
    exit;
  }
    if($keyy == $key)
        {
               echo $BGreen."Key Hợp Lệ\n";
               $mf = fopen("hàotool$d.txt", "w");
               fwrite($mf, $keyy);
               fclose($mf);
        }
        else
        {
             echo $BRed."Key Sai Rồi, Vào Link Phía Trên Để Lấy Key\n";
             exit;
        }
//xong key //
@system('clear');
$maul=rand(31,37);$maui="\033[1;".$maul."m";$end="\033[0m";$whiteb="\033[1;37m";$ress = "\033[0;32m";$res = "\033[0;33m";$red = "\033[0;31m";$green = "\033[0;37m";$yellow = "\033[0;33m";$white = "\033[0;33m";$xnhac = "\033[1;96m";$trang = "\033[1;90m";$do = "\033[1;91m";@system('clear');echo "\033[1;36m \n";
$t=
 $trang."\033[1;  (c).-.(c)             ░██████╗░░█████╗░██╗░░░░░░█████╗░";
for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
  usleep(2000);
}
echo "\033[1;32m\n";
$t=
 $trang."\033[1;   / ._. \              ██╔════╝░██╔══██╗██║░░░░░██╔══██╗";
for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
  usleep(2000);
}
echo "\033[1;95m\n";
$t=
 $trang."\033[1; __\( Y )/__            ██║░░██╗░███████║██║░░░░░██║░░██║";
for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
  usleep(2000);
}
echo "\033[1;31m\n";
$t= 
 $trang."\033[1;(_.-/'-'\-._)           ██║░░╚██╗██╔══██║██║░░░░░██║░░██║";
for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
  usleep(2000);
}
echo "\033[1;34m\n";
$t=
 $trang."\033[1;   ||   ||              ╚██████╔╝██║░░██║███████╗╚█████╔╝";
for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
  usleep(2000);
}
echo "\033[1;35m\n";
$t=
 $trang."\033[1; _.' `-' '._            ░╚═════╝░╚═╝░░╚═╝╚══════╝░╚════╝░";
 for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
 usleep(2000);
 }
 echo "\033[1;36m\n";
$t=
 $trang."\033[1;(.-./`-'\.-.)      █░█ ▄▀█ █▀█   ▀█▀ █░█ ▄▀█ █    ▀█▀ █▀█ █▀█ █░░";
 for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
 usleep(2000);
 }
 echo "\033[1;37m\n";
$t=
 $trang."\033[1; `-'     `-'       █▀█ █▀█ █▄█   ░█░ █▀█ █▀█ █    ░█░ █▄█ █▄█ █▄▄    ";
 for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
 usleep(2000);
 }
echo "\n";
echo $luc."╔═════════════════════╗\n";
echo $luc."║ ".$xnhac."Thông Tin Tool ".$luc."     ║\n";  
echo $luc."╚═════════════════════╝\n";
echo $haodz.$luc."Web Bán Key : https://thaihao.online \n";
echo $haodz.$luc."MB Bank     : 9992005456789\n";
echo $haodz.$luc."Chủ Tài Khoản : Thái Doãn Anh Hào\n";
echo $haodz.$luc."Cảm Ơn Bạn Đã Sử Dụng Tool Của Thái Hào !!!\n";
echo $thanhngang;
echo $luc."╔═════════════════════╗\n";
echo $luc."║ ".$hong."Tool Trao Đổi Sub ".$luc."  ║\n";  
echo $luc."╚═════════════════════╝\n";
echo $haodz.$luc."[".$do."1".$luc."] Tool Trao Đổi Sub Token \n";
echo $haodz.$luc."[".$do."2".$luc."] Tool Trao Đổi Sub Cookie \n";
echo $thanhngang;
echo $luc."╔═════════════════════╗\n";
echo $luc."║ ".$vang."Tool Tương Tác Chéo ".$luc."║\n";  
echo $luc."╚═════════════════════╝\n";
echo $haodz.$luc."[".$xnhac."3".$luc."] Tool Tương Tác Chéo Token \n";
echo $haodz.$luc."[".$xnhac."4".$luc."] Tool Tương Tác Chéo Cookie \n";
echo $thanhngang;
echo $luc."╔═════════════════════╗\n";
echo $luc."║ ".$xduong."Tiện Ích Facebook ".$luc."  ║\n";  
echo $luc."╚═════════════════════╝\n";
echo $haodz.$luc."[".$vang."5".$luc."] Tool Nuôi tài khoản Facebook \n"; //3
echo $haodz.$luc."[".$vang."6".$luc."] Tool gửi lời mời kết bạn \n"; //4
echo $haodz.$luc."[".$vang."7".$luc."] Tool chọc bạn bè \n"; //5
echo $haodz.$luc."[".$vang."8".$luc."] Tool CMT dạo \n"; //6
echo $haodz.$luc."[".$vang."9".$luc."] Tool bão like bạn bè \n"; //7
echo $haodz.$luc."[".$vang."10".$luc."] Liên Hệ Ad \n";
echo $thanhngang;
echo $haodz."".$luc."Nhập Số: $vang";
$chontool = trim(fgets(STDIN));
if ($chontool == '1'){
	if(!$sock = @fsockopen('www.google.com', 80))
{
    echo 'Vui lòng bật kết nối mạng';
    exit();
}
	eval(getlink('https://thaihao.online/free/1haohao1'));
}else if ($chontool == '2'){
  eval(getlink('https://thaihao.online/free/2haohao2'));
}else if ($chontool == '3'){
	eval(getlink('https://thaihao.online/free/3haohao3')); //ttctk
}else if ($chontool == '4'){
	eval(getlink('https://thaihao.online/free/4haohao4')); //ttcck
}else if ($chontool == '5'){
	eval(getlink('https://thaihao.online/free/5haohao5')); //3
}else if ($chontool == '6'){
	eval(getlink('https://thaihao.online/free/6haohao6')); //4
}else if ($chontool == '7'){
	eval(getlink('https://thaihao.online/free/7haohao7')); //chọc
}else if ($chontool == '8'){
	eval(getlink('https://thaihao.online/free/8haohao8')); //cmtdao
}else if ($chontool == '9'){
	eval(getlink('https://thaihao.online/free/9haohao9')); //bão 
}else if ($chontool == '10'){@system('xdg-open https://facebook.com/doanhao2005');
}else{exit($do."Nhập Sai Vui Lòng Nhập Số 1-10\n");}
function getlink($url){
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    $headers = array();
    $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36';
    $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
    $headers[] = 'Accept-Language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Vui lòng kiểm tra lại kết nối hoặc có thể do lỗi máy chủ!';
    }
    curl_close($ch);
    return $result;
}