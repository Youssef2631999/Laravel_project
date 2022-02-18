<html>
<head>



</head>

<body> 
<a href="/create">Add New Post</a>       
<table border=2>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>body</th>
        <th>title</th>

    </tr>
@foreach ($posts as $post)
    <tr>
          <td> {{ $post['id'] }}</td>
          <td> {{ $post['name'] }}</td>
          <td> {{ $post['body'] }}</td>
          <td> {{ $post['title'] }}</td>
          <td><a href="/show/{{ $post['id'] }}">Show</a></td>
          <td><a href="/edit/{{ $post['id'] }}">Edit</a></td>
          <td><a href="/delete/{{ $post['id'] }}">Delete</a></td>






    </tr>
  

@endforeach    
   
</table>
</body>
</html>