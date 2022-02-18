<html>
<head>



</head>

<body> 

<form action="/update" method="post">
    @csrf
    <input type="text" value={{$id}} name="id"><br>
    <input type="text" value={{$name}} name="name"><br>
    <input type="text" value={{$body}} name="body"><br>
    <input type="text" value={{$title}} name="title"><br>

    <button type="submit">Submit</button>


</form>




</body>
</html>
   


