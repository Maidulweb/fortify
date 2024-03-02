<x-app-layout>
    <div class="mx-auto max-w-md">
        <h2 class="text-center pt-10 font-bold pb-4 text-3xl">Profile</h2>
        <p class="text-center py-2"><strong>Name : </strong> {{ auth()->user()->name }}</p>
        <p class="text-center py-2"><strong>Email : </strong> {{ auth()->user()->email }}</p>
        <div class="text-center mt-4 flex justify-center space-x-4">
            <a href="{{ route('profile') }}" class="text-white bg-green-700  rounded-md px-3 py-2 text-sm font-medium">
                Profile Update
            </a>
            <a href="{{ route('password') }}" class="text-white bg-green-700  rounded-md px-3 py-2 text-sm font-medium">
                Password Update
            </a>
            <a href="{{ route('account.delete') }}"
                class="text-white bg-red-700  rounded-md px-3 py-2 text-sm font-medium">
                Account Delete
            </a>
        </div>
    </div>
</x-app-layout>
