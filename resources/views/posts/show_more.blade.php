@extends('layouts.app')

@section('content')
<div class="container">
<h3>More Details</h3>

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$post->title}}</h5>
    <p class="card-text">{{$post->description}}</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">list</li>
    <li class="list-group-item">list </li>
    <li class="list-group-item">list </li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Contact the owner</a>
    <a href="#" class="card-link">Leave a message</a>
  </div>
  
</div>
<a href= "/show" class="btn btn-sm btn-outline-secondary" >Go back</a>
<form id="delete-booking-form" action="/delete/{{$post->id}}" method="POST" >
            @csrf
            @method('DELETE')
            <button> Delete</button>
        </form>
</div>
@endsection