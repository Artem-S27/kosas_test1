<html>
<head>
  <title>Тестовое задание №2</title>
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <h1>Тестовое задание №2</h1>
    <h2>Описание задания</h2>
    <p>Создайте форму-калькулятор c операциями: сложение, вычитание, умножение, деление.</p>
    <p>Выбор операций реализовать с помощью тега select.</p>
    <h2>Форма калькулятора</h2>
    <div class="input-block">
        <p>Первое число:</p>
        <input class="result" type="number" id="first_number">
    </div>
    <div class="input-block">
        <p>Второе число:</p> 
        <input class="result" type="number" id="second_number">
    </div>
    Выберите операцию: 
    <select id="operation">
        <option value="addition">+</option>
        <option value="subtraction">-</option>
        <option value="multiplication">x</option>
        <option value="division">/</option>
    </select>
    <button id="calc">Посчитать</button>
<hr>
<div class="result-title">
<p>Результат:</p>
<div class="result" id="result"></div>
</div>
<script src="main.js"></script>
</body>
</html>