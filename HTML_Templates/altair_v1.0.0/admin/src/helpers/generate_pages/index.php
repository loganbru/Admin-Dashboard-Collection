<?php
    $app_version = '1.0.0';
    $server_url = 'http://127.0.0.1/altair/';

    function wwwcopy($link,$file) {
        $cont = '';
        $fp = @fopen($link,"r");
        while(!feof($fp)) {
            $cont.= fread($fp,1024);
        }
        fclose($fp);
        $fp2 = @fopen($file,"w");
        fwrite($fp2,$cont);
        fclose($fp2);
    }

    $time = microtime();
    $time = explode(' ', $time);
    $time = $time[1] + $time[0];
    $start = $time;

    for($i=0;$i<2;$i++) {

        if($i==0) {
            $release = true;
            $folder = '../../../../_release/'.$app_version.'/_demo_site/';
        } else {
            $release = false;
            $folder = '../../../../_release/'.$app_version.'/admin/dist/';
        }

        if (is_dir($folder)) {
            array_map('unlink', glob($folder."*.html"));
        }

        wwwcopy($server_url."login.php?generate&release=".$release,$folder."login.html");
        wwwcopy($server_url."error_404.php?generate&release=".$release,$folder."error_404.html");
        wwwcopy($server_url."error_500.php?generate&release=".$release,$folder."error_500.html");

        $files = glob('../../php/views/*.php', GLOB_BRACE);
        foreach($files as $file) {
            $file = str_replace('../../php/views/', '', $file);
            $file = str_replace('.php', '', $file);
            wwwcopy($server_url."index.php?generate&release=".$release."&page=".$file, $folder.$file.".html");
        }
    }

    $time = microtime();
    $time = explode(' ', $time);
    $time = $time[1] + $time[0];
    $finish = $time;
    $total_time = round(($finish - $start), 4);

    echo "All done!<br>";
    echo "Pages generated in ".$total_time." seconds<br>";