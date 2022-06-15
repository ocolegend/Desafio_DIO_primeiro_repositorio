<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Primeiro site PHP com um plus</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script>
     $(function() {
		 $("#accordion").accordion();
	 });
	 </script>
  <style type="text/css">
        .linha{
			font-weight: bold;
			color: red;
			padding-left: 10px;
			line-height: 50px;
		}
	</style>
</head>

<body>

<div>
<h1>Coisas sobre vinicius</h1>

  <div id="accordion">
  <h3>Formação </h3>
	<div>
	 <p>
	 Sou técnico em artes visuais, mas estou ingressando na área de tecnologia
	 e sempre tentando aprender mais coisas novas.
	 </p>
	 </div>
	 <h3>Sobre Mim </h3>
	 <div>
	 <p>
	 tenho varios gostos, como:
	 <ul>
	 </p>
	 <li>gosto muito de arte,</li>
	 <li>me exercitar</li>
	 <li>estar com os amigos</li>
	 <li>trabalhar muito pra conseguir minhas coisinhas</li>
	 </ul>
	 </div>
</div>
	
</body>

</html>

	