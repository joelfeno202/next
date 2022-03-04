
    
     <!DOCTYPE html>
     <html lang="en">
     <head>
         <meta charset="UTF-8">
         <link rel="icon" href="{{asset('images/next_one1.jpg')}}" type="image/icon type">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>NEXT ONE | VOIRE POST</title>
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
            <a href="/post">
                <img width='100px' src="{{asset('images/next_one.jpg')}}"  alt="logo">
            </a>
                <H1>VOIRE POST</H1>
                    <p><span>ID:</span> {{$post->id}}</p>
                    <p><span>NOM:</span> {{$post->nom}}</p>
                   <p><span> IMAGE:</span></p><img src="{{asset($post->image)}}" alt="ff">
                    <p> <span>CREER LE: </span> {{$post->created_at}}</p>
            </div>
     </body>
     </html>