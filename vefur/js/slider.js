var Mynd=new Array()
      function hvadamynd(){
      for (i=0;i<hvadamynd.arguments.length;i++){
      Mynd[i]=new Image()
      Mynd[i].src=hvadamynd.arguments[i]
      }
      }

      hvadamynd("img/slidermynd2.PNG","img/slidermynd1.jpg","img/slidermynd3.jpg","img/slidermynd4.jpg")

      var hradiskiptinga=3000

      var naestamynd=0 
      function skipti(){ 
      if (!document.images)
      return
      document.images.ha.src=Mynd[naestamynd].src
      if (naestamynd<Mynd.length-1)
      naestamynd++
      else 
      naestamynd=0
      setTimeout("skipti()",hradiskiptinga)
      }
      skipti()