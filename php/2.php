<?php
header('Content-Type: text/html; charset=UTF-8');?>

<?php
if(0==0){
echo    '<form method="post" action="">
      <table border="0">
        <tbody>
          <tr>
            <td>Число:</td>
            <td>
              <input type="text" value="" size="20" name="x">
            </td>
          </tr>
          <tr>
            <td>Цифра:</td>
            <td>
              <input type="text" value="" size="20" name="y">
            </td>
          </tr>
          <tr>
            <td>
              <input type="submit" value="Отправить" name="submit">
            </td>
          </tr>
        </tbody>
      </table>
      
    </form>';
	echo 'Количество вхождений: '.substr_count($_POST['x'],$_POST['y']);
}
else{
    echo 'Введите число';
 
} 