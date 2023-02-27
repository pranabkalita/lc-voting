<div
    x-cloak
    x-data="{ isOpen: false }"
    x-init="
        Livewire.on('ideaWasMarkedAsSpam', () => {
            isOpen = false
        })
    "
    x-show="isOpen"
    x-on:keydown.escape.window="isOpen = false"
    @custom-show-spam-modal.window="
        isOpen = true
        $nextTick(() => $refs.confirmButton.focus())
    "
    class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">

    <div
        x-show="isOpen"
        x-transition.opacity.duration.300ms
        class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity">
    </div>

    <div
        x-show="isOpen"
        x-transition.opacity.duration.300ms
        class="fixed inset-0 z-10 overflow-y-auto"
    >
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                            <svg class="h-6 w-6 text-red" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">Mark Idea as Spam</h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500">Are you sure you want to mark this idea as spam ?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <button wire:click.prevent="markAsSpam" x-ref="confirmButton" type="button" class="inline-flex w-full justify-center rounded-md border border-transparent bg-blue px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-blue-hover focus:outline-none focus:ring-2 focus:ring-blue focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm">Mark as Spam</button>
                    <button x-on:click="isOpen = false" type="button" class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue focus:ring-offset-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
