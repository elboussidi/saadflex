<?php 
ini_set('display_errors', 'on');

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
    
 $num= rand(1, 999);
}

?>
<?php
require './vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;
ob_clean();
ob_start();

?>
<style>
@import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Krona+One&display=swap');
</style>
<style>
   
    .a{
     color: #0000AA;
     font-family: 'Dancing Script', cursive;
     margin-left: 50%;
     
    } 
    p{
        font-size: 15px;
    }
    table{
        width: 100%;
        
    }
    .th{
       margin-left: 35%;
       border: 1px solid #0000EE ;
       padding: 5px;
       border-radius: 3px;
    }
    .info{
     margin-left: 60px;
    }
    .clt{
       width: 45%; 
       border: 1px solid black ;
       padding: 15px;
    }
    .frn{
        width: 50%; 
    }
    .cont{
        border: 1PX #0000AA solid ;
        width: 90%;
        margin-left: 8%;
       
    }
    .cont .pro{
        width: 30%;
    }
     .cont .ty{
        width: 20%;
    }
     .cont .qte{
        width: 20%;
    }
       .cont .prix{
        width: 15%;
    }
    
       .cont .mnt{
        width: 15%;
    }
    .cont th{
        background-color: #D6EAF8;
        border-bottom: 1px solid #000077;
        padding: 5px;
        font-size: 16px;
    }
     .cont td{ 
          font-size: 15px;
         height: 15px;
        padding: 5px;
     border-bottom: 1PX #0000AA solid ;
     }

     
</style>
    
<page backtop="30mm" backbottom="7mm" backleft="0mm" backright="10mm">
<page_header>
    <table >
        <tr>
            <td ><h1  >STE SAAD FLEX</h1> </td>
        </tr>
    </table>
  
   
</page_header>

<page_footer>
foter
</page_footer>
     <table class="th">
        <tr>
            <td><h4 class="a">bon de commande N : <?php echo $num;  ?></h4> </td>
        </tr>
    </table>
    <br><br><br>
   
    <table class="info">
         <tr>
             <td class="frn"> 
               
             </td>
             <td class="clt" >
                 <p>client  : <?php echo $nome; ?> </p>
                 <p> gsm : <?php echo $gsm ?> </p>
                 <p> ville :<?php echo$ville  ?>  </p>
             </td>
         </tr> 
      
                                     <td></td>
    </table>
    <br>
    <hr>
    <br>
    <table class="cont" cellspacing="0">
        <tr> <th class="qte">qte</th> 
            <th class="pro">produit</th>
            <th class="ty"> type</th> 
            <th class="prix">pri</th>
            <th class="mnt">mantant</th>
        </tr>
        
        
          <tr>
            <td><?php echo $qte1  ?> </td>
            <td> <?php echo $pro1 ?> </td>
            <td><?php echo $ty1 ?> </td> 
            <td></td>
            <td></td>
        </tr>
           <tr>
            <td><?php echo $qte2  ?> </td>
            <td> <?php echo $pro2 ?> </td>
            <td><?php echo $ty2 ?> </td> 
            <td></td>
            <td></td>
        </tr>
        
           <tr>
            <td><?php echo $qte3  ?> </td>
            <td> <?php echo $pro3 ?> </td>
            <td><?php echo $ty3 ?> </td> 
            <td></td>
            <td></td>
        </tr>
           <tr>
            <td><?php echo $qte4  ?> </td>
            <td> <?php echo $pro4 ?> </td>
            <td><?php echo $ty4 ?> </td> 
            <td></td>
            <td></td>
        </tr>
           <tr>
            <td><?php echo $qte5  ?> </td>
            <td> <?php echo $pro5 ?> </td>
            <td><?php echo $ty5 ?> </td> 
            <td></td>
            <td></td>
        </tr>
           <tr>
            <td><?php echo $qte6  ?> </td>
            <td> <?php echo $pro6 ?> </td>
            <td><?php echo $ty6 ?> </td> 
            <td></td>
            <td></td>
        </tr>
           <tr>
            <td><?php echo $qte7  ?> </td>
            <td> <?php echo $pro7 ?> </td>
            <td><?php echo $ty7 ?> </td> 
            <td></td>
            <td></td>
        </tr>
           <tr>
            <td><?php echo $qte8  ?> </td>
            <td> <?php echo $pro8 ?> </td>
            <td><?php echo $ty8 ?> </td> 
            <td></td>
            <td></td>
        </tr>
           <tr>
            <td><?php echo $qte9  ?> </td>
            <td> <?php echo $pro9 ?> </td>
            <td><?php echo $ty9 ?> </td> 
            <td></td>
            <td></td>
        </tr>
           <tr>
            <td><?php echo $qte10  ?> </td>
            <td> <?php echo $pro10 ?> </td>
            <td><?php echo $ty10 ?> </td> 
            <td></td>
            <td></td>
        </tr>
        
            </table>
    <br><br><br>
     <table style="margin-left: 55%; width: 60%; border: 1px black solid ;"  cellspacing="0">
         <tr style="margin-bottom: 5px;width: 50%">
            <td style=" border-bottom: 1px #000022 solid; padding: 10px"> TVA :  </td>
           <td style=" border-bottom: 1px #000022 solid; padding-left : 120px ; border-left: 1px black solid ;">  </td>
            <td style=" border-bottom: 1px #000022 solid; padding: 10px"> DH </td>
         </tr >
         <tr style="width: 50%">
            <td style=" border-bottom: 1px #000022 solid; padding: 10px">mantant TTC : </td>
            <td style=" border-bottom: 1px #000022 solid; padding-left:  120px;border-left: 1px black solid ;">  </td>
            <td style=" border-bottom: 1px #000022 solid; padding: 10px">  DH </td>
        </tr>
    </table>
    
    <br>
    
    <br>
     <table style="margin-left: 40%;">
        <tr>
            <td ><h3  >le : <?php echo date("d/m/Y"); ?></h3> </td>
        </tr>
    </table>
    
    
    
</page>


 <?php
 
 $content= ob_get_clean() ;
$html2pdf = new Html2Pdf('P','A4','fr');
$html2pdf->writeHTML($content);
$html2pdf->output('frist.pdf');

?>

