@extends('layouts.master')
@section('title','Home')
@section('content')
<h1 style="text-align: center">Employee Register</h1>
<div class="container">
  <div class="row">
     <div class="col-md-12">
     <form action="/action_page.php">
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="name" class="form-control" placeholder="Lavkush Giri....." id="name" name="name">
  </div>

  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" placeholder="lav@gmail.com" id="email" name="email">
  </div>

  <div class="form-group">
    <label for="mobile">Mobile:</label>
    <input type="mobile" class="form-control" placeholder="9999-777-222" id="mobile" name="mobile">
  </div>

  <div class="form-group">
  <label for="select">Designation List:</label>
  <select class="form-control" id="select" name="designation">
    <option>Developer</option>
    <option>UI/UX Developer</option>
    <option>business Developer</option>
    <option>Senior HR Executive</option>
  </select>
</div>

  <div class="form-group">
    <label for="text">Salary:</label>
    <input type="salary" class="form-control" placeholder="50,000..." id="salary" name="salary">
  </div>

  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

     </div>
  </div>
</div>

@endsection