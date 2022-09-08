<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Services') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="text-center text-align: center">Edit Services</h2>
                    @forelse ($service as $service)
                        <form action="{{ URL::to('services/update', $service->id) }}" enctype="multipart/form-data"
                            method="POST">
                            @csrf
                            @method('POST')
                            <div class="mb-6">
                                <label for="serviceName"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Service
                                    Name</label>
                                <input type="text" id="username-success" name="serviceName"
                                    value="{{ $service->serviceName }}"
                                    class="bg-green-50 border border-green-500 text-green-900 placeholder-green-700 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-100 dark:border-green-400">

                            </div>
                            <div class="mb-6">
                                <label for="password"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-9s00">Services
                                    Descriptions
                                </label>

                                <textarea id="message" rows="4" name="serviceDescriptions"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ $service->serviceDescriptions }}</textarea>

                            </div>

                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                        </form>

                    @empty

                        <form action="{{ route('services/create') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            @method('POST')
                            <div class="mb-6">
                                <label for="serviceName"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Service
                                    Name</label>
                                <input type="text" id="username-success" name="serviceName"
                                    class="bg-green-50 border border-green-500 text-green-900 placeholder-green-700 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-100 dark:border-green-400"
                                    placeholder="No Service to Edit">

                            </div>
                            <div class="mb-6">
                                <label for="password"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-9s00">Services
                                    Descriptions
                                </label>

                                <textarea id="message" rows="4" name="serviceDescriptions"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="No Service Descriptions..."></textarea>

                            </div>

                        </form>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
