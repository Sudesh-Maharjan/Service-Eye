<!-- resources/views/Teams/showTeams.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
@vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Teams</title>
</head>
<body class="flex h-screen bg-gray-100 dark:bg-gray-900">
@include('admin.layout.sidebar');
<div class="flex-1 flex flex-col overflow-hidden">

<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200 dark:bg-gray-800">
<div class="mx-20 flex flex-col items-center justify-center ml-72web">
<h1 class="text-4xl font-bold">Show Teams</h1>
<div class="">
<a href="{{route('team.create')}}" class="">
<button type="button" class="m-5 rounded px-5 py-2 overflow-hidden group bg-green-500 relative hover:bg-gradient-to-r hover:from-green-500 hover:to-green-400 text-white hover:ring-2 hover:ring-offset-2 hover:ring-green-400 transition-all ease-out duration-300">  Add Team</button></a>

<a href="{{route('usershow')}}"><button type="button" class="m-5 rounded px-5 py-2 overflow-hidden group bg-green-500 relative hover:bg-gradient-to-r hover:from-green-500 hover:to-green-400 text-white hover:ring-2 hover:ring-offset-2 hover:ring-green-400 transition-all ease-out duration-300">User Visible Team </button></a>
</div>
</div>


@if(count($teams) > 0)
    <table border="1" cellspacing="0" width="70%" class="w-full flex flex-col items-center text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ml-36">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 ">Name</th>
                <th scope="col" class="px-6 py-3">Position</th>
                <th scope="col" class="px-6 py-3">Quote</th>
                <th scope="col" class="px-6 py-3">Job Description</th>
                <th scope="col" class="px-6 py-3">Interest</th>
                <th scope="col" class="px-6 py-3">Image</th>
                <th scope="col" class="px-6 py-3">URLs</th>
                <th scope="col" class="px-6 py-3">Is Visible</th>
                <th scope="col" class="px-6 py-3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teams as $team)
                <tr  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4">{{ $team->name }}</td>
                    <td class="px-6 py-4">{{ $team->position }}</td>
                    <td class="px-6 py-4">{{ $team->qoute }}</td>
                    <td class="px-6 py-4">{{ $team->job_description }}</td>
                    <td class="px-6 py-4">{{ $team->interest }}</td>
                    <td class="px-6 py-4">
                        @if($team->image)
                            <img src="{{ asset('uploads/'. $team->image) }}" alt="Team Image" style="max-width: 100px;">
                        @else
                            No Image
                        @endif
                    </td>
                    <td class="px-6 py-4">
    @php
        $decodedUrls = json_decode($team->urls);
    @endphp

    @if(isset($decodedUrls) && is_array($decodedUrls))
        @foreach($decodedUrls as $url)
            <a href="{{ $url }}" target="_blank">{{ $url }}</a><br>
        @endforeach
    @else
        No URLs
    @endif
</td>
<td class="m-4 rounded-md p-3 flex justify-center items-center mt-8" style="background-color: {{ $team->is_visible ? 'green' : 'red' }}; color: white;">{{ $team->is_visible ? 'Yes' : 'No' }}</td>
                    <td>
                      <a onclick="openEditModal({{ $team->id }})"><button onclick="" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800"><span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">Update</span></button></a>
                      <a href="{{route('teams.delete',$team->id)}}"><button  class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800"><span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">Delete</span></button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>No teams available.</p>
@endif
</div>
</main>
  </div>
  
</div>
<div id="editTeamModal" class="hidden fixed inset-0 bg-gray-500 bg-opacity-75 justify-center items-center">
    <div class="bg-white p-8 rounded-md shadow-md">
        <!-- Content from editTeam.blade.php will be dynamically loaded here -->
    </div>
</div>
</body>
<script>

function openEditModal(teamId) {
        // Fetch the content dynamically
        fetch(`{{ route('teams.edit', ['id' => '__teamId__']) }}`.replace('__teamId__', teamId))
            .then(response => response.text())
            .then(html => {
                // Update the content of the modal
                document.getElementById('editTeamModal').innerHTML = html;
                // Show the modal
                document.getElementById('editTeamModal').classList.remove('hidden');
            });
    }

    // Add a function to close the modal if needed
    function closeEditModal() {
        document.getElementById('editTeamModal').classList.add('hidden');
    }
</script>
</html>
