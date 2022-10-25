<?php
include('dbconnect.php');
$sql = "SELECT * FROM provinces";
$query = mysqli_query($con, $sql);
?>
<script src="assets/jquery.min.js"></script>
<script src="assets/script.js"></script>

<!DOCTYPE html>
<html ng-app="app" lang="th">
<head>
    <!-- <base href="https://openhouse.bu.ac.th/"> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>CAMT Open House 2022</title>
    <link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon" >
    <!-- Search Engine -->
    <!-- <meta name="description" content="OPEN HOUSE 2022 โลกเปลี่ยนการศึกษาเปลี่ยน - พบกับการเปิดบ้านโชว์ของแบบจัดเต็ม!! พร้อม Workshop สัมผัสการเรียนการสอนจริงจากทุกคณะได้แล้วที่นี่ มหาวิทยาลัยกรุงเทพ วิทยาเขตรังสิต">
    <meta name="keywords" content="openhouse, open, house, โลกเปลี่ยนการศึกษาเปลี่ยน, โลกเปลี่ยน, การศึกษาเปลี่ยน, Bangkok University, เปิดบ้าน"> -->
    <!-- Schema.org for Google -->
    <!-- <meta itemprop="name" content="Bangkok University Open House 2022">
    <meta itemprop="description" content="OPEN HOUSE 2022 โลกเปลี่ยนการศึกษาเปลี่ยน - พบกับการเปิดบ้านโชว์ของแบบจัดเต็ม!! พร้อม Workshop สัมผัสการเรียนการสอนจริงจากทุกคณะได้แล้วที่นี่ มหาวิทยาลัยกรุงเทพ วิทยาเขตรังสิต">
    <meta itemprop="keywords" content="openhouse, open, house, โลกเปลี่ยนการศึกษาเปลี่ยน, โลกเปลี่ยน, การศึกษาเปลี่ยน, Bangkok University, เปิดบ้าน"> -->
    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <!-- <meta name="og:title" content="Bangkok University Open House 2022">
    <meta name="og:description" content="OPEN HOUSE 2022 โลกเปลี่ยนการศึกษาเปลี่ยน - พบกับการเปิดบ้านโชว์ของแบบจัดเต็ม!! พร้อม Workshop สัมผัสการเรียนการสอนจริงจากทุกคณะได้แล้วที่นี่ มหาวิทยาลัยกรุงเทพ วิทยาเขตรังสิต">
    <meta name="og:image" content="https://openhouse.bu.ac.th/assets/images/fb-cover-website.png">
    <meta name="og:url" content="https://openhouse.bu.ac.th/">
    <meta name="og:site_name" content="Bangkok University Open House 2022">
    <meta name="fb:app_id" content="281195075595119">
    <meta name="og:type" content="website"> -->
    <!-- FAVICON -->
    <!-- <link rel="shortcut icon" href="https://openhouse.bu.ac.th/favicon.ico" type="image/x-icon" > -->

    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    
    
    
    
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="https://openhouse.bu.ac.th/compile/app.css"> -->
    <link rel="stylesheet" type="text/css" href="css/camt.css">
        </head>
    <body>
        <div id="bodyPage">
            <div class="fixed-full bg-dark-navy bg-color-page">
    <div class="fixed-full bg-image-page" style="background-image: url('images/openhouse/BG WWW.jpg');"></div>
