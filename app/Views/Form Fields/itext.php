<?php
$session = \Config\Services::session();
$hash  = $_SESSION['user_hash'];

function createZipAndDownload($zipFileName, $hashfilepath)
{
    // Create instance of ZipArchive. and open the zip folder.
    $zip = new \ZipArchive();
    $zip->open("..\\Java\\output\\".$hashfilepath."\\".$zipFileName, \ZipArchive::CREATE);
    // Adding every attachments files into the ZIP.
    
    
    foreach (glob("..\\Java\\output\\".$hashfilepath."\\*.pdf") as $file) {
        $filename = explode("\\", $file);
        $zip->addFile($file, $filename[4]);
        
        
    }
    $zip->close();
    
    // Download the created zip file
    header("Content-type: application/zip");
    header("Content-Disposition: attachment; filename = $zipFileName");
    header('Content-Length: ' . filesize("..\\Java\\output\\".$hashfilepath."\\".$zipFileName));
    header("Pragma: no-cache");
    header("Expires: 0");
    readfile(("..\\Java\\output\\".$hashfilepath."\\".$zipFileName));
    exit;
}


if ($formid == 'allforms') {
    // Files which need to be added into zip
    $files = array('sample.php', 'sample.jpg', 'sample.pdf', 'sample.doc');
    // Directory of files
    $filesPath = '/ROOT/FILE_PATH';
    // Name of creating zip file
    $zipName = $hash.'.zip';
    
    $hashfilepath = $hash;
    
    echo createZipAndDownload($zipName, $hashfilepath);
    
}
else {
    $path = "..\\Java\\output\\".$hash."\\".$formid.".pdf";
    
    header("Content-type:application/pdf");
    
    // It will be called downloaded.pdf
    header("Content-Disposition:attachment;filename=".$formid.".pdf");
    header('Cache-Control: public');
    readfile($path);
    exit();
}


// The PDF source is in original.pdf
