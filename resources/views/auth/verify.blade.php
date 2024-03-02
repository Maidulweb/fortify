<x-app-layout>
    <p class="pt-10 text-center text-3xl font-bold mb-10">Verify Your account</p>
    @if (session('status') == 'verification-link-sent')
        <p class="pb-10 text-green-700 text-center font-medium">Please check your email. Verification link sent</p>
    @endif
    <form class="max-w-md mx-auto" action="{{ route('verification.send') }}" method="post">
        @csrf

        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full  px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Send
            Link Again</button>

    </form>


</x-app-layout>
