<x-app-layout>

    <?php if(!$rooms){$rooms = [];} ?>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <h1 class="p-6 text-gray-900 font-bold text-7xl text-center " style="font-family: 'Times New Roman', serif;">
                    Rooms
                </h1>

                <div class="space-y-8">
                    @foreach ($rooms as $index => $room)
                        <div class="flex {{ $index % 2 == 0 ? 'flex-row' : 'flex-row-reverse' }} items-center [background-color:#ffffef] p-4 rounded-lg shadow-md">
                            <div class="w-1/3">
                                <img src="{{ asset($room->image) }}" alt="Room Image" class="w-full h-auto rounded-lg">
                            </div>
                            <div class="w-2/3 p-4">
                                <h3 class="text-3xl font-bold">{{ $room->name }}</h3>
                                <p class="text-gray-700">{{ $room->description }}</p>
                                <div class="mt-4">
                                    <a href="/room/show/{{ $room->id }}" class="inline-flex items-center justify-center h-8.5 bg-transparent transition-all duration-200 ease-in-out px-6 py-0.5 w-max max-w-full cursor-pointer font-sans font-bold tracking-widest uppercase text-sm leading-tight border-2 [border-color:#402a23] hover:[background-color:#402a23] hover:text-white">View Room</a>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


        </div>
    </div>
</x-app-layout>
