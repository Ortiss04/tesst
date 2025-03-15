<?php
echo "<style>
    table { border-collapse: collapse; margin: 0; padding: 0; }
    td, th { border: 1px solid black; padding: 10px; }
    .no-spacing { border-spacing: 0;
    .header { background-color: lightblue; }
    .cell { background-color: lightyellow; } 
</style>";
echo"<h1 style='text-align:center'>Bảng cửu chương từ 2 đến 10</h1>";
echo "<table class='no-spacing'><tr>";
for ($i = 2; $i <= 10; $i++) {
    
    echo "<td>";
    echo "<table class='no-spacing'>";
    echo "<tr><th colspan='2' class='header'>Bảng $i</th></tr>";
    for ($j = 1; $j <= 10; $j++) {
        $result = $i * $j;
        echo "<tr class='cell'><td>$i x $j</td><td>$result</td></tr>";
    }
    echo "</table>";
    echo "</td>";
}
echo "</tr></table>";
?>
