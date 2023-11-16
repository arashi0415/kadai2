<?php
$name=$_POST["name"];
$mail=$_POST["mail"];
$text=$_POST["abc"];
$C = ",";
$X = "\n";

?>
<?php
//文字作成
$sty = date("Y-m-d H:i:s").$C.$name.$C.$mail.$X.$text;
//File書き込み
$file = fopen("data2/data.txt","a");	// ファイル読み込み
fwrite($file, $sty."\n");
fclose($file);
?>


<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>
<h2>./data/data.txt を確認しましょう！</h2>
<!-- <p><?=$str?></p> -->
<ul>
</ul>
</body>
</html>