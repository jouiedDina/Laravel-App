@extends('layouts.app')
@section('content')
      <div class="wrapper create-project">
      <div class="content">
      <h1> Update Project </h1><br/>
      <form action="/projects/{{$project->id}}" method="POST">
      @csrf
      @method('PUT')

      <div class="container-input">
      <label for="name" > Project name: </label>
      <input type="text" id="name" name="name"  value="{{$project->name}}" >
      </div><br/><br />
     
      <div class="container-input">
      <label for="projectManager" > Project Manager: </label>
      <input type="text" id="projectManager" name="projectManager" value="{{$project->projectManager}}">
      </div><br/><br />

      <div class="container-input">
      <label for="startDate" > Start Date: </label>
      <input type="date" id="startDate" name="startDate" value="{{$project->StartDate}}">
      </div><br/><br />

      <div class="container-input">
      <label for="endDate" > End Date: </label>
      <input type="date" id="endDate" name="endDate" value="{{$project->endDate}}">
      </div><br/><br />

      <div class="container-input">
      <label for="status" > Status: </label>
      <input type="text" id="status" name="status" value="{{$project->status}}">
      </div><br/><br />

      <input type="submit" value="update Project" >
      </form>
      </div>
</div>
 @endsection