@extends('layout')

@section('content')
 <main role="main" class="container">
  <div class="jumbotron">
        
	<div class="container">
  <h2>Create Project</h2>
  <form method="POST" action="/projects">
  	 {{ csrf_field() }}
    <div class="form-group">
      <label for="text">Name:</label>
      <input type="text" class="form-control"  placeholder="Enter Text here" name="C_Name">
    </div>
    <div class="form-group">
      <label for="text">Username:</label>
      <input type="text" class="form-control" placeholder=" Enter Desccription" name="Username">
    </div>
    <div class="form-group">
      <label for="text">Password</label>
      <input type="text" class="form-control" placeholder=" Enter Desccription" name="password">
    </div>
    
    
    <button type="submit" class="btn btn-success">Create</button>
  </form>
    
  
</div>
</div>
</main>
@endsection

