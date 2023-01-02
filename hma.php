<?php

$banner = "\e[36;1m                                                                                 
██╗  ██╗███╗   ███╗ █████╗     ██╗   ██╗██████╗ ███╗   ██╗
██║  ██║████╗ ████║██╔══██╗    ██║   ██║██╔══██╗████╗  ██║
███████║██╔████╔██║███████║    ██║   ██║██████╔╝██╔██╗ ██║
██╔══██║██║╚██╔╝██║██╔══██║    ╚██╗ ██╔╝██╔═══╝ ██║╚██╗██║
██║  ██║██║ ╚═╝ ██║██║  ██║     ╚████╔╝ ██║     ██║ ╚████║
╚═╝  ╚═╝╚═╝     ╚═╝╚═╝  ╚═╝      ╚═══╝  ╚═╝     ╚═╝  ╚═══╝                                                                                                                                      
[#] Tool Đào Random HMA [#]    
                               
YouTube : NLTL - Trí Lộc           
Admin :  Nguyễn Trí Lộc                   
Box Zalo : https://zalo.me/g/ybbfko483\n\n\e[0;1m";

sleep(1);
echo $banner;
sleep(1);
echo "Nhập Key Ban Đầu VD (4YLKWP-RXHD4J) : ";
$lic = trim(fgets(STDIN));
sleep(1);
echo "Nhập Số Lượng Key Cần Get : ";
$jum = trim(fgets(STDIN));
for ($i=1; $i <= $jum; $i++) {
$h = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$a = "1234567890";

$r = $h.$a;
$go = str_shuffle($r);
$rand = substr($go, rand(0,20), 6);
$file = "list_key.txt";
///kết hợp giấy phép ban đầu với kết quả được tạo
$res = $lic."-".$rand."\n";
touch($file);
$o = fopen($file, 'a');
fwrite($o, $res);
fclose($o);
}