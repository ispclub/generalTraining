<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CTF training</title>
<style>
	* {
		font-family: sans-serif;
	}
	.title, .math-slide, .number-answer, .question, .submit, .result-check {
		text-align: center;
		margin-bottom: 20px;
	}
	.math-slide {
		display: inline-block;
  		width: 100%;
	}
	#submit {
		font-size:17px;
	}
	#answer {
		width: 400px;
	}
</style>
</head>
<body>
	<div class="title">
		<h1>Tính nhẩm phép toán sau:</h1>
	</div>
	<div class="question">
		<h3> </h3>
	</div>
	<div class="math-slide">
		<input id="answer" type="range" min="0" max="999999"  step="1">
	</div>
	<div class="number-answer">
		<span>?</span>
	</div>
	<div class="submit">
		<button id="submit">Kiểm tra</button>
	</div>
	<div class="result-check">
		<span></span>
	</div>
</body>
<script src="./main.js"></script>
</html>