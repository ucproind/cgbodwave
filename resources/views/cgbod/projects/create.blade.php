@extends('layouts.app')

@section('content')
<div class="p-6 max-w-md">
    <h1 class="text-xl font-bold mb-4">Create new project</h1>

    <form method="POST" action="{{ route('cgbod.projects.store') }}">
        @csrf

        <input
            type="text"
            name="name"
            placeholder="Project Name"
            class="w-full border p-2 rounded"
            required
        >

        <button class="mt-4 bg-blue-600 text-white px-4 py-2 rounded">
           Create project
        </button>
    </form>
</div>
@endsection
