<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Voters </title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <div class="Register"><h1> Register</h1></div>
    
    <form action='connect.php' method='Post'> 
        <div>
            <br></br><label for="First Name">First Name  </label>
            <input type="text" name="sname" id="FirstName" placeholder="Enter your First Name" required><br></br>
        <div>
         <div>
            <label for="Last Name">Last Name  </label>
            <input type="text" name="sname" id="LastName" placeholder="Enter your Last Name" required><br></br>
        <div>
        <div>
            <label for="Voters ID">Voters ID</label>
            <input type="text" name="sname" id="VotersID" placeholder="Enter your Voters ID" required><br></br>
        <div>
        
        <div>
            <label for="password">Password</label>
            <input type="Password" name="sname" id="Password" placeholder="Enter your Password" required><br></br>
        <div>
        <div class="Gender"><h3>Gender</h3></div> 
        <div>
            <label for="Male">Male</label>
            <input type="radio" name="gender" id="male"value="m" >
        <div>
        <div>
            <label for="Female">Female</label>  
             <input type="radio" name="gender" id="Female" value="f">
         <div>
         <div>
            <label for="Other">Other</label>  
             <input type="radio" name="gender" id="Other"value="o" >
         <div>
         <div>
             <br></br> <label for="Location">Location</label>
             <select name="Gender" id="Gender">
             <option value="Nakuru">Nakuru</option>
             <option value="Kitale">Kitale</option>
            </select>
         </div>
            <label></label><br></br>
            <input type="submit" name="submit">
    </form>
</body>
</html>