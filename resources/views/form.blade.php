<!DOCTYPE html>
<html>
<head>
<title>Sign Up Sanbercode</title>
</head>
<body>
    <h1>Buat Account Baru!</h1><br>
    <h3>Sign Up Form</h3>
    <form method="post">
        <p>FirstName : </p>
            <input type="text" name="FirstName"/>
        <p>LastName : </p>
            <input type="text" name="LastName"/>
        <p>Gender : </p>
            <input type="radio" class="form-radio" name="rd" id="rd1"> <label for="rd1">Male</label>
            <br>
            <input type="radio" class="form-radio" name="rd" id="rd2"> <label for="rd2">Female</label>
            <br>
            <input type="radio" class="form-radio" name="rd" id="rd3"> <label for="rd3">Other</label>
        <p>Nationality : </p>
            <select name='Negara'>
                <option value='Indonesia'>Indonesia</option>
                <option value='Singapura'>Singapura</option>
                <option value='Malaysia'>Malaysia</option>
                <option value='China'>China</option>
                <option value='Amerika'>Amerika</option>
            </select>
        <p>Language Spoke : </p>
            <input type="checkbox" id="bahasa1" name="bahasa1">
            <label for="bahasa1">Bahasa Indonesia</label><br>
            <input type="checkbox" id="bahasa2" name="bahasa2">
            <label for="bahasa2">English</label><br>
            <input type="checkbox" id="bahasa3" name="bahasa3">
            <label for="bahasa3">Other</label><br>
        <p>Bio : </p>
            <textarea cols="30" rows="10"> </textarea><br>
        <a href="{{url('/welcome')}}"><button type="submit"> Sign Up</button></a>
    </form>
    

</body>
</html>