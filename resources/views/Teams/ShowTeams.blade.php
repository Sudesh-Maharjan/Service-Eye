<!-- resources/views/Teams/showTeams.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Teams</title>
    <style>
        #warningAlert {
            position: fixed;
            top: 0;
            left: 50%;
            transform: translate(-50%);
            z-index: 1000;
            /* Adjust z-index as needed */
        }
    </style>
</head>

<body class="flex h-screen bg-gray-100 dark:bg-gray-900">
    @include('admin.layout.sidebar')
    <div class="flex-1 flex flex-col overflow-hidden">

        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200 dark:bg-gray-800">
            <div class="mx-20 flex flex-col items-center justify-center ml-72web">
                <h1 class="text-4xl font-bold">Show Teams</h1>
                <div class="">
                    <a href="{{route('team.create')}}" class="">
                        <button type="button"
                            class="m-5 rounded px-5 py-2 overflow-hidden group bg-green-500 relative hover:bg-gradient-to-r hover:from-green-500 hover:to-green-400 text-white hover:ring-2 hover:ring-offset-2 hover:ring-green-400 transition-all ease-out duration-300">
                            Add Team</button></a>

                    <a href="{{route('usershow')}}"><button type="button"
                            class="m-5 rounded px-5 py-2 overflow-hidden group bg-green-500 relative hover:bg-gradient-to-r hover:from-green-500 hover:to-green-400 text-white hover:ring-2 hover:ring-offset-2 hover:ring-green-400 transition-all ease-out duration-300">User
                            Visible Team </button></a>
                </div>
            </div>

<div class="px-64">
            @if(count($teams) > 0)
            <table border="1" cellspacing="0"
                class=" ml-28  min-w-full leading-normal">
                <thead
                    class=" ">
                    <tr>
                        <th scope="col" class="thclass ">Name</th>
                        <th scope="col" class="thclass">Position</th>
                        <th scope="col" class="thclass">Quote</th>
                        <th scope="col" class="thclass">Job Description</th>
                        <th scope="col" class="thclass">Interest</th>
                        <th scope="col" class="thclass">Image</th>
                        <th scope="col" class="thclass">URLs</th>
                        <th scope="col" class="thclass">Is Visible</th>
                        <th scope="col" class="thclass">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($teams as $team)
                    <tr class="">
                        <td class="tdclass">{{ $team->name }}</td>
                        <td class="tdclass">{{ $team->position }}</td>
                        <td class="tdclass">{{ $team->qoute }}</td>
                        <td class="tdclass">{{ $team->job_description }}</td>
                        <td class="tdclass">{{ $team->interest }}</td>
                        <td class="tdclass">
                            @if($team->image)
                            <img src="{{ asset('uploads/'. $team->image) }}" alt="Team Image" style="max-width: 100px;">
                            @else
                            No Image
                            @endif
                        </td>
                        <td class="tdclass">
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
                        <td class="tdclass">
                            
                        <button class="m-4 rounded-md p-3 flex justify-center items-center mt-8"style="background-color: {{ $team->is_visible ? 'green' : 'red' }}; color: white;">{{
                            $team->is_visible ? 'Yes' : 'No' }}</button></td>
                        <td class="tdclass">
                            <div class="flex flex-col">
                            <a onclick="openEditModal({{ $team->id }})"><button onclick=""
                                    class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800"><span
                                        class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">Update</span></button></a>
                            <a href="{{route('teams.delete',$team->id)}}"><button
                                    onclick="confirmDelete({{ $team->id }})"
                                    class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800"><span
                                        class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">Delete</span></button></a>
                                        </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <p>No teams available.</p>
            @endif
        </div>
    </div>
    </main>
    </div>

    </div>
    <div id="editTeamModal" class="hidden fixed inset-0 bg-gray-500 bg-opacity-75 justify-center items-center">
        <div class="bg-white p-8 rounded-md shadow-md">
            <!-- Content from editTeam.blade.php will be dynamically loaded here -->
        </div>
    </div>
    <div id="warningAlert"
        class="hidden p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300"
        role="alert">
        <span class="font-medium">Deletion Cancled!</span> <button onclick="hideWarningAlert()"
            class="ml-2">Close</button>
    </div>
</body>
<script>

    function openEditModal(teamId) {
        // Fetch the content dynamically
        fetch(`{{ route('teams.edit', ['id' => '__teamId__']) }}`.replace('__teamId__', teamId))
            .then(response => response.text())
            .then(html => {
                document.getElementById('editTeamModal').innerHTML = html;
                document.getElementById('editTeamModal').classList.remove('hidden');
            });
    }

    // Add a function to close the modal if needed
    function closeEditModal() {
        document.getElementById('editTeamModal').classList.add('hidden');
    }
    function confirmDelete(teamId) {
        var confirmation = window.confirm("Do you want to delete?");
        if (confirmation) {
            // User clicked "OK," perform the delete action
            var deleteUrl = `{{ route('teams.delete', ['id' => '__teamId__']) }}`.replace('__teamId__', teamId);

            // Check if the team exists before attempting to delete
            fetch(deleteUrl)
                .then(response => {
                    if (response.ok) {
                        // Team exists, perform the deletion
                        window.location.href = deleteUrl;
                    } else {
                        // Team not found, display an error or handle accordingly
                        console.error('Team not found.');
                    }
                })
                .catch(error => {
                    // Handle fetch error
                    console.error('Error during fetch:', error);
                });
        } else {
            document.getElementById('warningAlert').classList.remove('hidden');
            warningAlert.classList.remove('hidden');
            warningAlert.style.top = '50%';
            warningAlert.style.left = '50%';
            event.preventDefault();
        }
    }
    function hideWarningAlert() {
        document.getElementById('warningAlert').classList.add('hidden');
    }
</script>

</html>