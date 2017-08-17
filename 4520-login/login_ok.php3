<?
if(!$id)
{
  echo("
       <script>
       window.alert('바로 하십시요..')
       history.go(-1)
       </script>
      ");
  exit;
}

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

$id_ok = 아이디;
$password_ok = 비번; 
if(($id_ok=="$id")&&($password_ok=="$password"))
{
SetCookie("UserID",$id,0,"/"); 
echo ("<meta http-equiv='Refresh' content='0; URL=$url'>");
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