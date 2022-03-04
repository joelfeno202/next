<table class="table table-striped table-hover">
                <thead>
                    <tr>
					
                        <th>selection</th>
                        <th>ID</th>
                        <th>NOM</th>
						<th>IMAGE</th>
                        <th>creer le</th>
                        <th>Actions</th>
                 
                    </tr>
                </thead>
                <tbody>
                    @if(count($posts)>0)
                            @foreach($posts as $post)
                                <tr>
                                    
                                    <td ><a class='c' href="{{route('selected',['id'=>$post->id])}}">{{$post->val}}</a>
                                  
                                    </td>

                                    <td>{{$post->id}}</td>
                                    <td>{{$post->nom}}</td>
                                    <td><img src="{{asset($post->image)}}"   height='50px' width='50px'  alt="ff"></td>
                                    <td>{{$post->created_at}}</td>
                                    <td>
                                    <a href="{{route('supprimer-post',['id'=>$post->id])}}" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                    </td>
                                    <td>
                                       
                                        <a  href="{{route('update-post',['id'=>$post->id])}}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                        
                                    
                                    </td>
                                    <td>
                                    <a href="{{route('voir-post',['id'=>$post->id])}}"class="see" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="voir">V</i></a>
                                    </td>
                                </tr> 
                                @endforeach
                    @else

                    <tr>
                        <p>accun ...</p>
                    </tr>
                       @endif         
                </tbody>
                {{$posts->links()}}
            </table>