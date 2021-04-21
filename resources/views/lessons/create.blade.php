<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Lesson') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="POST"  action="{{ route('lessons.store') }}">
            @csrf
                <input type="hidden" name="module_id" value="{{$module_id}}">

                <!-- Lesson Number -->
                <div class="mt-4">
                    <x-jet-label for="lesson_num" value="{{ __('Lesson Number') }}" />
                    <x-jet-input id="lesson_num" class="block mt-1 w-full" type="text" name="lesson_num" :value="old('lesson_num')" required />
                    <x-jet-input-error for="lesson_num" class="mt-2" />
                </div>

                <!-- Lesson Title -->
                <div class="mt-4">
                    <x-jet-label for="lesson_title" value="{{ __('Lesson Title') }}" />
                    <x-jet-input id="lesson_title" class="block mt-1 w-full" type="text" name="lesson_title" :value="old('lesson_title')" required />
                    <x-jet-input-error for="lesson_title" class="mt-2" />
                </div>

                <!-- Lesson Description -->
                <div class="mt-4">
                    <x-jet-label for="lesson_description" value="{{ __('Lesson Description') }}" />
                    <x-jet-input id="lesson_description" class="block mt-1 w-full" type="text" name="lesson_description" :value="old('lesson_description')" required />
                    <x-jet-input-error for="lesson_description" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-jet-button class="bg-green-500 hover:bg-green-700 shadow-border p-3 text-white ">
                        {{ __('Create Lesson') }}
                    </x-jet-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
