<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Quizzes List
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <x-nav-link :href="route('quizzes.create')">
                    Create Quiz
                </x-nav-link>

                <!-- for loop for looping the batches  -->
                @foreach ($quizzes as $quiz)
               <p><a href="{{route('quizzes.show',['quiz'=>$quiz])}}">{{$quiz->id}} # </a>{{ $quiz->title }} 
               => {{$quiz->batch->name}} => {{$quiz->user->name}} => <a href="{{route('quizzes.edit',['quiz'=>$quiz])}}">Edit</a></p>
              
               @endforeach
                  {{ $quizzes->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 
