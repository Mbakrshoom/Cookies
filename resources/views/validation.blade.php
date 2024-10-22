<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card">
              <div class="card-header">
              <div class="card-body">
                  <form action="{{route('store.validation')}}" method="POST">
                      @csrf
                  
                          <div class="mb-3">
                              <label for="formGroupExampleInput" class="form-label">name</label>
                              <input type="text"name="name" class="form-control" value="{{old('name')}}" id="formGroupExampleInput" placeholder="Enter name">
                              @error('name')
                              <span class="text-danger">{{$message}}</span>
                                  
                              @enderror
                          </div>
                          <div class="mb-3">
                              <label for="formGroupExampleInput2" class="form-label">email</label>
                              <input type="text" name="email" class="form-control" value="{{old('email')}}" id="formGroupExampleInput2" placeholder="Enter email">
                              @error('email')
                              <span class="text-danger">{{$message}}</span>
                                  
                              @enderror
                          </div>
                          <div class="mb-3">
                              <label for="formGroupExampleInput2" class="form-label">password</label>
                              <input type="password" name="password" class="form-control" value="{{old('password')}}" id="password" placeholder="Enter password">
                              @error('password')
                              <span class="text-danger">{{$message}}</span>
                                  
                              @enderror
                          </div>
                          <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">confirm_password</label>
                            <input type="password" name="password_confirmation" class="form-control" value="{{old('password_confirmation')}}" id="formGroupExampleInput2" placeholder="Enter confirm_password">
                            @error('password_confirmation')
                            <span class="text-danger">{{$message}}</span>
                                
                            @enderror
                        </div>
                          <button type="submit" class="btn btn-primary">Save</button>
                  </form>
          
              </div>
         
          </div>
       </div>
      </div>
</body>
</html>