
<?php
$counter = $_GET['counter'];
$text = '\documentclass{article}
\usepackage{graphicx}
\begin{document}
Your image:
\begin{center}
\includegraphics[width=5cm]{source.jpg}
\end{center}
Your ip and date of access are:
\end{document}';
$myFile = fopen("Tasks/".$counter."/report.tex", "w");
fwrite($myFile,$text);
//$address = "C:\\xampp\htdocs\\338\Tasks\\$counter\\report.tex";

$text2 = 'pdflatex -halt-on-error "C:\xampp\htdocs\338\project lab\Tasks\\'.$counter.'\report.tex" -interaction=nonstopmode';
$debug = fopen("debug.txt", "w");
fwrite($debug, $text2);
chdir("C:/xampp/htdocs/338/project lab/Tasks/$counter");
exec('pdflatex -interaction=nonstopmode "C:\xampp\htdocs\338\project lab\Tasks\\'.$counter.'\report.tex"');
echo '<a href="Tasks\\'.$counter.'\report.pdf">Your results</a>';
?>

