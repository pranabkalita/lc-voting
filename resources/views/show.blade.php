<x-app-layout>
    <div>
        <a href="/" class="flex items-center font-semibold hover:underline">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            <span class="ml-2">All Ideas</span>
        </a>
    </div>

    <div class="idea-container bg-white rounded-xl flex mt-4">
        <div class="flex flex-1 py-6 px-4">
            <div class="flex-none">
                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar"
                        class="w-14 h-14 rounded-xl">
                </a>
            </div>

            <div class="w-full mx-4">
                <h4 class="text-xl font-semibold">
                    <a href="#" class="hover:underline">A random title can go here</a>
                </h4>

                <div class="text-gray-600 mt-3">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Consequatur, minima quaerat. Error similique id nesciunt nemo molestias rerum magnam nisi
                    explicabo. Impedit quis delectus facilis alias minima. Temporibus voluptates aspernatur et iure
                    excepturi natus similique, obcaecati consequuntur, illo ullam eius tempora recusandae id fuga
                    error nihil unde iusto minus voluptas delectus odio, consectetur quis. Nemo, deserunt odio?
                    Totam consequuntur fuga harum, quod mollitia velit est dicta, omnis iste alias magni, possimus
                    itaque. Deleniti, nemo. Enim delectus, odit explicabo reprehenderit, et pariatur praesentium,
                    ducimus laborum ex magni esse ratione! Repudiandae voluptate odit eos tempore doloribus ex vel
                    minus saepe inventore excepturi?
                </div>

                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                        <div class="font-bold text-gray-900">John Doe</div>
                        <div>&bull;</div>
                        <div>10 Hours ago</div>
                        <div>&bull;</div>
                        <div>Category 1</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 Comments</div>
                    </div>

                    <div class="flex items-center space-x-2">
                        <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                            Open
                        </div>

                        <button
                            x-data="{ isOpen: false }"
                            x-on:click="isOpen = !isOpen"
                            class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 border transition duration-150 ease-in py-2 px-3"
                        >
                            <svg fill="currentColor" width="24" height="6">
                                <path
                                    d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                    style="color: rgba(163, 163, 163, .5)">
                            </svg>

                            <ul
                                x-cloak
                                x-show="isOpen"
                                x-transition.origin.top.left
                                x-on:click.away="isOpen = false"
                                x-on:keydown.escape.window="isOpen = false"
                                class="absolute w-44 text-left font-semibold bg-white rounded-xl py-3 ml-8 shadow-dialog"
                            >
                                <li>
                                    <a href="#"
                                        class="hover:bg-gray-100 px-5 py-3 block transition duration-150 ease-in">
                                        Mark as Spam
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="hover:bg-gray-100 px-5 py-3 block transition duration-150 ease-in">
                                        Delete Post
                                    </a>
                                </li>
                            </ul>
                        </button>
                    </div>
                </div>


            </div>
        </div>
    </div> <!-- end idea-container -->

    <div class="button-container flex items-center justify-between mt-6">
        <div class="flex items-center space-x-4 ml-6">
            <div x-data="{ isOpen: false }" class="relative">
                <button x-on:click="isOpen = !isOpen" type="button" class="flex items-center justify-center h-11 text-white text-sm w-32 bg-blue font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3">
                    Reply
                </button>

                <div
                    x-show="isOpen"
                    x-transition.origin.top.left
                    x-on:click.away="isOpen = false"
                    x-on:keydown.escape.window="isOpen = false"
                    class="absolute z-10 w-104 text-left font-semibold text-sm bg-white shadow-dialog rounded-xl mt-2">
                    <form action="#" class="space-y-4 px-4 py-6">
                        <div>
                            <textarea name="post_comment" id="post_comment" cols="30" rows="4" class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2" placeholder="Go ahead, don't be shy.Share your thoughts..."></textarea>
                        </div>

                        <div class="flex items-center space-x-3">
                            <button type="button"
                                class="flex items-center justify-center h-11 text-white text-sm w-1/2 bg-blue font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3">
                                Post Comment
                            </button>

                            <button type="button"
                                class="flex items-center justify-center w-32 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                                <svg class="text-gray-600 w-4 transform -rotate-45" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                </svg>
                                <span class="ml-1">Attach</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div x-data="{ isOpen: false }" class="relative">
                <button x-on:click="isOpen = !isOpen" type="button" class="flex items-center justify-center h-11 w-36 text-sm bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                    <span>Set Status</span>

                    <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div
                    x-cloak
                    x-show="isOpen"
                    x-transition.origin.top.left
                    x-on:click.away="isOpen = false"
                    x-on:keydown.escape.window="isOpen = false"
                    class="absolute z-20 w-76 text-left font-semibold text-sm bg-white shadow-dialog rounded-xl mt-2"
                >
                    <form action="#" class="space-y-4 px-4 py-6">
                        <div class="space-y-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="bg-gray-200 text-gray-600 border-none" name="status" value="1" checked>
                                    <span class="ml-2">Open</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="bg-gray-200 text-purple border-none" name="status" value="2">
                                    <span class="ml-2">Considering</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="bg-gray-200 text-yellow border-none" name="status" value="3">
                                    <span class="ml-2">In Progress</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="bg-gray-200 text-green border-none" name="status" value="3">
                                    <span class="ml-2">Implemented</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="bg-gray-200 text-red border-none" name="status" value="3">
                                    <span class="ml-2">Closed</span>
                                </label>
                            </div>
                        </div>

                        <div>
                            <textarea name="update_comment" id="update_comment" cols="30" rows="3" class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2" placeholder="Add an update comment (optional)"></textarea>
                        </div>

                        <div class="flex justify-between items-center space-x-3">
                            <button type="button"
                                class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                                <svg class="text-gray-600 w-4 transform -rotate-45" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                </svg>
                                <span class="ml-1">Attach</span>
                            </button>

                            <button type="submit"
                                class="flex items-center justify-center w-1/2 h-11 text-white text-xs bg-blue font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3">
                                <span class="">Update</span>
                            </button>
                        </div>

                        <div>
                            <label class="font-normal inline-flex items-center">
                                <input type="checkbox" name="notify_voters" class="rounded bg-gray-200" checked="">
                                <span class="ml-2">Notify all Voters</span>
                            </label>
                        </div>
                    </form>
                </div>
            </div>

        </div>

        <div class="flex items-center space-x-3">
            <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
                <div class="text-xl leading-snug">12</div>
                <div class="text-gray-400 text-xs leading-none">Votes</div>
            </div>

            <button type="button" class="h-11 w-32 text-xs bg-gray-200 font-semibold uppercase rounded-xl border
                    border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                <span>Vote</span>
            </button>
        </div>
    </div> <!-- ebd buttons-container -->

    <div class="comments-container relative space-y-6 ml-22 my-8 pt-6 mt-1">
        <div class="comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 py-6 px-4">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar"
                            class="w-14 h-14 rounded-xl">
                    </a>
                </div>

                <div class="w-full mx-4">
                    {{-- <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4> --}}

                    <div class="text-gray-600 mt-3 line-clamp-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Consequatur, minima quaerat. Error similique id nesciunt nemo molestias rerum magnam nisi
                        explicabo. Impedit quis delectus facilis alias minima. Temporibus voluptates aspernatur et iure
                        excepturi natus similique, obcaecati consequuntur, illo ullam eius tempora recusandae id fuga
                        error nihil unde iusto minus voluptas delectus odio, consectetur quis. Nemo, deserunt odio?
                        Totam consequuntur fuga harum, quod mollitia velit est dicta, omnis iste alias magni, possimus
                        itaque. Deleniti, nemo. Enim delectus, odit explicabo reprehenderit, et pariatur praesentium,
                        ducimus laborum ex magni esse ratione! Repudiandae voluptate odit eos tempore doloribus ex vel
                        minus saepe inventore excepturi?
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 Hours ago</div>
                        </div>

                        <div class="flex items-center space-x-2">
                            <button
                                x-data="{ isOpen: false }"
                                x-on:click="isOpen = !isOpen"
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 border transition duration-150 ease-in py-2 px-3"
                            >
                                <svg fill="currentColor" width="24" height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                        style="color: rgba(163, 163, 163, .5)">
                                </svg>

                                <ul
                                    x-cloak
                                    x-show="isOpen"
                                    x-transition.origin.top.left
                                    x-on:click.away="isOpen = false"
                                    x-on:keydown.escape.window="isOpen = false"
                                    class="absolute z-10 w-44 text-left font-semibold bg-white rounded-xl py-3 ml-8 shadow-dialog"
                                >
                                    <li>
                                        <a href="#"
                                            class="hover:bg-gray-100 px-5 py-3 block transition duration-150 ease-in">
                                            Mark as Spam
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="hover:bg-gray-100 px-5 py-3 block transition duration-150 ease-in">
                                            Delete Post
                                        </a>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end comment-container -->

        <div class="is-admin comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 py-6 px-4">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar"
                            class="w-14 h-14 rounded-xl">
                    </a>
                    <div class="text-center uppercase text-blue text-xxs font-bold mt-1">Admin</div>
                </div>

                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Status Changed to "Under Consideration"</a>
                    </h4>

                    <div class="text-gray-600 mt-3 line-clamp-3">Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit.
                        Consequatur, minima quaerat. Error similique id nesciunt nemo molestias rerum magnam nisi
                        explicabo. Impedit quis delectus facilis alias minima. Temporibus voluptates aspernatur et iure
                        excepturi natus similique, obcaecati consequuntur, illo ullam eius tempora recusandae id fuga
                        error nihil unde iusto minus voluptas delectus odio, consectetur quis. Nemo, deserunt odio?
                        Totam consequuntur fuga harum, quod mollitia velit est dicta, omnis iste alias magni, possimus
                        itaque. Deleniti, nemo. Enim delectus, odit explicabo reprehenderit, et pariatur praesentium,
                        ducimus laborum ex magni esse ratione! Repudiandae voluptate odit eos tempore doloribus ex vel
                        minus saepe inventore excepturi?
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-blue">Andrea</div>
                            <div>&bull;</div>
                            <div>10 Hours ago</div>
                        </div>

                        <div class="flex items-center space-x-2">
                            <button
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 border transition duration-150 ease-in py-2 px-3">
                                <svg fill="currentColor" width="24" height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                        style="color: rgba(163, 163, 163, .5)">
                                </svg>

                                <ul class="hidden absolute w-44 text-left font-semibold bg-white rounded-xl py-3 ml-8 shadow-dialog">
                                    <li>
                                        <a href="#"
                                            class="hover:bg-gray-100 px-5 py-3 block transition duration-150 ease-in">
                                            Mark as Spam
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="hover:bg-gray-100 px-5 py-3 block transition duration-150 ease-in">
                                            Delete Post
                                        </a>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end comment-container -->

        <div class="comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 py-6 px-4">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar"
                            class="w-14 h-14 rounded-xl">
                    </a>
                </div>

                <div class="w-full mx-4">
                    {{-- <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4> --}}

                    <div class="text-gray-600 mt-3 line-clamp-3">Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit.
                        Consequatur, minima quaerat. Error similique id nesciunt nemo molestias rerum magnam nisi
                        explicabo. Impedit quis delectus facilis alias minima. Temporibus voluptates aspernatur et iure
                        excepturi natus similique, obcaecati consequuntur, illo ullam eius tempora recusandae id fuga
                        error nihil unde iusto minus voluptas delectus odio, consectetur quis. Nemo, deserunt odio?
                        Totam consequuntur fuga harum, quod mollitia velit est dicta, omnis iste alias magni, possimus
                        itaque. Deleniti, nemo. Enim delectus, odit explicabo reprehenderit, et pariatur praesentium,
                        ducimus laborum ex magni esse ratione! Repudiandae voluptate odit eos tempore doloribus ex vel
                        minus saepe inventore excepturi?
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 Hours ago</div>
                        </div>

                        <div class="flex items-center space-x-2">
                            <button
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 border transition duration-150 ease-in py-2 px-3">
                                <svg fill="currentColor" width="24" height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                        style="color: rgba(163, 163, 163, .5)">
                                </svg>

                                <ul class="hidden absolute w-44 text-left font-semibold bg-white rounded-xl py-3 ml-8 shadow-dialog">
                                    <li>
                                        <a href="#"
                                            class="hover:bg-gray-100 px-5 py-3 block transition duration-150 ease-in">
                                            Mark as Spam
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="hover:bg-gray-100 px-5 py-3 block transition duration-150 ease-in">
                                            Delete Post
                                        </a>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end comment-container -->
    </div> <!-- end comments-container -->
</x-app-layout>
