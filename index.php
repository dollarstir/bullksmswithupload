

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Bulk SMS</title>
</head>
<body>

<div class="cont">  

<form action="process.php" method="post" enctype="multipart/form-data">


<input type="text" id="" class="ipt" placeholder="Sender name (max 11 characters)" name="sender">
<!-- <input type="text" id="" class="ipt" placeholder="Sender name (max 11 characters)">
<input type="text" id="" class="ipt"> -->
<textarea id="" cols="30" rows="10"  class="txt" placeholder=" type Message" name="message"></textarea>

<textarea  id="" cols="30" rows="10"  class="txt" placeholder="enter contacts (s) if more than one separate them with comma's" name="numbers"></textarea>

<input type="file" name="tt" id="" class="ipt1">

    <input type="submit" value="Send" class="btnsend" name="bts">
</form>



</div>
    
</body>
</html>