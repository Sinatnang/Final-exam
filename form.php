
<h1 class="text-center text-white">WEP CALCULATOR</h1>
<div class="container mt-4">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">   
        <div class="card"> 
        <div class="card-header"></div>
            <div class="card-body">
                <form action="cal.php" method="POST">
                    <div class="form-group">
                        <label for="" class="text-white">First Number</label>
                        <input type="number" class="form-control" name="num1" require>
                    </div>
                    <div class="form-group">
                    <label for="" class="text-white">Select Option</label>
                        <select id="select-sth" class="form-control" name="select">
                            <option value="None">None</option>
                            <option value="Add">Add</option>
                            <option value="Minus">Minus</option>
                            <option value="Multiply">Multiply</option>
                            <option value="Divide">Divide</option>
                        </select>
                    </div>          
                    <div class="form-group">
                        <label for="" class="text-white">Second Number</label>
                        <input type="number" class="form-control" name="num2" require>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success btn-sm" name="btn" type="submit">Calculate</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
        <div class="col-3"></div>

    </div>
</div>