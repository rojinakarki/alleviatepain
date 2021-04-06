
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <form method="POST" action="{{ route('users.update',$user) }}">
                            @csrf
                            @method('PUT')
                            <!-- Name -->
                                <div class="mt-4">
                                    <x-jet-label for="name" value="{{ __('Name') }}" />
                                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$user->name}}" required autofocus autocomplete="name" />
                                    <x-jet-input-error for="name" class="mt-2" />
                                </div>
                                <!-- Email -->
                                <div class="mt-4">
                                    <x-jet-label for="email" value="{{ __('Email') }}" />
                                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{$user->email}}" required />
                                    <x-jet-input-error for="email" class="mt-2" />
                                </div>
                                <!-- Phone Number -->
                                <div class="mt-4">
                                    <x-jet-label for="phone_number" value="{{ __('Phone Number') }}" />
                                    <x-jet-input id="phone_number" class="block mt-1 w-full" type="text" name="phone_number" value="{{$user->phone_number}}" required />
                                </div>
                                <div class="mt-4">
                                    <x-jet-label for="role" value="{{ __('Role') }}" />
                                    <select name="role" id="role" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                        <option value="Free user" {{($user->role === 'Free user') ? 'Selected': ''}}> Free User</option>
                                        <option value="Prime user" {{($user->role === 'Prime user') ? 'Selected': ''}} >Prime User</option>
                                        <option value="AP user" {{($user->role === 'AP user') ? 'Selected': ''}}>Alleviate Pain User</option>
                                        <option value="PM user" {{($user->role === 'PM user') ? 'Selected': ''}}>Pain Mastery User</option>
                                        <option value="Admin" {{($user->role === 'Admin') ? 'Selected': ''}}>Admin</option>
                                        <option value="Super admin" {{($user->role === 'Super admin') ? 'Selected': ''}}>Super Admin</option>
                                    </select>
                                </div>

                                <!-- Password -->
                                <div class="mt-4">
                                    <x-jet-label for="password" value="{{ __('Password') }}" />
                                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                                </div>
                                <!-- Password confirm -->
                                <div class="mt-4">
                                    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                                    <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                                </div>
                                <div class="mt-4">
                                    <x-jet-button class="bg-green-500 hover:bg-green-700 shadow-border p-3 text-white ">
                                        {{ __('Update User') }}
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
