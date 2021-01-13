@extends('layouts.app')
@section('content')
      <div class="wrapper create-project">
            <div class="content">
      <h1> Create  new Project </h1><br/>
      <form action="/projects" method="POST">
      @csrf
      <div class="container-input">
      <label for="name" > Project name: </label>
      <input class="feild" type="text" id="name" name="name">
</div><br/>
<div class="container-input">
      <label for="projectManager" > Project Manager: </label>
      <input class="feild" type="text" id="projectManager" name="projectManager"></div><br/>
      
      <div class="container-input">
      <label for="startDate" > Start Date: </label>
      <input class="feild" type="date" id="startDate" name="startDate"></div><br/>

      <div class="container-input">
      <label for="endDate" > End Date: </label>
      <input  class="feild" type="date" id="endDate" name="endDate"></div><br/>

      <div class="container-input">
      <label for="status" > Status: </label>
      <input class="feild" type="text" id="status" name="status"></div><br/>


      <input type="submit" value="Add Project" >
      </form>
      </div>
</div>
 @endsection