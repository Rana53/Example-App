<div class="form-design">
    <form action="add-user" method="post">
        @csrf
        <div>
            <label for="name">User Name</label> <br>
            <input type="text" name="name" id="name">
        </div>
        <br>
        <div>
            <h3 >Gender</h3>
            <input type="radio" id="male" name="gender" value="male"> 
            <label for="male">Male</label> <br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label>
        </div>
        <div>
            <h3> Favourit Frameworks</h3>
            <input type="checkbox" id="framework1" name="frameworks[]" value="laravel"> 
            <label for="framework1">Laravel</label> 
            <br>
            <input type="checkbox" id="framework2" name="frameworks[]" value="vujs">
            <label for="framework2">Vue JS</label>
        </div>
        <div>
            <h3 for="cars">Choose a car</h3>
            <select name="cars" id="cars">
                <option value="volvox">Volvo</option>
                <option value="saabx">Saab</option>
                <option value="audix">Audi</option>
            </select>
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