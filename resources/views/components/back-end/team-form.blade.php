<h2 class="text-center text-align: center">Input Team Member Details</h2>
<form action="{{ route('teams/create') }}" enctype="multipart/form-data" method="POST">
    @csrf
    @method('POST')
    <div class="mb-6">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Team Member
            Name</label>
        <input type="text" id="username-success" name="name"
            class="bg-green-50 border border-green-500 text-green-900 placeholder-green-700 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-100 dark:border-green-400"
            placeholder="Team Member name">

    </div>
    <div class="mb-6">
        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Title
        </label>
        <input type="text" id="username-success" name="title"
            class="bg-green-50 border border-green-500 text-green-900 placeholder-green-700 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-100 dark:border-green-400"
            placeholder="Title">

    </div>
    <div class="mb-6">
        <label for="descriptions" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-9s00">Descriptions
        </label>

        <textarea id="message" rows="4" name="descriptions"
            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Team Member Descriptions..."></textarea>

    </div>

    <button type="submit"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>