</div>
<div class="container my-5 text-white">
    <div class="mt-2 mb-3 text-center d-grid">
        <!-- <a href="https://openhouse.bu.ac.th">
            <img class="img-logo mb-3" src="https://openhouse.bu.ac.th/images/app/logo.png"  alt="Bangkok University">
        </a> -->
        <a class="d-block" href="index.php">
                  <img class="img-logo mb-3" src="images/openhouse/OP H.png" alt="camt">
                </a>

        <!-- <h1 class="text-bold">CAMT OPEN HOUSE 2022</h1> -->
        <h2 class="text-bold text-white">ลงทะเบียน</h2>
    </div>
    <div class="card card-border">
        <div class="card-body p-4 px-md-5 pt-md-5 pb-md-4">
            <!-- <img class="clipart-godzilla-small-on-card" src="images/openhouse/mascot.png" alt="Godzilla"> -->
            <form method="post" action="insert_visit.php" >
                
                <div class="form-group">
                    <p class="mb-1 text-bold">
                        สถานะผู้เข้าร่วมงาน <sup class="text-danger">*</sup>
                    </p>
                    <div class="custom-control custom-radio font-db-adman-x">
                        <input class="custom-control-input" type="radio" name="position" value="student" required="" id="type_0" <?php if (isset($position) && $position=="teacher") echo "checked";?>>
                        <label class="custom-control-label" for="type_0">นักเรียน</label>
                    </div>
                    <div class="custom-control custom-radio font-db-adman-x">
                        <input class="custom-control-input" type="radio" name="position" value="teacher" required="" id="type_1" >
                        <label class="custom-control-label" for="type_1">ครู/อาจารย์</label>
                    </div>
                    <div class="custom-control custom-radio font-db-adman-x">
                        <input class="custom-control-input" type="radio" name="position" value="visitor" required="" id="type_2" >
                        <label class="custom-control-label" for="type_2">ผู้ปกครอง/บุคคลทั่วไป</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="name">ชื่อ-นามสกุล <sup class="text-danger">*</sup></label>
                    <input type="text" name="name" id="fullName" class="form-control" required="" placeholder="มานะ พากเพียร" maxlength="191" value="">
                </div>

                <div class="form-group">
                    <label for="registerPhone">เบอร์มือถือ <sup class="text-danger">*</sup></label>
                    <input type="text" name="phone" id="registerPhone" class="form-control" maxlength="10" minlength="10" required="" placeholder="เบอร์โทรศัพท์ควรขึ้นต้นด้วย 0 ตัวอย่าง 0xxxxxxxxx" value="">
                                    </div>   
                <div class="form-group">
                <label for="facebook">Facebook <sup class="text-danger">*</sup></label>
                <input type="text" name="facebook" id="facebook" class="form-control" required="" placeholder="Facebook" maxlength="191" value="">
                                </div>             

                <div class="form-group">
                    <label for="email">E-mail <sup class="text-danger">*</sup></label>
                    <input type="email" name="email" id="email" class="form-control" required="" placeholder="mana.prak@mail.com" maxlength="191" value="">
                                    </div>   

                <div class="form-group mb-4">
                    <label for="school">โรงเรียน/วิทยาลัย <sup class="text-danger">*</sup></label>
                    <input type="text" name="school" id="school" class="form-control" maxlength="191" placeholder="ระบุโรงเรียน" value="">
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="province">จังหวัด</label>
                        <select name="province" id="province" class="form-control">
                            <option value="">เลือกจังหวัด</option>
                            <?php while($result = mysqli_fetch_assoc($query)): ?>
                                <option value="<?=$result['name_th']?>"><?=$result['name_th']?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                </div> 

                <div class="form-group">
                    <p class="mb-1 text-bold">
                        ระดับการศึกษาปัจจุบัน <sup class="text-danger">*</sup>
                    </p>
                                            <div class="custom-control custom-radio font-db-adman-x">
                            <input class="custom-control-input" type="radio" name="degree" value="6" required="" checked id="degree_0" checked>
                            <label class="custom-control-label" for="degree_0">มัธยมศึกษาปีที่ 6 หรือเทียบเท่า</label>
                        </div>
                                            <div class="custom-control custom-radio font-db-adman-x">
                            <input class="custom-control-input" type="radio" name="degree" value="5" required="" checked id="degree_1" checked>
                            <label class="custom-control-label" for="degree_1">มัธยมศึกษาปีที่ 5 หรือเทียบเท่า</label>
                        </div>
                                            <div class="custom-control custom-radio font-db-adman-x">
                            <input class="custom-control-input" type="radio" name="degree" value="4" required="" checked id="degree_2" checked>
                            <label class="custom-control-label" for="degree_2">มัธยมศึกษาปีที่ 4 หรือเทียบเท่า</label>
                        </div>
                                            <div class="custom-control custom-radio font-db-adman-x">
                            <input class="custom-control-input" type="radio" name="degree" value="3" required="" checked id="degree_3" checked>
                            <label class="custom-control-label" for="degree_3">มัธยมศึกษาตอนต้น</label>
                        </div>
                                            <div class="custom-control custom-radio font-db-adman-x">
                            <input class="custom-control-input" type="radio" name="degree" value="0" required="" checked id="degree_4" checked>
                            <label class="custom-control-label" for="degree_4">อื่นๆ</label>
                        </div>
                                    </div>

                <div class="form-group">
                    <div class="row">

                            <div class="col-lg-12 col-sm-12 border">
                                <div class="form-group">
                                <p class="text-bold mt-2 mb-0">เวลาเข้าร่วมกิจกรรม<sup class="text-danger">*</sup></p>
                                    <div class="custom-control custom-radio font-db-adman-x">
                                    <input class="custom-control-input" data-type="0" type="radio" name="visit" value="9.00-10.30" required="" id="visit_0" >
                                    <label class="custom-control-label" for="visit_0">9.00-10.30</label>
                                    </div>
                                    <div class="custom-control custom-radio font-db-adman-x">
                                    <input class="custom-control-input" data-type="0" type="radio" name="visit" value="10.30-12.00" required="" id="visit_1" >
                                    <label class="custom-control-label" for="visit_1">10.30-12.00</label>
                                    </div>
                                    <div class="custom-control custom-radio font-db-adman-x">
                                    <input class="custom-control-input" data-type="0" type="radio" name="visit" value="13.00-14.30" required="" id="visit_2" >
                                    <label class="custom-control-label" for="visit_2">13.00-14.30</label>
                                    </div>
                                    <div class="custom-control custom-radio font-db-adman-x">
                                    <input class="custom-control-input" data-type="0" type="radio" name="visit" value="14.30-16.00" required="" id="visit_3" >
                                    <label class="custom-control-label" for="visit_3">14.30-16.00</label>
                                    </div>
                                
                        </div>

                    </div>

                </div><br>

                

                    <div class="text-center">
                    <button class="btn btn-orange btn-pill font-db-adman-x mb-2 px-4" id="formSubmitButton" type="submit">
                        ลงทะเบียน                    </button>
                </div>

            </form>
        </div>
    </div>
</div>

        </div>
        <script type="text/javascript">
            let currentUrl = 'https://openhouse.bu.ac.th/api';
            let mainUrl = 'https://openhouse.bu.ac.th';
            let currentLanguage = 'th'; 
        </script>
        
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        
        <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
        
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        
        
            <script type="text/javascript" src="https://openhouse.bu.ac.th/compile/register.js?3"></script>
    </body>
</html>