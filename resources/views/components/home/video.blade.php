<!-- ==== Cards Section Start ==== -->
<section id="project-video" class="dark:bg-slate-800 pt-24 pb-16">
    <div class="container">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
                <div class="text-center mx-auto mb-[60px] max-w-[510px]">
                    <h2 class="font-bold text-3xl text-dark dark:text-gray-300 mb-4">
                        Projects Video Demo
                    </h2>
                    <p class="text-base text-body-color">
                        Preoject walkthrough and whatabouts
                    </p>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap -mx-4">
            @foreach($videos as $video)
            <x-video-item :video-id="$video['videoId']" :title="$video['title']" :description="$video['description']"></x-video-item>
            @endforeach
        </div>
        <div class="flex justify-center">
            <x-button-link href="https://www.youtube.com/channel/UCk2XZAxrTJ7Nc3-ebkzHRIw" variant="primary" target="_blank" class="rounded-lg">
                View All Project Videos
            </x-button-link>
        </div>
    </div>
</section>
<!-- ==== Cards Section Start ==== -->