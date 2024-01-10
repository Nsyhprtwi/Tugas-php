<!DOCTYPE html>
<html>
    <head>
        <title> formulir</title>
    </head>
    <body>
        <h1> Buat Account Baru </h1>
        <h2> Sign Up Form </h2>
       <form method="post" action="welcome.php">
        <label for="firstname"> first name :</label><br>
        <input type="text" name="firstname"><br>
        <label for="lastname"> Last name :</label><br>
        <input type="text" name="lastname"><br>
        <p>Gender</p>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">male </label><br>
            <input type="radio" id="Female" name="gender" value="Female">
            <label for="Female">Female</label><br>
        <label for="nationality">kewarganegaraan</label>
        <select name="nationality" id="Nationality">
            <option value="Indonesia">Indonesia</option>
            <option value="Amerika">Amerika</option>
            <option value="Inggris">Inggris</option>
        </select>
        <p>Bahasa yang dikuasai</p>
            <input type="checkbox" id="Bahasa Indonesia" name="bahasa[]" value="Bahasa Indonesia">
            <label for="Bahasa Indonesia">Bahasa Indonesia</label><br>
            <input type="checkbox" id="English" name="bahasa[]" value="English">
            <label for="English">English</label><br> 
            <input type="checkbox" id="Other" name="bahasa[]" value="Other">
            <label for="Other">Other</label><br>
        <P> Bio </P>
         
        <textarea rows="10" cols="40" placeholder "Bio" name="bio" =" Tulis Bio anda di sini..."></textarea>
        <button type="submit" name="submit">Sign up</button>
        
    </form>
    </body>
</html>