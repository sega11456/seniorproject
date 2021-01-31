<!DOCTYPE html>
<html>
    <head>
        
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
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

            <div class="logo">  
                <a href="https://www.facebook.com/dumbbellstory">
                <img src="https://www.cc.kmutt.ac.th/images/logow.png" alt="logokmutt" >
            </div>

            <div class="text">
                <a> แบบฟอร์มเอกสาร </a>
            </div>

            <div class="text2">
             RO-01 ที่ 1 
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
            <h1>คำร้องทั่วไป RO-01</h1>

        <div class="box1">
    
            <div class="donation-container">

                <div>
                <input class="Group" type="text" placeholder="เรื่อง">
                </div>

                <div>
                <input class="Group" type="text" placeholder="เรียน">
                </div>
            
                <div>
                    <select placeholder="คำนำหน้า">
                        <option value="" disabled selected>คำนำหน้า</option>
                        <option value="male">นาย</option>
                        <option value="female">นาง</option>
                        <option value="maried">นางสาว</option>
                    </select>
                    <input id="fname" type="text" placeholder="ชื่อ" Name="First Name">
                    <input  type="text" placeholder="รหัสนักศึกษา" >
                </div>


                <div>
                    <input type="text" placeholder="คณะ">
                    <input  type="text" placeholder="ภาควิชา/สาขา" >
                    
                </div>

                <div>

                    <select class="Group1" placeholder="ชั้นปี">
                            <option value="" disabled selected>ชั้นปี</option>
                            <option value="y1">ชั้นปีที่1</option>
                            <option value="y2">ชั้นปีที่2</option>
                            <option value="y3">ชั้นปีที่3</option>
                            <option value="y4">ชั้นปีที่4</option>
                    </select>

                    <select class="Group1" placeholder="ระดับการศึกษา">
                        <option value="" disabled selected>ระดับการศึกษา</option>
                        <option value="phd1">ปริญญาตรี</option>
                        <option value="phd2">ปริญญาโท</option>
                        <option value="phd3">ปริญญาเอก</option>
                        <option value="trade">แลกเปลี่ยน</option>
                        <option value="out">บุคคลภายนอก</option>
                    </select>
                </div>

                <div>
                    <select class="Group" placeholder="หลักสูตร">
                        <option value="" disabled selected>หลักสูตร</option>
                        <option value="normal">ปกติ</option>
                        <option value="inter">อังกฤษ/นานาชาติ</option>
                        <option value="bi-lang">สองภาษา</option>
                    </select>
                </div>

                <div>
                    <select class="Group" placeholder="สถานะภาพ">
                        <option value="" disabled selected>สภาพนักศึกษา</option>
                        <option value="normal2">ปกติ</option>
                        <option value="inter">วิทยาทัณฑ์</option>
            
                    </select>
                </div>

                <div>
                <input class="Group1" type="text" placeholder="GPA" >
                <input class="Group1" type="text" placeholder="GPAX" >
                </div>

                <div>
                <input  type="text" placeholder="ชื่ออาจารย์ที่ปรึกษา" >
                </div>

                <div>
                <input  type="text" placeholder="เบอร์โทร" >
                <input  type="text" placeholder="E-mail" >
                </div>
                

                <textarea placeholder="มีความประสงค์(โปรดระบุโดยระเอียด)" rows="4" cols="50"></textarea>

            </div>
                <a href="/">
                <button type="submit" form="form1" value="Submit">Submit</button>
                </a>
        </div>

                <button class="btn1 confirm">ยืนยัน</button>
        
                

                    <div class="FooterText">
                         © 2020 Document System For KMUTT. All Rights Reserved .
                    </div>
    </body>
</html>
