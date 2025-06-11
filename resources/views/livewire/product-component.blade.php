<div class="bg-gray-50 min-h-screen p-6">
    <div class="flex flex-wrap gap-6 justify-center">
        <!-- Form Section -->
        <div class="w-full max-w-md">
            <form wire:submit.prevent="createUser"
                class="bg-white border-2 border-orange-500 p-8 rounded-lg shadow-lg">

                <h1 class="text-orange-500 font-bold text-3xl text-center mb-8">INSERT DATA</h1>

                @if (session('status'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                        <span class="font-medium">{{ session('status') }}</span>
                    </div>
                @endif

                <div class="space-y-6">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-semibold text-gray-700">Name</label>
                        <input wire:model='name' type="text" name="name" id="name"
                            class="w-full px-4 py-3 border-2 border-orange-300 rounded-lg focus:ring-orange-500 focus:border-orange-500 transition-colors"
                            placeholder="Enter your name" />
                    </div>

                    <div>
                        <label for="email" class="block mb-2 text-sm font-semibold text-gray-700">Email</label>
                        <input wire:model='email' type="email" name="email" id="email"
                            class="w-full px-4 py-3 border-2 border-orange-300 rounded-lg focus:ring-orange-500 focus:border-orange-500 transition-colors"
                            placeholder="Enter your email" />
                    </div>

                    <div>
                        <label for="password" class="block mb-2 text-sm font-semibold text-gray-700">Password</label>
                        <input wire:model='password' type="password" name="password" id="password"
                            class="w-full px-4 py-3 border-2 border-orange-300 rounded-lg focus:ring-orange-500 focus:border-orange-500 transition-colors"
                            placeholder="Enter your password" />
                    </div>
                </div>

                <button type="submit"
                    class="w-full mt-8 bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 px-6 rounded-lg transition-colors duration-300 shadow-md hover:shadow-lg">
                    Submit
                </button>
            </form>
        </div>

        <!-- Table Section -->
        <div class="w-full max-w-4xl">
            <div class="bg-white border-2 border-orange-500 rounded-lg shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">User List</h2>

                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-orange-50">
                            <tr>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Name</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Email</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Password</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach ($users as $user)
                                <tr class="hover:bg-orange-50 transition-colors">
                                    <td class="px-6 py-4">{{ $user->name }}</td>
                                    <td class="px-6 py-4">{{ $user->email }}</td>
                                    <td class="px-6 py-4 text-gray-400">••••••••</td>
                                    <td class="px-6 py-4">
                                        <div class="flex space-x-3">
                                            <button class="text-blue-600 hover:text-blue-800 font-medium">Edit</button>
                                            <button class="text-red-600 hover:text-red-800 font-medium">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
