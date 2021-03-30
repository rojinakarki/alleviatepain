<button {{ $attributes->merge(['type' => 'submit', 'lass' => 'inline-flex items-center px-4 py-2
 bg-blue-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase
 tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900
 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
