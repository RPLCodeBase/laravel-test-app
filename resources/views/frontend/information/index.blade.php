<x-bootstrap-layout>
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">


        </div>

        </div>
    </section><!-- End Cta Section -->
    @foreach($informations as $info)
        <section id="skills" class="skills">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{ asset('storage').'/information/'.$info->image }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                        <h4 class="medpens">{{$info->title}}</h4>
                        <p class="fst-italic">
                            {{Str::limit($info->description, 200)}}
                        </p>
                        <a href="{{ route('info.show', $info->slug )}}" class="btn-get-started scrollto">Baca Selengkapnya...</a>

                    </div>

                </div>
            </div>

            </div>
        </section><!-- End Skills Section -->
    @endforeach
    {{ $informations->links() }}
</x-bootstrap-layout>
