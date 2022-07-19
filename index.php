<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="add.php" method="Post">
    <h1>registracijos forma</h1>
    <input type="text" name="name" placeholder="vardas" id="name" class="form-control"><br>
    <input type="text" name="surname"id="name" placeholder="pavarde" class="form-control"><br>
    <input type="email" name="email" id="email" placeholder="el.pastas" class="form-control"><br>
    <input type="phone" name="phone"id="phone" placeholder="tel.numeris" class="form-control"><br>
    <input type="integer" name="age" id="age" placeholder="irasykite amziu" class="form-control"><br>
    <select class="form-select" name="gender" aria-label>
        <option selected>pasirinkite Lyti</option>
        <option id="male">vyras</option>
        <option id="femail">moteris</option>
    </select><br>
    <select class="form-select" name="activity" aria-label="sąskaitos tipas"><br>
        <option selected>pasirinkit bureli</option>
        <option id="sport">sportas</option>
        <option id="modeling">modeliavimas</option>
        <option id="programavimas">modeliavimas</option>
    </select><br>
    <button type="submit" name="sendTask" class="btn btn-success">nusiusti</button>

</form>>
</body>
</html>