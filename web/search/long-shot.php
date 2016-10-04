<?php
    /**
     * @author SednaSoft A. Schaffhirt & A. Wünsche GbR <info@sedna-soft.de>
     * @version 2016-01-12 (date of last modification)
     * @since 2016-01-12 (date of creation)
     * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
     */

    require_once '../src/credentials.php';
    require_once 'functions.php';
    header('Content-Type: text/html; charset=UTF-8');
    $connection = new PDO(MARIA_DSN, MARIA_USER, MARIA_PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    $loadPhotomicrograph = $connection->prepare(
    /** @lang MySQL */
        'SELECT `file__uri` FROM `photomicrograph` WHERE `id` = ?'
    );
    if (isset($_GET['id']) && $_GET['id']) {
        $loadPhotomicrograph->execute([$_GET['id']]);
        $uri = preg_replace('<\.zip$>i', '.gif', $loadPhotomicrograph->fetchColumn(0));
//        $uri = 'http://virmisco.org/media/derivatives/Dermatophagoides_farinae_w_22.30686/Dermatophagoides_farinae_dorsal-ventral_22.30686/focal-series.gif';
        if (preg_match('<\.tiff?$>i', $uri)) {
            // TODO convert tiff images
            header('Location: ' . $uri, true, 301);
        }
        else header('Location: ' . $uri, true, 301);
    }
