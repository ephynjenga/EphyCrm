<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Success Message -->
                    @if (session('success'))
                        <p class="text-green-500 mb-4">{{ session('success') }}</p>
                    @endif

                    <!-- Account Table -->
                    <h1 class="text-2xl font-semibold mb-4">New Account</h1>
                    <form action="{{ route('accounts.store')" method="POST">
                        @csrf
                        <label for="name">Account Name:</label>
                        <input type="text" name="name" id="name" required>
                        <label for="email"> Email (optional):</label>
                        <input type="email" name="email" id="email">
                        <button type="submit">Create Account</button>
                    </form>

                    <h2 class="text-2xl font-semibold mb-2"> All Accounts</h2>
                    <table border="1">
                        <thead>
                            <tr class="bg-orange-100 dark:bg-orange-600">
                                <th class="border px-4 py-2 text-left">ID</th>
                                <th class="border px-4 py-2 text-left">Name</th>
                                <th class="border px-4 py-2 text-left">Email</th>
                                <th class="border px-4 py-2 text-left">Created At</th>
                            </tr>
                        </thead>
                    </table>

                    <br>

                    <!-- Contact Table-->
                    <h1 class="text-2xl font-semibold mb-4"> New Contact</h1>
                    <br>
                    <h2 class="text-2xl font-semibold mb-2"> All Contacts</h2>
                    <table border="1">
                        <thead>
                            <tr class="bg-blue-100 dark:bg-blue-700">
                                <th class="border px-4 py-2 text-left">ID</th>
                                <th class="border px-4 py-2 text-left">Name</th>
                                <th class="border px-4 py-2 text-left">Email</th>
                                <th class="border px-4 py-2 text-left">Created At</th>
                            </tr>
                        </thead>
                    </table>
                    <br>
                    <!-- Deals Table -->
                    <h1 class="text-2xl font-semibold mb-4">Deals Dashboard</h1>
                    <table class="min-w-full table-auto border-collapse" border="1">
                        <thead>
                            <tr class="bg-lime-100 dark:bg-lime-700">
                                <th class="border px-4 py-2 text-left">ID</th>
                                <th class="border px-4 py-2 text-left">Title</th>
                                <th class="border px-4 py-2 text-left">Created At</th>
                            </tr>
                        </thead>
                    </table>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
