<?php
include 'MongoClassFile.php';
/*
$Query1 = '{"User":{  
      "userId": "11111111",
      "type":"vend",
      "email":"MikeTest2@gmail.com",
      "password":"password1",
      "companyName":"Mikes Test",
      "companyAddr":{  
         "street":"1234 Candy Lane",
         "city":"Milford",
         "State":"CT",
         "zip":"06460"
      },
      "companyCeo":"Mikes Company",
      "contactName":"Mike and Test",
      "contactNum":"2035555555",
      "contactEmail":"MikeP@gmail.com"
   }
}';
   
   //$Custinsert = new MongoInsert();
   //$Custinsert->
   MongoInsert($Query1);*/
   
   $Id = "123456";
   $Query2 = 
   '{"rfp":[{  
         "rfpNum":"999999",
         "title":"TestRFP",
         "userId":"12345",
         "purpose":"Hands On",
         "podiumType":"PC The master Race",
         "projection":"Ceiling Mounted yerp",
         "hqAudio":true,
         "classNum":1000,
         "seats":30,
         "size":{  
            "length":20,
            "width":10,
            "height":10
         },
         "stadium":false,
         "budget":10000,
         "compDate":"11/21/2014"}]
		 }';
   MongoRFPInsert($Id,$Query2);




?>