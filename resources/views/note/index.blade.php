<x-layout>
    <div class="w-full h-full flex justify-start items-center flex-col gap-[30px]">
        <div class=" border px-[20px] py-[10px] border-black text-[24px]">
            <h1 class="">New Note</h1>
            </a>
        </div>
        @foreach ($notes as $note)
            <div class="flex flex-col justify-center items-center bg-slate-500 rounded-md shadow-2xl overflow-hidden">
                <div class="p-[20px] bg-yellow-500 w-[400px]  text-slate-700">
                    {{ Str::words($note->note, 30) }}
                </div>
                <div class="h-[100px] flex justify-center items-center">
                    <div class="flex flex-row gap-[20px] text-white">
                        <a href="{{ route('note.create') }}">

                            <button
                                class="bg-orange-500
                            px-[15px] py-[8px] rounded-md shadow-2xl cursor-pointer scale-100 hover:scale-125
                            duration-300">CREATE</button>
                        </a>
                        <a href={{ route('note.show', $note) }}>
                            <button
                                class="bg-blue-500
                            px-[15px] py-[8px] rounded-md shadow-2xl cursor-pointer scale-100 hover:scale-125
                            duration-300">VIEW</button>
                        </a>
                        <a href={{ route('note.edit', $note) }}>
                            <button
                                class="bg-green-500
                            px-[15px] py-[8px] rounded-md shadow-2xl scale-100 hover:scale-125
                            duration-300">EDIT</button>
                        </a>
                        <form action="{{ route('note.destroy', $note) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button
                                class="bg-red-500 px-[15px]
                            py-[8px] rounded-md shadow-2xl scale-100 hover:scale-125 duration-300">DELETE</button>
                        </form>

                    </div>
                </div>

            </div>
        @endforeach
    </div>
</x-layout>
