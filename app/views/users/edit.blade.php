@if(isset($method))
   
    @if($method=="post"||$method=="put")
    
    <h3>Add user/ edit user</h3>
    <form method="{{$method}}" action="/users" data-validate>

    <input type="text" name="name" data-required="true">
    <input type="email" data-required="true">
    <input type="submit" value="create">
     
    </form>
    
    @elseif($method=="get")
    
    <h3>edit user</h3>
    
    @elseif($method=="delete")
    
    <h3>delete user</h3>

    @endif

@endif