<!DOCTYPE html>
<html>
<head>
<title>Satisfaction assessment form Thai student in Indonesia</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
  <tr>
    <td>Name Nimuhammadfais Wan</td>
    <td>Nim 1906018437</td>
  </tr>

</body>
</html>

<script language="JavaScript">
	function fncSubmit()
	{
		
		if(document.frmMain.rdo_gender_0.checked == false && document.frmMain.rdo_gender_1.checked == false)
	{
		alert('Please specify gender');
		return false;
	}	
	
	if(document.frmMain.rdo_age_0.checked == false && document.frmMain.rdo_age_1.checked == false && document.frmMain.rdo_age_2.checked == false && document.frmMain.rdo_age_3.checked == false && document.frmMain.rdo_age_4.checked == false && document.frmMain.rdo_age_5.checked == false)
	{
		alert('Please specify age');
		return false;
	}
	
		if(document.frmMain.rdo_education_0.checked == false && document.frmMain.rdo_education_1.checked == false && document.frmMain.rdo_education_2.checked == false && document.frmMain.rdo_education_3.checked == false )
	{
		alert('Please specify the highest education level');
		return false;
	}

	if(document.frmMain.rdo_state_0.checked == false && document.frmMain.rdo_state_1.checked == false && document.frmMain.rdo_state_2.checked == false && document.frmMain.rdo_state_3.checked == false && document.frmMain.rdo_state_4.checked == false && document.frmMain.rdo_state_5.checked == false && document.frmMain.rdo_state_6.checked == false)
	{
		alert('Faculty');
		return false;
	}
		
		var Rows = document.frmMain.hdnRows.value;
		for(x=1;x<=Rows;x++)
		{
			var op1 = document.getElementById("radionNo"+x+"_1");
			var op2 = document.getElementById("radionNo"+x+"_2");
			var op3 = document.getElementById("radionNo"+x+"_3");
			var op4 = document.getElementById("radionNo"+x+"_4");
			var op5 = document.getElementById("radionNo"+x+"_5");
			if(op1.checked == false && op2.checked == false && op3.checked == false  && op4.checked == false  && op5.checked == false)
			{
				alert('Please select Answer No ' + x);
				return false;
			}
		}

	}
</script>

