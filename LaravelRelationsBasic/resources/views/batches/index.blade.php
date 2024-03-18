<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Batches List
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <form action="">
                       <input id="name" class="block mt-1 w-full" type="text" name="name" required />
                </form>
                <x-nav-link :href="route('batches.create')">
                    Create Batch
                </x-nav-link>
                 <button >Empty Batches</button>
                 <button>Non Empty Batches</button>
                <!-- for loop for looping the batches -->
               @foreach ($batches as $batch)
               <p><a href="{{route('batches.show',['batch'=>$batch])}}">{{$batch->id}} - </a>{{ $batch->name }} 
               -- {{$batch->starting}} --{{$batch->quizzes_count}}-- <a href="{{route('batches.edit',['batch'=>$batch])}}">Edit</a></p>
              
               @endforeach
              {{ $batches -> links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
