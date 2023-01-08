<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title></title>
</head>
<body>
    
    <div class="container">
        <h1 class="text-center">Update Data</h1>
        <form method="POST" action="/update/{{$posts->id}}">
            @csrf
            <div class="mb-3">
                <label><b>Post title:</b></label>
                <input type="text" name="title" class="form-control" value="{{$posts->post_title}}">
            </div>
            <div class="mb-3">
                <label><b>Post author:</b></label>
                <input type="text" name="author" class="form-control" value="{{$posts->post_author}}">
            </div>
            <input type="submit" name="update" value="Update" class="btn btn-primary">
        </form>
    </div>

</body>
</html>