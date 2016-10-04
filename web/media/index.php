<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2016-08-17 (date of last modification)
     * @since 2015-08-12 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0
     */

    $uri = preg_replace('<^/media/>', 'http://185.15.246.7/pix/', $_SERVER['REQUEST_URI']);
    $handle = curl_init($uri);
    curl_setopt($handle, CURLOPT_FILETIME, true);
    curl_setopt($handle, CURLOPT_NOBODY, true);
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
    print_r(curl_exec($handle));
    header('Content-Type: ' . curl_getinfo($handle, CURLINFO_CONTENT_TYPE));
    curl_close($handle);
    readfile($uri);
