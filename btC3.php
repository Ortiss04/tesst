<table border="1" align="center">
  <tr>
    <th>STT</th>
    <th>Nội dung</th>
  </tr>
  <?php
  $n = 10;
  for ($i = 0; $i < $n; $i++) {
      if ($i % 2 == 0) {
          echo "<tr style='background-color: green; text-align: center;width=300px'><td>" . $i . "</td><td>Dòng " . $i . " Lập trình PHP</td></tr>";
      } else {
          echo "<tr style='text-align: center;width=300px;'><td>" . $i . "</td><td>Dòng " . $i . " Lập trình PHP</td></tr>";
      }
  }
  ?>
</table>
