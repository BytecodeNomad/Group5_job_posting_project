<?php 
 $pdo = new PDO("mysql:host=127.0.0.1;dbname=job_posts", "root", "");
 $statement =  $pdo->prepare("select * from posts");
 $statement->execute();
 $posts = $statement->fetchAll();

foreach($posts as $post) {
        list($first,$second,$third) = explode(",", $post["post_tags"]);
        $component = <<<TEXT
        <div class="bg-white mt-3 rounded-lg w-full py-2" key="$post[id]">
        <div class="grid custom-grid-cols gap-4">
                <div class="">
                        <img class="w-8 h-8" src="$post[img_location]" alt="" srcset="">
                </div>
                <div>
                        <p class="font-bold text-md text-gray-800">$post[heading]</p>
                        <p class="text-gray-500">$post[post_description]</p>
                </div>
        </div>
        <div class="flex mt-2 p-1.5 text-gray-600">
                <p class="bg-gray-300 p-1 rounded-sm cursor-pointer text-xs">$first</p>
                <p class="bg-gray-300 p-1 rounded-sm cursor-pointer ml-3 text-xs">$second</p>
                <p class="bg-gray-300 p-1 rounded-sm cursor-pointer ml-3 text-xs">$third</p>
        </div>
        <div class="flex justify-between mt-3">
                <div class="flex">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="yellow">
                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                         </svg>
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="transparent">
                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" stroke="black"/>
                        </svg>
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="transparent">
                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" stroke="black"/>
                        </svg>

                </div>
                <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="transparent" class="w-6 h-6">
                                <path d="M7.493 18.75c-.425 0-.82-.236-.975-.632A7.48 7.48 0 016 15.375c0-1.75.599-3.358 1.602-4.634.151-.192.373-.309.6-.397.473-.183.89-.514 1.212-.924a9.042 9.042 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75 2.25 2.25 0 012.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H14.23c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23h-.777zM2.331 10.977a11.969 11.969 0 00-.831 4.398 12 12 0 00.52 3.507c.26.85 1.084 1.368 1.973 1.368H4.9c.445 0 .72-.498.523-.898a8.963 8.963 0 01-.924-3.977c0-1.708.476-3.305 1.302-4.666.245-.403-.028-.959-.5-.959H4.25c-.832 0-1.612.453-1.918 1.227z" stroke="black"/>
                        </svg>

                </div>
        </div>
</div>


TEXT;
echo $component;
 }

 
?>
