<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form action="/tweet" method="post">
        @csrf

        <textarea 
            name="body"
            class="w-full"
            placeholder="What's up doc?"
            {{-- required --}}
        ></textarea>

        <hr class="my-4">
        <footer class="flex justify-between">
            <img
                src="{{ auth()->user()->avatar}}"
                alt="Your avatar"
                class="rounded-full mr-2"
            >

            <button 
                type="submit" 
                class="bg-blue-500 rounded-lg py-2 px-2 text-white"
            >
                Tweet-A-Roo
            </button>
        </footer>
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-2">{{$message}}</p>
    @enderror
</div>