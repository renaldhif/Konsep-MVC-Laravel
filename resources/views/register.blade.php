<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Account Baru</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="{{ url('welcome') }}" method="post">
        @csrf
        <!-- User's name -->
        <label for="firstname">First name:</label><br>
        <input type="text" name="firstname" id="firstName"><br>
        <br>
        <label for="lastname">Last name:</label><br>
        <input type="text" name="lastname" id="lastName"><br>
        <br>
        <!-- User's gender -->
        <label for="gender">Gender: </label><br>
        <input type="radio" name="gender" id="male" value="male">
        <label for="male">Male</label><br>
        <input type="radio" name="gender" id="female" value="female">
        <label for="female">female</label><br>
        <input type="radio" name="gender" id="other" value="other">
        <label for="other">other</label><br>
        <br>
        <!-- User's nationality -->
        <label for="nationality">Nationality: </label><br>
        <br>
        <select name="Nationality" id="nationality">
            <option value="indonesia">Indonesia</option>
            <option value="malaysia">Malaysia</option>
            <option value="singapore">Singapore</option>
            <option value="philipine">Philipine</option>
        </select>
        <br>
        <br>
        <!-- User's language -->
        <label for="language">Language spoken:</label><br>
        <input type="checkbox" name="language" id="languageID" value="Indonesia">
        <label for="male">Bahasa Indonesia</label><br>
        <input type="checkbox" name="language" id="languageEN" value="English">
        <label for="male">English</label><br>
        <input type="checkbox" name="language" id="languageOther" value="Other">
        <label for="male">Other</label><br>
        <br>
        <!-- User's bio-->
        <label for="bio">Bio:</label><br>
        <textarea name="bio" id="textAreaBio" cols="30" rows="10"></textarea><br>

        <button type="submit" value="submit">Sign Up</button>
    </form>
</body>
</html>