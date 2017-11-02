<html>
<body>
<table>
<form action="hasildiagnosa.php" method="post">
<p> Jawablah Pertanyaan Berikut dengan Memilih ComboBox yang Tersedia</p>
<br>
<?php
include("koneksi.php");
//$i=1;
//$query=mysql_query("select count(*) as jum from gejala",$conn);
//$hasil=mysql_fetch_assoc($query);
//$jum=$hasil['jum'];
//echo $jum;
//for($i=1;$i<=$jum;$i++) {
 $gjla1=mysql_query("select * from gejala where no=1",$conn);
 $tmpil1=mysql_fetch_array($gjla1);
 echo "<tr>";
 echo "<td>";
 echo "1";
 echo "</td>";
 echo "<td>";
 echo $tmpil1["pertanyaan"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj1">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
<?php
 $gjla2=mysql_query("select * from gejala where no=2",$conn);
 $tmpil2=mysql_fetch_array($gjla2);
 echo "<tr>";
 echo "<td>";
 echo "2";
 echo "</td>";
 echo "<td>";
 echo $tmpil2["pertanyaan"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj2">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla3=mysql_query("select * from gejala where no=3",$conn);
 $tmpil3=mysql_fetch_array($gjla3);
 echo "<tr>";
 echo "<td>";
 echo "3";
 echo "</td>";
 echo "<td>";
 echo $tmpil3["pertanyaan"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj3">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla4=mysql_query("select * from gejala where no=4",$conn);
 $tmpil4=mysql_fetch_array($gjla4);
 echo "<tr>";
 echo "<td>";
 echo "4";
 echo "</td>";
 echo "<td>";
 echo $tmpil4["pertanyaan"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj4">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla5=mysql_query("select * from gejala where no=5",$conn);
 $tmpil5=mysql_fetch_array($gjla5);
 echo "<tr>";
 echo "<td>";
 echo "5";
 echo "</td>";
 echo "<td>";
 echo $tmpil5["pertanyaan"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj5">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla6=mysql_query("select * from gejala where no=6",$conn);
 $tmpil6=mysql_fetch_array($gjla6);
 echo "<tr>";
 echo "<td>";
 echo "6";
 echo "</td>";
 echo "<td>";
 echo $tmpil6["pertanyaan"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj6">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla7=mysql_query("select * from gejala where no=7",$conn);
 $tmpil7=mysql_fetch_array($gjla7);
 echo "<tr>";
 echo "<td>";
 echo "7";
 echo "</td>";
 echo "<td>";
 echo $tmpil7["pertanyaan"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj7">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla8=mysql_query("select * from gejala where no=8",$conn);
 $tmpil8=mysql_fetch_array($gjla8);
 echo "<tr>";
 echo "<td>";
 echo "8";
 echo "</td>";
 echo "<td>";
 echo $tmpil8["pertanyaan"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj8">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla9=mysql_query("select * from gejala where no=9",$conn);
 $tmpil9=mysql_fetch_array($gjla9);
 echo "<tr>";
 echo "<td>";
 echo "9";
 echo "</td>";
 echo "<td>";
 echo $tmpil9["pertanyaan"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj9">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla10=mysql_query("select * from gejala where no=10",$conn);
 $tmpil10=mysql_fetch_array($gjla10);
 echo "<tr>";
 echo "<td>";
 echo "10";
 echo "</td>";
 echo "<td>";
 echo $tmpil10["pertanyaan"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj10">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla11=mysql_query("select * from gejala where no=11",$conn);
 $tmpil11=mysql_fetch_array($gjla11);
 echo "<tr>";
 echo "<td>";
 echo "11";
 echo "</td>";
 echo "<td>";
 echo $tmpil11["pertanyaan"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj11">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla12=mysql_query("select * from gejala where no=12",$conn);
 $tmpil12=mysql_fetch_array($gjla12);
 echo "<tr>";
 echo "<td>";
 echo "12";
 echo "</td>";
 echo "<td>";
 echo $tmpil12["pertanyaan"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj12">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla13=mysql_query("select * from gejala where no=13",$conn);
 $tmpil13=mysql_fetch_array($gjla13);
 echo "<tr>";
 echo "<td>";
 echo "13";
 echo "</td>";
 echo "<td>";
 echo $tmpil13["pertanyaan"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj13">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla14=mysql_query("select * from gejala where no=14",$conn);
 $tmpil14=mysql_fetch_array($gjla14);
 echo "<tr>";
 echo "<td>";
 echo "14";
 echo "</td>";
 echo "<td>";
 echo $tmpil14["pertanyaan"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj14">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla15=mysql_query("select * from gejala where no=15",$conn);
 $tmpil15=mysql_fetch_array($gjla15);
 echo "<tr>";
 echo "<td>";
 echo "15";
 echo "</td>";
 echo "<td>";
 echo $tmpil15["pertanyaan"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj15">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla16=mysql_query("select * from gejala where no=16",$conn);
 $tmpil16=mysql_fetch_array($gjla16);
 echo "<tr>";
 echo "<td>";
 echo "16";
 echo "</td>";
 echo "<td>";
 echo $tmpil16["pertanyaan"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj16">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla17=mysql_query("select * from gejala where no=17",$conn);
 $tmpil17=mysql_fetch_array($gjla17);
 echo "<tr>";
 echo "<td>";
 echo "17";
 echo "</td>";
 echo "<td>";
 echo $tmpil17["pertanyaan"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj17">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla18=mysql_query("select * from gejala where no=18",$conn);
 $tmpil18=mysql_fetch_array($gjla18);
 echo "<tr>";
 echo "<td>";
 echo "18";
 echo "</td>";
 echo "<td>";
 echo $tmpil18["pertanyaan"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj18">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla19=mysql_query("select * from gejala where no=19",$conn);
 $tmpil19=mysql_fetch_array($gjla19);
 echo "<tr>";
 echo "<td>";
 echo "19";
 echo "</td>";
 echo "<td>";
 echo $tmpil19["pertanyaan"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj19">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla20=mysql_query("select * from gejala where no=20",$conn);
 $tmpil20=mysql_fetch_array($gjla20);
 echo "<tr>";
 echo "<td>";
 echo "20";
 echo "</td>";
 echo "<td>";
 echo $tmpil20["pertanyaan"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj20">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla21=mysql_query("select * from gejala where no=21",$conn);
 $tmpil21=mysql_fetch_array($gjla21);
 echo "<tr>";
 echo "<td>";
 echo "21";
 echo "</td>";
 echo "<td>";
 echo $tmpil21["pertanyaan"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj21">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla22=mysql_query("select * from gejala where no=22",$conn);
 $tmpil22=mysql_fetch_array($gjla22);
 echo "<tr>";
 echo "<td>";
 echo "22";
 echo "</td>";
 echo "<td>";
 echo $tmpil22["pertanyaan"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj22">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla23=mysql_query("select * from gejala where no=23",$conn);
 $tmpil23=mysql_fetch_array($gjla23);
 echo "<tr>";
 echo "<td>";
 echo "23";
 echo "</td>";
 echo "<td>";
 echo $tmpil23["pertanyaan"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj23">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla24=mysql_query("select * from gejala where no=24",$conn);
 $tmpil24=mysql_fetch_array($gjla24);
 echo "<tr>";
 echo "<td>";
 echo "24";
 echo "</td>";
 echo "<td>";
 echo $tmpil24["pertanyaan"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj24">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla25=mysql_query("select * from gejala where no=25",$conn);
 $tmpil25=mysql_fetch_array($gjla25);
 echo "<tr>";
 echo "<td>";
 echo "25";
 echo "</td>";
 echo "<td>";
 echo $tmpil25["pertanyaan"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj25">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla26=mysql_query("select * from gejala where no=26",$conn);
 $tmpil26=mysql_fetch_array($gjla26);
 echo "<tr>";
 echo "<td>";
 echo "26";
 echo "</td>";
 echo "<td>";
 echo $tmpil26["pertanyaan"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj26">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla27=mysql_query("select * from gejala where no=27",$conn);
 $tmpil27=mysql_fetch_array($gjla27);
 echo "<tr>";
 echo "<td>";
 echo "27";
 echo "</td>";
 echo "<td>";
 echo $tmpil27["pertanyaan"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj27">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla28=mysql_query("select * from gejala where no=28",$conn);
 $tmpil28=mysql_fetch_array($gjla28);
 echo "<tr>";
 echo "<td>";
 echo "28";
 echo "</td>";
 echo "<td>";
 echo $tmpil28["pertanyaan"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj28">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla29=mysql_query("select * from gejala where no=29",$conn);
 $tmpil29=mysql_fetch_array($gjla29);
 echo "<tr>";
 echo "<td>";
 echo "29";
 echo "</td>";
 echo "<td>";
 echo $tmpil29["pertanyaan"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj29">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla30=mysql_query("select * from gejala where no=30",$conn);
 $tmpil30=mysql_fetch_array($gjla30);
 echo "<tr>";
 echo "<td>";
 echo "30";
 echo "</td>";
 echo "<td>";
 echo $tmpil30["pertanyaan"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj30">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla31=mysql_query("select * from gejala where no=31",$conn);
 $tmpil31=mysql_fetch_array($gjla31);
 echo "<tr>";
 echo "<td>";
 echo "31";
 echo "</td>";
 echo "<td>";
 echo $tmpil31["pertanyaan"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj31">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla32=mysql_query("select * from gejala where no=32",$conn);
 $tmpil32=mysql_fetch_array($gjla32);
 echo "<tr>";
 echo "<td>";
 echo "32";
 echo "</td>";
 echo "<td>";
 echo $tmpil32["pertanyaan"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj32">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla33=mysql_query("select * from gejala where no=33",$conn);
 $tmpil33=mysql_fetch_array($gjla33);
 echo "<tr>";
 echo "<td>";
 echo "33";
 echo "</td>";
 echo "<td>";
 echo $tmpil33["pertanyaan"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj33">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla34=mysql_query("select * from gejala where no=34",$conn);
 $tmpil34=mysql_fetch_array($gjla34);
 echo "<tr>";
 echo "<td>";
 echo "34";
 echo "</td>";
 echo "<td>";
 echo $tmpil34["pertanyaan"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj34">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla35=mysql_query("select * from gejala where no=35",$conn);
 $tmpil35=mysql_fetch_array($gjla35);
 echo "<tr>";
 echo "<td>";
 echo "35";
 echo "</td>";
 echo "<td>";
 echo $tmpil35["pertanyaan"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj35">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
<tr>
<td><input type="submit" value="Hitung" /></td>
</tr>
</form>
</table>
</body>
</html>