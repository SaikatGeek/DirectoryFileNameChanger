<?php

$dir = new \DirectoryIterator( realpath( "" ) );

foreach ($dir as $fileInfo) {
    if( $fileName = str_replace( "replace", "replace_by", $filename ) ) {

        rename(
            "old name" . $fileInfo->getFilename(), 
            "new_name" . $fileName
        );
    }
}


