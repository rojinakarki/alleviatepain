<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Upload List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
{{--            <div class="block mb-8">--}}
{{--                <a href="{{ route('lessons.create') }}" class="bg-green-500 hover:bg-green-700 text-white"> Add New Lesson </a>--}}
{{--            </div>--}}
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                {{--                                Table heading --}}
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Uploads Info
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Upload File
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Show</span>
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Delete</span>
                                    </th>

                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($uploads as $upload)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{$upload->upload_type}}
                                                    </div>
                                                    <div class="text-sm text-gray-500">
                                                        {{$upload->video_url}}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
{{--                                        <td class="px-6 py-4 whitespace-nowrap">--}}
{{--                                            <div class="text-sm text-gray-900">--}}
{{--                                                {{$lesson->lesson_description}}</div>--}}
{{--                                        </td>--}}
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="{{ route('uploads.show',$upload) }}" class="text-indigo-600 hover:text-indigo-900">Show</a>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="{{ route('uploads.edit',$upload) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <form class="inline-block" action="{{ route('uploads.destroy',$upload->id) }}" method="POST">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                <input type="submit" value="Delete" class="text-red-600 hover:text-red-900 mb-2">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                <!-- More items... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
