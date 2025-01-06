@extends('layouts.empty')


@section('container')
    <div class="flex-1 p-6">
        <div class="bg-white p-10 rounded-lg mb-12 shadow-lg">
            <div class="flex justify-between items-center">
                <div>
                    <h2 class="text-2xl font-semibold mb-4">
                        Upload: Project
                    </h2>
                    <p class="text-gray-600">
                        Judul project:
                        <input class="border border-gray-300 rounded-lg p-2 ml-2" type="text" />
                    </p>
                </div>
                <button
                    class="bg-gradient-to-r from-blue-500 to-blue-700 text-white px-4 py-2 rounded-full hover:from-blue-600 hover:to-purple-600 flex items-center">
                    <i class="fas fa-upload mr-2">
                    </i>
                    Upload
                </button>
            </div>
        </div>
        <div class="mb-12">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold">
                    Type Project
                </h3>
            </div>
            <div class="flex items-center space-x-4">
                <label class="flex items-center">
                    <input class="mr-2" name="projectType" type="radio" value="Mobile" />
                    Mobile
                </label>
                <label class="flex items-center">
                    <input class="mr-2" name="projectType" type="radio" value="Website" />
                    Website
                </label>
            </div>
        </div>
        <div>
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold">
                    Upload: Link
                </h3>
                <button class="text-blue-600 hover:text-blue-800">
                    <i class="fas fa-plus">
                    </i>
                </button>
            </div>
            <table class="w-full bg-white rounded-lg overflow-hidden mb-12 shadow-lg">
                <thead>
                    <tr class="bg-gray-200 text-left rounded-t-lg">
                        <th class="p-4">
                            No
                        </th>
                        <th class="p-4">
                            Nama Link
                        </th>
                        <th class="p-4">
                            Link
                        </th>
                        <th class="p-4">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-200 mb-2 rounded-lg hover:bg-gray-100">
                        <td class="p-4 rounded-l-lg">
                            1
                        </td>
                        <td class="p-4">
                            Link 1
                        </td>
                        <td class="p-4">
                            <a class="text-blue-600" href="#">
                                https://example.com
                            </a>
                        </td>
                        <td class="p-4 rounded-r-lg">
                            <button class="text-blue-600 mr-2">
                                <i class="fas fa-edit">
                                </i>
                            </button>
                            <button class="text-red-600">
                                <i class="fas fa-trash">
                                </i>
                            </button>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 mb-2 rounded-lg hover:bg-gray-100">
                        <td class="p-4 rounded-l-lg">
                            2
                        </td>
                        <td class="p-4">
                            Link 2
                        </td>
                        <td class="p-4">
                            <a class="text-blue-600" href="#">
                                https://example.com
                            </a>
                        </td>
                        <td class="p-4 rounded-r-lg">
                            <button class="text-blue-600 mr-2">
                                <i class="fas fa-edit">
                                </i>
                            </button>
                            <button class="text-red-600">
                                <i class="fas fa-trash">
                                </i>
                            </button>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 mb-2 rounded-lg hover:bg-gray-100">
                        <td class="p-4 rounded-l-lg">
                            3
                        </td>
                        <td class="p-4">
                            Link 3
                        </td>
                        <td class="p-4">
                            <a class="text-blue-600" href="#">
                                https://example.com
                            </a>
                        </td>
                        <td class="p-4 rounded-r-lg">
                            <button class="text-blue-600 mr-2">
                                <i class="fas fa-edit">
                                </i>
                            </button>
                            <button class="text-red-600">
                                <i class="fas fa-trash">
                                </i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold">
                    Upload: Dokumen
                </h3>
                <button class="text-blue-600 hover:text-blue-800">
                    <i class="fas fa-plus">
                    </i>
                </button>
            </div>
            <table class="w-full bg-white rounded-lg overflow-hidden shadow-lg">
                <thead>
                    <tr class="bg-gray-200 text-left rounded-t-lg">
                        <th class="p-4">
                            No
                        </th>
                        <th class="p-4">
                            Nama Doc
                        </th>
                        <th class="p-4">
                            Doc
                        </th>
                        <th class="p-4">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
@endsection
