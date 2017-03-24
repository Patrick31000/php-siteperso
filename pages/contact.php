
<!DOCTYPE html>
<html>
<head>
<title><?php echo $pageTitle; ?></title>
<link rel="stylesheet" href="./style.css">
</head>
<body>  
    <div class="contact"> 
  <form  action="/?save" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="submit">
    <div class="name">
    Your name:<br>
    <input class="name" name="name" type="text" value="" size="30"/><br>
    </div>
    <div class="mail">
    Your email:<br>
    <input class = "mail" name="email" type="text" value="" size="30"/><br>
    </div>
    <div class="message">
    Your message:<br>
    <textarea class="message" name="message" rows="7" cols="30"></textarea><br>
    </div>
    <input class="bouton" type="submit" value="Send email"/>
    </form>
    </div>
</body>
<link rel="stylesheet" href="./app.js">

</html>