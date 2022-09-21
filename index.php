<?php
include_once "DB.php";
include_once "Company.php";

$maxima=new Company("Maxima","Vilnius, Lithuania","8965","UAB Maxima","+37069974162","info@maxima.com");
echo "Name: $maxima->name , address: $maxima->address, vat_code: $maxima->vat_code , Company name: $maxima->company_name , Phone: $maxima->phone , Email: $maxima->email .<br>" ;
$maxima->insert();

$tele2=Company::getCompany(1);
$tele2->vat_code=9999;
$tele2->save();

$company=Company::getCompany(5);
$company->delete();


