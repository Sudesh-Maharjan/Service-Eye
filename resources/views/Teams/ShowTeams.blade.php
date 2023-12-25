<!-- resources/views/Teams/showTeams.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team</title>
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
            
            
            <div class="px-64">
                <div class="mx-20 ml- flex flex-col items-start justify-center ml-24">
                    <div class="">
                    <h1 class="text-4xl font-bold text-start m-3 ">Teams</h1>
                    <a href="{{route('team.create')}}"
                         type="button"
                            class="addbutton">
                            Add Team</></a>

                    <a href="{{route('usershow')}}" type="button"
                            class="addbutton">User
                            Visible Team</a>
                </div>
            </div>
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
                            <div class="flex flex-row">
                            <a  href="{{route('teams.edit',$team->id)}}"><button 
                                    class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800"><span
                                        class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">Update</span></button></a>
                            <a href="{{route('teams.delete',$team->id)}}"><button
                                    onclick="confirmDelete({{ $team->id }})"
                                    class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800"><span
                                        class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0" onclick="return confirm('Are you sure you want to delete this team?');">Delete</span></button></a>
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

</body>
<script>

    function hideWarningAlert() {
        document.getElementById('warningAlert').classList.add('hidden'); 
    }
</script>

</html>