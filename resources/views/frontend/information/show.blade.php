<x-bootstrap-layout>
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">


        </div>

        </div>
    </section><!-- End Cta Section -->
{{--    Pages news by id--}}
    <main class="container">
        <div class="row g-5">
            <article class="blog-post">
                <h2 class="blog-post-title">{{$information->title}}</h2>
                <p class="blog-post-meta">{{$information->created_at->format('d F,Y H:i:s')}}<a href="">{{$information->author}}</a></p>

    <div class="blog-post-content">
                    <img src="{{ asset('storage').'/information/'.$information->image }}" class="img-fluid" alt="">
                    <p>
                        {{$information->description}}
                    </p>
        </div>
            </article>
        </div>
    </main>
</x-bootstrap-layout>
