@if(session('examSubmitted'))
    <div class="container max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="p-4 mb-4 text-center-white text-white-700 bg-green-200 rounded-lg" role="alert">
            {{__('The exam submitted successfully')}}
        </div>

    </div>
@endif
