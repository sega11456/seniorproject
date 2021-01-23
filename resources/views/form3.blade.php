<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="css/form3.css" rel="stylesheet">
    <link rel="icon" href="https://www.cc.kmutt.ac.th/images/logow.png" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <title>KMUTT Document Work Flow</title>
    
    </head>
    <body>
        
        <div class="header">
            <div class="img">  
                    <a href="https://www.facebook.com/dumbbellstory">
                    <img src="https://www.cc.kmutt.ac.th/images/logow.png" alt="logokmutt" >
            </div>
                <div class="text">
                    <a> ระบบงานเอกสาร </a>
                </div>
                <div class="text2">
                    Document System For KMUTT Student 
                </div>    
                <div class="dropdown">
                    <button class="btn btn-outline-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Your Name
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="/">ตรวจสอบสถานะคำร้อง</a>
                        <a class="dropdown-item" href="/login">ลงชื่อออก</a> 
                        <a class="dropdown-item" href="/form1">ฟอร์ม 1 นะไอสัส</a> 
                        <a class="dropdown-item" href="/form2">ฟอร์ม 2 นะเวน</a> 
                        <a class="dropdown-item" href="/form3">ฟอร์ม 3 นะไอเห้</a>
                    </div>
                </div>  
        </div>
                <div class="form3">
                    <h1>ใบลงทะเบียนเพิ่ม-ลด-ถอน-เปลี่ยนกลุ่ม-เปลี่ยนรายวิชา<br>RO-26</h1>
                    <div class="box1">
                            <div>
                                <select placeholder="คำนำหน้า">
                                    <option value="" disabled selected>คำนำหน้า</option>
                                    <option value="male">นาย</option>
                                    <option value="female">นาง</option>
                                    <option value="maried">นางสาว</option>
                                </select>
                                <input class="Group" type="text" placeholder="ชื่อ" Name="First Name">
                            </div>

                            <div>
                                <select placeholder="ภาคการศึกษา">
                                    <option value="" disabled selected>ภาคการศึกษา</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                                <input class="Group1" type="text" placeholder="ปีการศึกษา" >
                            </div>

                            <div>
                                <input  type="text" placeholder="รหัสนักศึกษา" >
                            </div>

                            <div>
                            <input type="text" placeholder="คณะ">
                            </div>

                            <div>
                            <input  type="text" placeholder="ภาควิชา/สาขา" >
                            </div>

                            <div>
                                <select class="Group" placeholder="ระดับการศึกษา">
                                    <option value="" disabled selected>ระดับการศึกษา</option>
                                    <option value="phd1">ปริญญาตรี</option>
                                    <option value="phd2">ปริญญาโท</option>
                                    <option value="phd3">ปริญญาเอก</option>
                                    <option value="trade">แลกเปลี่ยน</option>
                                    <option value="out">บุคคลภายนอก</option>
                                </select>
                            <div>
                                <select class="Group" placeholder="หลักสูตร">
                                    <option value="" disabled selected>หลักสูตร</option>
                                    <option value="normal">ปกติ</option>
                                    <option value="inter">นานาชาติ</option>
                                </select>
                            </div>
                            </div>

                            <div>
                                <input class="Group1" type="text" placeholder="ชั้นปี" >
                                <input class="Group1" type="text" placeholder="GPAX" >
                            </div>

                            <div>
                                <input  type="text" placeholder="เบอร์โทร" >
                            </div>

                            <div>
                                <input  type="text" placeholder="E-mail" >
                            </div>
                        </div>
                        <h3>**กรุณาเลือกรายการตามจำนวนที่ท่านต้องการ พร้อมทั้งกรอกรหัสวิชา กลุ่มที่ และจำนวนหน่วยกิต**</h3>
                        <div class="box2">
                            <div class="radio-toggles">
                                <input type="radio" id="option-1" name="radio-options">
                                <label for="option-1">เพิ่ม</label>
                                <input type="radio" id="option-2" name="radio-options" checked >
                                <label for="option-2">ลด</label>
                                <input type="radio" id="option-3" name="radio-options" checked>
                                <label for="option-3">ถอน</label>
                                <input type="radio" id="option-4" name="radio-options">
                                <label for="option-4">เปลี่ยนกลุ่ม</label>
                                <div class="slide-item"></div>
                            </div>
                            </div>        
                                <a href="/">
                                <button type="submit" form="form1" value="Submit">Submit</button>
                                 </a>
                        </div> 
                    </div>

                    <div class="footer">

            <div class="FooterText">
                 © 2020 Document System For KMUTT. All Rights Reserved .
                </div>
                </body>

</html>
