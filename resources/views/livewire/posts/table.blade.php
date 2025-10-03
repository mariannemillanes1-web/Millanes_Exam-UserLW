<table class="table-auto w-full border">
    <thead class="bg-gray-500 text-white">
        <tr>
            <th class="border px-6 py-3 text-center font-medium uppercase tracking-wider">ID</th>
            <th class="border px-6 py-3 text-center font-medium uppercase tracking-wider">Title</th>
            <th class="border px-6 py-3 text-center font-medium uppercase tracking-wider">Content</th>
            <th class="border px-6 py-3 text-center font-medium uppercase tracking-wider">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <livewire:posts.table-row :post="$post" :key="$post->id"/>
        @endforeach
    </tbody>
</table>
