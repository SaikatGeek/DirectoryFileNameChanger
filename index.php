<?php

function directoryFileNameChanger(path, replaceString, ReplaceByString)
{
    $dir = new \DirectoryIterator( realpath(path) );
    
    foreach ($dir as $fileInfo) {
        if( $fileName = str_replace( replaceString, ReplaceByString, $filename ) ) {

            rename(
                "old name" . $fileInfo->getFilename(), 
                "new_name" . $fileName
            );
        }
    }
}

directoryFileNameChanger(path, replaceString, ReplaceByString);
