<div class="container mx-auto px-4 sm:px-8">
    <div class="py-8">
        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="inline-block min-w-full shadow-md rounded-lg overflow-hidden">
                <table class="min-w-full leading-normal">
                    <thead>
                    <tr>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                            {{__('Name')}}
                        </th>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider text-center">
                            {{__('Exam Availablity')}}
                        </th>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider text-center">
                            {{__('Exam Start')}}
                        </th>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider text-center">
                            {{__('Dead Line')}}
                        </th>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider text-center">
                            {{__('Register')}}
                        </th>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider text-center">
                            {{__('Start Exam')}}
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($subjects as $subject)
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <div class="flex">
                                    <div class="flex-shrink-0 w-10 h-10">
                                        <img
                                            class="w-full h-full rounded-full"
                                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                            alt=""
                                        />
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{$subject->name}}
                                        </p>
                                        <p class="text-gray-600 whitespace-no-wrap">{{$subject->id}}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                                @if($subject->exam_availability)
                                    <p class="text-gray-900 whitespace-no-wrap">{{__('Yes')}}</p>
                                @else
                                    <p class="text-gray-900 whitespace-no-wrap">{{__('No')}}</p>
                                @endif
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                                <p class="text-gray-900 whitespace-no-wrap">{{$subject->exam_start}}</p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-gray-900 text-center">
                                {{$subject->exam_end}}
                                <p class="text-gray-600 whitespace-no-wrap">Due in 3 days</p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-gray-900 text-center">
                                @if($subject->exam_start > \Carbon\Carbon::now())
                                <a href="{{route('exam.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                    {{__('Register')}}
                                </a>
                                @endif
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-gray-900 text-center">
                                @if(($subject->exam_start < \Carbon\Carbon::now()) && $subject->exam_end > \Carbon\Carbon::now() )
                                <a href="{{route('exam.index')}}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full">
                                    {{__('Start Exam')}}
                                </a>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg" role="alert">
                            <span class="font-medium">No exams!</span> contact teacher.
                        </div>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