<form name="frmMain" method="post" action="save.php" OnSubmit="return fncSubmit();">
<table width="950" border="0" align="center" cellpadding="2" cellspacing="2">
  <tr>
    <td colspan="8" align="center">Satisfaction assessment form Thai student in Indonesia</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="7">&nbsp;</td>
  </tr>
  <tr bgcolor="#CCCCCC">
    <td>&nbsp;</td>
    <td colspan="7">Episode 1 Basic information</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="157">gender</td>
    <td width="387">
      <label>
        <input type="radio" name="rdo_gender" value="male" id="rdo_gender_0" />
        male</label>
      <label>
        <input type="radio" name="rdo_gender" value="woman" id="rdo_gender_1" />
        woman</label>
    </td>
    <td width="68">&nbsp;</td>
    <td width="60">&nbsp;</td>
    <td width="69">&nbsp;</td>
    <td width="65">&nbsp;</td>
    <td width="78">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>age</td>
    <td>
      <label>
        <input type="radio" name="rdo_age" value="age Under 20 years" id="rdo_age_0" />
        age Under 20 years</label>
      <br />
      <label>
        <input type="radio" name="rdo_age" value="agebetween 21 - 30 years" id="rdo_age_1" />
        agebetween 21 - 30 years</label>
      <br />
      <label>
        <input type="radio" name="rdo_age" value="agebetween 31 - 40 years" id="rdo_age_2" />
        agebetween 31 - 40 years</label>
      <br />
      <label>
        <input type="radio" name="rdo_age" value="agebetween 41 - 50 years" id="rdo_age_3" />
        agebetween 41 - 50 years</label>
      <br />
      <label>
        <input type="radio" name="rdo_age" value="agebetween 51 - 59 years" id="rdo_age_4" />
        agebetween 51 - 59 years</label>
       <br />
        <label>
        <input type="radio" name="rdo_age" value="age Under 60 years" id="rdo_age_5" />
        age Under 60 years</label>
       
    </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>highest education level</td>
    <td>
      <label>
        <input type="radio" name="rdo_education" value="primary education" id="rdo_education_0">
        primary education</label>
      <br>
      <label>
        <input type="radio" name="rdo_education" value="Junior high school/At the end/Equivalent to" id="rdo_education_1">
        Junior high school/At the end/Equivalent to</label>
      <br>
      <label>
        <input type="radio" name="rdo_education" value="Bachelor degree" id="rdo_education_2">
        Bachelor degree</label>
      <br>
      <label>
        <input type="radio" name="rdo_education" value="Postgraduate" id="rdo_education_3">
        Postgraduate</label>
      <br>
    </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Faculty</td>
    <td>
      <label>
        <input type="radio" name="rdo_state" value="Faculty of Medicine" id="rdo_state_0" />
        Faculty of Medicine</label>
      <br />
      <label>
        <input type="radio" name="rdo_state" value="Faculty of Nursing " id="rdo_state_1" />
        Faculty of Nursing </label>
      <br />
      <label>
        <input type="radio" name="rdo_state" value="Faculty of Science" id="rdo_state_2" />
        Faculty of Science</label>
      <br />
      <label>
        <input type="radio" name="rdo_state" value="Faculty of Economics" id="rdo_state_3" />
        Faculty of Economics</label>
      <br />
      <label>
        <input type="radio" name="rdo_state" value="Faculty of Architecture" id="rdo_state_4" />
        Faculty of Architecture</label>
      <br />
      <label>
        <input type="radio" name="rdo_state" value="Faculty of Liberal Arts" id="rdo_state_5" />
        Faculty of Liberal Arts</label>
      <br />
      <label>
        <input type="radio" name="rdo_state" value="Other" id="rdo_state_6" />
        Other</label>
      </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="7">&nbsp;</td>
  </tr>
  <tr bgcolor="#CCCCCC">
    <td width="16">&nbsp;</td>
    <td colspan="7">Episode 2 <strong>Satisfaction assessment form</strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>list</td>
    <td align="center">The most</td>
    <td align="center">much</td>
    <td align="center">moderate</td>
    <td align="center">little</td>
    <td align="center">Least</td>
  </tr>
</table>
  <table width="950" border="0" align="center">
  <?
include ('config.php');
$strSQL = "select * from tb_question ";
mysql_query("SET NAMES UTF8");
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
$Num_Rows = mysql_num_rows($objQuery);
$i=1;
while($result2 = mysql_fetch_array($objQuery))
{
$id_chk = $result2['id_question']; 
$name = $result2['question']; 
?>

    <tr>
      <td width="574"><?=$name?> </td>
      <td width="70" align="center"><input name="radionNo<?=$i;?>" id="radionNo<?=$i;?>_1" type="radio" value="5"></td>
      <td width="63" align="center"><input name="radionNo<?=$i;?>" id="radionNo<?=$i;?>_2" type="radio" value="4"></td>
      <td width="71" align="center"><input name="radionNo<?=$i;?>" id="radionNo<?=$i;?>_3" type="radio" value="3"></td>
      <td width="65" align="center"><input name="radionNo<?=$i;?>" id="radionNo<?=$i;?>_4" type="radio" value="2"></td>
      <td width="81" align="center"><input name="radionNo<?=$i;?>" id="radionNo<?=$i;?>_5" type="radio" value="1"></td>
    </tr>
<?  
	$i++;
	}
    
 ?>
  </table>
  <input type="hidden" name="hdnRows" value="<?=$i-1;?>">
<center><br/><input type="submit" name="Submit" value="Answer the questionnaire"></center>  

</form>
</body>
</html>