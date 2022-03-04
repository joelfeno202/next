
    
     <!DOCTYPE html>
     <html lang="en">
     <head>
         <meta charset="UTF-8">
         <link rel="icon" href="{{asset('images/next_one1.jpg')}}" type="image/icon type">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>NEXT ONE | VOIRE ADRESSE</title>
         <style>
              .cont{
                background-color: #919191;
                  text-align:left;
                  padding: 10px;
                  margin:auto;
                  width:400px;
                  justify-content:center;
                  opacity:1;
              }
              H1{
                  color:#FC6D6D;
              }
              img{
                   border-radius:100%;
                   margin:auto;
                   width:100px;
              }
              p{
                  color:black;
              }
           
              span{
                  color:#fff;
              }
              body{
                background-color: #919191;
                 }
         </style>
     </head>
     <body >
            <div class="cont">
            <a href="/adresse">
                <img width='100px' src="{{asset('images/next_one.jpg')}}"  alt="logo">
            </a>
                <H1>VOIRE ADRESSE</H1>
            
                    <p><span>ID:</span> {{$adresse->id}}</p>
                    <p><span>ADRESSE:</span> {{$adresse->adresse}}</p>
                    <p><span>TEL :</span> {{$adresse->tel}}</p>
                    <p><span>E-MAIL:</span> {{$adresse->mail}}</p>
                   <p><span> IMAGE:</span></p><img src="{{asset($adresse->image)}}" alt="ff">
                    <p> <span>CREER LE: </span> {{$adresse->created_at}}</p>
            </div>
     </body>
     </html>