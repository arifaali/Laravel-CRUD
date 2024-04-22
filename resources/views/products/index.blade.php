@extends('layouts.app')
@section('content')
<div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
<div class="relative overflow-x-auto">
<h2 class="text-2xl font-bold tracking-tight text-gray-900">Products</h2>
   
   @if(session()->has('success'))
   <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
 <span class="font-medium">Success alert!</span> {{session('success')}}
</div>
   @endif
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Product name
                </th>
                <th scope="col" class="px-6 py-3">
                    Quantity
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{$product->name}}
                </th>
                <td class="px-6 py-4">
                {{$product->qty}}
                </td>
                <td class="px-6 py-4">
                {{$product->price}}
                </td>
                <td class="px-6 py-4">
                <p class="mt-1 text-sm text-gray-500 hover:cursor-pointer">
                    <a href="{{ route('product-edit', ['product' =>$product]) }}">Edit</a>
                    <form method="POST" action="{{ route('product-destroy', ['product' => $product]) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>

                </p>
               
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection
