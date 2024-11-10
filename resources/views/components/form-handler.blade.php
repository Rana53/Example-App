<div class="form-design">
    <!--
    @if($errors->any())
        @foreach($errors->all() as  $error)
        <div style="color:red">
            {{$error}}
        </div>
        @endforeach
    @endif
    -->

    <form action="add-user" method="post">
        @csrf
        <div>
            <label for="name">User Name</label> <br>
            <input type="text" name="name" id="name" value="{{old('name')}}">
            <span style="color:red">@error('name'){{$message}}@enderror</span>
        </div>
        <br>
        <div>
            <h3 >Gender</h3>
            <input type="radio" id="male" name="gender" value="male"> 
            <label for="male">Male</label> <br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label>
            <span style="color:red">@error('gender'){{$message}}@enderror</span>
        </div>
        <div>
            <h3> Favourit Frameworks</h3>
            <input type="checkbox" id="framework1" name="frameworks[]" value="laravel"> 
            <label for="framework1">Laravel</label> 
            <br>
            <input type="checkbox" id="framework2" name="frameworks[]" value="vujs">
            <label for="framework2">Vue JS</label>
            <span style="color:red">@error('frameworks'){{$message}}@enderror</span>
        </div>
        <div>
            <h3 for="cars">Choose a car</h3>
            <select name="cars" id="cars">
                <option value="volvox">Volvo</option>
                <option value="saabx">Saab</option>
                <option value="audix">Audi</option>
            </select>
            <span style="color:red">@error('cars'){{$message}}@enderror</span>
        </div>
        
        <div>
            <h3>Email</h3>
            <input type="email" name="email" value="{{old('email')}}">
            <span style="color:red">@error('email'){{$message}}@enderror</span>
        </div>
        <br> <br>
        <input type="submit" value="Submit">
    </form>
</div>



<style>
    .form-design{
        border-color: 5px;
        border-radius: 10px;
    }
</style>