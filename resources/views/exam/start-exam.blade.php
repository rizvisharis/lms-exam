<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Exam') }}
        </h2>
    </x-slot>

    <div class="grid place-items-center mt-4">
        <a href="{{route('exam.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
            {{__('Start Exam')}}
        </a>
    </div>

</x-app-layout>
