<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Exam') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Enter the exam page") }}
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4">

        <form action="{{route("exam.store")}}" method="post">
           {{csrf_field()}}
        @forelse($questions as $question)
            <fieldset id="{{$question->id}}" class="mt-4">
                <h4 class="text-lg">{{sprintf('%02d', $question->id)}}) {{$question->question}}</h4>
                <div class="form-check text-sm">
                    <input class="form-check-input" type="radio" name="{{$question->id}}" value="1" id="flexRadioDefault1">
                    <label class="form-check-label px-1" for="flexRadioDefault1">{{$question->answer1}}</label>
                </div>
                <div class="form-check text-sm">
                    <input class="form-check-input" type="radio" name="{{$question->id}}" value="2" id="flexRadioDefault2">
                    <label class="form-check-label px-1" for="flexRadioDefault2">{{$question->answer2}}</label>
                </div>
                <div class="form-check text-sm">
                    <input class="form-check-input" type="radio" name="{{$question->id}}" value="3" id="flexRadioDefault3">
                    <label class="form-check-label px-1" for="flexRadioDefault2">{{$question->answer3}}</label>
                </div>
                <div class="form-check text-sm">
                    <input class="form-check-input" type="radio" name="{{$question->id}}" value="4" id="flexRadioDefault4">
                    <label class="form-check-label px-1" for="flexRadioDefault2">{{$question->answer4}}</label>
                </div>
                <div class="form-check text-sm">
                    <input class="form-check-input" type="radio" name="{{$question->id}}" value="5" id="flexRadioDefault5">
                    <label class="form-check-label px-1" for="flexRadioDefault2">{{$question->answer5}}</label>
                </div>
            </fieldset>
        @empty
            <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg" role="alert">
                <span class="font-medium">No questions!</span> contact admin.
            </div>
        @endforelse

        <button type="submit" class="bg-blue-500 mt-4 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Finsh Exam</button>
        </form>

        <div class="py-4">
            {!! $questions->links() !!}
        </div>
    </div>
</x-app-layout>
