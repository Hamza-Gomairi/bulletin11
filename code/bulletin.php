<html>
<head>
  <style >
table , th , td {
border: 1px solid green;
width:100%;
}
</style >
</head>
<body>

<center><h1>ENSA TANGER</h1></center>
  <?php

  $TAS1 = 20;
  $TAS2 = 18;
  $MTAS = ($TAS1+$TAS2)/2;
  if($MTAS >= 16)
      $AppTas = "Tres bien";
  else if($MTAS >= 14)
      $AppTas = " bien";
      else if($MTAS >= 12)
          $AppTas = " Assez bien";
          else if($MTAS >= 10)
              $AppTas = " Passable";
              else
                  $AppTas = " Mediocre";


       $BAS1 = 16;
       $BAS2 = 9;
       $MBAS = ($BAS1+$BAS2)/2;
       if($MBAS >= 16)
           $AppBAS = "Tres bien";
       else if($MBAS >= 14)
           $AppBAS = " bien";
           else if($MBAS >= 12)
               $AppBAS = " Assez bien";
               else if($MBAS >= 10)
                   $AppBAS = " Passable";
                   else
                       $AppBAS = " Mediocre";




            $ELN1 = 6;
            $ELN2 = 11;
            $MELN = ($ELN1+$ELN2)/2;
            if($MELN >= 16)
                $AppELN = "Tres bien";
            else if($MELN >= 14)
                $AppELN = " bien";
                else if($MELN >= 12)
                    $AppELN = " Assez bien";
                    else if($MELN >= 10)
                        $AppELN = " Passable";
                        else
                            $AppELN = " Mediocre";




            $PW1 = 20;
            $PW2 = 19;
            $MPW = ($PW1+$PW2)/2;
            if($MPW >= 16)
                $AppPW = "Tres bien";
            else if($MPW >= 14)
                $AppPW = " bien";
                else if($MPW >= 12)
                    $AppPW = " Assez bien";
                    else if($MPW >= 10)
                        $AppPW = " Passable";
                        else
                            $AppPW = " Mediocre";




            $OP1 = 12;
            $OP2 = 11.5;
            $MOP = ($OP1+$OP2)/2;
            if($MOP >= 16)
                $AppOP = "Tres bien";
            else if($MOP >= 14)
                $AppOP = " bien";
                else if($MOP >= 12)
                    $AppOP = " Assez bien";
                    else if($MOP >= 10)
                        $AppOP = " Passable";
                        else
                            $AppOP = " Mediocre";



         $MG=($MOP+$MPW+$MELN+$MBAS+$MTAS)/5;
            if($MG <= 12)
                $AppMG = "AJ";
            else
                 $AppMG= "PASS";

?>
  <table   >
	<tr>
		<th>Module</th>
		<th>CC1</th>
		<th>CC2</th>
		<th>Moyenne</th>
		<th>Appréciations</th>
	</tr>
	<tr>
		<td>TRAITEMENT DU SIGNAL</td>
		<td><?php echo $TAS1; ?></td>
		<td><?php echo $TAS2; ?></td>
		<td><?php echo $MTAS; ?></td>
		<td><?php echo $AppTas; ?></td>
	</tr>
	<tr>
		<td>BASES DE DONNEES</td>
		<td><?php echo $BAS1; ?></td>
		<td><?php echo $BAS2; ?></td>
		<td><?php echo $MBAS; ?></td>
		<td><?php echo $AppBAS; ?></td>
	</tr>
  <tr>
		<td>ELECTRONIQUE NUMERIQUE</td>
		<td><?php echo $ELN1; ?></td>
		<td><?php echo $ELN2; ?></td>
		<td><?php echo $MELN; ?></td>
		<td><?php echo $AppELN; ?></td>
	</tr>
  <tr>
    <td>PROGRAMMATION WEB PHP MYSQL</td>
    <td><?php echo $PW1; ?></td>
    <td><?php echo $PW2; ?></td>
    <td><?php echo $MPW; ?></td>
    <td><?php echo $AppPW; ?></td>
  </tr>
  <tr>
    <td>OPTIMISATION</td>
    <td><?php echo $OP1; ?></td>
    <td><?php echo $OP2; ?></td>
    <td><?php echo $MOP; ?></td>
    <td><?php echo $AppOP; ?></td>
  </tr>
  <tr>
    <td>MOYENNE GENERALE</td>
    <td></td>
    <td><?php echo $MG; ?></td>
    <td></td>
    <td><?php echo $AppMG; ?></td>
  </tr>
</table>
</body>
