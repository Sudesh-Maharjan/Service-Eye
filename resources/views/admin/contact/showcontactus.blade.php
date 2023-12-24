<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us </title>
    @vite('resources/css/app.css')
</head>
<body>
@include('admin.layout.sidebar')

    <div class='flex min-h-screen items-center justify-center  '>
        <div class="flex items-center justify-center min-h-auto">
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                @if(Session::has('message'))
                <div class=" text-red-500 text-base font-bold ">
                    {{Session::get('message')}}
                </div>
                @endif
                <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="py-3 px-6">SN</th>
                                <th scope="col" class="py-3 px-6">Name</th>
                                <th scope="col" class="py-3 px-6">Email</th>
                                <th scope="col" class="py-3 px-6">Phone number</th>
                                <th scope="col" class="py-3 px-6">Date / Time</th>
                                <th scope="col" class="py-3 px-6">Service</th>
                                <th scope="col" class="py-3 px-6">Message</th>
                                <th scope="col" class="py-3 px-6">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contacts as $contact)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="py-4 px-6">{{ $loop->iteration }}</td>
                                <td class="py-4 px-6">{{$contact->name}}</td>
                                <td class="py-4 px-6">{{$contact->email}}</td>
                                <td class="py-4 px-6">{{$contact->pnumber}}</td>
                                <td class="py-4 px-6">{{ \Carbon\Carbon::parse($contact->created_at)->setTimezone('Asia/Kathmandu')->format('Y-m-d / H:i:s') }}</td>
                                <td class="py-4 px-6">{{$contact->service}}</td>
                                <td class="py-4 px-6">{{$contact->message}}</td>
                                <td class="py-4 px-6"><a href="{{route('deleteshowcontactus',$contact->id)}}"><button class="delete">Delete</button></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>