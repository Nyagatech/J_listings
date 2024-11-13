<div class="m-4">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-square bg-light m-2" viewBox="0 0 16 16">
        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
    </svg>
    <span class="fw-bold">Featured Jobs</span>
</div>

@if($jobs->isEmpty())
    <div class="m-4 text-center">
        <p class="text-light">No jobs available at the moment.</p>
    </div>
@else
    @foreach($jobs as $job)
        <section class="container bg-black m-4 d-flex justify-content-center align-items-center" style="max-width: 400px;">
            <div class="bg-dark text-white p-4 shadow-lg rounded-lg d-flex flex-column text-center fw-bold">
                <div class="text-start text-sm text-light">{{ $job->company }}</div>
                <div class="py-4 fw-bold text-light">
                    <h4>{{ $job->title }}</h4>
                    <p>{{ $job->job_type }} - {{ $job->salary }}</p>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-auto flex-wrap">
                    <div>
                        <a href="#" class="px-4 py-2 rounded-pill bg-black fs-xs text-white hover:bg-white hover:text-black">Tag</a>
                    </div>
                    <img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fwallpaperheart.com%2Fwp-content%2Fuploads%2F2018%2F04%2Fbest-scenery-wallpaper-scenery-images.jpg&f=1&nofb=1&ipt=24246c25138b49c0b6bbc43458e31a4b9689fe4737990e2d40ac02c326c848d0&ipo=images" 
                        alt="Scenic landscape" 
                        class="img-fluid w-25 image-fit rounded-lg hover:scale-105 transition-transform duration-300">
                </div>
            </div>
        </section>
    @endforeach
@endif


<style>
    /* Hover Effects for Tags */
    .hover\:bg-white:hover {
        background-color: white !important;
        color: #000000 !important;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.1);
    }

    /* Hover Effects for Image */
    .hover\:scale-105:hover {
        transform: scale(1.05);
    }

    .transition-transform {
        transition: transform 0.6s ease;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .d-flex {
            flex-direction: column;
        }
        
        .w-25 {
            width: 100%;
            margin-top: 1rem; 
        }

        .text-start {
            text-align: center; 
        }
    }
</style>