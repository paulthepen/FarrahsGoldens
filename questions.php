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

    <div class="row required" style='margin-top: 20px;'>
        <div class="col-sm-4 offset-sm-2">
            <label>Are all members of your household away during the day?</label>
        </div>
        <span class="col-sm-2 align-middle">
            <input class='form-check-input' type='radio' name='away' id='input-away' value='yes'>
            <label for="input-away" class="form-check-label">
                Yes
            </label>
        </span>
        <div class="col-sm-2">
            <input class='form-check-input' type='radio' name='away' id='input-away' value='no'>
            <label for="input-away" class="form-check-label">
                No
            </label>
        </div>
    </div>


    <div class="row required" style='margin-top: 20px;'>
        <div class="col-sm-4 offset-sm-2">
            <label for='hours-alone'>How many hours a day will the puppy be alone?</label>
        </div>
        <span class="col-sm-2 align-top">
            <input class='form-input' type='text' name='hours-alone' id='hours-alone' /'>
        </span>
    </div>
    <div class="row required" style='margin-top: 20px;'>
        <div class="col-sm-4 offset-sm-2">
            <label for='provisions'>What provisions will you make for your puppy at that time?</label>
        </div>
        <span class="col-sm-2 align-top">
            <input class='form-input' type='text' name='provisions' id='provisions' /'>
        </span>
    </div>

    <div class="row required" style='margin-top: 20px;'>
        <div class="col-sm-4 offset-sm-2">
            <label>Does anyone in your family suffer from allergies?</label>
        </div>
        <span class="col-sm-2 align-middle">
            <input class='form-check-input' type='radio' name='allergies' id='input-allergies' value='yes'>
            <label for="input-allergies" class="form-check-label">
                Yes
            </label>
        </span>
        <div class="col-sm-2">
            <input class='form-check-input' type='radio' name='allergies' id='input-allergies' value='no'>
            <label for="input-allergies" class="form-check-label">
                No
            </label>
        </div>
    </div>

    <div class="row required" style='margin-top: 20px;'>
        <div class="col-sm-4 offset-sm-2">
            <label>Does anyone who lives in your home, or who is a frequent visitor, a smoker?</label>
        </div>
        <span class="col-sm-2 align-middle">
            <input class='form-check-input' type='radio' name='smoking' id='input-smoking' value='yes'>
            <label for="input-smoking" class="form-check-label">
                Yes
            </label>
        </span>
        <div class="col-sm-2">
            <input class='form-check-input' type='radio' name='smoking' id='input-smoking' value='no'>
            <label for="input-smoking" class="form-check-label">
                No
            </label>
        </div>
    </div>

    <div class="row required" style='margin-top: 20px;'>
        <div class="col-sm-4 offset-sm-2">
            <label>Do you own a swimming pool?</label>
        </div>
        <span class="col-sm-2 align-middle">
            <input class='form-check-input' type='radio' name='pool' id='input-pool' value='yes'>
            <label for="input-pool" class="form-check-label">
                Yes
            </label>
        </span>
        <div class="col-sm-2">
            <input class='form-check-input' type='radio' name='pool' id='input-pool' value='no'>
            <label for="input-pool" class="form-check-label">
                No
            </label>
        </div>
    </div>
    <div class="row required" style='margin-top: 20px;'>
        <div class="col-sm-4 offset-sm-2">
            <label>If so, is it fenced separately from the yard?</label>
        </div>
        <span class="col-sm-2 align-middle">
            <input class='form-check-input' type='radio' name='pool-fence' id='input-pool-fence' value='yes'>
            <label for="input-pool-fence" class="form-check-label">
                Yes
            </label>
        </span>
        <div class="col-sm-2">
            <input class='form-check-input' type='radio' name='pool-fence' id='input-pool-fence' value='no'>
            <label for="input-pool-fence" class="form-check-label">
                No
            </label>
        </div>
    </div>

    <div class="row required" style='margin-top: 20px;'>
        <div class="col-sm-4 offset-sm-2">
            <label for='existing-deposit'>Have you put a deposit on a puppy with anyone else at this time? If so who?</label>
        </div>
        <span class="col-sm-2 align-top">
            <input class='form-input' type='text' name='existing-deposit' id='existing-deposit' /'>
        </span>
    </div>

    <div class="row required" style='margin-top: 20px;'>
        <div class="col-sm-4 offset-sm-2">
            <label>Do you own your own home or do you rent?</label>
        </div>
        <span class="col-sm-2 align-middle">
            <input class='form-check-input' type='radio' name='own-or-rent' id='input-own-or-rent' value='Rent'>
            <label for="input-own-or-rent" class="form-check-label">
                Rent
            </label>
        </span>
        <div class="col-sm-2">
            <input class='form-check-input' type='radio' name='own-or-rent' id='input-own-or-rent' value='Own'>
            <label for="input-own-or-rent" class="form-check-label">
                Own
            </label>
        </div>
    </div>
    <div class="row required" style='margin-top: 20px;'>
        <div class="col-sm-4 offset-sm-2">
            <label>If you rent, does your landlord allow dogs?</label>
        </div>
        <span class="col-sm-2 align-middle">
            <input class='form-check-input' type='radio' name='dogs-allowed' id='input-dogs-allowed' value='yes'>
            <label for="input-dogs-allowed" class="form-check-label">
                Yes
            </label>
        </span>
        <div class="col-sm-2">
            <input class='form-check-input' type='radio' name='dogs-allowed' id='input-dogs-allowed' value='no'>
            <label for="input-dogs-allowed" class="form-check-label">
                No
            </label>
        </div>
        <div class="col-sm-2">
            <input class='form-check-input' type='radio' name='dogs-allowed' id='input-dogs-allowed' value='not-applicable'>
            <label for="input-dogs-allowed" class="form-check-label">
                N/A
            </label>
        </div>
    </div>

    <div class="row required" style='margin-top: 20px;'>
        <div class="col-sm-4 offset-sm-2">
            <label>Have you owned a dog before?</label>
        </div>
        <span class="col-sm-2 align-middle">
            <input class='form-check-input' type='radio' name='previous-dog' id='input-previous-dog' value='yes'>
            <label for="input-previous-dog" class="form-check-label">
                Yes
            </label>
        </span>
        <div class="col-sm-2">
            <input class='form-check-input' type='radio' name='previous-dog' id='input-previous-dog' value='no'>
            <label for="input-previous-dog" class="form-check-label">
                No
            </label>
        </div>
    </div>
    <div class="row required" style='margin-top: 20px;'>
        <div class="col-sm-4 offset-sm-2">
            <label for='previous-dog-details'>What breed/type did you own and what happened to them?</label>
        </div>
        <span class="col-sm-2 align-top">
            <input class='form-input' type='text' name='previous-dog-details' id='previous-dog-details' /'>
        </span>
    </div>

    <div class="row required">
        <div class="col-sm-2 offset-sm-2">
            <label class="form-label">Do you currently have any pets (and age)?</label>
        </div>
        <div class="col-sm-6" id='pet-list'>
            <div class="input-group">
                <input type="text" class="form-control" name="pet-member-[][pet]" placeholder="Pet" />
                <input type="text" class="form-control" name="pet-member-[][age]" placeholder="Age" />
            </div>
        </div>
        <div class="col-sm-2" style='margin-top: 10px;'>
            <a class="btn btn-primary" id="add-pet-btn" onclick="addPet();"><i class="fa fa-lg fa-plus-circle"></i></a>
        </div>
    </div>

    <div class="row required" style='margin-top: 20px;'>
        <div class="col-sm-4 offset-sm-2">
            <label>Will they adapt to another animal in the family?</label>
        </div>
        <span class="col-sm-2 align-middle">
            <input class='form-check-input' type='radio' name='pet-adapt' id='input-pet-adapt' value='yes'>
            <label for="input-pet-adapt" class="form-check-label">
                Yes
            </label>
        </span>
        <div class="col-sm-2">
            <input class='form-check-input' type='radio' name='pet-adapt' id='input-pet-adapt' value='no'>
            <label for="input-pet-adapt" class="form-check-label">
                No
            </label>
        </div>
    </div>

    <div class="row required" style='margin-top: 20px;'>
        <div class="col-sm-4 offset-sm-2">
            <label for='decision-details'>How did you decide on a Golden Retriever?</label>
        </div>
        <span class="col-sm-2 align-top">
            <input class='form-input' type='text' name='decision-details' id='decision-details' /'>
        </span>
    </div>
    <div class="row required" style='margin-top: 20px;'>
        <div class="col-sm-4 offset-sm-2">
            <label for='why-details'>Why do you want a puppy?</label>
        </div>
        <span class="col-sm-2 align-top">
            <input class='form-input' type='text' name='why-details' id='why-details' /'>
        </span>
    </div>
    <div class="row required" style='margin-top: 20px;'>
        <div class="col-sm-4 offset-sm-2">
            <label for='dont-work'>What will you do with the puppy if it does not work out for you?</label>
        </div>
        <span class="col-sm-2 align-top">
            <input class='form-input' type='text' name='dont-work' id='dont-work' /'>
        </span>
    </div>

    <div class="row required" style='margin-top: 20px;'>
        <div class="col-sm-4 offset-sm-2">
            <label>Do you agree that if at any time you are unable to keep your puppy or dog, for whatever reason, you will need to return the puppy/dog to Farrah’s Goldens and we will find place him/her in a suitable home?</label>
        </div>
        <span class="col-sm-2 align-middle">
            <input class='form-check-input' type='radio' name='return-agreement' id='input-return-agreement' value='yes'>
            <label for="input-return-agreement" class="form-check-label">
                I agree
            </label>
        </span>
        <div class="col-sm-2">
            <input class='form-check-input' type='radio' name='return-agreement' id='input-return-agreement' value='no'>
            <label for="input-return-agreement" class="form-check-label">
                I do not agree
            </label>
        </div>
    </div>

    <div class="row required" style='margin-top: 20px;'>
        <div class="col-sm-4 offset-sm-2">
            <label for='live'>Where will your dog live? </label>
        </div>
        <span class="col-sm-2 align-top">
            <input class='form-input' type='text' name='live' id='live' /'>
        </span>
    </div>
    <div class="row required" style='margin-top: 20px;'>
        <div class="col-sm-4 offset-sm-2">
            <label for='sleep'>Sleep?</label>
        </div>
        <span class="col-sm-2 align-top">
            <input class='form-input' type='text' name='sleep' id='sleep' /'>
        </span>
    </div>
    <div class="row required" style='margin-top: 20px;'>
        <div class="col-sm-4 offset-sm-2">
            <label for='eat'>Eat?</label>
        </div>
        <span class="col-sm-2 align-top">
            <input class='form-input' type='text' name='eat' id='eat' /'>
        </span>
    </div>
    <div class="row required" style='margin-top: 20px;'>
        <div class="col-sm-4 offset-sm-2">
            <label for='play'>Play?</label>
        </div>
        <span class="col-sm-2 align-top">
            <input class='form-input' type='text' name='play' id='play' /'>
        </span>
    </div>

    <div class="row required" style='margin-top: 20px;'>
        <div class="col-sm-4 offset-sm-2">
            <label>Do you have a fenced yard, or fenced exercise play area for your dog?</label>
        </div>
        <span class="col-sm-2 align-middle">
            <input class='form-check-input' type='radio' name='fenced-yard' id='input-fenced-yard' value='yes'>
            <label for="input-fenced-yard" class="form-check-label">
                Yes
            </label>
        </span>
        <div class="col-sm-2">
            <input class='form-check-input' type='radio' name='fenced-yard' id='input-fenced-yard' value='no'>
            <label for="input-fenced-yard" class="form-check-label">
                No
            </label>
        </div>
    </div>
    <div class="row required" style='margin-top: 20px;'>
        <div class="col-sm-4 offset-sm-2">
            <label>If not, are you willing to construct one of these before puppy comes to live with you?</label>
        </div>
        <span class="col-sm-2 align-middle">
            <input class='form-check-input' type='radio' name='fence-construction' id='input-fence-construction' value='yes'>
            <label for="input-fence-construction" class="form-check-label">
                Yes
            </label>
        </span>
        <div class="col-sm-2">
            <input class='form-check-input' type='radio' name='fence-construction' id='input-fence-construction' value='no'>
            <label for="input-fence-construction" class="form-check-label">
                No
            </label>
        </div>
        <div class="col-sm-2">
            <input class='form-check-input' type='radio' name='fence-construction' id='input-fence-construction' value='not-applicable'>
            <label for="input-fence-construction" class="form-check-label">
                My yard is fenced.
            </label>
        </div>
    </div>

    <div class="row required" style='margin-top: 20px;'>
        <div class="col-sm-4 offset-sm-2">
            <label>Do you know that we will not allow a puppy obtained from us to be tied (bred) in any manner?</label>
        </div>
        <span class="col-sm-2 align-middle">
            <input class='form-check-input' type='radio' name='no-breed-agree' id='input-no-breed-agree' value='yes'>
            <label for="input-no-breed-agree" class="form-check-label">
                Yes
            </label>
        </span>
        <div class="col-sm-2">
            <input class='form-check-input' type='radio' name='no-breed-agree' id='input-no-breed-agree' value='no'>
            <label for="input-no-breed-agree" class="form-check-label">
                No
            </label>
        </div>
    </div>

    <div class="row required" style='margin-top: 20px;'>
        <div class="col-sm-4 offset-sm-2">
            <label>Do you understand that Goldens thrive on human attention and cannot be isolated from the rest of the family?</label>
        </div>
        <span class="col-sm-2 align-middle">
            <input class='form-check-input' type='radio' name='no-isolation' id='input-no-isolation' value='yes'>
            <label for="input-no-isolation" class="form-check-label">
                Yes
            </label>
        </span>
        <div class="col-sm-2">
            <input class='form-check-input' type='radio' name='no-isolation' id='input-no-isolation' value='no'>
            <label for="input-no-isolation" class="form-check-label">
                No
            </label>
        </div>
    </div>

    <div class="row required" style='margin-top: 20px;'>
        <div class="col-sm-4 offset-sm-2">
            <label>Do you understand that a puppy purchased from us must be a part of the family and not be a dog that lives outdoors all the time?</label>
        </div>
        <span class="col-sm-2 align-middle">
            <input class='form-check-input' type='radio' name='no-outdoors' id='input-no-outdoors' value='yes'>
            <label for="input-no-outdoors" class="form-check-label">
                Yes
            </label>
        </span>
        <div class="col-sm-2">
            <input class='form-check-input' type='radio' name='no-outdoors' id='input-no-outdoors' value='no'>
            <label for="input-no-outdoors" class="form-check-label">
                No
            </label>
        </div>
    </div>

    <div class="row" style='margin-top: 20px;'>
        <div class="col-sm-4 offset-sm-2">
            <label for='vet-name'>What Veterinarian do you plan to use?</label>
        </div>
        <span class="col-sm-6 align-top">
            <input class='form-input' type='text' name='vet-name' id='vet-name' placeholder="Name" /'>
            <input class='form-input' type='text' name='vet-address' id='vet-address' placeholder="Address" /'>
            <input class='form-input' type='text' name='vet-phone' id='vet-phone' placeholder="Phone" /'>
        </span>
    </div>

    <div class="row" style='margin-top: 20px;'>
        <div class="col-sm-10 offset-sm-2">
            <label'>Please list 2 references of people that know you, your family/work life, and any past relationships with pets (with address/phone #’s).</label>
        </div>
    </div>
    <div class="row" style='margin-top: 20px;'>
        <div class="col-sm-4 offset-sm-2">
            <label for='ref1-name'>Reference 1: </label>
        </div>
        <span class="col-sm-6 align-top">
            <input class='form-input' type='text' name='ref1-name' id='ref1-name' placeholder="Name" /'>
            <input class='form-input' type='text' name='ref1-address' id='ref1-address' placeholder="Address" /'>
            <input class='form-input' type='text' name='ref1-phone' id='ref1-phone' placeholder="Phone" /'>
        </span>
    </div>
    <div class="row" style='margin-top: 20px;'>
        <div class="col-sm-4 offset-sm-2">
            <label for='ref2-name'>Reference 2: </label>
        </div>
        <span class="col-sm-6 align-top">
            <input class='form-input' type='text' name='ref2-name' id='ref2-name' placeholder="Name" /'>
            <input class='form-input' type='text' name='ref2-address' id='ref2-address' placeholder="Address" /'>
            <input class='form-input' type='text' name='ref2-phone' id='ref2-phone' placeholder="Phone" /'>
        </span>
    </div>

    <div class="row required" style='margin-top: 20px;'>
        <div class="col-sm-4 offset-sm-2">
            <label>Do you plan on using a crate to help house-train your pup?</label>
        </div>
        <span class="col-sm-2 align-middle">
            <input class='form-check-input' type='radio' name='crate' id='input-crate' value='yes'>
            <label for="input-crate" class="form-check-label">
                Yes
            </label>
        </span>
        <div class="col-sm-2">
            <input class='form-check-input' type='radio' name='crate' id='input-crate' value='no'>
            <label for="input-crate" class="form-check-label">
                No
            </label>
        </div>
    </div>
    <div class="row required" style='margin-top: 20px;'>
        <div class="col-sm-4 offset-sm-2">
            <label for='crate-alternative'>If not, how do you plan on house-training?</label>
        </div>
        <span class="col-sm-2 align-top">
            <input class='form-input' type='text' name='crate-alternative' id='crate-alternative' /'>
        </span>
    </div>

    <div class="row required" style='margin-top: 20px;'>
        <div class="col-sm-4 offset-sm-2">
            <label for='caregiver'>Who will be responsible for the care, grooming, and training of your dog?</label>
        </div>
        <span class="col-sm-2 align-top">
            <input class='form-input' type='text' name='caregiver' id='caregiver' /'>
        </span>
    </div>
    <div class="row required" style='margin-top: 20px;'>
        <div class="col-sm-4 offset-sm-2">
            <label for='training'>Are you interested in doing any other type of training with your dog? (Obedience, Agility, Hunt Trials, Therapy?)</label>
        </div>
        <span class="col-sm-2 align-top">
            <input class='form-input' type='text' name='training' id='training' /'>
        </span>
    </div>

    <div class="row required" style='margin-top: 20px;'>
        <div class="col-sm-4 offset-sm-2">
            <label for='family-details'>Briefly tell us about your family’s lifestyle, hobbies, and interests:</label>
        </div>
        <span class="col-sm-6 align-top">
            <textarea style="margin-left: 11px; width: 90%;" class='form-input' rows="3" name='family-details' id='family-details'></textarea>
        </span>
    </div>

    <div class="row required" style='margin-top: 20px;'>
        <div class="col-sm-4 offset-sm-2">
            <label for='pet-attributes'>Briefly tell us the attributes you would like your puppy/dog to possess?</label>
        </div>
        <span class="col-sm-6 align-top">
            <textarea style="margin-left: 11px; width: 90%;" class='form-input' rows="3" name='pet-attributes' id='pet-attributes'></textarea>
        </span>
    </div>

    <div class="row required" style='margin-top: 20px;'>
        <div class="col-sm-4 offset-sm-2">
            <label for='breeder-expectations'>What do you expect from us, the breeders of your pup?</label>
        </div>
        <span class="col-sm-6 align-top">
            <textarea style="margin-left: 11px; width: 90%;" class='form-input' rows="3" name='breeder-expectations' id='breeder-expectations'></textarea>
        </span>
    </div>

    <div class="row required" style='margin-top: 20px;'>
        <div class="col-sm-4 offset-sm-2">
            <label>Are you prepared to feed a premium dog food to your dog?</label>
        </div>
        <span class="col-sm-2 align-middle">
            <input class='form-check-input' type='radio' name='dog-food' id='input-dog-food' value='yes'>
            <label for="input-dog-food" class="form-check-label">
                Yes
            </label>
        </span>
        <div class="col-sm-2">
            <input class='form-check-input' type='radio' name='dog-food' id='input-dog-food' value='no'>
            <label for="input-dog-food" class="form-check-label">
                No
            </label>
        </div>
    </div>

    <div class="row required" style='margin-top: 20px;'>
        <div class="col-sm-4 offset-sm-2">
            <label>Do you understand that your dog must be neutered/spayed?</label>
        </div>
        <span class="col-sm-2 align-middle">
            <input class='form-check-input' type='radio' name='neutered' id='input-neutered' value='yes'>
            <label for="input-neutered" class="form-check-label">
                Yes
            </label>
        </span>
        <div class="col-sm-2">
            <input class='form-check-input' type='radio' name='neutered' id='input-neutered' value='no'>
            <label for="input-neutered" class="form-check-label">
                No
            </label>
        </div>
    </div>

    <div class="row required" style='margin-top: 20px;'>
        <div class="col-sm-4 offset-sm-2">
            <label>Do you understand that we sell all our puppies on a non-breeding contract so it may not be bred unless this contract is removed by mutual consent?</label>
        </div>
        <span class="col-sm-2 align-middle">
            <input class='form-check-input' type='radio' name='breeding-contract' id='input-breeding-contract' value='yes'>
            <label for="input-breeding-contract" class="form-check-label">
                Yes
            </label>
        </span>
        <div class="col-sm-2">
            <input class='form-check-input' type='radio' name='breeding-contract' id='input-breeding-contract' value='no'>
            <label for="input-breeding-contract" class="form-check-label">
                No
            </label>
        </div>
    </div>

    <div class="row required" style='margin-top: 20px;'>
        <div class="col-sm-4 offset-sm-2">
            <label>Will you allow a home visit by the breeder or breeder’s representative (if too far away) before a puppy is placed in your home?</label>
        </div>
        <span class="col-sm-2 align-middle">
            <input class='form-check-input' type='radio' name='home-visit' id='input-home-visit' value='yes'>
            <label for="input-home-visit" class="form-check-label">
                Yes
            </label>
        </span>
        <div class="col-sm-2">
            <input class='form-check-input' type='radio' name='home-visit' id='input-home-visit' value='no'>
            <label for="input-home-visit" class="form-check-label">
                No
            </label>
        </div>
    </div>

    <div class="row required" style='margin-top: 20px;'>
        <div class="col-sm-4 offset-sm-2">
            <label for='referral'>How did you hear about us?</label>
        </div>
        <span class="col-sm-2 align-top">
            <input class='form-input' type='text' name='referral' id='referral' /'>
        </span>
    </div>

    <div class="row required" style='margin-top: 20px;'>
        <div class="col-sm-10 offset-sm-2">
            <label for='agree'>I agree to all conditions and state that the information provided is true and accurate.</label>
            <span class="align-top">
                <input class='form-input' type='checkbox' name='agree' id='agree' value="agree" /'>
            </span>
        </div>
    </div>

    <div class="row required" style='margin-top: 20px;'>
        <div class="col-sm-6 offset-sm-2">
            <label for="signed-name">Name: </label>
            <input type='text' style="width: 200px;" name='signed-name' id='signed-name' class='form-input' />
            <label for="signed-date">Date: </label>
            <input type='text' style="width: 200px;" name='signed-date' id='signed-date' class='form-input' />
        </div>
        <div class="col-sm-2">
            <div class="g-recaptcha" data-sitekey="6Ldf-NocAAAAALj9wvyreArkx47p889RpqZVtjvG"></div>
            <button type="submit" style="width: 200px;" class="btn btn-primary mx-auto">Submit</button>
        </div>
    </div>
    </div>
</form>


<script>
    const addFamilyMember = () => {
        $('#family-list').append('<div class=" input-group"><input type="text" class="form-control" name="family-member-[][name]" placeholder="Name" /><input type="text" class="form-control" name="family-member-[][age]" placeholder="Age" /></div >');
    }
    const addPet = () => {
        $('#pet-list').append('<div class="input-group"><input type="text" class="form-control" name="pet-member-[][pet]" placeholder="Pet" /><input type="text" class="form-control" name="pet-member-[][age]" placeholder="Age" /></div>');
    }
    $('#signed-date').datepicker({
        beforeShow: function(textbox, instance) {
            var txtBoxOffset = $(this).offset();
            var top = txtBoxOffset.top;
            var left = txtBoxOffset.left;
            var textBoxWidth = $(this).outerWidth();
            console.log('top: ' + top + 'left: ' + left);
            setTimeout(function() {
                instance.dpDiv.css({
                    top: top - 240, //you can adjust this value accordingly
                    left: left //show at the end of textBox
                });
            }, 0);

        }
    });
</script>
