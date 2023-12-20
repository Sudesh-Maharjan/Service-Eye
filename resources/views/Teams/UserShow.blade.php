<!-- resources/views/Teams/showTeams.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Teams</title>
</head>
<body>

<h1>Show Teams who are visible </h1>


@if(count($teams) > 0)
    <table border="1" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Quote</th>
                <th>Job Description</th>
                <th>Interest</th>
                <th>Image</th>
                <th>URLs</th>
                <th>Is Visible</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teams as $team)
                <tr>
                    <td>{{ $team->name }}</td>
                    <td>{{ $team->position }}</td>
                    <td>{{ $team->qoute }}</td>
                    <td>{{ $team->job_description }}</td>
                    <td>{{ $team->interest }}</td>
                    <td>
                        @if($team->image)
                            <img src="{{ asset('uploads/' . $team->image) }}" alt="Team Image" style="max-width: 100px;">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>
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
                    <td>{{ $team->is_visible ? 'Yes' : 'No' }}</td>
                  
            @endforeach
        </tbody>
    </table>
@else
    <p>No teams available.</p>
@endif

</body>
</html>
