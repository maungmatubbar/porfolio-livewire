<div>
    <div class="py-3 px-2 bg-gray-300 flex justify-between items-center rounded-md shadow-md">
        <h3 class="text-gray-800 text-lg font-semibold">Posts</h3>
        <a href="{{route('post.create')}}" class="bg-blue-500 text-white px-5 py-3 rounded-lg text-sm font-normal hover:bg-blue-600">Add Post</a>
    </div>
    <div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-2">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Meta title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Author
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $post->title }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $post->meta_title }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $post->user->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $post->created_at }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="py-5 ">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</div>
