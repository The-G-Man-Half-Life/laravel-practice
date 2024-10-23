@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-3x1 font-bold text-center text-gray-800 mb-6">Categories list</h1>

    <div class="flex justify-end mb-4">
        <a href="{{ route('categories.create')}}" 
        class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">New category</a>
    </div>
</div>

<div class="bg-white shadow-md rounded-1g overflow-hidden">
    <table class="bg-white shadow-md rounded-1g overflow-hidden">
        <thead class="bg-gray-100">
            <tr>
               <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Id</th>
               <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Name</th>
               <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Description</th>
               <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Actions</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @forelse ($categories as $category)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{$category->id}}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{$category->name}}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{$category->}}</td>
                </tr>
            @empty
                
            @endforelse
        </tbody>
    </table>

</div>