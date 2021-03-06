<!DOCTYPE html>
<html>
<head>
	<title>Page title</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<style type="text/css">
	body{
		margin: 0px;
	}
	@media (min-width: 900px) {
	#header {
		padding: 0px;
		height: 55px;
		background: #9e0000;
		border-bottom: 1px solid #6b0000;
	}
	#navigation ul{
		font-size: 0px;
		border: 0px solid;
		padding: 0px;
		color: #fff;
		list-style: none;
		width: 100%;
		background: #840000;
	}
	#navigation > ul > li{
		margin-left: 10px;
		display: inline-block;
		width: calc(16.66% - 10px);
		border: 0px transparent;
		padding: 0px;
		color: #fff;
		list-style: none;
		vertical-align: center;
		text-align: left;
		height: 50px;
		line-height: 1em;
		font-weight: normal;
		
		
	}

	#navigation > ul > li > a {
	font-family:  "Helvetica Neue", Helvetica, Arial, sans-serif;
	font-size: 16px;
	text-decoration: none;
	line-height: 16px;
	padding: 6px;
	color: #fff;
	padding-top: 10px;
	display: block;
	background-repeat: no-repeat;
	border-bottom-width: 2px;
		border-bottom-style: solid;
		border-bottom-color: rgb(0,200,0);
	}
}
@media (max-width: 900px) {


#header {
		padding: 0px;
		height: 55px;
		background: #9e0000;
		border-bottom: 1px solid #6b0000;
	}
	#navigation ul{
		font-size: 0px;
		border: 0px solid;
		padding: 0px;
		color: #fff;
		list-style: none;
		width: 100%;
		background: #840000;
	}
	#navigation > ul > li{
		margin-left: 10px;
		display: block;
		width: calc(16.66% - 10px);
		border: 0px transparent;
		padding: 0px;
		color: #fff;
		list-style: none;
		vertical-align: center;
		text-align: left;
		height: 50px;
		line-height: 1em;
		font-weight: normal;
		
		
	}

	#navigation > ul > li > a {
	font-family:  Helvetica, Arial, sans-serif;
	font-size: 16px;
	text-decoration: none;
	line-height: 16px;
	padding: 6px;
	color: #fff;
	padding-top: 10px;
	display: block;
	background-repeat: no-repeat;
	border-bottom-width: 2px;
		border-bottom-style: solid;
		border-bottom-color: #6b0000;
	}





}
	</style>
</head>
<body>

<div id="page">
	<div id="header"></div>
	<div id="content"></div>
	<div id="navigation">
		<ul>
			<li><a href="#">Software license summary</a></li>
			<li><a href="#">Choosing an Editor</a></li>
			<li><a href="#">Setting up the environment</a></li>
			<li><a href="#">Before you start coding</a></li>
			<li><a href="#">Set up playground</a></li>
			<li><a href="#">Dictionary</a></li>
		</ul>
		
	</div>
	<div id="footer"></div>
</div>
</body>
</html>
