<?
if(!$id)
{
  echo("
       <script>
       window.alert('�ٷ� �Ͻʽÿ�..')
       history.go(-1)
       </script>
      ");
  exit;
}

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

$id_ok = ���̵�;
$password_ok = ���; 
if(($id_ok=="$id")&&($password_ok=="$password"))
{
SetCookie("UserID",$id,0,"/"); 
echo ("<meta http-equiv='Refresh' content='0; URL=$url'>");
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