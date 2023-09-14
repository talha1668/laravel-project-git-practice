<!DOCTYPE html>
<html>
<head>
    <title>User Signup Form</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">User Signup Form</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('registered-user') }}" method="post">
                          @csrf
        <label for="useremail">Email:</label>
        <input type="email" id="useremail" name="useremail" value="{{old('useremail')}}" ><br>
        <span style="color:red" data-target="useremail" class="error-message" role="alert">
          @error('useremail')
          <strong>{{$message}}</strong>
          @enderror
        </span>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="{{old('username')}}" ><br>
        <span style="color:red" data-target="username" class="error-message" role="alert">
          @error('username')
          <strong>{{$message}}</strong>      
          @enderror
          </span>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" ><br>
        <span style="color:red" data-target="password" class="error-message" role="alert">

          @error('password')
          <strong>{{$message}}</strong>
           @enderror
          </span>


        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" value="{{old('firstname')}}" ><br>
        <span style="color:red" data-target="firstname" class="error-message" role="alert">
          @error('firstname')
          <strong>{{$message}}</strong>
          @enderror
          </span>

        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" value="{{old('lastname')}}" ><br>
        <span style="color:red" data-target="lastname" class="error-message" role="alert">
          @error('lastname')
          <strong>{{$message}}</strong>
          @enderror
          </span>

        <label for="gender">Gender:</label>
        <input type="radio" id="male" name="gender" value="male" >
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female" >
        <label for="female">Female</label><br>
        <span style="color:red" data-target="gender" class="error-message" role="alert">
          @error('gender')
          <strong>{{$message}}</strong>
          @enderror
          </span>

        <label for="city">City:</label>
        <input type="text" id="city" name="city"  value="{{old('city')}}" ><br>
        <span style="color:red" data-target="city" class="error-message" role="alert">
          @error('city')
          <strong>{{$message}}</strong>
          @enderror
          </span>

        <label for="state">State:</label>
        <input type="text" id="state" name="state"  value="{{old('state')}}" ><br>
        <span style="color:red" data-target="state" class="error-message" role="alert">
          @error('state')
          <strong>{{$message}}</strong>
          @enderror
          </span>

        <label for="zipcode">Zip Code:</label>
        <input type="text" id="zipcode" name="zipcode"  value="{{old('zipcode')}}"><br>
        <span style="color:red" data-target="zipcode" class="error-message" role="alert">
          @error('zipcode')
          <strong>{{$message}}</strong>
          @enderror
          </span>

        <input type="checkbox" id="remembertoken" name="remembertoken">
        <label for="remembertoken">Remember Token</label><br>
        <label for="">already have account?</label>
        <a href="{{route('login')}}">Login</a>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
<style>
/* CSS for the signup form */
body {
  font-family: Arial, sans-serif;
  background-color: #f0f0f0;
  margin: 0;
  padding: 0;
}

h2 {
  color: #333;
}

form {
  max-width: 400px;
  margin: 20px auto;
  padding: 20px;
  background-color: #fff;
  border: 1px solid #ccc;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
input[type="password"],
input[type="radio"],
input[type="checkbox"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

input[type="radio"],
input[type="checkbox"] {
  margin-right: 5px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 4px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #45a049;
}

/* Additional styles for checkboxes to make them look nicer */
input[type="checkbox"] {
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  width: 20px;
  height: 20px;
  border: 1px solid #ccc;
  border-radius: 4px;
  vertical-align: middle;
  position: relative;
  cursor: pointer;
}

input[type="checkbox"]:checked {
  background-color: #4CAF50;
}

input[type="checkbox"]:checked::after {
  content: "\2713";
  font-size: 16px;
  color: #fff;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

/* Styling for error messages */
.error-message {
  color: #ff0000;
  font-size: 14px;
  margin-top: -10px;
  margin-bottom: 15px;
}
</style>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const errorSpans = document.querySelectorAll(".error-message");
        
        errorSpans.forEach(errorSpan => {
            const relatedInput = document.querySelector(`[name=${errorSpan.getAttribute("data-target")}]`);
            
            relatedInput.addEventListener("focus", function() {
                errorSpan.textContent = "";
            });
        });
    });
</script>

</html>