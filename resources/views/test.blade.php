<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>


    <div class="container">
        <form action="/save_car" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Name:</label>
                <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
            </div>
              <div class="form-group">
                <label for="email">Type:</label>
                <input type="number" class="form-control" id="price" placeholder="Enter price" name="type">
            </div>
            <div class="form-group">
                <label for="email">Color:</label>
                <input type="color" class="form-control" id="color" placeholder="Enter color" name="color">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

   <table class="table table-stripped">
   <thead>
       <tr>
           <th>Id</th>
           <th>Name</th>
           <th>Year</th>
           <th>Color</th>
       </tr>
   </thead>
   <tbody>
   @foreach ($cars as $item)
   <tr>
       <td>{{ $item->id }}</td>
       <td>{{ $item->name }}</td>
       <td>{{ $item->year }}</td>
       <td>{{ $item->color }}</td>
       <td><a href="/delete_car/{{ $item->id }}" class="=btn btn-outline-danger">Delete</a> </td>
   </tr>
   @endforeach
   </tbody>

   </table>

</body>

</html>
