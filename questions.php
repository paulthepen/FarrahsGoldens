<form action="submit.php" type="POST">
    <div class="row required">
        <div class="col-sm-2 text-end">
            <label for="input-name" class="form-label align-bottom">Name: </label>
        </div>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="input-name" name="name" />
        </div>
    </div>
    <div class="row required">
        <div class="col-sm-2 text-end">
            <label for="input-address" class="form-label">Address: </label>
        </div>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="input-name" name="address" />
        </div>
    </div>
    <div class="row required">
        <div class="col-sm-2 text-end">
            <label for="input-city" class="form-label">City: </label>
        </div>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="input-city" name="city" />
        </div>
    </div>
    <div class="row required">
        <div class="col-sm-2 text-end">
            <label for="input-state" class="form-label">State/ZIP Code: </label>
        </div>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="input-state" name="state" />
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2 text-end">
            <label for="input-home" class="form-label">Home Phone: </label>
        </div>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="input-home" name="home" />
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2 text-end">
            <label for="input-cell" class="form-label">Work/Cell Phone: </label>
        </div>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="input-cell" name="cell" />
        </div>
    </div>
    <div class="row required">
        <div class="col-sm-2 text-end">
            <label for="input-name" class="form-label">Email: </label>
        </div>
        <div class="col-sm-4">
            <input type="email" class="form-control" id="input-email" name="email" />
        </div>
    </div>

    <div id='form-disclaimer' class='form-text text-center'>
        We kindly ask that you reply to the following questions. Completion of this questionnaire is in no way a guarantee that a puppy will be sold/reserved to/for you.
    </div>

    <div class="row required" style='margin-top: 20px;'>
        <div class="col-sm-4 offset-sm-2">
            <label>What gender puppy do you prefer?</label>
        </div>
        <span class="col-sm-2 align-middle">
            <input class='form-check-input' type='radio' name='gender' id='input-gender' value='male'>
            <label for="input-gender" class="form-check-label">
                Male
            </label>
        </span>
        <div class="col-sm-2">
            <input class='form-check-input' type='radio' name='gender' id='input-gender' value='female'>
            <label for="input-gender" class="form-check-label">
                Female
            </label>
        </div>
    </div>

    <div class="row required" style='margin-top: 20px;'>
        <div class="col-sm-4 offset-sm-2">
            <label>Do you plan on picking up your pup (driving), flying to meet us at the airport, or having us bring your pup to you (we do not ship our puppies)?</label>
        </div>
        <span class="col-sm-2 align-middle">
            <input class='form-check-input' type='radio' name='transport' id='input-transport' value='drive'>
            <label for="input-transport" class="form-check-label">
                Drive
            </label>
        </span>
        <div class="col-sm-2">
            <input class='form-check-input' type='radio' name='transport' id='input-transport' value='fly'>
            <label for="input-transport" class="form-check-label">
                Fly
            </label>
        </div>
        <div class="col-sm-2">
            <input class='form-check-input' type='radio' name='transport' id='input-transport' value='bring'>
            <label for="input-transport" class="form-check-label">
                Bring To Me
            </label>
        </div>
    </div>

    <div class="row required">
        <div class="col-sm-2 offset-sm-2">
            <label class="form-label">List your family members: </label>
        </div>
        <div class="col-sm-6" id='family-list'>
            <div class="input-group">
                <input type="text" class="form-control" name="family-member-[][name]" placeholder="Name" />
                <input type="text" class="form-control" name="family-member-[][age]" placeholder="Age" />
            </div>
        </div>
        <div class="col-sm-2" style='margin-top: 10px;'>
            <a class="btn btn-primary" id="add-family-btn" onclick="addFamilyMember();"><i class="fa fa-lg fa-plus-circle"></i></a>
        </div>
    </div>


</form>

<script>
    const addFamilyMember = () => {
        $('#family-list').append('<div class="input-group"><input type = "text" class="form-control" name="family-member-[][name]" placeholder="Name" / ><input type="text" class="form-control" name="family-member-[][age]" placeholder="Age" / ></div>');
    }
</script>
