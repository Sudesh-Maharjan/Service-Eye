@extends("layouts.AdminTraining")

@section("title")
<title>Show Training</title>
@endsection

@section("main_content")
@if(Session::has('message'))
            <div class="bg-green-200 text-green-700 p-3 rounded mb-4">
                {{Session::get('message')}}
            </div>
            @endif
<a href="{{route('addtraining')}}"><button >Add Training</button></a>
<table class="table table-bordered">

<tr>
    <th>Name</th>
    <th>Image</th>
    <th>Desc</th>
    <th>Date</th>
    <th>Action</th>
</tr>
@foreach($trainings as $training)
    <td>{{$training->title}}</td>
    <td><img src="{{asset('uploads')}}/{{$training->image}}" alt=""></td>
    <td>{{$training->description}}</td>
    <td>{{$training->date}}</td>
    <td>
       <a href="{{route('training.update',$training->id)}}"><button class="btn btn-primary">Update</button></a> 
       <a href="{{route('deletetraining',$training->id)}}"><button class="btn btn-danger">Delete</button></a> 
    </td>



</tr>
@endforeach


</table></table>


@endsection