<?php

$zip = new ZipArchive;

$zipped = $zip->open('abc.zip');

if ( $zipped ) {

    $zip->extractTo(dirname(__FILE__).'folder_name');

    $zip->close();

} ?>
