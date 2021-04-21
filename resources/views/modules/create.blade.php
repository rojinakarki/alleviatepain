<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Module') }}
        </h2>
    </x-slot>


    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="POST"  action="{{ route('modules.store') }}">
            @csrf
                <input type="hidden" name="course_id" value="{{$course_id}}">
                <!-- Module Number -->
                <div class="mt-4">
                    <x-jet-label for="module_num" value="{{ __('Module Number') }}" />
                    <x-jet-input id="module_num" class="block mt-1 w-full" type="text" name="module_num" :value="old('module_num')" required />
                    <x-jet-input-error for="module_num" class="mt-2" />
                </div>

                <!-- Module Title -->
                <div class="mt-4">
                    <x-jet-label for="module_title" value="{{ __('Module Title') }}" />
                    <x-jet-input id="module_title" class="block mt-1 w-full" type="text" name="module_title" :value="old('module_title')" required autofocus autocomplete="course_title" />
                    <x-jet-input-error for="module_title" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-jet-button class="bg-green-500 hover:bg-green-700 shadow-border p-3 text-white ">
                        {{ __('Create Module') }}
                    </x-jet-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
