@extends('layouts.app')

@section('title', $task->title)

@section('content')
    <nav class="mb-4">
        <a href="{{ route('tasks') }}" class="font-medium text-gray-700 underline decoration-pink-500">
            🔙 to the Tasks List!
        </a>
    </nav>
@endsection
