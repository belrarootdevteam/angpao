<x-header />

<main class="min-h-100vh">
    <div class="container mt-60">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4 d-flex flex-column align-items-center gap-4">
                <img width="128" height="128" src="{{ asset('/images/avatar_account.png') }}" alt="">
                <ul class="menu fs-20 list-style-type-none">
                    <a class="active" href="/account">
                        <li>บัญชีของฉัน</li>
                    </a>
                    <a href="/account">
                        <li>ประวัติ</li>
                    </a>
                    <a href="/account">
                        <li>บัญชีธนาคาร&บัตร</li>
                    </a>
                    <a href="/account">
                        <li>การซื้อของฉัน</li>
                    </a>
                    <a href="/account">
                        <li>การแจ้งเตือน</li>
                    </a>
                </ul>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-8 bg-EBEBEB br-20 p-30">
                <p class="fs-20">ข้อมูลของฉัน</p>
                <p class="fs-20">จัดการข้อมูลส่วนตัวคุณเพื่อความปลอดภัยของบัญชีผู้ใช้นี้</p>
                <hr />
                <div class="d-flex justify-content-center mb-150 flex-column align-items-lg-center">
                    <div class="max-w-370 fs-20 fw-400 gap-4 d-flex flex-column">
                        <p>ชื่อผู้ใช้ angpao</p>
                        <p>ชื่อ</p>
                        <p>อีเมล : angpao@gmail.com</p>
                        <p>หมายเลขโทรศัพท์ : 000-000-0000</p>
                        <button class="bg-BD0000 br-30 p-0 fs-20 text-white border-none h-50 w-126">
                            บันทึก
                        </button>
                    </div>
                </div>

            </div>
        </div>
</main>

<x-footer />
