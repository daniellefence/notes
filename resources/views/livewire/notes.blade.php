<div>

    <div class=" ">
        <h2 class="text-sm/6 font-semibold text-gray-900">Notes</h2>
        <ul role="list" class="mt-6 space-y-2">
            @foreach($notes as $note)
                <li class="relative flex gap-x-4 items-start">
                    <div class="absolute top-0 -bottom-6 left-0 flex w-6 justify-center">
                        <div class="w-px bg-gray-200"></div>
                    </div>
                    <img src="{{$note->user->profile_photo_url}}" alt=""
                         class="relative mt-1 size-6 flex-none rounded-full bg-gray-50">
                    <div class="flex-auto rounded-md p-3 ring-1 ring-gray-200 ring-inset">
                        <div class="flex justify-between gap-x-4">
                            <div class="text-xs leading-tight text-gray-500">
                                <span class="font-medium text-gray-900">
                                    {{$note->user->name}}
                                </span> noted
                            </div>
                            <div class="flex flex-col justify-center text-xs leading-none text-gray-500 gap-1">
                                <span>{{$note->created_at->diffForHumans()}}</span>
                                <span>{{$note->created_at->format('m/d/y')}}</span>
                            </div>
                        </div>
                        <p class="text-sm/6 text-gray-500">
                            {!! $note->note !!}
                        </p>
                    </div>
                </li>
            @endforeach
        </ul>

        <!-- New comment form -->
        <div class="mt-6 flex gap-x-3">
            @auth
                <img src="{{auth()->user()->profile_photo_url}}" alt=""
                     class="size-6 flex-none rounded-full bg-gray-50">

            @endauth
            <form wire:submit="save" class="relative flex-auto">
                <div class="overflow-hidden rounded-lg pb-4 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <x-df::input variant="textarea" wire:model="note"/>
                </div>
                <x-input-error for="note"/>

                <div class="flex justify-end py-2 pr-2 pl-3">
                    <x-df::button type="submit" variant="success">Post</x-df::button>
                </div>
            </form>
        </div>
    </div>
</div>