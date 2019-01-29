<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>PHP FORM</title>
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>

<body>
    <form action="formHandler.php" method="post">

        <h1>Sign Up</h1>

        <legend><span class="number">1</span>Your Gorilla info</legend>
        <label for="name">Gorilla FirstName:</label>
        <input type="text" id="name" name="user_firstname" autofocus>

        <label for="name">Gorilla LastName:</label>
        <input type="text" id="name" name="user_lastname">

        <label for="name">Gorilla Title:</label>
        <input type="text" id="name" name="user_title">

        <label for="mail">Gorilla Email:</label>
        <input type="email" id="mail" name="user_email">

        <label for="password">Gorilla Secret Text:</label>
        <input type="password" id="password" name="user_password">

        <label for="job">Gorilla Role</label>
        <select id="job" name="user_job">
            <optgroup label="Gorilla Roles">
                <option value="alpha">Alpha Gorilla</option>
                <option value="fighter">Fighter Gorilla</option>               
                <option value="banana">Banana Gorilla</option>
                <option value="slinger">Slinger Gorilla</option>
                <option value="funny">Funny Gorilla</option>
            </optgroup>       
        </select>

        <!-- <label>Interests</label>
        <input type="checkbox" id="development" value="bananas" name="user_interest"><label class="light" for="development">Banana's</label><br>
        <br> -->
        <!-- <input type="color" name="favcolor">
        <input type="date">
        <input type="number"> -->
        <br>
        <br>
        <button type="submit">Sign Up</button>

    </form>
</body>
</html>