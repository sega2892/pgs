<html>
<head>
    <title>Калькулятор</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
<form action="{{ route('calc') }}" method="post">
    @csrf
    <input type="number" name="v1">
    <select name="op">
        <option value="add">+</option>
        <option value="sub">-</option>
        <option value="mul">*</option>
    </select>
    <input type="number" name="v2">
    <button type="submit">calc</button>
</form>
</body>
</html>