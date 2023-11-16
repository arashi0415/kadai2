<?php
$filename = ('data2/data.txt');
$fp = fopen($filename,'r');
while(!feof($fp)){
$txt=fgets($fp);
$datas = explode(",", $txt);
$dataArray[] = $datas;
}
fclose($fp);
$json= json_encode($dataArray);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul id="output" class="output">
</ul>

<script>
let json = <?php echo json_encode($dataArray); ?>;

console.log(json);
let outputList = document.getElementById("output");

if (json) {
let output= document.getElementById("output");

for (let i=0;i<json.length;i++){
let listItem = document.createElement("li");

listItem.textContent=json[i].join(','); 
outputList.appendChild(listItem);
            }
        }
</script>


</body>
</html>