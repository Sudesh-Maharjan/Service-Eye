@extends('layouts.AdminTraining')

@section("title")
<title>{{$title}}</title>

@endsection

@section("main_content")
<div>{{$title}}</div>
<form action="{{$url}}" method="POST" enctype="multipart/form-data">
    @csrf
    @if(Session::has('message'))
            <div class="bg-green-200 text-green-700 p-3 rounded mb-4">
                {{Session::get('message')}}
            </div>
            @endif
title :
<input type="text" name="title" value="{{$training->title}}">
description:
<input type="text" name="description" value="{{$training->description}}">
image:
<input type="file" name="image" id="">
date:
<input type="text" name="date" value="{{$training->date}}">
<input type="submit" name="" id="">
</form>

@endsection


