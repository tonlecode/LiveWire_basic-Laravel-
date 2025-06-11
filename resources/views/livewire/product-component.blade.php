<div>


    <div class="">
        <form wire:submit.prevent="createUser"
            class=" border border-orange-500 m-[3rem] p-6 rounded-lg shadow-md w-full max-w-md">

            <h1 class="text-orange-500 font-bold text-2xl text-center mb-[4rem] mt-[-42px]">INSERT DATA</h1>
            <p>
                @if (session('status'))
                    <span class="text-green-500 font-semibold text-center block mb-4">
                        {{ session('status') }}

                    </span>
                @endif
            </p>
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-semibold text-orange-500">Name</label>
                <input wire:model='name' type="text" name="name" id="name"
                    class="w-full px-4 py-2 border border-orange-500 rounded-md focus:ring-orange-500 focus:outline-none focus:ring-2"
                    placeholder="Enter your name" />
            </div>

            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-semibold text-orange-500">Email</label>
                <input wire:model='email' type="email" name="email" id="email"
                    class="w-full px-4 py-2 border border-orange-500 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500"
                    placeholder="Enter your email" />
            </div>

            <div class="mb-6">
                <label for="password" class="block mb-2 text-sm font-semibold text-orange-500">Password</label>
                <input wire:model='password' type="password" name="password" id="password"
                    class="w-full px-4 py-2 border border-orange-500 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500"
                    placeholder="Enter your password" />
            </div>

            <button type="submit"
                class="p-3 float-end border mt-3 border-orange-600 hover:bg-orange-500 text-orange-500 hover:text-white font-semibold py-3 rounded-md transition-colors duration-300">
                Submit
            </button>
        </form>
    </div>


    {{-- List data --}}
    <div class="max-w-4xl mx-auto mt-[-8rem] mr-[15rem] p-6 rounded-2xl shadow-lg border border-orange-500">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">User List</h2>

        <table class="table-auto w-full text-sm text-left text-gray-600">
            <thead class="bg-gray-100 text-gray-700 uppercase text-xs">
                <tr>
                    <th class="px-4 py-3">Name</th>
                    <th class="px-4 py-3">Email</th>
                    <th class="px-4 py-3">Password</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($users as $user)
                    <tr class="hover:bg-gray-50 transition duration-200">
                        <td class="px-4 py-3 font-medium">{{ $user->name }}</td>
                        <td class="px-4 py-3">{{ $user->email }}</td>
                        <td class="px-4 py-3 text-gray-400">••••••••</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
