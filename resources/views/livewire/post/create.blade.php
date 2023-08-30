<div>
    <div>
        <div class="py-3 px-2 bg-gray-300 flex justify-between items-center rounded-md shadow-md">
            <h3 class="text-gray-800 text-lg font-semibold">Create Post</h3>
            <button class="bg-blue-500 text-white px-5 py-3 rounded-lg text-sm font-normal hover:bg-blue-600">Back</button>
        </div>

        <div class="my-5">
            <form>
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                        <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300
                        text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                         dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                          dark:focus:border-blue-500" placeholder="Enter title" required>
                    </div>
                    <div>
                        <label for="meta_title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Meta Title</label>
                        <input type="text" name="meta_title" id="meta_title" class="bg-gray-50 border
                         border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block
                         w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
                         dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter meta title" required>
                    </div>
                </div>
                <div class="mb-6">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                    <textarea name="description" id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write description..."></textarea>
                </div>
                <div class="mb-6">
                    <label for="meta_description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Meta Description</label>
                    <textarea name="meta_description" id="meta_description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write description..."></textarea>
                </div>
                <div class="mb-6">
                    <label for="tags" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tags</label>
                    <input type="text" name="tags" id="tags" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Tags" required>
                </div>


                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
            </form>
        </div>

    </div>
</div>
