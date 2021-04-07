<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users</title>

</head>


<body>
    
   <h2>User Register Page</h2>

   <form action="/register" method="post">
   
   {{csrf_field()}}
  
   <label for="">Name :</label>
   <input type="text" name="name">
   <br><br>

   <label for="">email :</label>
   <input type="email" name="email">
   <br><br>
   <label for="">password :</label>
   <input type="password" name="password">
   <br><br>
   
   <input type="submit" value="Register">
   
   </form>







</body>
</html>