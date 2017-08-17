<?
$answer = $_POST["answer"];

if(!$answer)
{
  echo("
       <script>
       window.alert('바로 하십시요..')
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
       window.alert('바로 하십시요..')
       history.go(-1)
       </script>
      ");
  exit;
}
*/

//$password_ok = 비번; 
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
       window.alert('아이디 혹은 비밀번호가 틀리셨군요.-,.-')
       history.go(-1)
       </script>
      ");
  exit;
}
?>