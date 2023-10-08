<x-header />

<main>
    <div class="container mt-60">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-9">
                <div class="mb-4">
                    <div class="text-center">
                        <h3 class="mb-3 fs-20 fw-400">ตะกร้าสินค้า ( จำนวน Default 0)</h3>
                    </div>
                    <div class="row mb-4 bg-D9D9D9 p-8 br-30  gap-4">
                        @for ($i = 0; $i < 6; $i++)
                            <div class="col-12 d-flex justify-content-between align-items-center gap-4">
                                <div class=" d-flex justify-content-between w-100 bg-FFFFFF br-20 p-4">
                                    <p class="fs-16">สินค้า TEST SHOP TMP</p>
                                    <span>฿ 4,999</span>
                                </div>
                                <div
                                    class=" d-flex justify-content-between bg-FFFFFF br-20 p-2 max-h-40 w-100 max-w-100">
                                    <p>
                                        << /p>
                                            <span>1</span>
                                            <p>></p>
                                </div>
                                <svg class="w-100 h-100 max-h-28 max-w-24 cursor-pointer" width="24" height="28"
                                    viewBox="0 0 24 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="&#240;&#159;&#166;&#134; icon &#34;trash&#34;">
                                        <path id="Vector"
                                            d="M10.2857 0C8.4 0 6.85714 1.54286 6.85714 3.42857H3.42857C1.54286 3.42857 0 4.97143 0 6.85714H24C24 4.97143 22.4571 3.42857 20.5714 3.42857H17.1429C17.1429 1.54286 15.6 0 13.7143 0H10.2857ZM3.42857 10.2857V26.7771C3.42857 27.1543 3.70286 27.4286 4.08 27.4286H19.9543C20.3314 27.4286 20.6057 27.1543 20.6057 26.7771V10.2857H17.1771V22.2857C17.1771 23.2457 16.4229 24 15.4629 24C14.5029 24 13.7486 23.2457 13.7486 22.2857V10.2857H10.32V22.2857C10.32 23.2457 9.56571 24 8.60571 24C7.64571 24 6.89143 23.2457 6.89143 22.2857V10.2857H3.46286H3.42857Z"
                                            fill="black" />
                                    </g>
                                </svg>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-3 mb-43 mt-40 d-flex justify-content-end flex-column">
                <div class="d-flex mb-4 gap-2 bg-D9D9D9 w-100 h-100 br-20 p-30 flex-column justify-content-between">
                    <div class="d-flex flex-column">
                        <div class="d-flex justify-content-between mb-4">
                            <p class="fs-16">ยอดรวม</p>
                            <span class="fs-16">฿ 4,999</span>
                        </div>
                        <div class="d-flex justify-content-between mb-4">
                            <p class="fs-16">ส่วนลด</p>
                            <span class="fs-16"></span>
                        </div>
                    </div>
                    <div>
                        <div class="d-flex justify-content-between">
                            <p class="fs-16">ยอด : </p>
                            <span class="fs-16"></span>
                        </div>
                    </div>
                </div>
                
                <button class="bg-BD0000 br-30 p-3 fs-20 text-white border-none w-100">
                    ชำระคำสั่งชื้อ
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-9">
                <h3 class="mb-3 fs-20 fw-400">ช่องทางการซำระ</h3>
                <div class="row mb-4 bg-D9D9D9 p-8 br-30 gap-4">
                    <div class="col-2">
                        <p>QR พร้อมเพย์</p>
                    </div>
                    <div class="col-3 d-flex">
                        <img class="w-100 h-100" src="{{ asset('./images/image 5.png') }}" alt="">
                        <img class="w-100 h-100" src="{{ asset('./images/image 3.png') }}" alt="">
                        <img class="w-100 h-100" src="{{ asset('./images/image 4.png') }}" alt="">
                        <img class="w-100 h-100" src="{{ asset('./images/image 6.png') }}" alt="">
                    </div>
                    <div class="col-3">
                        <p>ใส่ช่องทางการซำระเพิ่ม</p>

                    </div>
                </div>
                <p>รายละเอียดการจัดส่ง</p>
                <p>ส่งผ่าน : (---)</p>
                <p>Email : (ผู้รับ)</p>
                <p>สินค้า : (ชื่อสินค้า)</p>
                <p>ราคา : (ราคารวม)</p>
                
                <div class="row">

                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-3">
            </div>
        </div>
        <div class="row mt-60">
            <div class="col-12 position-relative d-flex justify-content-center align-items-center">
                <p class="position-absolute fs-32">แบนเนอร์โฆษณา</p>
                <img class="w-100" src="{{asset('./images/Rectangle 17.png')}}" alt="">
            </div>
        </div>
    </div>
</main>

<x-footer />
