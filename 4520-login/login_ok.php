<?
$answer = $_POST["answer"];

if(!$answer)
{
  echo("
       <script>
       window.alert('�ٷ� �Ͻʽÿ�..')
       history.go(-1)
       </script>
      ");
  exit;
}


/*
if(!$password)
{
  echo("
       <script>
       window.alert('�ٷ� �Ͻʽÿ�..')
       history.go(-1)
       </script>
      ");
  exit;
}
*/

//$password_ok = ���; 
//echo $answer;
if(strcmp($answer,"123") == 0)//&&($password_ok=="$password"))
{
	echo $answer;
//	echo "<meta http-equiv='Refresh' content='0; URL=$url'>";
}
else
{
echo("
       <script>
       window.alert('���̵� Ȥ�� ��й�ȣ�� Ʋ���̱���.-,.-')
       history.go(-1)
       </script>
      ");
  exit;
}
?>