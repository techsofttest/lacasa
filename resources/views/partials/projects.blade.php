@foreach($projects as $project)
    <div class="col-lg-4 col-md-6 col-sm-6 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
        <div class="tp-project-item-wrap p-relative">
            <div class="tp-project-item fix">
                <div class="tp-project-thumb">
                    <a href="{{ url('project/'.$project->slug) }}">
                        <div class="lightbox-button__wrapper"></div>
                        <img class="w-100" src="{{ asset('storage/'.$project->thumb_image) }}" alt="">
                    </a>
                </div>
            </div>
            <div class="tp-project-content black-bg">
                <h6 class="tp-project-title">
                    <a href="{{ url('project/'.$project->slug) }}"></a>
                </h6>
            </div>
            <div class="tp-project-last-title">
                <h6><a href="{{ url('project/'.$project->slug) }}">{{ $project->name }}</a></h6>
            </div>
        </div>
    </div>
@endforeach
