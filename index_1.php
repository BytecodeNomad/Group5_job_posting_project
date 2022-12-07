<!-- for the admin to see all posts -->
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Jobored</title>
        <link rel="stylesheet" href="output.css">
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class ="bg-gray-200" x-data="{display:false, showForm: false}">
        <nav class = "bg-white px-2 py-2 flex justify-between items-center">
                <div class="font-bold text-lg">Jobored</div> 
                <div class="flex items-center">
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                <path fill-rule="evenodd" d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                        </svg> -->
                        <input  class="w-32 md:w-96 border-2 rounded-sm ml-4" type="text" />
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 ml-3">
                                 <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z" clip-rule="evenodd" />
                        </svg>

                </div>
                <div class="rounded-full pr-5 sm:hidden">
                        <img x-on:click="display = !display" class="rounded-full w-6 h-6" src="images/person1.jpg" alt="">
                        
                        <div x-show="display" x-on:click="display = false" class="bg-gray-100 text-xs p-0.5 absolute text-center top-12 right-2 px-3 py-0.5 rounded-md">
                                <p>Maria Dane</p>
                                <p class="pt-2" x-on:click="showForm = true">Add job post</p>
                        </div>
                </div> 
                <div class="flex items-center ">
                        <div class="hover:text-pink-500 hover:border-2 rounded-full hover:border-pink-200 hover:px-0.5 hover:py-1 text-sm text-gray-300 flex justify-center md:text-pink-500 md:border-2 md:border-pink-200 md:px-0.5 md:py-1" x-on:click="showForm = true"> 
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                        <path fill-rule="evenodd" d="M7.5 5.25a3 3 0 013-3h3a3 3 0 013 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0112 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 017.5 5.455V5.25zm7.5 0v.09a49.488 49.488 0 00-6 0v-.09a1.5 1.5 0 011.5-1.5h3a1.5 1.5 0 011.5 1.5zm-3 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd" />
                                        <path d="M3 18.4v-2.796a4.3 4.3 0 00.713.31A26.226 26.226 0 0012 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 01-6.477-.427C4.047 21.128 3 19.852 3 18.4z" />
                                </svg>

                                <button class="">See All Accounts</button> 
                        </div>
                        <div class="ml-3 flex items-center">
                                <img class="w-6 h-6 rounded-full" src="images/person1.jpg" alt="">
                                <div class="text-center">
                                        <p class="font-bold mt-0 text-sm">Charles</p>
                                        <p class="text-xs text-gray-800 mt-0.5">charles@gmail.com</p>
                                </div>
                        </div>
                </div>  
        </nav>

        <main class="mt-2 mx-3">
                <div class="bg-white px-2 py-3">
                        <div class="flex">
                                        <img class="w-10 h-10 rounded-full" src="images/person1.jpg" alt="" srcset="">
                                        <div class="ml-4">
                                                <p>Charles Abdulwahab Ebiegberi</p>
                                                <p>charles@gmail.com</p>
                                        </div>
                        </div>
                        <div>
                                <span>Skills: </span>
                                <button class="inline border-2 rounded-full border-orange-500 text-sm text-gray-500 justify-center md:border md:px-4 py-0.5 ml-5">UI designer<button>      
                                <button class="inline border-2 rounded-full border-orange-500 text-sm text-gray-500 justify-center md:border md:px-4 py-0.5 ml-5">UI designer<button>      
                                <button class="inline border-2 rounded-full border-orange-500 text-sm text-gray-500 justify-center md:border md:px-4 py-0.5 ml-5">UI designer<button>      
                                <button class="inline border-2 rounded-full border-orange-500 text-sm text-gray-500 justify-center md:border md:px-4 py-0.5 ml-5">UI designer<button>      
                        </div>
                        <div class="mt-4">
                                <span>Previous Work Experiences: </span>
                                <button class="inline border-2 rounded-full border-orange-500 text-sm text-gray-500 justify-center md:border md:px-4 py-0.5 ml-5">Twitter<button>      
                                <button class="inline border-2 rounded-full border-orange-500 text-sm text-gray-500 justify-center md:border md:px-4 py-0.5 ml-5">Tesla<button>      
                                <button class="inline border-2 rounded-full border-orange-500 text-sm text-gray-500 justify-center md:border md:px-4 py-0.5 ml-5">Microsoft<button>      
                                <button class="inline border-2 rounded-full border-orange-500  text-sm text-gray-500 justify-center md:border md:px-4 py-0.5 ml-5">Google<button>      
                        </div>
                        <div class="mt-4">
                                <p class="text-center">All Posts</p>
                                <div class="grid grid-cols-3 gap-3">
                                        <div class="bg-gray-100 px-2 py-3">                       
                                                <div>
                                                        <p class="font-bold text-md text-gray-800">Looking for a web designer...</p>
                                                        <p class="text-gray-500">Looking for a web designer to work for 24 hours.</p>
                                                </div>
                                                <div class="text-center flex justify-center items-center">
                                                        <button class="inline border-2 rounded-full border-orange-500 text-sm text-gray-500 justify-center md:border md:px-4 py-0.5 ml-5">See more</button>
                                                        <button class="inline border-2 rounded-full border-orange-500 text-sm text-gray-500 justify-center md:border md:px-4 py-0.5 ml-5">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                                </svg>

                                                        </button>
                                                </div>
                                        </div>
                                        <div class="bg-gray-100 px-2 py-3">                       
                                                <div>
                                                        <p class="font-bold text-md text-gray-800">Looking for a web designer...</p>
                                                        <p class="text-gray-500">Looking for a web designer to work for 24 hours.</p>
                                                </div>
                                                <div class="text-center flex justify-center items-center">
                                                        <button class="inline border-2 rounded-full border-orange-500 text-sm text-gray-500 justify-center md:border md:px-4 py-0.5 ml-5">See more</button>
                                                        <button class="inline border-2 rounded-full border-orange-500 text-sm text-gray-500 justify-center md:border md:px-4 py-0.5 ml-5">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                                </svg>

                                                        </button>
                                                </div>
                                        </div>
                                        <div class="bg-gray-100 px-2 py-3">                       
                                                <div>
                                                        <p class="font-bold text-md text-gray-800">Looking for a web designer...</p>
                                                        <p class="text-gray-500">Looking for a web designer to work for 24 hours.</p>
                                                </div>
                                                <div class="text-center flex justify-center items-center">
                                                        <button class="inline border-2 rounded-full border-orange-500 text-sm text-gray-500 justify-center md:border md:px-4 py-0.5 ml-5">See more</button>
                                                        <button class="inline border-2 rounded-full border-orange-500 text-sm text-gray-500 justify-center md:border md:px-4 py-0.5 ml-5">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                                </svg>

                                                        </button>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <div class="flex justify-center items-center mt-2">
                                <button class="inline border-2 rounded-full border-orange-500 text-sm text-gray-500 justify-center md:border md:px-4 py-0.5 ml-5">See More Posts From User</button>
                                <span>
                                        <button class="inline border-2 rounded-full border-orange-500 text-sm text-gray-500 justify-center md:border md:px-4 py-0.5 ml-5">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg>

                                        </button>
                                </span>
                        </div>
                </div>
                
        </main>
        <a href="index1.php">index1</a>
        <a href="index2.php">index2</a>

</body>
<html>