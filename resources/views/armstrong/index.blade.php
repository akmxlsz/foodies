<!DOCTYPE html>
<html>
<head>
    <title>Armstrong Number Checker</title>
</head>
<body>
    <h2>Armstrong Number Checker</h2>
    <form action="/armstrong" method="post">
        @csrf
        <input type="text" name="number" placeholder="Enter a number">
        <button type="submit">Check</button>
    </form>
</body>
</html>
