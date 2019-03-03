@extends('layouts.app')

@section('main-content')

<div class="container">
  <div class="col-md-6 offset-md-3">
    <div class="card text-center">
      <div class="card-header">
        <span class="gbm-reg-form-header">Link your globoard account</span>
      </div>
      <div class="card-body">
        <form>
          <div class="form-group text-left">
            <label for="formGroupExampleInput">Name</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Your Name">
          </div>
          <div class="form-group text-left">
            <label for="formGroupExampleInput2">GloBoard PAT</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter Your Personal Access Token">
          </div>
        </form>
        <!-- <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a> -->
      </div>
      <div class="card-footer text-muted">
        2 days ago
      </div>
    </div>
  </div>
</div>

@endsection
