<?php

$start_time = microtime(true);

$string = '<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{student_profile.name}} ID Card</title>
</head>
<body>
<div style="
    position:absolute;
    height: 210px;
    width: 350px;
    border: 1px solid black;
    top: 10rem;
    left: 30px;" 
data-position></div>
<div style="position:absolute;left: 50px;top: 10px;" data-position>
    <img src="http://localhost/uims-samarth/uims/runtime/Ambedkar_University_Logo.png" alt="" style="
    width: 40px;
    height: 40px;
">
</div>
<div style="position:absolute;top: 15px;left: 122px;font-size: 10px;font-family: sans-serif;font-weight: bold;text-align: center" data-position>
    <div>Dr. B.R. Ambedkar University Delhi</div>
    <div>Govt. of National Capital Territory of Delhi</div>
</div>
<div style="position: absolute;top: 70px;left: 45px;" data-position>
    <img src="{{student_profile.profile_photo|raw}}" alt="{{student_profile.name}} profile photo" style="
    width: 75px;
    height: 85px;
">
</div>
<div style="position: absolute;top: 165px;left: 45px;  data-position>
    <img src="{{student_profile.profile_signature|raw}}" alt="{{student_profile.name}} signature" style="
    width: 75px;
    height: 40px;
">
</div>
<div style="position:absolute;top: 205px;left: 40px;font-size: 9px;font-family: sans-serif;" data-position>
    <div>Signature of the Card Holder</div>

</div>
<div style="position:absolute;top: 55px;left: 200px;font-size: 11px;font-family: sans-serif;" data-position>
    <b><u>STUDENT</u></b>

</div>
<div style="position:absolute;top: 75px;left: 140px;font-size: 11px;font-family: sans-serif;" data-position>
    <b>Name
    </b>
</div>
<div style="position:absolute;top: 75px;left: 220px;font-size: 11px;font-family: sans-serif;" data-position>
    <b>: {{student_profile.name|upper}}
    </b>
</div>
<div style="position:absolute;top: 92px;left: 140px;font-size: 11px;font-family: sans-serif;" data-position>
    <b>Enrolment No
    </b>
</div>
<div style="position:absolute;top: 92px;left: 220px;font-size: 11px;font-family: sans-serif;" data-position>
    <b>:  {{student_record.enrolment_number}}
    </b>
</div>
<div style="position:absolute;top: 122px;left: 140px;font-size: 11px;font-family: sans-serif;" data-position>
    <b>Programme
    </b>
</div>
<div style="position:absolute;top: 122px;left: 220px;font-size: 11px;font-family: sans-serif;width: 150px" data-position>
    <b>: {{student_record.programme.title_english}} </b>
</div>
<div style="position:absolute;top: 107px;left: 140px;font-size: 11px;font-family: sans-serif;" data-position>
    <b>Validity
    </b>
</div>
<div style="position:absolute;top: 107px;left: 220px;font-size: 11px;font-family: sans-serif;" data-position>
    <b>: 15/10/{{student_record.year_of_enrolment+student_record.programme.minimum_duration_year}}
    </b>

</div>
<div style="position: absolute;top: 180px;left: 275px;">
    <img src="http://localhost/uims-samarth/uims/runtime/aud-dean.jpeg" alt="" style="
    width: 65px;
    height: 25px;
">
</div>
<div style="position:absolute;top: 203px;left: 250px;font-size: 10px;font-family: sans-serif;" data-position>
    <div>Dean (Student Service)</div>
</div>
<div style="
    position:absolute;
    height: 210px;
    width: 350px;
    border: 1px solid black;
    top: 10px;
    left: 410px;
" data-position></div>

<div style="
    position:absolute;
    top: 13px;
    left: 485px;
">
    <img src="{{barcode(student_record.enrolment_number)}}" alt="" style="
    width: 200px;
    height: 30px;
" data-position>
</div>
<div style="
    position:absolute;
    top: 42px;
    left: 550px;
    font-size: 10px;
    font-family: sans-serif;
" data-position>{{student_record.enrolment_number}}
</div>
<div style="
    position:absolute;
    top: 55px;
    left: 420px;
    font-size: 10px;
    font-family: sans-serif;
    width: 180px;
" data-position>ADDRESS:
    {{student_permanent_address}}
</div>
<div style="
    position:absolute;
    top: 55px;
    left: 610px;
    font-size: 10px;
    font-family: sans-serif;
    width: 140px;
" data-position><div>Date Of Birth: {{date(\'d-m-Y\', student_profile.dob)}}</div>
    <div style="
">Blood Group: {{student_profile.blood_group}}</div>
</div><div style="
    position:absolute;
    top: 125px;
    left: 420px;
    font-size: 10px;
    font-family: sans-serif;
    font-weight: bold;
" data-position>Emergency Contact No. {{student_record.emergency_contact_number}}
</div>
<div style="
    position:absolute;
    top: 145px;
    left: 485px;
    font-size: 9px;
    font-family: sans-serif;
    font-weight: bold;
    text-align: center;
" data-position>
    <div>
        If found, please return to
    </div>
    <div>Dean (Student Services)</div>
    <div>Dr. B.R. Ambedkar University Delhi
    </div>
    <div>
        <u>Lothian Road,Kashmere Gate,Delhi-110006,India</u>
    </div>
</div>
<div style="
    position:absolute;
    top: 192px;
    left: 485px;
    font-size: 9px;
    font-family: sans-serif;
    text-align: center;
" data-position>
    <div>Ph: +91-11-23863740/43 . Fax: +91-11-23863742</div>
    <div>Email: info@aud.ac.in Website: www.aud.ac.in</div>
</div>

</body></html>';




$pattern = '/(top\s*?:\s*?)(\d+)([aA-zZ]++)(?=.*data-position>?)/misU';

$r = preg_replace_callback($pattern, function ($matches){
    $newTop = (int)$matches[2]+500;
        return $matches[1].$newTop.$matches[3];
    
}, $string);


// $r = preg_replace($pattern, '$1$2 + 500$3', $string);
echo $r;

$end_time = microtime(true);

echo $end_time - $start_time.'ms';
