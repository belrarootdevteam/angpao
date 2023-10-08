<x-header />

<main>
    <div class="container mt-60">
        <h1>Templates</h1>
        <hr />
        <div class="container">
            <div class="row d-flex gap-10">
                <?php for ($i=0; $i < 12; $i++) { ?>
                <div class="col-sm-6 col-md-6 col-lg-4 mb-4">
                    <img class="w-100 br-20" src="{{ asset('./images/img_300_200.png') }}" alt="">
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <div class="d-flex flex-column">
                            <p class="m-0 fs-12 fw-400">Templates Name</p>
                            <span class="fs-12 fw-400">A premium Templates admin</span>
                        </div>
                        <button class="btn btn-primary br-20 max-h-20 p-0 m-0 fs-12 fw-400"
                            style="padding: 1px 6px !important;">$29 Buy Now</button>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</main>

<x-footer />
