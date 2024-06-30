<div>
    <div class="container mx-auto mt-5">
        <h2 class="text-2xl mb-4">User Projects and Tasks</h2>

        <div class="mb-4">
            <h3 class="text-xl">Projects:</h3>
            <ul class="list-disc ml-5">
                @foreach($projects as $project)
                    <li>{{ $project }}</li>
                @endforeach
            </ul>
        </div>

        <div class="mb-4">
            <h3 class="text-xl">Tasks:</h3>
            <ul class="list-disc ml-5">
                @foreach($tasks as $task)
                    <li>{{ $task }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
