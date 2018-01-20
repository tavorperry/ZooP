 var d = new Date();
 var n = d.getDay();
 
if(n==0)
  document.write("<style> #sun{background-color: yellow; color: black;} </style>");
else if(n==1)
  document.write("<style> #mon{background-color: yellow; color: black;} </style>");
else if(n==2)
  document.write("<style> #tuw{background-color: yellow; color: black;} </style>");
else if(n==3)
  document.write("<style> #wed{background-color: yellow; color: black;} </style>");
else if(n==4)
  document.write("<style> #thu{background-color: yellow; color: black;} </style>");
else if(n==5)
  document.write("<style> #fri{background-color: yellow; color: black;} </style>");
else if(n==6)
  document.write("<style> #sat{background-color: yellow; color: black;} </style>");
