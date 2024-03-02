<x-app-layout>
    <h2 class="text-3xl font-bold text-center py-10">Login</h2>
    <form class="max-w-md mx-auto" action="{{ route('account.delete') }}" method="post">
        @csrf
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full  px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Account
            Delete</button>
    </form>


</x-app-layout>
