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
<h1>Formulario</h1>
<form action="save.php" method="post" enctype="multipart/form-data">
    <label for="name">Name:</label>
    <p><input type="text" name="name" autofocus="autofocus" required></p>
    <label for="lastname"> Last Name:</label>
    <p><input type="text" name="lastname"></p>
    <label for="genre">Genre</label>
    <p>
        Woman: <input type="checkbox" value="Woman" name="woman" checked>
        Man: <input type="checkbox" value="Man" name="man">
    </p>
    <label for="date">Fecha</label>
    <input type="date" name="date"><br>
    <label for="email">Email</label>
    <input type="email" value="email" name="email"><br>
    <label for="file">File</label>
    <input type="file" value="file" name="file" multiple hidden><br>
    <label for="number">Select quantity</label>
    <input type="number" name="number">
    <p><label for="password">Password</label></p>
    <input type="password" name="password">
    <br>
    <label for="continent">Continent</label>
    <p>
        Asia: <input type="radio" value="Asia">
        Europe: <input type="radio" value="Europe">
        North America: <input type="radio" value="North America">
        South America: <input type="radio" value="South America">
    </p>
    <label for="description">Description</label>
    <p>
        <textarea name="description" id="" cols="30" rows="10"></textarea>
    </p>
    <label for="movies">Movies</label>
    <select name="movies" id="">
        <option value="Spiderman">Spiderman</option>
        <option value="Batman">Batman</option>
        <option value="Tiger">Tiger</option>
    </select>
    <p><input type="submit" value="Send"></p>
</form>
</body>
</html>