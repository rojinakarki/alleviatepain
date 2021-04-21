<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Lesson') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <form method="POST" action="{{ route('lessons.update',$lesson) }}">
                            @csrf
                            @method('PUT')
                            <!-- Lesson Number -->
                                <div class="mt-4">
                                    <x-jet-label for="lesson_num" value="{{ __('Lesson Number') }}"/>
                                    <x-jet-input id="lesson_num" class="block mt-1 w-full" type="text" name="lesson_num"
                                                 value="{{$lesson->lesson_num}}" required/>
                                    <x-jet-input-error for="lesson_num" class="mt-2"/>
                                </div>

                                <!-- Lesson Title -->
                                <div class="mt-4">
                                    <x-jet-label for="lesson_title" value="{{ __('Lesson Title') }}"/>
                                    <x-jet-input id="lesson_title" class="block mt-1 w-full" type="text"
                                                 name="lesson_title" value="{{$lesson->lesson_title}}" required/>
                                    <x-jet-input-error for="lesson_title" class="mt-2"/>
                                </div>

                                <!-- Lesson Description -->
                                <div class="mt-4">
                                    <x-jet-label for="lesson_description" value="{{ __('Lesson Description') }}"/>
                                    <x-jet-input id="lesson_description" class="block mt-1 w-full" type="text"
                                                 name="lesson_description" value="{{$lesson->lesson_description}}" required/>
                                    <x-jet-input-error for="lesson_description" class="mt-2"/>
                                </div>

                                <div class="mt-4">
                                    <x-jet-button class="bg-green-500 hover:bg-green-700 shadow-border p-3 text-white ">
                                        {{ __('Update Lesson') }}
                                    </x-jet-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
