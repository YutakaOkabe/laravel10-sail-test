<x-hoge-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>hoge</div>
                    @foreach ($users as $key => $user)
                        {{ $user->name }}<br>
                        {{ $user->email }}<br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-hoge-layout>
