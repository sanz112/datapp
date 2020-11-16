<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="testn.php" method="post">
    <select name="sim">
    <option value="-1">select one</option>
    <option value="1">mtn</option>
    <option value="2">airtel</option>
    <option value="3">glo</option>
    </select>
    <!-- <input type="number" name="sim" placeholder="sim"/> -->
    <input type="text" name="server" value="SWMTNNKKR" placeholder="server"/>
    <input type="number" name="ref" placeholder="reference"/>
    <input type="text" name="numb" placeholder="number" value="*5"/>
    <input type="text" name="numbnew" placeholder="number" value="56#"/>
    <textarea name="msg" placeholder="message"></textarea>
    <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>