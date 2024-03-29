<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Edit Batch # {{$batch->id}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                <form method="POST" action="{{ route('batches.update', ['batch' => $batch])}}">
                   @csrf 
                   @method('PUT')
                   <div class="grid grid-cols-6 gap-6">
                     <div class="col-span-6 sm:col-span-4">
                        <label for="name" value="name" />
                        <input id="name" class="block mt-1 w-full"
                           type="text" name="name" value="{{$batch->name}}" placeholder="name" required />
                   </div>
                   <div class="col-span-6 ed:col-span-2">
                        <label for="starting" value="Starting" />
                        <input id="starting" class="block et-1 w-full" type="date" 
                           name="starting" value="{{$batch->starting}}" placeholder="Admision Date" required />
                   </div>

                   <div class="flex col-span-6 justify-end"> 
                    <button>
                         Update Batch  
                    </button>
                  </div>
                 </div>
                </form>   

                <form method="POST" action="{{ route('batches.update', ['batch' => $batch])}}">
                   @csrf 
                   @method('DELETE')
                        <button>
                            Delete Batch
                        </button>
                 </form> 
              </div>
            </div>
        </div>
    </div>
</x-app-layout>