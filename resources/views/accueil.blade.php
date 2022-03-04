<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="{{asset('images/next_one1.jpg')}}" type="image/icon type">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEXT ONE | ADMIN</title>
    <link rel="stylesheet" href="{{asset('css/stylAdmin.css')}}">
</head>
<body>

                                        <!--Nav bar-->
      
            <header>
                <p>NEXT ONE</p>
                 <ul>
                     <li><a href="/">Accueil</a></li>
                     <li><a href="#">Post</a></li>
                 </ul>
            </header>

                                          <!--Corps-->   
        <div>
            
        <div class="corps">
                <h1>AFFICHAGES POSTS</h1>
               <form class='form' action="{{route('ser-post')}}" method="post">
                   @csrf
               <p ><input type="text" name="ser"> <input type="submit" value='search'> </p>
               </form>
       

          
           <table> 
                        <tr>
                            <td>ID</td>
                            <td>NOM</td>
                            <td>IMAGES</td>
                            <td><a href="{{route('supprimertout')}}">supprimer</a></td>
                            <td>ACTIONS <a href="{{route('ajout-post')}}">ajout post</a></td>
                        </tr>
                     @foreach($posts as $post)
  
                     <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->nom}}</td>
                            <td> <img src="{{asset($post->image)}}" alt="ff"></td>
                            <td><a href="{{route('selected',['id'=>$post->id])}}">ok</a></td>
                  
                            <td ><a href="{{route('supprimer-post',['id'=>$post->id])}}">supprimer</a><a href="{{route('update-post',['id'=>$post->id])}}">edite</a><a href="{{route('voir-post',['id'=>$post->id])}}">voir</a></td>
                           
                        </tr>
                     @endforeach
                 
                </table>
                <div > <p>{{$posts->links()}}</p></div>
            </div>

        </div>
</body>
</html>