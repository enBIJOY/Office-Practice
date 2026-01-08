<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
    <body>
        <div class="container">
        <form action="{{ route('crud.create') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label class="mt-2">Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="name">
              @error('name') <span class="text-danger">{{$message}}</span> @enderror
            </div>
            <div class="form-group">
              <label class="mt-2">Country <span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="Country">
              @error('Country') <span class="text-danger">{{$message}}</span> @enderror
            </div>
            <div class="form-group">
              <label class="mt-2">Email <span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="email">
              @error('email') <span class="text-danger">{{$message}}</span> @enderror
            </div>
            <div class="form-group">
              <label class="mt-2">Phone <span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="phone">
              @error('phone') <span class="text-danger">{{$message}}</span> @enderror
            </div>
            <div class="form-group">
              <label class="mt-2">description <span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="description">
              @error('description') <span class="text-danger">{{$message}}</span> @enderror
            </div>
            <div class="form-group">
              <label class="mt-2">sub_description <span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="sub_description">
              @error('sub_description') <span class="text-danger">{{$message}}</span> @enderror
            </div>
            <label class="mt-2">image</label>
            <input type="file" class="form-control" name="image">
            <button class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>