<div>
                    <table class="table-auto p-4">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                        <tr>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                ID
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Title
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Image
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Author
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Description
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Updated At
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Created At
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Actions
                            </th>
                        </tr>
                        </thead>
        <tbody>
            @foreach ($information as $info)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="p-4 text-gray-900 dark:text-white">{{ $info->id }}</td>
                    <td class="p-4 text-gray-900 dark:text-white">{{ $info->title }}</td>
                    <td class="p-4 text-gray-900 dark:text-white"><img class="h-auto" src="{{ $info->image }}"></td>
                    <td class="p-4 text-gray-900 dark:text-white">{{ $info->author }}</td>
                    <td class="p-4 text-gray-900 dark:text-white">{{ $info->description }}</td>
                    <td class="p-4 text-gray-900 dark:text-white">{{ $info->updated_at }}</td>
                    <td class="p-4 text-gray-900 dark:text-white">{{ $info->created_at }}</td>
                    <td class="p-4">
                        <button wire:click="delete({{ $info->id }})" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                        <button wire:click="$emit('edit')" type="button" class="text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:focus:ring-yellow-900">Edit</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $information->links() }}
</div>

