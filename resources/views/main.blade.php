<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/76f9647920.js" crossorigin="anonymous"></script>


    <title>Hello, world!</title>
  </head>
  <body>
    
   
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Laravel Crud Application<span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
  </div>
</nav>
<br><br>
 



<div class="modal"  id="examplemodal"  tabindex="-1" role="dialog"  aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog"  role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add New Students</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div class ="conatiner" id ="one">


         <form action ="" method ="POST">
         @csrf

          <input type ="text" name ="Name" placeholder="Enetr your name"><br><br>
            <input type ="password" name ="Password" placeholder="Enetr your Password"><br><br>
             <input type ="date" name ="Date" placeholder="Enetr your date"><br><br> 
          
             <button class="btn btn-danger" data-dismiss="modal">Cancel</button>
               <button class="btn btn-danger" data-dismiss="modal">Add</button>


         </form>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Password</th>
      <th scope="col">Date</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    @foreach($members as $member)


    <tr>
      <th scope="row">1</th>
      <td>{{$member['id']}}</td>
      <td>{{$member['Name']}}</td>
      <td>{{$member['Password']}}</td>
        <td>{{$member['Date']}}</td>

    </tr>
    @endforeach
   
  </tbody>
</table>

<button data-loading-text="Loading...." class="btn btn-warning" type="Button" data-toggle="modal" 
data-target="#examplmodal" >Add Students</button>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>

  <script>
  $(document).ready(function() {
    $('#examplemodal').on('hidden.bs.modal', function (e) {
      $(this).find('form').trigger('reset'); // Reset form fields on modal close
    });
  });
</script>

</html>