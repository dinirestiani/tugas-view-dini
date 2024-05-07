<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="welcome" method="get">
    <h1>Buat Account Baru</h1>
    <h3>Sign Up Form</h3>
    <br>
        <label for="firstname">First name:</label><br>
        <br>
        <input type="text" id="firstname" name="firstname"><br>
        <br>
        <label type="lastname">Last name :</label><br>
        <br>
        <input type="text" id="lastname" name="lastname">
    
    <br>
    <form>
        <p>Gender</p>
        <input type="radio" id="male" name="gender" value="Male">
        <label for="male">Male</label> <br>
        <input type="radio" id="female" name="gender" value="Female">
        <label for="female">Female</label>
    
    <br>
    <br>
    <label for="nationality">Nationality</label> 
    <br>
        <select id="nationality" name="nationality">
            <option value="indonesia">Indonesia</option>
            <option value="america">America</option>
            <option value="english">English</option>
        </select> 
    
    <br>

    <p>Language Spoke</p>
    <form>
        <input type="checkbox" id="language1" name="language" value="Indonesia">
        <label for="language"> Bahasa indonesia</label><br>
        <input type="checkbox" id="language2" name="language" value="English">
        <label for="language"> English</label><br>
        <input type="checkbox" id="language3" name="language" value="Other">
        <label for="language">Other</label> <br>
    

    <p>Bio</p>
    <textarea id="bio" name="messange" rows="10" cols="30">
 </textarea>
 <br>
 <input type="submit" value="sign up">

</form>
</body>
</html>