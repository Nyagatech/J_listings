<section class="container my-4">
    <div class="text-start text-sm text-light mb-3">
        <h4>Explore</h4>
        <span class="text-secondary">Filter jobs by tags:</span>
    </div>
    <div class="d-flex flex-row flex-wrap justify-content-start align-items-center">
        <div class="me-2 mb-2">
            <a href="#" class="px-3 py-1 rounded-pill bg-dark fs-xs text-white hover:bg-white hover:text-black d-flex align-items-center">
                <i class="fas fa-filter me-2"></i> <!-- Filter icon -->
                Tag 1
            </a>
        </div>
        <div class="me-2 mb-2">
            <a href="#" class="px-3 py-1 rounded-pill bg-dark fs-xs text-white hover:bg-white hover:text-black d-flex align-items-center">
                <i class="fas fa-filter me-2"></i> <!-- Another filter icon -->
                Tag 2
            </a>
        </div>
        <div class="me-2 mb-2">
            <a href="#" class="px-3 py-1 rounded-pill bg-dark fs-xs text-white hover:bg-white hover:text-black d-flex align-items-center">
                <i class="fas fa-filter me-2"></i> <!-- Another filter icon -->
                Tag 3
            </a>
        </div>
    </div>
</section>

<style>
    .bg-dark {
        background-color: #343a40; /* Dark background color */
    }

    .text-light {
        color: #ffffff; /* Light text color */
    }

    .text-secondary {
        color: #6c757d; /* Secondary text color */
    }

    .hover\:bg-white:hover {
        background-color: white !important;
        color: #343a40 !important; /* Change text color to dark on hover */
    }

    .rounded-pill {
        border-radius: 50rem; /* Pill-shaped buttons */
    }

    /* Optional: Ensure the pills don't get too large on small screens */
    @media (max-width: 576px) {
        .fs-xs {
            font-size: 0.75rem; /* Adjust font size for smaller devices */
        }
        /* Reduced horizontal padding for small screens */
        .px-3 {
            padding-left: 0.5rem;
            padding-right: 0.5rem;
        }
    }
</style>
