<?php 
if(isset($_POST['env']) && $_SERVER['REQUEST_METHOD'] =="POST"){
    $pro1=$_POST['pro1'];  $pro4=$_POST['pro4'];  $pro7=$_POST['pro7'];
    $pro2=$_POST['pro2'];    $pro5=$_POST['pro5'];  $pro8=$_POST['pro8'];
    $pro3=$_POST['pro3'];    $pro6=$_POST['pro6'];  $pro9=$_POST['pro'];   $pro10=$_POST['pro10'];
    
    $qte1=$_POST['qte1'];   $qte4=$_POST['qte4'];   $qte7=$_POST['qte7'];   
    $qte2=$_POST['qte2'];   $qte5=$_POST['qte5'];   $qte8=$_POST['qte8'];   
    $qte3=$_POST['qte3'];   $qte6=$_POST['qte6'];   $qte9=$_POST['qte9'];   $qte10=$_POST['qte10'];
    
    $ty1=$_POST['ty1'];       $ty4=$_POST['ty4'];       $ty7=$_POST['ty7'];   
        $ty2=$_POST['ty2'];       $ty5=$_POST['ty5'];       $ty8=$_POST['ty8'];   
    $ty3=$_POST['ty3'];       $ty6=$_POST['ty6'];       $ty9=$_POST['ty9'];       $ty10=$_POST['ty10'];   
    
        $nome=$_POST['nome'];       $ste=$_POST['ste'];       $gsm=$_POST['gsm'];       $ville=$_POST['ville'];   
    
   $err=$nome;
}
echo $nome;
?>
