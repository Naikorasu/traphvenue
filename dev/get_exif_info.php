<?php
/**
 * Created by PhpStorm.
 * User: naikorasu
 * Date: 14/09/18
 * Time: 15.51
 */

$image_file = "./photos/20180821_104502.jpg";



echo "FILE EXIST : ". file_exists($image_file) . "<br/>\n";

echo "FILE PATH : " . $image_file. ":<br />\n";
$exif = exif_read_data($image_file, 'IFD0');
echo $exif===false ? "No header data found.<br />\n" : "Image contains headers<br />\n";

echo "<pre>";
print_r($exif);
echo "</pre>";

$exif = exif_read_data($image_file, 0, true);


echo "<pre>";
print_r($exif);
echo "</pre>";
