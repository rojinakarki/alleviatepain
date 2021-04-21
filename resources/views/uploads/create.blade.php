<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Upload Attachment') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('uploads.store') }}" enctype="multipart/form-data"
                  x-data="{upload_type:'url'}">
                @csrf
                <input type="hidden" name="lesson_id" value="{{$lesson_id}}">

                <!-- upload Type -->
                <div class="mt-4">
                    <x-jet-label for="upload_type" value="{{ __('Upload Type') }}"/>
                    <select name="upload_type" x-model="upload_type" id="upload_type"
                            class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option value="url"> URL</option>
                        <option value="file"> FILE</option>
                    </select>
                </div>

                <!-- Upload Vimeo/Video URL -->
                <div class="mt-4" x-show="upload_type == 'url'">
                    <x-jet-label for="video_url" value="{{ __('Video URL') }}"/>
                    <x-jet-input id="video_url" class="block mt-1 w-full" type="text" name="video_url"
                                 :value="old('video_url')"/>
                    <x-jet-input-error for="video_url" class="mt-2"/>
                </div>

                <!-- File Name -->
                <div class="mt-4" x-show="upload_type == 'file'">
                    <x-jet-label for="file_name" value="{{ __('File Name') }}"/>
                    <x-jet-input id="file_name" class="block mt-1 w-full" type="text" name="file_name"
                                 :value="old('file_name')"/>
                    <x-jet-input-error for="file_name" class="mt-2"/>
                </div>

                <!-- Upload File Path -->
                <div class="mt-4" x-show="upload_type == 'file'">
                    <x-jet-label for="upload_file_path" value="{{ __('Upload File') }}"/>
                    <x-jet-input id="upload_file_path" class="block mt-1 w-full" type="file" name="upload_file_path"/>
                </div>

                <div class="mt-4">
                    <x-jet-button class="bg-green-500 hover:bg-green-700 shadow-border p-3 text-white ">
                        {{ __('Upload') }}
                    </x-jet-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
