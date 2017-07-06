<head>
<link rel='stylesheet' type='text/css' href='css/regado.css'>

</head>

<body>
<table class='title'>
<tr>
<td>Motorkerékpár regisztrációs adó</td>
</tr>
</table>

<form name='calculator' method='post' class='calc-form'>

<table id='motor'>

<tr>
<td colspan='2' class='text'>Az első forgalomba helyezés dátuma: </td>
<tr>

<tr>
<td>Év: 
<select name='m_year' class='date'>
	###year-m-options###
</select>
</td>

<td>Hónap:
<select name='m_month' class='date'>
	###month-m-options###
</select>
</td>
</tr>

<tr id='error'>
<td colspan='2'>###error###</td>
</tr>

<tr class='text'>
<td colspan='2' class='padding-top'>Hengerűrtartalom </td>
</tr>
<tr>
<td colspan='2'>
<select name='barrel_m' class='barrel_m'>
	###barrel-m-options###
</select>
</td>
</tr>
</table>

<table class='submit'>
<input type='hidden' value='submitted' name='submitted'>
<tr>
<td><input type='submit' id='submit' value='Számol' class='form-submit'></td>
</tr>
</table>

</form>

<table id='sum' class='###sum-visibility###'>	
<tr>
<td class='month'>###month-message###</td>
</tr>

<tr>
<td>###sum-message###</td>
</tr>
</table>

<table class='zero'>
<tr>
<td></td>
</tr>
</table>

</body>
