<x-guest-layout>
    <main>
        <h1>Books({{count($books)}})</h1>
        <div class="container mx-auto ">
            <div class="flex justify-center">
                <!-- main product view  -->
                @foreach($books as $book)
                <div class="flex gap-20 border rounded-lg px-10 py-18 items-center">
                    <div>
                        <img src="{{asset('./img/book-2.jpeg')}}" alt="">
                    </div>    
                    <div class="flex flex-col gap-6 items-center">
                        <h2 class="text-2xl font-bold">{{$book->book_name}}</h2>
                        <p>{{$book->book_autor}}</p>
                        <div class="flex gap-4 ">
                            <button class="btn bg-indigo-500 text-white  w-32">Download</button>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- Related Products -->
                <div></div>
            </div>
        </div>
    </main>
</x-guest-layout>  
