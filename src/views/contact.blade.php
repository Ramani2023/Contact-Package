<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body>
    <h1>Contact</h1>



<form action="{{route('contact')}}" method="post">
    
    <input type='text' name='name' placeholder="Your name Please"><br><br>
    <input type='email' name='email' placeholder="Your valid email"><br><br>
    <textarea name='message' cols='40' rows='20' placeholder="your qouery"></textarea><br><br>
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

    <button type='submit' value='Submit'>Submit</button>


</form>

















</body>
</html>