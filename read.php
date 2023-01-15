<!DOCTYPE html>
<html>
<head>
</head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width",initial-scale=1>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<title>結果表示</title>
<link rel="stylesheet" href="css/read.css">

<body>

<?php
// XSS対策用関数作成
function h ($value) {
    return htmlspecialchars($value,ENT_QUOTES);
}
// ファイルを変数に格納
$filename = './data/data.txt';

// fopenでファイルを開く（'r'は読み込みモードで開く）
$fp = fopen($filename, 'r');
$count1=0;
$count2=0;
?>

<table id="table">
    <tr>
      <th>日時</th>
      <th>名前</th>
      <th>メールアドレス</th>
      <th>性別</th>
      <th>年齢</th>
      <th>職業</th>
      <th>地域</th>
      <th>質問1</th>
      <th>質問2</th>
      <th>質問3</th>
      <th>質問4</th>
    </tr>
    <?php while (!feof($fp)) { 
            $txt = fgets($fp);
            $data=explode(" ",$txt);   
            if($data[8] =="①"){
                $count1++;
            }elseif($data[8]=="②"){
            $count2++;
            }
    ?>
    <tr>
      <td><?= h($data[0]) ?> <?= h($data[1]) ?></td>
      <td><?= h($data[2]) ?></td>
      <td><?= h($data[3]) ?></td>
      <td><?= h($data[4]) ?></td>
      <td><?= h($data[5]) ?></td>
      <td><?= h($data[6]) ?></td>
      <td><?= h($data[7]) ?></td>
      <td><?= h($data[8]) ?></td>
      <td><?= h($data[9]) ?> <?= h($data[10]) ?></td>
      <td><?= h($data[11]) ?> <?= h($data[12]) ?></td>
      <td><?= h($data[13]) ?> <?= h($data[14]) ?></td>
    </tr>
    <?php } ?>
</table>


<form action="delete.php" method="post">
  <input type="submit" value="データを全部削除する">
</form>
<h2>質問１の集計結果</h2>
<div id="chart_div"></div>

<script>
const question1Data=[['Answer','Count'],
['①', <?php echo $count1; ?>],
['②', <?php echo $count2; ?>]];

google.charts.load('current',{'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart(){
    var chart = new
    google.visualization.BarChart(document.getElementById('chart_div'));
    chart.draw(google.visualization.arrayToDataTable(question1Data));
}
</script>

<?php
fclose($fp);
?>

</body>
</html>



