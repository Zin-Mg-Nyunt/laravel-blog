<x-layout>
    <div class="container">
      <div class="row">
        <div class="col-5 mx-auto my-5">
          <h3 class="text-primary font-extrabold text-center">Register Form</h3>
          <div class="card p-4 my-3 shadow-sm">
            <form action="" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('name')}}" required>
                    @error('name')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" name="userName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('userName')}}" required>
                    @error('userName')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('email')}}" required>
                  @error('email')
                      <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                  @error('password')
                      <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</x-layout>