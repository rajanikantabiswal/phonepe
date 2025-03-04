<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Phonepay Payment</title>
</head>

<body>
    <form action="{{ url('pay') }}" method="get">
        @csrf
        <section style="background-color: #eee;">
            <h3 class="text-center">PHONEPAY PAYMENT DEMO BY CODE 180 </h3>
            <div class="container py-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card rounded-3">
                            <div class="card-body mx-1 my-2">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <i class="fab fa-cc-visa fa-4x text-black pe-3"></i>
                                    </div>
                                    <div>
                                        <p class="d-flex flex-column mb-0">
                                            <b>Code 180 Demo Card</b><span class="small text-muted">**** 7420</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="pt-3">
                                    <div class="d-flex flex-row pb-3">
                                        <div class="rounded border border-primary border-2 d-flex w-100 p-3 align-items-center"
                                            style="background-color: rgba(18, 101, 241, 0.07);">
                                            <div class="d-flex align-items-center pe-3">
                                                <input class="form-check-input" type="radio" name="radioNoLabelX"
                                                    id="radioNoLabel11" value="" aria-label="..." checked />
                                            </div>
                                            <div class="d-flex flex-column">
                                                <p class="mb-1 small text-primary">Total amount due</p>
                                                <h6 class="mb-0 text-primary">INR-1000</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center pb-1">
                                    <a href="#!" class="text-muted">Go back</a>
                                    <button type="submit" class="btn btn-danger btn-lg">Pay amount</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
    <section style="background-color: #d5d4d4;">
        <div class="container py-5">
            <div class="row d-flex justify-content-center">
                <h3 class="text-center">CHECKOUT RESPONSE</h3>
                {{ $res_data }}
                <?php if (isset($res_data_status)) {
                    echo $res_data_status;
                } ?>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
