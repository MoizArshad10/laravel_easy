<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
</style>
<body style="background-color:black;color:white;font-weight:bold">
    
    @auth
        <div class="d-flex mb-5">
        <h2 class="bg-dark text-warning p-4 flex-grow-1 position-realtive">User Logged In.....!</h2>
        <form action="/logout" method="POST">
            @csrf
            <button class="btn btn-danger mt-4  fw-bold position-absolute translate-middle-x end-50">Log Out!</button>
        </form>
        </div>

        <hr>

        <h2 class="bg-dark text-warning p-4 mt-5">o Create Post.....!</h2>

        <div class="container">
            <form action="/create-post" method="POST">
                @csrf
            <div class="mb-3">
  <label for="" class="form-label">Post Tittle</label>
  <input type="text" name="title" class="form-control"  placeholder="Post Title">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Post Body...</label>
  <textarea class="form-control" name="body" rows="3" placeholder="Post Body...."></textarea>
</div>
<button class="btn btn-primary fw-bold">Create Post.</button>
            </form>
        
        </div>

        <hr>

        <div style="border:2px solid black " class="bg-dark container ">
            <h2 class="text-center">All Posts</h2>
            @foreach($posts as $post)
            <div>
                <h2 class="text-warning">{{$post['title']}}</h2>
                <h2 class="text-danger">{{$post['body']}}</h2>
                <hr>
              </div>
            @endforeach
        </div>
    @else

    <div class="container">
        <h2 class="text-center mt-5 bg-dark text-warning p-4 ">Register Form 👤</h2>

        <form action="/register" method="POST">
            @csrf
        <div class="mb-3">
  <label for="" class="form-label">Name</label>
  <input type="text" name="name" class="form-control"  placeholder="Enter Your Name">
</div>

<div class="mb-3">
  <label for="" class="form-label">Email</label>
  <input type="email" name="email" class="form-control"  placeholder="Enter Your Email">
</div>

<div class="mb-3">
  <label for="" class="form-label">Password</label>
  <input type="password" name="password" class="form-control"  placeholder="Enter Your Password">
</div>

<button class="btn btn-success fw-bold">Register ✅</button>
        </form>
    </div>
    <hr>

    <!-- Login -->
      <div class="container">
        <h2 class="text-center mt-5 bg-dark text-warning p-4 ">Login Form 👤</h2>

        <form action="/login" method="POST">
            @csrf
        <div class="mb-3">
  <label for="" class="form-label">Name</label>
  <input type="text" name="loginname" class="form-control"  placeholder="Enter Your Name">
</div>



<div class="mb-3">
  <label for="" class="form-label">Password</label>
  <input type="password" name="loginpassword" class="form-control"  placeholder="Enter Your Password">
</div>

<button class="btn btn-primary fw-bold">Login ☑</button>
        </form>
    </div>
    @endauth

</body>
</html>