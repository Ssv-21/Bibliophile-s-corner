<?php
session_start();
?>
<?php
$name=$pass='';
$arr=[];$cnt=0;$cnt1=0;$cnt2=0;$pos;
$errors=array('name'=>'','pass'=>'');
$_SESSION['usrname']='';
$_SESSION['pass']='';
$conct = mysqli_connect('localhost','mskn','test123','profiles');
        if($conct)
        {
            $sql='SELECT * FROM profilestable';
            $vals=mysqli_query($conct,$sql);
            $arr=mysqli_fetch_all($vals,MYSQLI_ASSOC);
            mysqli_free_result($vals);
            mysqli_close($conct);
        }
        else
        {
            echo "Connection error" . mysqli_connect_error();
        }
        $dummy='none';
        $_SESSION['usrname']=$dummy;
        $_SESSION['pass']=$dummy;
        $_SESSION['email']=$dummy;
        $_SESSION['phno']=$dummy;
        $_SESSION['brnch']=$dummy;
        $_SESSION['clg']=$dummy;

if(isset($_GET['submit']))
{
    $name = $_GET['uname'];
    $pass = $_GET['psw'];
    for($i=0;$i<count($arr);$i++)
        {
            if($arr[$i]['username']==$name && $arr[$i]['password']==$pass)
            {
                $cnt++;
                $pos=$i;
            }
            if($arr[$i]['username']==$name)
            {
                $cnt1++;
            }
            if($arr[$i]['password']==$pass)
            {
                $cnt2++;
            }
        }
    if($cnt>=1)
    {
        $_SESSION['usrname']=$name;
        $_SESSION['pass']=$pass;
        $_SESSION['email']=$arr[$pos]['email'];
        $_SESSION['phno']=$arr[$pos]['phone'];
        $_SESSION['brnch']=$arr[$pos]['branch'];
        $_SESSION['clg']=$arr[$pos]['college'];
        $_SESSION['image']=$arr[$pos]['images'];
        // include 'login1.php';
        header('Location:home.php');
    }
    else{
        if($cnt1>=1&&$cnt2>=1 || $cnt1==0&&$cnt2==0)
        {
            $errors['name']='Incorrect UserName!!';
            $errors['pass']='Incorrect Password!!';
        }
        else if($cnt1>=1&&$cnt2==0)
        {
            $errors['pass']='Incorrect Password!!';
        }
        else if($cnt1==0&&$cnt2>=1)
        {
            $errors['name']='Incorrect UserName!!';
        }
        include 'login1.php';
    }
}
else
{
    include 'login1.php';
}

?>
