<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<title>Hype Uploader Beta</title>
</head>
<body>
<?
include('menu.php');
?>
 	<form enctype="multipart/form-data" action="uploader.php" method="POST">
 	<input type="submit" class="btn btn-info	 btn-large" style="float:right;margin-right:50px;margin-bottom:0px;" value="Yeni Dosya">
 	</form>
    <table class="table table-striped">
        <thead>
            <tr>
                <th style="width:10px;">#</th>
                <th style="width:700px;">Dosya Adı</th>
                <th>Dosya Boyutu</th>
                <th>Tarih</th>
            </tr>
        </thead>
        <tbody>
<?
function _format_bytes($a_bytes)
{
    if ($a_bytes < 1024) {
        return $a_bytes .' B';
    } elseif ($a_bytes < 1048576) {
        return round($a_bytes / 1024, 2) .' KB';
    } elseif ($a_bytes < 1073741824) {
        return round($a_bytes / 1048576, 2) . ' MB';
    } elseif ($a_bytes < 1099511627776) {
        return round($a_bytes / 1073741824, 2) . ' GB';
    } elseif ($a_bytes < 1125899906842624) {
        return round($a_bytes / 1099511627776, 2) .' TB';
    } elseif ($a_bytes < 1152921504606846976) {
        return round($a_bytes / 1125899906842624, 2) .' PB';
    } elseif ($a_bytes < 1180591620717411303424) {
        return round($a_bytes / 1152921504606846976, 2) .' EB';
    } elseif ($a_bytes < 1208925819614629174706176) {
        return round($a_bytes / 1180591620717411303424, 2) .' ZB';
    } else {
        return round($a_bytes / 1208925819614629174706176, 2) .' YB';
    }
}
$i = 0 ;

$dir = opendir("dosyalar");
while (($dosya = readdir($dir)) !== false)
{
if(! is_dir($dosya)){	
$i++;
?>
		<tr>
		<td><?=$i;?></td>
		<td><?=$dosya ; ?></td>
		<td><?=_format_bytes(filesize("dosyalar/$dosya"));?></td>
		<td><?=date("m d Y H:i:s.", fileatime("dosyalar/$dosya"));?></td>
		<td style="width:200px;">
			<input type="submit" class="btn btn-info btn-small" value="sil" style="margin-right:5px;float:right;">
			<input type="submit" class="btn btn-info btn-small" value="indir" style="float:right;margin-right:5px;">
			<input type="submit" class="btn btn-info btn-small" value="linki kopyala" style="float:right;margin-right:5px;">
		</td>
	</tr>
<?
}}
closedir($dir);
?>

</tbody>
</table>
</body>
</html>