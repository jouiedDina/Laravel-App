@extends('layouts.app')
@section('content')
<div class="wrapper project-details">

    <div class="content">
  <h1> Project   :   {{   $project->name }}</h1><br/>
  <p>Project Manager  :   {{ $project->projectManager }}</p>
  <p>Start Date  :  {{ $project->StartDate }}</p>
  <p> End Date   : {{ $project->endDate }}</p>
  <p>Status   :  {{ $project->status }}</p> <br />

  <div class="container-icons">
  <form action="/projects/{{ $project->id }}" method="POST">
             @csrf
             @method('DELETE')
             <button class="btn"><i class="fa fa-trash"></i></button>
             </form>
             
             <form action="/projects/{{ $project->id }}/edit" method="GET">
             @csrf
             <button class="btn"><i class="fa fa-edit"></i></button>
             </form>
             </div>  
             </div>
</div>

  @endsection