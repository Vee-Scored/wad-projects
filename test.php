<?php
$fileStream = fopen("records.txt", 'r');
$record = fgets($fileStream, 1024);

echo fgets($fileStream);  // Output the second line
echo fgets($fileStream);  // Output the third line
echo fgets($fileStream);  // Output the fourth line (if available)
echo fgets($fileStream);  // Output the fourth line (if available)
echo feof($fileStream);   // Output false because the end of the file has not been reached

fclose($fileStream);
?>
