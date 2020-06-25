<?php

// function genPdfThumbnail($source, $target){
//     //$source = realpath($source);
//     $target = dirname($source).DIRECTORY_SEPARATOR.$target;
//     $im     = new Imagick($source."[0]"); // 0-first page, 1-second page
//     $im->setImageColorspace(255); // prevent image colors from inverting
//     $im->setimageformat("jpeg");
//     $im->thumbnailimage(160, 120); // width and height
//     $im->writeimage($target);
//     $im->clear();
//     $im->destroy();
// }
// genPdfThumbnail($_SERVER['DOCUMENT_ROOT']."/pindad-clone/admin/system/1.pdf", $_SERVER['DOCUMENT_ROOT']."/pindad-clone/admin/system/1.jpeg");
// echo $_SERVER['DOCUMENT_ROOT'];


    // // source PDF file
    // $source = $_SERVER['DOCUMENT_ROOT']."/pindad-clone/admin/system/1.pdf[0]";
    // // output file
    // $target = $_SERVER['DOCUMENT_ROOT']."/pindad-clone/admin/system/1.jpeg";
    // // create a command string 
    
    // exec('"C:\imagick\convert "'.$source .'" -colorspace RGB -resize 800 "'.$target.'"', $output, $response);
    
    // echo $response ? "PDF converted to JPEG!!" : 'PDF to JPEG Conversion failed';
    
    // create Imagick object
    // $imagick = new Imagick();
    // // Reads image from PDF
    // $imagick->readImage($_SERVER['DOCUMENT_ROOT']."/pindad-clone/admin/system/1.pdf[0]");
    // // Writes an image or image sequence Example- converted-0.jpg, converted-1.jpg
    // $imagick->writeImages($_SERVER['DOCUMENT_ROOT']."/pindad-clone/admin/system/1.jpeg", false);

    // Folder path to be flushed 
    $folder_path = "a"; 
    
    // List of name of files inside 
    // specified folder 
    $files = glob($folder_path.'/*');  
    
    // Deleting all the files in the list 
    foreach($files as $file) { 
    
        if(is_file($file))  
        
            // Delete the given file 
            unlink($file);  
    } 
    rmdir($folder_path);

?>