<!-- resources/views/Teams/showTeams.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Teams</title>
</head>
<body>

<h1>Show Projects</h1>
@if(Session::has('message'))
            <div class="bg-green-200 text-green-700 p-3 rounded mb-4">
                {{Session::get('message')}}
            </div>
            @endif
<a href="{{route('project.create')}}"><button>Add Projects </button></a>




@if(count($teams) > 0)
    <table border="1" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Url</th>
                <th>Image</th>
             
                
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teams as $team)
                <tr>
                    <td>{{ $team->name }}</td>
                    <td>{{ $team->url }}</td>
                    <td>
                        @if($team->image)
                            <img src="{{ asset('uploads/' . $team->image) }}" alt="Team Image" style="max-width: 100px;">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>
                        <a href="{{route('project.edit',$team->id)}}"><button>Update</button></a>
                        <a href="{{route('project.delete',$team->id)}}"><button>Delete</button></a>

                    </td>
                    
  
            @endforeach
        </tbody>
    </table>
@else
    <p>No teams available.</p>
@endif

</body>
</html>
