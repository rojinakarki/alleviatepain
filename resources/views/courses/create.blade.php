<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Course') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="POST"  action="{{ route('courses.store') }}"
                  x-data="{course_category:'education'}">
            @csrf
                <!-- Course Title -->
                <div class="mt-4">
                    <x-jet-label for="course_title" value="{{ __('Course Title') }}" />
                    <x-jet-input id="course_title" class="block mt-1 w-full" type="text" name="course_title" :value="old('course_title')" required autofocus autocomplete="course_title" />
                    <x-jet-input-error for="course_title" class="mt-2" />
                </div>
                <!-- Course Description -->
                <div class="mt-4">
                    <x-jet-label for="course_description" value="{{ __('Course Description') }}" />
                    <x-jet-input id="course_description" class="block mt-1 w-full" type="text" name="course_description" :value="old('course_description')" required />
                    <x-jet-input-error for="course_description" class="mt-2" />
                </div>

                    <!-- Course Category  -->
                    <div class="mt-4">
                        <x-jet-label for="course_category" value="{{ __('Course Category') }}" />
                        <select name="course_category" x-model="course_category" id="course_category" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                            <option value="education"> Education</option>
                            <option value="exercise"> Exercise</option>
                        </select>
                    </div>
                    <!-- Course Type  -->
                    <div class="mt-4 ">
                        <x-jet-label for="course_type" value="{{ __('Course Type') }}" />
                        <select name="course_type" id="course_type" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                            <option value="free" selected>Free</option>
                            <option value="premium">Premium</option>
                        </select>
                    </div>

                <!-- Course Cost -->
                <div class="mt-4">
                    <x-jet-label for="course_cost" value="{{ __('Course Cost (AUD)') }}" />
                    <x-jet-input id="course_cost" class="block mt-1 w-full" type="text" name="course_cost" :value="old('course_cost')" required />
                    <x-jet-input-error for="course_cost" class="mt-2" />
                </div>
                <!-- Course Duration -->
                <div class="mt-4">
                    <x-jet-label for="course_duration" value="{{ __('Course Duration') }}" />
                    <x-jet-input id="course_duration" class="block mt-1 w-full" type="text" name="course_duration" :value="old('course_duration')" required />
                    <x-jet-input-error for="course_duration" class="mt-2" />
                </div>

                <!-- Sets  -->
                <div class="mt-4" x-show="course_category == 'exercise'">
                    <x-jet-label for="sets" value="{{ __('Sets') }}" />
                    <x-jet-input id="sets" class="block mt-1 w-full" type="text" name="sets" :value="old('sets')"  />
                    <x-jet-input-error for="sets" class="mt-2" />
                </div>

                <!-- Reps -->
                <div class="mt-4" x-show="course_category == 'exercise'">
                    <x-jet-label for="reps" value="{{ __('Reps') }}" />
                    <x-jet-input id="reps" class="block mt-1 w-full" type="text" name="reps" :value="old('reps')"  />
                    <x-jet-input-error for="reps" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-jet-button class="bg-green-500 hover:bg-green-700 shadow-border p-3 text-white ">
                        {{ __('Create Course') }}
                    </x-jet-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
