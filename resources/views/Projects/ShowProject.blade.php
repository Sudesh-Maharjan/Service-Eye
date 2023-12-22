<!-- resources/views/Teams/showTeams.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
@vite('resources/css/app.css')

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Teams</title>
</head>
<body class="flex flex-col h-screen bg-gray-100 dark:bg-gray-900 items-center">
@include('admin.layout.sidebar')

<h1 class="text-4xl font-bold m-4">Show Projects</h1>
@if(Session::has('message'))
            <div class="bg-green-200 text-green-700 p-3 rounded mb-4">
                {{Session::get('message')}}
            </div>
            @endif
<a href="{{route('project.create')}}"  class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"><button>Add Projects </button></a>


<div class="px-44">
@if(count($teams) > 0)
    <table border="1" cellspacing="0"  class=" ml-28  min-w-full leading-normal">
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
                        <a href="{{route('project.edit',$team->id)}}" class="relative inline-flex items-center justify-center p-3 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800"><button onclick="openEditModal({{ $team->id }})">Update</button></a>
                        <a href="{{route('project.delete',$team->id)}}" class="relative inline-flex items-center justify-center p-3 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800"><button>Delete</button></a>

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
