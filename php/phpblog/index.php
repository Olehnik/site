<?php include("blocks/bd.php");
 
$result = mysql_query("SELECT title,meta_d,meta_k,text FROM settings WHERE page='index'",$db);
if (!$result)
{
	echo "<p>Запрос на выборку данных из базы не прошел. Напишите об этом администратору admin@lala.com.<br>
	<strong>Код ошибки :</strong></p>";
	exit(mysql_error());
	}
	
if(mysql_num_rows($result) > 0)
{
	$myrow = mysql_fetch_array($result);
}
else
{
	echo "<p>Информация по запросу не может быть извлечена</p>";
	exit();
	}
	

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $myrow["title"]; ?></title>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta name="description" content="<?php echo $myrow["meta_d"]; ?>" />
<meta name="keywords" content="<?php echo $myrow["meta_k"]; ?>" />

</head>

<body>
<table width="690" border="0" align="center" class="main_border" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <?php include("blocks/header.php"); ?>
  <tr>
    <td height="34" valign="top"><table width="100%" border="0">
      <tr>
          <?php include("blocks/lefttd.php"); ?>
        <td><?php echo $myrow["text"]; ?></td>
      </tr>
    </table></td>
  </tr>
    <?php include("blocks/footer.php"); ?>
</table>
</body>
</html>