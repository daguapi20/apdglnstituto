@foreach ($permissions as $id=> $name)
    <div class="checkbox">
       
        @if (substr($name, 0, 4)=='View')
        <br>
        <div class="row text-capitalize font-weight-bold">
        <label for=" ">  {{substr($name, 5, 10)}}</label>
        </div>
        @endif

        <label>
            <input name="permissions[]" type="checkbox" value="{{$name}}" 
            {{$model->permissions->contains($id)
            || collect(old('permissions'))->contains($name) 
            ? 'checked' : ''}}
            >{{$name}}
        </label>
        
        @if (substr($name, 0, 4)=='View')        
        @endif
    </div>
@endforeach