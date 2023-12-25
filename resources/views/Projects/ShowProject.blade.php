<!-- resources/views/Teams/showTeams.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
@vite('resources/css/app.css')

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
</head>
<body class="flex flex-col h-screen bg-gray-100 dark:bg-gray-900 items-center">
@include('admin.layout.sidebar')

@if(Session::has('message'))
<div class="bg-green-200 text-green-700 p-3 rounded mb-4">
    {{Session::get('message')}}
</div>
@endif


<div class="ml-56">
    <h1 class="text-4xl font-bold m-4">Projects</h1>
    <a href="{{route('project.create')}}"  class="addbutton">Add Projects </a>
    @if(count($teams) > 0)
    <table border="1" cellspacing="0"  class="m-5 min-w-full leading-normal">
        <thead>
            <tr>
                <th scope="col" class="thclass ">Name</th>
                <th scope="col" class="thclass ">Url</th>
                <th scope="col" class="thclass ">Image</th>
             
                
                <th scope="col" class="thclass ">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teams as $team)
                <tr>
                    <td class="tdclass">{{ $team->name }}</td>
                    <td class="tdclass">{{ $team->url }}</td>
                    <td class="tdclass">
                        @if($team->image)
                            <img src="{{ asset('uploads/' . $team->image) }}" alt="Team Image" style="max-width: 100px;">
                        @else
                            No Image
                        @endif
                    </td>
                    <td class="tdclass">
                        <a href="{{route('project.edit',$team->id)}}" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800"><span
                                        class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0"><button onclick="openEditModal({{ $team->id }})">Update</button></a>
                        <a href="{{route('project.delete',$team->id)}}" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800"><span
                                        class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0" onclick="return confirm('Are you sure you want to delete this team?');"><button>Delete</button></a>

                    </td>
                    
  
            @endforeach
        </tbody>
    </table>
@else
    <p>No teams available.</p>
@endif
</div>

</body>
<script>
function openEditModal(teamId) {
        // Fetch the content dynamically
        fetch(`{{ route('project.edit', ['id' => '__teamId__']) }}`.replace('__teamId__', teamId))
            .then(response => response.text())
            .then(html => {
                document.getElementById('editProjectModal').innerHTML = html;
                document.getElementById('editProjectModal').classList.remove('hidden');
            });
    }
function closeEditModal() {
        document.getElementById('editProjectModal').classList.add('hidden');
    }
</script>
</html>
