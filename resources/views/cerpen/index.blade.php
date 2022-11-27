@extends('layouts.app')
@section('SLOT')
<div class="w-full mx-auto">

	<div class="flex flex-col">
    <div class="overflow-x-auto shadow-md sm:rounded-lg">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden ">
                <table class="w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                    <thead class="bg-gray-100 dark:bg-gray-700">
                        <tr>

                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                No
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Judul
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Tanggal
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Isi
                            </th>
                            <th scope="col" class="p-4">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">

                        @foreach ($data as $value)
                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">

                            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$value -> id}}</td>
                            <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">
                            {{$value -> judul}}</td>
                            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$value -> tanggal}}</td>
                            <td class="py-4 px-6 text-sm font-medium text-gray-900 dark:text-white">
                            {{$value -> isi}}</td>
                            <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                <div class="flex">
                                    <div>
                                        <a href="{{route('cerpen.edit', ['cerpen' => $value->id])}}"
                                            class="text-blue-600 dark:text-blue-500 hover:underline">Edit</a>

                                    </div>

                                    <div class="ml-5">
                                        <form action="{{route('cerpen.delete', ['cerpen' => $value->id])}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button
                                                class="text-red-600 dark:text-red-500 hover:underline">Delete</a>
                                            </form>

                                    </div>

                                    <div class="ml-5">
                                        <a href="{{route('cerpen.show', ['cerpen' => $value->id])}}"
                                        class="text-green-600 dark:text-green-500 hover:underline">Detail</a>

                                    </div>
                                </div>


                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
