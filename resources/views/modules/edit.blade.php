<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Module') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <form method="POST" action="{{ route('modules.update',$module) }}">
                            @csrf
                            @method('PUT')

                            <!-- Module Number -->
                                <div class="mt-4">
                                    <x-jet-label for="module_num" value="{{ __('Module Number') }}"/>
                                    <x-jet-input id="module_num" class="block mt-1 w-full" type="text"
                                                 name="module_num" value="{{$module->module_num}}" required/>
                                    <x-jet-input-error for="module_num" class="mt-2"/>
                                </div>

                                <!-- Module Title -->
                                <div class="mt-4">
                                    <x-jet-label for="module_title" value="{{ __('Module Title') }}"/>
                                    <x-jet-input id="module_title" class="block mt-1 w-full" type="text"
                                                 name="module_title" value="{{$module->module_title}}" required/>
                                    <x-jet-input-error for="module_title" class="mt-2"/>
                                </div>

                                <div class="mt-4">
                                    <x-jet-button class="bg-green-500 hover:bg-green-700 shadow-border p-3 text-white ">
                                        {{ __('Update Module') }}
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
