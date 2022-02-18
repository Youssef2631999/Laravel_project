<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body> 
<a href="/posts/create">Add New Post</a>       
<table class="table">
    <tr>
        <th>id</th>
        <th>Title</th>
        <th>Dedcription</th>
        <th>Created At</th>

    </tr>
@foreach ($posts as $post)
    <tr>
          <td> {{ $post['id'] }}</td>
          <td> {{ $post['title'] }}</td>
          <td> {{ $post['description'] }}</td>
          <td> {{ $post['created_at'] }}</td>
          <td><a href="/posts/{{ $post['id'] }}">Show</a></td>
          <td><a href="/posts/{{ $post['id'] }}/edit">Edit</a></td>
          <td>
              <form action="/posts/{{ $post['id'] }}" method="post">
                  @csrf
                  @method('DELETE')
                    <input type="submit" name="delete" value="Delete">
              </form>
            
    </tr>
  

@endforeach    
   
</table>
</body>
</html>