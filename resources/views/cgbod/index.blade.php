@extends('layouts.app')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Welcome to cgbod {{ auth()->user()->name }} 👋</h1>

    @if(session('success'))
        <div class="bg-green-200 p-2 rounded mb-4">{{ session('success') }}</div>
    @endif

    <a href="{{ route('cgbod.projects.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">
       Create first project
    </a>

    <h2 class="mt-6 text-xl font-semibold">Projects List</h2>
    @if($projects->isEmpty())
        <p>You don't have any projects, yet...</p>
    @else
        <ul class="mt-2">
            @foreach($projects as $project)
                <li class="border p-2 my-1 rounded">{{ $project->name }}</li>
            @endforeach
        </ul>
    @endif
</div>
@endsection
