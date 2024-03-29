<?php
// CSVファイルからデータを読み取る
$file = fopen("data.csv", "r");

// テーブルのヘッダーを表示
echo "<table border='1'>";
echo "<tr><th>名前</th><th>Eメール</th><th>会社の規模</th><th>心配事</th><th>採用条件</th><th>コメント</th></tr>";

// ファイルから1行ずつデータを読み込み、テーブルの行として表示
while (($data = fgetcsv($file)) !== FALSE) {
    echo "<tr>";
    foreach ($data as $value) {
        echo "<td>" . htmlspecialchars($value, ENT_QUOTES, 'UTF-8') . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

fclose($file);
?>
