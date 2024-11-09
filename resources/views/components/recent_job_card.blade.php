<div class=" m-4"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-square bg-light m-2" viewBox="0 0 16 16">
  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
</svg> <span class="fw-bold">Recent Jobs</span></div>
<section class="job-card-section">

    <div class="container bg-black m-4 p-4 shadow-lg rounded-lg bg-opacity-50" style="max-width: 95%;">
        <div class="row align-items-center">
            <div class="col-12 col-sm-4 text-center mb-3 mb-sm-0">
                <img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fwallpaperheart.com%2Fwp-content%2Fuploads%2F2018%2F04%2Fbest-scenery-wallpaper-scenery-images.jpg&f=1&nofb=1&ipt=24246c25138b49c0b6bbc43458e31a4b9689fe4737990e2d40ac02c326c848d0&ipo=images" 
                     alt="" class="img-fluid rounded-lg" style="max-height: 120px; height: auto; width: auto;">
            </div>
            <div class="col-12 col-sm-8">
                <p class="text-secondary fw-bold mb-1">Company Name</p>
                <h5 class="fw-bold mb-1">Job Title</h5>
                <p class="text-secondary fs-7 mb-2">Location - Salary</p>
                <a class="text-primary mb-2">Job Url</a>
            </div>
        </div>

        <!-- Tags section -->
        <div class="d-flex flex-row justify-content-end flex-wrap mt-3">
            <div class="me-2 mb-1">
                <a href="#" class="px-2 py-1 rounded-pill bg-dark fs-6 text-white hover:bg-white hover:text-black d-flex align-items-center" style="max-width: 100px;">
                    <i class="fas fa-filter me-1"></i> Tag 1
                </a>
            </div>
            <div class="me-2 mb-1">
                <a href="#" class="px-2 py-1 rounded-pill bg-dark fs-6 text-white hover:bg-white hover:text-black d-flex align-items-center" style="max-width: 100px;">
                    <i class="fas fa-filter me-1"></i> Tag 2
                </a>
            </div>
            <div class="me-2 mb-1">
                <a href="#" class="px-2 py-1 rounded-pill bg-dark fs-6 text-white hover:bg-white hover:text-black d-flex align-items-center" style="max-width: 100px;">
                    <i class="fas fa-filter me-1"></i> Tag 3
                </a>
            </div>
        </div>
    </div>
</section>

<style>
    .job-card-section {
        transition: transform 0.5s ease, box-shadow 0.5s ease;
    }

    .job-card-section:hover {
        transform: scale(1.02); /* Slightly zoom the section */
        box-shadow: 0 8px 20px rgba(50, 60, 50, 0.5); /* Increased shadow on hover */
    }

    .text-light {
        color: #ffffff; /* Light text color */
    }

    .text-secondary {
        color: #6c757d; /* Secondary text color */
    }

    .shadow-lg {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Initial shadow effect */
    }

    .m-4 {
        margin: 20px; /* Custom margin */
    }
    
    .p-4 {
        padding: 20px; /* Custom padding */
    }

    .d-flex .rounded-pill {
        font-size: 0.75rem; /* Reduced font size for better compactness */
    }
</style>
