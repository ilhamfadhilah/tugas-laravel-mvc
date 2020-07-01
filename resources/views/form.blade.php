<!DOCTYPE html>
<html>
<head>
<title>Fromulir Pendaftaran</title>
</head>
<body>

<h1>Buatlah Account Baru</h1>
<h3>Sign Up Form</h3>
<form action="{{action('AuthController@welcome')}}" method = "Post">
    @csrf
    <label for="fname">First name:</label><br><br>
    <input type="text" id="fname" name="fname"><br><br>
    <label for="lname">Last name:</label><br><br>
    <input type="text" id="lname" name="lname"><br><br>
    <p>Gender:</p>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label><br>
    <input type="radio" id="other" name="gender" value="other">
    <label for="other">Other</label><br><br>
    <label for="nationlaity">Nationlaity:</label><br><br>
    <select id="nationlaity" name="nationlaity">
      <option value="indonesian">Indonesian</option>
      <option value="singaporean">Singaporean</option>
      <option value="malaysian">Malaysian</option>
      <option value="australian">Australian</option>
    </select><br>
    <p>Language Spoken:</p>
    <input type="checkbox" id="bhsindo" name="bhsindo" value="bhsindo">
    <label for="bhsindo"> Bahasa Indonesia</label><br>
    <input type="checkbox" id="eng" name="eng" value="eng">
    <label for="eng"> English</label><br>
    <input type="checkbox" id="lainya" name="lainya" value="lainya">
    <label for="lainya"> Other</label><br>
    <p>Bio:</p>
    <textarea name="message" rows="10" cols="30"></textarea>
    <br><br>
    <input type="submit" value="Sign Up">
  </form> 



</body>
</html>