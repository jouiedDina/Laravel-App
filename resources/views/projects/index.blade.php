@extends('layouts.app')
@section('content')
<div class="wrapper project-index">
                <p>{{session('msg')}}</p>
                <h1 class="title m-b-md"> List of projects </h1>
                <div class="content">
                <a href="/projects/create"> <button class="btn">Add new Project </button> </a>
               @foreach($projects as $project)
               <a href="/projects/{{ $project->id }}"> 
             <div class="project-item">
              <h4>{{ $project->name }}  </h4></div></a>
             
               @endforeach
               </div>
               </div>   
@endsection