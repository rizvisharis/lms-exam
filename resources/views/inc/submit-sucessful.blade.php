@if(session('examSubmitted'))
    <div class="container max-w-7xl mx-auto my-2 sm:px-6 lg:px-8">
        <div class="p-4 mb-4 text-center-white text-white-700 bg-green-200 rounded-lg" role="alert">
            {{__(session('examSubmitted'))}}
        </div>

    </div>
@endif

@if(session('registerExam'))
    <div class="container max-w-7xl mx-auto my-2 sm:px-6 lg:px-8">
        <div class="p-4 mb-4 text-center-white text-white-700 bg-green-200 rounded-lg" role="alert">
            {{__(session('registerExam'))}}
        </div>

    </div>
@endif

@if(session('takenExam'))
    <div class="container max-w-7xl mx-auto my-2 sm:px-6 lg:px-8">
        <div class="p-4 mb-4 text-center-white text-white-700 bg-red-200 rounded-lg" role="alert">
            {{__(session('takenExam'))}}
        </div>

    </div>
@endif

@if(session('alreadyRegister'))
    <div class="container max-w-7xl mx-auto my-2 sm:px-6 lg:px-8">
        <div class="p-4 mb-4 text-center-white text-white-700 bg-red-200 rounded-lg" role="alert">
            {{__(session('alreadyRegister'))}}
        </div>

    </div>
@endif
