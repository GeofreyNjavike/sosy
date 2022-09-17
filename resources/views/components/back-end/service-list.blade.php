<!-- component -->
<section class="container mx-auto p-6 font-mono">
    <div class="p-6 bg-white border-b border-gray-200 text-center">
        List of Available Services
    </div>
    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
        <div class="w-full overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr
                        class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Action</th>

                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach ($list as $service)
                        <tr class="text-gray-700">
                            <td class="px-4 py-3 border">
                                <div class="flex items-center text-sm">
                                    <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                                        <img class="object-cover w-full h-full rounded-full"
                                            src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260"
                                            alt="" loading="lazy" />
                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-black">{{ $service->serviceName }}</p>
                                        <p class="text-xs text-gray-600">
                                            {{ \Illuminate\Support\Str::limit($service->serviceDescriptions, 150, $end = '...') }}
                                        </p>
                                    </div>
                                </div>
                            </td>

                            <td class="px-4 py-3 text-ms font-semibold border">
                                <a href="#"><i class="fa fa-trash text-red-500"></i></a>
                                <a href="{{ URL::to('editService', $service->id) }}"><i
                                        class="fa fa-pencil text-green-500"></i></a>
                            </td>
                        </tr>
                    @endforeach




                </tbody>
            </table>
        </div>
    </div>


</section>
