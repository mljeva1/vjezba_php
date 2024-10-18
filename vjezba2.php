<?php
$title = "Da Vincijev kod";
$link = "https://hr.wikipedia.org/Da_Vincijev_kod";

echo "<!DOCTYPE html>";
echo "<html lang='hr'>";

echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='description' content='Da Vincijev kod je kriminalistički triler američkog pisca Dana Browna.'>";
echo "<meta name='keywords' content='Da Vincijev kod, kriminalistički triler, Dan Brown'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>$title</title>";

echo "</head>";

echo "<body>";
echo "<h1>$title</h1>";

echo "<p>Da Vincijev kod je kriminalistički triler američkog pisca Dana Browna.</p>";
echo "<a href='$link' target='_blank'>Više informacija o Da Vincijevom kodu</a>"; // Korištenje varijable $link za poveznicu
echo "</body>";

echo "</html>";
?>