@extends('layouts.app')

@section('title', 'List of Tasks')

@section('content')
    <nav class="mb-4">
        <a href="#" class="font-medium text-gray-700 underline decoration-pink-500">
            Add Task!
        </a>
    </nav>

    <ul role="list" class="divide-y divide-gray-100">
        @forelse ($tasks as $task)
            <li class="flex justify-between gap-x-6 py-5">
                <div class="flex min-w-0 gap-x-4">
                    <div class="min-w-0 flex-auto">
                        <a href="{{ route('tasks.show', $task->id) }}" @class(['line-through' => $task->completed])
                            class="text-sm font-semibold leading-6 text-gray-900">{{ $task->title }}</a>
                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ $task->description }}</p>
                    </div>
                </div>
                <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                    <p class="text-sm leading-6 text-gray-900">Completed</p>
                    <p class="mt-1 text-xs leading-5 text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h
                            ago</time></p>
                </div>
            </li>
        @empty
            <div>There aren't tasks!</div>
        @endforelse
    </ul>

    <div class="mt-4">
        {{ $tasks->links() }}
    </div>
    </div>
@endsection
