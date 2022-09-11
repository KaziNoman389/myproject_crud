<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee - Home Page</title>

  <!-- CSS links -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'> 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">                 
  <link rel="stylesheet" href="style.css">

</head>
<body>
  <div class="container-fluid"> 
    <h1 class="text-center">Employee Imformation</h1>
    <hr>

    <div class="container-fluid mt-5">
      <div class="row">
        
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <form method="POST" action="">
                @csrf
                <div class="mb-2">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-2">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" name="email" >
                </div>
                <div class="mb-2">
                  <label for="phone" class="form-label">Phone</label>
                  <input type="text" class="form-control" id="phone" name="phone">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>

        <div class="col-sm-9">
          <div class="table-responsive">
            <table id="table_id" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th scope="col">Serial No.</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone Number</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($employees as $emp)
                <tr>
                  <td>{{ $emp->id }}</td>
                  <td>{{ $emp->name }}</td>
                  <td>{{ $emp->email }}</td>
                  <td>{{ $emp->phone }}</td>
                  <td>
                    <a href="{{ url('/edit', $emp->id) }}" class="btn btn-info btn-sm">Edit</a>
                    <a href="{{ url('/edit', $emp->id) }}" class="btn btn-danger btn-sm">Delete</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- scripts links -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>