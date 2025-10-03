<tr class="{{ $post->is_archived ? 'bg-gray-700 text-gray-500' : '' }}">
    <td class="border px-6 py-2 text-center">{{ $post->id }}</td>
    <td class="border px-6 py-2 text-center">{{ $post->title }}</td>
    <td class="border px-6 py-2 text-center">{{ $post->content }}</td>
    <td class="border px-6 py-2 text-center">{!! $post->is_archived ? '<button class="bg-green-400 text-white-50 px-2 py-2" wire:confirm="Are you sure to unarchive this post?" wire:click="unArchive">Unarchived</button>' : '' !!}
        <button wire:click='archive' onclick="return confirm('Are you sure?')"
        class="{{ $post->is_archived ? 'hidden' : 'text-blue-600 bg-amber-50 px-2' }}">Archive</button>
    </td>
</tr>
