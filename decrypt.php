<?php
error_reporting(0);

$list = explode("\n", file_get_contents($argv[1])); 

echo "Masukkan hash yang ingin di bruteforce : "; 
fopen("php://stdin","r");

$hash = trim(fgets(STDIN));

print " _______________________________________\n\n";
print " [+] || This Tool Created By Alfa || [+]\n";
print " _______________________________________\n\n";

if(isset($argv[1])) {
	foreach($list as $wordlist) {
		if (password_verify($wordlist, $hash)) {
		 print "\n [+]$hash -> $wordlist (OK)\n\n [+] | Password nya adalah $wordlist \n"; die;
		  } else {
		  print " [+]$hash -> $wordlist (SALAH)\n";
		  }
	}
} else {
	print "usage: php ".$argv[0]." wordlist.txt\n";
}
?>
