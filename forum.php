<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<title>Fikirler</title>
</head>
<body>
<? 
include('menu.php');
?>
<div style="float:right;">
	<input type="submit" class="btn btn-info" Value="Başlık Aç" style="margin-right:30px;">
</div>
<form style="float:right;margin-right:10px;">
	<select>
		<option selected="selected">Hepsi</option>
		<option>Duyurular</option>
		<option>Anketler</option>
		<option>Fikirler</option>
	</select>
</form>
 	<table class="table table-striped">
 		<thead>
 			<tr>
                <th style="width:50px;">##</th>
                 <th>Başlık</th>
                 <th>Yazan</th>
                 <th>Tarih</th>
            </tr>
        </thead>
        <tbody>
        	<tr>
              	<td><span class="label label-warning">Anket</span></td>
                <td>selamun aleyküm</td>
                <td>Selami Işık</td>
                <td>26.09.2012</td>
            </tr>
            <tr>
              	<td><span class="label label-important">Duyuru</span></td>
                <td>Aleyküm selam</td>
                <td>Hüseyin Üzmez</td>
                <td>26.09.2012</td>
            </tr>
            <tr>
              	<td><span class="label label-info">Fikir</span></td>
                <td>hey din kardeşlerim</td>
                <td>Muhsin Yazıcıoğlu</td>
                <td>26.09.2012</td>
            </tr>
        </tbody>
    <table>
</body>
</html>