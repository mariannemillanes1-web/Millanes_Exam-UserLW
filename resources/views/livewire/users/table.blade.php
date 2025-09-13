<div>
    <p class="text-blue-500 text-4xl">Users</p>
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-500 text-white">
            <tr>
                <th class="px-6 py-3 text-center font-medium uppercase tracking-wider">ID</th>
                <th class="px-6 py-3 text-center font-medium uppercase tracking-wider">Name</th>
                <th class="px-6 py-3 text-center font-medium uppercase tracking-wider">Email</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @foreach($users as $user)
                <tr>
                    <td class="px-6 py-4 text-center">{{ $user->id }}</td>
                    <td class="px-6 py-4 text-center">{{ $user->name }}</td>
                    <td class="px-6 py-4 text-center">{{ $user->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
