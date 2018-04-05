<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>RSA </title>
  </head>
  <body>
    <?php
    $text = "SUZANNE";
    $data =  array();
    $p=3;//rand(100000000000000,999999999999999);
    $q=11;
    $n=$p*$q;
    $z=($p-1)*($q-1);
    $value=$z;
    $i=1;
    $new=0;

    $data=array();
      $e=array();
      echo "ค่าจำนวนเฉพาะ ";
        while($i<=$n)
        {
          $c=0;
            for($j=1;$j<=$i;$j++){
                if($i%$j==0)$c++;
            }
            if($c==2||$i==1) {
            echo  $i."  ";
            $data[$new]=$i;
            $new++;
            }
              $i++;
        }


$count=0;

/*
    for ($i1=0; $i1 <count ($data) ; $i1++) {
      for ($i2=0; $i2 <50 ; $i2++) {
        echo $data[$i1]."  *   "."   -  ".$i2."<br>";
        if ((($data[$i1]*$i2)%$z) == 1) {
            $e[$count]=$i2;
            echo $data[$i1]."    หมดรอบ     ".$e[$count]."<br>";
            $count++;
        }
      }
    }
*/
///ค่าคงที่
$d1=3;
echo "<br>เลือกแม่ $d1<br>";
for ($i2=0; $i2 <50 ; $i2++) {
  if ((($d1*$i2) % $z) == 1) {
      $e[$count]=$i2;
      echo $data[$i1]."    ตัวคูณที่ใช้ได้     ".$e[$count]."<br>";
      $count++;
  }
}

   echo "---------------------------------<br>";

//e ค่าที่หาจากตำนวนเฉพาะ
//d ค่าที่หาได้จากจำนวนรอบ*ค่าจำนวนเฉพาะ mod z แล้วเท่ากับ 1

    echo "p  = ".$p."<br>" ;
    echo "q  = ".$q."<br>" ;
    echo "n  = ".$n."<br>" ;
    echo "z  = ".$z."<br>" ;

   echo "---------------------------------<br>";
?>
RSA Algorithm
<table  border="2">
    <tr>
      <td>Symbolic</td>
      <td>Numeric</td>
      <td>P ยกกำลัง E</td>
      <td>P mod N</td>
      <td>C ยกกำลัง D</td>
      <td>C mod N</td>
      <td>Symbolic</td>
    </tr>
<?
        echo "<br>";
        echo "text >> ".$text;
        echo "<br> ขนาดตัวอักษร  ";
        echo strlen($text);
        echo "<br>";
        $argu;
      for ($r=0;$r<=strlen($text)-1;$r++){
         $check1=ord(substr($text, $r, 1));

         if ($check1==97||$check1==65) {
            $argu=1;
         }
         if ($check1==98||$check1==66) {
            $argu=2;
         }
         if ($check1==99||$check1==67) {
            $argu=3;
         }
         if ($check1==100||$check1==68) {
            $argu=4;
         }
         if ($check1==101||$check1==69) {
            $argu=5;
         }
         if ($check1==102||$check1==70) {
            $argu=6;
         }
         if ($check1==103||$check1==71) {
            $argu=7;
         }
         if ($check1==104||$check1==72) {
            $argu=8;
         }
         if ($check1==105||$check1==73) {
            $argu=9;
         }
         if ($check1==106||$check1==74) {
            $argu=10;
         }
         if ($check1==107||$check1==75) {
            $argu=11;
         }
         if ($check1==108||$check1==76) {
            $argu=12;
         }
         if ($check1==109||$check1==77) {
            $argu=13;
         }
         if ($check1==110||$check1==78) {
            $argu=14;
         }
         if ($check1==111||$check1==79) {
            $argu=15;
         }
         if ($check1==112||$check1==80) {
            $argu=16;
         }
         if ($check1==113||$check1==81) {
            $argu=17;
         }
         if ($check1==114||$check1==82) {
            $argu=18;
         }
         if ($check1==115||$check1==83) {
            $argu=19;
         }
         if ($check1==116||$check1==84) {
            $argu=20;
         }
         if ($check1==117||$check1==85) {
            $argu=21;
         }
         if ($check1==118||$check1==86) {
            $argu=22;
         }
         if ($check1==119||$check1==87) {
            $argu=23;
         }
         if ($check1==120||$check1==88) {
            $argu=24;
         }
         if ($check1==121||$check1==89) {
            $argu=25;
         }
         if ($check1==122||$check1==90) {
            $argu=26;
         }
         echo "<tr>";
         echo "<td>".substr($text, $r, 1)."</td>";
         echo "<td>".$argu."</td>";
         echo "<td>".pow($argu,$d1)."</td>";
         echo "<td>".pow($argu,$d1)%$n."</td>";
         $cal=pow(pow($argu,$d1)%$n,$e[0]);
         echo "<td>".$cal."</td>";
         echo "<td>";
         echo $cip=bcmod($cal,$n);
         echo "</td>";
         if ($cip==1) {
           echo "<td>A</td>";
         }
         if ($cip==2) {
           echo "<td>B</td>";
         }
         if ($cip==3) {
           echo "<td>C</td>";
         }
         if ($cip==4) {
           echo "<td>D</td>";
         }
         if ($cip==5) {
           echo "<td>E</td>";
         }
         if ($cip==6) {
           echo "<td>F</td>";
         }
         if ($cip==7) {
           echo "<td>G</td>";
         }
         if ($cip==8) {
           echo "<td>H</td>";
         }
         if ($cip==9) {
           echo "<td>I</td>";
         }
         if ($cip==10) {
           echo "<td>J</td>";
         }
         if ($cip==11) {
           echo "<td>K</td>";
         }
         if ($cip==12) {
           echo "<td>L</td>";
         }
         if ($cip==13) {
           echo "<td>M</td>";
         }
         if ($cip==14) {
           echo "<td>N</td>";
         }
         if ($cip==15) {
           echo "<td>O</td>";
         }
         if ($cip==16) {
           echo "<td>P</td>";
         }
         if ($cip==17) {
           echo "<td>Q</td>";
         }
         if ($cip==18) {
           echo "<td>R</td>";
         }
         if ($cip==19) {
           echo "<td>S</td>";
         }
         if ($cip==20) {
           echo "<td>T</td>";
         }
         if ($cip==21) {
           echo "<td>U</td>";
         }
         if ($cip==22) {
           echo "<td>V</td>";
         }
         if ($cip==23) {
           echo "<td>W</td>";
         }
         if ($cip==24) {
           echo "<td>X</td>";
         }
         if ($cip==25) {
           echo "<td>Y</td>";
         }
         if ($cip==26) {
           echo "<td>Z</td>";
         }
            echo"</tr>";
    }
     ?>
     </table>
  </body>
</html>
