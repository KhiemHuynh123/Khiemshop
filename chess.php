<?php
$size = 5;
$html = '<div class="chessboard">';
for ($row = 0; $row < $size; $row++) {
$html .= '  <div class="bottom">';
$color = ($row % 2 == 0) ? 'black' : 'white';
for ($col = 0; $col < $size; $col++) {
$html .= "    <span class=\"$color\"></span>";
$color = ($color == 'white') ? 'black' : 'white';
}
$html .= '  </div>';
}
$html .= '</div>';
echo $html;
?>

