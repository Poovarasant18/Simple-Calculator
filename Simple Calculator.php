<?php
?>
<html>
<head>
	<script>
				function dis(val)
		{
			document.getElementById("result").value+=val
		}
function solve()
		{
			let x = document.getElementById("result").value
			let y = eval(x)
			document.getElementById("result").value = y
		}
		function clr()
		{
			document.getElementById("result").value = ""
		}
	</script>
	<style>
	.box{
		background-color: ;
		border: gray 10px;
		border-radius: 10px 10px;
		width:500;
		height: 650;
	}
		.title{
			margin: center;
		margin-bottom: 10px;
		text-align:center;
		width: 400px;
		color: orange;
		font-size: 50px;
		border: solid gray px;
		}
		input[type="button"]
		{
		background-color:gray;
		color: #fff;
		border: solid gray ;
		font-size: 70px;
		border-radius: 0px 0px;
		width:100;
		height: 100;
		}
		input[type="text"]
		{
		background-color:white;
		border: gray;
		width:312;
		height: 100;
		font-size: 50px;
		cursor: auto;
		border-radius: 0px
		}
	</style>
</head>
<body bgcolor="lightblue"><center><div class="box">
	<div class = title >Simple Calculator</div>
	<table border="10px">
		<tr>
			<td colspan="3"><input type="text" id="result"/></td>
			<td><input type="button" value="c" onclick="clr()"/> </td>
		</tr>
		<tr>
				<td><input type="button" value="1" onclick="dis('1')"/> </td>
			<td><input type="button" value="2" onclick="dis('2')"/> </td>
			<td><input type="button" value="3" onclick="dis('3')"/> </td>
			<td><input type="button" value="/" onclick="dis('/')"/> </td>
		</tr>
		<tr>
			<td><input type="button" value="4" onclick="dis('4')"/> </td>
			<td><input type="button" value="5" onclick="dis('5')"/> </td>
			<td><input type="button" value="6" onclick="dis('6')"/> </td>
			<td><input type="button" value="-" onclick="dis('-')"/> </td>
		</tr>
		<tr>
			<td><input type="button" value="7" onclick="dis('7')"/> </td>
			<td><input type="button" value="8" onclick="dis('8')"/> </td>
			<td><input type="button" value="9" onclick="dis('9')"/> </td>
			<td><input type="button" value="+" onclick="dis('+')"/> </td>
		</tr>
		<tr>
			<td><input type="button" value="." onclick="dis('.')"/> </td>
			<td><input type="button" value="0" onclick="dis('0')"/> </td>
			<td><input type="button" value="=" onclick="solve()"/> </td>
			<td><input type="button" value="*" onclick="dis('*')"/> </td>
		</tr>
	</table></div></center>
</body>
</html>
