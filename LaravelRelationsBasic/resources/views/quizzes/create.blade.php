<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Create Quiz
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                <form method="POST" action="{{ route('quizzes.store') }}">
                   @csrf 
                   <div class="grid grid-cols-6 gap-6">
                     <div class="col-span-6 sm:col-span-4">
                        <label for="title" value="title" />
                        <input id="title" class="block mt-1 w-full" style="color:black;" type="text" name="title" :value="old('title')" placeholder="title"
                         required />
                   </div>
                   <div class="col-span-6 ed:col-span-2">
                        <label for="starting" value="Starting" />
                        <input id="starting" class="block et-1 w-full" style="color:black;"  type="datetime-local" name="starting" :value="old('starting')"
                          required />
                   </div>
                   <div class="col-span-6 ed:col-span-2">
                        <label for="ending" value="ending" />
                        <input id="ending" class="block et-1 w-full" style="color:black;" type="datetime-local" name="ending" 
                         required />
                   </div>
                   <div class="col-span-6 ed:col-span-2">
                        <label for="duration" value="duration" />
                        <input id="duration" class="block et-1 w-full" style="color:black;" type="number" name="duration" 
                           placeholder="Duration" required />
                   </div>
                   <div class="col-span-6 ed:col-span-2">
                    <select class="block mt-1 w-full" name="batch_id" >
                    @foreach ($batches as $batch)
                         <option value="{{$batch->id}}">{{ $batch->name}} </option>
                    @endforeach
                    </select>    
                   </div>
                   <div class="flex col-span-6 justify-end"> 
                    <button>
                         Create Quiz  
                    </button>
                  </div>
                 </div>
                </form>   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
