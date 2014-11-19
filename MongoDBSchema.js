{  
   "User":{  
      "userId":"12345",
      "type":"vend",
      "email":"Michaelpiersanti@gmail.com",
      "password":"password1",
      "rfps":"[123456], [654321]",
      "responses":"[1111,2222]",
      "companyName":"Apple",
      "companyAddr":{  
         "street":"1234 Main Street",
         "city":"New York",
         "State":"NY",
         "zip":"00000"
      },
      "companyCeo":"John Smith",
      "contactName":"John Doe",
      "contactNum":"123456790",
      "contactEmail":"jdoe@gmail.com"
   },
   "rfp":[  
      {  
         "rfpNum":"123456",
         "title":"New RFP",
         "userId":"12345",
         "purpose":"Hands On",
         "podiumType":"Mac",
         "projection":"Ceiling Mounted",
         "hqAudio":true,
         "classNum":1,
         "seats":30,
         "size":{  
            "length":10,
            "width":10,
            "height":10
         },
         "stadium":false,
         "budget":10000,
         "compDate":"11/21/2014",
         "repsonses":[  
            {  
               "responsenum":"2222",
               "accepted":"yes"
            },
            {  
               "responsenum":"1111",
               "accepted":"no"
            }
         ]
      },
      {  
         "rfpNum":"654321",
         "title":"New RFP",
         "userId":"12345",
         "purpose":"Hands On",
         "podiumType":"Mac",
         "projection":"Ceiling Mounted",
         "hqAudio":true,
         "classNum":1,
         "seats":30,
         "size":{  
            "length":10,
            "width":10,
            "height":10
         },
         "stadium":false,
         "budget":10000,
         "compDate":"11/21/2014",
         "repsonses":[  
            {  
               "responsenum":"00002 ",
               "accepted":"yes"
            },
            {  
               "responsenum":"00001 ",
               "accepted":"no"
            }
         ]
      }
   ],
   "response":[  
      {  
         "responseNum":"1111",
         "title":"New Response",
         "userId":"123456",
         "desc":"This is a description of a Test",
         "vendorType":[  
            "Projectors",
            "Video Displays",
            "Desks"
         ],
         "associatedRfp":"654321",
         "vendorPartners":[  
            "Luis G",
            "Mike C"
         ],
         "filePath":"/images/Proposal.pdf",
         "cost":"20000",
         "dueDate":"11/07/1991"
      },
      {  
         "responseNum":"2222",
         "title":"New Response",
         "userId":"123456",
         "desc":"Another Great test",
         "vendorType":[  
            "Projectors",
            "Video Displays",
            "Desks"
         ],
         "associatedRfp":"12345",
         "vendorPartners":[  
            "Kyle C",
            "Mike C"
         ],
         "filePath":"/images/Proposal.pdf",
         "cost":"20000",
         "dueDate":"11/07/1991"
      }
   ]
}